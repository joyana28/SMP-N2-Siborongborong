
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Expertise Services</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/fasilitas.css') }}">
    
    
    
</head>
<body>

@include('layouts.frontend.navbar')
    <!-- Header Section -->

    <header>
    <div class="header-wrapper">
        <div class="content-area">
            <div class="small-text" data-aos="fade-up" data-aos-delay="100">SARANA LENGKAP, PRESTASI HEBAT</div>
            <h1 class="header-title" data-aos="fade-up" data-aos-delay="200">
            FASILITAS UNGGULAN<br>
            EDUKASI OPTIMAL<br>
            </h1>
            <a href="#services" class="cta-button" data-aos="fade-up" data-aos-delay="300">EXPLORE NOW</a>
            <div class="arrow-icon" data-aos="fade-up" data-aos-delay="400">←</div>
        </div>
        <div class="image-area">
            <!-- This is where the image would go in a real implementation -->
        </div>
        <div class="diagonal-divider"></div>
    </div>
    
    
</header>

    <!-- Services Section -->
    <section class="services-section" id="services">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>WHAT WE'RE OFFERING TO<br>OUR CUSTOMERS</h2>
            </div>
            <div class="section-description" data-aos="fade-up" data-aos-delay="100">
                Lorem ipsum dolor sit amet consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam fermentum tellus.
            </div>
            <div class="services-grid">
                <div class="service-card web-dev" data-aos="fade-up" data-aos-delay="150">
                    <div class="service-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>WEB<br>DEVELOPMENT</h3>
                </div>
                <div class="service-card consulting" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3>ONLINE<br>CONSULTING SERVICES</h3>
                </div>
                <div class="service-card security" data-aos="fade-up" data-aos-delay="250">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>DEV &<br>CYBER SECURITY</h3>
                </div>
                <div class="service-card web-hosting" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-icon">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3>WEB<br>TECH SOLUTIONS</h3>
                </div>
                <div class="service-card maintenance" data-aos="fade-up" data-aos-delay="350">
                    <div class="service-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>PRODUCTS<br>& MAINTENANCE</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="features-container">
                <div class="features-image" data-aos="fade-right">
                    <img src="https://via.placeholder.com/500x350/f5f5f5/cccccc" alt="IT Team Working">
                </div>
                <div class="features-content" data-aos="fade-left">
                    <div class="counter-item">
                        <div class="counter-number" id="projectCounter">13</div>
                        <div class="counter-text">YEARS IN THE INDUSTRY</div>
                    </div>
                    <h2>WHAT WE'RE OFFERING<br>TO OUR CUSTOMERS</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Technical Support</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Development Support</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Customer Service</span>
                        </div>
                    </div>
                    <div class="button-group">
                        <a href="#" class="btn btn-primary">CONTACT</a>
                        <a href="#" class="btn btn-outline">READ MORE</a>
                        <a href="#" class="btn btn-outline">CALL NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <footer>
        <div class="container">
            <div class="partner-logos">
                <img src="https://via.placeholder.com/120x50/f5f5f5/999999" alt="Partner 1" class="partner-logo" data-aos="fade-up">
                <img src="https://via.placeholder.com/120x50/f5f5f5/999999" alt="Partner 2" class="partner-logo" data-aos="fade-up" data-aos-delay="100">
                <img src="https://via.placeholder.com/120x50/f5f5f5/999999" alt="Partner 3" class="partner-logo" data-aos="fade-up" data-aos-delay="200">
                <img src="https://via.placeholder.com/120x50/f5f5f5/999999" alt="Partner 4" class="partner-logo" data-aos="fade-up" data-aos-delay="300">
                <img src="https://via.placeholder.com/120x50/f5f5f5/999999" alt="Partner 5" class="partner-logo" data-aos="fade-up" data-aos-delay="400">
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        // Initialize AOS animation library
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        // Counter animation
        function animateCounter(id, start, end, duration) {
            let startTimestamp = null;
            const element = document.getElementById(id);
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                element.innerHTML = Math.floor(progress * (end - start) + start);
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        }

        // Run animations when in view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    if (entry.target.id === 'projectCounter') {
                        animateCounter('projectCounter', 0, 13, 2000);
                    }
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        // Observe counter elements
        document.getElementById('projectCounter') && observer.observe(document.getElementById('projectCounter'));

        // Adding interactive hover effects
        const serviceCards = document.querySelectorAll('.service-card');
        serviceCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.backgroundColor = '#f9f9f9';
            });
            card.addEventListener('mouseleave', function() {
                this.style.backgroundColor = '#ffffff';
            });
        });
    </script>
    <script>
// Animation initialization
document.addEventListener('DOMContentLoaded', function() {
    // Simple AOS (Animate On Scroll) implementation
    const animateElements = document.querySelectorAll('[data-aos]');
    
    function checkInView() {
        animateElements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementVisible = 150;
            
            if (elementTop < window.innerHeight - elementVisible) {
                element.classList.add('aos-animate');
            }
        });
    }
    
    // Initial check
    setTimeout(checkInView, 100);
    
    // Check on scroll
    window.addEventListener('scroll', checkInView);
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
});
</script>
</body>
</html>