let mode = "smelting";
function setMode(selectedMode) {
    mode = selectedMode;
    document.getElementById("metalSelection").style.display = mode === "smelting" ? "none" : "block";
    runCalc();
}
const smithingXP = {
    bronze_bar: {
        bronze_dagger: { bars: 1, xp: 12.5, level: 1 },
        bronze_axe: { bars: 1, xp: 12.5, level: 1 },
        bronze_mace: { bars: 1, xp: 12.5, level: 2 },
        bronze_med_helm: { bars: 1, xp: 12.5, level: 3 },
        bronze_sword: { bars: 1, xp: 12.5, level: 4 },
        bronze_dart_tip: { bars: 1, xp: 12.5, level: 4 },
        bronzecraftwire: { bars: 1, xp: 12.5, level: 4 },
        bronze_scimitar: { bars: 2, xp: 25, level: 5 },
        bronze_arrowheads: { bars: 1, xp: 12.5, level: 5 },
        bronze_longsword: { bars: 2, xp: 25, level: 6 },
        bronze_full_helm: { bars: 2, xp: 25, level: 7 },
        bronze_knife: { bars: 1, xp: 12.5, level: 7 },
        bronze_sq_shield: { bars: 2, xp: 25, level: 8 },
        bronze_warhammer: { bars: 3, xp: 37.5, level: 9 },
        bronze_battleaxe: { bars: 3, xp: 37.5, level: 10 },
        bronze_chainbody: { bars: 3, xp: 37.5, level: 11 },
        bronze_kiteshield: { bars: 3, xp: 37.5, level: 12 },
        bronze_claws: { bars: 2, xp: 25, level: 13 },
        bronze_2h_sword: { bars: 3, xp: 37.5, level: 14 },
        bronze_platelegs: { bars: 3, xp: 37.5, level: 16 },
        bronze_plateskirt: { bars: 3, xp: 37.5, level: 16 },
        bronze_platebody: { bars: 5, xp: 62.5, level: 18 },
    },
    iron_bar: {
        iron_dagger: { bars: 1, xp: 25, level: 15 },
        iron_axe: { bars: 1, xp: 25, level: 16 },
        iron_mace: { bars: 1, xp: 25, level: 17 },
        iron_med_helm: { bars: 1, xp: 25, level: 18 },
        iron_sword: { bars: 1, xp: 25, level: 19 },
        iron_dart_tip: { bars: 1, xp: 25, level: 19 },
        iron_scimitar: { bars: 2, xp: 50, level: 20 },
        iron_arrowheads: { bars: 1, xp: 25, level: 20 },
        iron_longsword: { bars: 2, xp: 50, level: 21 },
        iron_full_helm: { bars: 2, xp: 50, level: 22 },
        iron_knife: { bars: 1, xp: 25, level: 22 },
        iron_sq_shield: { bars: 2, xp: 50, level: 23 },
        iron_warhammer: { bars: 3, xp: 75, level: 24 },
        iron_battleaxe: { bars: 3, xp: 75, level: 25 },
        iron_chainbody: { bars: 3, xp: 75, level: 26 },
        iron_kiteshield: { bars: 3, xp: 75, level: 27 },
        iron_claws: { bars: 2, xp: 50, level: 28 },
        iron_2h_sword: { bars: 3, xp: 75, level: 29 },
        iron_platelegs: { bars: 3, xp: 75, level: 31 },
        iron_plateskirt: { bars: 3, xp: 75, level: 31 },
        iron_platebody: { bars: 5, xp: 125, level: 33 },
    },
    steel_bar: {
        steel_dagger: { bars: 1, xp: 37.5, level: 30 },
        steel_axe: { bars: 1, xp: 37.5, level: 31 },
        steel_mace: { bars: 1, xp: 37.5, level: 32 },
        steel_med_helm: { bars: 1, xp: 37.5, level: 33 },
        steel_sword: { bars: 1, xp: 37.5, level: 34 },
        nails: { bars: 1, xp: 37.5, level: 34 },
        steel_dart_tip: { bars: 1, xp: 37.5, level: 34 },
        steel_scimitar: { bars: 2, xp: 75, level: 35 },
        steel_arrowheads: { bars: 1, xp: 37.5, level: 35 },
        mcannonball: { bars: 1, xp: 37.5, level: 35 }, // not sure if 50xp in 225
        steel_longsword: { bars: 2, xp: 75, level: 36 },
        studs: { bars: 1, xp: 37.5, level: 36 },
        steel_full_helm: { bars: 2, xp: 75, level: 37 },
        steel_knife: { bars: 1, xp: 37.5, level: 37 },
        steel_sq_shield: { bars: 2, xp: 75, level: 38 },
        steel_warhammer: { bars: 3, xp: 112.5, level: 39 },
        steel_battleaxe: { bars: 3, xp: 112.5, level: 40 },
        steel_chainbody: { bars: 3, xp: 112.5, level: 41 },
        steel_kiteshield: { bars: 3, xp: 112.5, level: 42 },
        steel_claws: { bars: 2, xp: 75, level: 43 },
        steel_2h_sword: { bars: 3, xp: 112.5, level: 44 },
        steel_platelegs: { bars: 3, xp: 112.5, level: 46 },
        steel_plateskirt: { bars: 3, xp: 112.5, level: 46 },
        steel_platebody: { bars: 5, xp: 187.5, level: 48 },
    },
    mithril_bar: {
        mithril_dagger: { bars: 1, xp: 50, level: 50 },
        mithril_axe: { bars: 1, xp: 50, level: 51 },
        mithril_mace: { bars: 1, xp: 50, level: 52 },
        mithril_med_helm: { bars: 1, xp: 50, level: 53 },
        mithril_sword: { bars: 1, xp: 50, level: 54 },
        mithril_dart_tip: { bars: 1, xp: 50, level: 54 },
        mithril_scimitar: { bars: 2, xp: 100, level: 55 },
        mithril_arrowheads: { bars: 1, xp: 50, level: 55 },
        mithril_longsword: { bars: 2, xp: 100, level: 56 },
        mithril_full_helm: { bars: 2, xp: 100, level: 57 },
        mithril_knife: { bars: 1, xp: 50, level: 57 },
        mithril_sq_shield: { bars: 2, xp: 100, level: 58 },
        mithril_warhammer: { bars: 3, xp: 150, level: 59 },
        mithril_battleaxe: { bars: 3, xp: 150, level: 60 },
        mithril_chainbody: { bars: 3, xp: 150, level: 61 },
        mithril_kiteshield: { bars: 3, xp: 150, level: 62 },
        mithril_claws: { bars: 2, xp: 100, level: 63 },
        mithril_2h_sword: { bars: 3, xp: 150, level: 64 },
        mithril_platelegs: { bars: 3, xp: 150, level: 66 },
        mithril_plateskirt: { bars: 3, xp: 150, level: 66 },
        mithril_platebody: { bars: 5, xp: 250, level: 68 },
    },
    adamantite_bar: {
        adamant_dagger: { bars: 1, xp: 62.5, level: 70 },
        adamant_axe: { bars: 1, xp: 62.5, level: 71 },
        adamant_mace: { bars: 1, xp: 62.5, level: 72 },
        adamant_med_helm: { bars: 1, xp: 62.5, level: 73 },
        adamant_sword: { bars: 1, xp: 62.5, level: 74 },
        adamant_dart_tip: { bars: 1, xp: 62.5, level: 74 },
        adamant_scimitar: { bars: 2, xp: 125, level: 75 },
        adamant_arrowheads: { bars: 1, xp: 62.5, level: 75 },
        adamant_longsword: { bars: 2, xp: 125, level: 76 },
        adamant_full_helm: { bars: 2, xp: 125, level: 77 },
        adamant_knife: { bars: 1, xp: 62.5, level: 77 },
        adamant_sq_shield: { bars: 2, xp: 125, level: 78 },
        adamnt_warhammer: { bars: 3, xp: 187.5, level: 79 },
        adamant_battleaxe: { bars: 3, xp: 187.5, level: 80 },
        adamant_chainbody: { bars: 3, xp: 187.5, level: 81 },
        adamant_kiteshield: { bars: 3, xp: 187.5, level: 82 },
        adamant_claws: { bars: 2, xp: 125, level: 83 },
        adamant_2h_sword: { bars: 3, xp: 187.5, level: 84 },
        adamant_platelegs: { bars: 3, xp: 187.5, level: 86 },
        adamant_plateskirt: { bars: 3, xp: 187.5, level: 86 },
        adamant_platebody: { bars: 5, xp: 312.5, level: 88 },
    },
    runite_bar: {
        rune_dagger: { bars: 1, xp: 75, level: 85 },
        rune_axe: { bars: 1, xp: 75, level: 86 },
        rune_mace: { bars: 1, xp: 75, level: 87 },
        rune_med_helm: { bars: 1, xp: 75, level: 88 },
        rune_sword: { bars: 1, xp: 75, level: 89 },
        rune_dart_tip: { bars: 1, xp: 75, level: 89 },
        rune_scimitar: { bars: 2, xp: 150, level: 90 },
        rune_arrowheads: { bars: 1, xp: 75, level: 90 },
        rune_longsword: { bars: 2, xp: 150, level: 91 },
        rune_full_helm: { bars: 2, xp: 150, level: 92 },
        rune_knife: { bars: 1, xp: 75, level: 92 },
        rune_sq_shield: { bars: 2, xp: 150, level: 93 },
        rune_warhammer: { bars: 3, xp: 225, level: 94 },
        rune_battleaxe: { bars: 3, xp: 225, level: 95 },
        rune_chainbody: { bars: 3, xp: 225, level: 96 },
        rune_kiteshield: { bars: 3, xp: 225, level: 97 },
        rune_claws: { bars: 2, xp: 150, level: 98 },
        rune_2h_sword: { bars: 3, xp: 225, level: 99 },
        rune_platelegs: { bars: 3, xp: 225, level: 99 },
        rune_plateskirt: { bars: 3, xp: 225, level: 99 },
        rune_platebody: { bars: 5, xp: 375, level: 99 },
    },
};

