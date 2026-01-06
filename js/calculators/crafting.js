let mode = "needle_thread";
function setMode(selectedMode) {
    mode = selectedMode;
    runCalc();
}

const craftingXP = {
    needle_thread: {
        leather_gloves: { xp: 13.8, level: 1 },
        leather_boots: { xp: 16.3, level: 7 },
        leather_cowl: { xp: 18.5, level: 9 },
        leather_vambraces: { xp: 22, level: 11 },
        leather_armour: { xp: 25, level: 14 },
        leather_chaps: { xp: 27, level: 18 },
        hardleather_body: { xp: 35, level: 28 },
        coif: { xp: 37, level: 38 },
        studded_body: { xp: 40, level: 41 },
        studded_chaps: { xp: 42, level: 44 },
        dragon_vambraces: { xp: 62, level: 57 }, //green
        dragonhide_chaps: { xp: 124, level: 60 }, //green
        dragonhide_body: { xp: 186, level: 63 }, //green
        blue_dragon_vambraces: { xp: 70, level: 66 },
        blue_dragonhide_chaps: { xp: 140, level: 68 },
        blue_dragonhide_body: { xp: 210, level: 71 },
        red_dragon_vambraces: { xp: 78, level: 73 },
        red_dragonhide_chaps: { xp: 156, level: 75 },
        red_dragonhide_body: { xp: 234, level: 77 },
        black_dragon_vambraces: { xp: 86, level: 79 },
        black_dragonhide_chaps: { xp: 172, level: 82 },
        black_dragonhide_body: { xp: 258, level: 84 },
    },
    jewellery: {
        opal: { xp: 15, level: 1 },
        gold_ring: { xp: 15, level: 5 },
        gold_necklace: { xp: 20, level: 6 },
        unstrung_gold_amulet: { xp: 30, level: 8 },
        strung_gold_amulet: { xp: 34, level: 8 },
        jade: { xp: 20, level: 13 },
        red_topaz: { xp: 25, level: 16 },
        nostringstar: { xp: 50, level: 16 },
        stringstar: { xp: 54, level: 16 },
        silver_sickle: { xp: 50, level: 18 },
        sapphire: { xp: 50, level: 20 },
        sapphire_ring: { xp: 40, level: 20 },
        sapphire_necklace: { xp: 55, level: 22 },
        unstrung_sapphire_amulet: { xp: 65, level: 24 },
        strung_sapphire_amulet: { xp: 69, level: 24 },
        emerald: { xp: 67.5, level: 27 },
        emerald_ring: { xp: 55, level: 27 },
        emerald_necklace: { xp: 60, level: 29 },
        unstrung_emerald_amulet: { xp: 70, level: 31 },
        strung_emerald_amulet: { xp: 74, level: 31 },
        ruby: { xp: 85, level: 34 },
        ruby_ring: { xp: 70, level: 34 },
        ruby_necklace: { xp: 75, level: 40 },
        diamond: { xp: 107.5, level: 43 },
        diamond_ring: { xp: 85, level: 43 },
        unstrung_ruby_amulet: { xp: 85, level: 50 },
        strung_ruby_amulet: { xp: 89, level: 50 },
        dragonstone: { xp: 137.5, level: 55 },
        dragonstone_ring: { xp: 100, level: 55 },
        diamond_necklace: { xp: 90, level: 56 },
        unstrung_diamond_amulet: { xp: 100, level: 70 },
        strung_diamond_amulet: { xp: 104, level: 70 },
        dragonstone_necklace: { xp: 105, level: 72 },
        unstrung_dragonstone_amulet: { xp: 150, level: 80 },
        strung_dragonstone_amulet: { xp: 154, level: 80 },
    },
    pottery_glass: {
        pot_unfired: { xp: 6.3, level: 1 },
        pot_empty: { xp: 12.6, level: 1 },
        beer_glass: { xp: 17.5, level: 1 },
        molten_glass: { xp: 20, level: 1 },
        piedish_unfired: { xp: 15, level: 7 },
        piedish: { xp: 25, level: 7 },
        bowl_unfired: { xp: 18, level: 8 },
        bowl_empty: { xp: 33, level: 8 },
        vial_empty: { xp: 35, level: 33 },
        stafforb: { xp: 52.5, level: 46 },
        water_battlestaff: { xp: 100, level: 54 },
        earth_battlestaff: { xp: 112.5, level: 58 },
        fire_battlestaff: { xp: 125, level: 62 },
        air_battlestaff: { xp: 137.5, level: 66 },
    },
    spinning: {
        ball_of_wool: { xp: 2.5, level: 1 },
        bow_string: { xp: 15, level: 10 },
    },
};

function runCalc() {
    const currentXP = parseInt(document.getElementById("currentXP").value);
    const targetXP = parseInt(document.getElementById("targetXP").value);
    const xpNeeded = targetXP - currentXP;

    updateProgressBar(currentXP, targetXP);

    const tableBody = document.querySelector("#resultsTable tbody");
    tableBody.innerHTML = "";

    for (const item in craftingXP[mode]) {
        const xpPerItem = craftingXP[mode][item].xp;
        const levelRequired = craftingXP[mode][item].level;
        const itemsNeeded = Math.ceil(xpNeeded / xpPerItem);

        const row = document.createElement("tr");
        row.innerHTML =
            `<td>${levelRequired}</td>
            <td><canvas itemname="${item}" show-label="inline"></canvas></td>
            <td>${xpPerItem}</td>
            <td>${itemsNeeded.toLocaleString()}</td>`;
        tableBody.appendChild(row);
    }
    window.safeRenderAllSprites();
}
