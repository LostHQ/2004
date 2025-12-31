window.addEventListener("DOMContentLoaded", () => {
    const getCookie = (name) => {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(";").shift();
        return null;
    };

    const usuk = getCookie("usuk") || "US";
    const isUS = usuk === "US";

    const ukToUs = {
        g: "1",
        0: "1",
        "ground floor": "1",
        ground: "1",
        "1st floor": "2",
        "first floor": "2",
        1: "2",
        "2nd floor": "3",
        "second floor": "3",
        2: "3",
        "3rd floor": "4",
        "third floor": "4",
        3: "4",
        "4th floor": "5",
        "fourth floor": "5",
        4: "5",
        "5th floor": "6",
        "fifth floor": "6",
        5: "6",
    };

    const usToUk = {
        1: "G",
        2: "1",
        3: "2",
        4: "3",
        5: "4",
        6: "5",
    };

    document.querySelectorAll("[data-floors]").forEach((el) => {
        const region = el.getAttribute("data-floors");
        const originalText = el.textContent.trim().toLowerCase();

        let key = originalText.replace(/floor|fl|st|nd|rd|th/gi, "").trim();

        if (isNaN(key)) {
            key = key.replace("first", "1").replace("second", "2").replace("third", "3").replace("fourth", "4").replace("fifth", "5").replace("ground", "g");
        }

        let newText = el.textContent;

        if (isUS && region === "UK") {
            newText = ukToUs[key] ? `${ukToUs[key]}${ukToUs[key] === "1" ? "st" : "nd"} floor` : el.textContent;
        } else if (!isUS && region === "US") {
            newText = usToUk[key] ? (usToUk[key] === "G" ? "Ground floor" : `${usToUk[key]}${usToUk[key] === "1" ? "st" : "nd"} floor`) : el.textContent;
        }

        if (el.tagName === "SPAN") {
            el.style.borderBottom = "1px dotted rgba(255,255,255,0.2)";
            el.style.padding = "0 2px";

            const info = document.createElement("sup");
            info.textContent = " [?]";
            info.style.cursor = "help";
            info.style.opacity = "0.4";
            info.style.fontSize = "8px";
            info.title = `Showing ${usuk} floor naming.\nCheck footer to change region.`;

            const wrapper = document.createElement("span");
            wrapper.style.whiteSpace = "nowrap";

            const floorSpan = document.createElement("span");
            floorSpan.textContent = newText;

            wrapper.appendChild(floorSpan);
            wrapper.appendChild(info);

            el.replaceWith(wrapper);
        } else {
            el.textContent = newText;

            if (el.tagName === "SPAN") {
                el.style.borderBottom = "1px dotted rgba(255,255,255,0.2)";
                el.style.padding = "0 2px";
                el.style.whiteSpace = "nowrap";
                el.style.display = "inline"; // <- Critical for flex container context

                const info = document.createElement("sup");
                info.textContent = " [?]";
                info.style.cursor = "help";
                info.style.opacity = "0.4";
                info.style.fontSize = "8px";
                info.title = `Showing ${usuk} floor naming.\nCheck footer to change region.`;

                el.appendChild(info);
            }
        }
    });
});
