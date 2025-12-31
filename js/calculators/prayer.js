function runCalc() {
    const currentXP = parseInt(document.getElementById("currentXP").value);
    const targetXP = parseInt(document.getElementById("targetXP").value);
    const xpNeeded = targetXP - currentXP;

    const bones = {
        Bones: 4.5,
        "bones burnt": 4.5,
        "Bat Bones": 4.5,
        "Wolf Bones": 4.5,
        "Big Bones": 15,
        "Babydragon Bones": 30,
        "Dragon Bones": 72,
    };

    updateProgressBar(currentXP, targetXP);

    const tableBody = document.querySelector("#resultsTable tbody");
    tableBody.innerHTML = "";

    for (let bone in bones) {
        let boneCount = Math.ceil(xpNeeded / bones[bone]);

        let row = document.createElement("tr");
        row.innerHTML = `
            <td><canvas data-itemname="${bone.toLowerCase().replace(/\s+/g, "_")}" data-show-label="inline"></canvas></td>
            <td>${bones[bone]}</td>
            <td>${boneCount.toLocaleString()}</td>
        `;
        tableBody.appendChild(row);
    }
    window.safeRenderAllSprites();
}
