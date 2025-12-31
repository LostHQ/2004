function runCalc() {
    const currentXP = parseInt(document.getElementById("currentXP").value);
    const targetXP = parseInt(document.getElementById("targetXP").value);
    const xpNeeded = targetXP - currentXP;

    const foods = [
        { name: "cooked_meat", xp: 30, level: 1 },
        { name: "cooked_chicken", xp: 30, level: 1 },
        { name: "shrimp", xp: 30, level: 1 },
        { name: "anchovies", xp: 30, level: 1 },
        { name: "bread", xp: 40, level: 1 },
        { name: "sardine", xp: 40, level: 1 },
        { name: "cooked_ugthanki_meat", xp: 40, level: 1 },
        { name: "herring", xp: 50, level: 5 },
        { name: "mackerel", xp: 60, level: 10 },
        { name: "redberry_pie", xp: 78, level: 10 },
        { name: "trout", xp: 70, level: 15 },
        { name: "cod", xp: 75, level: 18 },
        { name: "pike", xp: 80, level: 20 },
        { name: "meat_pie", xp: 110, level: 20 },
        { name: "salmon", xp: 90, level: 25 },
        { name: "stew", xp: 117, level: 25 },
        { name: "cooked_chompy", xp: 100, level: 30 },
        { name: "tuna", xp: 100, level: 30 },
        { name: "apple_pie", xp: 130, level: 30 },
        { name: "plain_pizza", xp: 143, level: 35 },
        { name: "jug_wine", xp: 200, level: 35 },
        { name: "lobster", xp: 120, level: 40 },
        { name: "cake", xp: 180, level: 40 },
        { name: "bass", xp: 130, level: 43 },
        { name: "swordfish", xp: 140, level: 45 },
        { name: "meat_pizza", xp: 169, level: 45 },
        { name: "chocolate_cake", xp: 210, level: 50 },
        { name: "lava_eel", xp: 140, level: 53 },
        { name: "anchovie_pizza", xp: 182, level: 55 },
        { name: "pitta_bread", xp: 40, level: 58 },
        { name: "curry", xp: 280, level: 60 },
        { name: "pineapple_pizza", xp: 195, level: 65 },
        { name: "shark", xp: 210, level: 80 },
        { name: "seaturtle", xp: 211.3, level: 82 },
        { name: "mantaray", xp: 216.2, level: 91 },
    ];

    updateProgressBar(currentXP, targetXP);

    const tableBody = document.querySelector("#resultsTable tbody");
    tableBody.innerHTML = "";

    for (let food of foods) {
        let foodCount = Math.ceil(xpNeeded / food.xp);

        let row = document.createElement("tr");
        row.innerHTML = `
            <td>${food.level}</td>
            <td><canvas data-itemname="${food.name}" data-show-label="inline"></canvas></td>
            <td>${food.xp}</td>
            <td>${foodCount.toLocaleString()}</td>
        `;
        tableBody.appendChild(row);
    }
    window.safeRenderAllSprites();
}
