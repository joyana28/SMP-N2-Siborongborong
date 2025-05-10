<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="{{ asset('js/login.js') }}"></script>
</head>
<body>
    <!-- Background gradients for depth effect -->
    <div class="background-gradients">
        <div class="gradient-blob" style="background: radial-gradient(circle, rgba(0, 102, 255, 0.7) 0%, rgba(0, 40, 120, 0) 70%); width: 800px; height: 800px; top: -200px; left: -200px;"></div>
        <div class="gradient-blob" style="background: radial-gradient(circle, rgba(0, 183, 255, 0.6) 0%, rgba(0, 140, 255, 0) 70%); width: 600px; height: 600px; bottom: -100px; right: -100px; animation-delay: 5s;"></div>
    </div>

    <div class="login-container">
        <div class="left-panel">
            <div class="light-effect"></div>

            <div class="stars">
                <?php for ($i = 0; $i < 30; $i++) { ?>
                    <div class="star" style="top: <?php echo rand(5, 95); ?>%; left: <?php echo rand(5, 95); ?>%; animation-delay: <?php echo rand(0, 5000) / 1000; ?>s;"></div>
                <?php } ?>
            </div>

            <div class="diagonal-lines">
                <?php for ($i = 0; $i < 50; $i++) { ?>
                    <div class="line" style="left: <?php echo rand(0, 100); ?>%; animation-delay: <?php echo rand(0, 5000) / 1000; ?>s; width: <?php echo (rand(0, 100) > 80) ? '2px' : '1px'; ?>; opacity: <?php echo rand(10, 30) / 100; ?>;"></div>
                <?php } ?>
            </div>

          <div class="logo">
              <img src="images/logo.png" alt="Logo" class="logo-img">
          </div>


            <div class="welcome-text">
                <h1>Hello,<br>welcome!</h1>
                <p>SMP NEGERI 2 SIBORONGBORONG</p>
            </div>
        </div>

        <div class="right-panel">
            <div class="form-container">
                <form method="POST" action="{{ route('admin.login.submit') }}">
                    @csrf

              <div class="input-field" style="animation-delay: 0.2s;">
              <input type="text" name="username" id="username" placeholder=" " required>
              <label for="username">Username</label>
              </div>

              <div class="input-field" style="animation-delay: 0.4s;">
              <input type="email" name="email" id="email" placeholder=" " required>
              <label for="email">Email</label>
              </div>

              <div class="input-field" style="animation-delay: 0.6s;">
              <input type="password" name="password" id="password" placeholder=" " required>
              <label for="password">Password</label>
              </div>
     

                    <div class="checkbox-container">
                        <div class="remember-me">
                            <input type="checkbox" id="remember">
                            <label for="remember">Remember me</label>
                        </div>
                       
                    </div>

                    <button class="login-btn" type="submit">Login</button>

                    @if($errors->has('login'))
                        <div style="color: red; text-align: center; margin-top: 10px;">
                            {{ $errors->first('login') }}
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</body>
</html>