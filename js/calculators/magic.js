let mode = "combat";
function setMode(newMode) {
    mode = newMode;
    runCalc();
}
function runCalc() {
    const currentXP = parseInt(document.getElementById("currentXP").value);
    const targetXP = parseInt(document.getElementById("targetXP").value);
    const xpNeeded = targetXP - currentXP;

    const combatSpells = {
        "Wind Strike": { xp: 5.5, level: 1 },
        Confuse: { xp: 13, level: 3 },
        "Water Strike": { xp: 7.5, level: 5 },
        "Earth Strike": { xp: 9.5, level: 9 },
        Weaken: { xp: 21, level: 11 },
        "Fire Strike": { xp: 11.5, level: 13 },
        "Wind Bolt": { xp: 13.5, level: 17 },
        Curse: { xp: 29, level: 19 },
        Bind: { xp: 30, level: 20 },
        "Water Bolt": { xp: 16.5, level: 23 },
        "Earth Bolt": { xp: 19.5, level: 29 },
        "Fire Bolt": { xp: 22.5, level: 35 },
        "Crumble Undead": { xp: 24.5, level: 39 },
        "Wind Blast": { xp: 25.5, level: 41 },
        "Water Blast": { xp: 28.5, level: 47 },
        "Iban Blast": { xp: 30, level: 50 },
        Snare: { xp: 60, level: 50 },
        "Earth Blast": { xp: 31.5, level: 53 },
        "Fire Blast": { xp: 34.5, level: 59 },
        "Saradomin Strike": { xp: 35, level: 60 },
        "Claws of Guthix": { xp: 35, level: 60 },
        "Flames of Zamorak": { xp: 35, level: 60 },
        "Wind Wave": { xp: 36, level: 62 },
        "Water Wave": { xp: 37.5, level: 65 },
        Vulnerability: { xp: 76, level: 66 },
        "Earth Wave": { xp: 40, level: 70 },
        Enfeeble: { xp: 89, level: 73 },
        "Fire Wave": { xp: 42.5, level: 75 },
        Entangle: { xp: 90, level: 79 },
        Stun: { xp: 80, level: 80 },
    };
    const nonCombatSpells = {
        "Lvl-1 Enchant": { xp: 17.5, level: 7 },
        "Bones to Bananas": { xp: 25, level: 15 },
        "Low Level Alchemy": { xp: 31, level: 21 },
        "Varrock Teleport": { xp: 35, level: 25 },
        "Lvl-2 Enchant": { xp: 37, level: 27 },
        "Lumbridge Teleport": { xp: 41, level: 31 },
        "Telekinetic Grab": { xp: 43, level: 33 },
        "Falador Teleport": { xp: 47, level: 37 },
        "Superheat Item": { xp: 53, level: 43 },
        "Camelot Teleport": { xp: 55.5, level: 45 },
        "Lvl-3 Enchant": { xp: 59, level: 49 },
        "Ardougne Teleport": { xp: 61, level: 51 },
        "High Level Alchemy": { xp: 65, level: 55 },
        "Charge Water Orb": { xp: 56, level: 56 },
        "Lvl-4 Enchant": { xp: 67, level: 57 },
        "Watchtower Teleport": { xp: 68, level: 58 },
        "Charge Earth Orb": { xp: 70, level: 60 },
        "Charge Fire Orb": { xp: 73, level: 63 },
        "Charge Air Orb": { xp: 76, level: 66 },
        "Lvl-5 Enchant": { xp: 78, level: 68 },
        Charge: { xp: 180, level: 80 },
    };

    updateProgressBar(currentXP, targetXP);

    const tableBody = document.querySelector("#resultsTable tbody");
    tableBody.innerHTML = "";

    let dataSet;
    switch (mode) {
        default:
        case "combat":
            dataSet = combatSpells;
            break;
        case "noncombat":
            dataSet = nonCombatSpells;
            break;
    }

    for (let source in dataSet) {
        var img = `<img src="img/calculators/magic/${source.toLowerCase().replace(/\s+/g, "_")}.png" height=20px alt="${source}"><br>${source}`;
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
