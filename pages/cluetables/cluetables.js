const clueTiers = ["easy", "medium", "hard"];
let dropTablesCache = null;
let listenersInitialized = false;

function ucFirst(word) {
    return word.charAt(0).toUpperCase() + word.slice(1);
}

function getSharedTableTitle(tableName, sharedTables = dropTablesCache.shared_tables) {
    if (!tableName) return "Shared Table";
    const sharedTable = sharedTables[tableName];
    if (sharedTable && sharedTable.title) return sharedTable.title;
    return tableName.split("_").filter(Boolean).map(ucFirst).join(" ");
}

function formatRollsLabel(minRolls, maxRolls) {
    if (minRolls === maxRolls) return `(${minRolls} roll${minRolls === 1 ? "" : "s"})`;
    return `(${minRolls}-${maxRolls} rolls)`;
}

function createTableStructure(container, titleText) {
    let table = container.querySelector("table");
    if (!table) {
        table = document.createElement("table");
        table.className = "table";
        table.width = "100%";

        const thead = document.createElement("thead");
        const titleRow = document.createElement("tr");
        const titleTh = document.createElement("th");
        titleTh.colSpan = 4;
        titleRow.appendChild(titleTh);
        thead.appendChild(titleRow);

        const columnsRow = document.createElement("tr");
        const columnLabels = ["Item", "Quantity", "Chance per Roll", "Average chance per Casket"];
        columnLabels.forEach((label) => {
            const th = document.createElement("th");
            th.textContent = label;
            columnsRow.appendChild(th);
        });
        thead.appendChild(columnsRow);

        const tbody = document.createElement("tbody");

        table.append(thead, tbody);
        container.append(document.createElement("br"), table);
    }

    const titleTh = table.querySelector("thead tr th[colspan]");
    titleTh.textContent = titleText;

    return table;
}

function parseQuantitySpec(value) {
    if (typeof value === "number") return { min: value, max: value, text: String(value) };

    if (typeof value === "string") {
        const parts = value.split("-").map((part) => part.trim());
        if (parts.length === 2 && parts[0] && parts[1]) {
            return { min: parts[0], max: parts[1], text: `${parts[0]}-${parts[1]}` };
        }
        return { min: value, max: value, text: value };
    }

    return { min: 1, max: 1, text: "1" };
}

function probabilityToOneIn(probability) {
    if (probability <= 0) return "N/A";
    const denominator = 1 / probability;
    const rounded = Math.round(denominator);
    return Math.abs(denominator - rounded) < 1e-10 ? `1/${rounded}` : `1/${denominator.toFixed(2)}`;
}

function openingChanceText(perRollChance, minRolls, maxRolls) {
    const assumedRollCount = (minRolls + maxRolls) / 2;
    const openingChance = 1 - Math.pow(1 - perRollChance, assumedRollCount);
    return probabilityToOneIn(openingChance);
}

function countRollItems(roll) {
    let count = 0;
    for (const drop of roll) count += Object.keys(drop).length;
    return count;
}

