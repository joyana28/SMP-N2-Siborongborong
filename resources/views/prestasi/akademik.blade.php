@extends('layouts.frontend.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/akademik.css') }}">

<!-- Hero Section Akademik -->
<section class="akademik-hero-section">
    <div class="akademik-hero-content">
        <div class="akademik-hero-text">
            <h1 class="akademik-title">Prestasi Akademik</h1>
            <p class="akademik-description">Menampilkan prestasi-prestasi akademik yang membanggakan dari siswa-siswi SMP Negeri 2 Siborongborong</p>
        </div>
    </div>
</section>

<!-- Section Prestasi Unggulan -->
<section class="akademik-feature-section">
    <div class="akademik-feature-container">
        <div class="akademik-feature-card">
            <div class="akademik-feature-icon bg-blue">
                <i class="fas fa-trophy"></i>
            </div>
            <h3 class="akademik-feature-title">Juara Olimpiade</h3>
            <p class="akademik-feature-desc">Penghargaan untuk siswa-siswi yang berhasil meraih juara dalam berbagai olimpiade sains, matematika, dan bidang akademik lainnya.</p>
        </div>
        <div class="akademik-feature-card">
            <div class="akademik-feature-icon bg-yellow">
                <i class="fas fa-user-graduate"></i>
            </div>
            <h3 class="akademik-feature-title">Lulusan Berprestasi</h3>
            <p class="akademik-feature-desc">Siswa-siswi yang lulus dengan nilai terbaik dan diterima di sekolah lanjutan favorit tingkat nasional maupun internasional.</p>
        </div>
        <div class="akademik-feature-card">
            <div class="akademik-feature-icon bg-blue">
                <i class="fas fa-book-open"></i>
            </div>
            <h3 class="akademik-feature-title">Karya Ilmiah Remaja</h3>
            <p class="akademik-feature-desc">Prestasi dalam lomba karya tulis ilmiah, penelitian, dan inovasi yang membanggakan nama sekolah di tingkat daerah dan nasional.</p>
        </div>
    </div>
</section>

<!-- Section Highlight Prestasi Siswa -->
<section class="akademik-highlight-section">
    <div class="akademik-highlight-container">
        <div class="akademik-highlight-img-wrap">
            <img src="/images/prestasi.png" alt="Siswa Berprestasi" class="akademik-highlight-img">
            <div class="akademik-highlight-accent"></div>
        </div>
        <div class="akademik-highlight-content">
            <span class="akademik-highlight-welcome">PRESTASI TERBAIK KAMI</span>
            <h2 class="akademik-highlight-title">Siswa SMP NEGERI 2 Siborongborong Raih Prestasi Gemilang</h2>
            <p class="akademik-highlight-desc">
                Kami bangga dengan pencapaian luar biasa para siswa dalam berbagai ajang kompetisi akademik dan non-akademik, baik tingkat daerah, nasional, maupun internasional. Setiap prestasi adalah bukti dedikasi, kerja keras, dan semangat belajar yang tinggi dari seluruh keluarga besar sekolah.
            </p>
            <div class="akademik-highlight-signature">
                <div class="akademik-signbox">
                    <i class="fas fa-trophy"></i>
                </div>
                <div>
                    <div class="akademik-highlight-sign-role">Kepala SMP NEGERI 2 Siborongborong</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Judul Section Fasilitas Sekolah -->
<div class="akademik-section-title">
    <h2>Prestasi Akademik Kami</h2>
    <div class="akademik-title-underline"></div>
</div>

    @if ($prestasiAkademik->count())
        <div class="row">
            @foreach ($prestasiAkademik as $prestasi)
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        @if ($prestasi->foto)
                            <img src="{{ asset('prestasi/' . $prestasi->foto) }}" class="card-img-top" alt="Foto Prestasi">
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
            {{ $prestasiAkademik->links() }}
        </div>
    @else
        <div class="no-prestasi mt-4">
            <strong>Oops!</strong> Belum ada prestasi akademik yang ditambahkan untuk saat ini.
        </div>
    @endif
</div>
@endsection
