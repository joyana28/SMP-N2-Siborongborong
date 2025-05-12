@extends('layouts.frontend.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/nonakademik.css') }}">

<!-- Hero Section Nonakademik -->
<section class="nonakademik-hero-section">
    <div class="nonakademik-hero-content">
        <div class="nonakademik-hero-text">
            <h1 class="nonakademik-title">Prestasi Nonakademik</h1>
            <p class="nonakademik-description">Menampilkan prestasi-prestasi nonakademik yang membanggakan dari siswa-siswi SMP Negeri 2 Siborongborong, mulai dari seni, olahraga, hingga kreativitas dan bakat lainnya.</p>
        </div>
    </div>
</section>

<!-- Section Eksplorasi Prestasi Nonakademik (ENHANCED DESIGN) -->
<section class="nonakademik-explore-section">
    <div class="nonakademik-explore-bg-animated"></div>
    <svg class="nonakademik-explore-svg-decor decor-star" width="32" height="32"><circle cx="16" cy="16" r="8" fill="#f3b11f" opacity="0.18"/></svg>
    <svg class="nonakademik-explore-svg-decor decor-dot" width="16" height="16"><circle cx="8" cy="8" r="3" fill="#1a56a7" opacity="0.18"/></svg>
    <svg class="nonakademik-explore-svg-decor decor-wave" width="120" height="32"><ellipse cx="60" cy="16" rx="60" ry="12" fill="#f3b11f" opacity="0.12"/></svg>
    <div class="nonakademik-explore-header">
        <h2 class="nonakademik-explore-main-title gradient-text">Apa yang <span>Nonakademik</span> Tawarkan?</h2>
        <div class="nonakademik-explore-subtitle">Beragam kegiatan dan prestasi nonakademik untuk mengembangkan bakat, karakter, dan kreativitas siswa di luar kelas.</div>
    </div>
    <div class="nonakademik-explore-features">
        <div class="nonakademik-feature-card glass-card">
            <div class="feature-icon feature-bg-1 floating-icon"><i class="fas fa-futbol"></i></div>
            <div class="feature-title">Olahraga</div>
            <div class="feature-desc">Kompetisi dan klub olahraga untuk membangun sportivitas dan kesehatan.</div>
        </div>
        <div class="nonakademik-feature-card glass-card">
            <div class="feature-icon feature-bg-2 floating-icon"><i class="fas fa-paint-brush"></i></div>
            <div class="feature-title">Seni & Budaya</div>
            <div class="feature-desc">Ekspresikan kreativitas melalui seni, musik, tari, dan budaya.</div>
        </div>
        <div class="nonakademik-feature-card glass-card">
            <div class="feature-icon feature-bg-3 floating-icon"><i class="fas fa-users"></i></div>
            <div class="feature-title">Organisasi</div>
            <div class="feature-desc">Kembangkan jiwa kepemimpinan dan kerjasama dalam organisasi siswa.</div>
        </div>
        <div class="nonakademik-feature-card glass-card">
            <div class="feature-icon feature-bg-4 floating-icon"><i class="fas fa-lightbulb"></i></div>
            <div class="feature-title">Kreativitas</div>
            <div class="feature-desc">Ajang lomba dan inovasi untuk menyalurkan ide-ide kreatif siswa.</div>
        </div>
    </div>
    <div class="nonakademik-explore-bg-wave"></div>
    <div class="nonakademik-explore-bg-decor"></div>
</section>

<!-- Judul Section Fasilitas Sekolah -->
<div class="nonakademik-section-title">
    <h2>Prestasi Nonakademik Kami</h2>
    <div class="nonakademik-title-underline"></div>
</div>

    @if ($prestasiNonAkademik->count())
        <div class="row">
            @foreach ($prestasiNonAkademik as $prestasi)
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        @if ($prestasi->foto)
                            <img src="{{ asset('prestasi/' . $prestasi->foto) }}" class="card-img-top" alt="Foto Prestasi">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $prestasi->nama }}</h5>
                            <p class="card-text">{{ $prestasi->deskripsi }}</p>
                            <p class="card-text">
                                <small class="text-muted">Tanggal: {{ \Carbon\Carbon::parse($prestasi->tanggal)->format('d-m-Y') }}</small><br>
                                <small class="text-muted">Jenis: {{ ucfirst($prestasi->jenis) }}</small>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $prestasiNonAkademik->links() }}
        </div>
    @else
        <div class="no-prestasi mt-4">
            <strong>Oops!</strong> Belum ada prestasi non-akademik yang ditambahkan untuk saat ini.
        </div>
    @endif
</div>
@endsection
