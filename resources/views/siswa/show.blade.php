@extends('layouts.frontend.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/siswa.css') }}">

<!-- Hero Section Siswa (Curtain Style) -->
<section class="siswa-hero-section tirai-hero-section">
    <div class="tirai-hero-bg"></div>
    <div class="tirai-hero-curtain"></div>
    <div class="tirai-hero-content">
        <h1 class="tirai-hero-title">Detail Kelas dan Informasi Siswa</h1>
        <div class="tirai-hero-desc">
            Temukan informasi lengkap tentang kelas dan siswa di SMP Negeri 2 Siborongborong.
        </div>
    </div>
    <div class="tirai-hero-bottom"></div>
</section>

<!-- Custom Section Title (after hero-section) -->
<section class="siswa-detail-heading-section">
    <div class="siswa-detail-heading-left">
        <div class="siswa-detail-heading-icon">
            <!-- Detailed students & class icon -->
            <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="6" y="24" width="42" height="18" rx="5" fill="#fff" stroke="#f3b11f" stroke-width="2.5"/>
                <rect x="18" y="12" width="18" height="12" rx="4" fill="#f3b11f" stroke="#1a56a7" stroke-width="2"/>
                <circle cx="27" cy="18" r="3.5" fill="#fff" stroke="#1a56a7" stroke-width="2"/>
                <circle cx="16" cy="33" r="3.5" fill="#f3b11f" stroke="#1a56a7" stroke-width="2"/>
                <circle cx="38" cy="33" r="3.5" fill="#f3b11f" stroke="#1a56a7" stroke-width="2"/>
                <path d="M27 21v3.5" stroke="#1a56a7" stroke-width="2" stroke-linecap="round"/>
                <path d="M16 36.5v2.5M38 36.5v2.5" stroke="#1a56a7" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </div>
        <div class="siswa-detail-heading-label">DATA KELAS</div>
        <div class="siswa-detail-heading-sub">Siswa & Kelas</div>
    </div>
    <div class="siswa-detail-heading-right">
        <div class="siswa-detail-heading-title">Informasi Lengkap Kelas & Siswa</div>
        <div class="siswa-detail-heading-desc">
            Temukan data kelas, jumlah siswa, tahun ajaran, dan wali kelas secara detail dan interaktif di bawah ini. Semua data diambil langsung dari sistem admin sekolah.
        </div>
    </div>
</section>

<style>
    body {
        background-color: #e3f2fd;
    }
    .card {
        background-color: #ffffff; 
        border: 1px solid #0d47a1; 
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .card-title {
        color: #0d47a1;
    }
    .btn-primary {
        background-color: #0d47a1;
        border-color: #0d47a1;
    }
</style>

<div class="container-siswa py-5">
    <h2 class="mb-4 text-center text-white bg-primary py-2 rounded">Detail Kelas</h2>
    <div class="row justify-content-center">
        @if ($siswa)
            <div class="col-lg-8 col-md-10">
                <div class="book-card-3d">
                    <div class="book-card-inner">
                        <div class="book-card-cover">
                            <div class="book-card-cover-content">
                                <div class="book-card-cover-icon">
                                    <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="6" y="24" width="42" height="18" rx="5" fill="#fff" stroke="#f3b11f" stroke-width="2.5"/>
                                        <rect x="18" y="12" width="18" height="12" rx="4" fill="#f3b11f" stroke="#1a56a7" stroke-width="2"/>
                                        <circle cx="27" cy="18" r="3.5" fill="#fff" stroke="#1a56a7" stroke-width="2"/>
                                    </svg>
                                </div>
                                <div class="book-card-cover-title">NAMA KELAS</div>
                                <div class="book-card-cover-class">{{ $siswa->nama_kelas }}</div>
                            </div>
                        </div>
                        <div class="book-card-page">
                            <div class="book-card-page-content">
                                <div class="book-card-page-title">Informasi Kelas</div>
                                <div class="book-card-page-info">
                                    <div class="book-card-info-row"><span class="book-card-info-label">Jumlah Siswa (L):</span> <span class="book-card-info-value">{{ $siswa->jumlah_siswa_l }}</span></div>
                                    <div class="book-card-info-row"><span class="book-card-info-label">Jumlah Siswa (P):</span> <span class="book-card-info-value">{{ $siswa->jumlah_siswa_p }}</span></div>
                                    <div class="book-card-info-row"><span class="book-card-info-label">Total Siswa:</span> <span class="book-card-info-value">{{ $siswa->jumlah_siswa }}</span></div>
                                    <div class="book-card-info-row"><span class="book-card-info-label">Tahun:</span> <span class="book-card-info-value">{{ $siswa->tahun }}</span></div>
                                    <div class="book-card-info-row"><span class="book-card-info-label">Wali Kelas:</span> <span class="book-card-info-value">{{ $siswa->wali_kelas ? $siswa->wali_kelas : 'Tidak ada' }}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="col-12">
                <div class="alert alert-warning text-center">
                    Data kelas tidak ditemukan.
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
