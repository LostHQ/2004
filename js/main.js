document.addEventListener("DOMContentLoaded", () => {
    const scrollBtn = document.getElementById("scrollToTop");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 300) {
            scrollBtn.style.display = "block";
        } else {
            scrollBtn.style.display = "none";
        }
    });

    scrollBtn.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    });
});

function openLightbox(src) {
    const overlay = document.getElementById("lightbox");
    const img = document.getElementById("lightbox-img");
    img.src = src;
    overlay.style.display = "flex";
}

function closeLightbox() {
    document.getElementById("lightbox").style.display = "none";
}
