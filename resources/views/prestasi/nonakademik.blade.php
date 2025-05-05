@extends('layouts.frontend.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/nonakademik.css') }}">

<!-- Hero Section Nonakademik -->
<section class="nonakademik-hero-section">
    <div class="nonakademik-hero-content">
        <div class="nonakademik-hero-text">
            <h1 class="nonakademik-title">Prestasi Nonakademik</h1>
            <p class="nonakademik-description">Menampilkan prestasi-prestasi nonakademik yang membanggakan dari siswa-siswi SMP Negeri 2 Siborongborong, mulai dari seni, olahraga, hingga kreativitas dan bakat lainnya.</p>
        </div>
    </div>
</section>

<!-- Section Eksplorasi Prestasi Nonakademik -->
<section class="nonakademik-explore-section">
    <div class="nonakademik-explore-container">
        <div class="nonakademik-explore-left">
            <span class="nonakademik-explore-label"><i class="fas fa-star"></i> Eksplorasi Prestasi</span>
            <h2 class="nonakademik-explore-title">Temukan Ragam Prestasi Nonakademik Siswa</h2>
            <p class="nonakademik-explore-desc">
                Siswa-siswi SMP Negeri 2 Siborongborong aktif berprestasi di bidang olahraga, seni, pramuka, dan berbagai kegiatan ekstrakurikuler lainnya. Setiap pencapaian adalah bukti bakat, kreativitas, dan semangat kolaborasi yang tinggi.
            </p>
            <div class="nonakademik-explore-bar">
                <div class="explore-bar-item">
                    <i class="fas fa-futbol"></i> Olahraga
                </div>
                <div class="explore-bar-item">
                    <i class="fas fa-paint-brush"></i> Seni & Budaya
                </div>
                <div class="explore-bar-item">
                    <i class="fas fa-users"></i> Pramuka & Organisasi
                </div>
                <div class="explore-bar-action">
                    <button class="explore-btn">Lihat Semua</button>
                </div>
            </div>
        </div>
        <div class="nonakademik-explore-right">
            <div class="explore-img-grid">
                <div class="explore-img-card">
                    <img src="/images/nonakademik-olahraga.jpg" alt="Olahraga" />
                    <span class="explore-img-badge">Juara Futsal</span>
                </div>
                <div class="explore-img-card">
                    <img src="/images/nonakademik-seni.jpg" alt="Seni" />
                    <span class="explore-img-badge">Festival Tari</span>
                </div>
                <div class="explore-img-card">
                    <img src="/images/nonakademik-pramuka.jpg" alt="Pramuka" />
                    <span class="explore-img-badge">Pramuka Teladan</span>
                </div>
                <div class="explore-img-card">
                    <img src="/images/nonakademik-lomba.jpg" alt="Lomba" />
                    <span class="explore-img-badge">Lomba Kreativitas</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Judul Section Fasilitas Sekolah -->
<div class="nonakademik-section-title">
    <h2>Prestasi Nonakademik Kami</h2>
    <div class="nonakademik-title-underline"></div>
</div>

    @if ($prestasiNonAkademik->count())
        <div class="row">
            @foreach ($prestasiNonAkademik as $prestasi)
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        @if ($prestasi->foto)
                            <img src="{{ asset('storage/prestasi/' . $prestasi->foto) }}" class="card-img-top" alt="Foto Prestasi">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $prestasi->nama }}</h5>
                            <p class="card-text">{{ $prestasi->deskripsi }}</p>
                            <p class="card-text">
                                <small class="text-muted">Tanggal: {{ \Carbon\Carbon::parse($prestasi->tanggal)->format('d-m-Y') }}</small><br>
                                <small class="text-muted">Jenis: {{ ucfirst($prestasi->jenis) }}</small>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $prestasiNonAkademik->links() }}
        </div>
    @else
        <div class="no-prestasi mt-4">
            <strong>Oops!</strong> Belum ada prestasi non-akademik yang ditambahkan untuk saat ini.
        </div>
    @endif
</div>
@endsection
