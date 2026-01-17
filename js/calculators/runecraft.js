const runes = {
    airrune: { xp: 5, level: 1 },
    mindrune: { xp: 5.5, level: 2 },
    waterrune: { xp: 6, level: 5 },
    earthrune: { xp: 6.5, level: 9 },
    firerune: { xp: 7, level: 14 },
    bodyrune: { xp: 7.5, level: 20 },
    cosmicrune: { xp: 8, level: 27 },
    chaosrune: { xp: 8.5, level: 35 },
    naturerune: { xp: 9, level: 44 },
    lawrune: { xp: 9.5, level: 54 }
};

function runCalc() {
    const currentXP = parseInt(document.getElementById("currentXP").value);
    const targetXP = parseInt(document.getElementById("targetXP").value);
    const xpNeeded = targetXP - currentXP;
    updateProgressBar(currentXP, targetXP);

    const tableBody = document.querySelector("#resultsTable tbody");
    tableBody.innerHTML = "";

    for (const [item, data] of Object.entries(runes)) {
        const runeCount = Math.ceil(xpNeeded / data.xp);
        const row = document.createElement("tr");
        row.innerHTML = 
            `<td>${data.level}</td>
            <td><canvas itemname="${item}" show-label="inline"></canvas></td>
            <td>${data.xp}</td>
            <td>${runeCount.toLocaleString()}</td>`;
        tableBody.appendChild(row);
    }
    window.safeRenderAllSprites();
}
