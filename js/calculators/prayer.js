export const bonesXp = {
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

    for (let bone in bonesXp) {
        let boneCount = Math.ceil(xpNeeded / bonesXp[bone]);

        let row = document.createElement("tr");
        row.innerHTML = `
            <td><canvas data-itemname="${bone.toLowerCase().replace(/\s+/g, "_")}" data-show-label="inline"></canvas></td>
            <td>${bonesXp[bone]}</td>
            <td>${boneCount.toLocaleString()}</td>
        `;
        tableBody.appendChild(row);
    }
    window.safeRenderAllSprites();
}