function buildRewardRows(rolls, sharedTables, perPoolChance, tierName, minRolls, maxRolls, isRare) {
    const rollCount = rolls.length;
    if (rollCount === 0 || perPoolChance === 0) return [];

    const rewards = [];
    const perRollChance = perPoolChance * (1 / rollCount);

    for (const roll of rolls) {
        const rollGroupSize = countRollItems(roll);
        let rollGroupIndex = 0;
        for (const drop of roll) {
            for (const [rewardName, quantitySpec] of Object.entries(drop)) {
                const quantity = parseQuantitySpec(quantitySpec);
                const isSharedTable = rewardName.startsWith("~");
                const sharedTableName = isSharedTable ? rewardName.slice(1) : "";
                const sharedTableTitle = isSharedTable ? getSharedTableTitle(sharedTableName, sharedTables) : "";

                rewards.push({
                    difficulty: tierName,
                    reward_name: isSharedTable ? sharedTableName : rewardName,
                    display_name: isSharedTable ? sharedTableTitle : rewardName,
                    display_item: isSharedTable ? sharedTables[sharedTableName].display : "",
                    shared_table_name: isSharedTable ? sharedTableName : "",
                    shared_table_title: isSharedTable ? sharedTableTitle : "",
                    quantity_min: String(quantity.min),
                    quantity_max: String(quantity.max),
                    quantity_text: quantity.text,
                    per_roll_chance: perRollChance,
                    min_rolls: minRolls,
                    max_rolls: maxRolls,
                    root_min_rolls: minRolls,
                    root_max_rolls: maxRolls,
                    is_rare: isRare,
                    is_shared_table: isSharedTable ? "1" : "0",
                    roll_group_size: rollGroupSize,
                    roll_group_index: rollGroupIndex,
                });

                rollGroupIndex += 1;
            }
        }
    }

    return rewards;
}

function sharedTableContainsTerm(tableName, searchTerm, visited = new Set()) {
    const sharedTables = dropTablesCache.shared_tables;
    const sharedTable = sharedTables[tableName];
    const normalizedName = tableName.toLowerCase();
    const displayName = getSharedTableTitle(tableName, sharedTables).toLowerCase();
    if (normalizedName.includes(searchTerm) || displayName.includes(searchTerm)) return true;

    if (visited.has(tableName)) return false;
    visited.add(tableName);

    const rolls = sharedTable.rewards;
    for (const roll of rolls) {
        for (const drop of roll) {
            for (const rewardName of Object.keys(drop)) {
                const cleanRewardName = rewardName.startsWith("~") ? rewardName.slice(1) : rewardName;
                const nestedTitle = getSharedTableTitle(cleanRewardName, sharedTables).toLowerCase();
                if (cleanRewardName.toLowerCase().includes(searchTerm) || nestedTitle.includes(searchTerm)) return true;

                if (rewardName.startsWith("~") && sharedTableContainsTerm(cleanRewardName, searchTerm, visited)) {
                    return true;
                }
            }
        }
    }

    return false;
}

function ensureSharedTableModal() {
    let modal = document.getElementById("clueSharedTableModal");
    if (modal) return modal;

    modal = document.createElement("div");
    modal.id = "clueSharedTableModal";
    modal.className = "modal";
    modal.style.display = "none";
    modal.innerHTML = `
        <div class="modal-content">
            <span class="close" aria-label="Close shared table modal">&times;</span>
            <h2 id="clueSharedTableModalTitle"></h2>
            <div id="clueSharedTableModalBody"></div>
        </div>
    `;

    const closeButton = modal.querySelector(".close");
    closeButton.addEventListener("click", closeSharedTableModal);

    modal.addEventListener("click", (event) => {
        if (event.target === modal) {
            closeSharedTableModal();
        }
    });

    document.body.appendChild(modal);
    return modal;
}

function closeSharedTableModal() {
    const modal = document.getElementById("clueSharedTableModal");
    modal.style.display = "none";
}

function createSharedTableDisplayLink(label, displayItem, onClick) {
    const wrapper = document.createElement("div");
    wrapper.style.display = "flex";
    wrapper.style.alignItems = "center";
    wrapper.style.justifyContent = "center";
    wrapper.style.gap = "5px";

    if (displayItem) {
        const canvas = document.createElement("canvas");
        canvas.setAttribute("itemname", displayItem.toLowerCase());
        wrapper.appendChild(canvas);
    }

    const link = document.createElement("a");
    link.href = "#";
    link.className = "clickable-item";
    link.textContent = label;
    link.addEventListener("click", (event) => {
        event.preventDefault();
        onClick();
    });

    wrapper.appendChild(link);
    return wrapper;
}

