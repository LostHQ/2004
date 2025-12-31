const fishes = {
    raw_shrimp: { xp: 10, level: 1 },
    raw_sardine: { xp: 20, level: 5 },
    raw_herring: { xp: 30, level: 10 },
    raw_anchovies: { xp: 40, level: 15 },
    raw_mackerel: { xp: 20, level: 16 },
    raw_trout: { xp: 50, level: 20 },
    raw_cod: { xp: 45, level: 23 },
    raw_pike: { xp: 60, level: 25 },
    raw_salmon: { xp: 70, level: 30 },
    raw_tuna: { xp: 80, level: 35 },
    raw_lobster: { xp: 90, level: 40 },
    raw_bass: { xp: 100, level: 46 },
    raw_swordfish: { xp: 100, level: 50 },
    raw_lava_eel: { xp: 60, level: 53 },
    raw_shark: { xp: 110, level: 76 },
    raw_seaturtle: { xp: 57, level: 79 },
    raw_mantaray: { xp: 69, level: 81 },
};

function runCalc() {
    const currentXP = parseInt(document.getElementById("currentXP").value);
    const targetXP = parseInt(document.getElementById("targetXP").value);
    const xpNeeded = targetXP - currentXP;

    updateProgressBar(currentXP, targetXP);

    const tableBody = document.querySelector("#resultsTable tbody");
    tableBody.innerHTML = "";

    for (const [item, data] of Object.entries(fishes)) {
        const estimatedCatches = Math.ceil(xpNeeded / data.xp);
        const row = document.createElement("tr");
        row.innerHTML =
            `<td>${data.level}</td>
            <td><canvas data-itemname="${item}" data-show-label="inline"></canvas></td>
            <td>${data.xp}</td>
            <td>${estimatedCatches.toLocaleString()}</td>`;
        tableBody.appendChild(row);
    }
    window.safeRenderAllSprites();
}
