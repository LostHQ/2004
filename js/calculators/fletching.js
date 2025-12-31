let mode = "complete";
function setMode(newMode) {
    mode = newMode;
    document.getElementById("arrowSelection").style.display = mode === "arrows" ? "block" : "none";
    runCalc();
}

function runCalc() {
    const currentXP = parseInt(document.getElementById("currentXP").value);
    const targetXP = parseInt(document.getElementById("targetXP").value);
    const xpNeeded = targetXP - currentXP;

    // Unstrung xp, level req
    const unstrung = {
        unstrung_shortbow: [5, 5],
        unstrung_longbow: [10, 10],
        unstrung_oak_shortbow: [16.5, 20],
        unstrung_oak_longbow: [25, 25],
        unstrung_willow_shortbow: [33.3, 35],
        unstrung_willow_longbow: [41.5, 40],
        unstrung_maple_shortbow: [50, 50],
        unstrung_maple_longbow: [58.3, 55],
        unstrung_yew_shortbow: [67.5, 65],
        unstrung_yew_longbow: [75, 70],
        unstrung_magic_shortbow: [83.3, 80],
        unstrung_magic_longbow: [91.5, 85],
    };

    // Strung xp, level req
    const stringing = {
        shortbow: [5, 5],
        longbow: [10, 10],
        oak_shortbow: [16.5, 20],
        oak_longbow: [25, 25],
        willow_shortbow: [33.2, 35],
        willow_longbow: [41.5, 40],
        maple_shortbow: [50, 50],
        maple_longbow: [58.2, 55],
        yew_shortbow: [67.5, 65],
        yew_longbow: [75, 70],
        magic_shortbow: [83.2, 80],
        magic_longbow: [91.5, 85],
    };

    //xp, level req, per batch
    const arrows = {
        arrow_shaft: [7.5, 1, 15],
        bronze_dart: [18, 1, 10],
        headless_arrow: [22.5, 1, 15],
        bronze_arrow: [42, 1, 15],
        opal_bolt: [31, 11, 10],
        iron_arrow: [60, 15, 15],
        iron_dart: [38, 22, 10],
        steel_arrow: [97.5, 30, 15],
        steel_dart: [75, 37, 10],
        pearl_bolt: [64, 41, 10],
        mithril_arrow: [135, 45, 15],
        barbed_bolt: [95, 51, 10],
        mithril_dart: [112, 52, 10],
        adamant_arrow: [172.5, 60, 15],
        adamant_dart: [150, 67, 10],
        rune_arrow: [210, 75, 15],
        rune_dart: [188, 81, 10],
    };

    // xp, level req, per batch
    const incomplete = {
        headless_arrow: [15, 1, 15],
        bronze_arrowheads: [19.5, 1, 15],
        opal_bolttips: [15, 11, 10],
        iron_arrowheads: [37.5, 15, 15],
        steel_arrowheads: [75, 30, 15],
        pearl_bolttips: [32, 41, 10],
        mithril_arrowheads: [112.5, 45, 15],
        adamant_arrowheads: [150, 60, 15],
        rune_arrowheads: [187.5, 75, 15],
    };

    updateProgressBar(currentXP, targetXP);

    const tableBody = document.querySelector("#resultsTable tbody");
    tableBody.innerHTML = "";

    switch (mode) {
        case "arrows":
            const arrowType = document.getElementById("arrowType").value;
            const arrowData = arrowType === "completeArrows" ? arrows : incomplete;
            for (const arrow in arrowData) {
                const [xpPerAction, levelReq, quantity] = arrowData[arrow];
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td>${levelReq}</td>
                    <td>
                        <div class=centered-content>
                            <canvas data-itemname="${arrow}" data-show-label="inline" data-name-append="x${quantity}"></canvas>
                        </div>
                    </td>
                    <td>${xpPerAction}</td>
                    <td>${Math.ceil(xpNeeded / xpPerAction).toLocaleString()}</td>
                `;
                tableBody.appendChild(row);
            }
            break;
        case "unstrung":
            for (const item in unstrung) {
                const [xpPerAction, levelReq] = unstrung[item];
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td>${levelReq}</td>
                    <td>
                        <canvas data-itemname="${item}" data-show-label="inline" data-name-append=""></canvas>
                    </td>
                    <td>${xpPerAction}</td>
                    <td>${Math.ceil(xpNeeded / xpPerAction).toLocaleString()}</td>
                `;
                tableBody.appendChild(row);
            }
            break;
        case "stringing":
            for (const item in stringing) {
                const [xpPerAction, levelReq] = stringing[item];
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td>${levelReq}</td>
                    <td>
                        <canvas data-itemname="${item}" data-show-label="inline" data-name-append=""></canvas>
                    </td>
                    <td>${xpPerAction}</td>
                    <td>${Math.ceil(xpNeeded / xpPerAction).toLocaleString()}</td>
                `;
                tableBody.appendChild(row);
            }
            break;
        case "complete":
            for (const item in unstrung) {
                const strungItem = item.replace("unstrung_", "");
                const [xpPerUnstrung, levelReq] = unstrung[item];
                const [xpPerString] = stringing[strungItem];
                const xpPerAction = xpPerUnstrung + xpPerString;
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td>${levelReq}</td>
                    <td>
                        <canvas data-itemname="${strungItem}" data-show-label="inline" data-name-append=""></canvas>
                    </td>
                    <td>${xpPerAction}</td>
                    <td>${Math.ceil(xpNeeded / xpPerAction).toLocaleString()}</td>
                `;
                tableBody.appendChild(row);
            }
            break;
    }
    window.safeRenderAllSprites();
}
