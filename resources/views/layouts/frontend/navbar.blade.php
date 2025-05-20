<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<nav class="navbar">
    <div class="container">
        <!-- Logo -->
        <a href="/" class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="SMP NEGERI 2 Siborongborong">
        </a>

        <!-- Hamburger untuk mobile -->
        <button class="hamburger" id="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>

        <!-- Menu Navigasi -->
        <div class="nav-menu" id="navMenu">
            <ul class="nav-list">

                <!-- Beranda -->
                <li>
                    <a href="{{ route('home') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Beranda</a>
                </li>

                <!-- Tentang -->
                <li class="nav-item-dropdown">
                    <a href="#" class="nav-link {{ request()->is('profil*') ? 'active' : '' }}">Tentang</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('profil.visimisi') }}"><i class="fas fa-bullseye"></i> Visi dan Misi</a></li>
                        <li><a href="{{ route('profil.fasilitas') }}"><i class="fas fa-building"></i> Fasilitas</a></li>
                        <li><a href="{{ route('profil.ekstrakurikuler') }}"><i class="fas fa-running"></i> Ekstrakurikuler</a></li>
                    </ul>
                </li>

                <!-- Prestasi -->
                <li class="nav-item-dropdown">
                    <a href="#" class="nav-link {{ request()->is('prestasi*') ? 'active' : '' }}">Prestasi</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('prestasi.akademik') }}"><i class="fas fa-graduation-cap"></i> Akademik</a></li>
                        <li><a href="{{ route('prestasi.nonakademik') }}"><i class="fas fa-trophy"></i> Non-Akademik</a></li>
                    </ul>
                </li>

                <!-- Tenaga Pendidik -->
                <li class="nav-item-dropdown">
                    <a href="#" class="nav-link {{ request()->is('guru*') || request()->is('kepala_sekolah*') ? 'active' : '' }}">Tenaga Pendidik</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('kepala_sekolah.show') }}"><i class="fas fa-user-tie"></i> Kepala Sekolah</a></li>
                        <li><a href="{{ route('guru.index') }}"><i class="fas fa-chalkboard-teacher"></i> Guru</a></li>
                    </ul>
                </li>

                <!-- Siswa dan Kelas -->
                <li>
                    <a class="nav-link {{ request()->is('siswa*') ? 'active' : '' }}" href="{{ route('siswa.show') }}">
                        Siswa dan Kelas
                    </a>
                </li>

                <!-- Profil Alumni -->
                <li>
                    <a class="nav-link {{ request()->is('alumni*') ? 'active' : '' }}" href="{{ route('alumni.show') }}">
                        Profil Alumni
                    </a>
                </li>

                <!-- Prosedur Pendaftaran -->
                <li>
                    <a class="nav-link {{ request()->is('formulirpendaftaran*') ? 'active' : '' }}" href="{{ route('formulirpendaftaran.show') }}">
                        Prosedur Pendaftaran
                    </a>
                </li>

                <!-- Login -->
                <li class="nav-item invisible-login" title="Login">
                    <a href="{{ route('admin.login') }}" 
                       class="nav-link d-flex align-items-center justify-content-center bg-warning text-primary rounded-pill px-3"
                       style="height: 40px; gap: 8px;">
                        <i class="fas fa-sign-in-alt"></i>
                        <span style="font-size: 14px;">Login</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Tambahan untuk memberi jarak ke konten -->
<div class="after-navbar"></div>

<script>
    const hamburger = document.querySelector('.hamburger');
    const navMenu = document.querySelector('.nav-menu');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('open');
        navMenu.classList.toggle('active');
    });

    // Tambahan efek scroll pada navbar
    window.addEventListener('scroll', () => {
        const navbar = document.querySelector('.navbar');
        navbar.classList.toggle('scrolled', window.scrollY > 50);
    });
</script>
