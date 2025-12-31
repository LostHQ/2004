let mode = "complete";
function setMode(newMode) {
    mode = newMode;
    document.getElementById("arrowSelection").style.display = mode === "arrows" ? "block" : "none";
    runCalc();
}

const unstrung = {
    unstrung_shortbow: { xp: 5, level: 5 },
    unstrung_longbow: { xp: 10, level: 10 },
    unstrung_oak_shortbow: { xp: 16.5, level: 20 },
    unstrung_oak_longbow: { xp: 25, level: 25 },
    unstrung_willow_shortbow: { xp: 33.3, level: 35 },
    unstrung_willow_longbow: { xp: 41.5, level: 40 },
    unstrung_maple_shortbow: { xp: 50, level: 50 },
    unstrung_maple_longbow: { xp: 58.3, level: 55 },
    unstrung_yew_shortbow: { xp: 67.5, level: 65 },
    unstrung_yew_longbow: { xp: 75, level: 70 },
    unstrung_magic_shortbow: { xp: 83.3, level: 80 },
    unstrung_magic_longbow: { xp: 91.5, level: 85 },
};

const stringing = {
    shortbow: { xp: 5, level: 5 },
    longbow: { xp: 10, level: 10 },
    oak_shortbow: { xp: 16.5, level: 20 },
    oak_longbow: { xp: 25, level: 25 },
    willow_shortbow: { xp: 33.2, level: 35 },
    willow_longbow: { xp: 41.5, level: 40 },
    maple_shortbow: { xp: 50, level: 50 },
    maple_longbow: { xp: 58.2, level: 55 },
    yew_shortbow: { xp: 67.5, level: 65 },
    yew_longbow: { xp: 75, level: 70 },
    magic_shortbow: { xp: 83.2, level: 80 },
    magic_longbow: { xp: 91.5, level: 85 },
};

const arrows = {
    arrow_shaft: { xp: 7.5, level: 1, qty: 15 },
    bronze_dart: { xp: 18, level: 1, qty: 10 },
    headless_arrow: { xp: 22.5, level: 1, qty: 15 },
    bronze_arrow: { xp: 42, level: 1, qty: 15 },
    opal_bolt: { xp: 31, level: 11, qty: 10 },
    iron_arrow: { xp: 60, level: 15, qty: 15 },
    iron_dart: { xp: 38, level: 22, qty: 10 },
    steel_arrow: { xp: 97.5, level: 30, qty: 15 },
    steel_dart: { xp: 75, level: 37, qty: 10 },
    pearl_bolt: { xp: 64, level: 41, qty: 10 },
    mithril_arrow: { xp: 135, level: 45, qty: 15 },
    barbed_bolt: { xp: 95, level: 51, qty: 10 },
    mithril_dart: { xp: 112, level: 52, qty: 10 },
    adamant_arrow: { xp: 172.5, level: 60, qty: 15 },
    adamant_dart: { xp: 150, level: 67, qty: 10 },
    rune_arrow: { xp: 210, level: 75, qty: 15 },
    rune_dart: { xp: 188, level: 81, qty: 10 },
};

const incomplete = {
    headless_arrow: { xp: 15, level: 1, qty: 15 },
    bronze_arrowheads: { xp: 19.5, level: 1, qty: 15 },
    opal_bolttips: { xp: 15, level: 11, qty: 10 },
    iron_arrowheads: { xp: 37.5, level: 15, qty: 15 },
    steel_arrowheads: { xp: 75, level: 30, qty: 15 },
    pearl_bolttips: { xp: 32, level: 41, qty: 10 },
    mithril_arrowheads: { xp: 112.5, level: 45, qty: 15 },
    adamant_arrowheads: { xp: 150, level: 60, qty: 15 },
    rune_arrowheads: { xp: 187.5, level: 75, qty: 15 },
};

function runCalc() {
    const currentXP = parseInt(document.getElementById("currentXP").value);
    const targetXP = parseInt(document.getElementById("targetXP").value);
    const xpNeeded = targetXP - currentXP;

    updateProgressBar(currentXP, targetXP);

    const tableBody = document.querySelector("#resultsTable tbody");
    tableBody.innerHTML = "";

    switch (mode) {
        case "arrows":
            const arrowType = document.getElementById("arrowType").value;
            const arrowData = arrowType === "completeArrows" ? arrows : incomplete;
            for (const [item, data] of Object.entries(arrowData)) {
                const row = document.createElement("tr");
                row.innerHTML =
                    `<td>${data.level}</td>
                    <td>
                        <div class=centered-content>
                            <canvas data-itemname="${item}" data-show-label="inline" data-name-append="x${data.qty}"></canvas>
                        </div>
                    </td>
                    <td>${data.xp}</td>
                    <td>${Math.ceil(xpNeeded / data.xp).toLocaleString()}</td>`;
                tableBody.appendChild(row);
            }
            break;
        case "unstrung":
            for (const [item, data] of Object.entries(unstrung)) {
                const row = document.createElement("tr");
                row.innerHTML =
                    `<td>${data.level}</td>
                    <td>
                        <canvas data-itemname="${item}" data-show-label="inline" data-name-append=""></canvas>
                    </td>
                    <td>${data.xp}</td>
                    <td>${Math.ceil(xpNeeded / data.xp).toLocaleString()}</td>`;
                tableBody.appendChild(row);
            }
            break;
        case "stringing":
            for (const [item, data] of Object.entries(stringing)) {
                const row = document.createElement("tr");
                row.innerHTML =
                    `<td>${data.level}</td>
                    <td>
                        <canvas data-itemname="${item}" data-show-label="inline" data-name-append=""></canvas>
                    </td>
                    <td>${data.xp}</td>
                    <td>${Math.ceil(xpNeeded / data.xp).toLocaleString()}</td>`;
                tableBody.appendChild(row);
            }
            break;
        case "complete":
            for (const [item, data] of Object.entries(unstrung)) {
                const strungItem = item.replace("unstrung_", "");
                const xpPerUnstrung = data.xp;
                const xpPerString = stringing[strungItem].xp;
                const xpPerAction = xpPerUnstrung + xpPerString;
                const row = document.createElement("tr");
                row.innerHTML =
                    `<td>${data.level}</td>
                    <td>
                        <canvas data-itemname="${strungItem}" data-show-label="inline" data-name-append=""></canvas>
                    </td>
                    <td>${xpPerAction}</td>
                    <td>${Math.ceil(xpNeeded / xpPerAction).toLocaleString()}</td>`;
                tableBody.appendChild(row);
            }
            break;
    }
    window.safeRenderAllSprites();
}
