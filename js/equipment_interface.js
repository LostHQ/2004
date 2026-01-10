/*
 * loadEquipInterface(targetDiv, allowChange, headItem, capeItem, neckItem, weaponItem,
 *                   bodyItem, shieldItem, legsItem, glovesItem, bootsItem, ringItem, quiverItem)
 * loadEquipInterfaceWithStats(targetDiv, statsDiv, allowChange, same items order as above)
 */

const EQUIPMENT_SLOTS = {
    head: "head",
    cape: "cape",
    neck: "neck",
    weapon: "weapon",
    body: "body",
    shield: "shield",
    legs: "legs",
    gloves: "hands",
    boots: "feet",
    ring: "ring",
    quiver: "ammunition",
};

const SLOT_POSITIONS = {
    head: { x: 105, y: 48 },
    cape: { x: 63, y: 87 },
    neck: { x: 105, y: 87 },
    weapon: { x: 49, y: 127 },
    body: { x: 105, y: 127 },
    shield: { x: 161, y: 127 },
    legs: { x: 105, y: 167 },
    gloves: { x: 49, y: 206 },
    boots: { x: 105, y: 206 },
    ring: { x: 161, y: 206 },
    quiver: { x: 147, y: 87 },
};

async function loadEquipInterface(targetDiv, allowChange, headItem, capeItem, neckItem, weaponItem, bodyItem, shieldItem, legsItem, glovesItem, bootsItem, ringItem, quiverItem) {
    await checkSpriteLoaderReady();

    const container = document.getElementById(targetDiv);
    if (!container) {
        console.error(`Target div '${targetDiv}' not found`);
        return;
    }

    const equipment = {
        head: headItem,
        cape: capeItem,
        neck: neckItem,
        weapon: weaponItem,
        body: bodyItem,
        shield: shieldItem,
        legs: legsItem,
        gloves: glovesItem,
        boots: bootsItem,
        ring: ringItem,
        quiver: quiverItem,
    };

    container.innerHTML = "";
    container.className = "equipment-interface";

    container.equipmentData = equipment;

    if (!document.getElementById("equipment-interface-styles")) {
        const style = document.createElement("style");
        style.id = "equipment-interface-styles";
        style.textContent = `
        .equipment-interface {
            position: relative;
            background: url('img/interfaces/equipment_blank.png?v=${currentGameVer}') no-repeat;
            background-size: contain;
            width: 265px;
            height: 351px;
            margin: 0 auto;
        }
        
        .equipment-slot {
            position: absolute;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: ${allowChange ? "pointer" : "default"};
        }
        
        .equipment-slot:hover {
            background: ${allowChange ? "rgba(197, 141, 0, 0.19)" : "transparent"};
            border-radius: 4px;
        }
        
        .equipment-slot canvas {
            max-width: 32px;
            max-height: 32px;
        }
        
        .equipment-placeholder {
            width: 32px;
            height: 32px;
        }
        
        .equipment-search-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }
        
        .equipment-search-content {
            background: #000000;
            border: 2px solid #111111;
            border-radius: 8px;
            padding: 20px;
            width: 400px;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
        }
        
        .equipment-search-input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #000000;
            background: #1F1409;
            color: white;
            border-radius: 4px;
        }
        
        .equipment-search-results {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 10px;
            max-height: 400px;
            overflow-y: auto;
        }
        
        .equipment-search-item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 8px;
            border: 1px solid #000000;
            background: #1F1409;
            cursor: pointer;
            border-radius: 4px;
        }
        
        .equipment-search-item:hover {
            background: #222222;
            border-color: #444444;
        }
        
        .equipment-search-close {
            float: right;
            background: #111111;
            border: none;
            color: white;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 4px;
            margin-bottom: 10px;
        }
        `;
        document.head.appendChild(style);
    }

    Object.keys(SLOT_POSITIONS).forEach((slotType) => {
        const position = SLOT_POSITIONS[slotType];
        const itemDebugName = equipment[slotType];

        const slot = document.createElement("div");
        slot.className = "equipment-slot";
        slot.style.left = `${position.x}px`;
        slot.style.top = `${position.y}px`;
        slot.dataset.slotType = slotType;

        if (itemDebugName) {
            const canvas = document.createElement("canvas");
            canvas.setAttribute("itemname", itemDebugName);
            slot.appendChild(canvas);
        } else {
            const placeholder = document.createElement("img");
            const slotNumber = getEquipmentSlotNumber(slotType);
            placeholder.src = `/img/interfaces/equipment_${slotNumber}.png`;
            placeholder.className = "equipment-placeholder";
            placeholder.alt = `Empty ${slotType} slot`;
            slot.appendChild(placeholder);
        }

        if (allowChange) {
            slot.addEventListener("click", () => openEquipmentSearch(slotType, slot, container.equipmentData, container));
        }

        container.appendChild(slot);
    });
    window.safeRenderAllSprites();
}

