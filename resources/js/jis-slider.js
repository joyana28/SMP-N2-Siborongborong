// public/js/jis-slider.js
document.addEventListener('DOMContentLoaded', function() {
    const sliderItems = document.querySelectorAll('.slider-item');
    const prevButton = document.querySelector('.arrow-prev');
    const nextButton = document.querySelector('.arrow-next');
    let currentIndex = 0;
    
    // Initialize the slider
    function initSlider() {
        sliderItems.forEach((item, index) => {
            if (index === currentIndex) {
                item.classList.add('active');
            } else {
                item.classList.remove('active');
                if (index > currentIndex) {
                    item.style.transform = 'translateX(100%)';
                } else {
                    item.style.transform = 'translateX(-100%)';
                }
            }
        });
    }
    
    // Go to next slide
    function nextSlide() {
        sliderItems[currentIndex].classList.remove('active');
        sliderItems[currentIndex].style.transform = 'translateX(-100%)';
        
        currentIndex = (currentIndex + 1) % sliderItems.length;
        
        sliderItems[currentIndex].style.transform = 'translateX(0)';
        sliderItems[currentIndex].classList.add('active');
    }
    
    // Go to previous slide
    function prevSlide() {
        sliderItems[currentIndex].classList.remove('active');
        sliderItems[currentIndex].style.transform = 'translateX(100%)';
        
        currentIndex = (currentIndex - 1 + sliderItems.length) % sliderItems.length;
        
        sliderItems[currentIndex].style.transform = 'translateX(0)';
        sliderItems[currentIndex].classList.add('active');
    }
    
    // Event listeners
    nextButton.addEventListener('click', nextSlide);
    prevButton.addEventListener('click', prevSlide);
    
    // Auto slide every 5 seconds
    let slideInterval = setInterval(nextSlide, 5000);
    
    // Pause auto slide on hover
    const sliderContainer = document.querySelector('.slider-container');
    sliderContainer.addEventListener('mouseenter', () => {
        clearInterval(slideInterval);
    });
    
    sliderContainer.addEventListener('mouseleave', () => {
        slideInterval = setInterval(nextSlide, 5000);
    });
    
    // Initialize the slider on page load
    initSlider();
    
    // Add touch support for mobile devices
    let touchStartX = 0;
    let touchEndX = 0;
    
    sliderContainer.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    });
    
    sliderContainer.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    });
    
    function handleSwipe() {
        if (touchEndX < touchStartX) {
            nextSlide(); // Swipe left, go to next slide
        }
        if (touchEndX > touchStartX) {
            prevSlide(); // Swipe right, go to previous slide
        }
    }
});