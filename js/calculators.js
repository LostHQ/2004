function getXPForLevel(level) {
    let total = 0;
    for (let i = 1; i < level; i++) {
      total += Math.floor(i + 300 * Math.pow(2, i / 7.0));
    }
    return Math.floor(total / 4);
}
function getLevelForXP(xp) {
    let total = 0;
    let level = 1;
    while (level < 100) {
        let nextXP = Math.floor((level + 300 * Math.pow(2, level / 7.0)) / 4);
        total += nextXP;
        if (total > xp) { return level; }
        level++;
    }
    return 99;
}
function sanitizeXP(xp) {
    let targetXP = xp;
    if (targetXP < 0) { targetXP = 0; }
    else if (targetXP > 200000000) { targetXP = 200000000; }
    return targetXP;
}
function sanitizeLevel(level) {
    let targetLevel = level;
    if (targetLevel < 2) { targetLevel = 2; }
    else if (targetLevel > 126) { targetLevel = 126; }
    return targetLevel;
}
function sanitizePercent(percent) {
    let targetPercent = percent;
    if (targetPercent < 0) { targetPercent = 0; }
    else if (targetPercent > 100) { targetPercent = 100; }
    return targetPercent;
}
function updateProgressBar(currentXP, targetXP) {
    const parent = document.getElementById("progress-bar-root");
    if (!parent) return console.error("Progress bar root container not found");

    let prevLeftBarWidth = '0%';
    let prevRightBarWidth = '0%';
    if (parent.children.length > 1) {
        prevLeftBarWidth = parent.children[1].children[0].children[0].style.width;
        prevRightBarWidth = parent.children[1].children[1].children[0].style.width;
    }
    parent.innerHTML = "";

    const header = document.createElement("h3");
    header.textContent = "Progress to Goal:";
    parent.appendChild(header);
    const wrapper = document.createElement("div");
    wrapper.style.display = "flex";
    wrapper.style.gap = "8px";
    wrapper.style.width = "100%";

    const container1 = document.createElement("div");
    container1.className = "progress-container";
    container1.style.flex = "1 1 0";
    container1.style.minWidth = 0;
    const xpNeeded = targetXP - currentXP;
    const leftBar = document.createElement("div");
    const leftBarText = document.createElement("div");
    leftBar.className = "progress-bar";
    leftBarText.className = "progress-text";
    leftBar.style.width = prevLeftBarWidth;
    const nextLeftBarWidth = sanitizePercent((currentXP / targetXP) * 100);
    leftBarText.textContent = `${nextLeftBarWidth.toFixed(2)}% from level 1`;
    container1.appendChild(leftBar);
    container1.appendChild(leftBarText);

    const container2 = document.createElement("div");
    container2.className = "progress-container";
    container2.style.flex = "1 1 0";
    container2.style.minWidth = 0;
    const rightBar = document.createElement("div");
    const rightBarText = document.createElement("div");
    rightBar.className = "progress-bar";
    rightBarText.className = "progress-text";
    rightBar.style.width = prevRightBarWidth;
    const prevLevelNum = getLevelForXP(currentXP);
    const prevLevelXP = getXPForLevel(prevLevelNum);
    const nextRightBarWidth = sanitizePercent(((currentXP - prevLevelXP) / (targetXP - prevLevelXP)) * 100);
    rightBarText.textContent = `${nextRightBarWidth.toFixed(2)}% from level ${prevLevelNum}`;
    container2.appendChild(rightBar);
    container2.appendChild(rightBarText);

    wrapper.appendChild(container1);
    wrapper.appendChild(container2);
    parent.appendChild(wrapper);

    const container3 = document.createElement("div");
    container3.className = "progress-textonly";
    container3.textContent = `${sanitizeXP(xpNeeded).toLocaleString()} XP needed to reach level ${getLevelForXP(targetXP)}`;
    container3.style.flex = "1 1 0";
    container3.style.minWidth = 0;
    parent.appendChild(container3);
    setTimeout(() => {
        leftBar.style.width = `${nextLeftBarWidth.toFixed(2)}%`;
        rightBar.style.width = `${nextRightBarWidth.toFixed(2)}%`;
    }, 50);
}

