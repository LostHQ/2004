function sanitizeXP(xp) {
    if (isNaN(xp) || xp < 0) return 0;
    return Math.floor(xp);
}

let mode = "potions";
function setMode(selectedMode) {
    mode = selectedMode;
    runCalc();
}

function runCalc() {
    const currentXP = sanitizeXP(parseInt(document.getElementById("currentXP").value));
    const targetXP = sanitizeXP(parseInt(document.getElementById("targetXP").value));
    const xpNeeded = targetXP - currentXP;

    const herbloreData = {
        potions: {
            "3dose1attack": {
                level: 3,
                xp: 25,
                herb: "guam_leaf",
                secondary: "eye_of_newt",
            },
            "3doseantipoison": {
                level: 5,
                xp: 37.5,
                herb: "marentill",
                secondary: "unicorn_horn_dust",
            },
            "3dose1strength": {
                level: 12,
                xp: 50,
                herb: "tarromin",
                secondary: "limpwurt_root",
            },
            mort_serum3: {
                level: 15,
                xp: 50,
                herb: "tarromin",
                secondary: "ashes",
            },
            "3dosestatrestore": {
                level: 22,
                xp: 62.5,
                herb: "harralander",
                secondary: "red_spiders_eggs",
            },
            "3dose1energy": {
                level: 26,
                xp: 67.5,
                herb: "harralander",
                secondary: "chocolate_dust",
            },
            "3dose1defense": {
                level: 30,
                xp: 75,
                herb: "ranarr_weed",
                secondary: "white_berries",
            },
            "3dose1agility": {
                level: 34,
                xp: 80,
                herb: "toadflax",
                secondary: "toads_legs",
            },
            "3doseprayerrestore": {
                level: 38,
                xp: 87.5,
                herb: "ranarr_weed",
                secondary: "snape_grass",
            },
            "3dose2attack": {
                level: 45,
                xp: 100,
                herb: "irit_leaf",
                secondary: "eye_of_newt",
            },
            "3dose2antipoison": {
                level: 48,
                xp: 106.3,
                herb: "irit_leaf",
                secondary: "unicorn_horn_dust",
            },
            "3dosefisherspotion": {
                level: 50,
                xp: 112.5,
                herb: "avantoe",
                secondary: "snape_grass",
            },
            "3dose2energy": {
                level: 52,
                xp: 117.5,
                herb: "avantoe",
                secondary: "mortmyremushroom",
            },
            "3dose2strength": {
                level: 55,
                xp: 125,
                herb: "kwuarm",
                secondary: "limpwurt_root",
            },
            weapon_poison: {
                level: 60,
                xp: 137.5,
                herb: "kwuarm",
                secondary: "dragon_scale_dust",
            },
            "3dose2restore": {
                level: 63,
                xp: 142.5,
                herb: "snapdragon",
                secondary: "red_spiders_eggs",
            },
            "3dose2defense": {
                level: 66,
                xp: 150,
                herb: "cadantine",
                secondary: "white_berries",
            },
            "3dose1antidragon": {
                level: 69,
                xp: 157.5,
                herb: "lantadyme",
                secondary: "dragon_scale_dust",
            },
            "3doserangerspotion": {
                level: 72,
                xp: 162.5,
                herb: "dwarf_weed",
                secondary: "wine_of_zamorak",
            },
            "3dose1magic": {
                level: 76,
                xp: 172.5,
                herb: "lantadyme",
                secondary: "cactus_potato",
            },
            "3dosepotionofzamorak": {
                level: 78,
                xp: 175,
                herb: "torstol",
                secondary: "jangerberries",
            },
        },
        identifying_herbs: {
            guam_leaf: {
                level: 3,
                xp: 2.5,
                unid: "unidentified_guam",
            },
            marentill: {
                level: 5,
                xp: 3.8,
                unid: "unidentified_marentill",
            },
            tarromin: {
                level: 11,
                xp: 5,
                unid: "unidentified_tarromin",
            },
            harralander: {
                level: 20,
                xp: 6.3,
                unid: "unidentified_harralander",
            },
            ranarr_weed: {
                level: 25,
                xp: 7.5,
                unid: "unidentified_ranarr",
            },
            toadflax: {
                level: 30,
                xp: 8,
                unid: "unidentified_toadflax",
            },
            irit_leaf: {
                level: 40,
                xp: 8.8,
                unid: "unidentified_irit",
            },
            avantoe: {
                level: 48,
                xp: 10,
                unid: "unidentified_avantoe",
            },
            kwuarm: {
                level: 54,
                xp: 11.3,
                unid: "unidentified_kwuarm",
            },
            snapdragon: {
                level: 59,
                xp: 11.8,
                unid: "unidentified_snapdragon",
            },
            cadantine: {
                level: 65,
                xp: 12.5,
                unid: "unidentified_cadantine",
            },
            lantadyme: {
                level: 67,
                xp: 13.1,
                unid: "unidentified_lantadyme",
            },
            dwarf_weed: {
                level: 70,
                xp: 13.8,
                unid: "unidentified_dwarf_weed",
            },
            torstol: {
                level: 75,
                xp: 15,
                unid: "unidentified_torstol",
            },
        },
    };

    updateProgressBar(currentXP, targetXP);

    const resultsDiv = document.getElementById("results");
    if (!resultsDiv) return;
    resultsDiv.innerHTML = "";

    if (mode == "banked") {
        const header = document.createElement("p");
        header.textContent = "Please enter the amount of each ingredient you have in your bank.";
        resultsDiv.appendChild(header);
        const herbs = Object.keys(herbloreData.identifying_herbs);

        for (let i = 0; i < herbs.length; i++) {
            const div = document.createElement("div");
            div.classList.add("input-group");

            const label = document.createElement("label");
            label.innerHTML = `<canvas itemname="${herbs[i]}" show-label="inline"></canvas>`;
            const input = document.createElement("input");
            input.type = "number";
            input.id = herbs[i];
            input.value = "0";
            input.min = "0";
            input.max = "99999";
            div.appendChild(label);
            div.appendChild(input);

            const herb = herbs[i];
            const potionsUsing = Object.entries(herbloreData.potions)
                .filter(([, recipe]) => recipe.herb === herb || recipe.secondary === herb)
                .map(([potionKey]) => potionKey);

            if (potionsUsing.length > 1) {
                const select = document.createElement("select");
                select.id = herb + "_potions";
                select.classList.add("potions-dropdown");
                const placeholder = document.createElement("option");
                placeholder.value = "";
                placeholder.textContent = "- select -";
                select.appendChild(placeholder);

                potionsUsing.forEach((potionKey) => {
                    const opt = document.createElement("option");
                    opt.value = potionKey;
                    opt.textContent = window.itemData[debugname].name(potionKey);
                    select.appendChild(opt);
                });

                const selLabel = document.createElement("label");
                selLabel.textContent = "Which Potion?";
                selLabel.htmlFor = select.id;

                div.appendChild(selLabel);
                div.appendChild(select);
            }

            const br = document.createElement("br");
            resultsDiv.appendChild(br);
            resultsDiv.appendChild(div);
        }
        const div = document.createElement("div");
        div.classList.add("input-group");
        const label3 = document.createElement("label");
        label3.innerHTML = "Are your herbs already identified?";
        const select3 = document.createElement("select");
        select3.id = "identifyingHerbs";
        select3.innerHTML = `<option value="yes">Yes</option>
                            <option value="no" selected>No</option>`;
        div.appendChild(label3);
        div.appendChild(select3);
        resultsDiv.appendChild(div);

        const div2 = document.createElement("div");
        div2.classList.add("input-group", "justify-center");
        const button = document.createElement("button");
        button.id = "calculateBanked";
        button.textContent = "Calculate banked XP!";

        div2.appendChild(button);
        resultsDiv.appendChild(div2);

        button.addEventListener("click", function () {
            let valid = true;
            herbs.forEach((herb) => {
                const amount = parseInt(document.getElementById(herb).value) || 0;
                const potionsUsing = Object.entries(herbloreData.potions)
                    .filter(([, recipe]) => recipe.herb === herb || recipe.secondary === herb)
                    .map(([potionKey]) => potionKey);
                if (potionsUsing.length > 1 && amount > 0) {
                    const select = document.getElementById(herb + "_potions");
                    if (!select || !select.value) {
                        if (select) select.classList.add("input-error");
                        valid = false;
                    } else {
                        select.classList.remove("input-error");
                    }
                }
            });
            if (!valid) {
                alert("Please select a potion for each herb with an amount greater than zero.");
                return;
            }

            let prevTable = document.getElementById("bankedResultsTable");
            if (prevTable) prevTable.remove();
            let prevTotal = document.getElementById("bankedTotalXP");
            if (prevTotal) prevTotal.remove();
            let prevSummary = document.getElementById("bankedSummaryTable");
            if (prevSummary) prevSummary.remove();

            let totalXP = 0;
            const table = document.createElement("table");
            table.id = "bankedResultsTable";
            table.classList.add("table");
            table.style.marginTop = "1em";
            table.innerHTML = `<thead><tr><th>Herb</th><th>Potion</th><th>Amount</th><th>XP per</th><th>Total XP</th></tr></thead><tbody></tbody>`;
            const tbody = table.querySelector("tbody");

            const herbsCleaned = document.getElementById("identifyingHerbs").value === "yes";

            let secondaryCounts = {};
            let vialsOfWaterCount = 0;
            let xpAfter = currentXP;
            let currentLevel = getLevelForXP(currentXP);
            herbs.forEach((herb) => {
                let amount = parseInt(document.getElementById(herb).value) || 0;
                if (amount <= 0) return;
                const potionsUsing = Object.entries(herbloreData.potions)
                    .filter(([, recipe]) => recipe.herb === herb || recipe.secondary === herb)
                    .map(([potionKey]) => potionKey);
                let selectedPotion = null;
                if (potionsUsing.length > 1) {
                    const select = document.getElementById(herb + "_potions");
                    selectedPotion = select && select.value ? select.value : null;
                } else if (potionsUsing.length === 1) {
                    selectedPotion = potionsUsing[0];
                }
                const prettyHerbName = window.itemData[debugname].name(herb);
                let identifyingXPAdded = false;
                if (!herbsCleaned && amount > 0) {
                    const identifyingXP = herbloreData.identifying_herbs[herb].xp;
                    const totalIdentifying = amount * identifyingXP;
                    totalXP += totalIdentifying;
                    xpAfter += totalIdentifying;
                    const tr = document.createElement("tr");
                    tr.innerHTML = `<td>${prettyHerbName}</td><td>Identifying</td><td>${amount}</td><td>${identifyingXP}</td><td>${totalIdentifying.toLocaleString()}</td>`;
                    tbody.appendChild(tr);
                    identifyingXPAdded = true;
                }
                if (selectedPotion) {
                    const recipe = herbloreData.potions[selectedPotion];
                    let tempXP = xpAfter;
                    let tempLevel = getLevelForXP(tempXP);
                    let allowedAmount = 0;
                    for (let i = 0; i < amount; i++) {
                        if (tempLevel >= recipe.level) {
                            allowedAmount++;
                            tempXP += recipe.xp;
                            tempLevel = getLevelForXP(tempXP);
                        } else {
                            break;
                        }
                    }
                    if (allowedAmount === 0) return;
                    const xpPer = recipe.xp;
                    const prettyPotionName = window.itemData[debugname].name(selectedPotion);
                    const total = allowedAmount * xpPer;
                    totalXP += total;
                    xpAfter += total;
                    const secondary = recipe.secondary;
                    if (secondary) {
                        if (!secondaryCounts[secondary]) secondaryCounts[secondary] = 0;
                        secondaryCounts[secondary] += allowedAmount;
                    }
                    vialsOfWaterCount += allowedAmount;
                    const tr = document.createElement("tr");
                    tr.innerHTML = `<td>${prettyHerbName}</td><td>${prettyPotionName}</td><td>${allowedAmount}</td><td>${xpPer}</td><td>${total.toLocaleString()}</td>`;
                    tbody.appendChild(tr);
                } else if (potionsUsing.length > 1) {
                    potionsUsing.forEach((potionKey) => {
                        const recipe = herbloreData.potions[potionKey];
                        let tempXP = xpAfter;
                        let tempLevel = getLevelForXP(tempXP);
                        let allowedAmount = 0;
                        for (let i = 0; i < amount; i++) {
                            if (tempLevel >= recipe.level) {
                                allowedAmount++;
                                tempXP += recipe.xp;
                                tempLevel = getLevelForXP(tempXP);
                            } else {
                                break;
                            }
                        }
                        if (allowedAmount === 0) return;
                        const xpPer = recipe.xp;
                        const prettyPotionName = window.itemData[debugname].name(potionKey);
                        const total = allowedAmount * xpPer;
                        totalXP += total;
                        xpAfter += total;
                        const secondary = recipe.secondary;
                        if (secondary) {
                            if (!secondaryCounts[secondary]) secondaryCounts[secondary] = 0;
                            secondaryCounts[secondary] += allowedAmount;
                        }
                        vialsOfWaterCount += allowedAmount;
                        const tr = document.createElement("tr");
                        tr.innerHTML = `<td>${prettyHerbName}</td><td>${prettyPotionName}</td><td>${allowedAmount}</td><td>${xpPer}</td><td>${total.toLocaleString()}</td>`;
                        tbody.appendChild(tr);
                    });
                }
            });
            if (vialsOfWaterCount > 0) {
                secondaryCounts["vial_water"] = (secondaryCounts["vial_water"] || 0) + vialsOfWaterCount;
            }
            let secondaryListArr = Object.entries(secondaryCounts);
            const finalLevel = getLevelForXP(xpAfter);
            const summaryTable = document.createElement("table");
            summaryTable.classList.add("table");
            summaryTable.style.marginTop = "1em";
            summaryTable.id = "bankedSummaryTable";
            const summaryTbody = document.createElement("tbody");
            summaryTable.appendChild(summaryTbody);

            const summaryThead = document.createElement("thead");
            summaryThead.innerHTML = `<tr><th>Summary</th><th colspan=2>Value</th></tr>`;
            summaryTable.insertBefore(summaryThead, summaryTbody);

            const trXP = document.createElement("tr");
            trXP.innerHTML = `<th>Total XP from banked ingredients</th><td colspan=2>${totalXP.toLocaleString()}</td>`;
            summaryTbody.appendChild(trXP);

            if (secondaryListArr.length > 0) {
                const trSecHeader = document.createElement("tr");
                trSecHeader.innerHTML = `<th rowspan="${secondaryListArr.length + 1}">Secondaries needed</th><th>Item</th><th>Amount</th>`;
                summaryTbody.appendChild(trSecHeader);
                secondaryListArr.forEach(([sec, count]) => {
                    const trSec = document.createElement("tr");
                    trSec.innerHTML = `<td>${window.itemData[debugname].name(sec)}</td><td>${count}</td>`;
                    summaryTbody.appendChild(trSec);
                });
            }

            const trLvl = document.createElement("tr");
            trLvl.innerHTML = `<th>Final Herblore level</th><td colspan=2>${finalLevel}</td>`;
            summaryTbody.appendChild(trLvl);

            resultsDiv.appendChild(table);
            resultsDiv.appendChild(summaryTable);
        });
    } else {
        const resultsTable = document.createElement("table");
        resultsTable.id = "resultsTable";
        resultsTable.classList.add("table");
        resultsTable.width = "100%";
        const resultsHeader = document.createElement("thead");
        resultsHeader.innerHTML = `<tr><th>Level</th><th>Ingredient(s)</th><th>Result</th><th>XP Gained</th><th>Total Needed</th></tr>`;
        resultsTable.appendChild(resultsHeader);
        const resultsTbody = document.createElement("tbody");
        resultsTable.appendChild(resultsTbody);
        resultsDiv.appendChild(resultsTable);

        const tableBody = document.querySelector("#resultsTable tbody");
        for (let item in herbloreData[mode]) {
            const recipe = herbloreData[mode][item];
            let level = recipe.level;
            let xpGained = recipe.xp;
            let itemsNeeded = Math.ceil(xpNeeded / xpGained);
            let row = document.createElement("tr");
            let ingredients;
            if (mode === "potions") {
                let startUnfinished = recipe.herb;
                let secondaryIngredient = recipe.secondary;
                ingredients = `
                    <canvas itemname="${startUnfinished}" show-label="inline"></canvas>
                    <canvas itemname="${secondaryIngredient}" show-label="inline"></canvas>`;
            } else {
                let unid = recipe.unid;
                ingredients = `<canvas itemname="${unid}" show-label="true"></canvas>`;
            }
            row.innerHTML = `<td>${level}</td>
                <td>${ingredients}</td>
                <td><canvas itemname="${item}" show-label="true"></canvas></td>
                <td>${xpGained}</td>
                <td>${itemsNeeded.toLocaleString()}</td>`;
            tableBody.appendChild(row);
        }
    }
    window.safeRenderAllSprites();
}
