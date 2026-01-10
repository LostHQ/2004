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

function getCookie(name) {
    const match = document.cookie.match(new RegExp("(^| )" + name + "=([^;]+)"));
    return match ? decodeURIComponent(match[2]) : null;
}

function setCookie(name, value, days = 365) {
    const expires = new Date(Date.now() + days * 86400 * 1000).toUTCString();
    document.cookie = `${name}=${encodeURIComponent(value)}; expires=${expires}; path=/`;
}

function addNarrowScrolls(contents) {
    const findDivElements = document.querySelectorAll("[id='narrowscroll']");
    findDivElements.forEach(element => {
        if (element.getAttribute('done')) return;
        element.setAttribute('done', 'true');
        const previousContent = element.innerHTML;
        element.innerHTML = "";

        const scrollTop = document.createElement("img");
        scrollTop.src = "/img/scroll/scroll457_top.gif";
        scrollTop.className = 'narrowscroll-top';

        const outerBg = document.createElement('div');
        outerBg.className = 'narrowscroll-bg';

        const bgImg = document.createElement('div');
        bgImg.className = 'narrowscroll-bgimg';

        const contentContainer = document.createElement('div');
        contentContainer.className = 'narrowscroll-content';
        if (typeof contents == 'string') {
            contentContainer.innerHTML = contents;
        } else {
            contentContainer.innerHTML = previousContent;
        }
        const scrollBottom = document.createElement("img");
        scrollBottom.src = "/img/scroll/scroll457_bottom.gif";
        scrollBottom.className = 'narrowscroll-bottom';
        bgImg.appendChild(contentContainer);
        outerBg.appendChild(bgImg);
        element.appendChild(scrollTop);
        element.appendChild(outerBg);
        element.appendChild(scrollBottom);
    });
}

function addCombined(row, label, value, colspan = 2) {
    const cell = row.insertCell();
    cell.colSpan = colspan;
    cell.textContent = `${label}: ${value}`;
}
