<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Page</title>
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="icon" type="images/x-icon" href="/images/logo.png" />
  <style>
    .error-text {
      font-size: 14px;
      color: #FFB100; /* kuning oranye */
      margin-top: 5px;
      margin-left: 5px;
    }
  </style>
</head>
<body>

  <div class="login-container">
    <div class="left-panel">
      <div class="light-effect">
        <img src="{{ asset('images/logo.png') }}" alt="SMP NEGERI 2 Siborong" class="logo">
      </div>
      <div class="welcome-text">
        <h1>Hello,<br>Selamat Datang!</h1>
        <h2>SMP NEGERI 2 SIBORONGBORONG</h2>
      </div>
    </div>

   <!-- Kanan: Form Login -->
    <div class="right-panel">
      <div class="form-container">
        <form id="loginForm" method="POST" action="{{ route('admin.login.submit') }}">
          @csrf

          <!-- Username -->
          <div class="input-field">
            <input type="text" name="username" id="username">
            <label for="username">Username</label>
            <div class="error-message" id="usernameError"></div>
          </div>

          <!-- Email -->
          <div class="input-field">
            <input type="text" name="email" id="email">
            <label for="email">Email</label>
            <div class="error-message" id="emailError"></div>
          </div>

          <!-- Password -->
          <div class="input-field">
            <input type="password" name="password" id="password">
            <label for="password">Password</label>
            <div class="error-message" id="passwordError"></div>
          </div>

          <!-- Tombol Login -->
          <button type="submit" class="login-btn" id="loginButton">Login</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Script Validasi -->
  <script>
    document.getElementById('loginForm').addEventListener('submit', function(e) {
      const username = document.getElementById('username').value.trim();
      const email = document.getElementById('email').value.trim();
      const password = document.getElementById('password').value.trim();

      let isValid = true;

      const usernameError = document.getElementById('usernameError');
      const emailError = document.getElementById('emailError');
      const passwordError = document.getElementById('passwordError');

      // Reset error
      usernameError.textContent = '';
      emailError.textContent = '';
      passwordError.textContent = '';

      // Validasi
      if (!username) {
        usernameError.textContent = 'Username wajib diisi.';
        isValid = false;
      }

      if (!email) {
        emailError.textContent = 'Email wajib diisi.';
        isValid = false;
      } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        emailError.textContent = 'Format email tidak valid. Harus mengandung "@" dan domain.';
        isValid = false;
      }

      if (!password) {
        passwordError.textContent = 'Password wajib diisi.';
        isValid = false;
      }

      if (!isValid) {
        e.preventDefault();
      }
    });
  </script>

</body>
</html>