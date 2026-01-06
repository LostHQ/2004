let npcData = {};
let sharedDropTables = {};
let itemList = {};
let activeSearchTerm = "";

const SHARED_TABLE_ICONS = {
    randomherb: "unidentified_guam",
    randomjewel: "uncut_dragonstone",
    ultrarare_getitem: "dragon_med_helm",
    megararetable: "dragonshield_a",
};

Promise.all([
    fetch(`js/npcdb/npc_data.json?v=${currentGameVer}`).then((res) => res.json()),
    fetch(`js/npcdb/shared_drops.json?v=${currentGameVer}`).then((res) => res.json()),
    fetch(`js/itemdb/itemdb.json?v=${currentGameVer}`).then((res) => res.json()),
]).then(([npcDataJson, sharedDropTablesData, itemData]) => {
    npcData = npcDataJson;
    sharedDropTables = sharedDropTablesData;
    itemList = itemData.reduce((map, item) => {
        map[item.debugname] = item.name;
        return map;
    }, {});
    populateNPCDropdown();
    loadNPCFromURL();
});

function getNPCName(debugname) {
    if (!debugname) { return "Unknown NPC"; }

    if (typeof debugname === "object") {
        const npcObj = debugname;
        const name = npcObj.name || npcObj.debugname || "Unknown NPC";
        const vis = npcObj.vislevel || (npcObj.info && npcObj.info.vislevel);
        return vis ? `${name} (level-${vis})` : name;
    }

    const npc = npcData[debugname];
    if (npc && npc.name) {
        const vis = npc.vislevel || (npc.info && npc.info.vislevel);
        return vis ? `${npc.name} (level-${vis})` : npc.name;
    }

    return debugname;
}

function populateNPCDropdown() {
    const select = document.getElementById("npcSelect");
    select.innerHTML = '<option value="">Select NPC...</option>';

    const npcList = [];
    for (const debugname in npcData) {
        const npc = npcData[debugname];
        if (npc.drops) {
            // TODO: Show non-dropping NPCs in a different view
            npcList.push({
                key: debugname,
                displayName: getNPCName(debugname),
                hasName: !!npc.name,
            });
        }
    }

    npcList.sort((a, b) => a.displayName.toLowerCase().localeCompare(b.displayName.toLowerCase()));
    npcList.forEach((npcInfo) => {
        const option = document.createElement("option");
        option.value = npcInfo.key;
        option.textContent = npcInfo.displayName;

        if (!npcInfo.hasName) {
            option.style.color = "red";
        }
        select.appendChild(option);
    });
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
            const select = document.getElementById("npcSelect");
            select.value = npcFromURL;
            renderDrops(npcData, activeSearchTerm);
            document.getElementById("itemSearch").value = "";
            activeSearchTerm = "";
        }
    }
}

