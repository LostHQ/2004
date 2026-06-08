function progressCheckboxes() {
    const PROGRESS_COOKIE = "progress_checkboxes";

    let savedState = {};
    const cookieData = getCookie(PROGRESS_COOKIE);
    if (cookieData) {
        try {
            savedState = JSON.parse(cookieData);
        } catch (e) {
            console.error("Invalid cookie data");
        }
    }

    const pageKey = (window.location.pathname + window.location.search).replace(/\W+/g, "_");

    document.querySelectorAll("div[data-progress]").forEach((div, index) => {
        if (!div.id) {
            div.id = `${pageKey}-progress-div-${index}`;
        }
        if (div.getAttribute("done")) return;
        div.setAttribute("done", "true");

        const checkbox = document.createElement("input");
        checkbox.type = "checkbox";
        checkbox.id = `checkbox-${div.id}`;
        checkbox.style.marginRight = "8px";

        const label = document.createElement("label");
        label.style.display = "inline-flex";
        label.style.alignItems = "center";
        label.style.cursor = "pointer";
        label.htmlFor = checkbox.id;

        if (savedState[div.id]) {
            checkbox.checked = true;
            div.style.textDecoration = "line-through";
        }

        div.parentNode.insertBefore(label, div);
        label.appendChild(checkbox);
        label.appendChild(div);

        checkbox.addEventListener("change", () => {
            if (checkbox.checked) {
                div.style.textDecoration = "line-through";
                savedState[div.id] = true;
            } else {
                div.style.textDecoration = "none";
                delete savedState[div.id];
            }
            setCookie(PROGRESS_COOKIE, JSON.stringify(savedState));
        });
    });
}
/* End check boxes section */
const imgModal = document.getElementById("imgModal");
const modalImg = document.getElementById("modalImage");
const closeImageModal = document.getElementById("closeImageModal");
const mapModal = document.getElementById("mapModal");
const mapContent = document.getElementById("map-content");
const closeMapModal = document.getElementById("closeMapModal");

document.body.addEventListener("click", (e) => {
    const validLinks = Object.freeze({
        image: ".image-link",
        map: ".map-link",
    });
    const type = Object.values(validLinks).find((selector) => e.target.matches(selector));
    if (!type) return;

    e.preventDefault();
    switch (type) {
        case validLinks.map:
            const mapMarkers = e.target.dataset.map;
            if (!mapMarkers) return;
            mapContent.innerHTML = `<iframe src="https://tools.losthq.rs/map/?zoom=25&markers=${mapMarkers}" frameborder="0" style="width: 800px; height: 800px;"></iframe>`;
            mapModal.style.display = "flex";
            break;
        case validLinks.image:
            const imageSrc = e.target.dataset.image;
            if (!imageSrc) return;
            modalImg.src = imageSrc;
            imgModal.style.display = "flex";
            break;
        default:
            return;
    }
});

closeImageModal.addEventListener("click", () => {
    imgModal.style.display = "none";
    modalImg.src = "";
});
imgModal.addEventListener("click", (e) => {
    if (e.target === imgModal) {
        imgModal.style.display = "none";
        modalImg.src = "";
    }
});
closeMapModal.addEventListener("click", () => {
    mapModal.style.display = "none";
    mapContent.innerHTML = "";
});
mapModal.addEventListener("click", (e) => {
    if (e.target === mapModal) {
        mapModal.style.display = "none";
        mapContent.innerHTML = "";
    }
});
