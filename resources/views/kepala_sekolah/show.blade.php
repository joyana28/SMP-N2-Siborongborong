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

<!-- Sambutan Kepala Sekolah Section (Animated Card) -->
<section class="sambutan-section-2 py-5">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="sambutan-card">
            <div class="sambutan-card-img">
                <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80" alt="Welding" class="img-fluid sambutan-img-2">
            </div>
            <div class="sambutan-card-content">
                <h2 class="sambutan-title-2">KATA SAMBUTAN KEPALA SEKOLAH</h2>
                <div class="sambutan-divider-2"></div>
                <p class="sambutan-desc-2">
                    Selamat datang di website resmi SMP Negeri 2 Siborongborong!<br>
                    Kami berkomitmen untuk membangun generasi yang cerdas, berkarakter, dan siap menghadapi tantangan masa depan. Melalui inovasi, dedikasi, dan semangat kebersamaan, kami yakin dapat menciptakan lingkungan belajar yang inspiratif dan menyenangkan bagi seluruh siswa.
                </p>
                <div class="sambutan-btn-group-2">
                    <a href="#" class="sambutan-btn-2 sambutan-btn-primary-2">Lebih Lanjut</a>
                    <a href="#" class="sambutan-btn-2 sambutan-btn-outline-2">Lihat Lokasi</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Sambutan Section (Animated Card) -->

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