const smeltingXP = {
    bronze_bar: {
        xp: 6.2, level: 1,
        ingredients: { copper_ore: 1, tin_ore: 1 }
    },
    iron_bar: {
        xp: 12.5, level: 15,
        ingredients: { iron_ore: 1 }
    }, 
    iron_bar_no_forging: {//not a debugname
        xp: 12.5, level: 15,
        ingredients: { iron_ore: 2 }
    },
    elemental_workshop_bar: {
        xp: 8, level: 20,
        ingredients: { elemental_workshop_ore: 1, coal: 4 }
    },
    silver_bar: {
        xp: 13.7, level: 20,
        ingredients: { silver_ore: 1 }
    },
    steel_bar: {
        xp: 17.5, level: 30,
        ingredients: { iron_ore: 1, coal: 2 }
    },
    gold_bar: {
        xp: 22.5, level: 40,
        ingredients: { gold_ore: 1 }
    },
    gold_smithgauntlets: {//not a debugname
        xp: 56.2, level: 40,
        ingredients: { gold_ore: 1 }
    },
    mithril_bar: {
        xp: 30, level: 50,
        ingredients: { mithril_ore: 1, coal: 4 }
    },
    adamantite_bar: {
        xp: 37.5, level: 70,
        ingredients: { adamantite_ore: 1, coal: 6 }
    },
    runite_bar: {
        xp: 50, level: 85,
        ingredients: { runite_ore: 1, coal: 8 }
    },
};