function renderSharedTableModalRow(rowData, rootMinRolls, rootMaxRolls, chainPath) {
    const row = document.createElement("tr");

    const itemTd = document.createElement("td");
    const quantityTd = document.createElement("td");
    quantityTd.textContent = rowData.quantity_text || (rowData.quantity_min === rowData.quantity_max ? rowData.quantity_min : `${rowData.quantity_min}-${rowData.quantity_max}`);

    const rowLabel = rowData.is_shared_table == "1" ? rowData.display_name : rowData.reward_name;

    if (rowData.is_shared_table == "1") {
        const wrapper = createSharedTableDisplayLink(rowLabel, rowData.display_item, () => {
            openSharedTableModal(rowData.shared_table_name, {
                parentChance: rowData.per_roll_chance,
                rootMinRolls,
                rootMaxRolls,
                chainPath,
            });
        });
        itemTd.appendChild(wrapper);
    } else {
        const wrapper = document.createElement("div");
        wrapper.style.display = "flex";
        wrapper.style.alignItems = "center";
        wrapper.style.justifyContent = "center";
        wrapper.style.gap = "5px";

        const canvas = document.createElement("canvas");
        canvas.setAttribute("itemname", rowData.reward_name);
        canvas.setAttribute("show-label", "inline");
        canvas.setAttribute("amount", rowData.quantity_min);
        wrapper.appendChild(canvas);
        itemTd.appendChild(wrapper);
    }

    if (rowData.is_rare == "1") {
        itemTd.classList.add("rare");
        quantityTd.classList.add("rare");
    }

    row.append(itemTd, quantityTd);

    const groupIndex = Number(rowData.roll_group_index ?? 0);
    const groupSize = Number(rowData.roll_group_size ?? 1);
    if (groupIndex === 0) {
        const perRollTd = document.createElement("td");
        const perCasketTd = document.createElement("td");
        perRollTd.rowSpan = groupSize;
        perCasketTd.rowSpan = groupSize;

        perRollTd.textContent = probabilityToOneIn(rowData.per_roll_chance);
        perCasketTd.textContent = openingChanceText(rowData.per_roll_chance, rootMinRolls, rootMaxRolls);

        if (rowData.is_rare == "1") {
            perRollTd.classList.add("rare");
            perCasketTd.classList.add("rare");
        }

        row.append(perRollTd, perCasketTd);
    }

    return row;
}

