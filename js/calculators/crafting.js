let mode = "needle_thread";
function setMode(selectedMode) {
    mode = selectedMode;
    runCalc();
}

const craftingXP = {
    needle_thread: {
        leather_gloves: {
            xp: 13.8, level: 1,
            ingredients: { leather: 1, thread: 0.2 }
        },
        leather_boots: {
            xp: 16.3, level: 7,
            ingredients: { leather: 1, thread: 0.2 }
        },
        leather_cowl: {
            xp: 18.5, level: 9,
            ingredients: { leather: 1, thread: 0.2 }
        },
        leather_vambraces: {
            xp: 22, level: 11,
            ingredients: { leather: 1, thread: 0.2 }
        },
        leather_armour: {
            xp: 25, level: 14,
            ingredients: { leather: 1, thread: 0.2 }
        },
        leather_chaps: {
            xp: 27, level: 18,
            ingredients: { leather: 1, thread: 0.2 }
        },
        hardleather_body: {
            xp: 35, level: 28,
            ingredients: { hard_leather: 1, thread: 0.2 }
        },
        coif: {
            xp: 37, level: 38,
            ingredients: { leather: 1, thread: 0.2 }
        },
        studded_body: {
            xp: 40, level: 41,
            ingredients: { leather_armour: 1, studs: 1 }
        },
        studded_chaps: {
            xp: 42, level: 44,
            ingredients: { leather_chaps: 1, studs: 1 }
        },
        dragon_vambraces: {
            xp: 62, level: 57,
            ingredients: { dragonhide_green: 1, thread: 0.2 }
        }, 
        dragonhide_chaps: {
            xp: 124, level: 60,
            ingredients: { dragonhide_green: 2, thread: 0.2 }
        },
        dragonhide_body: {
            xp: 186, level: 63,
            ingredients: { dragonhide_green: 3, thread: 0.2 }
        },
        blue_dragon_vambraces: {
            xp: 70, level: 66,
            ingredients: { dragonhide_blue: 1, thread: 0.2 }
        },
        blue_dragonhide_chaps: {
            xp: 140, level: 68,
            ingredients: { dragonhide_blue: 2, thread: 0.2 }
        },
        blue_dragonhide_body: {
            xp: 210, level: 71,
            ingredients: { dragonhide_blue: 3, thread: 0.2 }
        },
        red_dragon_vambraces: {
            xp: 78, level: 73,
            ingredients: { dragonhide_red: 1, thread: 0.2 }
        },
        red_dragonhide_chaps: {
            xp: 156, level: 75,
            ingredients: { dragonhide_red: 2, thread: 0.2 }
        },
        red_dragonhide_body: {
            xp: 234, level: 77,
            ingredients: { dragonhide_red: 3, thread: 0.2 }
        },
        black_dragon_vambraces: {
            xp: 86, level: 79,
            ingredients: { dragonhide_black: 1, thread: 0.2 }
        },
        black_dragonhide_chaps: {
            xp: 172, level: 82,
            ingredients: { dragonhide_black: 2, thread: 0.2 }
        },
        black_dragonhide_body: {
            xp: 258, level: 84,
            ingredients: { dragonhide_black: 3, thread: 0.2 }
        },
    },
    jewellery: {
        opal: {
            xp: 15, level: 1,
            ingredients: { uncut_opal: 1 }
        },
        gold_ring: {
            xp: 15, level: 5,
            ingredients: { gold_bar: 1 }
        },
        gold_necklace: {
            xp: 20, level: 6,
            ingredients: { gold_bar: 1 }
        },
        unstrung_gold_amulet: {
            xp: 30, level: 8,
            ingredients: { gold_bar: 1 }
        },
        strung_gold_amulet: {
            xp: 34, level: 8,
            ingredients: { gold_bar: 1, ball_of_wool: 1 }
        },
        jade: {
            xp: 20, level: 13,
            ingredients: { uncut_jade: 1 }
        },
        red_topaz: {
            xp: 25, level: 16,
            ingredients: { uncut_red_topaz: 1 }
        },
        nostringstar: {
            xp: 50, level: 16,
            ingredients: { silver_bar: 1 }
        },
        stringstar: {
            xp: 54, level: 16,
            ingredients: { silver_bar: 1, ball_of_wool: 1 }
        },
        silver_sickle: {
            xp: 50, level: 18,
            ingredients: { silver_bar: 1 }
        },
        sapphire: {
            xp: 50, level: 20,
            ingredients: { uncut_sapphire: 1 }
        },
        sapphire_ring: {
            xp: 40, level: 20,
            ingredients: { gold_bar: 1, sapphire: 1 }
        },
        sapphire_necklace: {
            xp: 55, level: 22,
            ingredients: { gold_bar: 1, sapphire: 1 }
        },
        unstrung_sapphire_amulet: {
            xp: 65, level: 24,
            ingredients: { gold_bar: 1, sapphire: 1 }
        },
        strung_sapphire_amulet: {
            xp: 69, level: 24,
            ingredients: { gold_bar: 1, sapphire: 1, ball_of_wool: 1 }
        },
        emerald: {
            xp: 67.5, level: 27,
            ingredients: { uncut_emerald: 1 }
        },
        emerald_ring: {
            xp: 55, level: 27,
            ingredients: { gold_bar: 1, emerald: 1 }
        },
        emerald_necklace: {
            xp: 60, level: 29,
            ingredients: { gold_bar: 1, emerald: 1 }
        },
        unstrung_emerald_amulet: {
            xp: 70, level: 31,
            ingredients: { gold_bar: 1, emerald: 1 }
        },
        strung_emerald_amulet: {
            xp: 74, level: 31,
            ingredients: { gold_bar: 1, emerald: 1, ball_of_wool: 1 }
        },
        ruby: {
            xp: 85, level: 34,
            ingredients: { uncut_ruby: 1 }
        },
        ruby_ring: {
            xp: 70, level: 34,
            ingredients: { gold_bar: 1, ruby: 1 }
        },
        ruby_necklace: {
            xp: 75, level: 40,
            ingredients: { gold_bar: 1, ruby: 1 }
        },
        diamond: {
            xp: 107.5, level: 43,
            ingredients: { uncut_diamond: 1 }
        },
        diamond_ring: {
            xp: 85, level: 43,
            ingredients: { gold_bar: 1, diamond: 1 }
        },
        unstrung_ruby_amulet: {
            xp: 85, level: 50,
            ingredients: { gold_bar: 1, ruby: 1 }
        },
        strung_ruby_amulet: {
            xp: 89, level: 50,
            ingredients: { gold_bar: 1, ruby: 1, ball_of_wool: 1 }
        },
        dragonstone: {
            xp: 137.5, level: 55,
            ingredients: { uncut_dragonstone: 1 }
        },
        dragonstone_ring: {
            xp: 100, level: 55,
            ingredients: { gold_bar: 1, dragonstone: 1 }
        },
        diamond_necklace: {
            xp: 90, level: 56,
            ingredients: { gold_bar: 1, diamond: 1 }
        },
        unstrung_diamond_amulet: {
            xp: 100, level: 70,
            ingredients: { gold_bar: 1, diamond: 1 }
        },
        strung_diamond_amulet: {
            xp: 104, level: 70,
            ingredients: { gold_bar: 1, diamond: 1, ball_of_wool: 1 }
        },
        dragonstone_necklace: {
            xp: 105, level: 72,
            ingredients: { gold_bar: 1, dragonstone: 1 }
        },
        unstrung_dragonstone_amulet: {
            xp: 150, level: 80,
            ingredients: { gold_bar: 1, dragonstone: 1 }
        },
        strung_dragonstone_amulet: {
            xp: 154, level: 80,
            ingredients: { gold_bar: 1, dragonstone: 1, ball_of_wool: 1 }
        },
    },
    pottery_glass: {
        pot_unfired: {
            xp: 6.3, level: 1,
            ingredients: { softclay: 1 }
        },
        pot_empty: {
            xp: 12.6, level: 1,
            ingredients: { softclay: 1 }
        },
        beer_glass: {
            xp: 17.5, level: 1,
            ingredients: { molten_glass: 1 }
        },
        molten_glass: {
            xp: 20, level: 1,
            ingredients: { bucket_sand: 1, soda_ash: 1 }
        },
        piedish_unfired: {
            xp: 15, level: 7,
            ingredients: { softclay: 1 }
        },
        piedish: {
            xp: 25, level: 7,
            ingredients: { softclay: 1 }
        },
        bowl_unfired: {
            xp: 18, level: 8,
            ingredients: { softclay: 1 }
        },
        bowl_empty: {
            xp: 33, level: 8,
            ingredients: { softclay: 1 }
        },
        vial_empty: {
            xp: 35, level: 33,
            ingredients: { molten_glass: 1 }
        },
        stafforb: {
            xp: 52.5, level: 46,
            ingredients: { molten_glass: 1 }
        },
        water_battlestaff: {
            xp: 100, level: 54,
            ingredients: { water_orb: 1, battlestaff: 1 }
        },
        earth_battlestaff: {
            xp: 112.5, level: 58,
            ingredients: { earth_orb: 1, battlestaff: 1 }
        },
        fire_battlestaff: {
            xp: 125, level: 62,
            ingredients: { fire_orb: 1, battlestaff: 1 }
        },
        air_battlestaff: {
            xp: 137.5, level: 66,
            ingredients: { air_orb: 1, battlestaff: 1 }
        },
    },
    spinning: {
        ball_of_wool: {
            xp: 2.5, level: 1,
            ingredients: { wool: 1 }
        },
        bow_string: {
            xp: 15, level: 10,
            ingredients: { flax: 1 }
        },
    },
};

function runCalc() {
    const currentXP = parseInt(document.getElementById("currentXP").value);
    const targetXP = parseInt(document.getElementById("targetXP").value);
    const xpNeeded = targetXP - currentXP;

    updateProgressBar(currentXP, targetXP);

    const tableBody = document.querySelector("#resultsTable tbody");
    tableBody.innerHTML = "";

    for (const [item, data] of Object.entries(craftingXP[mode])) {
        const amountNeeded = Math.ceil(xpNeeded / data.xp);
        const row = document.createElement("tr");
    
        let ingredientsList = "";
        for (const [ingredient, qty] of Object.entries(data.ingredients)) {
            ingredientsList += `<canvas itemname="${ingredient}" show-label="inline" amount="${Math.max(1, Math.ceil(qty * amountNeeded))}"></canvas>`;
        }
    
        row.innerHTML = `<td>${data.level}</td>
                        <td><canvas itemname="${item}" show-label="true" amount="${amountNeeded}"></canvas></td>
                        <td>${data.xp}</td>
                        <td>${ingredientsList}</td>`;
    
        tableBody.appendChild(row);
    }
    window.safeRenderAllSprites();
}
