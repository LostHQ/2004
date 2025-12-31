async function lookupPlayer() {
    const infoDiv = document.getElementById("playerInfo");
    const inputEl = document.getElementById("username");

    const raw = inputEl.value.trim();
    const username = toTitleCase(raw);
    inputEl.value = username;

    infoDiv.innerHTML = "";

    try {
        const hiscoresData = await lookupHiscores(username);
        if (hiscoresData.length === 0) throw new Error();

        const header = document.createElement("h3");
        header.textContent = `Hiscores for ${username}:`;
        infoDiv.appendChild(header);

        const grid = document.createElement("div");
        grid.classList.add("player-grid");

        for (const key in hiscoresData) {
            const stat = hiscoresData[key];
            const name = getStatInfo(stat.type, "name");
            const icon = getStatInfo(stat.type, "icon");

            const lvlNum = stat.level ?? 0;
            const rawXP = Math.floor(stat.value / 10);
            const rank = stat.rank?.toLocaleString() ?? "-";

            const card = document.createElement("div");
            card.classList.add("skill-card");

            const imgEl = document.createElement("img");
            imgEl.src = icon;
            imgEl.alt = `${name} icon`;
            card.appendChild(imgEl);

            const titleEl = document.createElement("h4");
            titleEl.textContent = name;
            card.appendChild(titleEl);

            const lvlEl = document.createElement("p");
            lvlEl.textContent = `Level: ${lvlNum.toLocaleString()}`;
            card.appendChild(lvlEl);

            const xpEl = document.createElement("p");
            xpEl.textContent = `XP: ${rawXP.toLocaleString()}`;
            card.appendChild(xpEl);

            const rankEl = document.createElement("p");
            rankEl.textContent = `Rank: ${rank}`;
            card.appendChild(rankEl);

            const bar = document.createElement("div");
            if (name == "Overall") {
                bar.classList.add("empty-progress-bar");
            } else {
                const xpThis = getXPForLevel(lvlNum);
                const xpNext = getXPForLevel(lvlNum + 1);
                const intoLv = rawXP - xpThis;
                const needLv = xpNext - xpThis;
                const percentToNext = lvlNum >= 99 ? 100 : Math.max(0, Math.min(100, Math.floor((intoLv / needLv) * 100)));
                bar.classList.add("progress-bar");
                bar.style.background = `linear-gradient(to right, #4caf50 ${percentToNext}%, #333333 ${percentToNext}% )`;
                if (lvlNum < 99) {
                    bar.innerHTML = `${percentToNext}% - ${(xpNext - rawXP).toLocaleString()} XP<br>to level ${lvlNum + 1}`;
                } else {
                    bar.style.background = "rgb(76, 135, 175)";
                    bar.innerHTML = `${percentToNext}% - max level achieved!`;
                }
            }
            card.appendChild(bar);
            grid.appendChild(card);
        }
        infoDiv.appendChild(grid);
    } catch (err) {
        // Hiscores catch
        const header = document.createElement("h3");
        header.textContent = `${username} not found or not ranked in hiscores.`;
        infoDiv.appendChild(header);
        console.error(err);
    }
    infoDiv.appendChild(hr());
    try {
        const alogData = await lookupAlog(username);
        if (alogData.length === 0) throw new Error();

        const header = document.createElement("h3");
        header.textContent = `${username}'s Adventure Log:`;
        infoDiv.appendChild(header);

        const alogGrid = document.createElement("div");
        alogGrid.classList.add("player-grid");

        alogData.forEach((entry) => {
            const card = document.createElement("div");
            card.classList.add("skill-card");

            let iconSrc = "";
            let altText = "";
            const desc = entry.description;

            switch (true) {
                case /^Reached total level/i.test(desc):
                    iconSrc = getStatInfo(0, "icon");
                    altText = "Overall icon";
                    break;
                case /levelled up\s+(\w+)/i.test(desc):
                    const skillName = desc.match(/levelled up\s+(\w+)/i)[1];
                    [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 21].some((id) => {
                        if (getStatInfo(id, "name").toLowerCase() === skillName.toLowerCase()) {
                            iconSrc = getStatInfo(id, "icon");
                            altText = `${skillName} icon`;
                            return true;
                        }
                    });
                    break;

                case /^Completed tutorial island/i.test(desc):
                case /^Quest complete:/i.test(desc):
                    iconSrc = "img/questicon.png";
                    altText = "Quest complete icon";
                    break;

                case /^Completed (?:a|an) (?:Easy|Medium|Hard) Clue Scroll\b/i.test(desc):
                    iconSrc = "img/clueicon.png";
                    altText = "Clue Scroll";
                    break;

                case /^Failed random event and had their items scattered/i.test(desc):
                    iconSrc = "img/genie.png";
                    altText = "Genie Icon";
                    break;

                case /^Failed random event and had their items noted/i.test(desc):
                    iconSrc = "img/mys_old_man.png";
                    altText = "Mysterious Old Man Icon";
                    break;

                case /^Failed random event and got teleported/i.test(desc):
                    iconSrc = "img/teleport.png";
                    altText = "Failed Random Teleport Icon";
                    break;

                case /^Broke their .* pickaxe/i.test(desc):
                    iconSrc = "img/broken_pickaxe.png";
                    altText = "Broken Pickaxe Icon";
                    break;

                case /^Broke their .* axe/i.test(desc):
                    iconSrc = "img/broken_axe.png";
                    altText = "Broken Axe Icon";
                    break;

                case /^Lost their .* pickaxe head/i.test(desc):
                    iconSrc = "img/lost_pickaxe_head.png";
                    altText = "Lost Pickaxe Head Icon";
                    break;

                case /^Lost their .* axe head/i.test(desc):
                    iconSrc = "img/lost_axe_head.png";
                    altText = "Lost Axe Head Icon";
                    break;

                default:
                    iconSrc = "";
                    break;
            }

            if (iconSrc) {
                const img = document.createElement("img");
                img.src = iconSrc;
                img.alt = altText;
                img.style.width = "32px";
                img.style.height = "32px";
                img.style.marginBottom = "0.5rem";
                card.appendChild(img);
            }

            const tsEl = document.createElement("h4");
            tsEl.textContent = formatTimestamp(entry.timestamp);
            card.appendChild(tsEl);

            const descEl = document.createElement("p");
            descEl.textContent = desc;
            card.appendChild(descEl);

            alogGrid.appendChild(card);
        });

        infoDiv.appendChild(alogGrid);
    } catch (err) {
        // ALog catch
        const header = document.createElement("h3");
        header.textContent = `${username} alog data was not found.`;
        infoDiv.appendChild(header);
        console.error(err);
    }
    const params = new URLSearchParams(window.location.search);
    params.set("username", username);
    history.replaceState(null, "", window.location.pathname + "?" + params.toString());
}

