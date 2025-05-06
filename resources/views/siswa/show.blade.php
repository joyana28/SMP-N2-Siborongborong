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

<div class="container py-5">
    <div class="row siswa-card-grid">
        @if ($siswa)
            <div class="col-md-4 mb-4">
                <div class="siswa-card siswa-card-1">
                    <div class="siswa-card-icon">
                        <!-- Home/School detailed icon -->
                        <svg width="40" height="40" fill="none" stroke="#f3b11f" stroke-width="2" viewBox="0 0 48 48"><rect x="6" y="20" width="36" height="20" rx="4" stroke="#f3b11f" stroke-width="2.5" fill="#fff"/><path d="M24 8L8 20h32L24 8z" stroke="#f3b11f" stroke-width="2.5" fill="#fff"/><rect x="18" y="28" width="12" height="12" rx="2" stroke="#1a56a7" stroke-width="2" fill="#f3b11f"/></svg>
                    </div>
                    <div class="siswa-card-title">Nama Kelas</div>
                    <div class="siswa-card-value">{{ $siswa->nama_kelas }}</div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="siswa-card siswa-card-2">
                    <div class="siswa-card-icon">
                        <!-- Boy icon -->
                        <svg width="40" height="40" fill="none" viewBox="0 0 48 48"><circle cx="24" cy="16" r="8" stroke="#f3b11f" stroke-width="2.5" fill="#fff"/><path d="M8 40c0-6 7.16-12 16-12s16 6 16 12" stroke="#f3b11f" stroke-width="2.5" fill="#fff"/></svg>
                    </div>
                    <div class="siswa-card-title">Jumlah Siswa (L)</div>
                    <div class="siswa-card-value">{{ $siswa->jumlah_siswa_l }}</div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="siswa-card siswa-card-3">
                    <div class="siswa-card-icon">
                        <!-- Girl icon -->
                        <svg width="40" height="40" fill="none" viewBox="0 0 48 48"><circle cx="24" cy="16" r="8" stroke="#f3b11f" stroke-width="2.5" fill="#fff"/><path d="M24 24c-6 0-12 6-12 12h24c0-6-6-12-12-12z" stroke="#f3b11f" stroke-width="2.5" fill="#fff"/></svg>
                    </div>
                    <div class="siswa-card-title">Jumlah Siswa (P)</div>
                    <div class="siswa-card-value">{{ $siswa->jumlah_siswa_p }}</div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="siswa-card siswa-card-4">
                    <div class="siswa-card-icon">
                        <!-- Total students icon -->
                        <svg width="40" height="40" fill="none" viewBox="0 0 48 48"><rect x="8" y="12" width="32" height="24" rx="6" stroke="#f3b11f" stroke-width="2.5" fill="#fff"/><path d="M16 36v-4a8 8 0 0 1 16 0v4" stroke="#1a56a7" stroke-width="2"/><circle cx="24" cy="20" r="4" stroke="#1a56a7" stroke-width="2"/></svg>
                    </div>
                    <div class="siswa-card-title">Total Siswa</div>
                    <div class="siswa-card-value">{{ $siswa->jumlah_siswa }}</div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="siswa-card siswa-card-5">
                    <div class="siswa-card-icon">
                        <!-- Calendar icon -->
                        <svg width="40" height="40" fill="none" viewBox="0 0 48 48"><rect x="8" y="12" width="32" height="28" rx="6" stroke="#f3b11f" stroke-width="2.5" fill="#fff"/><rect x="16" y="24" width="16" height="8" rx="2" stroke="#1a56a7" stroke-width="2" fill="#f3b11f"/><path d="M16 12V8m16 4V8" stroke="#1a56a7" stroke-width="2"/></svg>
                    </div>
                    <div class="siswa-card-title">Tahun</div>
                    <div class="siswa-card-value">{{ $siswa->tahun }}</div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="siswa-card siswa-card-6">
                    <div class="siswa-card-icon">
                        <!-- Teacher icon -->
                        <svg width="40" height="40" fill="none" viewBox="0 0 48 48"><circle cx="24" cy="16" r="8" stroke="#f3b11f" stroke-width="2.5" fill="#fff"/><rect x="14" y="28" width="20" height="10" rx="5" stroke="#1a56a7" stroke-width="2" fill="#f3b11f"/></svg>
                    </div>
                    <div class="siswa-card-title">Wali Kelas</div>
                    <div class="siswa-card-value">{{ $siswa->wali_kelas ? $siswa->wali_kelas : 'Tidak ada' }}</div>
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
