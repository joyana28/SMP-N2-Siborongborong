@extends('layouts.frontend.app')

@section('title', 'Detail Pengumuman')

{{-- Link ke file CSS khusus halaman pengumuman --}}
@push('styles')
<link rel="stylesheet" href="{{ asset('css/pengumuman.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
@endpush

@section('content')

<!-- Hero Section -->
<section class="pengumuman-hero-section">
    <div class="pengumuman-hero-text">
        <h1 class="pengumuman-title">Pengumuman Sekolah</h1>
        <p class="pengumuman-description">Temukan informasi dan pengumuman terbaru dari SMP Negeri 2 Siborongborong.</p>
    </div>
</section>

<!-- Detail Pengumuman -->
<section class="pengumuman-detail-section py-5 bg-light">
    <div class="container">

        <h2 class="text-dark mb-2">{{ $pengumuman->judul }}</h2>
        <p class="text-muted mb-4">
            Diterbitkan pada {{ \Carbon\Carbon::parse($pengumuman->tanggal_terbit)->translatedFormat('d F Y') }}
        </p>

        @if ($pengumuman->foto)
            <div class="mb-4 text-center">
                <img 
                    src="{{ asset('pengumuman/' . $pengumuman->foto) }}" 
                    alt="Foto Pengumuman" 
                    class="img-fluid rounded shadow-sm"
                    style="max-width: 600px; max-height: 350px; object-fit: cover;">
            </div>
        @endif

        <div class="mb-4">
            <h5 class="mb-3">📎 Lampiran Dokumen</h5>
            @if ($pengumuman->lampiran)
                <div class="p-4 bg-white rounded shadow-sm border d-flex align-items-center" style="max-width: 700px;">
                    <i class="bi bi-file-earmark-text-fill fs-2 text-primary me-3"></i>
                    <div>
                        <p class="mb-1 fw-semibold">{{ $pengumuman->lampiran }}</p>
                        <a href="{{ asset('pengumuman/lampiran/' . $pengumuman->lampiran) }}" 
                           class="btn btn-sm btn-primary" 
                           target="_blank">
                            Unduh Lampiran
                        </a>
                    </div>
                </div>
            @else
                <p class="text-muted">Tidak ada lampiran tersedia untuk pengumuman ini.</p>
            @endif
        </div>

        <div class="mb-5" style="line-height: 1.8; font-size: 1.1rem;">
            {!! nl2br(e($pengumuman->isi)) !!}
        </div>

        <a href="{{ url()->previous() }}" class="btn btn-outline-primary">
            Kembali
        </a>

    </div>
</section>

@endsection
