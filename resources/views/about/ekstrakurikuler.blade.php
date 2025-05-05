@extends('layouts.frontend.app')

@section('content')
<!-- Hero Section -->
<section class="ekstra-hero-section">
    <div class="ekstra-hero-text">
        <h1 class="ekstra-title">Ekstrakurikuler Sekolah</h1>
        <p class="ekstra-description">Beragam kegiatan ekstrakurikuler untuk mengembangkan bakat, minat, dan karakter siswa.</p>
    </div>
</section>
<!-- Section Intro Ekstrakurikuler -->
<section class="ekstra-intro-section">
  <div class="ekstra-intro-grid">
    <!-- Left: Gambar dan Play -->
    <div class="ekstra-intro-imgwrap">
      <div class="ekstra-img-shape">
        <img src="{{ asset('images/ekstrakurikuler.png') }}" alt="Ekstrakurikuler" class="ekstra-img-main">
      </div>
    </div>
    <!-- Right: Konten -->
    <div class="ekstra-intro-content">
      <div class="ekstra-intro-label">ABOUT EKSTRAKURIKULER</div>
      <h2 class="ekstra-intro-title">Kami Siap Mengembangkan Potensi Siswa Lewat Kegiatan Ekstrakurikuler</h2>
      <p class="ekstra-intro-desc">Ekstrakurikuler di sekolah kami dirancang untuk menumbuhkan bakat, minat, dan karakter siswa melalui berbagai kegiatan positif, kolaboratif, dan inspiratif.</p>
      <ul class="ekstra-intro-list">
        <li>Pengembangan karakter dan kepemimpinan</li>
        <li>Kegiatan seni, olahraga, dan sains</li>
        <li>Pembinaan teamwork dan kreativitas</li>
      </ul>
      <div class="ekstra-intro-info-box">
        <div class="info-number">6,561+</div>
        <div class="info-label">Siswa Aktif</div>
      </div>
      <div class="ekstra-intro-actions">
        <a href="#" class="ekstra-intro-btn">Explore More</a>
        <div class="ekstra-intro-contact">
          <span class="contact-icon"></span>
          <span class="contact-label">Call Us Now</span>
          <span class="contact-phone">+628x-xxxx-xxxx</span>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container py-5">
    <h2 class="text-center mb-4">Ekstrakurikuler Sekolah</h2>
    @if ($ekstrakurikuler->isEmpty())
        <p>Data ekstrakurikuler tidak ditemukan.</p>
    @else
        <div class="list-group">
            @foreach ($ekstrakurikuler as $item)
                <div class="list-group-item">
                    <h5>{{ $item->nama }}</h5>
                    <p>{{ $item->deskripsi }}</p>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('css/ekstrakurikuler.css') }}">
@endsection
