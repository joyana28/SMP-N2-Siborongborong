@extends('layouts.frontend.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/fasilitas.css') }}">
@endsection

@section('content')
<!-- Hero Section -->
<section class="fasilitas-hero-section">
    <div class="fasilitas-hero-text">
        <h1 class="fasilitas-title">Fasilitas Sekolah</h1>
        <p class="fasilitas-description">Beragam fasilitas modern dan unggulan untuk mendukung pembelajaran dan pengembangan siswa.</p>
    </div>
</section>

<!-- Section Intro Fasilitas -->
<section class="section-intro-fasilitas">
    <div class="intro-grid">
        <!-- Left: Overlapping Images -->
        <div class="intro-images">
            <img src="{{ asset('images/pp 2.png') }}" alt="Fasilitas 1" class="intro-img img-main">
            <img src="{{ asset('images/pp 3.png') }}" alt="Fasilitas 2" class="intro-img img-overlap">
        </div>
        <!-- Right: Content -->
        <div class="intro-content">
            <div class="intro-logo">
                <img src="https://svgshare.com/i/13dA.svg" alt="Logo" />
            </div>
            <div class="intro-label">About Your Company</div>
            <h2 class="intro-title">We're Partner of Your Innovations</h2>
            <p class="intro-desc">Infotech is a provider of IT consulting and software development services. We have helped organizations and companies improve business performance & enhance their competitiveness.</p>
            <div class="intro-stats-features">
                <div class="intro-stat-box">
                    <div class="intro-stat-number">6800<sup>+</sup></div>
                    <div class="intro-stat-label">Satisfied Clients</div>
                </div>
                <div class="intro-feature">
                    <div class="intro-feature-icon">
                        <svg width="32" height="32" fill="none" stroke="#6C63FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
                    </div>
                    <div class="intro-feature-label">Website Development</div>
                </div>
                <div class="intro-feature">
                    <div class="intro-feature-icon">
                        <svg width="32" height="32" fill="none" stroke="#6C63FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 1 1-4 0v-.09A1.65 1.65 0 0 0 8 19.4a1.65 1.65 0 0 0-1.82.33l-.06-.06a2 2 0 1 1-2.83-2.83l.06-.06A1.65 1.65 0 0 0 4.6 15a1.65 1.65 0 0 0-1.51-1H3a2 2 0 1 1 0-4h.09A1.65 1.65 0 0 0 4.6 8a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06A1.65 1.65 0 0 0 8 4.6a1.65 1.65 0 0 0 1-1.51V3a2 2 0 1 1 4 0v.09c0 .66.39 1.26 1 1.51a1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06A1.65 1.65 0 0 0 19.4 8c.66 0 1.26.39 1.51 1H21a2 2 0 1 1 0 4h-.09c-.25 0-.48.09-.68.24"/></svg>
                    </div>
                    <div class="intro-feature-label">Internal Networking</div>
                </div>
            </div>
            <ul class="intro-bullets">
                <li><span class="intro-bullet-dot"></span>Bringing new IT solutions to the market</li>
                <li><span class="intro-bullet-dot"></span>To be included the list of the best 100 IT companies</li>
                <li><span class="intro-bullet-dot"></span>Our company have 300 IT senior professionals.</li>
            </ul>
            <a href="#" class="intro-btn">Learn More</a>
        </div>
    </div>
</section>

<!-- Section Slider Fasilitas -->
<section class="fasilitas-slider-section">
  <div class="slider-container">
    <button class="slider-nav slider-nav-left" aria-label="Sebelumnya">&#10094;</button>
    <div class="slider-track">
      <!-- Card 1 -->
      <div class="slider-card slider-card-side">
        <img src="{{ asset('images/bola2.png') }}" alt="Cabin Training">
        <div class="slider-label slider-label-vertical slider-label-blue">CABIN TRAININGS</div>
      </div>
      <!-- Card 2 (center) -->
      <div class="slider-card slider-card-center">
        <img src="{{ asset('images/senang.png') }}" alt="Full Flight Simulators">
        <div class="slider-info slider-label-yellow">
          <h3>FULL FLIGHT SIMULATORS</h3>
          <p>Are you ready for take off and flight with our training center?</p>
          <a href="#" class="slider-btn">ALL SIMULATORS</a>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="slider-card slider-card-side">
        <img src="{{ asset('images/stadion.png') }}" alt="Cockpit Training">
        <div class="slider-label slider-label-vertical slider-label-blue">COCKPIT TRAININGS</div>
      </div>
    </div>
    <button class="slider-nav slider-nav-right" aria-label="Selanjutnya">&#10095;</button>
  </div>
</section>

<div class="container py-5">
    <h2 class="text-center mb-4">Fasilitas Sekolah</h2>
    @if ($fasilitas->count())
        <div class="row">
            @foreach ($fasilitas as $item)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        @if ($item->foto)
                            <img src="{{ asset('storage/fasilitas/' . $item->foto) }}" class="card-img-top" alt="Foto {{ $item->nama }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->nama }}</h5>
                            <p class="card-text">{{ Str::limit($item->deskripsi, 100) }}</p>
                            <p><strong>Tahun:</strong> {{ $item->tahun }}</p>
                            <p><strong>Perhatian Teknis:</strong> {{ $item->perhatian_teknis ?? '-' }}</p>
                            <p><strong>Penambahan:</strong> {{ $item->penambahan ?? '-' }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center">Belum ada data fasilitas.</p>
    @endif
</div>
@endsection

@section('scripts')

<script src="{{ asset('js/fasilitas-slider.js') }}"></script>
@endsection
