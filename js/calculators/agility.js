let mode = 'courses';
function setMode(newMode) {
    mode = newMode;
    runCalc();
}

function runCalc() {
    const currentXP = parseInt(document.getElementById("currentXP").value);
    const targetLevel = parseInt(document.getElementById("targetLevel").value);
    const targetXP = getXPForLevel(targetLevel);

    if (targetXP <= currentXP) {
        alert("Target level must be higher than current XP.");
        return;
    }

    const xpNeeded = targetXP - currentXP;
    const courses = {
        "Gnome Stronghold": { xp: 86.5, level: 1 },
        "Barbarian Outpost": { xp: 139.5, level: 35 },
        "Wilderness": { xp: 601.4, level: 52 },
    };
    const shortcuts = {
        "A wooden log (Karamja)": { xp: 4, level: 1 },
        "Crumbling wall (Falador)": { xp: 0.5, level: 5 },
        "Climbing rocks (Yanille)": { xp: 25, level: 5 },
        "Ropeswing (Brimhaven)": { xp: 3, level: 10 },
        "Monkeybars (Edgeville Dungeon)": { xp: 20, level: 15 },
        "Log balance (Coal Trucks)": { xp: 8.5, level: 20 },
        "Stepping stones (Karamja)": { xp: 3, level: 30 },
        "Monkeybars (Yanille Dungeon)": { xp: 20, level: 57 },
    };

    updateProgressBar(currentXP, targetXP);

    // Clear previous results
    const tableBody = document.querySelector("#resultsTable tbody");
    tableBody.innerHTML = "";

    let dataSet;
    switch (mode) {
        default:
        case 'courses':
            dataSet = courses;
            break;
        case 'shortcuts':
            dataSet = shortcuts;
            break;
    }

    // Generate course table
    for (let source in dataSet) {
        var img = `<img src="img/calculators/agility/${source.toLowerCase().replace(/\s+/g, "_")}.png" height=32px alt="${source}"><br>${source}`;
        let { xp, level } = dataSet[source];
        let count = Math.ceil(xpNeeded / xp);
        let row = document.createElement("tr");
        row.innerHTML = `
            <td>${level}</td>
            <td>
                ${img}
            </td>
            <td>${xp}</td>
            <td>${count.toLocaleString()}</td>
        `;
        tableBody.appendChild(row);
    }

}