function toggleMenu() {
    const menu = document.querySelector(".menu-links");
    const icon = document.querySelector(".hamburger-icon");
    menu.classList.toggle("open");
    icon.classList.toggle("open");
}

// script.js
document.querySelectorAll('.gallery-item img').forEach(image => {
    image.addEventListener('click', () => {
        const overlay = document.createElement('div');
        overlay.classList.add('overlay');
        overlay.innerHTML = `<img src="${image.src}" alt="${image.alt}" />`;
        document.body.appendChild(overlay);

        overlay.addEventListener('click', () => {
            overlay.remove();
        });
    });
});