(async function () {
    await checkSpriteLoaderReady();
    const itemData = window.itemData;

    const search1 = document.getElementById("search1");
    const search2 = document.getElementById("search2");
    const container = document.getElementById("items-container");
    const initParams = new URLSearchParams(window.location.search);

    if (initParams.has("item")) {
        const dn = initParams.get("item");
        const found = itemData[dn];
        if (found) search1.value = `${found.name} (${found.id})`;
    }
    if (initParams.has("item2")) {
        const dn2 = initParams.get("item2");
        const found2 = itemData[dn2];
        if (found2) search2.value = `${found2.name} (${found2.id})`;
    }

    // wrap inputs in suggestion containers
    [search1, search2].forEach((input) => {
        const wrapper = document.createElement("div");
        wrapper.className = "search-wrapper";
        input.parentNode.insertBefore(wrapper, input);
        wrapper.appendChild(input);

        const sugg = document.createElement("ul");
        sugg.className = "suggestions";
        wrapper.appendChild(sugg);
        input.suggBox = sugg;

        input.addEventListener("input", onType);
        input.addEventListener("blur", () => setTimeout(() => (input.suggBox.innerHTML = ""), 150));
    });

    function findItemById(id) {
        if (id == null) return null;
        for (const k in itemData) {
            const it = itemData[k];
            if (!it) continue;
            if (Number(it.id) === Number(id)) return it;
        }
        return null;
    }

    function onType(e) {
        const val = e.target.value.toLowerCase().trim();
        const box = e.target.suggBox;
        box.innerHTML = "";
        if (!val) return;

        const terms = val.split(/\s+/).filter(Boolean);
        const matches = [];
        for (const key in itemData) {
            const it = itemData[key];
            if (!it || !it.name) continue;
            if (it.debugname && it.debugname.startsWith("cert_")) continue;

            // normalize tags to array of lowercase strings
            let tags = it.searchTags || [];
            if (!Array.isArray(tags)) {
                tags = String(tags).split(/\s+/).filter(Boolean);
            }
            tags = tags.map((t) => String(t).toLowerCase());

            const nameLower = it.name.toLowerCase();
            const debugLower = it.debugname ? it.debugname.toLowerCase() : "";

            const matched = terms.every((t) => tags.includes(t) || nameLower.includes(t) || debugLower.includes(t));
            if (matched) matches.push(it);
        }
        matches.sort((a, b) => a.name.localeCompare(b.name));
        matches.splice(15);

        matches.forEach((it) => {
            const li = document.createElement("li");
            const canvas = document.createElement("canvas");
            canvas.width = canvas.height = 20;
            canvas.setAttribute("itemname", it.debugname);
            canvas.setAttribute("icon-size", "20");
            canvas.setAttribute("show-label", "false");
            li.appendChild(canvas);
            renderItemSpriteToCanvas(canvas);
            li.append(` ${it.name} (${it.id})`);
            li.addEventListener("mousedown", () => {
                e.target.value = `${it.name} (${it.id})`;
                box.innerHTML = "";
                updateDisplay();
            });
            box.appendChild(li);
        });
    }

    // parse selected ID
    function parseSelectedId(str) {
        const m = str.match(/\((\d+)\)$/);
        return m ? parseInt(m[1], 10) : null;
    }

    // prettify weight
    function formatWeight(g) {
        if (g >= 100) {
            const s = (g / 1000).toFixed(2).replace(/\.?0+$/, "");
            return `${s} KG`;
        }
        return `${g} grams`;
    }

    // slot lookup
    const slotNames = {
        hat: "Head",
        torso: "Body",
        legs: "Legs",
        hands: "Gloves",
        feet: "Boots",
        ring: "Ring",
        quiver: "Quiver",
        righthand: "Weapon",
        lefthand: "Shield",
        front: "Amulet",
        back: "Cape",
    };

    // build item detail table
    function renderTable(item) {
        const table = document.createElement("table");
        table.className = "itemdatabase";
        let row;

        // dummy item warning
        if (item.dummyitem) {
            row = table.insertRow();
            const warn = row.insertCell();
            warn.colSpan = 6;
            warn.style.color = "orange";
            warn.textContent = "This is a dummy item, used in inventories/graphics only";
        }

        // icon row
        row = table.insertRow();
        const thIcon = document.createElement("th");
        thIcon.colSpan = 6;
        const canvasIcon = document.createElement("canvas");
        const size = 60;
        canvasIcon.width = canvasIcon.height = size;
        canvasIcon.setAttribute("itemname", item.debugname);
        canvasIcon.setAttribute("icon-size", size.toString());
        canvasIcon.setAttribute("show-label", "true");
        thIcon.appendChild(canvasIcon);
        if (window.spriteLoaderReady) {
            renderItemSpriteToCanvas(canvasIcon);
        }

        row.appendChild(thIcon);
        if (item.dummyitem) {
            return table;
        }

        // description row
        row = table.insertRow();
        const thDesc = document.createElement("th");
        thDesc.colSpan = 6;
        thDesc.textContent = item.desc || "-";
        row.appendChild(thDesc);

        // cost/alch trio
        row = table.insertRow();
        addCombined(row, "Shop Cost", item.cost.toLocaleString());
        addCombined(row, "Low Alch", Math.floor(item.cost * 0.4).toLocaleString());
        addCombined(row, "High Alch", Math.floor(item.cost * 0.6).toLocaleString());

        // weight/members/equip
        const equip = item.equipable_item || {};
        const wearpos = equip.wearpos;
        row = table.insertRow();
        addCombined(row, "Weight", formatWeight(item.weight || 0), wearpos ? 2 : 3);
        addCombined(row, "Members", item.members ? "Yes" : "No", wearpos ? 2 : 3);
        if (wearpos) {
            const text = (slotNames[wearpos] || wearpos).replace(/^./, (c) => c.toUpperCase());
            addCombined(row, "Equip Slot", text);
        }

        // stackable
        row = table.insertRow();
        addCombined(row, "Stackable", item.stackable ? "Yes" : "No", 6);

        // operations subtable
        row = table.insertRow();
        const opsCell = row.insertCell();
        opsCell.colSpan = 6;
        const opsTable = document.createElement("table");
        opsTable.className = "subtable";

        // header
        let orow = opsTable.insertRow();
        const ohead = document.createElement("th");
        ohead.colSpan = 1;
        ohead.textContent = "Right-Click Options";
        orow.appendChild(ohead);

        // build operations list
        const ops = [];
        if (item.iops?.iop1) ops.push(item.iops.iop1);
        if (item.iops?.iop2) ops.push(item.iops.iop2);
        if (item.iops?.iop3) ops.push(item.iops.iop3);
        ops.push("Use");
        if (item.iops?.iop4) ops.push(item.iops.iop4);
        if (item.iops?.iop5) ops.push(item.iops.iop5);
        else ops.push("Drop");
        ops.push("Examine");

        ops.forEach((act) => {
            orow = opsTable.insertRow();
            const td = orow.insertCell();
            td.innerHTML = `${act} <span style=\"color: orange; font-weight:bold;\">${item.name}</span>`;
        });

        opsCell.appendChild(opsTable);

        // equip bonuses subtable
        if (wearpos) {
            row = table.insertRow();
            const cell = row.insertCell();
            cell.colSpan = 6;
            const bonusTable = document.createElement("table");
            bonusTable.className = "subtable";

            // headers
            let br = bonusTable.insertRow();
            const bh1 = document.createElement("th");
            bh1.textContent = "Attack bonus";
            br.appendChild(bh1);
            const bh2 = document.createElement("th");
            bh2.textContent = "Defence bonus";
            br.appendChild(bh2);

            // rows: stab, slash, crush, magic, range
            const bonusRows = [
                ["Stab", "stabattack", "stabdefence"],
                ["Slash", "slashattack", "slashdefence"],
                ["Crush", "crushattack", "crushdefence"],
                ["Magic", "magicattack", "magicdefence"],
                ["Range", "rangeattack", "rangedefence"],
            ];
            bonusRows.forEach(([label, atk, def]) => {
                br = bonusTable.insertRow();
                br.insertCell().textContent = `${label}: ${equip[atk] ?? "0"}`;
                br.insertCell().textContent = `${label}: ${equip[def] ?? "0"}`;
            });

            // other bonuses header
            br = bonusTable.insertRow();
            const oth = document.createElement("th");
            oth.colSpan = 2;
            oth.textContent = "Other bonuses";
            br.appendChild(oth);

            // strength & prayer
            br = bonusTable.insertRow();
            br.insertCell().textContent = `Strength: ${equip.strengthbonus ?? "-"}`;
            br.insertCell().textContent = `Prayer: ${equip.prayerbonus ?? "-"}`;

            // attack speed row
            if (typeof equip.attackrate !== "undefined") {
                br = bonusTable.insertRow();
                const speedCell = br.insertCell();
                speedCell.colSpan = 2;
                speedCell.textContent = `Attack speed: ${equip.attackrate + ` ticks` ?? `4 ticks`}`;
            }

            cell.appendChild(bonusTable);
        }

        return table;
    }

    function updateDisplay() {
        container.innerHTML = "";
        const row = document.createElement("div");
        row.className = "row";
        container.appendChild(row);

        const v1 = search1.value.trim();
        const v2 = search2.value.trim();
        const id1 = parseSelectedId(v1);
        const id2 = parseSelectedId(v2);
        const it1 = id1 != null ? findItemById(id1) : null;
        const it2 = id2 != null ? findItemById(id2) : null;

        if (it1) row.appendChild(renderTable(it1));
        else if (v1) {
            const p = document.createElement("p");
            p.style.color = "red";
            p.textContent = `Item "${v1}" not found.`;
            row.appendChild(p);
        }

        if (it2) {
            row.appendChild(renderTable(it2));
        } else if (v2) {
            const p2 = document.createElement("p");
            p2.style.color = "red";
            p2.textContent = `Item "${v2}" not found.`;
            row.appendChild(p2);
        }

        const newParams = new URLSearchParams(window.location.search);
        if (it1) newParams.set("item", it1.debugname);
        else newParams.delete("item");
        if (it2) newParams.set("item2", it2.debugname);
        else newParams.delete("item2");

        const query = newParams.toString();
        const newUrl = window.location.pathname + (query ? `?${query}` : "");
        history.replaceState(null, "", newUrl);
    }

    // event wires & initial render
    [search1, search2].forEach((el) => el.addEventListener("change", updateDisplay));
    updateDisplay();
})();
