let mode = 'complete';
function setMode(newMode) {
    mode = newMode;
    document.getElementById("arrowSelection").style.display = (mode === 'arrows') ? 'block' : 'none';
    runCalc();
}

function runCalc() {
    const currentXP = parseInt(document.getElementById("currentXP").value);
    const targetXP = parseInt(document.getElementById("targetXP").value);
    const xpNeeded = targetXP - currentXP;

    // Unstrung xp, stringing xp, complete xp, level req
    const items = {
        "Shortbow": [5, 5, 10, 5],
        "Longbow": [10, 10, 20, 10],
        "Oak Shortbow": [16.5, 16.5, 33, 20],
        "Oak Longbow": [25, 25, 50, 25],
        "Willow Shortbow": [33.3, 33.2, 66.5, 35],
        "Willow Longbow": [41.5, 41.5, 83, 40],
        "Maple Shortbow": [50, 50, 100, 50],
        "Maple Longbow": [58.3, 58.2, 116.5, 55],
        "Yew Shortbow": [67.5, 67.5, 134, 65],
        "Yew Longbow": [75, 75, 150, 70],
        "Magic Shortbow": [83.3, 83.2, 166.5, 80],
        "Magic Longbow": [91.5, 91.5, 182, 85]
    };
    
    const arrows = {
        "Arrow Shaft x15": [7.5, 1],
        "Bronze Dart x10": [18, 1],
        "Headless Arrow x15": [22.5, 1],
        "Bronze Arrow x15": [42, 1],
        "Opal Bolt x10": [31, 11],
        "Iron Arrow x15": [60, 15],
        "Iron Dart x10": [38, 22],
        "Steel Arrow x15": [97.5, 30],
        "Steel Dart x10": [75, 37],
        "Pearl Bolt x10": [64, 41],
        "Mithril Arrow x15": [135, 45],
        "Barbed Bolt x10": [95, 51],
        "Mithril Dart x10": [112, 52],
        "Adamant Arrow x15": [172.5, 60],
        "Adamant Dart x10": [150, 67],
        "Rune Arrow x15": [210, 75],
        "Rune Dart x10": [188, 81]
    };

    const incomplete = {
        "Headless Arrow x15": [15, 1],
        "Bronze Arrowheads x15": [19.5, 1],
        "Opal Bolttips x10": [15, 11],
        "Iron Arrowheads x15": [37.5, 15],
        "Steel Arrowheads x15": [75, 30],
        "Pearl Bolttips x10": [32, 41],
        "Mithril Arrowheads x15": [112.5, 45],
        "Adamant Arrowheads x15": [150, 60],
        "Rune Arrowheads x15": [187.5, 75]
    }
    
    updateProgressBar(currentXP, targetXP);

    const tableBody = document.querySelector("#resultsTable tbody");
    tableBody.innerHTML = "";

    if (mode === 'arrows') {
        const arrowType = document.getElementById("arrowType").value;
        const arrowData = arrowType === "completeArrows" ? arrows : incomplete;

        for (let arrow in arrowData) {
            let [xpPerAction, levelReq] = arrowData[arrow];
            let count = Math.ceil(xpNeeded / xpPerAction);

            // Extract 'x15' or 'x10' part
            const match = arrow.match(/\s(x\d+)$/);
            const quantityText = match ? ` ${match[1]}` : "";

            // Clean up item name for data attribute
            const cleanName = arrow.replace(/\s*x\d+$/, '').toLowerCase().replace(/\s+/g, "_");
            
            let row = document.createElement("tr");
            row.innerHTML = `
                <td>${levelReq}</td>
                <td><div class=centered-content><canvas data-itemname="${cleanName}" data-show-label="inline"></canvas>&nbsp;${quantityText}</div></td>
                <td>${xpPerAction}</td>
                <td>${count.toLocaleString()}</td>
            `;
            tableBody.appendChild(row);
        }
    } else {
        for (let item in items) {
            let [xpPerAction, xpStringing, xpFull, levelReq] = items[item];
            let xpToUse;
            let itemName = item;

            if (mode === 'unstrung') {
                xpToUse = xpPerAction;
                itemName = "unstrung "+itemName;
            } else if (mode === 'stringing') {
                xpToUse = xpStringing;
                itemName = "unstrung "+itemName;
            } else {
                xpToUse = xpFull;
            }

            let count = Math.ceil(xpNeeded / xpToUse);
            
            let row = document.createElement("tr");
            row.innerHTML = `
                <td>${levelReq}</td>
                <td><canvas data-itemname="${itemName.toLowerCase().replace(/\s+/g, "_")}" data-show-label="inline"></canvas></td>
                <td>${xpToUse}</td>
                <td>${count.toLocaleString()}</td>
            `;
            tableBody.appendChild(row);
        }
    }
    window.safeRenderAllSprites();
}