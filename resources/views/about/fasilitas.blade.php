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
    <div class="intro-grid intro-grid-align-top">
        <!-- Left: Overlapping Images -->
        <div class="intro-images">
            <img src="{{ asset('images/pp 2.png') }}" alt="Fasilitas 1" class="intro-img img-main">
            <img src="{{ asset('images/pp 3.png') }}" alt="Fasilitas 2" class="intro-img img-overlap">
        </div>
        <!-- Right: Content -->
        <div class="intro-content">
            <div class="intro-label">Tentang Fasilitas</div>
            <h2 class="intro-title">Fasilitas Unggulan untuk Mendukung Prestasi Siswa</h2>
            <p class="intro-desc">SMPN 2 Siborongborong menyediakan berbagai fasilitas modern dan lengkap untuk menunjang proses belajar mengajar, pengembangan karakter, dan kreativitas siswa. Setiap fasilitas dirancang untuk memberikan pengalaman belajar yang menyenangkan, aman, dan inspiratif.</p>
            <div class="intro-features-animated intro-goals-list">
                <div class="intro-goal animated-goal">
                    <span class="goal-icon">
                        <!-- Icon bintang/achievement -->
                        <svg width="28" height="28" fill="none" stroke="#f3b11f" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><polygon points="12 2 15 8.5 22 9.3 17 14.1 18.2 21 12 17.8 5.8 21 7 14.1 2 9.3 9 8.5 12 2"/></svg>
                    </span>
                    <span class="goal-text"><strong>Fasilitas ini akan memberikan pengalaman belajar yang menyenangkan</strong> melalui lingkungan yang aman, nyaman, dan inspiratif.</span>
                </div>
                <div class="intro-goal animated-goal">
                    <span class="goal-icon">
                        <!-- Icon lampu/ide -->
                        <svg width="28" height="28" fill="none" stroke="#1a56a7" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><circle cx="12" cy="12" r="8"/><path d="M9 12a3 3 0 0 1 6 0c0 1.5-1.5 2.5-3 4-1.5-1.5-3-2.5-3-4z"/><line x1="12" y1="18" x2="12" y2="20"/><line x1="9" y1="20" x2="15" y2="20"/></svg>
                    </span>
                    <span class="goal-text"><strong>Fasilitas ini mendorong kreativitas dan inovasi siswa</strong> dengan menyediakan sarana untuk bereksplorasi dan berkreasi.</span>
                </div>
                <div class="intro-goal animated-goal">
                    <span class="goal-icon">
                        <!-- Icon trophy/prestasi -->
                        <svg width="28" height="28" fill="none" stroke="#f3b11f" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M8 21h8M12 17v4M17 5V3H7v2a5 5 0 0 0 10 0z"/><path d="M21 7a2 2 0 0 1-2 2h-1M3 7a2 2 0 0 0 2 2h1"/></svg>
                    </span>
                    <span class="goal-text"><strong>Fasilitas ini mendukung peningkatan prestasi akademik dan non-akademik</strong> dengan ruang belajar, laboratorium, dan area olahraga yang memadai.</span>
                </div>
                <div class="intro-goal animated-goal">
                    <span class="goal-icon">
                        <!-- Icon people/kolaborasi -->
                        <svg width="28" height="28" fill="none" stroke="#1a56a7" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><circle cx="7" cy="17" r="3"/><circle cx="17" cy="17" r="3"/><circle cx="12" cy="7" r="3"/><path d="M7 17v-2a5 5 0 0 1 10 0v2"/></svg>
                    </span>
                    <span class="goal-text"><strong>Fasilitas ini membangun karakter dan keterampilan sosial</strong> melalui ruang kolaborasi, kegiatan ekstrakurikuler, dan pembinaan keagamaan.</span>
                </div>
                <div class="intro-goal animated-goal">
                    <span class="goal-icon">
                        <!-- Icon globe/digital -->
                        <svg width="28" height="28" fill="none" stroke="#f3b11f" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><ellipse cx="12" cy="12" rx="10" ry="4"/><path d="M2 12a10 10 0 0 0 20 0"/></svg>
                    </span>
                    <span class="goal-text"><strong>Fasilitas ini mempersiapkan siswa menghadapi era global dan digital</strong> dengan akses teknologi dan literasi informasi yang memadai.</span>
                </div>
            </div>
            <a href="#" class="intro-btn">Lihat Semua Fasilitas</a>
        </div>
    </div>
</section>


<!-- Judul Profil Sekolah -->
<div class="profil-sekolah-title">
  <h2>Fasilitas Sekolah</h2>
  <div class="profil-sekolah-underline"></div>
</div>

<div class="container py-5">
    @if ($fasilitas->count())
        <div class="fasilitas-card-row">
            @foreach ($fasilitas as $item)
                <div class="fasilitas-flip-card">
                    <div class="fasilitas-flip-inner">
                        <!-- FRONT SIDE -->
                        <div class="fasilitas-flip-front">
                            <div class="fasilitas-front-content">
                                <div class="fasilitas-front-left">
                                    <div class="fasilitas-nama">{{ $item->nama }}</div>
                                </div>
                                <div class="fasilitas-front-right">
                                    <img src="{{ asset('fasilitas/' . $item->foto) }}" alt="Foto {{ $item->nama }}" class="fasilitas-foto">
                                </div>
                            </div>
                        </div>
                        <!-- BACK SIDE -->
                        <div class="fasilitas-flip-back">
                            <div class="fasilitas-back-content">
                                <div class="fasilitas-back-left">
                                    <img src="{{ asset('storage/fasilitas/' . $item->foto) }}" alt="Foto {{ $item->nama }}" class="fasilitas-foto">
                                </div>
                                <div class="fasilitas-back-right">
                                    <div class="fasilitas-nama-back">{{ $item->nama }}</div>
                                    <div class="fasilitas-deskripsi">{{ $item->deskripsi }}</div>
                                    <div class="fasilitas-info"><b>Tahun:</b> {{ $item->tahun }}</div>
                                    <div class="fasilitas-info"><b>Perhatian Teknis:</b> {{ $item->perhatian_teknis }}</div>
                                    <div class="fasilitas-info"><b>Penambahan:</b> {{ $item->penambahan }}</div>
                                </div>
                            </div>
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
