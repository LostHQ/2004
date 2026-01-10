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
        if (div.getAttribute('done')) return;
        div.setAttribute('done', 'true');

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
const modal = document.getElementById("imgModal");
const modalImg = document.getElementById("modalImage");
const closeBtn = document.getElementById("closeModal");

document.body.addEventListener("click", (e) => {
    if (!e.target.matches(".image-link")) return;
    e.preventDefault();
    const url = e.target.dataset.image;
    if (!url) return;
    modalImg.src = url;
    modal.style.display = "flex";
});

closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
    modalImg.src = "";
});
modal.addEventListener("click", (e) => {
    if (e.target === modal) {
        modal.style.display = "none";
        modalImg.src = "";
    }
});
