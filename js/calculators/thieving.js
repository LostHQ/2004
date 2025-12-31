let mode = "npcs";
function setMode(newMode) {
    mode = newMode;
    runCalc();
}

function runCalc() {
    const currentXP = parseInt(document.getElementById("currentXP").value);
    const targetXP = parseInt(document.getElementById("targetXP").value);
    const xpNeeded = targetXP - currentXP;

    const npcs = {
        "Man/Woman": { xp: 8, level: 1 },
        "Digsite Workman": { xp: 10.4, level: 10 },
        Farmer: { xp: 14.5, level: 10 },
        "Warrior/Al Kharid warrior": { xp: 26, level: 25 },
        Rogue: { xp: 36.5, level: 32 },
        Guard: { xp: 46.8, level: 40 },
        "Knight of Ardougne": { xp: 84.3, level: 55 },
        "Yanille Watchman": { xp: 137.5, level: 65 },
        Paladin: { xp: 151.8, level: 70 },
        Gnome: { xp: 198.3, level: 75 },
        Hero: { xp: 273.3, level: 80 },
    };

    const stalls = {
        "Bakery Stall": { xp: 16, level: 5 },
        "Tea Stall": { xp: 16, level: 5 },
        "Silk Stall": { xp: 24, level: 20 },
        "Fur Stall": { xp: 36, level: 35 },
        "Silver Stall": { xp: 54, level: 50 },
        "Spice Stall": { xp: 81, level: 65 },
        "Gem Stall": { xp: 16, level: 75 },
    };

    const chests = {
        "10 Coin Chest": { xp: 7.8, level: 1 },
        "Nature Rune Chest": { xp: 25, level: 28 },
        "50 Coin Chest": { xp: 125, level: 43 },
        "Steel Arrowtips Chest": { xp: 150, level: 47 },
        "Blood Rune Chest": { xp: 250, level: 59 },
        "Ardougne Castle Chest": { xp: 500, level: 72 },
    };

    const pickabledoors = {
        "Ross House Door": { xp: 15, level: 13 },
        "Magic Axe Hut Door": { xp: 22.5, level: 23 },
        "Ardougne Sewer Gate": { xp: 25, level: 31 },
        "Pirate Hideout Door": { xp: 35, level: 39, lockpick: true },
        "Chaos Druid Tower Door": { xp: 37.5, level: 46, lockpick: true },
        "Ardougne Castle Door": { xp: 50, level: 61 },
        "Yanille Dungeon Door": { xp: 50, level: 82, lockpick: true },
    };

    updateProgressBar(currentXP, targetXP);

    const tableBody = document.querySelector("#resultsTable tbody");
    tableBody.innerHTML = "";

    let dataSet;
    switch (mode) {
        default:
        case "chests":
            dataSet = chests;
            break;
        case "stalls":
            dataSet = stalls;
            break;
        case "npcs":
            dataSet = npcs;
            break;
        case "pickabledoors":
            dataSet = pickabledoors;
            break;
    }

    for (let source in dataSet) {
        var lockpick = "";
        if (dataSet == pickabledoors) {
            if (dataSet[source].lockpick) {
                var lockpick = "<br>(requires lockpick)";
            }
            if (source.endsWith("Door")) {
                var img = `<img src="img/calculators/thieving/door.png" height=32px alt="${source}">`;
            } else {
                var img = `<img src="img/calculators/thieving/gate.png" height=32px alt="${source}">`;
            }
        } else {
            var img = `<img src="img/calculators/thieving/${source.toLowerCase().replace(/\s+/g, "_").replace("/", "_")}.png" height=32px alt="${source}">`;
        }
        let { xp, level } = dataSet[source];
        let count = Math.ceil(xpNeeded / xp);
        let row = document.createElement("tr");
        row.innerHTML = `
            <td>${level}</td>
            <td><div class="centered-content">${img}&nbsp;${source}${lockpick}</div></td>
            <td>${xp}</td>
            <td>${count.toLocaleString()}</td>
        `;
        tableBody.appendChild(row);
    }
}
