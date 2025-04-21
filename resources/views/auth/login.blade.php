

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: rgb(3, 37, 128);
            overflow: hidden;
        }

        .login-container {
            display: flex;
            background-color: white;
            border-radius: 16px;
            overflow: hidden;
            width: 90%;
            max-width: 1100px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 10;
        }

        .left-panel {
            flex: 1;
            background: linear-gradient(135deg, #0046cc 0%, #0077ff 100%);
            position: relative;
            color: white;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden;
        }

        .light-effect {
            position: absolute;
            bottom: -100px;
            left: -100px;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(0, 183, 255, 0.4) 0%, rgba(0, 123, 255, 0) 70%);
            border-radius: 50%;
            filter: blur(30px);
            animation: pulse 8s infinite alternate;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
                opacity: 0.3;
            }
            100% {
                transform: scale(1.5);
                opacity: 0.6;
            }
        }

        .diagonal-lines {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            z-index: 1;
        }

        .line {
            position: absolute;
            height: 200%;
            width: 1px;
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0));
            animation: moveLines 15s linear infinite;
            transform: rotate(45deg) translateX(-50%);
            transform-origin: 0 0;
        }

        @keyframes moveLines {
            0% {
                transform: rotate(45deg) translateX(-50%) translateY(-100%);
            }
            100% {
                transform: rotate(45deg) translateX(-50%) translateY(100%);
            }
        }

        .stars {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 0;
        }

        .star {
            position: absolute;
            width: 2px;
            height: 2px;
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            animation: twinkle 5s infinite alternate;
        }

        @keyframes twinkle {
            0% {
                opacity: 0.2;
            }
            100% {
                opacity: 0.8;
            }
        }

        .logo {
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
        }

        .logo-icon {
            width: 32px;
            height: 32px;
            background-color: white;
            border-radius: 50%;
            margin-right: 10px;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.5);
        }

        .logo-text {
            font-size: 20px;
            font-weight: bold;
        }

        .logo-subtext {
            font-size: 16px;
            opacity: 0.8;
            letter-spacing: 1px;
        }

        .welcome-text {
            position: relative;
            z-index: 2;
            margin-top: 100px;
        }

        .welcome-text h1 {
            font-size: 60px;
            font-weight: bold;
            margin-bottom: 20px;
            text-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            animation: fadeInUp 1s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .welcome-text p {
            font-size: 16px;
            opacity: 0.8;
            max-width: 400px;
            margin-bottom: 30px;
            animation: fadeInUp 1s ease-out 0.2s;
            animation-fill-mode: both;
        }

        .view-more-btn {
            background-color: transparent;
            border: 1px solid rgba(255, 255, 255, 0.5);
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.4s ease;
            z-index: 2;
            position: relative;
            display: inline-block;
            width: fit-content;
            animation: fadeInUp 1s ease-out 0.4s;
            animation-fill-mode: both;
            overflow: hidden;
        }

        .view-more-btn:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            transition: all 0.4s ease-in-out;
            z-index: -1;
        }

        .view-more-btn:hover:before {
            left: 0;
        }

        .view-more-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .view-more-btn:active {
            transform: translateY(-1px);
        }

        .right-panel {
            flex: 1;
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: white;
            position: relative;
            z-index: 5;
        }

        .right-panel::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 20px;
            height: 100%;
            background: linear-gradient(to right, rgba(0, 0, 0, 0.05), rgba(0, 0, 0, 0));
            z-index: -1;
        }

        .form-container {
            max-width: 400px;
            margin: 0 auto;
            width: 100%;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-field {
            position: relative;
            margin-bottom: 20px;
            animation: fadeInRight 0.8s ease-out;
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .input-icon {
            width: 24px;
            height: 24px;
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            background-color: #e6e9f2;
            border-radius: 6px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 18px 18px 18px 50px;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            transition: all 0.3s ease;
            background-color: #f9fafd;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            color: #4a5568;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(0, 102, 255, 0.2), 0 2px 10px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
        }

        .checkbox-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            animation: fadeIn 0.8s ease-out 0.4s;
            animation-fill-mode: both;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .remember-me {
            display: flex;
            align-items: center;
        }

        .remember-me input[type="checkbox"] {
            width: 16px;
            height: 16px;
            margin-right: 8px;
            cursor: pointer;
            position: relative;
            border: 1px solid #0066ff;
            appearance: none;
            border-radius: 3px;
            transition: all 0.3s ease;
        }

        .remember-me input[type="checkbox"]:checked {
            background-color: #0066ff;
        }

        .remember-me input[type="checkbox"]:checked::after {
            content: '';
            position: absolute;
            left: 5px;
            top: 2px;
            width: 5px;
            height: 9px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        .remember-me label {
            color: #7b8794;
            font-size: 14px;
        }

        .forgot-password {
            color: #0066ff;
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .forgot-password:hover {
            color: #0055ff;
            text-decoration: underline;
        }

        .login-btn {
            width: 100%;
            padding: 15px;
            background-color: #f9fafd;
            border: none;
            border-radius: 12px;
            color: #0066ff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.4s ease;
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            animation: fadeIn 0.8s ease-out 0.6s;
            animation-fill-mode: both;
            position: relative;
            overflow: hidden;
        }

        .login-btn:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(0, 102, 255, 0.1);
            transition: all 0.4s ease-in-out;
            z-index: -1;
        }

        .login-btn:hover:before {
            left: 0;
        }

        .login-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 102, 255, 0.2);
        }

        .signup-text {
            text-align: center;
            color: #7b8794;
            font-size: 14px;
            margin-bottom: 20px;
            animation: fadeIn 0.8s ease-out 0.8s;
            animation-fill-mode: both;
        }

        .signup-btn {
            display: block;
            width: 100%;
            padding: 15px;
            background-color: #0066ff;
            border: none;
            border-radius: 12px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.4s ease;
            animation: fadeIn 0.8s ease-out 1s;
            animation-fill-mode: both;
            position: relative;
            overflow: hidden;
        }

        .signup-btn:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            transition: all 0.4s ease-in-out;
            z-index: -1;
        }

        .signup-btn:hover:before {
            left: 0;
        }

        .signup-btn:hover {
            background-color: #0055ff;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 102, 255, 0.3);
        }

        .signup-btn:active {
            transform: translateY(-1px);
        }

        .background-gradients {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

        .gradient-blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(50px);
            opacity: 0.5;
            animation: floatBlob 20s infinite ease-in-out alternate;
        }

        @keyframes floatBlob {
            0% {
                transform: translate(0, 0) scale(1);
            }
            100% {
                transform: translate(50px, 50px) scale(1.2);
            }
        }

        @media (max-width: 768px) {
            .login-container {
                flex-direction: column;
                margin: 20px;
            }

            .left-panel {
                padding: 30px;
                min-height: 350px;
            }

            .welcome-text {
                margin-top: 30px;
            }

            .welcome-text h1 {
                font-size: 40px;
            }

            .right-panel {
                padding: 30px;
            }

            .right-panel::before {
                width: 100%;
                height: 20px;
                top: 0;
                left: 0;
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0.05), rgba(0, 0, 0, 0));
            }
        }
    </style>
