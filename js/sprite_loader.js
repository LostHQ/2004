const itemSpriteSize = 32;
const itemSpritesPerRow = 64;
const itemSpritesheetSrc = "/img/item_spritesheet.png";
let itemBitmap = null;
let itemBitmapWidth = 0;
let itemBitmapHeight = 0;
let itemBitmapLoading = null;
let itemBitmapFailed = false;
let itemData = {};

const npcSpriteSize = 256;
const npcSpritesPerRow = 32;
const npcSpritesheetSrc = "/img/npc_spritesheet.png";
let npcBitmap = null;
let npcBitmapWidth = 0;
let npcBitmapHeight = 0;
let npcBitmapLoading = null;
let npcBitmapFailed = false;
let npcData = {};

async function checkSpriteLoaderReady() {
    while (true) {
        if (window.itemData && window.npcData) return true;
        await new Promise((r) => setTimeout(r, 25));
    }
}
(async () => {
    try {
        await loadFonts();

        const [itemJson, npcJson] = await Promise.all([
            fetch(`js/itemdb/item_data.json?v=${currentGameVer}`).then((res) => res.json()),
            fetch(`js/npcdb/npc_data.json?v=${currentGameVer}`).then((res) => res.json()),
        ]);

        function toMapByDebugname(data) {
            if (!data) return {};
            if (Array.isArray(data)) {
                const out = {};
                data.forEach((it) => {
                    if (it && it.debugname) out[it.debugname] = it;
                });
                return out;
            }
            return data;
        }

        itemData = toMapByDebugname(itemJson);
        npcData = toMapByDebugname(npcJson);
        window.itemData = itemData;
        window.npcData = npcData;
        window.spriteLoaderReady = true;
    } catch (err) {
        console.error("Error loading resources:", err);
    }
})();

function loadSpriteSheet(type) {
    if (type == 'item') {
        if (itemBitmap || itemBitmapFailed) return Promise.resolve(itemBitmap);
        if (itemBitmapLoading) return itemBitmapLoading;

        itemBitmapLoading = (async () => {
            try {
                const res = await fetch(itemSpritesheetSrc);
                if (!res.ok) throw new Error('fetch failed: ' + res.status);
                const blob = await res.blob();
                const bitmap = await createImageBitmap(blob);
                itemBitmap = bitmap;
                itemBitmapWidth = bitmap.width;
                itemBitmapHeight = bitmap.height;
                itemBitmapLoading = null;
                return itemBitmap;
            } catch (e) {
                itemBitmapFailed = true;
                itemBitmapLoading = null;
                console.error('Failed to load Item Spritesheet:', e);
                throw e;
            }
        })();
        return itemBitmapLoading;
    } else if (type == 'npc') {
        if (npcBitmap || npcBitmapFailed) return Promise.resolve(npcBitmap);
        if (npcBitmapLoading) return npcBitmapLoading;

        npcBitmapLoading = (async () => {
            try {
                const res = await fetch(npcSpritesheetSrc);
                if (!res.ok) throw new Error('fetch failed: ' + res.status);
                const blob = await res.blob();
                const bitmap = await createImageBitmap(blob);
                npcBitmap = bitmap;
                npcBitmapWidth = bitmap.width;
                npcBitmapHeight = bitmap.height;
                npcBitmapLoading = null;
                return npcBitmap;
            } catch (e) {
                npcBitmapFailed = true;
                npcBitmapLoading = null;
                console.error('Failed to load NPC Spritesheet:', e);
                throw e;
            }
        })();
        return npcBitmapLoading;
    }
    else return null;
}

async function drawItemImage(ctx, x, y, id, count) {
    id = getStackableSpriteId(id, count);

    const sx = (id % itemSpritesPerRow) * itemSpriteSize;
    const sy = Math.floor(id / itemSpritesPerRow) * itemSpriteSize;

    if (itemBitmap) {
        if (sx + itemSpriteSize > itemBitmapWidth || sy + itemSpriteSize > itemBitmapHeight) return;
        ctx.drawImage(itemBitmap, sx, sy, itemSpriteSize, itemSpriteSize, x, y, itemSpriteSize, itemSpriteSize);
        return;
    }

    loadSpriteSheet('item').then((bitmap) => {
        try {
            if (!bitmap) return;
            if (sx + itemSpriteSize > bitmap.width || sy + itemSpriteSize > bitmap.height) return;
            ctx.drawImage(bitmap, sx, sy, itemSpriteSize, itemSpriteSize, x, y, itemSpriteSize, itemSpriteSize);
        } catch (e) {
        }
    }).catch(() => {});
}

