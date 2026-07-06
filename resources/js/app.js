import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

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
