<!-- Navbar -->
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<nav class="navbar">
    <div class="container">
        <a href="/" class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="SMPN 2 Siborongborong">
        </a>

        <div class="nav-menu">
            <ul class="nav-list">
                <li><a href="{{ route('home') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a></li>
                
                <li class="nav-item-dropdown">
                    <a href="#" class="nav-link">About</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('profil.visimisi') }}">
                            <i class="fas fa-bullseye"></i> Visi dan Misi
                        </a></li>
                        <li><a href="{{ route('profil.fasilitas') }}">
                            <i class="fas fa-building"></i> Fasilitas
                        </a></li>
                        <li><a href="/ekstrakurikuler">
                            <i class="fas fa-running"></i> Ekstrakurikuler
                        </a></li>
                    </ul>
                </li>

                <li class="nav-item-dropdown">
                    <a href="#" class="nav-link">Prestasi</a>
                    <ul class="dropdown-menu">
                        <li><a href="/prestasi-akademik">Akademik</a></li>
                        <li><a href="/prestasi-non-akademik">Non-Akademik</a></li>
                    </ul>
                </li>

                <li><a href="/kepala-sekolah" class="nav-link {{ request()->is('kepala-sekolah') ? 'active' : '' }}">Kepala Sekolah</a></li>
                <li><a href="{{ route('guru.index') }}" class="nav-link {{ request()->is('guru') ? 'active' : '' }}">Guru</a></li>
                <li><a href="/siswa" class="nav-link {{ request()->is('siswa') ? 'active' : '' }}">Siswa</a></li>
                <li><a href="/profil-alumni" class="nav-link {{ request()->is('profil-alumni') ? 'active' : '' }}">Profil Alumni</a></li>
                <li><a href="/formulir-pendaftaran" class="nav-link {{ request()->is('formulir-pendaftaran') ? 'active' : '' }}">Formulir Pendaftaran</a></li>
            </ul>
        </div>

        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </div>
</nav> 