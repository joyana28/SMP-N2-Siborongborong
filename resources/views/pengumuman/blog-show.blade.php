@extends('layouts.frontend.app')

@section('title', 'Detail Pengumuman')


<link rel="stylesheet" href="{{ asset('css/pengumuman.css') }}">


@section('content')

<!-- Hero Section -->
<section class="pengumuman-hero-section">
    <div class="pengumuman-hero-text">
        <h1 class="pengumuman-title">Pengumuman Sekolah</h1>
        <p class="pengumuman-description">Temukan informasi dan pengumuman terbaru dari SMP Negeri 2 Siborongborong.</p>
    </div>
</section>

<!-- Detail Pengumuman -->
<section class="pengumuman-detail-section">
    <div class="pengumuman-flip-card">
        <div class="pengumuman-flip-inner">
            <!-- FRONT SIDE -->
            <div class="pengumuman-flip-front">
                <div class="pengumuman-front-content">
                    <div class="pengumuman-front-header">
                        <div class="pengumuman-front-judul">{{ $pengumuman->judul }}</div>
                    </div>
                    @if ($pengumuman->foto)
                    <div class="pengumuman-front-image">
                        <img src="{{ asset('pengumuman/' . $pengumuman->foto) }}" alt="Foto Pengumuman" class="pengumuman-front-img">
                    </div>
                    @endif
                </div>
            </div>
            <!-- BACK SIDE -->
            <div class="pengumuman-flip-back">
                <div class="pengumuman-back-content">
                    <div class="pengumuman-back-title">Detail Pengumuman</div>
                    <div class="pengumuman-back-info"><b>Isi:</b> {!! nl2br(e($pengumuman->isi)) !!}</div>
                    <div class="pengumuman-back-info"><b>Tanggal Terbit:</b> {{ \Carbon\Carbon::parse($pengumuman->tanggal_terbit)->translatedFormat('d F Y') }}</div>
                    <div class="pengumuman-back-info"><b>Tanggal Berakhir:</b> {{ $pengumuman->tanggal_berakhir ? \Carbon\Carbon::parse($pengumuman->tanggal_berakhir)->translatedFormat('d F Y') : '-' }}</div>
                    @if ($pengumuman->foto)
                    <div class="pengumuman-back-info"><b>Foto:</b><br><img src="{{ asset('pengumuman/' . $pengumuman->foto) }}" alt="Foto Pengumuman" class="pengumuman-back-img"></div>
                    @endif
                    @if ($pengumuman->lampiran)
                    <div class="pengumuman-back-info"><b>Lampiran:</b> <a href="{{ asset('pengumuman/lampiran/' . $pengumuman->lampiran) }}" target="_blank" class="pengumuman-back-lampiran">{{ $pengumuman->lampiran }}</a></div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
