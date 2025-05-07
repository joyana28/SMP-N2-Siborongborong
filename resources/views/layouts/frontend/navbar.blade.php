<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

<nav class="navbar">
    <div class="container">
        <a href="/" class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="SMPN 2 Siborongborong">
        </a>

        <button class="hamburger" id="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>

        <div class="nav-menu" id="navMenu">
            <ul class="nav-list">
                <li><a href="{{ route('home') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a></li>

                <li class="nav-item-dropdown">
                    <a href="#" class="nav-link">About</a>
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

                <li><a class="nav-link" href="{{ route('kepala_sekolah.show') }}">Kepala Sekolah</a></li>
                <li><a href="{{ route('guru.index') }}" class="nav-link {{ request()->is('guru') ? 'active' : '' }}">Guru</a></li>
                <li><a class="nav-link" href="{{ route('siswa.show') }}">Siswa dan Kelas</a></li>
                <li><a class="nav-link" href="{{ route('alumni.show') }}">Profil Alumni</a></li>
                <li><a class="nav-link" href="{{ route('formulirpendaftaran.show') }}">Prosedur Pendaftaran</a></li>
                <li><a href="{{ route('admin.login') }}" class="nav-link {{ request()->is('login') ? 'active' : '' }}"><i class="fas fa-sign-in-alt"></i> Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<script>
    document.getElementById('hamburger').addEventListener('click', function () {
        document.getElementById('navMenu').classList.toggle('active');
    });
</script>