function openSharedTableModal(sharedTableName, options = {}) {
    const sharedTables = dropTablesCache.shared_tables;

    const modal = ensureSharedTableModal();
    const modalTitle = modal.querySelector("#clueSharedTableModalTitle");
    const modalBody = modal.querySelector("#clueSharedTableModalBody");

    const parentChance = options.parentChance ?? 1;
    const rootMinRolls = options.rootMinRolls ?? 1;
    const rootMaxRolls = options.rootMaxRolls ?? rootMinRolls;
    const chainPath = options.chainPath ?? [];
    const currentLabel = getSharedTableTitle(sharedTableName, sharedTables);
    const titlePath = chainPath.length > 0 ? `${chainPath.join(" → ")} → ${currentLabel}` : currentLabel;

    modalTitle.textContent = titlePath;
    modalBody.replaceChildren();

    const table = document.createElement("table");
    table.className = "table";
    table.width = "100%";

    const thead = document.createElement("thead");
    const headRow = document.createElement("tr");
    ["Item", "Quantity", "Chance per Roll", "Average chance per Casket"].forEach((label) => {
        const th = document.createElement("th");
        th.textContent = label;
        headRow.appendChild(th);
    });
    thead.appendChild(headRow);
    table.appendChild(thead);

    const tbody = document.createElement("tbody");
    table.appendChild(tbody);
    modalBody.appendChild(table);

    function renderSharedTableRows(tableName, currentParentChance, currentChainPath) {
        const tableData = sharedTables[tableName];
        const rolls = tableData.rewards;
        const rollCount = rolls.length;

        if (rollCount === 0) return;

        const rowChance = currentParentChance * (1 / rollCount);

        for (const roll of rolls) {
            const rollGroupSize = countRollItems(roll);
            let rollGroupIndex = 0;
            for (const drop of roll) {
                for (const [rewardName, quantitySpec] of Object.entries(drop)) {
                    const quantity = parseQuantitySpec(quantitySpec);
                    const isSharedTable = rewardName.startsWith("~");
                    const nestedTableName = isSharedTable ? rewardName.slice(1) : "";
                    const nestedTableTitle = isSharedTable ? getSharedTableTitle(nestedTableName, sharedTables) : "";

                    const rowData = {
                        reward_name: isSharedTable ? nestedTableName : rewardName,
                        display_name: isSharedTable ? nestedTableTitle : rewardName,
                        display_item: isSharedTable ? sharedTables[nestedTableName].display : "",
                        shared_table_name: isSharedTable ? nestedTableName : "",
                        shared_table_title: isSharedTable ? nestedTableTitle : "",
                        quantity_min: String(quantity.min),
                        quantity_max: String(quantity.max),
                        quantity_text: quantity.text,
                        per_roll_chance: rowChance,
                        is_rare: "0",
                        is_shared_table: isSharedTable ? "1" : "0",
                        roll_group_size: rollGroupSize,
                        roll_group_index: rollGroupIndex,
                    };

                    const row = renderSharedTableModalRow(rowData, rootMinRolls, rootMaxRolls, currentChainPath);
                    tbody.appendChild(row);

                    rollGroupIndex += 1;
                }
            }
        }
    }

    renderSharedTableRows(sharedTableName, parentChance, [...chainPath, currentLabel]);
    modal.style.display = "block";

    window.safeRenderAllSprites();
}

function buildTierDrops(tierName, tierData, sharedTables) {
    const minRolls = Number(tierData.min_rolls);
    const maxRolls = Number(tierData.max_rolls);
    const rareChance = Number(tierData.rare_chance);
    const rewardsRolls = tierData.rewards;
    const rareRolls = tierData.rare_rewards;

    const perRollRareChance = rareChance > 0 ? 1 / rareChance : 0;
    const perRollNormalChance = 1 - perRollRareChance;

    return [
        ...buildRewardRows(rewardsRolls, sharedTables, perRollNormalChance, tierName, minRolls, maxRolls, "0"),
        ...buildRewardRows(rareRolls, sharedTables, perRollRareChance, tierName, minRolls, maxRolls, "1"),
    ];
}

async function fetchClueTables() {
    if (dropTablesCache) return dropTablesCache;

    const clueRewards = await fetch("/pages/cluetables/clue_rewards.json").then((resp) => resp.json());
    const sharedTables = clueRewards.shared;
    const tierMeta = {};
    const rewards = clueTiers.flatMap((difficulty) => {
        const tierData = clueRewards[difficulty];
        const minRolls = Number(tierData.min_rolls);
        const maxRolls = Number(tierData.max_rolls);

        tierMeta[difficulty] = { min_rolls: minRolls, max_rolls: maxRolls };
        return buildTierDrops(difficulty, tierData, sharedTables);
    });

    dropTablesCache = {
        rewards,
        tier_meta: tierMeta,
        shared_tables: sharedTables,
    };

    return dropTablesCache;
}

