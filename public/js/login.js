        document.addEventListener('DOMContentLoaded', function() {
            // Initial animations for page load
            setTimeout(() => {
                document.querySelector('.login-container').style.opacity = '1';
                document.querySelector('.login-container').style.transform = 'translateY(0)';
            }, 300);

            // Enhanced hover animations for buttons
            const buttons = document.querySelectorAll('button');
            buttons.forEach(button => {
                button.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-3px)';
                    
                    if (this.classList.contains('view-more-btn')) {
                        this.style.boxShadow = '0 5px 15px rgba(255, 255, 255, 0.3)';
                    } else if (this.classList.contains('login-btn')) {
                        this.style.boxShadow = '0 5px 15px rgba(0, 102, 255, 0.2)';
                    } else {
                        this.style.boxShadow = '0 5px 15px rgba(0, 102, 255, 0.3)';
                    }
                    
                    // Add ripple effect
                    const ripple = document.createElement('span');
                    ripple.classList.add('ripple');
                    ripple.style.position = 'absolute';
                    ripple.style.borderRadius = '50%';
                    ripple.style.transform = 'scale(0)';
                    ripple.style.animation = 'ripple 0.6s linear';
                    ripple.style.backgroundColor = 'rgba(255, 255, 255, 0.3)';
                    
                    this.appendChild(ripple);
                    
                    setTimeout(() => {
                        ripple.remove();
                    }, 700);
                });
                
                button.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                    this.style.boxShadow = this.classList.contains('login-btn') || this.classList.contains('signup-btn') ? 
                        '0 2px 10px rgba(0, 0, 0, 0.05)' : 'none';
                });
                
                // Add click effect
                button.addEventListener('mousedown', function() {
                    this.style.transform = 'translateY(-1px)';
                });
                
                button.addEventListener('mouseup', function() {
                    this.style.transform = 'translateY(-3px)';
                });
            });

            // Enhanced focus effects for input fields
            const inputs = document.querySelectorAll('input[type="email"], input[type="password"]');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.style.transform = 'translateY(-2px)';
                    this.style.boxShadow = '0 0 0 3px rgba(0, 102, 255, 0.2), 0 5px 15px rgba(0, 0, 0, 0.1)';
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.style.transform = 'translateY(0)';
                    this.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.05)';
                });
            });

            // Animate diagonal lines
            function animateLines() {
                const lines = document.querySelectorAll('.line');
                lines.forEach(line => {
                    const randomSpeed = Math.random() * 15 + 10; // Between 10-25s
                    line.style.animationDuration = `${randomSpeed}s`;
                });
            }
            
            animateLines();
            
            // Dynamic stars twinkling
            function animateStars() {
                const stars = document.querySelectorAll('.star');
                stars.forEach(star => {
                    const size = Math.random() * 2 + 1;
                    star.style.width = `${size}px`;
                    star.style.height = `${size}px`;
                    
                    const randomDelay = Math.random() * 5;
                    const randomDuration = Math.random() * 3 + 2;
                    
                    star.style.animationDelay = `${randomDelay}s`;
                    star.style.animationDuration = `${randomDuration}s`;
                });
            }
            
            animateStars();
            
            // Create mouse follow light effect on left panel
            const leftPanel = document.querySelector('.left-panel');
            const lightEffect = document.createElement('div');
            lightEffect.classList.add('mouse-light');
            lightEffect.style.position = 'absolute';
            lightEffect.style.width = '150px';
            lightEffect.style.height = '150px';
            lightEffect.style.borderRadius = '50%';
            lightEffect.style.background = 'radial-gradient(circle, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0) 70%)';
            lightEffect.style.pointerEvents = 'none';
            lightEffect.style.zIndex = '2';
            leftPanel.appendChild(lightEffect);
            
            leftPanel.addEventListener('mousemove', (e) => {
                const rect = leftPanel.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                lightEffect.style.left = `${x - 75}px`;
                lightEffect.style.top = `${y - 75}px`;
                lightEffect.style.opacity = '1';
            });
            
            leftPanel.addEventListener('mouseleave', () => {
                lightEffect.style.opacity = '0';
            });

            // Add keyframe animation style
            const style = document.createElement('style');
            style.textContent = `
                @keyframes ripple {
                    to {
                        transform: scale(4);
                        opacity: 0;
                    }
                }
                
                .login-container {
                    opacity: 0;
                    transform: translateY(20px);
                    transition: all 0.8s ease-out;
                }
                
                .ripple {
                    width: 10px;
                    height: 10px;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%) scale(0);
                }
            `;
            document.head.appendChild(style);
        });
