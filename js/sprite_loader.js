const spriteSize = 32;
const spritesPerRow = 64;
let itemData = [];

const spritesheet = new Image();
spritesheet.src = "img/item_spritesheet.png?v254";

Promise.all([fetch(`js/itemdb/item_data.json?v=${currentGameVer}`).then((res) => res.json()), new Promise((resolve) => (spritesheet.onload = resolve))])
    .then(([json]) => {
        itemData = json;
        window.spriteLoaderReady = true;
    })
    .catch((err) => {
        console.error("Error loading resources:", err);
    });

function renderSpriteToCanvas(debugname, canvas) {
    let id = 0;
    let name = "Unknown Item";
    let desc = "Please report this bug.";
    let cost = 0;

    const isCert = debugname.startsWith("cert_");
    const baseName = isCert ? debugname.replace(/^cert_/, "") : debugname;

    const item = itemData.find((i) => i.debugname === debugname); // cert or normal
    const baseItem = itemData.find((i) => i.debugname === baseName); // always non-cert for name/desc

    if (item) {
        id = item.id;
    }

    if (baseItem) {
        name = isCert ? `${baseItem.name} (Noted)` : baseItem.name;
        desc = baseItem.desc;
        cost = baseItem.cost || 0;
    }

    const imageId = id;

    const col = imageId % spritesPerRow;
    const row = Math.floor(imageId / spritesPerRow);
    const size = parseInt(canvas.dataset.size) || 36;

    const ctx = canvas.getContext("2d");
    canvas.width = size;
    canvas.height = size;
    ctx.clearRect(0, 0, size, size);
    ctx.drawImage(spritesheet, col * spriteSize, row * spriteSize, spriteSize, spriteSize, 0, 0, size, size);

    let tooltip = `${name} - ${desc}`;
    if (cost > 0) {
        const highAlch = Math.floor(cost * 0.6);
        tooltip += `\nHigh Alch: ${highAlch.toLocaleString()} coins`;
    }

    canvas.title = tooltip;
    const nameAppend = canvas.getAttribute("name-append");
    const nameReplace = canvas.getAttribute("name-replace");
    const showLabel = canvas.getAttribute("show-label");

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

window.renderAllSprites = function () {
    document.querySelectorAll("canvas[itemname]").forEach((canvas) => {
        const debugname = canvas.getAttribute("itemname");
        renderSpriteToCanvas(debugname, canvas);
    });
};

window.safeRenderAllSprites = async function () {
    while (!window.spriteLoaderReady) {
        await new Promise((res) => setTimeout(res, 25));
    }
    window.renderAllSprites();
};

document.addEventListener("DOMContentLoaded", async function () {
    while (!window.spriteLoaderReady) {
        await new Promise((resolve) => setTimeout(resolve, 25));
    }
    if (typeof window.renderAllSprites === "function") {
        window.renderAllSprites();
    }
});