async function lookupAlog(username) {
    const response = await fetch(`pages/api/LCAlogProxy.php?username=${encodeURIComponent(username)}&time=` + Date.now());
    if (!response.ok) throw new Error("Player adventure log not found.");
    return await response.json();
}

async function lookupHiscores(username) {
    const response = await fetch(`pages/api/LCHiscoresProxy.php?username=${encodeURIComponent(username)}&time=` + Date.now());
    if (!response.ok) throw new Error("Player not found or not ranked in hiscores.");
    return await response.json();
}

// HELPER FUNCTIONS
function th(text) {
    return (document.createElement("th").textContent = text);
}
function td(text) {
    return (document.createElement("td").textContent = text);
}
function hr() {
    return document.createElement("hr");
}
function formatTimestamp(tsString) {
    const [datePart, timePart] = tsString.split(" ");
    const [year, month, day] = datePart.split("-").map(Number);
    const [hour, minute] = timePart.split(":").map(Number);

    const dt = new Date(year, month - 1, day, hour, minute);

    const monthName = dt.toLocaleString("en-US", { month: "long" });
    const dayNum = dt.getDate();
    const ordinal = getOrdinal(dayNum);

    const hh = String(dt.getHours()).padStart(2, "0");
    const mm = String(dt.getMinutes()).padStart(2, "0");

    return `${monthName} ${ordinal}, ${dt.getFullYear()} ${hh}:${mm}`;
}

function getOrdinal(n) {
    const s = n % 100;
    if (s >= 11 && s <= 13) return n + "th";
    switch (n % 10) {
        case 1:
            return n + "st";
        case 2:
            return n + "nd";
        case 3:
            return n + "rd";
        default:
            return n + "th";
    }
}
function toTitleCase(str) {
    return str
        .split(" ")
        .map((w) => (w.length ? w.charAt(0).toUpperCase() + w.slice(1).toLowerCase() : ""))
        .join(" ");
}
function getStatInfo(statID, type) {
    const stats = {
        0: ["Overall", "img/skillicons/stats.webp"],
        1: ["Attack", "img/skillicons/attack.webp"],
        2: ["Defence", "img/skillicons/defence.webp"],
        3: ["Strength", "img/skillicons/strength.webp"],
        4: ["Hitpoints", "img/skillicons/hitpoints.webp"],
        5: ["Ranged", "img/skillicons/ranged.webp"],
        6: ["Prayer", "img/skillicons/prayer.webp"],
        7: ["Magic", "img/skillicons/magic.webp"],
        8: ["Cooking", "img/skillicons/cooking.webp"],
        9: ["Woodcutting", "img/skillicons/woodcutting.webp"],
        10: ["Fletching", "img/skillicons/fletching.webp"],
        11: ["Fishing", "img/skillicons/fishing.webp"],
        12: ["Firemaking", "img/skillicons/firemaking.webp"],
        13: ["Crafting", "img/skillicons/crafting.webp"],
        14: ["Smithing", "img/skillicons/smithing.webp"],
        15: ["Mining", "img/skillicons/mining.webp"],
        16: ["Herblore", "img/skillicons/herblore.webp"],
        17: ["Agility", "img/skillicons/agility.webp"],
        18: ["Thieving", "img/skillicons/thieving.webp"],
        21: ["Runecraft", "img/skillicons/runecraft.webp"],
    };
    const entry = stats[statID];
    switch (type) {
        default:
        case "name":
            return entry ? entry[0] : "Unknown";
        case "icon":
            return entry ? entry[1] : "";
    }
}

const input = document.getElementById("username");
input.addEventListener("input", () => {
    input.value = input.value.replace(/[^A-Za-z0-9_ ]/g, "");
});

window.addEventListener("DOMContentLoaded", () => {
    const params = new URLSearchParams(window.location.search);
    const user = params.get("username");
    if (user) {
        const titleUser = toTitleCase(user);
        const inputEl = document.getElementById("username");
        inputEl.value = titleUser;
        lookupPlayer();
    }
});
