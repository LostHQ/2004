let statsBg;

async function loadAssets() {
    const loadImages = ["/img/statspanel.png"];

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
    runecraft:   [1,  1],
};

const skillList = {
    //X,Y positions in the grid (for stats it's only top number, lower is automatically offset)
    attack:       [77,  54],
    defence:      [77,  116],
    strength:     [77,  86],
    hitpoints:    [140, 54],
    ranged:       [77,  148],
    prayer:       [77,  178],
    magic:        [77,  209],
    cooking:      [203, 148],
    woodcutting:  [203, 209],
    fletching:    [140, 209],
    fishing:      [204, 116],
    firemaking:   [203, 178],
    crafting:     [140, 178],
    smithing:     [204, 86],
    mining:       [204, 54],
    herblore:     [140, 116],
    agility:      [140, 86],
    thieving:     [140, 148],
    runecraft:    [77,  241],
    quest_points: [83,  282],
    combat:       [198, 273],
    overall:      [195, 288],
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
                const [combatX, combatY] = skillList["combat"];
                drawP12(ctx, combatLevel.toString(), combatX, combatY, fontColor);
                break;
            case "overall":
                const overallLevel = Object.values(lowerStats)
                    .reduce((sum, level) => sum + (level || 0), 0);
                const [overallX, overallY] = skillList["overall"];
                drawP12(ctx, overallLevel.toString(), overallX, overallY, fontColor, true);
                break;
            case "quest_points":
                const [questX, questY] = skillList["quest_points"];
                drawP12(ctx, questPoints, questX, questY, fontColor, true);
                break;
            default:
                const [x, y] = skillList[skillName];
                const [xOffset, yOffset] = [x+13, y+13];
                
                drawP11(ctx, upperStats[skillName].toString(), x, y, fontColor, true);
                drawP11(ctx, lowerStats[skillName].toString(), xOffset, yOffset, fontColor, true);
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
