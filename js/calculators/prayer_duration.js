let selectedPrayers = [];
const prayers = [
    { name: "Thick Skin", drain: 5, title: "Thick Skin: +5% Defence" },
    { name: "Burst of Strength", drain: 5, title: "Burst of Strength: +5% Strength" },
    { name: "Clarity of Thought", drain: 5, title: "Clarity of Thought: +5% Attack" },
    { name: "Rock Skin", drain: 10, title: "Rock Skin: +10% Defence" },
    { name: "Superhuman Strength", drain: 10, title: "Superhuman Strength: +10% Strength" },
    { name: "Improved Reflexes", drain: 10, title: "Improved Reflexes: +10% Attack" },
    { name: "Rapid Restore", drain: 1.6667, title: "Rapid Restore: Halves restore time" },
    { name: "Rapid Heal", drain: 3.3333, title: "Rapid Heal: Halves HP drain rate" },
    { name: "Protect Item", drain: 3, title: "Protect Item: Keep 1 extra item on death" },
    { name: "Steel Skin", drain: 20, title: "Steel Skin: +15% Defence" },
    { name: "Ultimate Strength", drain: 20, title: "Ultimate Strength: +15% Strength" },
    { name: "Incredible Reflexes", drain: 20, title: "Incredible Reflexes: +15% Attack" },
    { name: "Protect from Magic", drain: 20, title: "Protect from Magic: 100% magic protection" },
    { name: "Protect from Missiles", drain: 20, title: "Protect from Missiles: 100% ranged protection" },
    { name: "Protect from Melee", drain: 20, title: "Protect from Melee: 100% melee protection" },
];
async function fetchPrayerLevel() {
    const username = document.getElementById("username").value.trim();
    if (!username) return alert("Please enter a username.");
    try {
        const res = await fetch(`pages/api/LCHiscoresProxy.php?username=${encodeURIComponent(username)}`);
        if (!res.ok) throw new Error("Network error");
        const data = await res.json();
        const prayerData = data.find((stat) => stat.type === 6);
        if (!prayerData) throw new Error("Prayer not found");
        document.getElementById("prayerLevel").value = Math.floor(prayerData.level);
        runCalc();
    } catch (e) {
        console.error(e);
        alert("Could not fetch prayer level.");
    }
}
function initPrayerGrid({ containerSel = ".prayer-grid", sheetCols = 4, displayTile = 40 } = {}) {
    const grid = document.querySelector(containerSel);
    if (!grid) return;
    grid.innerHTML = "";

    prayers.forEach((p, i) => {
        const div = document.createElement("div");
        div.className = "prayer";
        div.title = p.title;
        div.dataset.name = p.name;
        div.dataset.drain = p.drain;

        const col = i % sheetCols;
        const row = Math.floor(i / sheetCols);
        div.style.backgroundPosition = `-${col * displayTile}px -${row * displayTile}px`;

        div.addEventListener("click", () => {
            const nowOn = div.classList.toggle("active");
            if (nowOn) {
                selectedPrayers.push({ name: p.name, drain: p.drain });
            } else {
                selectedPrayers = selectedPrayers.filter((x) => x.name !== p.name);
            }
            runCalc();
        });
        grid.appendChild(div);
    });
}

function updatePrayerBonus() {
    const ids = ["necklace", "weapon", "body", "legs"];
    const totalBonus = ids.map((id) => parseInt(document.getElementById(id).value) || 0).reduce((a, b) => a + b, 0);
    document.getElementById("prayerBonus").value = totalBonus;
    runCalc();
}

function runCalc() {
    const baseLvl = parseInt(document.getElementById("prayerLevel").value) || 0;
    const monastery = parseInt(document.getElementById("monasteryAltar").value) || 0;
    const bonus = parseInt(document.getElementById("prayerBonus").value) || 0;
    const effectiveLvl = baseLvl + monastery;
    const drainRate = selectedPrayers.reduce((sum, p) => sum + p.drain, 0);
    const durationEl = document.getElementById("prayerDuration");
    const rapidDiv = document.getElementById("rapidHealDiv");
    const rapidText = document.getElementById("rapidHealText");
    const totalText = document.getElementById("totalHpRestoredText");
    if (drainRate === 0) {
        durationEl.textContent = "";
        rapidDiv.style.display = "none";
        return;
    }

    const perSec = drainRate / 60;
    let seconds = effectiveLvl / perSec;
    seconds *= 1 + bonus * 0.03333;

    const mins = Math.floor(seconds / 60);
    const secs = Math.round(seconds % 60);
    durationEl.textContent = mins ? `${mins}m ${secs}s` : `${secs}s`;

    const isRapid = selectedPrayers.some((p) => p.name === "Rapid Heal");
    if (isRapid) {
        rapidDiv.style.display = "block";
        const hp = seconds / 30;
        rapidText.textContent = `${hp.toFixed(0)}`;
        totalText.textContent = `${(hp * 2).toFixed(0)}`;
    } else {
        rapidDiv.style.display = "none";
    }
}

document.addEventListener("DOMContentLoaded", () => {
    initPrayerGrid();

    ["necklace", "weapon", "body", "legs"].forEach((id) => document.getElementById(id)?.addEventListener("change", updatePrayerBonus));
});
