let mode = "smelting_bars";
function setMode(selectedMode) {
    mode = selectedMode;
    document.getElementById("metalSelection").style.display = mode === "smelting" ? "none" : "block";
    runCalc();
}
const smithingXP = {
    bronze: {
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
        bronze_2h_sword: { bars: 3, xp: 37.5, level: 14 },
        bronze_platelegs: { bars: 3, xp: 37.5, level: 16 },
        bronze_plateskirt: { bars: 3, xp: 37.5, level: 16 },
        bronze_platebody: { bars: 5, xp: 62.5, level: 18 },
    },
    iron: {
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
        iron_2h_sword: { bars: 3, xp: 75, level: 29 },
        iron_platelegs: { bars: 3, xp: 75, level: 31 },
        iron_plateskirt: { bars: 3, xp: 75, level: 31 },
        iron_platebody: { bars: 5, xp: 125, level: 33 },
    },
    steel: {
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
        steel_2h_sword: { bars: 3, xp: 112.5, level: 44 },
        steel_platelegs: { bars: 3, xp: 112.5, level: 46 },
        steel_plateskirt: { bars: 3, xp: 112.5, level: 46 },
        steel_platebody: { bars: 5, xp: 187.5, level: 48 },
    },
    mithril: {
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
        mithril_2h_sword: { bars: 3, xp: 150, level: 64 },
        mithril_platelegs: { bars: 3, xp: 150, level: 66 },
        mithril_plateskirt: { bars: 3, xp: 150, level: 66 },
        mithril_platebody: { bars: 5, xp: 250, level: 68 },
    },
    adamant: {
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
        adamant_2h_sword: { bars: 3, xp: 187.5, level: 84 },
        adamant_platelegs: { bars: 3, xp: 187.5, level: 86 },
        adamant_plateskirt: { bars: 3, xp: 187.5, level: 86 },
        adamant_platebody: { bars: 5, xp: 312.5, level: 88 },
    },
    rune: {
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
        rune_2h_sword: { bars: 3, xp: 225, level: 99 },
        rune_platelegs: { bars: 3, xp: 225, level: 99 },
        rune_plateskirt: { bars: 3, xp: 225, level: 99 },
        rune_platebody: { bars: 5, xp: 375, level: 99 },
    },
};

const smeltingXP = {
    bronze_bar: { xp: 6.2, level: 1 },
    iron_bar: { xp: 12.5, level: 15 },
    silver_bar: { xp: 13.7, level: 20 },
    steel_bar: { xp: 17.5, level: 30 },
    gold_bar: { xp: 22.5, level: 40 },
    goldsmithgauntlets: { xp: 56.2, level: 40 }, //not a debugname
    mithril_bar: { xp: 30, level: 50 },
    adamantite_bar: { xp: 37.5, level: 70 },
    runite_bar: { xp: 50, level: 85 },
};

const barXP = {
    bronze: 6.2,
    iron: 12.5,
    steel: 17.5,
    mithril: 22.5,
    adamant: 37.5,
    rune: 50,
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
    const tableBody = tableElem.querySelector("tbody");
    const tableHead = tableElem.querySelector("thead");
    tableHead.innerHTML = "";
    let headerRow = document.createElement("tr");

    if (mode === "smelting") {
        headerRow.innerHTML = `<th>Level</th><th>Item</th><th>XP per Smelt</th><th>Total Bars</th>`;
    } else {
        headerRow.innerHTML = `<th>Level</th><th>Item</th><th>Bars Needed</th><th>Total Items</th>`;
    }

    tableHead.appendChild(headerRow);

    tableBody.innerHTML = "";

    if (mode === "smelting") {
        for (const [item, data] of Object.entries(smeltingData)) {
            // Skip items above target level
            // Use for later
            //    if (data.level > targetLevel) continue;

            const amountNeeded = Math.ceil(xpNeeded / data.xp);

            const row = document.createElement("tr");
            let iteminfo = `"${item}"`;
            if (item == "goldsmithgauntlets") {
                iteminfo = `"gold_bar" data-name-append="(Goldsmith Gauntlets)"`;
            }
            row.innerHTML = `
                <td>${data.level}</td>
                <td><canvas data-itemname=${iteminfo} data-show-label="inline"></canvas></td>
                <td>${data.xp}</td>
                <td>${amountNeeded.toLocaleString()}</td>
            `;
            tableBody.appendChild(row);
        }
    } else {
        for (const [item, data] of Object.entries(smithingData)) {
            // Skip items above target level
            // Use for later
            //    if (data.level > targetLevel) continue;

            let amountNeeded;

            if (mode === "smelting_bars") {
                const barXPvalue = barXP[selectedMetal];
                amountNeeded = Math.ceil(xpNeeded / (data.xp + data.bars * barXPvalue));
            } else {
                amountNeeded = Math.ceil(xpNeeded / data.xp);
            }

            const row = document.createElement("tr");
            row.innerHTML = `
                <td>${data.level}</td>
                <td><canvas data-itemname="${item}" data-show-label="inline"></canvas></td>
                <td>${data.bars}</td>
                <td>${amountNeeded.toLocaleString()}</td>
            `;
            tableBody.appendChild(row);
        }
    }

    window.safeRenderAllSprites();
}