async function drawNPCImage(ctx, x, y, npcId, iconSize) {
    const sx = (npcId % npcSpritesPerRow) * npcSpriteSize;
    const sy = Math.floor(npcId / npcSpritesPerRow) * npcSpriteSize;

    if (npcBitmap) {
        if (sx + npcSpriteSize > npcBitmapWidth || sy + npcSpriteSize > npcBitmapHeight)
            return;
        ctx.drawImage(npcBitmap, sx, sy, npcSpriteSize, npcSpriteSize, x, y, iconSize, iconSize);
        return;
    }

    loadSpriteSheet('npc').then((bitmap) => {
        try {
            if (!bitmap) return;
            if (sx + npcSpriteSize > bitmap.width || sy + npcSpriteSize > bitmap.height) return;
            ctx.drawImage(bitmap, sx, sy, npcSpriteSize, npcSpriteSize, x, y, iconSize, iconSize);
        } catch (e) {
        }
    }).catch(() => {
    });
}

const stackableSpriteOverrides = {
    2: null,// Cannonball (mcannonball)
    25: null,// Red vine worm (red_vine_worm)
    39: null,// Bronze arrowtips (bronze_arrowheads)
    40: null,// Iron arrowtips (iron_arrowheads)
    41: null,// Steel arrowtips (steel_arrowheads)
    42: null,// Mithril arrowtips (mithril_arrowheads)
    43: null,// Adamant arrowtips (adamant_arrowheads)
    44: null,// Rune arrowtips (rune_arrowheads)
    45: null,// Opal bolttips (opal_bolttips)
    46: null,// Pearl bolttips (pearl_bolttips)
    47: null,// Barb bolttips (barbed_bolttips)
    52: null,// Arrow shaft (arrow_shaft)
    53: null,// Headless arrow (headless_arrow)
    40: null,// Iron arrowtips
    78: [ [2, 81], [3, 80], [4, 79], [5, 82] ],// Ice arrows (ice_arrow)
    299: null,// Mithril seeds (mithril_seed)
    313: null,// Fishing bait (fishing_bait)
    314: null,// Feather (feather)
    554: null,// Fire rune (firerune)
    555: null,// Water rune (waterrune)
    556: null,// Air rune (airrune)
    557: null,// Earth rune (earthrune)
    558: null,// Mind rune (mindrune)
    559: null,// Body rune (bodyrune)
    560: null,// Death rune (deathrune)
    561: null,// Nature rune (naturerune)
    562: null,// Chaos rune (chaosrune)
    563: null,// Law rune (lawrune)
    564: null,// Cosmic rune (cosmicrune)
    565: null,// Blood rune (bloodrune)
    566: null,// Soul rune (soulrune)
    598: [[ 2, 2542], [ 3, 2543], [ 4, 2544], [ 5, 2545]],// Unlit arrows (unlitarrow)
    680: null,// Nuggets (nuggets)
    732: null,// Holy water (holy_water)
    735: null,// Yommi tree seeds (yommiseeds)
    736: null,// Yommi tree seeds (yommiseeds_germ)
    799: null,// Template for cert (template_for_cert)
    800: null,// Bronze thrownaxe (bronze_thrownaxe)
    801: null,// Iron thrownaxe (iron_thrownaxe)
    802: null,// Steel thrownaxe (steel_thrownaxe)
    803: null,// Mithril thrownaxe (mithril_thrownaxe)
    804: null,// Adamnt thrownaxe (adamnt_thrownaxe)
    805: null,// Rune thrownaxe (rune_thrownaxe)
    806: null,// Bronze dart (bronze_dart)
    807: null,// Iron dart (iron_dart)
    808: null,// Steel dart (steel_dart)
    809: null,// Mithril dart (mithril_dart)
    810: null,// Adamant dart (adamant_dart)
    811: null,// Rune dart (rune_dart)
    812: null,// Bronze dart(p) (bronze_dart_p)
    813: null,// Iron dart(p) (iron_dart_p)
    814: null,// Steel dart(p) (steel_dart_p)
    815: null,// Mithril dart(p) (mithril_dart_p)
    816: null,// Adamant dart(p) (adamant_dart_p)
    817: null,// Rune dart(p) (rune_dart_p)
    818: null,// Poisoned dart(p) (dart_poisoned_p)
    819: null,// Bronze dart tip (bronze_dart_tip)
    820: null,// Iron dart tip (iron_dart_tip)
    821: null,// Steel dart tip (steel_dart_tip)
    822: null,// Mithril dart tip (mithril_dart_tip)
    823: null,// Adamant dart tip (adamant_dart_tip)
    824: null,// Rune dart tip (rune_dart_tip)
    825: null,// Bronze javelin (bronze_javelin)
    826: null,// Iron javelin (iron_javelin)
    827: null,// Steel javelin (steel_javelin)
    828: null,// Mithril javelin (mithril_javelin)
    829: null,// Adamant javelin (adamant_javelin)
    830: null,// Rune javelin (rune_javelin)
    831: null,// Bronze javelin(p) (bronze_javelin_p)
    832: null,// Iron javelin(p) (iron_javelin_p)
    833: null,// Steel javelin(p) (steel_javelin_p)
    834: null,// Mithril javelin(p) (mithril_javelin_p)
    835: null,// Adamant javelin(p) (adamant_javelin_p)
    836: null,// Rune javelin(p) (rune_javelin_p)
    863: null,// Iron knife (iron_knife)
    864: null,// Bronze knife (bronze_knife)
    865: null,// Steel knife (steel_knife)
    866: null,// Mithril knife (mithril_knife)
    867: null,// Adamant knife (adamant_knife)
    868: null,// Rune knife (rune_knife)
    869: null,// Black knife (black_knife)
    870: null,// Bronze knife(p) (bronze_knife_p)
    871: null,// Iron knife(p) (iron_knife_p)
    872: null,// Steel knife(p) (steel_knife_p)
    873: null,// Mithril knife(p) (mithril_knife_p)
    874: null,// Black knife(p) (black_knife_p)
    875: null,// Adamant knife(p) (adamant_knife_p)
    876: null,// Rune knife(p) (rune_knife_p)
    877: null,// Bolt (bolt)
    878: null,// Bolt(p) (poison_bolt)
    879: null,// Opal bolt (opal_bolt)
    880: null,// Pearl bolt (pearl_bolt)
    881: null,// Barbed bolt (barbed_bolt)
    942: [ [2, 2546], [3, 2547], [4, 2548], [5, 2549] ],// Lit arrows (litarrow)
    995: [ [2, 996], [3, 997], [4, 998], [5, 999], 
            [25, 1000], [100, 1001], [250, 1002], [1000, 1003],
            [10000, 1004] ],// Coins
    882: [ [2, 896], [3, 895], [4, 894], [5, 897] ],// Bronze arrow (bronze_arrow)
    883: [ [2, 900], [3, 899], [4, 898], [5, 901] ],// Bronze arrow(p) (bronze_arrow_p)
    884: [ [2, 904], [3, 903], [4, 902], [5, 905] ],// Iron arrow (iron_arrow)
    885: [ [2, 908], [3, 907], [4, 906], [5, 909] ],// Iron arrow(p) (iron_arrow_p)
    886: [ [2, 912], [3, 911], [4, 910], [5, 913] ],// Steel arrow (steel_arrow)
    887: [ [2, 916], [3, 915], [4, 914], [5, 917] ],// Steel arrow(p) (steel_arrow_p)
    888: [ [2, 920], [3, 919], [4, 918], [5, 921] ],// Mithril arrow (mithril_arrow)
    889: [ [2, 924], [3, 923], [4, 922], [5, 925] ],// Mithril arrow(p) (mithril_arrow_p)
    890: [ [2, 928], [3, 927], [4, 926], [5, 929] ],// Adamant arrow (adamant_arrow)
    891: [ [2, 932], [3, 931], [4, 930], [5, 933] ],// Adamant arrow(p) (adamant_arrow_p)
    892: [ [2, 936], [3, 935], [4, 934], [5, 937] ],// Rune arrow (rune_arrow)
    893: [ [2, 940], [3, 939], [4, 938], [5, 941] ],// Rune arrow(p) (rune_arrow_p)
    1464: null,// Archery ticket (archery_ticket)
    1539: null,// Nails (nails)
    1733: null,// Needle (needle)
    1734: null,// Thread (thread)
    1793: null,// Woad leaf (woadleaf)
    1849: null,// Prototype dart (thprotodart)
    1853: null,// Prototype dart tip (thprotodarttip)
    1854: null,// Shantay pass (shantay_pass)
    1939: null,// Swamp tar (swamp_tar)
    1940: null,// Raw swamp paste (rawswamppaste)
    1941: null,// Swamp paste (swamppaste)
    2532: null,// Iron fire arrows (iron_unlitarrow)
    2533: null,// Iron fire arrows (iron_litarrow)
    2534: null,// Steel fire arrows (steel_unlitarrow)
    2535: null,// Steel fire arrows (steel_litarrow)
    2536: null,// Mithril fire arrows (mithril_unlitarrow)
    2537: null,// Mithril fire arrows (mithril_litarrow)
    2538: null,// Adamnt fire arrows (adamant_unlitarrow)
    2539: null,// Adamnt fire arrows (adamant_litarrow)
    2540: null,// Rune fire arrows (rune_unlitarrow)
    2541: null,// Rune fire arrows (rune_litarrow)
    2715: null,// Casket (obj_2715)
    2718: null,// Casket (obj_2718)
    2721: null,// Casket (obj_2721)
    2861: null,// Wolfbone arrowtips (wolfbone_arrowheads)
    2864: null,// Ogre arrow shaft (ogre_arrow_shaft)
    2865: null,// Flighted ogre arrow (ogre_headless_arrow)
    2866: [ [2, 2870], [3, 2869], [4, 2868], [5, 2867] ],// Ogre arrow (ogre_arrow)
    2958: null,// Druid Pouch (druid_pouch)
    2966: null,// Agility arena ticket (agilityarena_ticket)
    3062: null,// Strange box (macro_cube)
    3093: null,// Black dart (black_dart)
    3094: null,// Black dart(p) (black_dart_p)
};
function getStackableSpriteId(id, count) {
    if (count == 1) return id;
    
    const overrides = stackableSpriteOverrides[id];
    if (!overrides || (overrides.length === 0)) return id;
    
    let spriteId = id;
    for (let i = 0; i < overrides.length; i++) {
        if (count >= overrides[i][0]) {
            spriteId = overrides[i][1];
        } else {
            break;
        }
    }
    return spriteId;
}
function formatQuantity(quantity) {
    if (isNaN(quantity)) return "";
    if (quantity > 9999999)
        return `${Math.floor(quantity / 1000000)}M`;
    
    if (quantity > 99999)
        return `${Math.floor(quantity / 1000)}K`;
    
    return quantity.toString();
}

