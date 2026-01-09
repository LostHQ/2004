let npcData = {};
let sharedDropTables = {};
let itemList = {};

const SHARED_TABLE_ICONS = {
    randomherb: "unidentified_guam",
    randomjewel: "uncut_dragonstone",
    ultrarare_getitem: "dragon_med_helm",
    megararetable: "dragonshield_a",
};

Promise.all([
    fetch(`js/npcdb/npc_data.json?v=${currentGameVer}`).then((res) => res.json()),
    fetch(`js/npcdb/shared_drops.json?v=${currentGameVer}`).then((res) => res.json()),
    fetch(`js/itemdb/item_data.json?v=${currentGameVer}`).then((res) => res.json()),
]).then(([npcDataJson, sharedDropTablesData, itemData]) => {
    npcData = npcDataJson;
    sharedDropTables = sharedDropTablesData;
    itemList = itemData.reduce((map, item) => {
        map[item.debugname] = item.name;
        return map;
    }, {});
    loadNPCFromURL();
});

function getNPCName(debugname) {
    if (typeof debugname === "object") {
        const npcObj = debugname;
        const name = npcObj.name || npcObj.debugname || "Unknown NPC";
        const vis = npcObj.vislevel || (npcObj.info && npcObj.info.vislevel);
        if (vis == 'hide') return name;
        return `${name} (level-${vis})`;
    }

    const npc = npcData[debugname];
    if (npc && npc.name) {
        const vis = npc.vislevel || (npc.info && npc.info.vislevel);
        if (vis == 'hide') return npc.name;
        return `${npc.name} (level-${vis})`;
    }

    return debugname;
}



function findNPC(npcName) {
    if (npcData[npcName]) {
        return npcData[npcName];
    }
    return null;
}

function getURLParameter(name) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(name);
}

function updateURL(npcName) {
    const url = new URL(window.location);
    if (npcName) {
        url.searchParams.set("npc", npcName);
    } else {
        url.searchParams.delete("npc");
    }
    window.history.pushState({}, "", url);
}

function loadNPCFromURL() {
    const npcFromURL = getURLParameter("npc");
    if (npcFromURL) {
        const npcData = findNPC(npcFromURL);
        if (npcData) {
            const npcSearch = document.getElementById("npcSearch");
            if (npcSearch) npcSearch.value = getNPCName(npcFromURL);
            renderDrops(npcData);
        }
    }
}