function runCalc() {
    const currentXP = parseInt(document.getElementById("currentXP").value);
    const targetXP = parseInt(document.getElementById("targetXP").value);
    const xpNeeded = targetXP - currentXP;

    const selectedMetal = document.getElementById("metalType").value;
    const smithingData = smithingXP[selectedMetal];
    const smeltingData = smeltingXP;

    updateProgressBar(currentXP, targetXP);

    const tableElem = document.querySelector("#resultsTable");
    tableElem.innerHTML = "";
    const tableBody = document.createElement("tbody");
    const tableHead = document.createElement("thead");
    const headerRow = document.createElement("tr");
    const barXPvalue = smeltingXP[selectedMetal].xp;

    switch (mode) {
        default:
        case "smelting":
            headerRow.innerHTML = `<th>Level</th><th>Actions</th><th>XP Each</th><th>Total Materials</th>`;
            tableHead.appendChild(headerRow);
            for (const [item, data] of Object.entries(smeltingData)) {
                const amountNeeded = Math.ceil(xpNeeded / data.xp);
                const row = document.createElement("tr");

                let iteminfo = `"${item}"`;
                switch (item) {
                    case "iron_bar_no_forging":
                        iteminfo = `"iron_bar" name-append=" (No Ring of Forging/Superheat)"`; break;
                    case "gold_smithgauntlets":
                        iteminfo = `"gold_bar" name-append=" (Gauntlets)"`; break;
                    default: break;
                }

                let ingredientsList = "";
                for (const [ingredient, qty] of Object.entries(data.ingredients)) {
                    ingredientsList += `<canvas itemname="${ingredient}" show-label="inline" amount="${qty*amountNeeded}"></canvas>`;
                }

                row.innerHTML = `<td>${data.level}</td>
                                <td><canvas itemname=${iteminfo} amount="${amountNeeded}" show-label="true"></canvas></td>
                                <td>${data.xp}</td>
                                <td>${ingredientsList}</td>`;
                    
                tableBody.appendChild(row);
            }
            break;
        case "smithing":
            headerRow.innerHTML = `<th>Level</th><th>Actions</th><th>XP Each</th><th>Bars Each</th><th>Total Materials</th>`;
            tableHead.appendChild(headerRow);

            for (const [item, data] of Object.entries(smithingData)) {
                const amountNeeded = Math.ceil(xpNeeded / data.xp);
                const row = document.createElement("tr");
                row.innerHTML = `<td>${data.level}</td>
                                <td><canvas itemname="${item}" show-label="true" amount="${amountNeeded}"></canvas></td>
                                <td>${data.xp}</td>
                                <td>${data.bars}</td>
                                <td><canvas itemname="${selectedMetal}" show-label="inline" amount="${amountNeeded*data.bars}"></canvas></td>`;
                tableBody.appendChild(row);
            }
            break;
        case "smelting_smithing":
            headerRow.innerHTML = `<th>Level</th><th>Actions</th><th>XP Each</th><th>Bars Each</th><th>Total Materials</th>`;
            tableHead.appendChild(headerRow);

            for (const [item, data] of Object.entries(smithingData)) {

                const amountNeeded = Math.ceil(xpNeeded / (data.xp + data.bars * barXPvalue));
                const row = document.createElement("tr");

                let ingredientsList = "";
                for (const [ingredient, qty] of Object.entries(smeltingData[selectedMetal].ingredients)) {
                    ingredientsList += `<canvas itemname="${ingredient}" show-label="inline" amount="${(qty*amountNeeded*data.bars)}"></canvas>`;
                }
                row.innerHTML = `<td>${data.level}</td>
                                <td><canvas itemname="${item}" show-label="true" amount="${amountNeeded}"></canvas></td>
                                <td>${data.xp}</td>
                                <td>${data.bars}</td>
                                <td>${ingredientsList}</td>`;
                tableBody.appendChild(row);
            }
            break;
    }
    tableElem.appendChild(tableHead);
    tableElem.appendChild(tableBody);
    window.safeRenderAllSprites();
}
