let mode = "npcs";
function setMode(newMode) {
    mode = newMode;
    runCalc();
}
const npcs = {
    "Man/Woman": { xp: 8, level: 1, npcname: "man" },
    "Digsite Workman": { xp: 10.4, level: 10, npcname: "digworkman1" },
    "Farmer": { xp: 14.5, level: 10, npcname: "farmer1" },
    "Warrior/Al Kharid warrior": { xp: 26, level: 25, npcname: "warrior_woman" },
    "Rogue": { xp: 36.5, level: 32, npcname: "rogue" },
    "Guard": { xp: 46.8, level: 40, npcname: "guard1" },
    "Knight of Ardougne": { xp: 84.3, level: 55, npcname: "knight_of_ardougne" },
    "Yanille Watchman": { xp: 137.5, level: 65, npcname: "yanille_watchman" },
    "Paladin": { xp: 151.8, level: 70, npcname: "paladin" },
    "Gnome": { xp: 198.3, level: 75, npcname: "gnome" },
    "Hero": { xp: 273.3, level: 80, npcname: "hero" },
};

const stalls = {
    "Bakery Stall": { xp: 16, level: 5, itemname: "bread" },
    "Tea Stall": { xp: 16, level: 5, itemname: "cup_of_tea" },
    "Silk Stall": { xp: 24, level: 20, itemname: "silk" },
    "Fur Stall": { xp: 36, level: 35, itemname: "fur" },
    "Silver Stall": { xp: 54, level: 50, itemname: "silver_ore" },
    "Spice Stall": { xp: 81, level: 65, itemname: "spicespot" },
    "Gem Stall": { xp: 16, level: 75, itemname: "sapphire" },
};

const chests = {
    "10 Coin Chest": { xp: 7.8, level: 1, itemname: ["coins",10] },
    "Nature Rune Chest": { xp: 25, level: 28, itemname: ["naturerune",1] },
    "50 Coin Chest": { xp: 125, level: 43, itemname: ["coins",50] },
    "Steel Arrowtips Chest": { xp: 150, level: 47, itemname: ["steel_arrowheads",15] },
    "Blood Rune Chest": { xp: 250, level: 59, itemname: ["bloodrune",1] },
    "Ardougne Castle Chest": { xp: 500, level: 72, itemname: ["shark",1] },
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
        case "chests":
            dataSet = chests; break;
        case "stalls":
            dataSet = stalls; break;
        case "npcs":
            dataSet = npcs; break;
        case "pickabledoors":
            dataSet = pickabledoors; break;
    }

    for (const [source, data] of Object.entries(dataSet)) {
        var img = "";
        switch (dataSet) {
            default:
            case chests:
                img = `<canvas itemname="${data.itemname[0]}" amount="${data.itemname[1]}" name-replace="${source}" show-label="inline"></canvas>`;
                break;
            case stalls:
                img = `<canvas itemname="${data.itemname}" name-replace="${source}" show-label="inline"></canvas>`;
                break;
            case npcs:
                img = `<canvas npcname="${data.npcname}" icon-size="64"></canvas><br>${source}`;
                break;
            case pickabledoors:
                var lockpick = "";
                if (data.lockpick) {
                    lockpick = "<br>(requires lockpick)";
                }
                if (source.endsWith("Door")) {
                    var img = `<img src="/img/calculators/thieving/door.png" height=32px alt="${source}"><br>${source}&nbsp;${lockpick}`;
                } else {
                    var img = `<img src="/img/calculators/thieving/gate.png" height=32px alt="${source}"><br>${source}&nbsp;${lockpick}`;
                }
                break;
        }
        const count = Math.ceil(xpNeeded / data.xp);
        const row = document.createElement("tr");
        row.innerHTML = `
            <td>${data.level}</td>
            <td>${img}</td>
            <td>${data.xp}</td>
            <td>${count.toLocaleString()}</td>
        `;
        tableBody.appendChild(row);
    }
    window.safeRenderAllSprites();
}
