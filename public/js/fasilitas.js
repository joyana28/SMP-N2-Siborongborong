/**
 * Logistics & Transport Website JavaScript
 * Adds animations, interactivity and smooth scrolling
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS (Animate on Scroll)
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        mirror: false
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Fade in elements as they come into view
    const fadeElements = document.querySelectorAll('.fade-in');
    
    const fadeInObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                fadeInObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.3
    });
    
    fadeElements.forEach(element => {
        fadeInObserver.observe(element);
    });

    // Add fade-in class to sections
    document.querySelectorAll('section').forEach(section => {
        if (!section.classList.contains('hero-section')) {
            section.classList.add('fade-in');
        }
    });

    // Add animation to feature items
    const featureItems = document.querySelectorAll('.feature-item');
    featureItems.forEach((item, index) => {
        item.style.animationDelay = `${index * 0.2}s`;
        item.classList.add('fade-in');
    });

    // Service cards hover effect
    const serviceCards = document.querySelectorAll('.service-card');
    serviceCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.querySelector('.service-icon').style.transform = 'rotateY(360deg)';
            this.querySelector('.service-icon').style.transition = 'transform 0.8s ease';
        });
        
        card.addEventListener('mouseleave', function() {
            this.querySelector('.service-icon').style.transform = 'rotateY(0)';
        });
    });

    // Parallax effect for hero section
    window.addEventListener('scroll', function() {
        const heroSection = document.querySelector('.hero-section');
        const scrollPosition = window.pageYOffset;
        
        if (heroSection) {
            heroSection.style.backgroundPositionY = `${scrollPosition * 0.5}px`;
        }
    });

    // Add dynamic triangle shapes to service cards
    serviceCards.forEach(card => {
        const triangle = document.createElement('div');
        triangle.classList.add('card-triangle');
        triangle.style.position = 'absolute';
        triangle.style.top = '0';
        triangle.style.right = '0';
        triangle.style.width = '0';
        triangle.style.height = '0';
        triangle.style.borderStyle = 'solid';
        triangle.style.borderWidth = '0 50px 50px 0';
        triangle.style.borderColor = 'transparent #1a56a7 transparent transparent';
        triangle.style.opacity = '0.2';
        triangle.style.transition = 'opacity 0.3s ease';
        
        card.appendChild(triangle);
        
        card.addEventListener('mouseenter', function() {
            triangle.style.opacity = '0.5';
        });
        
        card.addEventListener('mouseleave', function() {
            triangle.style.opacity = '0.2';
        });
    });

    // Dynamic counter animation for stats (if added later)
    function animateCounter(element, target, duration) {
        let start = 0;
        const increment = target / (duration / 16);
        
        const timer = setInterval(() => {
            start += increment;
            element.textContent = Math.floor(start);
            
            if (start >= target) {
                element.textContent = target;
                clearInterval(timer);
            }
        }, 16);
    }

    // Apply counter animation if stats are added
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const countTarget = parseInt(entry.target.getAttribute('data-count'));
                animateCounter(entry.target, countTarget, 2000);
                counterObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.7
    });
    
    document.querySelectorAll('.counter').forEach(counter => {
        counterObserver.observe(counter);
    });

    // Add floating animation to phone icon
    const phoneIcon = document.querySelector('.phone-icon');
    if (phoneIcon) {
        setInterval(() => {
            phoneIcon.classList.toggle('pulse');
        }, 2000);
    }

    // Add hover effect to partner logos
    const partnerLogos = document.querySelectorAll('.partner-logo');
    partnerLogos.forEach(logo => {
        logo.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.1)';
            this.style.opacity = '1';
        });
        
        logo.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
            this.style.opacity = '0.7';
        });
    });

    // Add preloader animation
    const body = document.body;
    body.classList.add('loaded');
    
    // Initialize any tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
});