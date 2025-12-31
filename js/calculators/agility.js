let mode = "courses";
function setMode(newMode) {
    mode = newMode;
    runCalc();
}

const courses = {
    "Gnome Stronghold": { xp: 86.5, level: 1 },
    "Barbarian Outpost": { xp: 139.5, level: 35 },
    Wilderness: { xp: 571.4, level: 52 },
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

function runCalc() {
    const currentXP = parseInt(document.getElementById("currentXP").value);
    const targetXP = parseInt(document.getElementById("targetXP").value);
    const xpNeeded = targetXP - currentXP;

    updateProgressBar(currentXP, targetXP);

    const tableBody = document.querySelector("#resultsTable tbody");
    tableBody.innerHTML = "";

    let dataSet;
    switch (mode) {
        default:
        case "courses":
            dataSet = courses; break;
        case "shortcuts":
            dataSet = shortcuts; break;
    }

    for (const source in dataSet) {
        var img = `<img src="img/calculators/agility/${source.toLowerCase().replace(/\s+/g, "_")}.png" height=32px alt="${source}"><br>${source}`;
        const { xp, level } = dataSet[source];
        const count = Math.ceil(xpNeeded / xp);
        const row = document.createElement("tr");
        row.innerHTML =
            `<td>${level}</td>
            <td>${img}</td>
            <td>${xp}</td>
            <td>${count.toLocaleString()}</td>`;
        tableBody.appendChild(row);
    }
}
