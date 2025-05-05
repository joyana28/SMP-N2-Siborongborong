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
        <button class="kepsek-hero-btn">Lihat Visi & Misi <span>&raquo;</span></button>
    </div>
    <div class="kepsek-hero-shape"></div>
</section>

<div class="container py-5">
<h2 class="mb-4 text-center text-white bg-primary py-2 rounded">Kepala Sekolah</h2>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card teacher-card shadow">
                <div class="teacher-header text-center">
                    @if ($kepalaSekolah->foto)
                        <img src="{{ asset('storage/kepala_sekolah/' . $kepalaSekolah->foto) }}" alt="Foto {{ $kepalaSekolah->nama }}" class="rounded-circle teacher-img">
                    @else
                        <img src="{{ asset('images/default-user.jpg') }}" alt="Default" class="rounded-circle teacher-img">
                    @endif
                </div>
                <div class="card-body text-center py-4">
                    <h4 class="teacher-name">{{ $kepalaSekolah->nama }}</h4>
                    <p class="teacher-subject mb-2">Periode: {{ $kepalaSekolah->periode }}</p>

                    <table class="table table-bordered table-info mt-4">
                        <tbody>
                            <tr>
                                <th>NIP</th>
                                <td>{{ $kepalaSekolah->nip }}</td>
                            </tr>
                            <tr>
                                <th>Golongan</th>
                                <td>{{ $kepalaSekolah->golongan }}</td>
                            </tr>
                            <tr>
                                <th>Periode</th>
                                <td>{{ $kepalaSekolah->periode }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
