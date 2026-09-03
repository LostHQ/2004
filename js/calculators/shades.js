async function fetchShadesXP() {
    const username = document.getElementById("username").value.trim();
    if (!username) return alert("Please enter a username.");

    try {
        // Fetch data from the API
        const response = await fetch(`/pages/api/LCHiscoresProxy.php?username=${encodeURIComponent(username)}`);
        if (!response.ok) throw new Error("Failed to fetch data.");
        const data = await response.json();

        // Stats to retrieve (key = HTML element ID, value = API type)
        const statsToFetch = {
            currentPRXP: 6,
            currentFMXP: 12
        };

        // Loop through each stat and update the respective element
        Object.entries(statsToFetch).forEach(([statName, type]) => {
            const statData = data.find((stat) => stat.type === type);

            if (statData) {
                document.getElementById(statName).value = statData.xp; // Update input value
            }
        });
        runCalc();
    } catch (error) {
        console.error(error); // Log errors for debugging
        alert("Error fetching data."); // Alert user of an error
    }
}

function sanitizeXP(xp) {
    if (isNaN(xp) || xp < 0) return 0;
    return Math.floor(xp);
}

let mode = "oil";
function setMode(newMode) {
    mode = newMode;
    document.getElementById("remainsSelection").style.display = mode === "remains" ? "block" : "none";
    runCalc();
}

function updateFMGoalXP() {
    const level = parseInt(document.getElementById("targetFMLevel").value);
    if (isNaN(level) || level < 1) return;
    document.getElementById("targetFMXP").value = getXPForLevel(level);
    runCalc();
}

function updatePRGoalXP() {
    const level = parseInt(document.getElementById("targetPRLevel").value);
    if (isNaN(level) || level < 1) return;
    document.getElementById("targetPRXP").value = getXPForLevel(level);
    runCalc();
}

