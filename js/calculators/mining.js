const ores = {
    clay: { xp: 5, level: 1 },
    blankrune: { xp: 5, level: 1 },
    copper_ore: { xp: 17.5, level: 1 },
    tin_ore: { xp: 17.5, level: 1 },
    blurite_ore: { xp: 17.5, level: 10 },
    iron_ore: { xp: 35, level: 15 },
    silver_ore: { xp: 40, level: 20 },
    coal: { xp: 50, level: 30 },
    gold_ore: { xp: 65, level: 40 },
    gemrock: { xp: 65, level: 40 }, //not a debugname
    mithril_ore: { xp: 80, level: 55 },
    adamantite_ore: { xp: 95, level: 70 },
    runite_ore: { xp: 125, level: 85 },
};

function runCalc() {
    const currentXP = parseInt(document.getElementById("currentXP").value);
    const targetXP = parseInt(document.getElementById("targetXP").value);
    const xpNeeded = targetXP - currentXP;

    updateProgressBar(currentXP, targetXP);

    const tableBody = document.querySelector("#resultsTable tbody");
    tableBody.innerHTML = "";

    for (const [item, data] of Object.entries(ores)) {
        const oreCount = Math.ceil(xpNeeded / data.xp);

        const row = document.createElement("tr");
        if (item == "gemrock") {
            row.innerHTML =
                `<td>${data.level}</td>
                <td><div class="item-label" style="color: white; display: flex; align-items: center; justify-content: center; gap: 6px;"><canvas itemname="uncut_red_topaz"></canvas> Gem Rock</div></td>
                <td>${data.xp}</td>
                <td>${oreCount.toLocaleString()}</td>`;
        } else {
            row.innerHTML =
                `<td>${data.level}</td>
                <td><canvas itemname="${item}" show-label="inline"></canvas></td>
                <td>${data.xp}</td>
                <td>${oreCount.toLocaleString()}</td>`;
        }
        tableBody.appendChild(row);
    }
    window.safeRenderAllSprites();
}
