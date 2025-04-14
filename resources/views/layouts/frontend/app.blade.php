<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags Must come first in the head; any other head content must come after these tags -->

    <!-- Title -->
    <title>SMPN 2 SIBORONGBORONG | {{ $title ?? '' }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('templates/frontend/clever') }}/img/core-img/logo.jpeg">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('templates/frontend/clever') }}/style.css">
    <style>
        body {
background:#60AFFF;
            background-size: cover;
            background-repeat: no-repeat;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        /* Sidebar Navbar */
.sidebar-navbar {
    height: 100%;
    width: 250px;
    position: fixed;
    top: 0;
    left: -250px;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    z-index: 1000;
}

.sidebar-navbar a {
    padding: 10px 15px;
    text-decoration: none;
    font-size: 20px;
    color: white;
    display: block;
    transition: 0.3s;
}

.sidebar-navbar a:hover {
    background-color: #1a1a1a;
}

.sidebar-navbar .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

.sidebar-navbar .closebtn:hover {
    color: red;
    cursor: pointer;
}

.sidebar-navbar .icon {
    padding: 10px;
    cursor: pointer;
    position: absolute;
    top: 0;
    right: 0;
    font-size: 24px;
    color: white;
}

.sidebar-navbar .icon:hover {
    background-color: #1a1a1a;
}

    </style>
    @stack('css')
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="sk-chase">
            <div class="sk-chase-dot"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
<!-- ##### Header Area Start ##### -->
<header class="header-area">


    <!-- Sidebar Navbar -->
    @include('layouts.frontend.navbar')

</header>
<!-- ##### Header Area End ##### -->

    <!-- ##### Header Area End ##### -->

    @yield('content')

    <!-- ##### Footer Area Start ##### -->
    @include('layouts.frontend.footer')
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset('templates/frontend/clever') }}/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="{{ asset('templates/frontend/clever') }}/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('templates/frontend/clever') }}/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('templates/frontend/clever') }}/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="{{ asset('templates/frontend/clever') }}/js/active.js"></script>
    @stack('js')
    <script>
        <div id="mySidebar" class="sidebar-navbar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
    <!-- Add more links as needed -->
</div>

<!-- Icon to open the sidebar Navbar -->
<div class="icon" onclick="openNav()">
    &#9776;
</div>

    </script>
</body>
</html>
