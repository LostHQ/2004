let itemsData = [];
fetch("js/itemlist.json")
    .then((r) => r.json())
    .then((data) => {
        itemsData = data.map((item) => ({
            debugname: item.debugname,
            name: item.name,
            cost: item.cost,
        }));
    })
    .catch((err) => console.error("Failed to load items:", err));

document.addEventListener("DOMContentLoaded", () => {
    const searchInput = document.getElementById("itemSearch");
    const resultsDiv = document.getElementById("searchResults");

    searchInput.addEventListener("input", function () {
        const query = (this.value || "").trim().toLowerCase();
        resultsDiv.innerHTML = "";
        if (!query) {
            resultsDiv.style.display = "none";
            return;
        }

        const matches = itemsData.filter((item) => {
            const nm = item.name || "";
            return nm.toLowerCase().includes(query);
        });

        matches.forEach((item) => {
            if (item.debugname?.startsWith("cert_")) {
                return;
            }
            const label = item.name;

            const div = document.createElement("div");
            div.className = "search-item";
            div.textContent = label;
            div.onclick = () => {
                searchInput.value = label;
                document.getElementById("itemValue").value = item.cost;
                document.getElementById("haValue").value = Math.floor(item.cost * 0.6);
                resultsDiv.style.display = "none";
                runCalc();
            };
            resultsDiv.appendChild(div);
        });

        resultsDiv.style.display = matches.length ? "block" : "none";
    });

    document.addEventListener("click", (e) => {
        if (!searchInput.contains(e.target) && !resultsDiv.contains(e.target)) {
            resultsDiv.style.display = "none";
        }
    });
});

function runCalc() {
    const quantity = parseInt(document.getElementById("quantity").value);
    const itemValue = parseInt(document.getElementById("itemValue").value);
    const natureRunePrice = parseInt(document.getElementById("natureRunePrice").value);

    const highAlchValue = Math.floor(itemValue * 0.6);
    const totalAlchProfit = (highAlchValue - natureRunePrice) * quantity;
    const profitFromAlch = highAlchValue * quantity;
    const costOfNatures = natureRunePrice * quantity;
    const totalMagicXP = quantity * 65;

    document.getElementById("totalProfit").textContent = totalAlchProfit.toLocaleString() + " gp";
    document.getElementById("profitFromAlch").textContent = profitFromAlch.toLocaleString() + " gp";
    document.getElementById("costOfNatures").textContent = costOfNatures.toLocaleString() + " gp";
    document.getElementById("totalMagicXP").textContent = totalMagicXP.toLocaleString() + " XP";
}

// Event listener to update High Alch value when Item Value is changed
document.getElementById("itemValue").addEventListener("input", function () {
    const itemValue = parseInt(document.getElementById("itemValue").value);
    const highAlchValue = Math.floor(itemValue * 0.6);
    document.getElementById("haValue").value = highAlchValue;
    runCalc(); // Recalculate the profit with updated values
});

// Event listener to update Item Value when High Alch value is changed
document.getElementById("haValue").addEventListener("input", function () {
    const highAlchValue = parseInt(document.getElementById("haValue").value);
    const itemValue = Math.floor(highAlchValue / 0.6);
    document.getElementById("itemValue").value = itemValue;
    runCalc(); // Recalculate the profit with updated values
});

// Event listener to update profit when Quantity is changed
document.getElementById("quantity").addEventListener("input", function () {
    runCalc(); // Recalculate the profit with updated quantity
});

// Event listener to update profit when Nature Rune Price is changed
document.getElementById("natureRunePrice").addEventListener("input", function () {
    runCalc(); // Recalculate the profit with updated nature rune price
});
