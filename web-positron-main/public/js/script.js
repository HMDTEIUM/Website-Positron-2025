// Mobile Menu Toggle Functions
function toggleMenu() {
    const hamburger = document.querySelector('.hamburger');
    const mobileNav = document.querySelector('.mobile-nav');
    
    hamburger.classList.toggle('active');
    mobileNav.classList.toggle('active');
}

function closeMenu() {
    const hamburger = document.querySelector('.hamburger');
    const mobileNav = document.querySelector('.mobile-nav');
    
    hamburger.classList.remove('active');
    mobileNav.classList.remove('active');
}

// Close menu when clicking outside
document.addEventListener('click', function(event) {
    const hamburger = document.querySelector('.hamburger');
    const mobileNav = document.querySelector('.mobile-nav');
    const isClickInsideMenu = mobileNav.contains(event.target);
    const isClickOnHamburger = hamburger.contains(event.target);
    
    if (!isClickInsideMenu && !isClickOnHamburger) {
        closeMenu();
    }
});

// Close menu when window is resized to desktop view
window.addEventListener('resize', function() {
    if (window.innerWidth > 768) {
        closeMenu();
    }
});

// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
        closeMenu(); // Close mobile menu after clicking
    });
});


