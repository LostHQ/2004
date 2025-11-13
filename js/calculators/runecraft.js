function runCalc() {
    const currentXP = parseInt(document.getElementById("currentXP").value);
    const targetXP = parseInt(document.getElementById("targetXP").value);
    const xpNeeded = targetXP - currentXP;

    const runes = [
        { name: "airrune", xp: 5, level: 1 },
        { name: "mindrune", xp: 5.5, level: 2 },
        { name: "waterrune", xp: 6, level: 5 },
        { name: "earthrune", xp: 6.5, level: 9 },
        { name: "firerune", xp: 7, level: 14 },
        { name: "bodyrune", xp: 7.5, level: 20 },
        { name: "cosmicrune", xp: 8, level: 27 },
        { name: "chaosrune", xp: 8.5, level: 35 },
        { name: "naturerune", xp: 9, level: 44 }
    ];

    updateProgressBar(currentXP, targetXP);

    const tableBody = document.querySelector("#resultsTable tbody");
    tableBody.innerHTML = ""; 

    for (let rune of runes) {
        let runeCount = Math.ceil(xpNeeded / rune.xp);
        
        let row = document.createElement("tr");
        row.innerHTML = `
            <td>${rune.level}</td>
            <td><canvas data-itemname="${rune.name}" data-show-label="inline"></canvas></td>
            <td>${rune.xp}</td>
            <td>${runeCount.toLocaleString()}</td>
        `;
        tableBody.appendChild(row);
    }

    window.safeRenderAllSprites();
}