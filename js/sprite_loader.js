const spriteSize = 32;
const spritesPerRow = 64;
let itemData = [];

const spritesheet = new Image();
spritesheet.src = 'img/item_spritesheet.png?v245.2';

// Image override debugnames
const imageDebugnameOverrides = {
  coins: "coins_10000",
  coins_1: "coins",
  bronze_arrow: "bronze_arrow_5",
  iron_arrow: "iron_arrow_5",
  steel_arrow: "steel_arrow_5",
  mithril_arrow: "mithril_arrow_5",
  adamant_arrow: "adamant_arrow_5",
  rune_arrow: "rune_arrow_5",
  rune_arrow_p: "rune_arrow_p_5"
};

Promise.all([
  fetch('js/itemlist.json').then(res => res.json()),
  new Promise(resolve => spritesheet.onload = resolve)
])
.then(([json]) => {
  itemData = json;
  window.spriteLoaderReady = true; // signal ready
})
.catch(err => {
  console.error("Error loading resources:", err);
});

function renderSpriteToCanvas(debugname, canvas) {
  let id = 0;
  let name = "Unknown Item";
  let desc = "Please report this bug.";
  let cost = 0;

  const isCert = debugname.startsWith("cert_");
  const baseName = isCert ? debugname.replace(/^cert_/, "") : debugname;

  const item = itemData.find(i => i.debugname === debugname); // cert or normal
  const baseItem = itemData.find(i => i.debugname === baseName); // always non-cert for name/desc

  if (item) {
    id = item.id;
  }

  if (baseItem) {
    name = isCert ? `${baseItem.name} (Noted)` : baseItem.name;
    desc = baseItem.desc;
    cost = baseItem.cost || 0;
  }

  // Handle image override (looking up a different debugname)
  let imageItem = item;
  if (imageDebugnameOverrides.hasOwnProperty(debugname)) {
    const overrideDebugname = imageDebugnameOverrides[debugname];
    const overrideItem = itemData.find(i => i.debugname === overrideDebugname);
    if (overrideItem) {
      imageItem = overrideItem;
    }
  }

  const imageId = imageItem ? imageItem.id : id; // fallback to normal id

  const col = imageId % spritesPerRow;
  const row = Math.floor(imageId / spritesPerRow);
  const size = parseInt(canvas.dataset.size) || 36;

  const ctx = canvas.getContext("2d");
  canvas.width = size;
  canvas.height = size;
  ctx.clearRect(0, 0, size, size);
  ctx.drawImage(
    spritesheet,
    col * spriteSize, row * spriteSize,
    spriteSize, spriteSize,
    0, 0,
    size, size
  );

  // Tooltip setup
  let tooltip = `${name} — ${desc}`;
  if (cost > 0) {
    const highAlch = Math.floor(cost * 0.6);
    tooltip += `\nHigh Alch: ${highAlch.toLocaleString()} coins`;
  }

  canvas.title = tooltip;

  const nameAppend = canvas.getAttribute("data-name-append");
  if (nameAppend) {
    name += ` ${nameAppend}`;
  }

  // Append item name if requested
  if ((canvas.getAttribute("data-show-label") === "true") || (canvas.getAttribute("data-show-label") === "inline")) {
    const next = canvas.nextElementSibling;
    const alreadyExists = next && next.classList.contains("item-label");

    if (!alreadyExists) {
      const inline = canvas.getAttribute("data-show-label") === "inline";
      const label = document.createElement("div");
      label.textContent = name;
      label.className = "item-label";
      label.style.color = "white";

      if (inline) {
        const wrapper = document.createElement("div");
        wrapper.style.display = "flex";
        wrapper.style.alignItems = "center";
        wrapper.style.gap = "6px";
        wrapper.style.flexDirection = "row";
        wrapper.style.justifyContent = "center";

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
  document.querySelectorAll("canvas[data-itemname]").forEach(canvas => {
    const debugname = canvas.getAttribute("data-itemname");
    renderSpriteToCanvas(debugname, canvas);
  });
};

window.safeRenderAllSprites = async function() {
  while (!window.spriteLoaderReady) {
    await new Promise(res => setTimeout(res, 25));
  }
  window.renderAllSprites();
};

document.addEventListener("DOMContentLoaded", async function () {
  while (!window.spriteLoaderReady) {
    await new Promise(resolve => setTimeout(resolve, 25));
  }
  if (typeof window.renderAllSprites === "function") {
    window.renderAllSprites();
  }
});