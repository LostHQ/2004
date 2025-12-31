function runCalc() {
    const currentXP = parseInt(document.getElementById("currentXP").value);
    const targetXP = parseInt(document.getElementById("targetXP").value);
    const xpNeeded = targetXP - currentXP;

    const fishes = [
        { name: "raw_shrimp", xp: 10, level: 1 },
        { name: "raw_sardine", xp: 20, level: 5 },
        { name: "raw_herring", xp: 30, level: 10 },
        { name: "raw_anchovies", xp: 40, level: 15 },
        { name: "raw_mackerel", xp: 20, level: 16 },
        { name: "raw_trout", xp: 50, level: 20 },
        { name: "raw_cod", xp: 45, level: 23 },
        { name: "raw_pike", xp: 60, level: 25 },
        { name: "raw_salmon", xp: 70, level: 30 },
        { name: "raw_tuna", xp: 80, level: 35 },
        { name: "raw_lobster", xp: 90, level: 40 },
        { name: "raw_bass", xp: 100, level: 46 },
        { name: "raw_swordfish", xp: 100, level: 50 },
        { name: "raw_lava_eel", xp: 60, level: 53 },
        { name: "raw_shark", xp: 110, level: 76 },
        { name: "raw_seaturtle", xp: 57, level: 79 },
        { name: "raw_mantaray", xp: 69, level: 81 },
    ];

    updateProgressBar(currentXP, targetXP);

    const tableBody = document.querySelector("#resultsTable tbody");
    tableBody.innerHTML = "";

    for (let fish of fishes) {
        let estimatedCatches = Math.ceil(xpNeeded / fish.xp);

        let row = document.createElement("tr");
        row.innerHTML = `
            <td>${fish.level}</td>
            <td><canvas data-itemname="${fish.name}" data-show-label="inline"></canvas></td>
            <td>${fish.xp}</td>
            <td>${estimatedCatches.toLocaleString()}</td>
        `;
        tableBody.appendChild(row);
    }
    window.safeRenderAllSprites();
}
