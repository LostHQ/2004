let currentStyle = getCookie("style") || "default";
let currentUsuk = getCookie("usuk") || "US";
let currentGameVer = getCookie("gamever") || "254";

window.addEventListener("DOMContentLoaded", () => {
    const toggleBtn = document.getElementById("site-options-toggle");
    const backdrop = document.getElementById("site-options-backdrop");
    const modal = document.getElementById("site-options-modal");
    const closeBtn = document.getElementById("site-options-close");

    const styleSelect = document.getElementById("style-select");
    const usukSelect = document.getElementById("usuk-select");
    const gameVerSelect = document.getElementById("gamever-select");

    styleSelect.value = currentStyle;
    usukSelect.value = currentUsuk;
    gameVerSelect.value = currentGameVer;

    styleSelect.addEventListener("change", function () {
        setCookie("style", this.value);
        location.reload();
    });

    usukSelect.addEventListener("change", function () {
        setCookie("usuk", this.value);
        location.reload();
    });

    gameVerSelect.addEventListener("change", function () {
        setCookie("gamever", this.value);
        location.reload();
    });

    function openOptions() {
        backdrop.hidden = false;
        modal.hidden = false;
    }

    function closeOptions() {
        backdrop.hidden = true;
        modal.hidden = true;
    }

    toggleBtn.addEventListener("click", openOptions);
    closeBtn.addEventListener("click", closeOptions);

    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") { closeOptions(); }
    });
});
