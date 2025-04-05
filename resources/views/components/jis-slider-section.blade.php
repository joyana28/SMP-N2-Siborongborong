<!-- resources/views/components/jis-slider-section.blade.php -->
<section class="jis-slider">
    <div class="container-fluid p-0">
        <div class="slider-container">
            <div class="leaf-decoration">
                <!-- SVG Leaf decoration is handled by CSS background -->
            </div>
            
            <div class="slider-track">
                <!-- Slide 1 -->
                <div class="slider-item active" id="slide-1">
                    <div class="slider-content">
                        <div class="slider-image">
                            <img src="{{ asset('images/performance.png') }}" alt="School Performance">
                        </div>
                        <div class="slider-text">
                            <h2>At This School, students are challenged to be reflective and creative</h2>
                        </div>
                    </div>
                </div>
                
                <!-- Slide 2 -->
                <div class="slider-item" id="slide-2">
                    <div class="slider-content">
                        <div class="slider-image">
                            <img src="{{ asset('images/school-playground.jpg') }}" alt="School Playground">
                        </div>
                        <div class="slider-text">
                            <h2>To have experiences that instill resilience and resourcefulness</h2>
                        </div>
                    </div>
                </div>
                
                <!-- Slide 3 -->
                <div class="slider-item" id="slide-3">
                    <div class="slider-content">
                        <div class="slider-image">
                            <img src="{{ asset('images/classroom-activities.jpg') }}" alt="Classroom Activities">
                        </div>
                        <div class="slider-text">
                            <h2>Developing global citizens through innovative education</h2>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="navigation-arrows">
                <button class="arrow-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M15 18l-6-6 6-6"/>
                    </svg>
                </button>
                <button class="arrow-next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 18l6-6-6-6"/>
                    </svg>
                </button>
            </div>
            
            <div class="slider-icons">
                <div class="icon icon-info">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="16" x2="12" y2="12"></line>
                        <line x1="12" y1="8" x2="12.01" y2="8"></line>
                    </svg>
                </div>
                <div class="icon icon-edit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 20h9"></path>
                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                    </svg>
                </div>
                <div class="icon icon-download">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                </div>
            </div>

            <!-- Progress bar indicator -->
            <div class="slider-progress">
                <div class="progress-bar"></div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sliderItems = document.querySelectorAll('.slider-item');
            const prevButton = document.querySelector('.arrow-prev');
            const nextButton = document.querySelector('.arrow-next');
            const progressBar = document.querySelector('.progress-bar');
            
            let currentSlide = 0;
            const totalSlides = sliderItems.length;
            
            // Initialize progress bar
            updateProgressBar();
            
            // Auto slide functionality
            let slideInterval = setInterval(nextSlide, 5000);
            
            function resetInterval() {
                clearInterval(slideInterval);
                slideInterval = setInterval(nextSlide, 5000);
            }
            
            function updateProgressBar() {
                const progress = ((currentSlide + 1) / totalSlides) * 100;
                progressBar.style.width = `${progress}%`;
            }
            
            function showSlide(index) {
                // Hide all slides
                sliderItems.forEach(item => {
                    item.classList.remove('active');
                    item.classList.remove('previous');
                    item.style.transform = 'translateX(100%)';
                });
                
                // If there's a previous slide, mark it
                if (index > 0) {
                    sliderItems[index - 1].classList.add('previous');
                    sliderItems[index - 1].style.transform = 'translateX(-100%)';
                } else if (index === 0) {
                    sliderItems[sliderItems.length - 1].classList.add('previous');
                    sliderItems[sliderItems.length - 1].style.transform = 'translateX(-100%)';
                }
                
                // Show current slide
                sliderItems[index].classList.add('active');
                sliderItems[index].style.transform = 'translateX(0)';
                
                // Update progress bar
                updateProgressBar();
            }
            
            function nextSlide() {
                currentSlide = (currentSlide + 1) % totalSlides;
                showSlide(currentSlide);
                resetInterval();
            }
            
            function prevSlide() {
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                showSlide(currentSlide);
                resetInterval();
            }
            
            // Add event listeners
            prevButton.addEventListener('click', prevSlide);
            nextButton.addEventListener('click', nextSlide);
            
            // Initialize first slide
            showSlide(currentSlide);
        });
    </script>
    @endpush
</section>