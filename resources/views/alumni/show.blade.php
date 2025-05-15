@extends('layouts.frontend.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/alumni.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

<!-- Hero Section Alumni -->
<section class="alumni-hero-modern">
    <div class="alumni-hero-modern-bg"></div>
    <div class="alumni-hero-modern-content">
        <div class="alumni-hero-modern-label">Selamat Datang di Halaman Alumni</div>
        <h1 class="alumni-hero-modern-title">Bangga Menjadi Bagian dari Alumni</h1>
        <div class="alumni-hero-modern-desc">
            Temukan kisah inspiratif, jejaring, dan kontribusi para alumni terbaik yang telah membawa nama baik sekolah ke berbagai penjuru dunia.
        </div>
    </div>
    <div class="alumni-hero-modern-decor decor-1"></div>
    <div class="alumni-hero-modern-decor decor-2"></div>
</section>

<!-- Alumni Detail Section -->
<section class="alumni-detail-section">
    <div class="container py-5">
        <div class="alumni-detail-header" data-aos="fade-down">
            <div class="alumni-header-inner">
                <h2 class="mb-0 text-center">Detail Alumni</h2>
                <div class="header-accent"></div>
            </div>
        </div>

        @if ($alumni)
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="alumni-card card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="alumni-card-inner">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <div class="profile-pic-container">
                                    @if($alumni->foto)
                                        <div class="profile-pic-wrapper">
                                            <img src="{{ asset('alumni/' . $alumni->foto) }}" 
                                                 class="profile-pic" alt="Foto {{ $alumni->nama }}">
                                        </div>
                                    @else
                                        <div class="no-pic">
                                            <div class="text-center">
                                                <i class="fas fa-user-graduate pulse-icon"></i>
                                                <p class="mt-3 text-muted">Foto tidak tersedia</p>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="profile-pic-shine"></div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="card-body alumni-info">
                                    <div class="alumni-name-container">
                                        <h3 class="alumni-name">{{ $alumni->nama }}</h3>
                                        <div class="alumni-name-underline"></div>
                                    </div>

                                    <div class="info-section" data-aos="fade-up" data-aos-delay="300">
                                        <div class="graduation-info">
                                            <div class="info-icon">
                                                <i class="fas fa-graduation-cap"></i>
                                            </div>
                                            <div class="info-content">
                                                <span class="info-label">Tahun Lulus</span>
                                                <span class="graduation-year">{{ $alumni->tahun_lulus }}</span>
                                            </div>
                                        </div>

                                        <div class="desc-container" data-aos="fade-up" data-aos-delay="400">
                                            <div class="desc-header">
                                                <i class="fas fa-quote-left quote-icon"></i>
                                                <span class="info-label">Deskripsi Alumni</span>
                                            </div>
                                            <div class="desc-content">
                                                <p class="card-text">{{ $alumni->deskripsi ?: 'Deskripsi tidak tersedia.' }}</p>
                                            </div>
                                        </div>

        

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="alert-no-alumni" data-aos="fade-up">
            <div class="alert-no-alumni-inner">
                <div class="alert-icon">
                    <i class="fas fa-exclamation-circle"></i>
                </div>
                <div class="alert-content">
                    <h4>Oops!</h4>
                    <p>Alumni tidak ditemukan dalam database kami.</p>
                    <a href="{{ url('/alumni') }}" class="btn btn-outline-danger mt-3">
                        <i class="fas fa-arrow-left me-2"></i>Kembali ke Daftar Alumni
                    </a>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init();
</script>
@endsection
