@extends('layouts.frontend.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/pendaftaran.css') }}">

<!-- Hero Section Pendaftaran -->
<section class="pendaftaran-hero-modern">
    <div class="pendaftaran-hero-modern-bg"></div>
    <div class="pendaftaran-hero-modern-content">
        <div class="pendaftaran-hero-modern-label">Selamat Datang di Halaman Pendaftaran</div>
        <h1 class="pendaftaran-hero-modern-title">Bergabunglah Menjadi Bagian dari Keluarga Besar Kami</h1>
        <div class="pendaftaran-hero-modern-desc">
            Daftarkan dirimu sekarang dan raih kesempatan untuk belajar, berkembang, dan berprestasi bersama kami di lingkungan yang inspiratif dan penuh semangat!
        </div>
    </div>
    <div class="pendaftaran-hero-modern-decor decor-1"></div>
    <div class="pendaftaran-hero-modern-decor decor-2"></div>
</section>

<!-- Banner Section (before Prosedur Pendaftaran) -->
<section class="pendaftaran-banner-section">
    <div class="pendaftaran-banner-left">
        <span class="banner-main-text">LANGKAH PENDAFTARAN</span>
    </div>
    <div class="pendaftaran-banner-right">
        <span class="banner-sub-text">Ikuti setiap langkah berikut untuk proses pendaftaran yang lancar</span>
    </div>
</section>
<div class="pendaftaran-banner-paragraph">
    <p>
        Proses pendaftaran di SMP Negeri 2 Siborongborong dirancang agar mudah, cepat, dan transparan. Pastikan Anda membaca setiap instruksi dengan seksama dan menyiapkan dokumen yang diperlukan sebelum memulai. Jika ada kendala, tim kami siap membantu Anda setiap saat.
    </p>
</div>

<!-- Prosedur Pendaftaran Section (Infographic Style) -->
<section class="pendaftaran-prosedur-section">
    <div class="pendaftaran-prosedur-arrow arrow-blue">
        <div class="pendaftaran-prosedur-icon">
            <!-- SVG icon: form/clipboard -->
            <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="7" y="5" width="24" height="30" rx="4" fill="#fff" stroke="#1a56a7" stroke-width="2.5"/>
                <rect x="13" y="2" width="12" height="6" rx="2" fill="#1a56a7" stroke="#f3b11f" stroke-width="2"/>
                <rect x="12" y="13" width="14" height="2.5" rx="1.2" fill="#1a56a7"/>
                <rect x="12" y="18" width="14" height="2.5" rx="1.2" fill="#1a56a7"/>
                <rect x="12" y="23" width="10" height="2.5" rx="1.2" fill="#1a56a7"/>
            </svg>
        </div>
        <div class="pendaftaran-prosedur-content">
            <div class="pendaftaran-prosedur-title">Isi Formulir Pendaftaran</div>
            <div class="pendaftaran-prosedur-desc">Lengkapi data diri dan dokumen yang diperlukan pada formulir pendaftaran online yang telah disediakan oleh sekolah.</div>
        </div>
        <div class="pendaftaran-prosedur-number">01</div>
    </div>
    <div class="pendaftaran-prosedur-arrow arrow-yellow">
        <div class="pendaftaran-prosedur-icon">
            <!-- SVG icon: upload/checklist -->
            <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="7" y="5" width="24" height="30" rx="4" fill="#fff" stroke="#f3b11f" stroke-width="2.5"/>
                <path d="M19 24v-8" stroke="#1a56a7" stroke-width="2.5" stroke-linecap="round"/>
                <path d="M15 18l4-4 4 4" stroke="#1a56a7" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                <rect x="13" y="28" width="12" height="2.5" rx="1.2" fill="#f3b11f"/>
            </svg>
        </div>
        <div class="pendaftaran-prosedur-content">
            <div class="pendaftaran-prosedur-title">Unggah & Verifikasi</div>
            <div class="pendaftaran-prosedur-desc">Unggah dokumen persyaratan, lalu tunggu proses verifikasi dari panitia pendaftaran. Hasil seleksi akan diumumkan melalui website sekolah.</div>
        </div>
        <div class="pendaftaran-prosedur-number">02</div>
    </div>
</section>

<!-- Card Formulir Pendaftaran (Dynamic from Admin) -->
@if($formulir)
<section class="formulir-card-section">
    <div class="formulir-card-frontend">
        <div class="formulir-card-header">
            <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="7" y="5" width="24" height="30" rx="4" fill="#fff" stroke="#1a56a7" stroke-width="2.5"/>
                <rect x="13" y="2" width="12" height="6" rx="2" fill="#1a56a7" stroke="#f3b11f" stroke-width="2"/>
                <rect x="12" y="13" width="14" height="2.5" rx="1.2" fill="#1a56a7"/>
                <rect x="12" y="18" width="14" height="2.5" rx="1.2" fill="#1a56a7"/>
                <rect x="12" y="23" width="10" height="2.5" rx="1.2" fill="#1a56a7"/>
            </svg>
            <span class="formulir-card-title">Formulir Pendaftaran Terbaru</span>
        </div>
        <div class="formulir-card-body">
            <div class="formulir-card-desc">{{ $formulir->deskripsi }}</div>
            <div class="formulir-card-dates">
                <span class="formulir-card-date"><b>Terbit:</b> {{ \Carbon\Carbon::parse($formulir->tanggal_terbit)->format('d M Y') }}</span>
                <span class="formulir-card-date"><b>Berakhir:</b> {{ \Carbon\Carbon::parse($formulir->tanggal_berakhir)->format('d M Y') }}</span>
            </div>
            <div class="formulir-card-download">
                <a href="{{ Storage::url('public/formulir/' . $formulir->formulir_pendaftaran) }}" class="btn btn-unduh-formulir" target="_blank" download="{{ $formulir->formulir_pendaftaran }}">
                    <i class="fa fa-download"></i> Unduh Formulir
                </a>
            </div>
        </div>
    </div>
</section>
@endif

</div>
@endsection
