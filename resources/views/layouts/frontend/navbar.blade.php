<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="/">
            <img src="/images/LOGO.png" alt="Skola Logo" class="logo-img">
            <div class="brand-text">
                <span class="brand-name">SMPN2</span>
                <span class="university-text">Siborongborong</span>
            </div>
        </a>
        
        <!-- Navigation Items -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto main-menu">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">HOME</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        ABOUT
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('profil.visimisi') }}"><span>Visi & Misi</span></a></li>
                        <li><a class="dropdown-item" href="#"><span>Fasilitas</span></a></li>
                        <li><a class="dropdown-item" href="#"><span>Ektrakurikuler</span></a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Prestasi
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><span>Akademik</span></a></li>
                        <li><a class="dropdown-item" href="#"><span>Non-Akademik</span></a></li>
                    </ul>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Tenaga Pendidik
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><span>Kepala Sekolah</span></a></li>
                        <li><a class="dropdown-item" href="#"><span>Guru</span></a></li>
                    </ul>
                <li class="nav-item">
                    <a class="nav-link" href="#">Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Formulir Pendaftaran</a>
                </li>
            </ul>
            
            <!-- Login Icon -->
            <div class="login-icon-container">
    <a href="{{ route('login') }}" class="login-icon-btn" title="Login">
        <i class="bi bi-person-fill"></i>
    </a>
</div>

        <!-- Toggle Button for Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
