import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// -------------------------------------
// Mobile Menu
// -------------------------------------

document.addEventListener("DOMContentLoaded", () => {
    const button = document.getElementById("mobile-menu-button");

    const close = document.getElementById("mobile-menu-close");

    const menu = document.getElementById("mobile-menu");

    const overlay = document.getElementById("mobile-overlay");

    if (!button) return;

    function openMenu() {
        menu.classList.remove("translate-x-full");

        overlay.classList.remove("hidden");

        document.body.classList.add("overflow-hidden");
    }

    function closeMenu() {
        menu.classList.add("translate-x-full");

        overlay.classList.add("hidden");

        document.body.classList.remove("overflow-hidden");
    }

    button.addEventListener("click", () => {
        if (menu.classList.contains("translate-x-full")) {
            openMenu();
        } else {
            closeMenu();
        }
    });

    close.addEventListener("click", closeMenu);

    overlay.addEventListener("click", closeMenu);

    menu.querySelectorAll("a").forEach((link) => {
        link.addEventListener("click", closeMenu);
    });
});

// |--------------------------------------------------------------------------
// | Header Animation scrolling down up
// |--------------------------------------------------------------------------
document.addEventListener("DOMContentLoaded", () => {
    let lastScroll = 0;

    const header = document.getElementById("header");

    if (!header) return;

    window.addEventListener("scroll", () => {
        const currentScroll = window.pageYOffset;

        if (Math.abs(currentScroll - lastScroll) < 10) {
            return;
        }

        if (currentScroll > lastScroll && currentScroll > 100) {
            header.classList.add("-translate-y-full");
        } else {
            header.classList.remove("-translate-y-full");
        }

        lastScroll = currentScroll;
    });
});
