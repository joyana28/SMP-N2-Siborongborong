<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
  <!-- Sidebar Brand -->
  <div class="sidebar-brand">
    <a href="./index.html" class="brand-link">
      <img
        src="{{ asset('images/admin.jpg') }}"
        alt="Dashboard Logo"
        class="brand-image opacity-75 shadow"
      />
      <span class="brand-text fw-light">My Dashboard</span>
    </a>
  </div>

  <!-- Sidebar Wrapper -->
  <div class="sidebar-wrapper">
    <nav class="mt-2">
      <!-- Sidebar Menu -->
      <ul class="nav sidebar-menu flex-column" role="menu">
        <li class="nav-item">
          <a href="./index.html" class="nav-link">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('alumni.index') }}" class="nav-link">
            <i class="nav-icon bi bi-people"></i>
            <p>alumni</p>
          </a>
        </li>
        
        <li class="nav-item">
          <a href="{{ route('ekstrakurikuler.index') }}" class="nav-link">
            <i class="nav-icon bi bi-activity"></i>
            <p>ekstrakurikuler</p>
          </a>
        </li>
        
        <li class="nav-item">
          <a href="{{ route('fasilitas.index') }}" class="nav-link">
            <i class="nav-icon bi bi-building"></i>
            <p>fasilitas</p>
          </a>
        </li>
        
        <li class="nav-item">
          <a href="{{ route('formulir.index') }}" class="nav-link">
            <i class="nav-icon bi bi-file-earmark-text"></i>
            <p>formulir pendaftaran</p>
          </a>
        </li>
        
        <li class="nav-item">
          <a href="{{ route('guru.index') }}" class="nav-link">
            <i class="nav-icon bi bi-person-badge"></i>
            <p>guru</p>
          </a>
        </li>
        
        <li class="nav-item">
          <a href="{{ route('siswa.index') }}" class="nav-link">
            <i class="nav-icon bi bi-mortarboard"></i>
            <p>siswa</p>
          </a>
        </li>
        
        <li class="nav-item">
          <a href="{{ route('kepalasekolah.index') }}" class="nav-link">
            <i class="nav-icon bi bi-person-workspace"></i>
            <p>kepala sekolah</p>
          </a>
        </li>
        
        <li class="nav-item">
          <a href="{{ route('pengumuman.index') }}" class="nav-link">
            <i class="nav-icon bi bi-megaphone"></i>
            <p>pengumuman</p>
          </a>
        </li>
        
        <li class="nav-item">
          <a href="{{ route('prestasi.index') }}" class="nav-link">
            <i class="nav-icon bi bi-trophy"></i>
            <p>prestasi</p>
          </a>
        </li>
        
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-box-arrow-right"></i>
            <p>Logout</p>
          </a>
        </li>
      </ul>
      <!-- End Sidebar Menu -->
    </nav>
  </div>
  <!-- End Sidebar Wrapper -->
</aside>
