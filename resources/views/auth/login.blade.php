<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
  </head>
  <body class="bg-body-secondary d-flex justify-content-center align-items-center" style="height: 100vh">
    <div class="login-box w-100" style="max-width: 400px;">
      <div class="card card-outline card-primary shadow">
        <div class="card-header text-center">
          <h1><b>Admin</b>LTE</h1>
        </div>
        <div class="card-body">
          <p class="login-box-msg">Sign in to start your session</p>

          @if ($errors->any())
            <div class="alert alert-danger">
              <ul class="mb-0">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="loginEmail" class="form-label">Email address</label>
              <input name="email" id="loginEmail" type="email" class="form-control" required autofocus />
            </div>
            <div class="mb-3">
              <label for="loginPassword" class="form-label">Password</label>
              <input name="password" id="loginPassword" type="password" class="form-control" required />
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="remember" name="remember" />
              <label class="form-check-label" for="remember">Remember Me</label>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Sign In</button>
            </div>
          </form>

          <div class="text-center mt-3">
            <a href="#">I forgot my password</a> | <a href="#">Register</a>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
