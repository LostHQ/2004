let mode = "fish";
function setMode(selectedMode) {
    mode = selectedMode;
    runCalc();
}
const cookingXp = {
    fish: {
        tbwt_cooked_karambwanji: { xp: 10, level: 1 },
        shrimp: { xp: 30, level: 1 },
        anchovies: { xp: 30, level: 1 },
        sardine: { xp: 40, level: 1 },
        tbwt_poorly_cooked_karambwan: { xp: 80, level: 1 },
        tbwt_cooked_karambwan: { xp: 190, level: 1 },
        herring: { xp: 50, level: 5 },
        mackerel: { xp: 60, level: 10 },
        trout: { xp: 70, level: 15 },
        cod: { xp: 75, level: 18 },
        pike: { xp: 80, level: 20 },
        salmon: { xp: 90, level: 25 },
        mort_slimey_eel_cooked: { xp: 95, level: 28 },
        tuna: { xp: 100, level: 30 },
        lobster: { xp: 120, level: 40 },
        bass: { xp: 130, level: 43 },
        swordfish: { xp: 140, level: 45 },
        lava_eel: { xp: 140, level: 53 },
        shark: { xp: 210, level: 80 },
        seaturtle: { xp: 211.3, level: 82 },
        mantaray: { xp: 216.2, level: 91 },
    },
    meat: {
        cooked_meat: { xp: 30, level: 1 },
        cooked_chicken: { xp: 30, level: 1 },
        cooked_rabbit: { xp: 30, level: 1 },
        cooked_ugthanki_meat: { xp: 40, level: 1 },
        snail_corpse_cooked1: { xp: 70, level: 12 },
        snail_corpse_cooked2: { xp: 80, level: 17 },
        snail_corpse_cooked3: { xp: 95, level: 22 },
        cooked_chompy: { xp: 100, level: 30 },
        cooked_oomlie: { xp: 30, level: 50 },
    },
    pies: {
        redberry_pie: { xp: 78, level: 10 },
        meat_pie: { xp: 110, level: 20 },
        apple_pie: { xp: 130, level: 30 },
        plain_pizza: { xp: 143, level: 35 },
        meat_pizza: { xp: 169, level: 45 },
        anchovie_pizza: { xp: 182, level: 55 },
        pineapple_pizza: { xp: 195, level: 65 },
    },
    gnome: {
        half_baked_bowl: { xp: 3, level: 1 },
        half_baked_crunchy: { xp: 3, level: 1 },
        half_baked_batta: { xp: 3, level: 1 },
        drunk_dragon: { xp: 60, level: 1 },
    },
    other: {
        swamppaste: { xp: 2, level: 1 },
        bread: { xp: 40, level: 1 },
        stew: { xp: 117, level: 25 },
        tbwt_jogre_bones_marinated_in_karambwanji: { xp: 100, level: 30 },
        tbwt_burnt_jogre_bones_marinated_in_karambwanji: { xp: 100, level: 30 },
        jug_wine: { xp: 200, level: 35 },
        cake: { xp: 180, level: 40 },
        chocolate_cake: { xp: 210, level: 50 },
        pitta_bread: { xp: 40, level: 58 },
        curry: { xp: 280, level: 60 },
    },
};
function runCalc() {
    const currentXP = parseInt(document.getElementById("currentXP").value);
    const targetXP = parseInt(document.getElementById("targetXP").value);
    const xpNeeded = targetXP - currentXP;

    updateProgressBar(currentXP, targetXP);

    const tableBody = document.querySelector("#resultsTable tbody");
    tableBody.innerHTML = "";

    for (const item in cookingXp[mode]) {
        const xpPerItem = cookingXp[mode][item].xp;
        const levelRequired = cookingXp[mode][item].level;
        const itemsNeeded = Math.ceil(xpNeeded / xpPerItem);

        const row = document.createElement("tr");
        row.innerHTML = `<td>${levelRequired}</td>
            <td><canvas itemname="${item}" show-label="inline"></canvas></td>
            <td>${xpPerItem}</td>
            <td>${itemsNeeded.toLocaleString()}</td>`;
        tableBody.appendChild(row);
    }
    window.safeRenderAllSprites();
}
