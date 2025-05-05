@extends('layouts.frontend.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/alumni.css') }}">

<!-- Hero Section Alumni (No Image, Creative) -->
<section class="alumni-hero-modern">
    <div class="alumni-hero-modern-bg"></div>
    <div class="alumni-hero-modern-content">
        <div class="alumni-hero-modern-label">Selamat Datang di Halaman Alumni</div>
        <h1 class="alumni-hero-modern-title">Bangga Menjadi Bagian dari Alumni</h1>
        <div class="alumni-hero-modern-desc">
            Temukan kisah inspiratif, jejaring, dan kontribusi para alumni terbaik yang telah membawa nama baik sekolah ke berbagai penjuru dunia. Mari terus terhubung dan berkolaborasi untuk masa depan yang lebih gemilang!
        </div>
    </div>
    <div class="alumni-hero-modern-decor decor-1"></div>
    <div class="alumni-hero-modern-decor decor-2"></div>
</section>

<div class="container py-5">
    <h2 class="mb-4 text-center text-white bg-primary py-2 rounded">Detail Alumni</h2>

    @if ($alumni) 
        <div class="row">
            <div class="col-md-8 mb-4">
                <div class="card h-100">
                    @if($alumni->foto) 
                        <img src="{{ Storage::url('public/alumni/' . $alumni->foto) }}" 
                             class="card-img-top" alt="Foto {{ $alumni->nama }}">
                    @else
                        <p class="text-center text-muted">Foto tidak tersedia</p>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $alumni->nama }}</h5>
                        <p class="card-text"><strong>Tahun Lulus:</strong> {{ $alumni->tahun_lulus }}</p>
                        <p class="card-text"><strong>Deskripsi:</strong> {{ $alumni->deskripsi ?: 'Deskripsi tidak tersedia.' }}</p> <!-- Handling jika deskripsi kosong -->
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="alert alert-danger">Alumni tidak ditemukan.</div> 
    @endif
</div>
@endsection
