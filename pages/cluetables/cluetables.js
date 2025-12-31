const clueTiers = ["easy", "medium", "hard"];
let dropTablesCache = null;
let listenersInitialized = false;

async function fetchClueTables() {
    if (dropTablesCache) return dropTablesCache;
    try {
        const resp = await fetch("pages/api/getcluetables.php");
        dropTablesCache = await resp.json();
    } catch (err) {
        console.error("Error fetching clue tables:", err);
        dropTablesCache = [];
    }
    return dropTablesCache;
}

function formatItemName(item) {
    return item.replace(/_/g, " ").replace(/\b\w/g, (c) => c.toUpperCase());
}

async function loadDropTables() {
    const allRewards = await fetchClueTables();
    const searchTerm = document.getElementById("searchInput").value.trim().toLowerCase();
    const selectedRadio = document.querySelector('input[name="clueTier"]:checked');
    const selectedTier = selectedRadio?.value;
    const visibleTiers = searchTerm ? clueTiers.slice() : [selectedTier];

    clueTiers.forEach((tier) => {
        const container = document.querySelector(`.${tier}Table`);
        const tbody = container.querySelector("tbody");
        tbody.innerHTML = "";
        container.classList.toggle("hidden", !visibleTiers.includes(tier));
    });

    allRewards.forEach((drop) => {
        if (!visibleTiers.includes(drop.difficulty)) return;

        const name = drop.reward_name.toLowerCase();
        if (searchTerm && !name.includes(searchTerm)) return;

        const row = document.createElement("tr");
        const imgTd = document.createElement("td");
        const wrapper = document.createElement("div");
        wrapper.style.display = "flex";
        wrapper.style.alignItems = "center";
        wrapper.style.justifyContent = "center";
        wrapper.style.flexDirection = "column";

        const canvas = document.createElement("canvas");
        canvas.width = 36;
        canvas.height = 36;
        canvas.dataset.itemname = name;
        canvas.dataset.showLabel = "true";
        wrapper.appendChild(canvas);
        imgTd.appendChild(wrapper);

        const qtyTd = document.createElement("td");
        qtyTd.textContent = drop.quantity_min === drop.quantity_max ? drop.quantity_min : `${drop.quantity_min}-${drop.quantity_max}`;

        const rateTd = document.createElement("td");
        rateTd.textContent = drop.drop_rate;

        if (drop.is_rare == "1") {
            imgTd.classList.add("rare");
            qtyTd.classList.add("rare");
            rateTd.classList.add("rare");
        }

        row.append(imgTd, qtyTd, rateTd);

        const tbody = document.querySelector(`.${drop.difficulty}Table tbody`);
        tbody.appendChild(row);
    });

    document.querySelectorAll("canvas[data-itemname]").forEach((canvas) => {
        renderSpriteToCanvas(canvas.dataset.itemname, canvas);
    });
}

async function waitForSpriteLoaderAndLoad() {
    while (!window.spriteLoaderReady) {
        await new Promise((r) => setTimeout(r, 50));
    }
    loadDropTables();
}

document.addEventListener("DOMContentLoaded", () => {
    if (listenersInitialized) return;
    const searchInput = document.getElementById("searchInput");
    searchInput.disabled = false;
    searchInput.addEventListener("input", loadDropTables);

    document.querySelectorAll('input[name="clueTier"]').forEach((radio) => {
        radio.addEventListener("change", loadDropTables);
    });

    listenersInitialized = true;
    waitForSpriteLoaderAndLoad();
});
