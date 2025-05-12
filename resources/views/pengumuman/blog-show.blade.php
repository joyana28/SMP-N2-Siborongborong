@extends('layouts.frontend.app')

@section('title', 'Detail Pengumuman')

{{-- Link ke file CSS khusus halaman pengumuman --}}
<link rel="stylesheet" href="{{ asset('css/pengumuman.css') }}">

@section('content')

<!-- Hero Section: Header Pengumuman -->
<section class="pengumuman-hero-section position-relative text-center text-white">
    <div class="pengumuman-hero-overlay"></div>
    <div class="pengumuman-hero-content position-relative z-2 py-5">
        <h1 class="pengumuman-hero-title display-5 fw-bold">Pengumuman Sekolah</h1>
        <p class="pengumuman-hero-desc fs-5 mt-3">
            Temukan informasi dan pengumuman terbaru dari SMP Negeri 2 Siborongborong.
        </p>
    </div>
    <div class="pengumuman-hero-shape"></div>
</section>

<!-- Section: Detail Pengumuman -->
<section class="pengumuman-detail-section py-5 bg-light">
    <div class="container pengumuman-detail-container">

        {{-- Judul Pengumuman --}}
        <h2 class="pengumuman-detail-title text-dark mb-2">{{ $pengumuman->judul }}</h2>

        {{-- Tanggal Terbit --}}
        <p class="pengumuman-detail-date text-muted mb-4">
            {{ \Carbon\Carbon::parse($pengumuman->tanggal_terbit)->format('F d, Y') }}
        </p>

        {{-- Gambar Pengumuman (jika ada) --}}
@if ($pengumuman->foto)
    <div class="pengumuman-detail-image mb-4">
        <img 
            src="{{ asset('pengumuman/' . $pengumuman->foto) }}" 
            alt="Foto Pengumuman" 
            class="img-fluid rounded shadow-sm"
            style="width: 100%; max-height: 400px; object-fit: cover;"
        >
    </div>
@endif

        {{-- Isi Konten Pengumuman --}}
        <div class="pengumuman-detail-content mb-5" style="line-height: 1.8; font-size: 1.1rem;">
            {!! nl2br(e($pengumuman->isi)) !!}
        </div>

        {{-- Tombol Kembali --}}
        <a href="{{ url()->previous() }}" class="btn btn-outline-primary">
            ← Kembali
        </a>
    </div>

    {{-- Dekorasi background (jika ada) --}}
    <div class="pengumuman-detail-bg-decor"></div>
</section>

@endsection
