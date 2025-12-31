async function fetchCombatLevels() {
    const username = document.getElementById("username").value.trim();
    if (!username) return alert("Please enter a username.");

    try {
        // Fetch data from the API
        const response = await fetch(`pages/api/LCHiscoresProxy.php?username=${encodeURIComponent(username)}`);
        if (!response.ok) throw new Error("Failed to fetch data.");
        const data = await response.json();

        // Stats to retrieve (key = HTML element ID, value = API type)
        const statsToFetch = {
            attack: 1,
            strength: 3,
            defence: 2,
            hitpoints: 4,
            ranged: 5,
            magic: 7,
            prayer: 6,
        };

        // Loop through each stat and update the respective element
        Object.entries(statsToFetch).forEach(([statName, type]) => {
            const statData = data.find((stat) => stat.type === type);

            if (statData) {
                document.getElementById(statName).value = statData.level; // Update input value
            }
        });
        runCalc();
    } catch (error) {
        console.error(error); // Log errors for debugging
        alert("Error fetching data."); // Alert user of an error
    }
}

function runCalc() {
    let attack = parseInt(document.getElementById("attack").value);
    let strength = parseInt(document.getElementById("strength").value);
    let defence = parseInt(document.getElementById("defence").value);
    let hitpoints = parseInt(document.getElementById("hitpoints").value);
    let ranged = parseInt(document.getElementById("ranged").value);
    let magic = parseInt(document.getElementById("magic").value);
    let prayer = parseInt(document.getElementById("prayer").value);

    function computeCombat(att, str, def, hp, rng, mag, pray) {
        let base = (def + hp + Math.floor(pray / 2)) * 0.25;
        let melee = (att + str) * 0.325;
        let range = Math.floor(rng * 1.5) * 0.325;
        let mage = Math.floor(mag * 1.5) * 0.325;
        return Math.floor(base + Math.max(melee, range, mage));
    }

    let currentCombat = computeCombat(attack, strength, defence, hitpoints, ranged, magic, prayer);
    document.getElementById("combatLevel").textContent = currentCombat;

    let levelUpInfo = "";

    function levelsToNextCombat(skill, increment) {
        let newCombat = computeCombat(
            attack + (skill === "attack" ? increment : 0),
            strength + (skill === "strength" ? increment : 0),
            defence + (skill === "defence" ? increment : 0),
            hitpoints + (skill === "hitpoints" ? increment : 0),
            ranged + (skill === "ranged" ? increment : 0),
            magic + (skill === "magic" ? increment : 0),
            prayer + (skill === "prayer" ? increment : 0)
        );
        return newCombat > currentCombat ? increment : levelsToNextCombat(skill, increment + 1);
    }

    levelUpInfo += `Attack: ${levelsToNextCombat("attack", 1)} more levels<br>`;
    levelUpInfo += `Strength: ${levelsToNextCombat("strength", 1)} more levels<br>`;
    levelUpInfo += `Defence: ${levelsToNextCombat("defence", 1)} more levels<br>`;
    levelUpInfo += `Hitpoints: ${levelsToNextCombat("hitpoints", 1)} more levels<br>`;
    levelUpInfo += `Prayer: ${levelsToNextCombat("prayer", 1)} more levels<br>`;
    levelUpInfo += `Ranged: ${levelsToNextCombat("ranged", 1)} more levels<br>`;
    levelUpInfo += `Magic: ${levelsToNextCombat("magic", 1)} more levels<br>`;

    document.getElementById("levelUpInfo").innerHTML = levelUpInfo;
}

["attack", "strength", "defence", "hitpoints", "prayer", "ranged", "magic"].forEach((id) => {
    document.getElementById(id).addEventListener("change", runCalc);
});
