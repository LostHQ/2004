const foods = {
    cooked_meat: { xp: 30, level: 1 },
    cooked_chicken: { xp: 30, level: 1 },
    shrimp: { xp: 30, level: 1 },
    anchovies: { xp: 30, level: 1 },
    bread: { xp: 40, level: 1 },
    sardine: { xp: 40, level: 1 },
    cooked_ugthanki_meat: { xp: 40, level: 1 },
    herring: { xp: 50, level: 5 },
    mackerel: { xp: 60, level: 10 },
    redberry_pie: { xp: 78, level: 10 },
    trout: { xp: 70, level: 15 },
    cod: { xp: 75, level: 18 },
    pike: { xp: 80, level: 20 },
    meat_pie: { xp: 110, level: 20 },
    salmon: { xp: 90, level: 25 },
    stew: { xp: 117, level: 25 },
    cooked_chompy: { xp: 100, level: 30 },
    tuna: { xp: 100, level: 30 },
    apple_pie: { xp: 130, level: 30 },
    plain_pizza: { xp: 143, level: 35 },
    jug_wine: { xp: 200, level: 35 },
    lobster: { xp: 120, level: 40 },
    cake: { xp: 180, level: 40 },
    bass: { xp: 130, level: 43 },
    swordfish: { xp: 140, level: 45 },
    meat_pizza: { xp: 169, level: 45 },
    chocolate_cake: { xp: 210, level: 50 },
    lava_eel: { xp: 140, level: 53 },
    anchovie_pizza: { xp: 182, level: 55 },
    pitta_bread: { xp: 40, level: 58 },
    curry: { xp: 280, level: 60 },
    pineapple_pizza: { xp: 195, level: 65 },
    shark: { xp: 210, level: 80 },
    seaturtle: { xp: 211.3, level: 82 },
    mantaray: { xp: 216.2, level: 91 },
};

function runCalc() {
    const currentXP = parseInt(document.getElementById("currentXP").value);
    const targetXP = parseInt(document.getElementById("targetXP").value);
    const xpNeeded = targetXP - currentXP;

    updateProgressBar(currentXP, targetXP);

    const tableBody = document.querySelector("#resultsTable tbody");
    tableBody.innerHTML = "";

    for (const [item, data] of Object.entries(foods)) {
        const foodCount = Math.ceil(xpNeeded / data.xp);

        const row = document.createElement("tr");
        row.innerHTML =
            `<td>${data.level}</td>
            <td><canvas itemname="${item}" show-label="inline"></canvas></td>
            <td>${data.xp}</td>
            <td>${foodCount.toLocaleString()}</td>`;
        tableBody.appendChild(row);
    }
    window.safeRenderAllSprites();
}
