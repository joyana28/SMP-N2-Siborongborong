<div class="sidebar">
    <div class="p-3 text-center">
        <!-- Logo SMP -->
                <h4 class="text-center mb-4 text-white">Dashboard</h4>    </div>
        <h5 class="text-center text-warning fw-bold mb-3">SMP N 2 SIBORONGBORONG</h5>
    <ul class="nav flex-column px-3">
        <li class="nav-item mb-2">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('admin.alumni.index') }}" class="nav-link {{ request()->routeIs('admin.alumni') ? 'active' : '' }}">
                <i class="fas fa-user-graduate me-2"></i> Alumni
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('admin.ekstrakurikuler.index') }}" class="nav-link {{ request()->routeIs('admin.ekstrakurikuler') ? 'active' : '' }}">
                <i class="fas fa-running me-2"></i> Ekstrakurikuler
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('admin.fasilitas.index') }}" class="nav-link {{ request()->routeIs('admin.fasilitas') ? 'active' : '' }}">
                <i class="fas fa-building me-2"></i> Fasilitas
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('admin.formulirpendaftaran.index') }}" class="nav-link {{ request()->routeIs('admin.formulir') ? 'active' : '' }}">
                <i class="fas fa-file-alt me-2"></i> Formulir Pendaftaran
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('admin.guru.index') }}" class="nav-link {{ request()->routeIs('admin.guru') ? 'active' : '' }}">
                <i class="fas fa-chalkboard-teacher me-2"></i> Guru
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('admin.siswa.index') }}" class="nav-link {{ request()->routeIs('admin.siswa') ? 'active' : '' }}">
                <i class="fas fa-user me-2"></i> Siswa
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('admin.kepala_sekolah.index') }}" class="nav-link {{ request()->routeIs('admin.kepalasekolah') ? 'active' : '' }}">
                <i class="fas fa-user-tie me-2"></i> Kepala Sekolah
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('admin.pengumuman.index') }}" class="nav-link {{ request()->routeIs('admin.pengumuman') ? 'active' : '' }}">
                <i class="fas fa-bullhorn me-2"></i> Pengumuman
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('admin.prestasi.index') }}" class="nav-link {{ request()->routeIs('admin.prestasi') ? 'active' : '' }}">
                <i class="fas fa-trophy me-2"></i> Prestasi
            </a>
        </li>
    </ul>
</div>

<style>
    .sidebar {
        background-color: #001f3f; /* biru tua */
        min-height: 100vh;
        padding-top: 20px;
        border-right: 4px solid #f39c12; /* garis oranye */
    }

    .sidebar .nav-link {
        color: #ffffff;
        font-weight: 500;
        padding: 10px 15px;
        border-radius: 8px;
        transition: all 0.3s ease-in-out;
    }

    .sidebar .nav-link:hover {
        background-color: #003366;
        color: #f39c12; /* kuning oranye */
    }

    .sidebar .nav-link.active {
        background-color: #f39c12;
        color: #001f3f;
    }

    .sidebar h4 {
        color: #f39c12;
        font-weight: bold;
    }

    .sidebar .nav-item i {
        margin-right: 8px;
    }
</style>
