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
        <div class="kepsek-anim-card">
            <div class="kepsek-anim-img" style="background-image: url('{{ $kepalaSekolah->foto ? asset('kepala_sekolah/' . $kepalaSekolah->foto) : asset('images/default-user.jpg') }}');"></div>
            <div class="kepsek-anim-info">
                <div class="kepsek-anim-info-inner">
                    <div class="kepsek-anim-nama">{{ $kepalaSekolah->nama }}</div>
                    <div class="kepsek-anim-nip"><span>NIP:</span> {{ $kepalaSekolah->nip }}</div>
                    <div class="kepsek-anim-gol"><span>Golongan:</span> {{ $kepalaSekolah->golongan }}</div>
                    <div class="kepsek-anim-periode"><span>Periode:</span> {{ $kepalaSekolah->periode }}</div>
                </div>
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
