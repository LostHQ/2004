const logs = {
    logs: { xp: 40, level: 1 },
    achey_tree_logs: { xp: 40, level: 1 },
    oak_logs: { xp: 60, level: 15 },
    willow_logs: { xp: 90, level: 30 },
    maple_logs: { xp: 135, level: 45 },
    yew_logs: { xp: 202.5, level: 60 },
    magic_logs: { xp: 303.8, level: 75 },
};

function runCalc() {
    const currentXP = parseInt(document.getElementById("currentXP").value);
    const targetXP = parseInt(document.getElementById("targetXP").value);
    const xpNeeded = targetXP - currentXP;

    updateProgressBar(currentXP, targetXP);

    const tableBody = document.querySelector("#resultsTable tbody");
    tableBody.innerHTML = "";

    for (const [item, data] of Object.entries(logs)) {
        const logCount = Math.ceil(xpNeeded / data.xp);

        let row = document.createElement("tr");
        row.innerHTML = `
            <td>${data.level}</td>
            <td><canvas data-itemname="${item}" data-show-label="inline"></canvas></td>
            <td>${data.xp}</td>
            <td>${logCount.toLocaleString()}</td>
        `;
        tableBody.appendChild(row);
    }
    window.safeRenderAllSprites();
}
