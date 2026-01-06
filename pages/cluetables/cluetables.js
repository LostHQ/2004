const clueTiers = ["easy", "medium", "hard"];
let dropTablesCache = null;
let listenersInitialized = false;

async function fetchClueTables() {
    if (dropTablesCache) return dropTablesCache;

    async function fetchJson(path) {
        const resp = await fetch(path);
        if (!resp.ok) throw new Error(`Failed to fetch ${path}: ${resp.status}`);
        return resp.json();
    }

    try {
        const [easy, medium, hard] = await Promise.all([
            fetchJson('/pages/cluetables/easy.json'),
            fetchJson('/pages/cluetables/medium.json'),
            fetchJson('/pages/cluetables/hard.json'),
        ]);

        const tag = (arr, difficulty) => (arr || []).map((r) => ({ ...r, difficulty }));
        dropTablesCache = [].concat(tag(easy, 'easy'), tag(medium, 'medium'), tag(hard, 'hard'));
    } catch (err) {
        console.error('Error fetching clue tables:', err);
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
        canvas.setAttribute("itemname", name);
        canvas.setAttribute("show-label", "inline");
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
}

document.addEventListener("DOMContentLoaded", async () => {
    if (listenersInitialized) return;
    const searchInput = document.getElementById("searchInput");
    searchInput.disabled = false;

    searchInput.addEventListener("input", async () => {
        await loadDropTables();
        await window.safeRenderAllSprites();
    });

    document.querySelectorAll('input[name="clueTier"]').forEach((radio) => {
        radio.addEventListener("change", async () => {
            await loadDropTables();
            await window.safeRenderAllSprites();
        });
    });

    listenersInitialized = true;
    await loadDropTables();
    await window.safeRenderAllSprites();
});
