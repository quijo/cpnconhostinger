import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


const menuBtn = document.getElementById('menuBtn');

const mobileMenu = document.getElementById('mobile-menu')


menuBtn.addEventListener('click', function() {
    mobileMenu.classList.toggle('show')
})
