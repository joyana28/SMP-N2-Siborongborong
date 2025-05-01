document.addEventListener('DOMContentLoaded', function() {
    const galleryItems = document.querySelectorAll('.gallery-item');
    const lightbox = document.createElement('div');
    lightbox.className = 'lightbox';
    
    lightbox.innerHTML = `
        <div class="lightbox-content">
            <img src="" class="lightbox-image">
            <div class="lightbox-close">&times;</div>
            <div class="lightbox-nav lightbox-prev">&lt;</div>
            <div class="lightbox-nav lightbox-next">&gt;</div>
        </div>
    `;
    
    document.body.appendChild(lightbox);
    
    let currentIndex = 0;
    const lightboxImage = lightbox.querySelector('.lightbox-image');
    
    // Open lightbox
    galleryItems.forEach((item, index) => {
        const expandIcon = item.querySelector('.gallery-icon');
        expandIcon.addEventListener('click', (e) => {
            e.stopPropagation();
            currentIndex = index;
            const imgSrc = item.querySelector('.gallery-image').src;
            lightboxImage.src = imgSrc;
            lightbox.classList.add('active');
            document.body.style.overflow = 'hidden'; // Prevent scrolling when lightbox is open
        });
    });
    
    // Close lightbox
    lightbox.querySelector('.lightbox-close').addEventListener('click', () => {
        lightbox.classList.remove('active');
        document.body.style.overflow = ''; // Re-enable scrolling
    });
    
    // Navigation
    lightbox.querySelector('.lightbox-prev').addEventListener('click', (e) => {
        e.stopPropagation();
        currentIndex = (currentIndex - 1 + galleryItems.length) % galleryItems.length;
        lightboxImage.src = galleryItems[currentIndex].querySelector('.gallery-image').src;
    });
    
    lightbox.querySelector('.lightbox-next').addEventListener('click', (e) => {
        e.stopPropagation();
        currentIndex = (currentIndex + 1) % galleryItems.length;
        lightboxImage.src = galleryItems[currentIndex].querySelector('.gallery-image').src;
    });
    
    // Close on background click
    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) {
            lightbox.classList.remove('active');
            document.body.style.overflow = ''; // Re-enable scrolling
        }
    });

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (!lightbox.classList.contains('active')) return;
        
        if (e.key === 'Escape') {
            lightbox.classList.remove('active');
            document.body.style.overflow = '';
        } else if (e.key === 'ArrowLeft') {
            currentIndex = (currentIndex - 1 + galleryItems.length) % galleryItems.length;
            lightboxImage.src = galleryItems[currentIndex].querySelector('.gallery-image').src;
        } else if (e.key === 'ArrowRight') {
            currentIndex = (currentIndex + 1) % galleryItems.length;
            lightboxImage.src = galleryItems[currentIndex].querySelector('.gallery-image').src;
        }
    });

    // Touch swipe support
    let touchStartX = 0;
    let touchEndX = 0;

    lightbox.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    }, false);

    lightbox.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    }, false);

    function handleSwipe() {
        const swipeThreshold = 50;
        const swipeLength = touchEndX - touchStartX;

        if (Math.abs(swipeLength) > swipeThreshold) {
            if (swipeLength > 0) {
                // Swipe right - show previous
                currentIndex = (currentIndex - 1 + galleryItems.length) % galleryItems.length;
            } else {
                // Swipe left - show next
                currentIndex = (currentIndex + 1) % galleryItems.length;
            }
            lightboxImage.src = galleryItems[currentIndex].querySelector('.gallery-image').src;
        }
    }
}); 