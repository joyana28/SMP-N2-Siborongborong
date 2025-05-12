@extends('layouts.frontend.app')

@section('title', 'Profil Kepala Sekolah')

@section('content')
<link rel="stylesheet" href="{{ asset('css/kepalasekolah.css') }}">

<!-- Hero Section Kepala Sekolah -->
<section class="kepsek-hero-section">
    <div class="kepsek-hero-overlay"></div>
    <div class="kepsek-hero-content">
        <h1 class="kepsek-hero-title">Bangun Generasi Hebat Bersama Kepala Sekolah</h1>
        <div class="kepsek-hero-desc">
            Kepala sekolah kami berkomitmen membangun lingkungan pendidikan yang inspiratif, inovatif, dan bertanggung jawab untuk masa depan yang lebih baik.
        </div>
    </div>
    <div class="kepsek-hero-shape"></div>
</section>

<!-- Sambutan Kepala Sekolah Section (Modern, Card Data) -->
<section class="sambutan-modern-section py-5">
    <div class="container d-flex flex-wrap align-items-center justify-content-center sambutan-modern-container">
        <div class="sambutan-modern-img-card">
            <div class="sambutan-modern-img-wrapper sambutan-img-hover-group">
                @if ($kepalaSekolah->foto)
                    <img src="{{ asset('kepala_sekolah/' . $kepalaSekolah->foto) }}" alt="Foto {{ $kepalaSekolah->nama }}" class="sambutan-modern-img">
                @else
                    <img src="{{ asset('images/default-user.jpg') }}" alt="Default" class="sambutan-modern-img">
                @endif
                <div class="sambutan-img-overlay-box">
                    <div class="sambutan-img-overlay-title">Data Kepala Sekolah</div>
                    <div class="sambutan-img-overlay-list">
                        <div class="sambutan-img-overlay-item"><span>NIP:</span> {{ $kepalaSekolah->nip }}</div>
                        <div class="sambutan-img-overlay-item"><span>Golongan:</span> {{ $kepalaSekolah->golongan }}</div>
                        <div class="sambutan-img-overlay-item"><span>Periode:</span> {{ $kepalaSekolah->periode }}</div>
                    </div>
                </div>
            </div>
            <div class="sambutan-modern-img-caption">
                <div class="sambutan-modern-img-name">{{ $kepalaSekolah->nama }}</div>
            </div>
        </div>
        <div class="sambutan-modern-content">
            <div class="sambutan-modern-label">KATA SAMBUTAN</div>
            <h2 class="sambutan-modern-title">Kepala Sekolah SMP Negeri 2 Siborongborong</h2>
            <div class="sambutan-modern-desc">
                Selamat datang di website resmi SMP Negeri 2 Siborongborong!<br>
                Kami berkomitmen untuk membangun generasi yang cerdas, berkarakter, dan siap menghadapi tantangan masa depan. Melalui inovasi, dedikasi, dan semangat kebersamaan, kami yakin dapat menciptakan lingkungan belajar yang inspiratif dan menyenangkan bagi seluruh siswa.
            </div>
        </div>
    </div>
    <div class="sambutan-modern-bg-decor"></div>
</section>
<!-- End Sambutan Section (Modern, Card Data) -->

@endsection
