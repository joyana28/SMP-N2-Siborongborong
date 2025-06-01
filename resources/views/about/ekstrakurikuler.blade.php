@extends('layouts.frontend.app')

@section('content')
<!-- Hero Section -->
<section class="ekstra-hero-section mb-16">
    <div class="container">
        <div class="ekstra-hero-text">
            <h1 class="ekstra-title">Ekstrakurikuler Sekolah</h1>
            <p class="ekstra-description">Beragam kegiatan ekstrakurikuler untuk mengembangkan bakat, minat, dan karakter siswa.</p>
        </div>
    </div>
</section>

<!-- Section Intro Ekstrakurikuler -->
<section class="ekstra-intro-section mb-16">
  <div class="container">
    <div class="ekstra-intro-grid">
      <!-- Left: Gambar -->
      <div class="ekstra-intro-imgwrap">
        <div class="ekstra-img-diagonal v3-diagonal-img">
          <div class="diagonal-piece diagonal-top"></div>
          <div class="diagonal-piece diagonal-mid"></div>
          <div class="diagonal-piece diagonal-bottom"></div>
          <img src="{{ asset('images/ekstrakurikuler.png') }}" alt="Ekstrakurikuler" class="ekstra-img-diagonal-main v3-diagonal-img-main">
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
      </div>
    </div>
  </div>
</section>

<!-- Title Graphics Ekstrakurikuler -->
<div class="ekstra-title-graphics-outer ekstra-title-graphics-left mb-16">
  <div class="ekstra-title-graphics-bg"></div>
  <div class="ekstra-title-graphics-main">
    <span class="ekstra-title-graphics-icon"><i class="fas fa-users"></i></span>
    <span class="ekstra-title-graphics-text">daftar ekstrakurikuler</span>
    <span class="ekstra-title-graphics-chevron chevron-1"></span>
    <span class="ekstra-title-graphics-chevron chevron-2"></span>
    <span class="ekstra-title-graphics-chevron chevron-3"></span>
  </div>
</div>

<!-- Data Ekstrakurikuler -->
<div class="container mx-auto py-10 px-4 mt-16">
    @if ($ekstrakurikuler->isEmpty())
        <p class="text-center text-gray-600">Data ekstrakurikuler belum ada.</p>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 justify-items-center">
            @foreach ($ekstrakurikuler as $item)
                <div class="ekstra-card-animate group">
                    @if ($item->foto)
                        <div class="ekstra-card-img-wrap">
                            <img src="{{ asset('ekstrakurikuler/' . $item->foto) }}" class="ekstra-card-img" alt="Foto {{ $item->nama }}">
                        </div>
                    @endif
                    <div class="ekstra-card-content">
                        <h5 class="ekstra-card-title">{{ $item->nama }}</h5>
                        <p class="ekstra-card-desc">{{ $item->deskripsi }}</p>
                        <p class="text-sm text-gray-600 mt-2"><strong>Pembina:</strong> {{ $item->pembina }}</p>
                        <p class="text-sm text-gray-600"><strong>Jadwal:</strong> {{ $item->jadwal }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('css/ekstrakurikuler.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endsection

@section('scripts')
<script src="{{ asset('js/ekstrakurikuler.js') }}"></script>
@endsection