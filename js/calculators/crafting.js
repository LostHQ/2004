let mode = 'needle_thread';
function setMode(selectedMode) {
    mode = selectedMode;
    runCalc();
}

function runCalc() {
    const currentXP = parseInt(document.getElementById("currentXP").value);
    const targetXP = parseInt(document.getElementById("targetXP").value);
    const xpNeeded = targetXP - currentXP;

    const craftingXP = {
        "needle_thread": {
            "Leather Gloves": { xp: 13.8, level: 1 },
            "Leather Boots": { xp: 16.3, level: 7 },
            "Leather Cowl": { xp: 18.5, level: 9 },
            "Leather Vambraces": { xp: 22, level: 11 },
            "Leather Body": { xp: 25, level: 14 },
            "Leather Chaps": { xp: 27, level: 18 },
            "HardLeather Body": { xp: 35, level: 28 },
            "Coif": { xp: 37, level: 38 },
            "Studded Body": { xp: 40, level: 41 },
            "Studded Chaps": { xp: 42, level: 44 },
            "Dragon Vambraces": { xp: 62, level: 57 },//green
            "dragonhide Chaps": { xp: 124, level: 60 },//green
            "dragonhide body": { xp: 186, level: 63 },//green
            "Blue dragon Vambraces": { xp: 70, level: 66 },
            "Blue dragonhide Chaps": { xp: 140, level: 68 },
            "Blue dragonhide Body": { xp: 210, level: 71 },
            "Red dragon Vambraces": { xp: 78, level: 73 },
            "Red dragonhide Chaps": { xp: 156, level: 75 },
            "Red dragonhide Body": { xp: 234, level: 77 },
            "Black dragon Vambraces": { xp: 86, level: 79 },
            "Black dragonhide Chaps": { xp: 172, level: 82 },
            "Black dragonhide Body": { xp: 258, level: 84 }
        },
        "jewellery": {
            "Opal": { xp: 15, level: 1 },
            "Gold Ring": { xp: 15, level: 5 },
            "Gold Necklace": { xp: 20, level: 6 },
            "unstrung Gold Amulet": { xp: 30, level: 8 },
            "strung Gold Amulet": { xp: 34, level: 8 },
            "Jade": { xp: 20, level: 13 },
            "Red Topaz": { xp: 25, level: 16 },
            "nostringstar": { xp: 50, level: 16 },
            "stringstar": { xp: 54, level: 16 },
            "silver_sickle": { xp: 50, level: 18 },
            "Sapphire": { xp: 50, level: 20 },
            "Sapphire Ring": { xp: 40, level: 20 },
            "Sapphire Necklace": { xp: 55, level: 22 },
            "unstrung Sapphire Amulet": { xp: 65, level: 24 },
            "strung Sapphire Amulet": { xp: 69, level: 24 },
            "Emerald": { xp: 67.5, level: 27 },
            "Emerald Ring": { xp: 55, level: 27 },
            "Emerald Necklace": { xp: 60, level: 29 },
            "unstrung Emerald Amulet": { xp: 70, level: 31 },
            "strung Emerald Amulet": { xp: 74, level: 31 },
            "Ruby": { xp: 85, level: 34 },
            "Ruby Ring": { xp: 70, level: 34 },
            "Ruby Necklace": { xp: 75, level: 40 },
            "Diamond": { xp: 107.5, level: 43 },
            "Diamond Ring": { xp: 85, level: 43 },
            "unstrung Ruby Amulet": { xp: 85, level: 50 },
            "strung Ruby Amulet": { xp: 89, level: 50 },
            "Dragonstone": { xp: 137.5, level: 55 },
            "Dragonstone Ring": { xp: 100, level: 55 },
            "Diamond Necklace": { xp: 90, level: 56 },
            "unstrung Diamond Amulet": { xp: 100, level: 70 },
            "strung Diamond Amulet": { xp: 104, level: 70 },
            "Dragonstone Necklace": { xp: 105, level: 72 },
            "unstrung Dragonstone Amulet": { xp: 150, level: 80 },
            "strung Dragonstone Amulet": { xp: 154, level: 80 }
        },
        "pottery_glass": {
            "Pot unfired": { xp: 6.3, level: 1 },
            "Pot empty": { xp: 12.6, level: 1 },
            "Beer Glass": { xp: 17.5, level: 1 },
            "Molten Glass": { xp: 20, level: 1 },
            "PieDish unfired": { xp: 15, level: 7 },
            "PieDish": { xp: 25, level: 7 },
            "Bowl unfired": { xp: 18, level: 8 },
            "Bowl empty": { xp: 33, level: 8 },
            "Vial empty": { xp: 35, level: 33 },
            "stafforb": { xp: 52.5, level: 46 },
            "water battlestaff": { xp: 100, level: 54 },
            "earth battlestaff": { xp: 112.5, level: 58 },
            "fire battlestaff": { xp: 125, level: 62 },
            "air battlestaff": { xp: 137.5, level: 66 }
        },
        "spinning": {
            "Ball of Wool": { xp: 2.5, level: 1 },
            "Bow String": { xp: 15, level: 10 }
        }
    };

    updateProgressBar(currentXP, targetXP);

    const tableBody = document.querySelector("#resultsTable tbody");
    tableBody.innerHTML = "";

    for (let item in craftingXP[mode]) {
        let xpPerItem = craftingXP[mode][item].xp;
        let levelRequired = craftingXP[mode][item].level;
        let itemsNeeded = Math.ceil(xpNeeded / xpPerItem);
        
        let row = document.createElement("tr");
        row.innerHTML = `
            <td>${levelRequired}</td>
            <td><canvas data-itemname="${item.toLowerCase().replace(/\s+/g, "_")}" data-show-label="inline"></canvas></td>
            <td>${xpPerItem}</td>
            <td>${itemsNeeded.toLocaleString()}</td>
        `;
        tableBody.appendChild(row);
    }
    window.safeRenderAllSprites();
}