async function loadDropTables() {
    const clueTableData = await fetchClueTables();
    const allRewards = clueTableData.rewards;
    const searchTerm = document.getElementById("searchInput").value.trim().toLowerCase();
    const selectedTier = document.querySelector('input[name="clueTier"]:checked').value;
    const visibleTiers = searchTerm ? clueTiers : [selectedTier];

    clueTiers.forEach((tier) => {
        const container = document.querySelector(`.${tier}Table`);
        if (!container) return;

        const tierInfo = clueTableData.tier_meta[tier];
        const rollsLabel = formatRollsLabel(tierInfo.min_rolls, tierInfo.max_rolls);
        const titleText = `${ucFirst(tier)} Clue Rewards${rollsLabel ? ` ${rollsLabel}` : ""}`;
        const table = createTableStructure(container, titleText);
        const tbody = table.querySelector("tbody");

        tbody.replaceChildren();
        container.classList.toggle("hidden", !visibleTiers.includes(tier));
    });

    allRewards.forEach((drop) => {
        if (!visibleTiers.includes(drop.difficulty)) return;

        const searchTarget = drop.is_shared_table == "1" ? `${drop.shared_table_name || drop.reward_name} ${drop.display_name || ""}`.toLowerCase() : drop.reward_name.toLowerCase();
        if (searchTerm) {
            const matches = drop.is_shared_table == "1" ? searchTarget.includes(searchTerm) || sharedTableContainsTerm(drop.shared_table_name, searchTerm) : searchTarget.includes(searchTerm);
            if (!matches) return;
        }

        const row = document.createElement("tr");
        const imgTd = document.createElement("td");
        if (drop.is_shared_table == "1") {
            const label = drop.display_name || getSharedTableTitle(drop.shared_table_name || drop.reward_name);
            const wrapper = createSharedTableDisplayLink(label, drop.display_item, () => {
                openSharedTableModal(drop.shared_table_name, {
                    parentChance: drop.per_roll_chance,
                    rootMinRolls: drop.root_min_rolls,
                    rootMaxRolls: drop.root_max_rolls,
                    chainPath: [],
                });
            });
            imgTd.appendChild(wrapper);
        } else {
            const wrapper = document.createElement("div");
            wrapper.style.display = "flex";
            wrapper.style.alignItems = "center";
            wrapper.style.justifyContent = "center";
            wrapper.style.flexDirection = "column";

            const canvas = document.createElement("canvas");
            canvas.setAttribute("itemname", drop.reward_name);
            canvas.setAttribute("show-label", "inline");
            canvas.setAttribute("amount", drop.quantity_min);
            wrapper.appendChild(canvas);
            imgTd.appendChild(wrapper);
        }

        const qtyTd = document.createElement("td");
        qtyTd.textContent = drop.quantity_text || (drop.quantity_min === drop.quantity_max ? drop.quantity_min : `${drop.quantity_min}-${drop.quantity_max}`);

        if (drop.is_rare == "1") {
            imgTd.classList.add("rare");
            qtyTd.classList.add("rare");
        }

        row.append(imgTd, qtyTd);

        const groupIndex = Number(drop.roll_group_index ?? 0);
        const groupSize = Number(drop.roll_group_size ?? 1);
        if (groupIndex === 0) {
            const perRollTd = document.createElement("td");
            const perCasketTd = document.createElement("td");
            perRollTd.rowSpan = groupSize;
            perCasketTd.rowSpan = groupSize;
            perRollTd.textContent = probabilityToOneIn(drop.per_roll_chance);
            perCasketTd.textContent = openingChanceText(drop.per_roll_chance, drop.min_rolls, drop.max_rolls);

            if (drop.is_rare == "1") {
                perRollTd.classList.add("rare");
                perCasketTd.classList.add("rare");
            }

            row.append(perRollTd, perCasketTd);
        }

        const tbody = document.querySelector(`.${drop.difficulty}Table tbody`);
        tbody.appendChild(row);
    });
}

document.addEventListener("DOMContentLoaded", async () => {
    if (listenersInitialized) return;
    const searchInput = document.getElementById("searchInput");
    searchInput.disabled = false;

    searchInput.addEventListener("input", async () => {
        await loadDropTables();
        await window.safeRenderAllSprites();
    });

    document.querySelectorAll('input[name="clueTier"]').forEach((radio) => {
        radio.addEventListener("change", async () => {
            await loadDropTables();
            await window.safeRenderAllSprites();
        });
    });

    listenersInitialized = true;
    await loadDropTables();
    await window.safeRenderAllSprites();
});