function renderDrops(npcData, searchTerm = "") {
    const container = document.getElementById("dropTableContainer");
    const baseTitle = getNPCName(npcData);
    let html = "<h2>" + baseTitle + "</h2>";

    let guaranteedRows = [];
    let rollableRows = [];
    let tertiaryRows = [];

    const matchesSearch = (debugName) => {
        if (!searchTerm) return false;
        const readable = itemList[debugName]?.toLowerCase() || "";
        return debugName.toLowerCase().includes(searchTerm) || readable.includes(searchTerm);
    };

    if (npcData.guaranteed && npcData.guaranteed.length > 0) {
        npcData.guaranteed.forEach((item) => {
            const itemName = typeof item === "object" ? item.item : item;
            const amount = typeof item === "object" && item.amount ? item.amount : 1;
            const note = typeof item === "object" ? item.note : null;
            const isMatch = matchesSearch(itemName);
            const noteHtml = note ? ` <span class="note-indicator" title="${note}">[?]</span>` : "";
            guaranteedRows.push({
                html: `<tr${isMatch ? ' style="background:rgba(85, 62, 5, 0.62);"' : ""}>
                 <td>
                   <div style="display: flex; align-items: center; justify-content: center; gap: 5px;">
                     <canvas itemname="${itemName}" show-label="inline"></canvas>${noteHtml}
                   </div>
                 </td>
                 <td colspan="2">${formatAmount(amount)}</td>
               </tr>`,
                match: isMatch,
            });
        });
    }

    if (npcData.drops.always && npcData.drops.always.length > 0) {
        npcData.drops.always.forEach((item) => {
            const [itemName, amount] = item.item;
            const note = item.note;
            const isMatch = matchesSearch(itemName);
            const noteHtml = note ? ` <span class="note-indicator" title="${note}">[?]</span>` : "";
            guaranteedRows.push({
                html: `<tr${isMatch ? ' style="background:rgba(85, 62, 5, 0.62);"' : ""}>
                 <td>
                   <div style="display: flex; align-items: center; justify-content: center; gap: 5px;">
                     <canvas itemname="${itemName}" show-label="inline"></canvas>${noteHtml}
                   </div>
                 </td>
                 <td colspan="2">${formatAmount(amount)}</td>
               </tr>`,
                match: isMatch,
            });
        });
    }

    if (npcData.drops.roll_table && npcData.drops.roll_table.length > 0) {
        const rollBase = npcData.drops.roll_base || 128;
        let totalUsedSlots = 0;

        for (const roll of npcData.drops.roll_table) {
            const chance = parseInt(roll.chance);
            totalUsedSlots += chance;

            if (roll.items && roll.items.count) {
                const itemCount = roll.items.count;
                let isAnyMatch = false;

                for (let i = 0; i < itemCount; i++) {
                    const itemData = roll.items[i.toString()];
                    if (itemData) {
                        const [itemName, amount] = itemData.item;
                        const isMatch = matchesSearch(itemName);
                        if (isMatch) isAnyMatch = true;

                        let noteHtml = "";
                        if (itemData.note) {
                            noteHtml = ` <span class="note-indicator" title="${itemData.note}">[?]</span>`;
                        } else if (i === 0 && roll.note) {
                            noteHtml = ` <span class="note-indicator" title="${roll.note}">[?]</span>`;
                        }

                        const chanceCell = i === 0 ? `<td rowspan="${itemCount}">${calculateChance(roll.chance, rollBase)}</td>` : "";

                        rollableRows.push({
                            html: `<tr${isMatch ? ' style="background: rgba(85, 62, 5, 0.62);"' : ""}>
                                    <td>
                                        <div style="display: flex; align-items: center; justify-content: center; gap: 5px;">
                                            <canvas itemname="${itemName}" show-label="inline"></canvas>${noteHtml}
                                        </div>
                                    </td>
                                    <td>${formatAmount(amount)}</td>
                                    ${chanceCell}
                                </tr>`,
                            match: isMatch,
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
                    const iconHtml = iconItem ? `<canvas itemname="${iconItem}" show-label="none"></canvas>` : "";
                    const noteHtml = roll.note ? ` <span class="note-indicator" title="${roll.note}">[?]</span>` : "";

                    rollableRows.push({
                        html: `<tr>
              <td>
                <div style="display: flex; align-items: center; justify-content: center; gap: 5px;">
                  ${iconHtml}
                  <span class="shared-table-toggle"
                  onclick="openSharedTableModal('${sharedTableName}', '${searchTerm}', '${calculateChance(roll.chance, rollBase)}',
                    '${npcData.name || "Unknown NPC"} (${calculateChance(roll.chance, rollBase)})')">${sharedTable.name || sharedTableName}</span>
                    ${noteHtml}
                </div>
              </td>
              <td>${formatAmount(amount)}</td>
              <td>${calculateChance(roll.chance, rollBase)}</td>
            </tr>`,
                        match: false,
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

                    const isAboveMatch = matchesSearch(abovegroundItem);
                    const isUnderMatch = matchesSearch(undergroundItem);
                    const isMatch = isAboveMatch || isUnderMatch;
                    const noteHtml = roll.note ? ` <span class="note-indicator" title="${roll.note}">[?]</span>` : "";

                    rollableRows.push({
                        html: `<tr${isMatch ? ' style="background: rgba(85, 62, 5, 0.62);"' : ""}>
                            <td>
                                <div style="display: flex; align-items: center; justify-content: center; gap: 5px;">
                                    <canvas itemname="${abovegroundItem}" show-label="inline"></canvas> or 
                                    <canvas itemname="${undergroundItem}" show-label="inline"></canvas>${noteHtml}
                                </div>
                            </td>
                            <td>${formatAmount(amount)}</td>
                            <td>${calculateChance(roll.chance, rollBase)}</td>
                        </tr>`,
                        match: isMatch,
                    });
                } else {
                    const isMatch = matchesSearch(itemName);
                    const noteHtml = roll.note ? ` <span class="note-indicator" title="${roll.note}">[?]</span>` : "";
                    rollableRows.push({
                        html: `<tr${isMatch ? ' style="background: rgba(85, 62, 5, 0.62);"' : ""}>
                                <td>
                                    <div style="display: flex; align-items: center; justify-content: center; gap: 5px;">
                                        <canvas itemname="${itemName}" show-label="inline"></canvas>${noteHtml}
                                    </div>
                                </td>
                                <td>${formatAmount(amount)}</td>
                                <td>${calculateChance(roll.chance, rollBase)}</td>
                            </tr>`,
                        match: isMatch,
                    });
                }
            }
        }

        const nothingSlots = rollBase - totalUsedSlots;
        if (nothingSlots > 0) {
            const isNothingMatch = searchTerm && searchTerm.includes("nothing");
            rollableRows.push({
                html: `<tr${isNothingMatch ? ' style="background: rgba(85, 62, 5, 0.62);"' : ""} style="color: #888;">
                    <td style="font-style: italic; text-align: center;">Nothing</td>
                    <td>-</td>
                    <td>${calculateChance(nothingSlots, rollBase)}</td>
                    </tr>`,
                match: isNothingMatch,
            });
        }
    }

    if (npcData.drops.tertiary) {
        const tertiaryData = Array.isArray(npcData.drops.tertiary) ? npcData.drops.tertiary : [npcData.drops.tertiary];

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

            const isTertiaryMatch =
                searchTerm &&
                (itemName.toLowerCase().includes(searchTerm) || (itemList[displayItemName]?.toLowerCase() || "").includes(searchTerm) || (itemName.includes("clue") && searchTerm.includes("clue")));
            const noteHtml = note ? ` <span class="note-indicator" title="${note}">[?]</span>` : "";
            tertiaryRows.push({
                html: `<tr${isTertiaryMatch ? ' style="background: rgba(85, 62, 5, 0.62);"' : ""}>
                    <td>
                        <div style="display: flex; align-items: center; justify-content: center; gap: 5px;">
                                        <canvas itemname="${displayItemName}" show-label="inline"${nameAppend ? ` name-append="${nameAppend}"` : ""}></canvas>${noteHtml}
                        </div>
                    </td>
                    <td>1</td>
                    <td>${chance}</td>
                    </tr>`,
                match: isTertiaryMatch,
            });
        });
    }

    let hasContent = false;
    html += '<table class="table" width="100%">';
    if (guaranteedRows.length > 0) {
        html += '<tr><th colspan="3">Always Drops</th></tr>';
        html += '<tr><th>Item</th><th colspan="2">Amount</th></tr>';
        guaranteedRows.filter((r) => r.match).forEach((r) => (html += r.html));
        guaranteedRows.filter((r) => !r.match).forEach((r) => (html += r.html));
        hasContent = true;
    }

    if (rollableRows.length > 0) {
        html += '<tr><th colspan="3">Primary Drops</th></tr>';
        html += "<tr><th>Item</th><th>Amount</th><th>Chance</th></tr>";
        rollableRows.filter((r) => r.match).forEach((r) => (html += r.html));
        rollableRows.filter((r) => !r.match).forEach((r) => (html += r.html));
        hasContent = true;
    }

    if (tertiaryRows.length > 0) {
        html += '<tr><th colspan="3">Tertiary Drops</th></tr>';
        html += "<tr><th>Item</th><th>Amount</th><th>Chance</th></tr>";
        tertiaryRows.filter((r) => r.match).forEach((r) => (html += r.html));
        tertiaryRows.filter((r) => !r.match).forEach((r) => (html += r.html));

        hasContent = true;
    }

    if (!hasContent) {
        html += '<tr><td colspan="3">No drops found for this NPC.</td></tr>';
    }
    html += "</table>";

    container.innerHTML = html;

    window.safeRenderAllSprites();
}

function formatAmount(amount) {
    if (Array.isArray(amount)) {
        if (amount.length === 2) {
            return amount[0] + "-" + amount[1];
        }
        return amount.join(", ");
    }
    return amount;
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

function openSharedTableModal(sharedTableName, searchTerm = "", parentChance = null, chainPath = "") {
    const sharedTable = sharedDropTables[sharedTableName];
    if (!sharedTable) return;

    const matchesSearch = (debugName) => {
        if (!searchTerm) return false;
        const readable = itemList[debugName]?.toLowerCase() || "";
        return debugName.toLowerCase().includes(searchTerm) || readable.includes(searchTerm);
    };

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
        tableHtml += "<tr><th>Item</th><th>Amount</th><th>Chance</th><th>Total Chance</th></tr>";
    } else {
        tableHtml += "<tr><th>Item</th><th>Amount</th><th>Chance</th></tr>";
    }

    let totalUsedSlots = 0;
    const rollBase = getRollBase(sharedTable);

    sharedTable.roll_table.forEach((subRoll) => {
        const [subItem, subAmount] = subRoll.item;

        if (subItem.startsWith("~")) {
            const nestedTableName = subItem.slice(1);
            if (sharedDropTables[nestedTableName]) {
                const nestedTable = sharedDropTables[nestedTableName];
                const isTableMatch = searchTerm && (nestedTableName.toLowerCase().includes(searchTerm) || (nestedTable.name && nestedTable.name.toLowerCase().includes(searchTerm)));

                const chanceValue = parseInt(subRoll.chance) || 0;
                totalUsedSlots += chanceValue;

                let nestedParentChance = parentChance;
                if (parentChance) {
                    nestedParentChance = calculateTotalChance(parentChance, subRoll.chance, rollBase);
                }

                const totalChanceHtml = parentChance ? `<td>${calculateTotalChance(parentChance, subRoll.chance, rollBase)}</td>` : "";
                const iconItem = SHARED_TABLE_ICONS[nestedTableName];
                const iconHtml = iconItem ? `<canvas itemname="${iconItem}" show-label="none"></canvas> ` : "";
                const noteHtml = subRoll.note ? ` <span class="note-indicator" title="${subRoll.note}">[?]</span>` : "";

                const currentTableName = sharedTable.name || sharedTableName;
                const currentChance = calculateChance(subRoll.chance, rollBase);
                const newChainPath = chainPath ? `${chainPath} → ${currentTableName} (${currentChance})` : `${currentTableName} (${currentChance})`;

                tableHtml += `<tr${isTableMatch ? ' style="background:rgba(85, 62, 5, 0.62);"' : ""}>
          <td>
            <div style="display: flex; align-items: center; justify-content: center; gap: 5px;">
                            ${iconHtml}<span class="nested-shared-table" onclick="openSharedTableModal('${nestedTableName}', '${searchTerm}', '${nestedParentChance || "null"}', '${newChainPath}')">${
                    nestedTable.name || nestedTableName
                }</span>${noteHtml}
            </div>
          </td>
          <td>${formatAmount(subAmount)}</td>
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
                        <td>${formatAmount(subAmount)}</td>
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

                const isAboveMatch = matchesSearch(abovegroundItem);
                const isUnderMatch = matchesSearch(undergroundItem);
                const isMatch = isAboveMatch || isUnderMatch;

                const chanceValue = parseInt(subRoll.chance) || 0;
                totalUsedSlots += chanceValue;

                const totalChanceHtml = parentChance ? `<td>${calculateTotalChance(parentChance, subRoll.chance, rollBase)}</td>` : "";
                const noteHtml = subRoll.note ? ` <span class="note-indicator" title="${subRoll.note}">[?]</span>` : "";

                tableHtml += `<tr${isMatch ? ' style="background:rgba(85, 62, 5, 0.62);"' : ""}>
                    <td>
                        <div style="display: flex; align-items: center; justify-content: center; gap: 5px;">
                            <canvas itemname="${abovegroundItem}" show-label="inline"></canvas>
                            or
                            <canvas itemname="${undergroundItem}" show-label="inline"></canvas>${noteHtml}
                        </div>
                    </td>
                    <td>${formatAmount(subAmount)}</td>
                    <td>${calculateChance(subRoll.chance, rollBase)}</td>
                    ${totalChanceHtml}
                </tr>`;
            } else {
                const isMatch = matchesSearch(subItem);
                const chanceValue = parseInt(subRoll.chance) || 0;
                totalUsedSlots += chanceValue;

                const totalChanceHtml = parentChance ? `<td>${calculateTotalChance(parentChance, subRoll.chance, rollBase)}</td>` : "";
                const noteHtml = subRoll.note ? ` <span class="note-indicator" title="${subRoll.note}">[?]</span>` : "";

                tableHtml += `<tr${isMatch ? ' style="background:rgba(85, 62, 5, 0.62);"' : ""}>
                    <td>
                        <div style="display: flex; align-items: center; justify-content: center; gap: 5px;">
                            <canvas itemname="${subItem}" show-label="inline"></canvas>${noteHtml}
                        </div>
                    </td>
                    <td>${formatAmount(subAmount)}</td>
                    <td>${calculateChance(subRoll.chance, rollBase)}</td>
                    ${totalChanceHtml}
                </tr>`;
            }
        }
    });

    const nothingSlots = rollBase - totalUsedSlots;
    if (nothingSlots > 0) {
        const isNothingMatch = searchTerm && searchTerm.includes("nothing");
        const totalChanceHtml = parentChance ? `<td>${calculateTotalChance(parentChance, nothingSlots, rollBase)}</td>` : "";

        tableHtml += `<tr${isNothingMatch ? ' style="background:rgba(85, 62, 5, 0.62);"' : ""} style="color: #888;">
            <td style="font-style: italic; text-align: center;">Nothing</td>
            <td>-</td>
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

function searchInSharedTable(sharedTableName, searchTerm, visitedTables = new Set()) {
    if (visitedTables.has(sharedTableName)) {
        return false;
    }

    const sharedTable = sharedDropTables[sharedTableName];
    if (!sharedTable || !sharedTable.roll_table) return false;

    visitedTables.add(sharedTableName);

    for (const roll of sharedTable.roll_table) {
        const [itemName] = roll.item;

        if (itemName.startsWith("~")) {
            const nestedTableName = itemName.slice(1);
            const nestedTable = sharedDropTables[nestedTableName];

            if (nestedTableName.toLowerCase().includes(searchTerm) || (nestedTable && nestedTable.name && nestedTable.name.toLowerCase().includes(searchTerm))) {
                visitedTables.delete(sharedTableName);
                return true;
            } else if (searchInSharedTable(nestedTableName, searchTerm, visitedTables)) {
                visitedTables.delete(sharedTableName);
                return true;
            }
        } else {
            if (itemName.includes("aboveground =") && itemName.includes("underground =")) {
                const parts = itemName.split("|").map((part) => part.trim());
                for (const part of parts) {
                    if (part.startsWith("aboveground =")) {
                        const abovegroundItem = part.replace("aboveground =", "").trim();
                        const readable = itemList[abovegroundItem]?.toLowerCase() || "";
                        if (abovegroundItem.toLowerCase().includes(searchTerm) || readable.includes(searchTerm)) {
                            visitedTables.delete(sharedTableName);
                            return true;
                        }
                    } else if (part.startsWith("underground =")) {
                        const undergroundItem = part.replace("underground =", "").trim();
                        const readable = itemList[undergroundItem]?.toLowerCase() || "";
                        if (undergroundItem.toLowerCase().includes(searchTerm) || readable.includes(searchTerm)) {
                            visitedTables.delete(sharedTableName);
                            return true;
                        }
                    }
                }
            } else {
                const readable = itemList[itemName]?.toLowerCase() || "";
                if (itemName.toLowerCase().includes(searchTerm) || readable.includes(searchTerm)) {
                    visitedTables.delete(sharedTableName);
                    return true;
                }
            }
        }
    }

    visitedTables.delete(sharedTableName);
    return false;
}

document.getElementById("itemSearch").addEventListener("input", function () {
    activeSearchTerm = this.value.trim().toLowerCase();
    const select = document.getElementById("npcSelect");
    select.innerHTML = '<option value="">Select NPC...</option>';

    if (!activeSearchTerm) {
        populateNPCDropdown();
        return;
    }

    const matchedNPCs = new Map();

    for (const npcKey in npcData) {
        const npc = npcData[npcKey];
        let foundReason = "";

        if (
            npc.guaranteed &&
            npc.guaranteed.some((item) => {
                const itemName = typeof item === "object" ? item.item : item;
                const readable = itemList[itemName]?.toLowerCase() || "";
                return itemName.toLowerCase().includes(activeSearchTerm) || readable.includes(activeSearchTerm);
            })
        ) {
            foundReason = "guaranteed";
        }

        if (
            !foundReason &&
            npc.always &&
            npc.always.some((item) => {
                const [itemName] = item.item;
                const readable = itemList[itemName]?.toLowerCase() || "";
                return itemName.toLowerCase().includes(activeSearchTerm) || readable.includes(activeSearchTerm);
            })
        ) {
            foundReason = "guaranteed";
        }

        if (!foundReason && npc.roll_table) {
            for (const roll of npc.roll_table) {
                let foundInRoll = false;

                if (roll.items && roll.items.count) {
                    for (let i = 0; i < roll.items.count; i++) {
                        const itemData = roll.items[i.toString()];
                        if (itemData) {
                            const [itemName] = itemData.item;
                            const readable = itemList[itemName]?.toLowerCase() || "";
                            if (itemName.toLowerCase().includes(activeSearchTerm) || readable.includes(activeSearchTerm)) {
                                foundInRoll = true;
                                break;
                            }
                        }
                    }
                } else if (roll.item) {
                    const [itemName] = roll.item;

                    if (itemName.startsWith("~")) {
                        const sharedTableName = itemName.slice(1);
                        const sharedTable = sharedDropTables[sharedTableName];

                        if (sharedTableName.toLowerCase().includes(activeSearchTerm) || (sharedTable && sharedTable.name && sharedTable.name.toLowerCase().includes(activeSearchTerm))) {
                            foundInRoll = true;
                        } else if (searchInSharedTable(sharedTableName, activeSearchTerm)) {
                            foundInRoll = true;
                        }
                    } else {
                        if (itemName.includes("aboveground =") && itemName.includes("underground =")) {
                            const parts = itemName.split("|").map((part) => part.trim());
                            for (const part of parts) {
                                if (part.startsWith("aboveground =")) {
                                    const abovegroundItem = part.replace("aboveground =", "").trim();
                                    const readable = itemList[abovegroundItem]?.toLowerCase() || "";
                                    if (abovegroundItem.toLowerCase().includes(activeSearchTerm) || readable.includes(activeSearchTerm)) {
                                        foundInRoll = true;
                                        break;
                                    }
                                } else if (part.startsWith("underground =")) {
                                    const undergroundItem = part.replace("underground =", "").trim();
                                    const readable = itemList[undergroundItem]?.toLowerCase() || "";
                                    if (undergroundItem.toLowerCase().includes(activeSearchTerm) || readable.includes(activeSearchTerm)) {
                                        foundInRoll = true;
                                        break;
                                    }
                                }
                            }
                        } else {
                            const readable = itemList[itemName]?.toLowerCase() || "";
                            if (itemName.toLowerCase().includes(activeSearchTerm) || readable.includes(activeSearchTerm)) {
                                foundInRoll = true;
                            }
                        }
                    }
                }

                if (foundInRoll) {
                    foundReason = "rollable";
                    break;
                }
            }
        }

        if (!foundReason && npc.tertiary && Array.isArray(npc.tertiary)) {
            for (const tertiaryData of npc.tertiary) {
                const itemName = tertiaryData.item;
                const readable = itemList[itemName]?.toLowerCase() || "";
                if ((itemName && itemName.toLowerCase().includes(activeSearchTerm)) || readable.includes(activeSearchTerm) || (itemName.includes("clue") && activeSearchTerm.includes("clue"))) {
                    foundReason = "tertiary";
                    break;
                }
            }
        }

        if (foundReason) matchedNPCs.set(npcKey, foundReason);
    }

    if (matchedNPCs.size === 0) {
        const option = document.createElement("option");
        option.disabled = true;
        option.textContent = "No NPCs found";
        select.appendChild(option);
    } else {
        const matchedArray = [];
        for (const [npcName, reason] of matchedNPCs.entries()) {
            const npcData = npcData[npcName];
            let displayName = npcData && npcData.name ? npcData.name : npcName;
            if (npcData && npcData.info && npcData.info.vislevel) displayName += ` (level-${npcData.info.vislevel})`;
            matchedArray.push({ npcName, reason, displayName, hasName: !!(npcData && npcData.name) });
        }

        matchedArray.sort((a, b) => a.displayName.toLowerCase().localeCompare(b.displayName.toLowerCase()));

        matchedArray.forEach((entry) => {
            const option = document.createElement("option");
            option.value = entry.npcName;
            option.textContent = entry.displayName;
            option.style.fontWeight = "bold";
            if (entry.hasName) {
                option.style.color = entry.reason === "tertiary" ? "blue" : "green";
            } else {
                option.style.color = "darkred";
            }
            select.appendChild(option);
        });

        if (matchedArray.length === 1) {
            const firstMatch = matchedArray[0].npcName;
            select.value = firstMatch;
            const npcData = findNPC(firstMatch);
            if (npcData) {
                renderDrops(npcData, activeSearchTerm);
                updateURL(firstMatch);
            }
        }
    }
});

document.getElementById("itemSearch").addEventListener("keydown", function (e) {
    if (e.key === "Enter") {
        const select = document.getElementById("npcSelect");
        if (select.options.length > 1) {
            e.preventDefault();
            select.selectedIndex = 1;
            const npcData = findNPC(select.value);
            if (npcData) {
                renderDrops(npcData, activeSearchTerm);
                updateURL(select.value);
            }
        }
    }
});

npcSelect.addEventListener("change", () => {
    const selectedNPC = npcSelect.value;
    if (selectedNPC) {
        const npcData = findNPC(selectedNPC);
        if (npcData) {
            renderDrops(npcData, activeSearchTerm);
            updateURL(selectedNPC);
        }
    } else {
        document.getElementById("dropTableContainer").innerHTML = "";
        updateURL(null);
    }
});

window.addEventListener("popstate", function () {
    loadNPCFromURL();
});

document.addEventListener("DOMContentLoaded", function () {
    const ringOfWealthCheckbox = document.getElementById("ringOfWealthCheckbox");
    if (ringOfWealthCheckbox) {
        ringOfWealthCheckbox.addEventListener("change", function () {
            const npcSelect = document.getElementById("npcSelect");
            if (npcSelect.value) {
                const npcData = findNPC(npcSelect.value);
                if (npcData) {
                    renderDrops(npcData, activeSearchTerm);
                }
            }
        });
    }
});
