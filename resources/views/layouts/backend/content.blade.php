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
        
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-people-fill"></i>
            <p>Users</p>
          </a>
        </li>
        
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

<main class="app-main">
  <!-- App Content Header -->
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h3 class="mb-0">Dashboard</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- End App Content Header -->
  
  <!-- App Content -->
  <div class="app-content">
    <div class="container-fluid">
      <!-- Summary Cards Row -->
      <div class="row">
        <!-- Card 1 -->
        <div class="col-lg-3 col-6">
          <div class="small-box text-bg-primary">
            <div class="inner">
              <h3>0</h3>
              <p>Metric 1</p>
            </div>
            <svg
              class="small-box-icon"
              fill="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
              aria-hidden="true"
            >
              <path
                d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z"
              ></path>
            </svg>
            <a
              href="#"
              class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
            >
              More info <i class="bi bi-link-45deg"></i>
            </a>
          </div>
        </div>
        
        <!-- Card 2 -->
        <div class="col-lg-3 col-6">
          <div class="small-box text-bg-success">
            <div class="inner">
              <h3>0<sup class="fs-5">%</sup></h3>
              <p>Metric 2</p>
            </div>
            <svg
              class="small-box-icon"
              fill="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
              aria-hidden="true"
            >
              <path
                d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z"
              ></path>
            </svg>
            <a
              href="#"
              class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
            >
              More info <i class="bi bi-link-45deg"></i>
            </a>
          </div>
        </div>
        
        <!-- Card 3 -->
        <div class="col-lg-3 col-6">
          <div class="small-box text-bg-warning">
            <div class="inner">
              <h3>0</h3>
              <p>Metric 3</p>
            </div>
            <svg
              class="small-box-icon"
              fill="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
              aria-hidden="true"
            >
              <path
                d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z"
              ></path>
            </svg>
            <a
              href="#"
              class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover"
            >
              More info <i class="bi bi-link-45deg"></i>
            </a>
          </div>
        </div>
        
        <!-- Card 4 -->
        <div class="col-lg-3 col-6">
          <div class="small-box text-bg-danger">
            <div class="inner">
              <h3>0</h3>
              <p>Metric 4</p>
            </div>
            <svg
              class="small-box-icon"
              fill="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
              aria-hidden="true"
            >
              <path
                clip-rule="evenodd"
                fill-rule="evenodd"
                d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z"
              ></path>
              <path
                clip-rule="evenodd"
                fill-rule="evenodd"
                d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z"
              ></path>
            </svg>
            <a
              href="#"
              class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
            >
              More info <i class="bi bi-link-45deg"></i>
            </a>
          </div>
        </div>
      </div>
      
      <!-- Main Content Panels -->
      <div class="row">
        <!-- Left Panel -->
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-header">
              <h3 class="card-title">Main Content Panel</h3>
            </div>
            <div class="card-body">
              <p>Add your main content here.</p>
              <div style="height: 300px; background-color: #f8f9fa; display: flex; align-items: center; justify-content: center;">
                Content Area
              </div>
            </div>
          </div>
        </div>
        
        <!-- Right Panel -->
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-header">
              <h3 class="card-title">Information Panel</h3>
            </div>
            <div class="card-body">
              <p>Add additional information here.</p>
              <div style="height: 300px; background-color: #f8f9fa; display: flex; align-items: center; justify-content: center;">
                Information Area
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Optional Footer Row -->
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header">
              <h3 class="card-title">Footer Content</h3>
            </div>
            <div class="card-body">
              <p>Add footer content here.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End App Content -->
</main>