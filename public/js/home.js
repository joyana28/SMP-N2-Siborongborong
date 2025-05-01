document.addEventListener('DOMContentLoaded', function() {
    // Mobile Menu Toggle
    const menuBtn = document.querySelector('.mobile-menu-btn');
    const menu = document.querySelector('.menu');
    
    if (menuBtn) {
        menuBtn.addEventListener('click', function() {
            menu.classList.toggle('active');
            if (menu.classList.contains('active')) {
                menuBtn.innerHTML = '<i class="fas fa-times"></i>';
            } else {
                menuBtn.innerHTML = '<i class="fas fa-bars"></i>';
            }
        });
    }
    
    // Navbar Scroll Effect
    const navbar = document.querySelector('.navbar');
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.style.padding = '10px 0';
            navbar.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
        } else {
            navbar.style.padding = '15px 0';
            navbar.style.boxShadow = 'none';
        }
    });
    
    // Testimonial Slider
    const dots = document.querySelectorAll('.dot');
    
    if (dots.length > 0) {
        dots.forEach((dot, index) => {
            dot.addEventListener('click', function() {
                // Remove active class from all dots
                dots.forEach(d => d.classList.remove('active'));
                
                // Add active class to clicked dot
                this.classList.add('active');
                
                // Implement slider functionality here
                // This would typically involve showing/hiding testimonials
            });
        });
    }
    
    // Initialize GSAP animations
    if (typeof gsap !== 'undefined') {
        // Register ScrollTrigger plugin
        gsap.registerPlugin(ScrollTrigger);
        
        // Animate section titles on scroll
        const sectionTitles = document.querySelectorAll('.section-title h2');
        
        sectionTitles.forEach(title => {
            gsap.from(title, {
                scrollTrigger: {
                    trigger: title,
                    start: "top 80%",
                    toggleActions: "play none none none"
                },
                y: 50,
                opacity: 0,
                duration: 1
            });
        });
        
        // Animate feature boxes
        const featureBoxes = document.querySelectorAll('.feature-box');
        
        featureBoxes.forEach((box, index) => {
            gsap.from(box, {
                scrollTrigger: {
                    trigger: box,
                    start: "top 80%",
                    toggleActions: "play none none none"
                },
                y: 50,
                opacity: 0,
                duration: 0.6,
                delay: index * 0.2
            });
        });
        
        // Animate service boxes
        const serviceBoxes = document.querySelectorAll('.service-box');
        
        serviceBoxes.forEach((box, index) => {
            gsap.from(box, {
                scrollTrigger: {
                    trigger: box,
                    start: "top 80%",
                    toggleActions: "play none none none"
                },
                y: 50,
                opacity: 0,
                duration: 0.6,
                delay: index * 0.15
            });
        });
        
        // Animate testimonials
        const testimonials = document.querySelectorAll('.testimonial-item');
        
        testimonials.forEach((item, index) => {
            gsap.from(item, {
                scrollTrigger: {
                    trigger: item,
                    start: "top 80%",
                    toggleActions: "play none none none"
                },
                y: 50,
                opacity: 0,
                duration: 0.6,
                delay: index * 0.2
            });
        });
        
        // Animate project items
        const projectItems = document.querySelectorAll('.project-item');
        
        projectItems.forEach((item, index) => {
            gsap.from(item, {
                scrollTrigger: {
                    trigger: item,
                    start: "top 80%",
                    toggleActions: "play none none none"
                },
                y: 50,
                opacity: 0,
                duration: 0.6,
                delay: index * 0.2
            });
        });
        
        // Animate pricing boxes
        const pricingBoxes = document.querySelectorAll('.pricing-box');
        
        pricingBoxes.forEach((box, index) => {
            gsap.from(box, {
                scrollTrigger: {
                    trigger: box,
                    start: "top 80%",
                    toggleActions: "play none none none"
                },
                y: 50,
                opacity: 0,
                duration: 0.6,
                delay: index * 0.2
            });
        });
        
        // Animate contact form
        const contactForm = document.querySelector('.contact-form');
        
        if (contactForm) {
            gsap.from(contactForm, {
                scrollTrigger: {
                    trigger: contactForm,
                    start: "top 80%",
                    toggleActions: "play none none none"
                },
                x: 50,
                opacity: 0,
                duration: 0.8
            });
        }
        
        // Animate blog cards
        const blogCards = document.querySelectorAll('.blog-card');
        
        blogCards.forEach((card, index) => {
            gsap.from(card, {
                scrollTrigger: {
                    trigger: card,
                    start: "top 80%",
                    toggleActions: "play none none none"
                },
                y: 50,
                opacity: 0,
                duration: 0.6,
                delay: index * 0.2
            });
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
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
                
                // Close mobile menu if open
                if (menu && menu.classList.contains('active')) {
                    menu.classList.remove('active');
                    menuBtn.innerHTML = '<i class="fas fa-bars"></i>';
                }
            }
        });
    });
    
    // Form submission animation
    const contactFormElement = document.querySelector('.contact-form form');
    
    if (contactFormElement) {
        contactFormElement.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form inputs
            const inputs = this.querySelectorAll('input, textarea');
            
            // Validate form (simple validation)
            let isValid = true;
            
            inputs.forEach(input => {
                if (input.value.trim() === '') {
                    isValid = false;
                    input.style.borderColor = 'red';
                } else {
                    input.style.borderColor = '';
                }
            });
            
            if (isValid) {
                // Show success message or submit form
                const button = this.querySelector('button[type="submit"]');
                button.innerHTML = 'Sending...';
                
                // Simulate form submission
                setTimeout(() => {
                    button.innerHTML = 'Message Sent!';
                    button.style.backgroundColor = '#28a745';
                    
                    // Reset form
                    inputs.forEach(input => {
                        input.value = '';
                    });
                    
                    // Reset button after delay
                    setTimeout(() => {
                        button.innerHTML = 'Send Message';
                        button.style.backgroundColor = '';
                    }, 3000);
                }, 1500);
            }
        });
    }
    
    // Add hover effects to buttons
    const buttons = document.querySelectorAll('.btn-primary, .btn-secondary');
    
    buttons.forEach(button => {
        button.addEventListener('mouseenter', function() {
            gsap.to(this, {
                scale: 1.05,
                duration: 0.3
            });
        });
        
        button.addEventListener('mouseleave', function() {
            gsap.to(this, {
                scale: 1,
                duration: 0.3
            });
        });
    });
});

