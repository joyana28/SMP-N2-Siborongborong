<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - @yield('title', 'Dashboard')</title>

    <!-- Bootstrap CSS (pakai CDN atau lokal) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tambahan CSS -->

</head>
<body>

@include('layouts.backend.header')

@include('layouts.backend.navbar')


<div class="wrapper">
        <div class="sidebar">
            @include('layouts.backend.sidebar')
        </div>

        <div class="content">
            @yield('content')
        </div>
    </div>

@include('layouts.backend.footer')

@include('layouts.backend.mainfooter')

    

    <!-- Bootstrap JS (pakai CDN atau lokal) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
