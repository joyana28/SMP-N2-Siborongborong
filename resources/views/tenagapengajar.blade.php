@extends('layouts.app') {{-- Pastikan sesuai layout utama lo --}}

@section('title', 'Tenaga Pendidik')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold text-primary">Tenaga Pendidik</h1>
        <hr class="mx-auto" style="width: 120px; height: 3px; background-color: #0d6efd;">
    </div>

    <div class="row justify-content-center">
        <!-- Guru 1 -->
        <div class="col-md-4 col-lg-3 mb-4">
            <div class="card shadow-sm border-0 rounded-4 text-center">
                <img src="{{ asset('images/guru1.jpg') }}" class="card-img-top rounded-top-4" alt="Foto Guru">
                <div class="card-body">
                    <h5 class="fw-bold mb-1">Bapak Ahmad Siregar, S.Pd</h5>
                    <p class="text-muted mb-0">Guru Matematika</p>
                </div>
            </div>
        </div>

        <!-- Guru 2 -->
        <div class="col-md-4 col-lg-3 mb-4">
            <div class="card shadow-sm border-0 rounded-4 text-center">
                <img src="{{ asset('images/guru2.jpg') }}" class="card-img-top rounded-top-4" alt="Foto Guru">
                <div class="card-body">
                    <h5 class="fw-bold mb-1">Ibu Lestari Simanjuntak, M.Pd</h5>
                    <p class="text-muted mb-0">Guru Bahasa Indonesia</p>
                </div>
            </div>
        </div>

        <!-- Guru 3 -->
        <div class="col-md-4 col-lg-3 mb-4">
            <div class="card shadow-sm border-0 rounded-4 text-center">
                <img src="{{ asset('images/guru3.jpg') }}" class="card-img-top rounded-top-4" alt="Foto Guru">
                <div class="card-body">
                    <h5 class="fw-bold mb-1">Bapak Jonathan Sitanggang, S.Kom</h5>
                    <p class="text-muted mb-0">Guru TIK</p>
                </div>
            </div>
        </div>

        <!-- Tambahkan guru lainnya sesuai kebutuhan -->

    </div>
</div>
@endsection
