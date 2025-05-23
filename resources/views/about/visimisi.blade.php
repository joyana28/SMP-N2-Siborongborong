@extends('layouts.frontend.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/visimisi.css') }}">
@endsection {{-- Penutup section styles, ini penting agar bagian content bisa dimulai dengan benar --}}

@section('content')
    {{-- Navbar akan otomatis muncul dari layouts.frontend.app, jadi tidak perlu ditulis ulang di sini --}}

    <!-- Hero Section -->
    <section class="visimisi-hero-section" id="visi-misi">
        <div class="visimisi-hero-text">
            <h1 class="visimisi-title">Visi & Misi Sekolah</h1>
            <p class="visimisi-description">
                Menjadi sekolah unggul yang berlandaskan iman, ilmu, dan karakter, serta berkomitmen mencetak generasi berprestasi, berakhlak mulia, dan siap menghadapi tantangan global melalui pendidikan yang inovatif dan inklusif.
            </p>
        </div>
    </section>

    {{-- Section Visi, Misi, Tujuan --}}
    <section class="vmg-section">
        <div class="vmg-grid">

            {{-- Bagian Kiri: Visi, Misi, Tujuan --}}
            <div class="vmg-left">
                <div class="vmg-title-group">
                    <div class="vmg-title-line"></div>
                    <div class="vmg-title-diamonds">
                        <span class="diamond"></span>
                        <span class="diamond"></span>
                        <span class="diamond"></span>
                    </div>
                    <div class="vmg-title-line"></div>
                </div>
                <h2 class="vmg-main-title">Visi & Misi</h2>

                <div class="vmg-list">
                    {{-- Visi --}}
                    <div class="vmg-item vmg-animate">
                        <div class="vmg-icon diamond-bg">
                            {{-- Vision Icon --}}
                            <svg width="32" height="32" fill="none" stroke="#1a56a7" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10"/>
                                <circle cx="12" cy="12" r="4"/>
                                <path d="M2 12s3-7 10-7 10 7 10 7"/>
                            </svg>
                        </div>
                        <div>
                            <div class="vmg-item-title">Visi</div>
                            <div class="vmg-item-desc">Mewujudkan sekolah yang berkualitas, berdisiplin, berkarakter, berbudaya, dan berwawasan luas serta cerdas, kreatif, dan berakhlak mulia.</div>
                        </div>
                    </div>

                    {{-- Misi --}}
                    <div class="vmg-item vmg-animate">
                        <div class="vmg-icon diamond-bg">
                            {{-- Mission Icon --}}
                            <svg width="32" height="32" fill="none" stroke="#f3b11f" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M12 2v10"/>
                                <circle cx="12" cy="17" r="1"/>
                                <path d="M12 22v-2"/>
                            </svg>
                        </div>
                        <div>
                            <div class="vmg-item-title">Misi</div>
                            <div class="vmg-item-desc">
                                1. Meningkatkan kualitas pendidikan<br>
                                2. Mengembangkan karakter siswa.<br>
                                3. Meningkatkan kemampuan akademik.<br>
                                4. Meningkatkan partisipasi orang tua dalam pendidikan siswa.
                            </div>
                        </div>
                    </div>

                    {{-- Tujuan --}}
                    <div class="vmg-item vmg-animate">
                        <div class="vmg-icon diamond-bg">
                            {{-- Goals Icon --}}
                            <svg width="32" height="32" fill="none" stroke="#1a56a7" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10"/>
                                <circle cx="12" cy="12" r="4"/>
                                <path d="M12 8v4l3 3"/>
                            </svg>
                        </div>
                        <div>
                            <div class="vmg-item-title">Tujuan</div>
                            <div class="vmg-item-desc">
                                Mewujudkan lulusan yang cerdas, berdaya saing, berkarakter, dan siap berkontribusi positif di masyarakat.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Bagian Kanan: Gambar-gambar dalam bentuk diamond --}}
            <div class="vmg-right">
                <div class="vmg-diamond-grid">
                    <div class="diamond-img diamond1"><img src="{{ asset('images/Hari Guru.png') }}" alt="img1"></div>
                    <div class="diamond-img diamond2"><img src="{{ asset('images/kumpul.png') }}" alt="img2"></div>
                    <div class="diamond-img diamond3"><img src="{{ asset('images/upacara.png') }}" alt="img3"></div>
                    <div class="diamond-img diamond4"><img src="{{ asset('images/penghargaan.png') }}" alt="img4"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