function renderDrops(npcData) {
    const container = document.getElementById("npc-container");
    const { drops } = npcData;
    const baseTitle = getNPCName(npcData);
    let html = "<h2>" + baseTitle + "</h2>";

    let guaranteedRows = [];
    let rollableRows = [];
    let tertiaryRows = [];


    if (drops) {
        if (drops.always && drops.always.length > 0) {
            drops.always.forEach((item) => {
                const [itemName, amount] = item.item;
                const note = item.note;
                const noteHtml = note ? `<span class="note-indicator" title="${note}">[?]</span>` : "";
                guaranteedRows.push({
                    html: `<tr>
                    <td colspan="2">
                    <div style="display: flex; align-items: center; justify-content: center; gap: 5px;">
                        <canvas itemname="${itemName}" amount="${amount}" show-label="inline"></canvas>${noteHtml}
                    </div>
                    </td>
                </tr>`,
                });
            });
        }

        if (drops.roll_table && drops.roll_table.length > 0) {
            const rollBase = drops.roll_base || 128;
            let totalUsedSlots = 0;

            for (const roll of drops.roll_table) {
                const chance = parseInt(roll.chance);
                totalUsedSlots += chance;

                if (roll.items && roll.items.count) {
                    const itemCount = roll.items.count;

                    for (let i = 0; i < itemCount; i++) {
                        const itemData = roll.items[i.toString()];
                        if (itemData) {
                            const [itemName, amount] = itemData.item;

                            let noteHtml = "";
                            if (itemData.note) {
                                noteHtml = `<span class="note-indicator" title="${itemData.note}">[?]</span>`;
                            } else if (i === 0 && roll.note) {
                                noteHtml = `<span class="note-indicator" title="${roll.note}">[?]</span>`;
                            }

                            const chanceCell = i === 0 ? `<td rowspan="${itemCount}">${calculateChance(roll.chance, rollBase)}</td>` : "";

                            rollableRows.push({
                                html: `<tr>
                                        <td>
                                            <div style="display: flex; align-items: center; justify-content: center; gap: 5px;">
                                                <canvas itemname="${itemName}" amount="${amount}" show-label="inline"></canvas>${noteHtml}
                                            </div>
                                        </td>
                                        <td>${amount.toLocaleString()}</td>
                                        ${chanceCell}
                                    </tr>`
                            });
                        }
                    }
                    continue;
                }

                const [itemName, amount] = roll.item;

                if (itemName.startsWith("~")) {
                    const sharedTableName = itemName.slice(1);
                    const sharedTable = sharedDropTables[sharedTableName];
                    if (sharedTable) {
                        const iconItem = SHARED_TABLE_ICONS[sharedTableName];
                        const iconHtml = iconItem ? `<canvas itemname="${iconItem}" amount="${amount}"></canvas>` : "";
                        const noteHtml = roll.note ? `<span class="note-indicator" title="${roll.note}">[?]</span>` : "";
                        rollableRows.push({
                            html: `<tr>
                            <td>
                                <div style="display: flex; align-items: center; justify-content: center; gap: 5px;">
                                ${iconHtml}
                                <span class="shared-table-toggle"
                                onclick="openSharedTableModal('${sharedTableName}', '${calculateChance(roll.chance, rollBase)}',
                                    '${npcData.name || "Unknown NPC"} (${calculateChance(roll.chance, rollBase)})')">${sharedTable.name || sharedTableName}</span>
                                    ${noteHtml}
                                </div>
                            </td>
                            <td>${calculateChance(roll.chance, rollBase)}</td>
                            </tr>`
                        });
                    }
                } else {
                    if (itemName.includes("aboveground =") && itemName.includes("underground =")) {
                        const parts = itemName.split("|").map((part) => part.trim());
                        let abovegroundItem = "";
                        let undergroundItem = "";

                        parts.forEach((part) => {
                            if (part.startsWith("aboveground =")) {
                                abovegroundItem = part.replace("aboveground =", "").trim();
                            } else if (part.startsWith("underground =")) {
                                undergroundItem = part.replace("underground =", "").trim();
                            }
                        });

                        const noteHtml = roll.note ? `<span class="note-indicator" title="${roll.note}">[?]</span>` : "";

                        rollableRows.push({
                            html: `<tr>
                                <td>
                                    <div style="display: flex; align-items: center; justify-content: center; gap: 5px;">
                                        <canvas itemname="${abovegroundItem}" amount="${amount}" show-label="inline"></canvas> or 
                                        <canvas itemname="${undergroundItem}" amount="${amount}" show-label="inline"></canvas>${noteHtml}
                                    </div>
                                </td>
                                <td>${calculateChance(roll.chance, rollBase)}</td>
                            </tr>`
                        });
                    } else {
                        const noteHtml = roll.note ? `<span class="note-indicator" title="${roll.note}">[?]</span>` : "";
                        rollableRows.push({
                            html: `<tr>
                                    <td>
                                        <div style="display: flex; align-items: center; justify-content: center; gap: 5px;">
                                            <canvas itemname="${itemName}" amount="${amount}" show-label="inline"></canvas>${noteHtml}
                                        </div>
                                    </td>
                                    <td>${calculateChance(roll.chance, rollBase)}</td>
                                </tr>`
                        });
                    }
                }
            }

            const nothingSlots = rollBase - totalUsedSlots;
            if (nothingSlots > 0) {
                rollableRows.push({
                    html: `<tr style="color: #888;">
                        <td style="font-style: italic; text-align: center;">Nothing</td>
                        <td>${calculateChance(nothingSlots, rollBase)}</td>
                        </tr>`
                });
            }
        }

        if (drops.tertiary) {
            const tertiaryData = Array.isArray(drops.tertiary) ? drops.tertiary : [drops.tertiary];

            tertiaryData.forEach((tertiary) => {
                const itemName = tertiary.item;
                const chance = tertiary.chance;
                const note = tertiary.note;

                let displayItemName = itemName;
                let nameAppend = "";

                if (itemName.startsWith("clue-")) {
                    const tier = itemName.replace("clue-", "");
                    if (tier === "easy") {
                        displayItemName = "trail_clue_easy_simple001";
                    } else if (tier === "medium") {
                        displayItemName = "trail_clue_medium_sextant001";
                    } else if (tier === "hard") {
                        displayItemName = "trail_clue_hard_sextant001";
                    }
                    const tierCapitalized = tier.charAt(0).toUpperCase() + tier.slice(1);
                    nameAppend = ` (${tierCapitalized})`;
                }

                const noteHtml = note ? `<span class="note-indicator" title="${note}">[?]</span>` : "";
                tertiaryRows.push({
                    html: `<tr>
                        <td>
                            <div style="display: flex; align-items: center; justify-content: center; gap: 5px;">
                                <canvas itemname="${displayItemName}" amount="1" show-label="inline"${nameAppend ? ` name-append="${nameAppend}"` : ""}></canvas>${noteHtml}
                            </div>
                        </td>
                        <td>${chance}</td>
                        </tr>`
                });
            });
        }
    }

    let hasContent = false;
    html += '<table class="table" width="100%">';
    if (guaranteedRows.length > 0) {
        html += '<tr><th colspan="2">Always Drops</th></tr>';
        guaranteedRows.forEach((r) => (html += r.html));
        hasContent = true;
    }

    if (rollableRows.length > 0) {
        html += '<tr><th colspan="3">Primary Drops</th></tr>';
        html += "<tr><th>Item</th><th>Chance</th></tr>";
        rollableRows.forEach((r) => (html += r.html));
        hasContent = true;
    }

    if (tertiaryRows.length > 0) {
        html += '<tr><th colspan="3">Tertiary Drops</th></tr>';
        html += "<tr><th>Item</th><th>Chance</th></tr>";
        tertiaryRows.forEach((r) => (html += r.html));
        hasContent = true;
    }

    if (!hasContent) {
        html += '<tr><td colspan="3">No drops found for this NPC.</td></tr>';
    }
    html += "</table>";

    container.innerHTML = html;

    window.safeRenderAllSprites();
}


