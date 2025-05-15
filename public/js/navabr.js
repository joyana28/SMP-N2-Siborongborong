document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.querySelector('.hamburger');
    const navMenu = document.querySelector('.nav-menu');
    const menuOverlay = document.querySelector('.menu-overlay');
    const dropdownItems = document.querySelectorAll('.nav-item-dropdown');
    
    // Add dropdown toggle buttons to dropdown items
    dropdownItems.forEach(item => {
        const toggleBtn = document.createElement('button');
        toggleBtn.className = 'dropdown-toggle';
        item.appendChild(toggleBtn);
        
        toggleBtn.addEventListener('click', (e) => {
            e.preventDefault();
            item.classList.toggle('active');
        });
    });
    
    // Toggle mobile menu
    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        navMenu.classList.toggle('active');
        menuOverlay.classList.toggle('active');
        document.body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : '';
    });
    
    // Close mobile menu when overlay is clicked
    menuOverlay?.addEventListener('click', () => {
        hamburger.classList.remove('active');
        navMenu.classList.remove('active');
        menuOverlay.classList.remove('active');
        document.body.style.overflow = '';
    });
    
    // Close mobile menu on window resize to desktop size
    window.addEventListener('resize', () => {
        if (window.innerWidth > 768) {
            hamburger.classList.remove('active');
            navMenu.classList.remove('active');
            menuOverlay.classList.remove('active');
            document.body.style.overflow = '';
            
            // Reset all active dropdowns
            dropdownItems.forEach(item => {
                item.classList.remove('active');
            });
        }
    });
});