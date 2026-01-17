let npcSearchable = {};

async function getNPCName(debugname) {
    await checkSpriteLoaderReady();
    if (!debugname) { return "Unknown NPC"; }
    if (typeof debugname === "object") {
        const npcObj = debugname;
        const name = npcObj.name || npcObj.debugname || "Unknown NPC";
        const vis = npcObj.vislevel || (npcObj.info && npcObj.info.vislevel);
        return vis ? `${name} (level-${vis})` : name;
    }
    const npc = window.npcData[debugname];
    if (npc && npc.name) {
        const vis = npc.vislevel || (npc.info && npc.info.vislevel);
        return vis ? `${npc.name} (level-${vis})` : npc.name;
    }
    return debugname;
}

async function populateNPCDropdown() {
    await checkSpriteLoaderReady();
    if (!window.npcData) {
        return;
    }

    for (const debugname in window.npcData) {
        const npc = window.npcData[debugname];
        if (!npc.drops) continue;
        const bonesXp = {
            bones: 4.5,
            bones_burnt: 4.5,
            bat_bones: 4.5,
            wolf_bones: 4.5,
            big_bones: 15,
            tbwt_jogre_bones: 15,
            babydragon_bones: 30,
            dragon_bones: 72,
        };

        let boneXp = bonesXp['bones'];
        function findBoneDropXP(table) {
            if (!table) return null;
            for (const key in table) {
                const drop = table[key];
                if (!drop) continue;
                const itemName = typeof drop.item === 'string' ? drop.item : (drop.item && typeof drop.item === 'object' ? drop.item[0] : null);
                if (itemName && itemName.includes('bones')) {
                    const bn = itemName;
                    if (bn && bonesXp.hasOwnProperty(bn)) return bonesXp[bn];
                    return bonesXp['bones'];
                }
            }
            return null;
        }

        const foundXP = findBoneDropXP(npc.drops.always) || findBoneDropXP(npc.drops.roll_table);
        if (typeof foundXP === 'number') boneXp = foundXP;

        if (npc.hitpoints && npc.hitpoints > 0) {
            npcSearchable[debugname] = {
                name: await getNPCName(debugname),
                hitpoints: npc.hitpoints,
                bones: boneXp
            };
        }
    }
}

document.getElementById("itemSearch").addEventListener("input", async function () {
    const searchQuery = this.value.toLowerCase();
    const resultsDiv = document.getElementById("searchResults");
    resultsDiv.innerHTML = "";
    resultsDiv.style.display = searchQuery ? "block" : "none";

    if (!searchQuery) return;

    for (const key in npcSearchable) {
        const npc = npcSearchable[key];
        if (!npc || !npc.name) continue;
        if (npc.name.toLowerCase().includes(searchQuery)) {
            const div = document.createElement("div");
            div.classList.add("search-item");
            div.textContent = npc.name;
            div.onclick = function () {
                document.getElementById("itemSearch").value = npc.name;
                document.getElementById("npcHP").value = npc.hitpoints;
                resultsDiv.style.display = "none";
            };
            resultsDiv.appendChild(div);
        }
    }
});

document.addEventListener("click", function (e) {
    if (!document.getElementById("itemSearch").contains(e.target)) {
        document.getElementById("searchResults").style.display = "none";
    }
});

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
        let matchedNPC = null;
        for (const k in npcSearchable) {
            const n = npcSearchable[k];
            if (n && n.name && n.name.toLowerCase() === npcName) {
                matchedNPC = n;
                break;
            }
        }
        if (matchedNPC && matchedNPC.bones) {
            updated.prayer += (matchedNPC.bones || 0) * numNpcs;
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

(async function initNPCSearch() {
    await checkSpriteLoaderReady();
    await populateNPCDropdown();
})();