function formatNumber(num) {
    return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function calculateChance(chanceValue, rollBase) {
    if (typeof chanceValue === "string" && (chanceValue.includes("/") || chanceValue === "Always")) {
        return chanceValue;
    }

    const chance = parseInt(chanceValue);
    if (isNaN(chance) || !rollBase) {
        return chanceValue;
    }
    let numerator = chance;
    let denominator = rollBase;

    function sievePrimes(n) {
        const limit = Math.max(2, Math.floor(n));
        const sieve = new Array(limit + 1).fill(true);
        sieve[0] = sieve[1] = false;
        const primes = [];
        for (let i = 2; i <= limit; i++) {
            if (sieve[i]) {
                primes.push(i);
                for (let j = i * i; j <= limit; j += i) sieve[j] = false;
            }
        }
        return primes;
    }

    const maxCheck = Math.min(numerator, denominator);
    const primes = sievePrimes(maxCheck);

    for (const p of primes) {
        while (numerator % p === 0 && denominator % p === 0) {
            numerator /= p;
            denominator /= p;
        }
        if (denominator === 1 || numerator === 1) break;
    }

    if (numerator === denominator) return "Always";

    return numerator === 1 ? `1/${formatNumber(denominator)}` : `${formatNumber(numerator)}/${formatNumber(denominator)}`;
}

function getRollBase(sharedTable) {
    const ringOfWealthCheckbox = document.getElementById("ringOfWealthCheckbox");
    const isRingOfWealthEquipped = ringOfWealthCheckbox && ringOfWealthCheckbox.checked;

    if (isRingOfWealthEquipped && sharedTable.roll_base_ring_of_wealth) {
        return sharedTable.roll_base_ring_of_wealth;
    }

    return sharedTable.roll_base || 128;
}

function calculateTotalChance(sharedTableChance, itemChance, rollBase) {
    let sharedNumerator, sharedDenominator;
    if (typeof sharedTableChance === "string" && sharedTableChance.includes("/")) {
        const parts = sharedTableChance.split("/");
        sharedNumerator = parseInt(parts[0].replace(/,/g, ""));
        sharedDenominator = parseInt(parts[1].replace(/,/g, ""));
    } else {
        const chance = parseInt(sharedTableChance);
        if (isNaN(chance)) return "Unknown";

        function gcd(a, b) {
            return b === 0 ? a : gcd(b, a % b);
        }
        const divisor = gcd(chance, rollBase);
        sharedNumerator = chance / divisor;
        sharedDenominator = rollBase / divisor;
    }

    let itemNumerator, itemDenominator;
    if (typeof itemChance === "string" && itemChance.includes("/")) {
        const parts = itemChance.split("/");
        itemNumerator = parseInt(parts[0].replace(/,/g, ""));
        itemDenominator = parseInt(parts[1].replace(/,/g, ""));
    } else {
        const chance = parseInt(itemChance);
        if (isNaN(chance)) return "Unknown";

        function gcd(a, b) {
            return b === 0 ? a : gcd(b, a % b);
        }
        const divisor = gcd(chance, rollBase);
        itemNumerator = chance / divisor;
        itemDenominator = rollBase / divisor;
    }

    const totalNumerator = sharedNumerator * itemNumerator;
    const totalDenominator = sharedDenominator * itemDenominator;

    function gcd(a, b) {
        return b === 0 ? a : gcd(b, a % b);
    }
    const finalDivisor = gcd(totalNumerator, totalDenominator);
    const finalNumerator = totalNumerator / finalDivisor;
    const finalDenominator = totalDenominator / finalDivisor;

    if (finalNumerator === finalDenominator) {
        return "Always";
    }

    const exactFraction = finalNumerator === 1 ? `1/${formatNumber(finalDenominator)}` : `${formatNumber(finalNumerator)}/${formatNumber(finalDenominator)}`;

    return exactFraction;
}

function openSharedTableModal(sharedTableName, parentChance = null, chainPath = "") {
    const sharedTable = sharedDropTables[sharedTableName];
    if (!sharedTable) return;


    let modal = document.getElementById("sharedTableModal");
    if (!modal) {
        modal = document.createElement("div");
        modal.id = "sharedTableModal";
        modal.className = "modal";
        modal.innerHTML = `<div class="modal-content">
                <span class="close" onclick="closeSharedTableModal()">&times;</span>
                <h2 id="modalTitle"></h2>
                <div id="modalTableContainer"></div>
            </div>`;
        document.body.appendChild(modal);

        const style = document.createElement("style");
        style.textContent = `
      .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.28);
      }
      .modal-content {
        background-color: rgba(0, 0, 0, 0.9);
        margin: 5% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 600px;
        max-width: 800px;
        max-height: 80vh;
        border-radius: 5px;
        overflow: auto;
      }
      .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
      }
      .nested-shared-table {
        cursor: pointer;
        color: #0066cc;
        text-decoration: underline;
      }
      .nested-shared-table:hover {
        color: #004499;
      }
      .modal-content table.calculators {
        margin: 20px auto;
        border-collapse: collapse;
        align-items: center;
        vertical-align: center;
        width: 100%;
      }
      .modal-content table.calculators th,
      .modal-content table.calculators td {
        border: 1px solid #382418;
        padding: 5px;
        text-align: center;
        vertical-align: center;
      }
      .modal-content table.calculators th {
        background-color: #222;
        color: white;
      }
      .modal-content table.calculators td {
        background-color: #1a1a1a;
        color: white;
      }
      .note-indicator {
        color: #888;
        font-size: 11px;
        cursor: help;
        margin-left: 5px;
      }
      .note-indicator:hover {
        color: #ccc;
      }
    `;
        document.head.appendChild(style);
    }

    document.getElementById("modalTitle").textContent = chainPath ? `${chainPath} → ${sharedTable.name || sharedTableName}` : sharedTable.name || sharedTableName;

    let tableHtml = '<table class="table" width="100%">';
    if (parentChance) {
        tableHtml += "<tr><th>Item</th><th>Chance</th><th>Total Chance</th></tr>";
    } else {
        tableHtml += "<tr><th>Item</th><th>Chance</th></tr>";
    }

    let totalUsedSlots = 0;
    const rollBase = getRollBase(sharedTable);

    sharedTable.roll_table.forEach((subRoll) => {
        const [subItem, subAmount] = subRoll.item;

        if (subItem.startsWith("~")) {
            const nestedTableName = subItem.slice(1);
            if (sharedDropTables[nestedTableName]) {
                const nestedTable = sharedDropTables[nestedTableName];

                const chanceValue = parseInt(subRoll.chance) || 0;
                totalUsedSlots += chanceValue;

                let nestedParentChance = parentChance;
                if (parentChance) {
                    nestedParentChance = calculateTotalChance(parentChance, subRoll.chance, rollBase);
                }

                const totalChanceHtml = parentChance ? `<td>${calculateTotalChance(parentChance, subRoll.chance, rollBase)}</td>` : "";
                const iconItem = SHARED_TABLE_ICONS[nestedTableName];
                const iconHtml = iconItem ? `<canvas itemname="${iconItem}" amount="${subAmount}" show-label="none"></canvas> ` : "";
                const noteHtml = subRoll.note ? ` <span class="note-indicator" title="${subRoll.note}">[?]</span>` : "";

                const currentTableName = sharedTable.name || sharedTableName;
                const currentChance = calculateChance(subRoll.chance, rollBase);
                const newChainPath = chainPath ? `${chainPath} → ${currentTableName} (${currentChance})` : `${currentTableName} (${currentChance})`;

                tableHtml += `<tr>
          <td>
            <div style="display: flex; align-items: center; justify-content: center; gap: 5px;">
                            ${iconHtml}
                    <span class="nested-shared-table" onclick="openSharedTableModal('${nestedTableName}', '${nestedParentChance || "null"}', '${newChainPath}')">${
                    nestedTable.name || nestedTableName
                }</span>${noteHtml}
            </div>
          </td>
          <td>${calculateChance(subRoll.chance, rollBase)}</td>
          ${totalChanceHtml}
        </tr>`;
            } else {
                const chanceValue = parseInt(subRoll.chance) || 0;
                totalUsedSlots += chanceValue;

                const totalChanceHtml = parentChance ? `<td>${calculateTotalChance(parentChance, subRoll.chance, rollBase)}</td>` : "";
                const noteHtml = subRoll.note ? ` <span class="note-indicator" title="${subRoll.note}">[?]</span>` : "";

                tableHtml += `<tr>
                        <td>${nestedTableName} (Missing Table)${noteHtml}</td>
                        <td>${calculateChance(subRoll.chance, rollBase)}</td>
                        ${totalChanceHtml}
                    </tr>`;
            }
        } else {
            if (subItem.includes("aboveground =") && subItem.includes("underground =")) {
                const parts = subItem.split("|").map((part) => part.trim());
                let abovegroundItem = "";
                let undergroundItem = "";

                parts.forEach((part) => {
                    if (part.startsWith("aboveground =")) {
                        abovegroundItem = part.replace("aboveground =", "").trim();
                    } else if (part.startsWith("underground =")) {
                        undergroundItem = part.replace("underground =", "").trim();
                    }
                });

                const chanceValue = parseInt(subRoll.chance) || 0;
                totalUsedSlots += chanceValue;

                const totalChanceHtml = parentChance ? `<td>${calculateTotalChance(parentChance, subRoll.chance, rollBase)}</td>` : "";
                const noteHtml = subRoll.note ? `<span class="note-indicator" title="${subRoll.note}">[?]</span>` : "";

                tableHtml += `<tr>
                    <td>
                        <div style="display: flex; align-items: center; justify-content: center; gap: 5px;">
                            <canvas itemname="${abovegroundItem}" amount="${subAmount}" show-label="inline"></canvas>
                            or
                            <canvas itemname="${undergroundItem}" amount="${subAmount}" show-label="inline"></canvas>${noteHtml}
                        </div>
                    </td>
                    <td>${calculateChance(subRoll.chance, rollBase)}</td>
                    ${totalChanceHtml}
                </tr>`;
            } else {
                const chanceValue = parseInt(subRoll.chance) || 0;
                totalUsedSlots += chanceValue;

                const totalChanceHtml = parentChance ? `<td>${calculateTotalChance(parentChance, subRoll.chance, rollBase)}</td>` : "";
                const noteHtml = subRoll.note ? `<span class="note-indicator" title="${subRoll.note}">[?]</span>` : "";

                tableHtml += `<tr>
                    <td>
                        <div style="display: flex; align-items: center; justify-content: center; gap: 5px;">
                            <canvas itemname="${subItem}" amount="${subAmount}" show-label="inline"></canvas>${noteHtml}
                        </div>
                    </td>
                    <td>${calculateChance(subRoll.chance, rollBase)}</td>
                    ${totalChanceHtml}
                </tr>`;
            }
        }
    });

    const nothingSlots = rollBase - totalUsedSlots;
    if (nothingSlots > 0) {
        const totalChanceHtml = parentChance ? `<td>${calculateTotalChance(parentChance, nothingSlots, rollBase)}</td>` : "";

        tableHtml += `<tr style="color: #888;">
            <td style="font-style: italic; text-align: center;">Nothing</td>
            <td>${calculateChance(nothingSlots, rollBase)}</td>${totalChanceHtml}</tr>`;
    }

    tableHtml += "</table>";
    document.getElementById("modalTableContainer").innerHTML = tableHtml;

    modal.style.display = "block";

    window.safeRenderAllSprites();
}

function closeSharedTableModal() {
    const modal = document.getElementById("sharedTableModal");
    if (modal) {
        modal.style.display = "none";
    }
}

window.onclick = function (event) {
    const modal = document.getElementById("sharedTableModal");
    if (event.target === modal) {
        closeSharedTableModal();
    }
};


function buildNpcIndex() {
    const arr = [];
    const droppableOnlyCheckbox = typeof document !== 'undefined' ? document.getElementById('droppableOnlyCheckbox') : null;
    const droppableOnly = droppableOnlyCheckbox && droppableOnlyCheckbox.checked;
    for (const key in npcData) {
        const npc = npcData[key];
        if (droppableOnly) {
            const drops = npc && npc.drops;
            const hasDrops = !!drops && (
                (Array.isArray(drops.always) && drops.always.length > 0) ||
                (Array.isArray(drops.roll_table) && drops.roll_table.length > 0) ||
                (drops.tertiary && (Array.isArray(drops.tertiary) ? drops.tertiary.length > 0 : true))
            );
            if (!hasDrops) continue;
        }

        const display = getNPCName(key) || key;
        arr.push({ key, display, tags: (key + " " + display).toLowerCase() });
    }
    arr.sort((a, b) => a.display.toLowerCase().localeCompare(b.display.toLowerCase()));
    return arr;
}

function attachSuggestionBox(input, onType) {
    const wrapper = document.createElement('div');
    wrapper.className = 'search-wrapper';
    input.parentNode.insertBefore(wrapper, input);
    wrapper.appendChild(input);

    const sugg = document.createElement('ul');
    sugg.className = 'suggestions floating-suggestions';
    sugg.style.position = 'fixed';
    sugg.style.display = 'block';
    sugg.style.left = '0px';
    sugg.style.top = '0px';
    sugg.style.minWidth = '120px';
    sugg.style.zIndex = '2147483647';
    document.body.appendChild(sugg);

    input.suggBox = sugg;

    function updatePos() {
        if (!sugg || !input) return;
        const rect = input.getBoundingClientRect();
        const vw = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);
        sugg.style.left = rect.left + 'px';
        sugg.style.top = rect.bottom + 'px';
        sugg.style.width = 'auto';
        sugg.style.minWidth = rect.width + 'px';
        sugg.style.maxWidth = Math.max(320, Math.min(vw - 20, 700)) + 'px';
        const contentW = Math.min(sugg.scrollWidth + 8, parseInt(sugg.style.maxWidth, 10));
        const finalW = Math.max(rect.width, contentW);
        sugg.style.width = finalW + 'px';
        const rightEdge = rect.left + finalW;
        if (rightEdge > vw - 10) {
            const shift = rightEdge - (vw - 10);
            sugg.style.left = Math.max(10, rect.left - shift) + 'px';
        }
        const maxH = window.innerHeight - rect.bottom - 10;
        sugg.style.maxHeight = (maxH > 40 ? maxH : 40) + 'px';
    }

    input.updateSuggPos = updatePos;

    input.addEventListener('input', onType);
    input.addEventListener('blur', () => setTimeout(() => (input.suggBox.innerHTML = ''), 150));

    window.addEventListener('resize', () => { if (input.suggBox && input.suggBox.children.length) updatePos(); });
    window.addEventListener('scroll', () => { if (input.suggBox && input.suggBox.children.length) updatePos(); }, true);
}