/* hero-section javascript */

document.addEventListener('DOMContentLoaded', function() {
    // Add hover effects and animations for cards
    const cards = document.querySelectorAll('.card');
    
    cards.forEach(card => {
        // Add mouse hover animations
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
            const icon = this.querySelector('.card-icon i');
            icon.style.transform = 'scale(1.2)';
            icon.style.transition = 'transform 0.3s ease';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            const icon = this.querySelector('.card-icon i');
            icon.style.transform = 'scale(1)';
        });
        
        // Add initial entrance animation
        setTimeout(() => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'all 0.5s ease';
            
            setTimeout(() => {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 100);
        }, 100);
    });
    
    // Function to set the foreground image
    function setHeroImage(imageUrl) {
        const foregroundImage = document.querySelector('.foreground-image');
        if (foregroundImage) {
            foregroundImage.style.backgroundImage = `url('${imageUrl}')`;
        }
    }
    
    // Example of setting a hero image (you can call this function with any image URL)
    // setHeroImage('../images/students.jpg');
    
    // For demonstration, you might want to attach this function to the window object
    // so it can be called from outside this script
    window.setHeroImage = setHeroImage;
});

/* services-section */
document.addEventListener('DOMContentLoaded', function() {
    const serviceBoxes = document.querySelectorAll('.service-box');
    
    serviceBoxes.forEach(box => {
        const readMoreBtn = box.querySelector('.read-more');
        
        // Expand card on click
        box.addEventListener('click', function(e) {
            // Don't toggle if clicking on read more button (handled separately)
            if (e.target === readMoreBtn || readMoreBtn.contains(e.target)) {
                return;
            }
            
            // Toggle current box
            this.classList.toggle('expanded');
            
            // Update read more text
            const readMore = this.querySelector('.read-more');
            if (this.classList.contains('expanded')) {
                readMore.textContent = 'Tutup';
            } else {
                readMore.textContent = 'Baca selengkapnya';
            }
            
            // Close other boxes
            serviceBoxes.forEach(otherBox => {
                if (otherBox !== this && otherBox.classList.contains('expanded')) {
                    otherBox.classList.remove('expanded');
                    otherBox.querySelector('.read-more').textContent = 'Baca selengkapnya';
                }
            });
        });
        
        // Handle read more button click
        readMoreBtn.addEventListener('click', function(e) {
            e.stopPropagation(); // Prevent triggering the card click event
            const parentBox = this.closest('.service-box');
            
            parentBox.classList.toggle('expanded');
            
            if (parentBox.classList.contains('expanded')) {
                this.textContent = 'Tutup';
            } else {
                this.textContent = 'Baca selengkapnya';
            }
            
            // Close other boxes
            serviceBoxes.forEach(otherBox => {
                if (otherBox !== parentBox && otherBox.classList.contains('expanded')) {
                    otherBox.classList.remove('expanded');
                    otherBox.querySelector('.read-more').textContent = 'Baca selengkapnya';
                }
            });
        });
        
        // Add hover effects and animations
        box.addEventListener('mouseenter', function() {
            // Add subtle animation to icon
            const icon = this.querySelector('.service-icon i');
            icon.style.transform = 'scale(1.2)';
            setTimeout(() => {
                icon.style.transform = 'scale(1)';
            }, 300);
        });
        
        box.addEventListener('mouseleave', function() {
            const icon = this.querySelector('.service-icon i');
            icon.style.transform = 'scale(1)';
        });
    });
    
    // Add particlesJS background effect to service icons (optional - requires particles.js library)
    // Uncomment if you have particles.js included in your project
    /*
    document.querySelectorAll('.service-icon').forEach((icon, index) => {
        const particlesId = `particles-${index}`;
        const particlesDiv = document.createElement('div');
        particlesDiv.id = particlesId;
        particlesDiv.className = 'particles-background';
        icon.appendChild(particlesDiv);
        
        particlesJS(particlesId, {
            particles: {
                number: { value: 10, density: { enable: true, value_area: 100 } },
                color: { value: "#ffffff" },
                shape: { type: "circle" },
                opacity: { value: 0.5, random: false },
                size: { value: 3, random: true },
                line_linked: { enable: false },
                move: { enable: true, speed: 2, direction: "none", random: true, out_mode: "out" }
            }
        });
    });
    */
});
document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.stat-number');
    
    const animateCounter = (element) => {
      const target = parseInt(element.getAttribute('data-target'));
      const duration = 2000; // 2 seconds
      const steps = 50;
      const stepValue = target / steps;
      let current = 0;
      
      const timer = setInterval(() => {
        current += stepValue;
        element.textContent = Math.round(current);
        
        if (current >= target) {
          element.textContent = target;
          clearInterval(timer);
        }
      }, duration / steps);
    };
    
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });
    
    counters.forEach(counter => {
      counter.textContent = '0';
      observer.observe(counter);
    });
  });


    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');

                const filterValue = this.getAttribute('data-filter');

                galleryItems.forEach(item => {
                    if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'translateY(0)';
                        }, 100);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 500);
                    }
                });
            });
        });
    });
