<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="/">
            <img src="/images/logo.png" alt="Skola Logo" class="logo-img">
            <div class="brand-text">
                <span class="brand-name">SMPN2</span>
                <span class="university-text">Siborongborong</span>
            </div>
        </a>
        
        <!-- Navigation Items -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto main-menu">
                <li class="nav-item">
                    <a class="nav-link active" href="#">HOME</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        PROFIL
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><span>Sejarah Sekolah</span></a></li>
                        <li><a class="dropdown-item" href="#"><span>Visi & Misi</span></a></li>
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
                        Tenaga Pengajar
                    </a>
                <li class="nav-item">
                    <a class="nav-link" href="#">SIswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">formulir pendaftaran</a>
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