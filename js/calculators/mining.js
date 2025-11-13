function runCalc() {
    const currentXP = parseInt(document.getElementById("currentXP").value);
    const targetXP = parseInt(document.getElementById("targetXP").value);
    const xpNeeded = targetXP - currentXP;

    const ores = [
        { name: "clay", xp: 5, level: 1 },
        { name: "blankrune", xp: 5, level: 1 },
        { name: "copper_ore", xp: 17.5, level: 1 },
        { name: "tin_ore", xp: 17.5, level: 1 },
        { name: "blurite_ore", xp: 17.5, level: 10 },
        { name: "iron_ore", xp: 35, level: 15 },
        { name: "silver_ore", xp: 40, level: 20 },
        { name: "coal", xp: 50, level: 30 },
        { name: "gold_ore", xp: 65, level: 40 },
        { name: "gemrock", xp: 65, level: 40 },//not a debugname
        { name: "mithril_ore", xp: 80, level: 55 },
        { name: "adamantite_ore", xp: 95, level: 70 },
        { name: "runite_ore", xp: 125, level: 85 }
    ];

    updateProgressBar(currentXP, targetXP);

    const tableBody = document.querySelector("#resultsTable tbody");
    tableBody.innerHTML = ""; 

    for (let ore of ores) {
        let oreCount = Math.ceil(xpNeeded / ore.xp); 

        let row = document.createElement("tr");
        if (ore.name == "gemrock") {
            row.innerHTML = `
                <td>${ore.level}</td>
                <td><div class="item-label" style="color: white; display: flex; align-items: center; justify-content: center; gap: 6px;"><canvas data-itemname="uncut_red_topaz"></canvas> Gem Rock</div></td>
                <td>${ore.xp}</td>
                <td>${oreCount.toLocaleString()}</td>
            `;
        } else {
            row.innerHTML = `
                <td>${ore.level}</td>
                <td><canvas data-itemname="${ore.name}" data-show-label="inline"></canvas></td>
                <td>${ore.xp}</td>
                <td>${oreCount.toLocaleString()}</td>
            `;
        }
        tableBody.appendChild(row);
    }
    window.safeRenderAllSprites();
}