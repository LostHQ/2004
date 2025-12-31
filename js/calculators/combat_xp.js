import bonesXp from "./prayer.js";

let npcsData = [];

async function loadNpcsData() {
    if (npcsData.length > 0) {
        return;
    }
    try {
        const response = await fetch("../droptables/monster_drops.json");
        const monsterData = await response.json();

        npcsData = Object.values(monsterData)
            .map((monster) => {
                const boneDrop = monster.always?.find((drop) => drop.item[0].includes("bones")) || monster.roll_table?.find((drop) => drop.item[0].includes("bones"));

                let boneType = "bones"; // Default
                if (boneDrop) {
                    const boneName = boneDrop.item[0];
                    if (bonesXp.hasOwnProperty(boneName)) {
                        boneType = boneName;
                    }
                }

                let name = monster.name;
                if (monster.info && monster.info.vislevel) {
                    name += ` (level-${monster.info.vislevel})`;
                }

                return {
                    name: name,
                    hitpoints: parseInt(monster.info.hitpoints, 10) || 0,
                    bones: boneType,
                };
            })
            .filter((npc) => npc.hitpoints > 0);
    } catch (error) {
        console.error("Error loading NPC data:", error);
    }
}

loadNpcsData();

document.getElementById("itemSearch").addEventListener("input", async function () {
    await loadNpcsData();
    const searchQuery = this.value.toLowerCase();
    const resultsDiv = document.getElementById("searchResults");
    resultsDiv.innerHTML = ""; // Clear previous results
    resultsDiv.style.display = searchQuery ? "block" : "none";

    if (!searchQuery) return;

    const matches = npcsData.filter((npc) => npc.name.toLowerCase().includes(searchQuery));

    matches.forEach((npc) => {
        const div = document.createElement("div");
        div.classList.add("search-item");
        div.textContent = npc.name;
        div.onclick = function () {
            document.getElementById("itemSearch").value = npc.name;
            document.getElementById("monsterHP").value = npc.hitpoints;
            resultsDiv.style.display = "none";
        };
        resultsDiv.appendChild(div);
    });
});

// Hide search results when clicking outside
document.addEventListener("click", function (e) {
    if (!document.getElementById("itemSearch").contains(e.target)) {
        document.getElementById("searchResults").style.display = "none";
    }
});

async function fetchXP() {
    const username = document.getElementById("username").value.trim();
    if (!username) return alert("Please enter a username.");

    try {
        const response = await fetch(`pages/api/LCHiscoresProxy.php?username=${encodeURIComponent(username)}`);
        if (!response.ok) throw new Error("Failed to fetch data.");
        const data = await response.json();

        const xpFields = {
            attackXP: 1,
            strengthXP: 3,
            defenceXP: 2,
            hitpointsXP: 4,
            rangedXP: 5,
            prayerXP: 6,
        };

        Object.entries(xpFields).forEach(([field, type]) => {
            const stat = data.find((stat) => stat.type === type);
            if (stat) {
                document.getElementById(field).value = Math.floor(stat.value / 10);
            }
        });
    } catch (error) {
        console.error(error);
        alert("Error fetching data.");
    }
}

function runCalc() {
    let monsterName = document.getElementById("itemSearch").value.trim().toLowerCase();
    let monsterHP = parseInt(document.getElementById("monsterHP").value) || 0;
    let numMonsters = parseInt(document.getElementById("numMonsters").value) || 0;
    let xpPerKill = monsterHP * 4;
    let totalXP = xpPerKill * numMonsters;

    let attackXP = parseInt(document.getElementById("attackXP").value) || 0;
    let strengthXP = parseInt(document.getElementById("strengthXP").value) || 0;
    let defenceXP = parseInt(document.getElementById("defenceXP").value) || 0;
    let hitpointsXP = parseInt(document.getElementById("hitpointsXP").value) || 0;
    let rangedXP = parseInt(document.getElementById("rangedXP").value) || 0;
    let prayerXP = parseInt(document.getElementById("prayerXP").value) || 0;

    let style = document.getElementById("attackStyle").value;
    if (style === "accurate") attackXP += totalXP;
    if (style === "aggressive") strengthXP += totalXP;
    if (style === "defensive") defenceXP += totalXP;
    if (style === "controlled") {
        attackXP += totalXP / 3;
        strengthXP += totalXP / 3;
        defenceXP += totalXP / 3;
    }
    if (style === "rapid") rangedXP += totalXP;
    if (style === "longrange") {
        rangedXP += totalXP / 2;
        defenceXP += totalXP / 2;
    }
    hitpointsXP += totalXP / 3;
    // Prayer XP from bones
    const buryBones = document.getElementById("buryBones").value;
    if (buryBones === "yes") {
        const matchedNPC = npcsData.find((npc) => npc.name.toLowerCase() === monsterName);
        if (matchedNPC && matchedNPC.bones) {
            const boneXP = bonesXp[matchedNPC.bones] || 0;
            prayerXP += boneXP * numMonsters;
        }
    }

    document.getElementById("newXP").innerHTML = `Attack XP: ${Math.floor(attackXP).toLocaleString()} (Level ${getLevelForXP(attackXP)})<br>
         Strength XP: ${Math.floor(strengthXP).toLocaleString()} (Level ${getLevelForXP(strengthXP)})<br>
         Defence XP: ${Math.floor(defenceXP).toLocaleString()} (Level ${getLevelForXP(defenceXP)})<br>
         Hitpoints XP: ${Math.floor(hitpointsXP).toLocaleString()} (Level ${getLevelForXP(hitpointsXP)})<br>
         Ranged XP: ${Math.floor(rangedXP).toLocaleString()} (Level ${getLevelForXP(rangedXP)})<br>
         Prayer XP: ${Math.floor(prayerXP).toLocaleString()} (Level ${getLevelForXP(prayerXP)})`;
}

["monsterHP", "numMonsters", "attackStyle", "buryBones"].forEach((id) => {
    document.getElementById(id).addEventListener("change", runCalc);
});
