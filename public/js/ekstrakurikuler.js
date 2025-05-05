document.addEventListener('DOMContentLoaded', function() {
    // Assign animation delays to list items
    const listItems = document.querySelectorAll('.ekstra-intro-list li');
    listItems.forEach((item, index) => {
        item.style.setProperty('--item-index', index);
    });

    // Feature cards hover effect
    const featureCards = document.querySelectorAll('.feature-card');
    featureCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            featureCards.forEach(c => c.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // Navigation dots functionality
    const navDots = document.querySelectorAll('.nav-dot');
    const features = document.querySelectorAll('.feature-card');
    
    navDots.forEach((dot, index) => {
        dot.addEventListener('click', function() {
            // Remove active class from all dots
            navDots.forEach(d => {
                d.classList.remove('active');
                d.querySelector('.dot').style.width = '8px';
                d.querySelector('.dot').style.height = '8px';
            });
            
            // Add active class to clicked dot
            this.classList.add('active');
            this.querySelector('.dot').style.width = '16px';
            this.querySelector('.dot').style.height = '16px';
            
            // Update the highlighted feature card
            features.forEach(feature => feature.classList.remove('highlighted'));
            if (features[index]) {
                features[index].classList.add('highlighted');
            }
        });
    });

    // Initialize AOS animation library if available
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});