<div class="clever-main-menu">
    <div class="classy-nav-container breakpoint-off">
        <!-- Menu -->
        <nav class="classy-navbar justify-content-between" id="cleverNav">

            <!-- Logo -->
            <a style="color: black;"class="nav-brand" href="/"><img src="{{ asset('img/icons/logo.jpeg') }}" width="50" alt=""> SMPN 1 SILAEN</a>

            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <!-- Menu -->
            <div class="classy-menu">

                <!-- Close Button -->
                <div class="classycloseIcon">
                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>

                <!-- Nav Start -->
                <div class="classynav">
                    <ul>
                        <li><a href="/" class="{{ Request::is('/') || Request::is('home') ? 'text-primary' : '' }}">Home</a></li>
                        <a class="nav-link dropdown-toggle {{ Request::is('profil/*') ? 'text-primary' : '' }}" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item {{ Request::is('about') ? 'text-primary' : '' }}" href="{{ route('identitas') }}">Identitas</a>
                                <a class="dropdown-item {{ Request::is('about') ? 'text-primary' : '' }}" href="{{ route('visimisi') }}">Visi Misi</a>
                                <a class="dropdown-item {{ Request::is('about') ? 'text-primary' : '' }}" href="{{ route('tenagapengajar.index') }}">Tenaga Pengajar</a>
                                <a class="dropdown-item {{ Request::is('about') ? 'text-primary' : '' }}" href="{{ route('ekstrakurikuler.index') }}">Ekstrakurikuler</a>
                            </div>
                        </li>
                        <li><a href="{{ route('pengumuman.index') }}" class="{{ Request::segment(1) == 'pengumuman' ? 'text-primary' : '' }}">Pengumuman</a></li>
                        <li><a href="{{ route('prestasi.index') }}" class="{{ Request::segment(1) == 'prestasi' ? 'text-primary' : '' }}">Prestasi</a></li>
                        <li><a href="{{ route('jumlahsiswa.index') }}" class="{{ Request::segment(1) == 'jumlahsiswa' ? 'text-primary' : '' }}">Kelas</a></li>
                        <li><a href="{{ route('fasilitas.index') }}" class="{{ Request::segment(1) == 'fasilitas' ? 'text-primary' : '' }}">Fasilitas</a></li>
                        <li><a href="{{ route('galeri.index') }}" class="{{ Request::segment(1) == 'galeri' ? 'text-primary' : '' }}">Galeri</a></li>
                    </ul>
                    <div style="margin-left:400px" class="follow-us">
                        @auth
                            <!-- Jika pengguna telah login, tombol login tidak ditampilkan -->
                        @else
                            <!-- Jika pengguna belum login, tampilkan tombol login -->
                        @endauth
                    </div>
                    @auth
                    <div class="login-state">
                        <div class="user-name mr-30">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                    <a class="dropdown-item" href="{{ route('admin.index') }}">Dashboard</a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endauth
                </div>
                <!-- Nav End -->
            </div>
        </nav>
    </div>
</div>
<style>
.classynav {
    margin-right: 1px
}
.classynav li {
    color: black;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif !important;
}

.classynav li:hover {
    background-color: #0099ff;
    color: aliceblue !important;
    border-radius: 20px;
    transition: 0.4s;
}

.login {
    color: black;
    opacity: 0.2; /* Reduce opacity */
    font-size: 0.9em; /* Smaller font size */
}

.login:hover {
    color: aliceblue !important;
    border-radius: 20px;
    transition: 0.4s;
    padding: 5px;
    opacity: 1; /* Full opacity on hover */
}

.nav-link {
    color: black;
}

.nav-link:hover {
    background-color: #0099ff;
    color: black !important;
    border-radius: 20px;
    transition: 0.4s;
}

.dropdown-item {
    color: black;
}

.dropdown-item:hover {
    background-color: #0099ff;
    color: black !important;
    border-radius: 20px;
    transition: 0.4s;
}

/* Tambahkan CSS ini untuk menghilangkan kedipan pada navbar saat scroll */
.classy-navbar {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 999;
    background-color: #fff; /* Ganti dengan warna latar belakang yang diinginkan */
}

</style>