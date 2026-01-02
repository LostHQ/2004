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

const arenaObstacles = {
    "Sawblade": { xp: 0, level: 1 },
    "Plank balance": { xp: 6, level: 1 },
    "Low wall": { xp: 8, level: 1 },
    "Rope balance": { xp: 10, level: 1 },
    "Log balance": { xp: 12, level: 1 },
    "Monkey bars": { xp: 14, level: 1 },
    "Ledge": { xp: 16, level: 1 },
    "Pillars": { xp: 18, level: 1 },
    "Rope swing": { xp: 20, level: 1 },
    "Hand holds": { xp: 22, level: 20 },
    "Spiked floor": { xp: 24, level: 20 },
    "Pressure pad": { xp: 26, level: 20 },
    "Spinning blade": { xp: 28, level: 40 },
    "Darts": { xp: 30, level: 40 },
    "Arena Tickets (x1)": { xp: 240, level: 1 },
    "Arena Tickets (x10)": { xp: 2480, level: 1 },
    "Arena Tickets (x25)": { xp: 6500, level: 1 },
    "Arena Tickets (x100)": { xp: 28000, level: 1 },
    "Arena Tickets (x1000)": { xp: 320000, level: 1 },
}

function runCalc() {
    const currentXP = parseInt(document.getElementById("currentXP").value);
    const targetXP = parseInt(document.getElementById("targetXP").value);
    const xpNeeded = targetXP - currentXP;

    updateProgressBar(currentXP, targetXP);

    const tableBody = document.querySelector("#resultsTable tbody");
    tableBody.innerHTML = "";
    const arenaMapsContainer = document.getElementById("arenaMapsContainer");
    arenaMapsContainer.style.display = mode === "arena" ? "block" : "none";

    let dataSet;
    switch (mode) {
        default:
        case "courses":
            dataSet = courses; break;
        case "shortcuts":
            dataSet = shortcuts; break;
        case "arena":
            dataSet = arenaObstacles; break;
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