async function fetchXP(statType) {
    const username = document.getElementById("username").value.trim();
    if (!username) return alert("Please enter a username.");
    try {
        const response = await fetch(`pages/api/LCHiscoresProxy.php?username=${encodeURIComponent(username)}`);
        if (!response.ok) throw new Error("Failed to fetch data.");
        const data = await response.json();

        const checkSkill = data.find(stat => stat.type === statType);

        if (checkSkill) {
            const XP = Math.floor(checkSkill.value / 10);
            document.getElementById("currentXP").value = XP;
            document.getElementById("targetLevel").value = getLevelForXP(XP) + 1;
            document.getElementById("targetXP").value = getXPForLevel(getLevelForXP(XP) + 1);
            runCalc();
        } else {
            alert("Player not found or not ranked in hiscores.");
        }
    } catch (error) {
        console.error(error);
        alert("Error fetching data!");
    }
}

function renderXpTable() {
    const xpDiv = document.querySelector('.xp-table');
    if (!xpDiv) return console.error('no .xp-table container found');

    const table = document.createElement('table');
    table.classList.add('table');
    table.style.width = '90%';

    const totalLevels = 98;
    const columns     = 2;
    const rowsPerCol  = Math.ceil(totalLevels / columns);

    const titleRow  = document.createElement('tr');
    const titleCell = document.createElement('th');
    titleCell.setAttribute('colspan', columns * 2);
    titleCell.textContent = 'Experience Table';
    titleRow.appendChild(titleCell);
    table.appendChild(titleRow);

    const headerRow = document.createElement('tr');
    for (let c = 0; c < columns; c++) {
        const thLevel = document.createElement('th');
        thLevel.textContent = 'Level';
        const thXp    = document.createElement('th');
        thXp.textContent = 'XP Required';
        headerRow.appendChild(thLevel);
        headerRow.appendChild(thXp);
    }
    table.appendChild(headerRow);

    for (let r = 0; r < rowsPerCol; r++) {
        const tr = document.createElement('tr');
        for (let c = 0; c < columns; c++) {
            const level = c * rowsPerCol + (r + 2);
            if (level <= 99) {
                const xp = getXPForLevel(level);
                const tdLevel = document.createElement('td');
                tdLevel.textContent = level;
                const tdXp = document.createElement('td');
                tdXp.textContent = xp.toLocaleString();
                tr.appendChild(tdLevel);
                tr.appendChild(tdXp);
            } else {
                tr.appendChild(document.createElement('td'));
                tr.appendChild(document.createElement('td'));
            }
        }
        table.appendChild(tr);
    }
    xpDiv.appendChild(table);
}

document.addEventListener("DOMContentLoaded", () => {
    const xpInput    = document.getElementById("targetXP");
    const lvlInput   = document.getElementById("targetLevel");
    const currentXP  = document.getElementById("currentXP");
    if (!xpInput || !lvlInput || !currentXP) { return; }

    function handleXPUpdate() {
        xpInput.value = sanitizeXP(xpInput.value);
        const xp    = parseInt(xpInput.value, 10) || 0;
        lvlInput.value = getLevelForXP(xp);
        runCalc();
    }
    function handleCurrentXPUpdate() {
        currentXP.value = sanitizeXP(currentXP.value);
        runCalc();
    }
    function handleLevelUpdate() {
        lvlInput.value = sanitizeLevel(lvlInput.value);
        const lvl   = parseInt(lvlInput.value, 10) || 2;
        xpInput.value  = getXPForLevel(lvl);
        runCalc();
    }

    xpInput.addEventListener("change", handleXPUpdate);
    xpInput.addEventListener("blur", handleXPUpdate);

    currentXP.addEventListener("change", handleCurrentXPUpdate);
    currentXP.addEventListener("blur", handleCurrentXPUpdate);

    lvlInput.addEventListener("change", handleLevelUpdate);
    lvlInput.addEventListener("blur", handleLevelUpdate);
});