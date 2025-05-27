@extends('layouts.frontend.app')

@section('title', 'Detail Pengumuman')


<link rel="stylesheet" href="{{ asset('css/pengumuman.css') }}">


@section('content')

<!-- Hero Section -->
<section class="fasilitas-hero-section">
    <div class="fasilitas-hero-text">
        <h1 class="fasilitas-title">Pengumuman Sekolah</h1>
        <p class="fasilitas-description">Temukan informasi dan pengumuman terbaru dari SMP Negeri 2 Siborongborong.</p>
    </div>
</section>

<!-- Detail Pengumuman -->
<section class="pengumuman-detail-section">
    <div class="pengumuman-detail-container">

        <h2 class="pengumuman-detail-title">{{ $pengumuman->judul }}</h2>
        <p class="pengumuman-detail-date">
            Diterbitkan pada {{ \Carbon\Carbon::parse($pengumuman->tanggal_terbit)->translatedFormat('d F Y') }}
        </p>

        @if ($pengumuman->foto)
            <div class="pengumuman-detail-image">
                <img 
                    src="{{ asset('pengumuman/' . $pengumuman->foto) }}" 
                    alt="Foto Pengumuman" 
                    class="pengumuman-detail-img"
                    style="max-width: 600px; max-height: 350px; object-fit: cover;">
            </div>
        @endif

        <div class="pengumuman-lampiran-wrapper">
            <h5 class="pengumuman-lampiran-title">📎 Lampiran Dokumen</h5>
            @if ($pengumuman->lampiran)
                <div class="pengumuman-lampiran-card">
                    <div class="lampiran-icon-area">
                        <i class="bi bi-file-earmark-text-fill"></i>
                    </div>
                    <div class="lampiran-content-area">
                        <p class="lampiran-nama">{{ $pengumuman->lampiran }}</p>
                        <a href="{{ asset('pengumuman/lampiran/' . $pengumuman->lampiran) }}" 
                           class="lampiran-btn" 
                           target="_blank">
                            Unduh Lampiran
                        </a>
                    </div>
                </div>
            @else
                <p class="pengumuman-lampiran-empty">Tidak ada lampiran tersedia untuk pengumuman ini.</p>
            @endif
        </div>

        <div class="pengumuman-detail-content">
            {!! nl2br(e($pengumuman->isi)) !!}
        </div>

        <a href="{{ url()->previous() }}" class="pengumuman-back-btn">
            Kembali
        </a>

    </div>
</section>

@endsection
