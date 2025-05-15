@extends('layouts.frontend.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/prestasi.css') }}">
<script src="{{ asset('js/prestasi.js') }}" defer></script>

<!-- Hero Section Akademik -->
<section class="nonakademik-hero-section">
    <div class="nonakademik-hero-content">
        <div class="nonakademik-hero-text">
            <h1 class="nonakademik-title">Prestasi Akademik</h1>
            <p class="nonakademik-description">Menampilkan prestasi-prestasi akademik yang membanggakan dari siswa-siswi SMP Negeri 2 Siborongborong.</p>
        </div>
    </div>
</section>

<!-- Section Eksplorasi Prestasi Akademik -->
<section class="nonakademik-explore-section">
    <div class="nonakademik-explore-bg-animated"></div>
    <svg class="nonakademik-explore-svg-decor decor-star" width="32" height="32">
        <circle cx="16" cy="16" r="8" fill="#1a56a7" opacity="0.18"/>
    </svg>
    <svg class="nonakademik-explore-svg-decor decor-dot" width="16" height="16">
        <circle cx="8" cy="8" r="3" fill="#f3b11f" opacity="0.18"/>
    </svg>
    <svg class="nonakademik-explore-svg-decor decor-wave" width="120" height="32">
        <ellipse cx="60" cy="16" rx="60" ry="12" fill="#1a56a7" opacity="0.12"/>
    </svg>

    <div class="nonakademik-explore-header">
        <h2 class="nonakademik-explore-main-title gradient-text">Beragam Prestasi <span>Akademik</span></h2>
    </div>

    <div class="nonakademik-explore-features">
        <div class="nonakademik-feature-card glass-card">
            <div class="feature-icon feature-bg-1 floating-icon"><i class="fas fa-trophy"></i></div>
            <div class="feature-title">Olimpiade</div>
            <div class="feature-desc">Prestasi dalam bidang sains, matematika, dan lomba akademik lainnya.</div>
        </div>
        <div class="nonakademik-feature-card glass-card">
            <div class="feature-icon feature-bg-2 floating-icon"><i class="fas fa-user-graduate"></i></div>
            <div class="feature-title">Lulusan Terbaik</div>
            <div class="feature-desc">Siswa-siswi yang lulus dengan nilai terbaik dan prestasi akademik unggulan.</div>
        </div>
        <div class="nonakademik-feature-card glass-card">
            <div class="feature-icon feature-bg-3 floating-icon"><i class="fas fa-book"></i></div>
            <div class="feature-title">Karya Ilmiah</div>
            <div class="feature-desc">Prestasi dalam menulis dan mempresentasikan karya ilmiah remaja.</div>
        </div>
        <div class="nonakademik-feature-card glass-card">
            <div class="feature-icon feature-bg-4 floating-icon"><i class="fas fa-lightbulb"></i></div>
            <div class="feature-title">Inovasi</div>
            <div class="feature-desc">Gagasan dan temuan akademik yang berkontribusi positif bagi masyarakat.</div>
        </div>
    </div>

    <div class="nonakademik-explore-bg-wave"></div>
    <div class="nonakademik-explore-bg-decor"></div>
</section>

<!-- Judul Section -->
<div class="nonakademik-section-title">
    <h2>Prestasi Akademik Kami</h2>
    <div class="nonakademik-title-underline"></div>
</div>

@if ($prestasiAkademik->count())
    <div class="idcard-modern-list">
        @foreach ($prestasiAkademik as $prestasi)
            <div class="idcard-modern animated-idcard">
                <div class="idcard-bg-diagonal">
                    <div class="idcard-photo-outer">
                        @if (!empty($prestasi->foto))
                            <img src="{{ asset('prestasi/' . $prestasi->foto) }}" alt="Foto Prestasi" class="idcard-photo" onclick="zoomNonakadPhoto(this)">
                        @else
                            <div class="idcard-photo-placeholder" onclick="zoomNonakadPhoto(this)">No Image</div>
                        @endif
                    </div>
                </div>
                <div class="idcard-content">
                    <div class="idcard-name-role">
                        <span class="idcard-name">{{ strtoupper($prestasi->nama) }}</span>
                        <span class="idcard-role">{{ ucfirst($prestasi->jenis) }}</span>
                    </div>
                    <div class="idcard-divider"></div>
                    <div class="idcard-meta">
                        <div class="idcard-meta-row idcard-deskripsi">
                            {{ $prestasi->deskripsi }}
                        </div>
                    </div>
                    <div class="akademik-card-date text-sm text-gray-500 mt-1">
                        {{ $prestasi->tanggal ? \Carbon\Carbon::parse($prestasi->tanggal)->translatedFormat('d F Y') : '' }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $prestasiAkademik->links() }}
    </div>
@else
    <div class="no-prestasi mt-4">
        <strong>Oops!</strong> Belum ada prestasi akademik yang ditambahkan untuk saat ini.
    </div>
@endif
<div class="zoom-modal" id="zoomModal">
    <span class="zoom-modal-close" id="zoomClose">&times;</span>
    <img class="zoom-modal-image" id="zoomImage" src="#" alt="Zoomed Image">
  </div>
@endsection