function getEquipmentSlotNumber(slotType) {
    const slotNumbers = {
        head: 0,
        cape: 1,
        neck: 2,
        weapon: 3,
        body: 4,
        shield: 5,
        legs: 7,
        gloves: 9,
        boots: 10,
        ring: 12,
        quiver: 13,
    };
    return slotNumbers[slotType] || 0;
}

function openEquipmentSearch(slotType, slotElement, equipment, container) {
    const itemsMap = window.itemData;
    if (!window.spriteLoaderReady || !itemsMap) {
        return;
    }

    const wearpos = EQUIPMENT_SLOTS[slotType];

    const validItems = Object.values(itemsMap).filter((item) => item && item.equipable_item && item.equipable_item.wearpos === wearpos);

    const modal = document.createElement("div");
    modal.className = "equipment-search-modal";

    const content = document.createElement("div");
    content.className = "equipment-search-content";

    const closeBtn = document.createElement("button");
    closeBtn.className = "equipment-search-close";
    closeBtn.textContent = "×";
    closeBtn.onclick = () => modal.remove();
    content.appendChild(closeBtn);

    const title = document.createElement("h3");
    title.textContent = `Select ${slotType} slot:`;
    title.style.color = "white";
    title.style.marginTop = "0";
    content.appendChild(title);

    const searchInput = document.createElement("input");
    searchInput.className = "equipment-search-input";
    searchInput.placeholder = "Search items...";
    content.appendChild(searchInput);

    const resultsContainer = document.createElement("div");
    resultsContainer.className = "equipment-search-results";
    content.appendChild(resultsContainer);

    const removeOption = document.createElement("div");
    removeOption.className = "equipment-search-item";
    removeOption.innerHTML = `
        <img src="img/interfaces/equipment_${getEquipmentSlotNumber(slotType)}.png" width="32" height="32" style="opacity: 0.5;">
        <span style="color: white;">&lt; Remove &gt;</span>
    `;
    removeOption.onclick = () => {
        handleEquipmentChange(equipment, slotType, null, container);
        updateEquipmentSlot(slotElement, slotType, null);
        modal.remove();
    };
    resultsContainer.appendChild(removeOption);

    const displayItems = (items) => {
        while (resultsContainer.children.length > 1) {
            resultsContainer.removeChild(resultsContainer.lastChild);
        }

        items.forEach((item) => {
            const itemDiv = document.createElement("div");
            itemDiv.className = "equipment-search-item";

            const canvas = document.createElement("canvas");
            canvas.width = 32;
            canvas.height = 32;
            canvas.setAttribute("itemname", item.debugname);

            const nameSpan = document.createElement("span");
            nameSpan.textContent = item.name;
            nameSpan.style.color = "white";

            itemDiv.appendChild(canvas);
            itemDiv.appendChild(nameSpan);

            itemDiv.onclick = () => {
                handleEquipmentChange(equipment, slotType, item.debugname, container);
                updateEquipmentSlot(slotElement, slotType, item.debugname);
                modal.remove();
            };

            resultsContainer.appendChild(itemDiv);
            renderItemSpriteToCanvas(canvas);
        });
    };

    displayItems(validItems);

    searchInput.addEventListener("input", (e) => {
        const searchTerm = e.target.value.toLowerCase();
        const filteredItems = validItems.filter((item) => (item.name || "").toLowerCase().includes(searchTerm) || (item.debugname || "").toLowerCase().includes(searchTerm));
        displayItems(filteredItems);
    });

    modal.appendChild(content);
    document.body.appendChild(modal);
    searchInput.focus();
    modal.addEventListener("click", (e) => {
        if (e.target === modal) {
            modal.remove();
        }
    });
}