function runCalc() {
    const currentFMXP = sanitizeXP(parseInt(document.getElementById("currentFMXP").value));
    const currentPRXP = sanitizeXP(parseInt(document.getElementById("currentPRXP").value));
    const targetFMLevel = parseInt(document.getElementById("targetFMLevel").value) || 1;
    const targetPRLevel = parseInt(document.getElementById("targetPRLevel").value) || 1;
    const targetFMXP = sanitizeXP(parseInt(document.getElementById("targetFMXP").value));
    const targetPRXP = sanitizeXP(parseInt(document.getElementById("targetPRXP").value));

    const fmXPNeeded = Math.max(0, targetFMXP - currentFMXP);
    const prXPNeeded = Math.max(0, targetPRXP - currentPRXP);

    const shadesData = {
        oiling: {
            "logs_pyre": {
                xp: 20,
                level: 1
            },
            "oak_logs_pyre": {
                xp: 20,
                level: 1
            },
            "willow_logs_pyre": {
                xp: 40,
                level: 1
            },
            "maple_logs_pyre": {
                xp: 40,
                level: 1
            },
            "yew_logs_pyre": {
                xp: 60,
                level: 1
            },
            "magic_logs_pyre": {
                xp: 60,
                level: 1
            }
        },
        remains: {
            shade_bones1: {
                logs_pyre: 25,
                oak_logs_pyre: 33,
                willow_logs_pyre: 33.5,
                maple_logs_pyre: 34,
                yew_logs_pyre: 34.5,
                magic_logs_pyre: 35
            },
            shade_bones2: {
                logs_pyre: 37.5,
                oak_logs_pyre: 45.5,
                willow_logs_pyre: 46,
                maple_logs_pyre: 46.5,
                yew_logs_pyre: 47,
                magic_logs_pyre: 47.5
            },
            shade_bones3: {
                willow_logs_pyre: 61,
                maple_logs_pyre: 61.5,
                yew_logs_pyre: 62,
                magic_logs_pyre: 62.5
            },
            shade_bones4: {
                yew_logs_pyre: 79.5,
                magic_logs_pyre: 80
            },
            shade_bones5: {
                magic_logs_pyre: 100
            }
        },
        logs: {
            "logs_pyre": {
                xp: 50,
                level: 5
            },
            "oak_logs_pyre": {
                xp: 70,
                level: 20
            },
            "willow_logs_pyre": {
                xp: 100,
                level: 35
            },
            "maple_logs_pyre": {
                xp: 175,
                level: 50
            },
            "yew_logs_pyre": {
                xp: 255,
                level: 65
            },
            "magic_logs_pyre": {
                xp: 404.5,
                level: 80
            }
        },
    };

    const resultsDiv = document.getElementById("results");
    if (!resultsDiv) return;
    resultsDiv.innerHTML = "";

    switch (mode) {
        default:
        case "oil": {
            const resultsTable = document.createElement("table");
            resultsTable.id = "resultsTable";
            resultsTable.classList.add("table");
            resultsTable.width = "100%";
            const resultsHeader = document.createElement("thead");
        resultsHeader.innerHTML = `
            <tr>
                <th>Level</th>
                <th>Pyre Log</th>
                <th>FM XP Gained</th>
                <th>Total Needed</th>
            </tr>
        `;
            resultsTable.appendChild(resultsHeader);
            const resultsTbody = document.createElement("tbody");
            resultsTable.appendChild(resultsTbody);
            resultsDiv.appendChild(resultsTable);

            const tableBody = document.querySelector("#resultsTable tbody");
            for (const [item, data] of Object.entries(shadesData.oiling)) {
                const xpGained = data.xp;
                const itemsNeeded = Math.ceil(fmXPNeeded / xpGained);
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td>${data.level}</td>

                    <td>
                        <canvas
                            itemname="${item}"
                            show-label="true">
                        </canvas>
                    </td>
                    <td>${xpGained}</td>
                    <td>${itemsNeeded.toLocaleString()}</td>
                `;
                tableBody.appendChild(row);
            }
            break;
        }
        case "remains": {
            const remainsType = document.getElementById("remainsType").value;
            const remainsData = shadesData.remains[remainsType];

            const resultsTable = document.createElement("table");
            resultsTable.id = "resultsTable";
            resultsTable.classList.add("table");
            resultsTable.width = "100%";
            const resultsHeader = document.createElement("thead");
            resultsHeader.innerHTML = `
            <tr>
                <th>Level</th>
                <th>Pyre Log</th>
                <th>FM XP</th>
                <th>Prayer XP</th>
                <th>Total Needed</th>
            </tr>
        `;
            resultsTable.appendChild(resultsHeader);
            const resultsTbody = document.createElement("tbody");
            resultsTable.appendChild(resultsTbody);
            resultsDiv.appendChild(resultsTable);

            const tableBody = document.querySelector("#resultsTable tbody");
            for (const [item, data] of Object.entries(shadesData.logs)) {
                if (remainsData[item] === undefined) {
                    continue;
                }
                const firemakingXP = data.xp;
                const prayerXP = remainsData[item];
                const burnsForFM =
                    fmXPNeeded > 0
                        ? Math.ceil(fmXPNeeded / firemakingXP)
                        : 0;
                const burnsForPrayer =
                    prXPNeeded > 0
                        ? Math.ceil(prXPNeeded / prayerXP)
                        : 0;
                const itemsNeeded = Math.max(burnsForFM, burnsForPrayer);
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td>${data.level}</td>
                    <td>
                        <canvas
                            itemname="${item}"
                            show-label="true">
                        </canvas>
                    </td>
                    <td>${firemakingXP}</td>
                    <td>${prayerXP}</td>
                    <td>${itemsNeeded.toLocaleString()}</td>
                `;
                tableBody.appendChild(row);
            }
            break;
        }
        case "banked": {
            const header = document.createElement("p");
            header.textContent =
                "Please enter the amount of each pyre log and remains you have in your bank.";
            resultsDiv.appendChild(header);

            // -------------------------
            // Pyre logs
            // -------------------------

            const logs = Object.keys(shadesData.logs);

            const logsHeader = document.createElement("h3");
            logsHeader.textContent = "Pyre Logs";
            resultsDiv.appendChild(logsHeader);

            logs.forEach((log) => {
                const div = document.createElement("div");
                div.classList.add("input-group");

                const label = document.createElement("label");
                label.innerHTML =
                    `<canvas itemname="${log}" show-label="inline"></canvas>`;

                const input = document.createElement("input");
                input.type = "number";
                input.id = "banked_" + log;
                input.value = "0";
                input.min = "0";
                input.max = "99999";

                div.appendChild(label);
                div.appendChild(input);

                resultsDiv.appendChild(div);
            });

            // -------------------------
            // Remains
            // -------------------------

            const remainsHeader = document.createElement("h3");
            remainsHeader.textContent = "Remains";
            resultsDiv.appendChild(remainsHeader);

            const remains = Object.keys(shadesData.remains);

            remains.forEach((remain) => {
                const div = document.createElement("div");
                div.classList.add("input-group");

                // Amount
                const label = document.createElement("label");
                label.innerHTML =
                    `<canvas itemname="${remain}" show-label="inline"></canvas>`;

                const input = document.createElement("input");
                input.type = "number";
                input.id = "banked_" + remain;
                input.value = "0";
                input.min = "0";
                input.max = "99999";

                div.appendChild(label);
                div.appendChild(input);

                // Valid pyre logs for this remain
                const select = document.createElement("select");
                select.id = "banked_" + remain + "_log";

                const placeholder = document.createElement("option");
                placeholder.value = "";
                placeholder.textContent = "- select pyre log -";
                select.appendChild(placeholder);

                Object.keys(shadesData.remains[remain]).forEach((log) => {
                    const option = document.createElement("option");
                    option.value = log;
                    option.textContent = window.itemData[log].name;
                    select.appendChild(option);
                });

                const selectLabel = document.createElement("label");
                selectLabel.textContent = "Pyre Log";
                selectLabel.htmlFor = select.id;

                div.appendChild(selectLabel);
                div.appendChild(select);

                resultsDiv.appendChild(div);
            });

            // -------------------------
            // Oiled?
            // -------------------------

            const oilDiv = document.createElement("div");
            oilDiv.classList.add("input-group");

            const oilLabel = document.createElement("label");
            oilLabel.textContent = "Are your pyre logs already oiled?";

            const oilSelect = document.createElement("select");
            oilSelect.id = "bankedOiled";

            oilSelect.innerHTML = `
                <option value="yes">Yes</option>
                <option value="no" selected>No</option>
            `;

            oilDiv.appendChild(oilLabel);
            oilDiv.appendChild(oilSelect);
            resultsDiv.appendChild(oilDiv);

            // -------------------------
            // Calculate button
            // -------------------------

            const buttonDiv = document.createElement("div");
            buttonDiv.classList.add("input-group", "justify-center");

            const button = document.createElement("button");
            button.id = "calculateBanked";
            button.textContent = "Calculate banked XP!";

            buttonDiv.appendChild(button);
            resultsDiv.appendChild(buttonDiv);

            // -------------------------
            // Calculation
            // -------------------------

            button.addEventListener("click", function () {

                // Remove previous results
                document.getElementById("bankedResultsTable")?.remove();
                document.getElementById("bankedSummaryTable")?.remove();

                let totalFMXP = 0;
                let totalPrayerXP = 0;

                const usedLogs = {};
                const usedRemains = {};

                // -------------------------
                // Calculate remains burns
                // -------------------------

                remains.forEach((remain) => {

                    const amount =
                        parseInt(document.getElementById("banked_" + remain).value) || 0;
                    if (amount <= 0) {
                        return;
                    }

                    const log =
                        document.getElementById("banked_" + remain + "_log").value;
                    if (!log) {
                        return;
                    }

                    const availableLogs =
                        parseInt(document.getElementById("banked_" + log).value) || 0;

                    const burns = Math.min(amount, availableLogs);
                    if (burns <= 0) {
                        return;
                    }

                    const firemakingXP = shadesData.logs[log].xp;
                    const prayerXP = shadesData.remains[remain][log];

                    totalFMXP += burns * firemakingXP;
                    totalPrayerXP += burns * prayerXP;

                    usedLogs[log] = (usedLogs[log] || 0) + burns;
                    usedRemains[remain] = (usedRemains[remain] || 0) + burns;
                });

                // -------------------------
                // Results table
                // -------------------------

                const table = document.createElement("table");
                table.id = "bankedResultsTable";
                table.classList.add("table");
                table.style.marginTop = "1em";
                table.innerHTML = `
                    <thead>
                        <tr>
                            <th>Remains</th>
                            <th>Pyre Log</th>
                            <th>Amount Burned</th>
                            <th>FM XP</th>
                            <th>Prayer XP</th>
                            <th>Total FM XP</th>
                            <th>Total Prayer XP</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                `;

                const tbody = table.querySelector("tbody");


                remains.forEach((remain) => {
                    const amount = usedRemains[remain] || 0;
                    if (amount <= 0) {
                        return;
                    }
                    const log =
                        Object.keys(usedLogs).find((log) => {
                            return shadesData.remains[remain][log] !== undefined;
                        });
                    if (!log) {
                        return;
                    }

                    const firemakingXP = shadesData.logs[log].xp;
                    const prayerXP = shadesData.remains[remain][log];

                    const tr = document.createElement("tr");
                    tr.innerHTML = `
                        <td>
                            <canvas itemname="${remain}" show-label="true"></canvas>
                        </td>
                        <td>
                            <canvas itemname="${log}" show-label="true"></canvas>
                        </td>
                        <td>${amount.toLocaleString()}</td>
                        <td>${firemakingXP}</td>
                        <td>${prayerXP}</td>
                        <td>${(amount * firemakingXP).toLocaleString()}</td>
                        <td>${(amount * prayerXP).toLocaleString()}</td>
                    `;
                    tbody.appendChild(tr);
                });
                resultsDiv.appendChild(table);
                window.safeRenderAllSprites();
                
                // -------------------------
                // Summary
                // -------------------------

                const summary = document.createElement("table");
                summary.id = "bankedSummaryTable";
                summary.classList.add("table");
                summary.style.marginTop = "1em";
                summary.innerHTML = `
                    <thead>
                        <tr>
                            <th>Summary</th>
                            <th>Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Total Firemaking XP</th>
                            <td>${totalFMXP.toLocaleString()}</td>
                        </tr>
                        <tr>
                            <th>Total Prayer XP</th>
                            <td>${totalPrayerXP.toLocaleString()}</td>
                        </tr>
                    </tbody>
                `;
                resultsDiv.appendChild(summary);
            });
            break;
        }
    }
    window.safeRenderAllSprites();
}

document.getElementById("currentFMXP").addEventListener("input", runCalc);
document.getElementById("currentFMXP").addEventListener("change", runCalc);
document.getElementById("currentPRXP").addEventListener("input", runCalc);
document.getElementById("currentPRXP").addEventListener("change", runCalc);
document.getElementById("targetFMXP").addEventListener("input", runCalc);
document.getElementById("targetFMXP").addEventListener("change", runCalc);
document.getElementById("targetPRXP").addEventListener("input", runCalc);
document.getElementById("targetPRXP").addEventListener("change", runCalc);
document.getElementById("targetFMLevel").addEventListener("input", updateFMGoalXP);
document.getElementById("targetPRLevel").addEventListener("input", updatePRGoalXP);