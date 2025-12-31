window.addEventListener("DOMContentLoaded", () => {
    const container = document.getElementById("site-options-container");

    const styleSelect = document.getElementById("style-select");
    const usukSelect = document.getElementById("usuk-select");
    const gameVerSelect = document.getElementById("gamever-select");

    const toggleBtn = document.getElementById("site-options-toggle");
    const backdrop = document.getElementById("site-options-backdrop");
    const modal = document.getElementById("site-options-modal");
    const closeBtn = document.getElementById("site-options-close");

    const currentStyle = container.dataset.style || "default";
    const currentUsuk = container.dataset.usuk || "US";
    const currentGameVer = container.dataset.gamever || "2004";

    styleSelect.value = currentStyle;
    usukSelect.value = currentUsuk;
    gameVerSelect.value = currentGameVer;

    styleSelect.addEventListener("change", function () {
        document.cookie = "style=" + this.value + "; path=/; max-age=" + 60 * 60 * 24 * 30;
        location.reload();
    });

    usukSelect.addEventListener("change", function () {
        document.cookie = "usuk=" + this.value + "; path=/; max-age=" + 60 * 60 * 24 * 30;
        location.reload();
    });

    gameVerSelect.addEventListener("change", function () {
        document.cookie = "gamever=" + this.value + "; path=/; max-age=" + 60 * 60 * 24 * 30;
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
    backdrop.addEventListener("click", closeOptions);

    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") {
            closeOptions();
        }
    });
});
