@extends('layouts.backend.app')

@section('title', 'Dashboard Admin')

@section('content')
    <!-- Custom CSS -->
    <style>
        .custom-border {
            border-left: 0.25rem solid #E8AA42 !important;
        }

        .custom-text {
            color: #001f3f !important;
        }

        .custom-btn {
            background-color: #001f3f !important;
            border-color: #001f3f !important;
            color: white;
            transition: background-color 0.3s ease, border-color 0.3s ease;
            width: 100%;
            font-size: 0.8rem;
            padding: 0.375rem 0.75rem;
            white-space: nowrap;
            text-align: center;
        }

        .custom-btn:hover {
            background-color: #E8AA42 !important;
            border-color: #E8AA42 !important;
            color: #001f3f !important;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .custom-btn {
                font-size: 0.75rem;
                padding: 0.25rem 0.5rem;
            }
        }

        @media (max-width: 576px) {
            .custom-btn {
                font-size: 0.7rem;
                padding: 0.2rem 0.4rem;
            }
        }

        /* Ensure consistent card heights */
        .dashboard-card {
            min-height: 140px;
        }

        .dashboard-card .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
    </style>

    <div class="container-fluid">
        <!-- Header -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4"
             style="background-color: #001f3f; padding: 15px 20px; border-radius: 10px;">
            <h1 class="h3 mb-0" style="color: #E8AA42;">Dashboard</h1>
            <a href="{{ route('home') }}" style="color: #E8AA42; text-decoration: none; font-weight: bold;">
                <i class="fas fa-sign-out-alt fa-sm me-1"></i> Logout
            </a>
        </div>

        <!-- Dashboard Cards -->
        <div class="row">
            <!-- Alumni -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card custom-border shadow h-100 py-2 dashboard-card">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center mb-2">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold custom-text text-uppercase mb-1">
                                    Total Alumni</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Alumni::count() }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <a href="{{ route('admin.alumni.index') }}" class="btn custom-btn">
                                <span class="d-none d-sm-inline">Lihat Detail</span>
                                <span class="d-sm-none">Detail</span>
                                <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Guru -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card custom-border shadow h-100 py-2 dashboard-card">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center mb-2">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold custom-text text-uppercase mb-1">
                                    Total Guru</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Guru::count() }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <a href="{{ route('admin.guru.index') }}" class="btn custom-btn">
                                <span class="d-none d-sm-inline">Lihat Detail</span>
                                <span class="d-sm-none">Detail</span>
                                <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ekstrakurikuler -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card custom-border shadow h-100 py-2 dashboard-card">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center mb-2">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold custom-text text-uppercase mb-1">
                                    Total Ekstrakurikuler
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    {{ \App\Models\Ekstrakurikuler::count() }}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-futbol fa-2x text-gray-300"></i>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <a href="{{ route('admin.ekstrakurikuler.index') }}" class="btn custom-btn">
                                <span class="d-none d-sm-inline">Lihat Detail</span>
                                <span class="d-sm-none">Detail</span>
                                <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Prestasi -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card custom-border shadow h-100 py-2 dashboard-card">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center mb-2">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold custom-text text-uppercase mb-1">
                                    Total Prestasi
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    {{ \App\Models\Prestasi::count() }}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-trophy fa-2x text-gray-300"></i>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <a href="{{ route('admin.prestasi.index') }}" class="btn custom-btn">
                                <span class="d-none d-sm-inline">Lihat Detail</span>
                                <span class="d-sm-none">Detail</span>
                                <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fasilitas -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card custom-border shadow h-100 py-2 dashboard-card">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center mb-2">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold custom-text text-uppercase mb-1">
                                    Total Fasilitas</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Fasilitas::count() }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-building fa-2x text-gray-300"></i>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <a href="{{ route('admin.fasilitas.index') }}" class="btn custom-btn">
                                <span class="d-none d-sm-inline">Lihat Detail</span>
                                <span class="d-sm-none">Detail</span>
                                <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pengumuman -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card custom-border shadow h-100 py-2 dashboard-card">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center mb-2">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold custom-text text-uppercase mb-1">
                                    Total Pengumuman</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Pengumuman::count() }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-bullhorn fa-2x text-gray-300"></i>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <a href="{{ route('admin.pengumuman.index') }}" class="btn custom-btn">
                                <span class="d-none d-sm-inline">Lihat Detail</span>
                                <span class="d-sm-none">Detail</span>
                                <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kelas -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card custom-border shadow h-100 py-2 dashboard-card">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center mb-2">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold custom-text text-uppercase mb-1">
                                    Total Kelas</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Siswa::count() }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-door-open fa-2x text-gray-300"></i>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <a href="{{ route('admin.siswa.index') }}" class="btn custom-btn">
                                <span class="d-none d-sm-inline">Lihat Detail</span>
                                <span class="d-sm-none">Detail</span>
                                <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- End of Row -->
    </div> <!-- End of Container Fluid -->
@endsection