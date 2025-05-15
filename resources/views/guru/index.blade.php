@extends('layouts.frontend.app')

@section('title', 'Tenaga Pendidik')

@section('content')
<link rel="stylesheet" href="{{ asset('css/guru.css') }}">
<link rel="icon" type="images/x-icon" href="/images/logo.png" />

<!-- Hero Section Guru -->
<section class="guru-hero-section">
    <div class="guru-hero-overlay"></div>
    <div class="guru-hero-content">
        <h1 class="guru-hero-title">Guru Hebat, Generasi Kuat</h1>
        <div class="guru-hero-desc">
            Para guru kami adalah inspirasi dan teladan dalam membimbing, mendidik, dan membentuk karakter siswa untuk masa depan yang gemilang dan berdaya saing.
        </div>
    </div>
    <div class="guru-hero-shape"></div>
</section>

<!-- Title Design Graphics Section (Revised) -->
<section class="guru-title-graphics-section">
    <div class="title-graphics-outer">
        <div class="title-graphics-bg-skew"></div>
        <div class="title-graphics-inner">
            <div class="title-graphics-bar"></div>
            <div class="title-graphics-text">DAFTAR GURU</div>
        </div>
    </div>
</section>
<!-- End Title Design Graphics Section -->

<div class="container py-5">
    <div class="guru-card-row">
        @forelse ($guru as $g)
        <div class="guru-card-col">
            <div class="idcard-guru">
                <div class="idcard-bg-top"></div>
                <div class="idcard-bg-diagonal"></div>
                <div class="idcard-photo-wrap">
                    @if ($g->foto)
                        <img src="{{ asset('/guru/' . $g->foto) }}" alt="Foto {{ $g->nama }}" class="idcard-photo">
                    @else
                        <img src="{{ asset('images/default-user.jpg') }}" alt="Default" class="idcard-photo">
                    @endif
                </div>
                <div class="idcard-body">
                    <div class="idcard-nama"><span>{{ $g->nama }}</span></div>
                    <div class="idcard-bidang">{{ $g->bidang }}</div>
                    <div class="idcard-info">
                        <div><span class="idcard-label">NIP</span>: {{ $g->nip }}</div>
                        <div><span class="idcard-label">Golongan</span>: {{ $g->golongan }}</div>
                        <div><span class="idcard-label">No. Telp</span>: {{ $g->no_telp }}</div>
                    </div>
                </div>
                <div class="idcard-bg-bottom"></div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center">
            <div class="no-data py-5">
                <h2>Belum ada data guru</h2>
            </div>
        </div>
        @endforelse
    </div>
</div>
@endsection
