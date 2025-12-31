function switchCombat(type) {
    ["melee", "ranged", "magic"].forEach((c) => {
        document.getElementById(c + "Options").classList.toggle("hidden", c !== type);
    });
    calculateFromEquipment();
}

function runCalc() {
    let maxHit = 0;
    if (!document.getElementById("meleeOptions").classList.contains("hidden")) {
        const strengthLevel = parseInt(document.getElementById("strengthLevel").value) || 1;
        const meleeFightingStyle = parseInt(document.getElementById("meleeFightingStyle").value) || 0;
        const meleePrayer = parseFloat(document.getElementById("meleePrayer").value) || 1;
        const weaponBonus = parseInt(document.getElementById("meleeWeaponBonus").value) || 0;
        const amuletBonus = parseInt(document.getElementById("amuletBonus").value) || 0;
        const glovesBonus = parseInt(document.getElementById("glovesBonus").value) || 0;

        const potionValues = document.getElementById("meleePotion").value.split(",");
        const potionFlatBonus = parseInt(potionValues[0]);
        const potionPercentageBonus = parseFloat(potionValues[1]);

        let boostedStrength = strengthLevel + potionFlatBonus;
        let potionBonus = Math.floor(strengthLevel * potionPercentageBonus);
        boostedStrength = strengthLevel + potionBonus + potionFlatBonus;

        let effectiveStrength = Math.floor(boostedStrength * meleePrayer);

        effectiveStrength += meleeFightingStyle;

        effectiveStrength += 8;

        effectiveStrength = Math.floor(effectiveStrength);

        const totalStrengthBonus = parseInt(document.getElementById("strengthBonus").value) || 0;

        maxHit = Math.floor((effectiveStrength * (totalStrengthBonus + 64) + 320) / 640);

        // Calculate max hit of special attack if applicable
        const specialDiv = document.getElementById("specialDiv");
        const specialResult = document.getElementById("specialResult");

        const selected = meleeWeaponBonus.options[meleeWeaponBonus.selectedIndex];
        const specialMultiplier = parseFloat(selected.dataset.special);

        if (!isNaN(specialMultiplier)) {
            const specialHit = Math.floor(maxHit * specialMultiplier);
            document.getElementById("specialResult").textContent = specialHit;
            specialDiv.style.display = "block";
        } else {
            specialDiv.style.display = "none";
        }
    } else if (!document.getElementById("rangedOptions").classList.contains("hidden")) {
        const rangedLevel = parseInt(document.getElementById("rangedLevel").value);
        const rangedFightingStyle = parseInt(document.getElementById("rangedFightingStyle").value);
        const weaponSelect = document.getElementById("rangedWeaponBonus");
        const selectedOption = weaponSelect.options[weaponSelect.selectedIndex];

        let bonus = 0;
        if (selectedOption.id === "bowAndArrow") {
            bonus = parseInt(document.getElementById("arrowBonus").value);
        } else if (selectedOption.id === "crossbowAndBolt") {
            bonus = parseInt(document.getElementById("boltBonus").value);
        } else {
            bonus = parseInt(weaponSelect.value);
        }

        const potionValues = document.getElementById("rangedPotion").value.split(",");
        const potionFlatBonus = parseInt(potionValues[0]);
        const potionPercentageBonus = parseFloat(potionValues[1]);

        let boostedRanged = rangedLevel + potionFlatBonus;
        let potionBonus = Math.floor(rangedLevel * potionPercentageBonus);
        boostedRanged = rangedLevel + potionBonus + potionFlatBonus;

        let effectiveRanged = boostedRanged;
        effectiveRanged += rangedFightingStyle;

        effectiveRanged += 8;

        effectiveRanged = Math.floor(effectiveRanged);

        const totalRangedBonus = parseInt(document.getElementById("rangedBonus").value) || 0;

        maxHit = Math.floor((effectiveRanged * (totalRangedBonus + 64) + 320) / 640);
    } else {
        const spell = parseInt(document.getElementById("spell").value);
        const gauntletBonus = parseFloat(document.getElementById("chaosGauntlets").value);

        // Only apply Chaos Gauntlet bonus for bolt spells (Wind Bolt, Water Bolt, Earth Bolt, Fire Bolt)
        if ([9, 10, 11, 12].includes(spell)) {
            maxHit = Math.floor(spell + gauntletBonus);
        } else {
            maxHit = Math.floor(spell);
        }
    }
    document.getElementById("maxHit").textContent = maxHit;
}

function calculateFromEquipment() {
    if (!document.getElementById("meleeOptions").classList.contains("hidden")) {
        const meleeWeaponBonus = parseInt(document.getElementById("meleeWeaponBonus").value);
        const amuletBonus = parseInt(document.getElementById("amuletBonus").value);
        const glovesBonus = parseInt(document.getElementById("glovesBonus").value);

        const totalStrengthBonus = meleeWeaponBonus + amuletBonus + glovesBonus;
        document.getElementById("strengthBonus").value = totalStrengthBonus;
    } else {
        const weaponSelect = document.getElementById("rangedWeaponBonus");
        const selectedOption = weaponSelect.options[weaponSelect.selectedIndex];

        let totalRangedBonus = 0;
        if (selectedOption.id === "bowAndArrow") {
            totalRangedBonus = parseInt(document.getElementById("arrowBonus").value);
        } else if (selectedOption.id === "crossbowAndBolt") {
            totalRangedBonus = parseInt(document.getElementById("boltBonus").value);
        } else {
            totalRangedBonus = parseInt(document.getElementById("rangedWeaponBonus").value);
        }
        document.getElementById("rangedBonus").value = totalRangedBonus;
    }
    runCalc();
}

function toggleOptions() {
    const selectedOption = document.getElementById("rangedWeaponBonus").selectedOptions[0];

    if (selectedOption.id === "bowAndArrow") {
        document.getElementById("arrowOptions").classList.remove("hidden");
        document.getElementById("boltOptions").classList.add("hidden");
    } else if (selectedOption.id === "crossbowAndBolt") {
        document.getElementById("arrowOptions").classList.add("hidden");
        document.getElementById("boltOptions").classList.remove("hidden");
    } else {
        document.getElementById("arrowOptions").classList.add("hidden");
        document.getElementById("boltOptions").classList.add("hidden");
    }
    calculateFromEquipment();
}

[
    "strengthLevel",
    "strengthBonus",
    "meleeFightingStyle",
    "meleePotion",
    "meleePrayer",
    "rangedLevel",
    "rangedWeaponBonus",
    "arrowBonus",
    "boltBonus",
    "rangedPotion",
    "spell",
    "chaosGauntlets",
].forEach((id) => {
    document.getElementById(id).addEventListener("change", runCalc);
});

["meleeWeaponBonus", "amuletBonus", "glovesBonus", "rangedBonus", "arrowBonus", "boltBonus"].forEach((id) => {
    document.getElementById(id).addEventListener("change", calculateFromEquipment);
});

document.getElementById("rangedWeaponBonus").addEventListener("change", toggleOptions);
