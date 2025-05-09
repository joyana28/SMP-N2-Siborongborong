@extends('layouts.frontend.app')

@section('title', 'Tenaga Pendidik')

@section('content')
<link rel="stylesheet" href="{{ asset('css/guru.css') }}">

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

<div class="container py-5">
<h2 class="mb-4 text-center text-white bg-primary py-2 rounded">Guru</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @forelse ($guru as $g)
        <div class="col">
            <div class="card h-100 teacher-card shadow">
                <div class="teacher-header text-center mt-4">
                    @if ($g->foto)
                        <img src="{{ asset('storage/guru/' . $g->foto) }}" alt="Foto {{ $g->nama }}" class="rounded-circle teacher-img" width="120" height="120">
                    @else
                        <img src="{{ asset('images/default-user.jpg') }}" alt="Default" class="rounded-circle teacher-img" width="120" height="120">
                    @endif
                </div>
                <div class="card-body text-center">
                    <h5 class="teacher-name">{{ $g->nama }}</h5>
                    <p class="teacher-subject">{{ $g->bidang }}</p>
                    <p class="text-muted mb-1"><strong>NIP:</strong> {{ $g->nip }}</p>
                    <p class="text-muted mb-1"><strong>Golongan:</strong> {{ $g->golongan }}</p>
                    <p class="text-muted mb-0"><strong>No. Telp:</strong> {{ $g->no_telp }}</p>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center">
            <div class="no-data py-5">
                <i class="fas fa-user-slash fa-3x mb-3 text-secondary"></i>
                <h5>Belum ada data guru</h5>
                <p class="text-muted">Silakan cek kembali nanti.</p>
            </div>
        </div>
        @endforelse
    </div>
</div>
@endsection
