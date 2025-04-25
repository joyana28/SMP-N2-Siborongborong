<div class="sidebar">
    <div class="p-3">
        <h4 class="text-center mb-4">Admin Panel</h4>
        <ul class="nav flex-column">
            <li class="nav-item mb-2">
                <a href="{{ route('admin.dashboard') }}" class="nav-link text-white {{ request()->routeIs('admin.dashboard') ? 'active bg-primary' : '' }}">
                    <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('alumni.index') }}" class="nav-link text-white {{ request()->routeIs('admin.alumni') ? 'active bg-primary' : '' }}">
                    <i class="fas fa-user-graduate me-2"></i> Alumni
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('ekstrakurikuler.index') }}" class="nav-link text-white {{ request()->routeIs('admin.ekstrakurikuler') ? 'active bg-primary' : '' }}">
                    <i class="fas fa-running me-2"></i> Ekstrakurikuler
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('fasilitas.index') }}" class="nav-link text-white {{ request()->routeIs('admin.fasilitas') ? 'active bg-primary' : '' }}">
                    <i class="fas fa-building me-2"></i> Fasilitas
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('formulir.index') }}" class="nav-link text-white {{ request()->routeIs('admin.formulir') ? 'active bg-primary' : '' }}">
                    <i class="fas fa-file-alt me-2"></i> Formulir Pendaftaran
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('admin.guru.index') }}" class="nav-link text-white {{ request()->routeIs('admin.guru') ? 'active bg-primary' : '' }}">
                    <i class="fas fa-chalkboard-teacher me-2"></i> Guru
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('siswa.index') }}" class="nav-link text-white {{ request()->routeIs('admin.siswa') ? 'active bg-primary' : '' }}">
                    <i class="fas fa-user me-2"></i> Siswa
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('kepalasekolah.index') }}" class="nav-link text-white {{ request()->routeIs('admin.kepalasekolah') ? 'active bg-primary' : '' }}">
                    <i class="fas fa-user-tie me-2"></i> Kepala Sekolah
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('pengumuman.index') }}" class="nav-link text-white {{ request()->routeIs('admin.pengumuman') ? 'active bg-primary' : '' }}">
                    <i class="fas fa-bullhorn me-2"></i> Pengumuman
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('prestasi.index') }}" class="nav-link text-white {{ request()->routeIs('admin.prestasi') ? 'active bg-primary' : '' }}">
                    <i class="fas fa-trophy me-2"></i> Prestasi
                </a>
            </li>
            
        </ul>
    </div>
</div>