function renderNPCSpriteToCanvas(canvas) {
    if (canvas.getAttribute('done')) return;
    canvas.setAttribute("done", 'true');
    const debugname = canvas.getAttribute("npcname");
    const iconSize = parseInt(canvas.getAttribute("icon-size"), 10) || npcSpriteSize;
    let id = 0;

    const npc = npcData[debugname];
    if (!npc) {
        console.warn(`NPC not found: ${debugname}`);
        return;
    }
    id = npc.id || 0;
    const ctx = canvas.getContext("2d");
    canvas.width = iconSize;
    canvas.height = iconSize;
    ctx.clearRect(0, 0, iconSize, iconSize);
    drawNPCImage(ctx, 0, 0, id, iconSize);
}
function renderItemSpriteToCanvas(canvas) {
    if (canvas.getAttribute('done')) return;
    canvas.setAttribute("done", 'true');
    const debugname = canvas.getAttribute("itemname");
    const amount = parseInt(canvas.getAttribute("amount"), 10);
    const qty = isNaN(amount) ? 1 : amount;
    const nameAppend = canvas.getAttribute("name-append");
    const nameReplace = canvas.getAttribute("name-replace");
    const showLabel = canvas.getAttribute("show-label");
    const iconSize = parseInt(canvas.getAttribute("icon-size"), 10) || itemSpriteSize;
    let id = 0;
    let name = "Unknown Item";
    let desc = "Please report this bug.";
    let cost = 0;

    const isCert = debugname.startsWith("cert_");
    const baseName = isCert ? debugname.replace(/^cert_/, "") : debugname;

    const item = itemData[debugname];
    const baseItem = itemData[baseName];

    if (item) {
        id = item.id;
    }

    if (baseItem) {
        name = baseItem.name;
        desc = baseItem.desc;
        cost = baseItem.cost || 0;
    }

    const imageId = getStackableSpriteId(id, qty);

    const col = imageId % itemSpritesPerRow;
    const row = Math.floor(imageId / itemSpritesPerRow);

    const ctx = canvas.getContext("2d");
    canvas.width = iconSize;
    canvas.height = iconSize;
    ctx.clearRect(0, 0, iconSize, iconSize);

    function drawQuantity() {
        if (!((id in stackableSpriteOverrides || debugname.startsWith('cert_')) || qty > 1)) return;
        drawP11(ctx, formatQuantity(qty), (iconSize / itemSpriteSize), (iconSize / itemSpriteSize), '#FFFF00');
    }

    if (itemBitmap) {
        if (col * itemSpriteSize + itemSpriteSize <= itemBitmapWidth && row * itemSpriteSize + itemSpriteSize <= itemBitmapHeight) {
            ctx.drawImage(itemBitmap, col * itemSpriteSize, row * itemSpriteSize, itemSpriteSize, itemSpriteSize, 0, 0, iconSize, iconSize);
            drawQuantity();
        }
    } else {
        loadSpriteSheet('item').then((bitmap) => {
            try {
                if (!bitmap) return;
                if (col * itemSpriteSize + itemSpriteSize > bitmap.width || row * itemSpriteSize + itemSpriteSize > bitmap.height) return;
                ctx.drawImage(bitmap, col * itemSpriteSize, row * itemSpriteSize, itemSpriteSize, itemSpriteSize, 0, 0, iconSize, iconSize);
                drawQuantity();
            } catch (e) {}
        }).catch(() => {});
    }

    let tooltip = `${isCert ? `${name} (Noted)` : name} - ${desc}`;

    if (cost > 0) {
        const highAlch = Math.floor(cost * 0.6);
        const totalHighAlch = highAlch * qty;
        if (qty > 1) {
            tooltip = `${qty.toLocaleString()} x ${tooltip}`;
            tooltip += `\nHigh Alch: ${totalHighAlch.toLocaleString()} coins (total), ${highAlch.toLocaleString()} coins (each)`;
        } else {
            tooltip += `\nHigh Alch: ${highAlch.toLocaleString()} coins`;
        }
    }

    canvas.title = tooltip;
    if (showLabel === "true" || showLabel === "inline") {
        const next = canvas.nextElementSibling;
        const alreadyExists = next && next.classList.contains("item-label");

        if (!alreadyExists) {
            const inline = showLabel === "inline";
            const label = document.createElement("div");

            label.textContent = nameAppend ? (name + nameAppend) : (nameReplace ? nameReplace : name);
            label.className = "item-label";
            //label.style.color = "white";

            if (inline) {
                const wrapper = document.createElement("div");
                wrapper.style.display = "flex";
                wrapper.style.alignItems = "center";
                wrapper.style.gap = "6px";
                wrapper.style.flexDirection = "row";
                const parent = canvas.parentNode;
                parent.insertBefore(wrapper, canvas);
                wrapper.appendChild(canvas);
                wrapper.appendChild(label);
            } else {
                label.style.textAlign = "center";
                label.style.marginTop = "4px";
                canvas.parentNode.insertBefore(label, canvas.nextSibling);
            }
        }
    }
}

renderAllSprites = function () {
    document.querySelectorAll("canvas[itemname], canvas[npcname]").forEach((canvas) => {
        if (canvas.getAttribute("itemname")) {
            renderItemSpriteToCanvas(canvas);
        } else if (canvas.getAttribute("npcname")) {
            renderNPCSpriteToCanvas(canvas);
        }
    });
};

window.safeRenderAllSprites = async function () {
    await checkSpriteLoaderReady();
    addNarrowScrolls();
    renderAllSprites();
    progressCheckboxes();
};

document.addEventListener("DOMContentLoaded", async function () {
    await checkSpriteLoaderReady();
    window.safeRenderAllSprites();
});
