<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

<nav class="navbar">
    <div class="container">
        <!-- Logo -->
        <a href="/" class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="SMP NEGERI 2 Siborongborong">
        </a>

        <!-- Tombol Hamburger untuk tampilan mobile -->
        <button class="hamburger" id="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>

        <!-- Menu Navigasi -->
        <div class="nav-menu" id="navMenu">
            <ul class="nav-list">
                <li><a href="{{ route('home') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Beranda</a></li>

                <li class="nav-item-dropdown">
                    <a href="#" class="nav-link">Tentang</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('profil.visimisi') }}"><i class="fas fa-bullseye"></i> Visi dan Misi</a></li>
                        <li><a href="{{ route('profil.fasilitas') }}"><i class="fas fa-building"></i> Fasilitas</a></li>
                        <li><a href="{{ route('profil.ekstrakurikuler') }}"><i class="fas fa-running"></i> Ekstrakurikuler</a></li>
                    </ul>
                </li>

                <li class="nav-item-dropdown">
                    <a href="#" class="nav-link">Prestasi</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('prestasi.akademik') }}"><i class="fas fa-graduation-cap"></i> Akademik</a></li>
                        <li><a href="{{ route('prestasi.nonakademik') }}"><i class="fas fa-trophy"></i> Non-Akademik</a></li>
                    </ul>
                </li>
                <li class="nav-item-dropdown">
                    <a href="#" class="nav-link">Tenaga Pendidik</a>
                    <ul class="dropdown-menu">
                <li><a  href="{{ route('kepala_sekolah.show') }}">Kepala Sekolah</a></li>
                <li><a href="{{ route('guru.index') }}" class="nav-link {{ request()->is('guru') ? 'active' : '' }}">Guru</a></li>
                    </ul>
                </li>
                <li><a class="nav-link" href="{{ route('siswa.show') }}">Siswa dan Kelas</a></li>
                <li><a class="nav-link" href="{{ route('alumni.show') }}">Profil Alumni</a></li>
                <li><a class="nav-link" href="{{ route('formulirpendaftaran.show') }}">Prosedur Pendaftaran</a></li>
                <li class="nav-item invisible-login" title="Login">
    <a href="{{ route('admin.login') }}" 
       class="nav-link d-flex align-items-center justify-content-center bg-warning text-primary rounded-pill px-3"
       style="height: 40px; gap: 8px; transition: 0.3s;">
        <i class="fas fa-sign-in-alt"></i>
        <span style="font-size: 14px;">Login</span>
    </a>
</li>
            </ul>
        </div>
    </div>
</nav>

<!-- Tambahan untuk memberi jarak ke konten -->
<div class="after-navbar">
    <!-- Konten halaman dimulai di sini -->
</div>

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

