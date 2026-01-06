const bonesXp = {
    bones: 4.5,
    bones_burnt: 4.5,
    bat_bones: 4.5,
    wolf_bones: 4.5,
    big_bones: 15,
    babydragon_bones: 30,
    dragon_bones: 72,
};

function runCalc() {
    const currentXP = parseInt(document.getElementById("currentXP").value);
    const targetXP = parseInt(document.getElementById("targetXP").value);
    const xpNeeded = targetXP - currentXP;

    updateProgressBar(currentXP, targetXP);

    const tableBody = document.querySelector("#resultsTable tbody");
    tableBody.innerHTML = "";

    for (const [item, xp] of Object.entries(bonesXp)) {
        const boneCount = Math.ceil(xpNeeded / xp);
        const row = document.createElement("tr");
        row.innerHTML =
            `<td><canvas itemname="${item}" show-label="inline"></canvas></td>
            <td>${xp}</td>
            <td>${boneCount.toLocaleString()}</td>`;
        tableBody.appendChild(row);
    }
    window.safeRenderAllSprites();
}