function updateEquipmentSlot(slotElement, slotType, itemDebugName) {
    slotElement.innerHTML = "";

    if (itemDebugName) {
        const canvas = document.createElement("canvas");
        canvas.setAttribute("itemname", itemDebugName);
        slotElement.appendChild(canvas);

        renderItemSpriteToCanvas(canvas);
    } else {
        const placeholder = document.createElement("img");
        const slotNumber = getEquipmentSlotNumber(slotType);
        placeholder.src = `img/interfaces/equipment_${slotNumber}.png`;
        placeholder.className = "equipment-placeholder";
        placeholder.alt = `Empty ${slotType} slot`;
        slotElement.appendChild(placeholder);
    }
}

function getItemInfo(debugName) {
    const d = window.itemData;
    if (!debugName || !d) return null;
    return d[debugName] || null;
}

function isTwoHandedWeapon(debugName) {
    const item = getItemInfo(debugName);
    if (!item || !item.equipable_item) return false;

    const name = item.name.toLowerCase();
    return name.includes("bow") || name.includes("staff") || name.includes("halberd") || name.includes("spear") || name.includes("2h") || name.includes("two");
}

function handleEquipmentChange(equipment, slotType, newItem, container) {
    const oldItem = equipment[slotType];
    equipment[slotType] = newItem;

    if (slotType === "weapon" && newItem && isTwoHandedWeapon(newItem)) {
        equipment["shield"] = null;

        const shieldSlot = container.querySelector('[data-slot-type="shield"]');
        if (shieldSlot) {
            updateEquipmentSlot(shieldSlot, "shield", null);
        }
    }

    if (slotType === "shield" && newItem && equipment["weapon"] && isTwoHandedWeapon(equipment["weapon"])) {
        equipment["weapon"] = null;

        const weaponSlot = container.querySelector('[data-slot-type="weapon"]');
        if (weaponSlot) {
            updateEquipmentSlot(weaponSlot, "weapon", null);
        }
    }

    let statsContainer = null;
    if (container.statsDiv) {
        statsContainer = document.getElementById(container.statsDiv);
    }

    if (statsContainer) {
        createStatsDisplay(statsContainer.id, equipment);
    }

    const changeEvent = new CustomEvent("equipmentChanged", {
        detail: { equipment, slotType, newItem, oldItem },
    });
    container.dispatchEvent(changeEvent);
}

window.loadEquipInterface = loadEquipInterface;

function calculateEquipmentStats(equipment) {
    let totalStats = {
        stabattack: 0,
        slashattack: 0,
        crushattack: 0,
        magicattack: 0,
        rangeattack: 0,
        stabdefence: 0,
        slashdefence: 0,
        crushdefence: 0,
        magicdefence: 0,
        rangedefence: 0,
        strengthbonus: 0,
        prayerbonus: 0,
    };

    Object.values(equipment).forEach((debugName) => {
        if (debugName) {
            const item = getItemInfo(debugName);
            if (item && item.equipable_item) {
                const stats = item.equipable_item;
                totalStats.stabattack += stats.stabattack || 0;
                totalStats.slashattack += stats.slashattack || 0;
                totalStats.crushattack += stats.crushattack || 0;
                totalStats.magicattack += stats.magicattack || 0;
                totalStats.rangeattack += stats.rangeattack || 0;
                totalStats.stabdefence += stats.stabdefence || 0;
                totalStats.slashdefence += stats.slashdefence || 0;
                totalStats.crushdefence += stats.crushdefence || 0;
                totalStats.magicdefence += stats.magicdefence || 0;
                totalStats.rangedefence += stats.rangedefence || 0;
                totalStats.strengthbonus += stats.strengthbonus || 0;
                totalStats.prayerbonus += stats.prayerbonus || 0;
            }
        }
    });

    return totalStats;
}

