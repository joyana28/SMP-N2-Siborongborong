@extends('layouts.backend.app')

@section('title', 'Dashboard Admin')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4" style="background-color: #001f3f; padding: 15px 20px; border-radius: 10px;">
        <h1 class="h3 mb-0" style="color: #E8AA42;">Dashboard</h1>
        <a href="{{ route('home') }}" style="color: #E8AA42; text-decoration: none; font-weight: bold;">
            <i class="fas fa-sign-out-alt fa-sm me-1"></i> Logout
        </a>
    </div>
</div> <!-- penutup container-fluid -->
<div class="row">
    <!-- Alumni Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Alumni</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Alumni::count() }}</div>
                        <a href="{{ route('admin.alumni.index') }}" class="btn btn-sm btn-primary mt-2">Lihat Detail <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Guru Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Total Guru</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Guru::count() }}</div>
                        <a href="{{ route('admin.guru.index') }}" class="btn btn-sm btn-success mt-2">Lihat Detail <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ekstrakurikuler Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Total Ekstrakurikuler</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Ekstrakurikuler::count() }}</div>
                        <a href="{{ route('admin.ekstrakurikuler.index') }}" class="btn btn-sm btn-info mt-2">Lihat Detail <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-futbol fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Prestasi Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Total Prestasi</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Prestasi::count() }}</div>
                        <a href="{{ route('admin.prestasi.index') }}" class="btn btn-sm btn-warning mt-2">Lihat Detail <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-trophy fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row - Secondary Cards -->
<div class="row">
    <!-- Fasilitas Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                            Total Fasilitas</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Fasilitas::count() }}</div>
                        <a href="{{ route('admin.fasilitas.index') }}" class="btn btn-sm btn-danger mt-2">Lihat Detail <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-building fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pengumuman Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-secondary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                            Total Pengumuman</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Pengumuman::count() }}</div>
                        <a href="{{ route('admin.pengumuman.index') }}" class="btn btn-sm btn-secondary mt-2">Lihat Detail <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-bullhorn fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Kelas Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Total Kelas</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Siswa::count() }}</div>
                        <a href="{{ route('admin.siswa.index') }}" class="btn btn-sm btn-success mt-2">Lihat Detail <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-door-open fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection