let mode = "logs";
function setMode(newMode) {
    mode = newMode;
    document.getElementById("pyreSelection").style.display = mode === "pyre" ? "block" : "none";
    runCalc();
}

const logs = {
    logs: { xp: 40, level: 1 },
    achey_tree_logs: { xp: 40, level: 1 },
    oak_logs: { xp: 60, level: 15 },
    willow_logs: { xp: 90, level: 30 },
    maple_logs: { xp: 135, level: 45 },
    yew_logs: { xp: 202.5, level: 60 },
    magic_logs: { xp: 303.8, level: 75 }
};

const pyreLogsOil = {
    logs_pyre: { xp: 20, level: 1 },
    oak_logs_pyre: { xp: 20, level: 1 },
    willow_logs_pyre: { xp: 40, level: 1 },
    maple_logs_pyre: { xp: 40, level: 1 },
    yew_logs_pyre: { xp: 60, level: 1 },
    magic_logs_pyre: { xp: 60, level: 1 }
};

const pyreLogs = {
    logs_pyre: { xp: 50, level: 5 },
    oak_logs_pyre: { xp: 70, level: 20 },
    willow_logs_pyre: { xp: 100, level: 35 },
    maple_logs_pyre: { xp: 175, level: 50 },
    yew_logs_pyre: { xp: 255, level: 65 },
    magic_logs_pyre: { xp: 404.5, level: 80 }
};

function runCalc() {
    const currentXP = parseInt(document.getElementById("currentXP").value);
    const targetXP = parseInt(document.getElementById("targetXP").value);
    const xpNeeded = targetXP - currentXP;

    updateProgressBar(currentXP, targetXP);

    const tableBody = document.querySelector("#resultsTable tbody");
    tableBody.innerHTML = "";

    switch (mode) {
        case "logs":
            for (const [item, data] of Object.entries(logs)) {
                const logCount = Math.ceil(xpNeeded / data.xp);

                let row = document.createElement("tr");
                row.innerHTML = `
                    <td>${data.level}</td>
                    <td><canvas itemname="${item}" show-label="inline"></canvas></td>
                    <td>${data.xp}</td>
                    <td>${logCount.toLocaleString()}</td>
                `;
                tableBody.appendChild(row);
            }
            break;
         case "pyre":
            const pyreType = document.getElementById("pyreType").value;

            let pyreData;

            switch (pyreType) {
                case "oil":
                    pyreData = pyreLogsOil;
                    break;

                case "burn":
                    pyreData = pyreLogs;
                    break;

                case "oilBurn":
                    pyreData = {};

                    for (const [item, data] of Object.entries(pyreLogs)) {
                        pyreData[item] = {
                            xp: data.xp + pyreLogsOil[item].xp,
                            level: data.level
                        };
                    }
                    break;
            }

            for (const [item, data] of Object.entries(pyreData)) {
                const logCount = Math.ceil(xpNeeded / data.xp);

                let row = document.createElement("tr");
                row.innerHTML = `
                    <td>${data.level}</td>
                    <td><canvas itemname="${item}" show-label="inline"></canvas></td>
                    <td>${data.xp}</td>
                    <td>${logCount.toLocaleString()}</td>
                `;
                tableBody.appendChild(row);
            }
            break;
    }
    window.safeRenderAllSprites();
}