</head>
<body>
    <!-- Background gradients for depth effect -->
    <div class="background-gradients">
        <div class="gradient-blob" style="background: radial-gradient(circle, rgba(0, 102, 255, 0.7) 0%, rgba(0, 40, 120, 0) 70%); width: 800px; height: 800px; top: -200px; left: -200px;"></div>
        <div class="gradient-blob" style="background: radial-gradient(circle, rgba(0, 183, 255, 0.6) 0%, rgba(0, 140, 255, 0) 70%); width: 600px; height: 600px; bottom: -100px; right: -100px; animation-delay: 5s;"></div>
    </div>

    <div class="login-container">
        <div class="left-panel">
            <!-- Light effect for the glow -->
            <div class="light-effect"></div>

            <!-- Stars background effect -->
            <div class="stars">
                <?php for ($i = 0; $i < 30; $i++) { ?>
                    <div class="star" style="top: <?php echo rand(5, 95); ?>%; left: <?php echo rand(5, 95); ?>%; animation-delay: <?php echo rand(0, 5000) / 1000; ?>s;"></div>
                <?php } ?>
            </div>

            <!-- Diagonal lines animation -->
            <div class="diagonal-lines">
                <?php for ($i = 0; $i < 50; $i++) { ?>
                    <div class="line" style="left: <?php echo rand(0, 100); ?>%; animation-delay: <?php echo rand(0, 5000) / 1000; ?>s; width: <?php echo (rand(0, 100) > 80) ? '2px' : '1px'; ?>; opacity: <?php echo rand(10, 30) / 100; ?>;"></div>
                <?php } ?>
            </div>

            <div class="logo">
                <div class="logo-icon"></div>
                <div>
                    <div class="logo-text">YOUR</div>
                    <div class="logo-subtext">LOGO</div>
                </div>
            </div>

            <div class="welcome-text">
                <h1>Hello,<br>welcome!</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nisi risus.</p>
                <button class="view-more-btn">View more</button>
            </div>
        </div>

        <div class="right-panel">
            <div class="form-container">
                <div class="input-field" style="animation-delay: 0.2s;">
                    <div class="input-icon"></div>
                    <input type="email" placeholder="Email address name@mail.com">
                </div>

                <div class="input-field" style="animation-delay: 0.4s;">
                    <div class="input-icon"></div>
                    <input type="password" placeholder="Password" value="••••••••••••••••">
                </div>

                <div class="checkbox-container">
                    <div class="remember-me">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember me</label>
                    </div>
                    <a href="#" class="forgot-password">Forgot password?</a>
                </div>

                <button class="login-btn">Login</button>

                <div class="signup-text">Not a member yet?</div>
                <button class="signup-btn">Sign up</button>
            </div>
        </div>
    </div>

    <script>
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
    </script>
</body>
</html>