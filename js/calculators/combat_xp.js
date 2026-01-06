const bonesXp = {
    bones: 4.5,
    bones_burnt: 4.5,
    bat_bones: 4.5,
    wolf_bones: 4.5,
    big_bones: 15,
    babydragon_bones: 30,
    dragon_bones: 72,
};

let npcData = {};
let npcSearchable = {};

Promise.all([
    fetch(`js/npcdb/npc_data.json?v=${currentGameVer}`).then((res) => res.json())
]).then(([npcDataJson]) => {
    npcData = npcDataJson;
    populateNPCDropdown();
});

function getNPCName(debugname) {
    if (!debugname) { return "Unknown NPC"; }
    if (typeof debugname === "object") {
        const npcObj = debugname;
        const name = npcObj.name || npcObj.debugname || "Unknown NPC";
        const vis = npcObj.vislevel || (npcObj.info && npcObj.info.vislevel);
        return vis ? `${name} (level-${vis})` : name;
    }
    const npc = npcData[debugname];
    if (npc && npc.name) {
        const vis = npc.vislevel || (npc.info && npc.info.vislevel);
        return vis ? `${npc.name} (level-${vis})` : npc.name;
    }
    return debugname;
}

function populateNPCDropdown() {
    for (const debugname in npcData) {
        const npc = npcData[debugname];
        if (!npc.drops) continue;

        let boneType = "bones"; // Default
        const boneDrop = npc.drops.always?.find((drop) => drop.item[0].includes("bones")) || npc.drops.roll_table?.find((drop) => drop.item[0].includes("bones"));
        if (boneDrop) {
            const boneName = boneDrop.item[0];
            if (bonesXp.hasOwnProperty(boneName)) {
                boneType = boneName;
            }
        }

        if (npc.hitpoints && npc.hitpoints > 0) {
            npcSearchable[debugname] = {
                name: getNPCName(debugname),
                hitpoints: npc.hitpoints,
                bones: boneType
            };
        }
    }

    console.log("NPC data loaded:", Object.keys(npcSearchable).length, "entries");
}

document.getElementById("itemSearch").addEventListener("input", async function () {
    const searchQuery = this.value.toLowerCase();
    const resultsDiv = document.getElementById("searchResults");
    resultsDiv.innerHTML = ""; // Clear previous results
    resultsDiv.style.display = searchQuery ? "block" : "none";

    if (!searchQuery) return;

    const matches = Object.values(npcSearchable).filter((npc) => npc.name.toLowerCase().includes(searchQuery));

    matches.forEach((npc) => {
        const div = document.createElement("div");
        div.classList.add("search-item");
        div.textContent = npc.name;
        div.onclick = function () {
            document.getElementById("itemSearch").value = npc.name;
            document.getElementById("npcHP").value = npc.hitpoints;
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
    // Cache DOM handles
    const get = (id) => document.getElementById(id);
    const itemSearchGet = get("itemSearch");
    const npcHPGet = get("npcHP");
    const numNpcsGet = get("numNpcs");
    const attackStyleGet = get("attackStyle");
    const buryBonesGet = get("buryBones");
    const outputDiv = get("output");

    // Parse inputs (robust, fast)
    const npcName = (itemSearchGet.value || "").trim().toLowerCase();
    const npcHP = Number(npcHPGet.value) || 0;
    const numNpcs = Number(numNpcsGet.value) || 0;
    const totalXP = (npcHP * 4) * numNpcs;

    const current = {
        attack: Number(get("attackXP").value) || 0,
        strength: Number(get("strengthXP").value) || 0,
        defence: Number(get("defenceXP").value) || 0,
        hitpoints: Number(get("hitpointsXP").value) || 0,
        ranged: Number(get("rangedXP").value) || 0,
        prayer: Number(get("prayerXP").value) || 0,
    };

    const updated = Object.assign({}, current);
    switch (attackStyleGet.value) {
        case "aggressive": updated.strength += totalXP; break;
        case "defensive": updated.defence += totalXP; break;
        case "controlled":
            updated.attack += totalXP / 3;
            updated.strength += totalXP / 3;
            updated.defence += totalXP / 3; break;
        case "rapid": updated.ranged += totalXP; break;
        case "longrange":
            updated.ranged += totalXP / 2;
            updated.defence += totalXP / 2; break;
        default:
        case "accurate": updated.attack += totalXP; break;
    }
    updated.hitpoints += totalXP / 3;

    if (buryBonesGet.value === "yes" && npcName && numNpcs > 0) {
        const matchedNPC = Object.values(npcSearchable).find((n) => n.name.toLowerCase() === npcName);
        if (matchedNPC && matchedNPC.bones) {
            updated.prayer += (bonesXp[matchedNPC.bones] || 0) * numNpcs;
        }
    }

    outputDiv.innerHTML = "";
    outputDiv.classList.add("calculators");
    const header = document.createElement("h2");
    header.textContent = "Updated XP:";
    outputDiv.appendChild(header);
    const table = document.createElement("table");
    outputDiv.appendChild(table);

    const stats = [
        ["attack", "Attack"],
        ["strength", "Strength"],
        ["defence", "Defence"],
        ["hitpoints", "Hitpoints"],
        ["ranged", "Ranged"],
        ["prayer", "Prayer"],
    ];

    const frag = document.createDocumentFragment();
    stats.forEach(([key, label]) => {
        const beforeXP = Math.floor(current[key]);
        const afterXP = Math.floor(updated[key]);
        const tr = document.createElement("tr");
        const tdBefore = document.createElement("td");
        const tdArrow = document.createElement("td");
        const tdAfter = document.createElement("td");

        tdBefore.textContent = `${label}: ${beforeXP.toLocaleString()}xp (Lvl ${getLevelForXP(beforeXP)})`;
        tdArrow.innerHTML = '→';
        tdAfter.textContent = `+${(afterXP - beforeXP).toLocaleString()}xp (Lvl ${getLevelForXP(afterXP)})`;
        if (afterXP !== beforeXP) tdAfter.classList.add("green-text");

        tr.appendChild(tdBefore);
        tr.appendChild(tdArrow);
        tr.appendChild(tdAfter);
        frag.appendChild(tr);
    });
    table.appendChild(frag);
}

["npcHP", "numNpcs", "attackStyle", "buryBones"].forEach((id) => {
    document.getElementById(id).addEventListener("change", runCalc);
});
