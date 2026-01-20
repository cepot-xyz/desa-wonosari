/* ============================================
   HAMBURGER MENU TOGGLE
   ============================================ */

document.addEventListener('DOMContentLoaded', function() {
    
const hamburgerBtn = document.getElementById('hamburgerBtn');
const mobileNav = document.getElementById('mobileNav');
const mobileNavLinks = document.querySelectorAll('.mobile-menu > li > .nav-link:not(.dropdown-toggle)');
const body = document.body;

console.log('DOM Content Loaded - Initializing navigation');

// Toggle Mobile Menu
hamburgerBtn.addEventListener('click', function(e) {
    e.stopPropagation();
    this.classList.toggle('active');
    mobileNav.classList.toggle('active');
    
    // Prevent scroll when menu is open
    if (mobileNav.classList.contains('active')) {
        body.style.overflow = 'hidden';
    } else {
        body.style.overflow = 'auto';
    }
});

// Close Mobile Menu when non-dropdown Link is Clicked
mobileNavLinks.forEach(link => {
    link.addEventListener('click', function(e) {
        e.stopPropagation();
        hamburgerBtn.classList.remove('active');
        mobileNav.classList.remove('active');
        body.style.overflow = 'auto';
    });
});

// Handle Mobile Dropdown Toggle
const setupDropdownToggles = () => {
    const toggles = document.querySelectorAll('.mobile-menu .dropdown-toggle');
    
    toggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
        });
    });
};

setupDropdownToggles();

// Close menu when dropdown item is clicked
document.querySelectorAll('.mobile-menu .dropdown-item').forEach(item => {
    item.addEventListener('click', function(e) {
        hamburgerBtn.classList.remove('active');
        mobileNav.classList.remove('active');
        body.style.overflow = 'auto';
    });
});

// Close Mobile Menu when Clicking Outside
document.addEventListener('click', function(event) {
    const isClickInsideNav = mobileNav.contains(event.target);
    const isClickInsideHamburger = hamburgerBtn.contains(event.target);
    
    if (!isClickInsideNav && !isClickInsideHamburger && mobileNav.classList.contains('active')) {
        hamburgerBtn.classList.remove('active');
        mobileNav.classList.remove('active');
        body.style.overflow = 'auto';
    }
});

// Close menu on Escape key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape' && mobileNav.classList.contains('active')) {
        hamburgerBtn.classList.remove('active');
        mobileNav.classList.remove('active');
        body.style.overflow = 'auto';
    }
});

/* ============================================
   SMOOTH SCROLL FOR ANCHOR LINKS
   ============================================ */

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        const href = this.getAttribute('href');
        if (href !== '#' && document.querySelector(href)) {
            e.preventDefault();
            const target = document.querySelector(href);
            const offsetTop = target.offsetTop - 80;
            
            window.scrollTo({
                top: offsetTop,
                behavior: 'smooth'
            });
        }
    });
});

/* ============================================
   NAVBAR HIDE ON SCROLL DOWN
   ============================================ */

let lastScrollTop = 0;
const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', function() {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    
    // Optional: Add subtle shadow on scroll
    if (scrollTop > 50) {
        navbar.style.boxShadow = '0 4px 12px rgba(0, 31, 63, 0.15)';
    } else {
        navbar.style.boxShadow = '0 2px 8px rgba(0, 31, 63, 0.1)';
    }
    
    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
});

/* ============================================
   ACTIVE NAV LINK ON SCROLL
   ============================================ */

const sections = document.querySelectorAll('section[id]');
const mobileNavLinks = document.querySelectorAll('.mobile-menu .nav-link');

function updateActiveLink() {
    let current = '';
    
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        
        if (window.pageYOffset >= sectionTop - 100) {
            current = section.getAttribute('id');
        }
    });
    
    // Only apply active class to mobile menu links, not desktop
    mobileNavLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href').slice(1) === current) {
            link.classList.add('active');
        }
    });
}

window.addEventListener('scroll', updateActiveLink);

/* ============================================
   FORM SUBMISSION
   ============================================ */

const contactForm = document.getElementById('contactForm');

if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form values
        const name = this.querySelector('input[type="text"]').value;
        const email = this.querySelector('input[type="email"]').value;
        const message = this.querySelector('textarea').value;
        
        // Simple validation
        if (name && email && message) {
            // Show success message (in production, send to server)
            alert('Terima kasih! Pesan Anda telah dikirim.\nKami akan menghubungi Anda segera.');
            
            // Reset form
            this.reset();
        } else {
            alert('Mohon isi semua field dengan lengkap.');
        }
    });
}

/* ============================================
   ADD ACTIVE STYLE TO NAV LINKS
   ============================================ */

const style = document.createElement('style');
style.textContent = `
    .nav-link.active {
        color: var(--color-accent);
        border-bottom-color: var(--color-accent);
    }
`;
document.head.appendChild(style);

/* ============================================
   ANIMATIONS ON SCROLL
   ============================================ */

const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -100px 0px'
};

const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observe service cards and news cards
document.querySelectorAll('.service-card, .news-card, .contact-card').forEach(card => {
    card.style.opacity = '0';
    card.style.transform = 'translateY(20px)';
    card.style.transition = 'all 0.6s ease';
    observer.observe(card);
});

/* ============================================
   RESPONSIVE NAVIGATION ADJUSTMENTS
   ============================================ */

function adjustNavbarForMobile() {
    const navbar = document.querySelector('.navbar');
    
    if (window.innerWidth <= 768) {
        navbar.style.padding = '0.75rem 0';
    } else {
        navbar.style.padding = '1rem 0';
    }
}

window.addEventListener('resize', adjustNavbarForMobile);
adjustNavbarForMobile();

/* ============================================
   UTILITY: SCROLL TO TOP BUTTON (Optional)
   ============================================ */

function createScrollToTopButton() {
    const button = document.createElement('button');
    button.innerHTML = '↑';
    button.className = 'scroll-to-top';
    button.style.cssText = `
        position: fixed;
        bottom: 30px;
        right: 30px;
        background-color: var(--color-secondary);
        color: white;
        border: none;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        font-size: 1.5rem;
        cursor: pointer;
        display: none;
        z-index: 999;
        transition: all 0.3s ease;
        font-weight: bold;
    `;
    
    document.body.appendChild(button);
    
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            button.style.display = 'flex';
            button.style.justifyContent = 'center';
            button.style.alignItems = 'center';
        } else {
            button.style.display = 'none';
        }
    });
    
    button.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    
    button.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-5px)';
        this.style.boxShadow = '0 4px 12px rgba(0, 82, 163, 0.3)';
    });
    
    button.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0)';
        this.style.boxShadow = 'none';
    });
}

createScrollToTopButton();

/* ============================================
   LOG INITIALIZATION
   ============================================ */

console.log('Dokar Wonosari - Portal Administrasi Desa');
console.log('Version 2.0');
console.log('Powered by Vanilla HTML, CSS & JavaScript');

}); // End of DOMContentLoaded