function onNPCType(e) {
    const val = e.target.value.toLowerCase().trim();
    const box = e.target.suggBox;
    box.innerHTML = '';
    if (!val) return;
    const idx = buildNpcIndex();
    const matches = idx.filter(n => n.tags.includes(val)).slice(0,15);
    matches.forEach(n => {
        const li = document.createElement('li');
        li.textContent = n.display;
        li.addEventListener('mousedown', () => {
            e.target.value = n.display;
            e.target.suggBox.innerHTML = '';
            const npcD = findNPC(n.key);
            if (npcD) {
                renderDrops(npcD);
                updateURL(n.key);
            }
        });
        box.appendChild(li);
    });
    if (typeof e.target.updateSuggPos === 'function') e.target.updateSuggPos();
}

attachSuggestionBox(document.getElementById('npcSearch'), onNPCType);

window.addEventListener("popstate", function () {
    loadNPCFromURL();
});

document.addEventListener("DOMContentLoaded", function () {
    const ringOfWealthCheckbox = document.getElementById("ringOfWealthCheckbox");
    if (ringOfWealthCheckbox) {
        ringOfWealthCheckbox.addEventListener("change", function () {
            const currentNPC = getURLParameter('npc');
            if (currentNPC) {
                const npcData = findNPC(currentNPC);
                if (npcData) renderDrops(npcData);
            }
        });
    }
    const droppableOnlyCheckbox = document.getElementById('droppableOnlyCheckbox');
    if (droppableOnlyCheckbox) {
        droppableOnlyCheckbox.addEventListener('change', function () {
            const npcSearch = document.getElementById('npcSearch');
            if (npcSearch && npcSearch.suggBox) {
                npcSearch.suggBox.innerHTML = '';
                if (npcSearch.value && npcSearch.value.trim()) {
                    onNPCType({ target: npcSearch });
                }
            }
        });
    }
});