async function createStatsDisplay(containerId, equipment) {
    const statsContainer = document.getElementById(containerId);
    if (!statsContainer) return;

    const stats = calculateEquipmentStats(equipment);

    statsContainer.innerHTML = `
        <table class="subtable">
            <tbody>
                <tr>
                    <th>Attack bonus</th>
                    <th>Defence bonus</th>
                </tr>
                <tr>
                    <td>Stab: <span style="color: ${stats.stabattack >= 0 ? "#90EE90" : "#FF6B6B"}">${stats.stabattack}</span></td>
                    <td>Stab: <span style="color: ${stats.stabdefence >= 0 ? "#90EE90" : "#FF6B6B"}">${stats.stabdefence}</span></td>
                </tr>
                <tr>
                    <td>Slash: <span style="color: ${stats.slashattack >= 0 ? "#90EE90" : "#FF6B6B"}">${stats.slashattack}</span></td>
                    <td>Slash: <span style="color: ${stats.slashdefence >= 0 ? "#90EE90" : "#FF6B6B"}">${stats.slashdefence}</span></td>
                </tr>
                <tr>
                    <td>Crush: <span style="color: ${stats.crushattack >= 0 ? "#90EE90" : "#FF6B6B"}">${stats.crushattack}</span></td>
                    <td>Crush: <span style="color: ${stats.crushdefence >= 0 ? "#90EE90" : "#FF6B6B"}">${stats.crushdefence}</span></td>
                </tr>
                <tr>
                    <td>Magic: <span style="color: ${stats.magicattack >= 0 ? "#90EE90" : "#FF6B6B"}">${stats.magicattack}</span></td>
                    <td>Magic: <span style="color: ${stats.magicdefence >= 0 ? "#90EE90" : "#FF6B6B"}">${stats.magicdefence}</span></td>
                </tr>
                <tr>
                    <td>Range: <span style="color: ${stats.rangeattack >= 0 ? "#90EE90" : "#FF6B6B"}">${stats.rangeattack}</span></td>
                    <td>Range: <span style="color: ${stats.rangedefence >= 0 ? "#90EE90" : "#FF6B6B"}">${stats.rangedefence}</span></td>
                </tr>
                <tr>
                    <th colspan="2">Other bonuses</th>
                </tr>
                <tr>
                    <td>Strength: <span style="color: ${stats.strengthbonus >= 0 ? "#90EE90" : "#FF6B6B"}">${stats.strengthbonus}</span></td>
                    <td>Prayer: <span style="color: ${stats.prayerbonus >= 0 ? "#90EE90" : "#FF6B6B"}">${stats.prayerbonus}</span></td>
                </tr>
            </tbody>
        </table>`;
}

window.loadEquipInterfaceWithStats = async function (
    targetDiv,
    statsDiv,
    allowChange,
    headItem,
    capeItem,
    neckItem,
    weaponItem,
    bodyItem,
    shieldItem,
    legsItem,
    glovesItem,
    bootsItem,
    ringItem,
    quiverItem
) {
    await checkSpriteLoaderReady();
    await loadEquipInterface(targetDiv, allowChange, headItem, capeItem, neckItem, weaponItem, bodyItem, shieldItem, legsItem, glovesItem, bootsItem, ringItem, quiverItem);

    const container = document.getElementById(targetDiv);
    if (container && container.equipmentData && statsDiv) {
        container.statsDiv = statsDiv;
        await createStatsDisplay(statsDiv, container.equipmentData);
    }
};
