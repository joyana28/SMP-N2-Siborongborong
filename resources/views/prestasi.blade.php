@extends('layouts.frontend')

@section('content')
<div class="container mt-5 mb-5">
    <h2 class="text-center mb-4">Prestasi Sekolah</h2>
    <div class="row">
        <!-- Prestasi 1 -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/announcement4.jpg') }}" class="card-img-top" alt="Prestasi 1">
                <div class="card-body">
                    <h5 class="card-title">Juara MHQ tingkat Provinsi dan Nasional</h5>
                </div>
            </div>
        </div>

        <!-- Prestasi 2 -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/announcement5.jpg') }}" class="card-img-top" alt="Prestasi 2">
                <div class="card-body">
                    <h5 class="card-title">Juara MHQ tingkat Provinsi dan Nasional</h5>
                </div>
            </div>
        </div>

        <!-- Prestasi 3 -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/announcement6.jpg') }}" class="card-img-top" alt="Prestasi 3">
                <div class="card-body">
                    <h5 class="card-title">Juara umum lomba ketangkasan pramuka se Kab. Sukabumi</h5>
                </div>
            </div>
        </div>

        <!-- Prestasi 4 -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/performance.png') }}" class="card-img-top" alt="Prestasi 4">
                <div class="card-body">
                    <h5 class="card-title">Juara umum bulu tangkis putra & putri se Kab. Sukabumi</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Tombol Lihat Selengkapnya -->
    <div class="text-center mt-4">
        <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
    </div>
</div>
@endsection
