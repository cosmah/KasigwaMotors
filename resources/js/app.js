import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', function() {
    // Get all navigation links
    const navLinks = document.querySelectorAll('.nav-link');

    // Add click event listener to each link
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // Remove active class from all links
            navLinks.forEach(l => l.classList.remove('active'));
            // Add active class to clicked link
            this.classList.add('active');
        });
    });

    // Set active link based on current URL hash
    function setActiveLink() {
        const hash = window.location.hash || '#/';
        navLinks.forEach(link => {
            if (link.getAttribute('href') === hash) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    }

    // Set active link on page load and hash change
    window.addEventListener('hashchange', setActiveLink);
    setActiveLink();
});

document.getElementById('menuButton').addEventListener('click', function() {
    document.getElementById('mobileMenu').classList.toggle('hidden');
});
