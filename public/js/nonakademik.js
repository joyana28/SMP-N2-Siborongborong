// Function to show the zoom modal
function showNonakadZoomModal(src) {
    document.getElementById('nonakadZoomModal').style.display = 'flex';
    if(src) {
        document.getElementById('nonakadZoomModalImg').src = src;
        document.getElementById('nonakadZoomModalImg').style.display = 'block';
        document.getElementById('nonakadZoomModalPlaceholder').style.display = 'none';
    } else {
        document.getElementById('nonakadZoomModalImg').style.display = 'none';
        document.getElementById('nonakadZoomModalPlaceholder').style.display = 'flex';
    }
}

// Function to close the zoom modal
function closeNonakadZoomModal() {
    document.getElementById('nonakadZoomModal').style.display = 'none';
}

// Global function for new card design
function zoomNonakadPhoto(el) {
    if (el.tagName === 'IMG') {
        showNonakadZoomModal(el.src);
    } else {
        showNonakadZoomModal(null);
    }
}

// Initialize event listeners when the document is loaded
document.addEventListener('DOMContentLoaded', function() {
    // Fallback if image fails to load in zoom modal
    document.getElementById('nonakadZoomModalImg').onerror = function() {
        this.style.display = 'none';
        document.getElementById('nonakadZoomModalPlaceholder').style.display = 'flex';
    };

    // Close modal on ESC key
    document.addEventListener('keydown', function(e) {
        if(e.key === 'Escape') closeNonakadZoomModal();
    });

    // Close modal on click outside image
    document.getElementById('nonakadZoomModal').addEventListener('click', function(e) {
        if(e.target === this) closeNonakadZoomModal();
    });

    // Add click event to all prestasi images (legacy)
    const prestasiImages = document.querySelectorAll('.modern-idcard-photo');
    prestasiImages.forEach(img => {
        img.style.cursor = 'pointer';
        img.addEventListener('click', function() {
            showNonakadZoomModal(this.src);
        });
    });

    // Add click event to new idcard-modern images (if not using inline onclick)
    const modernImages = document.querySelectorAll('.idcard-photo');
    modernImages.forEach(img => {
        img.style.cursor = 'pointer';
        img.addEventListener('click', function() {
            showNonakadZoomModal(this.src);
        });
    });
    const modernPlaceholders = document.querySelectorAll('.idcard-photo-placeholder');
    modernPlaceholders.forEach(ph => {
        ph.style.cursor = 'pointer';
        ph.addEventListener('click', function() {
            showNonakadZoomModal(null);
        });
    });
});
