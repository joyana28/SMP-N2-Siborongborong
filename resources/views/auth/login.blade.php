<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" type="images/x-icon" href="/images/logo.png" />
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
            <div class="light-effect"> <img src="{{ asset('images/logo.png') }}" alt="SMP NEGERI 2 Siborong" class="logo">
        </div>
            <div class="welcome-text">
                <h1>Hello,<br>Selamat Datang!</h1>
                <h2>SMP NEGERI 2 SIBORONGBORONG</h2>
            </div>
        </div>

        <div class="right-panel">
            <div class="form-container">
                <form method="POST" action="{{ route('admin.login.submit') }}">
                      @csrf

              <div class="input-field" style="animation-delay: 0.2s;">
              <input type="text" name="username" id="username"  name="username" required title="Wajib isi username yang valid.">
              <label for="username">Username</label>
              </div>

              <div class="input-field" style="animation-delay: 0.4s;">
              <input type="email" name="email" id="email" name="email" required title="Wajib isi email yang valid.">
              <label for="email">Email</label>
              </div>

              <div class="input-field" style="animation-delay: 0.6s;">
              <input type="password" name="password" id="password" name="password" required title="Wajib isi password.">
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