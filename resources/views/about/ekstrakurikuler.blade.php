@extends('layouts.frontend.app')

@section('content')
<!-- Hero Section -->
<section class="ekstra-hero-section">
    <div class="container">
        <div class="ekstra-hero-text">
            <h1 class="ekstra-title">Ekstrakurikuler Sekolah</h1>
            <p class="ekstra-description">Beragam kegiatan ekstrakurikuler untuk mengembangkan bakat, minat, dan karakter siswa.</p>
        </div>
    </div>
</section>

<!-- Section Intro Ekstrakurikuler -->
<section class="ekstra-intro-section">
  <div class="container">
    <div class="ekstra-intro-grid">
      <!-- Left: Gambar -->
      <div class="ekstra-intro-imgwrap">
        <div class="ekstra-img-modern">
          <img src="{{ asset('images/ekstrakurikuler.png') }}" alt="Ekstrakurikuler" class="ekstra-img-modern-main">
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
  </div>
</section>


<!-- Data Ekstrakurikuler -->
<div class="container mx-auto py-10 px-4">
    <h2 class="text-2xl font-bold text-center mb-6 text-[#1a56a7]">Ekstrakurikuler Sekolah</h2>
    @if ($ekstrakurikuler->isEmpty())
        <p class="text-center text-gray-600">Data ekstrakurikuler tidak ditemukan.</p>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($ekstrakurikuler as $item)
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                    <h5 class="text-lg font-semibold mb-2 text-[#1a56a7]">{{ $item->nama }}</h5>
                    <p class="text-gray-600 text-sm">{{ $item->deskripsi }}</p>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('css/ekstrakurikuler.css') }}">
@endsection

@section('scripts')
<script src="{{ asset('js/ekstrakurikuler.js') }}"></script>
@endsection