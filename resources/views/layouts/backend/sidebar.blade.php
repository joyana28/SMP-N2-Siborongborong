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
      <ul
        class="nav sidebar-menu flex-column"
        data-lte-toggle="treeview"
        role="menu"
        data-accordion="false"
      >
        <li class="nav-item">
          <a href="./index.html" class="nav-link active">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>Dashboard</p>
          </a>
        </li>
        
        <!-- Alumni Menu -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-person-vcard"></i>
            <p>Alumni</p>
          </a>
        </li>
        
        <!-- Ekstrakurikuler Menu -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-joystick"></i>
            <p>Ekstrakurikuler</p>
          </a>
        </li>
        
        <!-- Fasilitas Menu -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-building"></i>
            <p>Fasilitas</p>
          </a>
        </li>
        
        <!-- Kelas Menu -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-door-open"></i>
            <p>Kelas</p>
          </a>
        </li>
        
        <!-- Kepala Sekolah Menu -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-person-badge"></i>
            <p>Kepala Sekolah</p>
          </a>
        </li>
        
        <!-- Pengumuman Menu -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-megaphone"></i>
            <p>Pengumuman</p>
          </a>
        </li>
        
        <!-- Tenaga Pengajar Menu -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-people-fill"></i>
            <p>Tenaga Pengajar</p>
          </a>
        </li>
        
        <!-- Original Menus (kept as is) -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-file-earmark-text"></i>
            <p>Reports</p>
          </a>
        </li>
        
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-gear-fill"></i>
            <p>
              Settings
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>General Settings</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>User Settings</p>
              </a>
            </li>
          </ul>
        </li>
        
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-question-circle"></i>
            <p>Help</p>
          </a>
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