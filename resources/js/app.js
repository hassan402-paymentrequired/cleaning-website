import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('alpine:init', () => {
    Alpine.data('example', () => ({
        selected: null,
    }))
});

document.addEventListener('DOMContentLoaded', () => {
    const scrollingDiv = document.getElementById('scrolling-div');
    const originalOffset = scrollingDiv.offsetTop;

    window.addEventListener('scroll', () => {
        if (window.scrollY >= originalOffset) {
            scrollingDiv.classList.add('sticky');
        } else {
            scrollingDiv.classList.remove('sticky');
        }
    });
});
