let statsBg;

async function loadAssets() {
    const loadImages = ["/img/stats_blank244.png"];

    const imagePromises = loadImages.map((src) => {
        return new Promise((resolve, reject) => {
            const img = new Image();
            img.onload = () => resolve(img);
            img.onerror = reject;
            img.src = src;
        });
    });

    [statsBg] = await Promise.all(imagePromises);
}

function computeCombat(att, str, def, hp, rng, mag, pray) {
    let base = (def + hp + Math.floor(pray / 2)) * 0.25;
    let melee = (att + str) * 0.325;
    let range = Math.floor(rng * 1.5) * 0.325;
    let mage = Math.floor(mag * 1.5) * 0.325;
    return Math.floor(base + Math.max(melee, range, mage));
}

const questReqs = {
    //skill:     [freeReq, memsReq],
    attack:      [1,  20],
    hitpoints:   [10, 10],
    mining:      [15, 52],
    strength:    [1,  50],
    agility:     [1,  50],
    smithing:    [1,  50],
    defence:     [1,  1],
    herblore:    [1,  45],
    fishing:     [1,  53],
    ranged:      [1,  40],
    thieving:    [1,  50],
    cooking:     [1,  53],
    prayer:      [1,  42],
    crafting:    [1,  50],
    firemaking:  [1,  30],
    magic:       [1,  59],
    fletching:   [1,  10],
    woodcutting: [1,  50],
    runecraft:   [1,  1]
};

const skillList = {
    //(for stats it's only top number, lower is automatically offset)
    //skill:       [x,  y, centered?],
    attack:       [60,  43,  true],
    strength:     [60,  75,  true],
    defence:      [60,  105, true],
    ranged:       [59,  137, true],
    prayer:       [59,  167, true],
    magic:        [59,  198, true],
    runecraft:    [60,  229, true],
    hitpoints:    [124, 43,  true],
    agility:      [124, 75,  true],
    herblore:     [124, 105, true],
    thieving:     [124, 137, true],
    crafting:     [123, 167, true],
    fletching:    [123, 198, true],
    thieving:     [123, 137, true],
    mining:       [186, 43,  true],
    smithing:     [186, 75,  true],
    fishing:      [186, 105, true],
    cooking:      [185, 137, true],
    firemaking:   [185, 167, true],
    woodcutting:  [185, 198, true],
    quest_points: [65,  269, false],
    combat:       [178, 261, false],
    overall:      [165, 276, false]
};

async function drawQuestReqsPanel(canvas) {
    const stats = {};
    for (const [skillName, requirements] of Object.entries(questReqs)) {
        stats[skillName] = requirements[canvas.dataset.questreqs === "members" ? 1 : 0];
    }
    drawStatsPanel(canvas, stats, stats, "-");
}

async function drawStatsPanel(canvas, upperStats, lowerStats, questPoints) {
    if (!statsBg) { return; }

    canvas.width = statsBg.width;
    canvas.height = statsBg.height;
    canvas.style.width = statsBg.width + "px";
    canvas.style.height = statsBg.height + "px";

    const ctx = canvas.getContext("2d");
    ctx.imageSmoothingEnabled = false;

    ctx.clearRect(0, 0, canvas.width, canvas.height);
    ctx.drawImage(statsBg, 0, 0, statsBg.width, statsBg.height);

    const combatLevel = computeCombat(
        lowerStats["attack"],
        lowerStats["strength"],
        lowerStats["defence"],
        lowerStats["hitpoints"],
        lowerStats["ranged"],
        lowerStats["magic"],
        lowerStats["prayer"]
    );

    const fontColor = "#FFFF00";
    for (const skillName of Object.keys(skillList)) {
        switch (skillName) {
            case "combat":
                const [combatX, combatY, combatCentered] = skillList["combat"];
                drawP12(ctx, combatLevel.toString(), combatX, combatY, fontColor, combatCentered);
                break;
            case "overall":
                const overallLevel = Object.values(lowerStats)
                    .reduce((sum, level) => sum + (level || 0), 0);
                const [overallX, overallY, overallCentered] = skillList["overall"];
                drawP12(ctx, overallLevel.toString(), overallX, overallY, fontColor, overallCentered);
                break;
            case "quest_points":
                const [questX, questY, questCentered] = skillList["quest_points"];
                drawP12(ctx, questPoints, questX, questY, fontColor, questCentered);
                break;
            default:
                const [x, y, statCentered] = skillList[skillName];
                const [xOffset, yOffset] = [x+13, y+13];
                
                drawP11(ctx, upperStats[skillName].toString(), x, y, fontColor, statCentered);
                drawP11(ctx, lowerStats[skillName].toString(), xOffset, yOffset, fontColor, statCentered);
                break;
        }
    }
}

(async () => {
    await Promise.all([loadFonts(), loadAssets()]);
    document.querySelectorAll("canvas[data-questreqs]").forEach((c) => {
        drawQuestReqsPanel(c);
    });
})();
