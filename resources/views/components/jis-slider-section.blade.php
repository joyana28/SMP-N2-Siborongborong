<!-- resources/views/components/jis-slider-section.blade.php -->
<section class="jis-slider">
    <div class="container-fluid p-0">
        <div class="slider-container">
            <div class="leaf-decoration">
                <!-- SVG Leaf decoration pattern -->
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
        </div>
    </div>
</section>