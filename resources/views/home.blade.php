@extends('layouts.frontend.app')

@section('content')

<section class="hero-section">
    <div class="hero-image-container">
        <!-- Background image is set in CSS, this is for the foreground image -->
        <div class="foreground-image"></div>
    </div>
    <div class="container">
        <div class="hero-content">
            <h1 class="animated-title">SMP NEGERI 2<br>SIBORONGBORONG</h1>
            <p>Inspirasi Tanpa Batas, Prestasi Tiada Henti, Wadah Tumbuhnya Calon Pemimpin Masa Depan yang Berkarakter dan Berbudaya serta Memiliki Jiwa Nasionalisme</p>
            <a href="#profil-sekolah"class="btn-primary">LIHAT DETAIL</a>
        </div>
    </div>
    
    <!-- Cards container that overlaps with the bottom of the hero section -->
    <div class="cards-container">
        <div class="card">
            <div class="card-icon">
                <i class="fas fa-graduation-cap" style="color: #052C65;"></i>
            </div>
            <h3>Pendidikan Berkualitas</h3>
            <p>Kurikulum yang komprehensif untuk pembangunan karakter siswa</p>
        </div>
        <div class="card">
            <div class="card-icon">
                <i class="fas fa-users" style="color: #052C65;"></i>
            </div>
            <h3>Tenaga Pengajar Profesional</h3>
            <p>Guru berpengalaman dan berdedikasi untuk masa depan siswa</p>
        </div>
        <div class="card">
            <div class="card-icon">
                <i class="fas fa-medal" style="color: #052C65;"></i>
            </div>
            <h3>Prestasi Unggul</h3>
            <p>Berbagai pencapaian akademik dan non-akademik tingkat nasional</p>
        </div>
        <div class="card">
            <div class="card-icon">
                <i class="fas fa-handshake" style="color: #052C65;"></i>
            </div>
            <h3>Sekolah Berbudaya</h3>
            <p>Menghidupkan 7 kebiasaan Anak Indonesia Hebat serta mempelajari nilai kearifan lokal dalam kehidupan sekolah</p>        </div>
    </div>
</section>

<!-- Spacer to ensure proper layout with overlapping cards -->
<div class="spacer"></div>

<!-- Link to Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

<!-- Features Section -->
<section class="features-section" id="profil-sekolah">
    <div class="container">
        <div class="section-title">
            <h2>"Dengan segudang prestasi di bidang akademik, olahraga, dan seni, <span> SMP NEGERI 2 Siborongborong</span> terus berinovasi dalam pendidikan. Kami percaya bahwa setiap siswa memiliki keunikan, dan tugas kami adalah mengasahnya menjadi karya nyata yang membanggakan." </h2>
        </div>
        <div class="features-grid">
            <div class="feature-box">
                <div class="feature-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h3>Akademik Terjamin</h3>
                <p>Kurikulum terstruktur dan metode pembelajaran inovatif kami dirancang untuk mengoptimalkan potensi akademik siswa. Didukung guru berkualitas, kami siap membimbing siswa meraih prestasi di tingkat lokal maupun nasional.</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h3>Pengembangan Karakter</h3>
                <p>Tak hanya akademik, kami menekankan pembentukan karakter melalui nilai-nilai disiplin, kerja sama, dan kepemimpinan. Siswa dibina menjadi pribadi yang tangguh, berakhlak mulia, dan siap bersaing secara sehat."</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h3>Ekstrakurikuler Kreatif</h3>
                <p>Beragam pilihan ekstrakurikuler (olahraga, seni, akademik, dll.) membantu siswa menemukan passion mereka. Fasilitas memadai dan pembinaan intensif menjadikan setiap talenta berkembang optimal.</p>
            </div>
        </div>
    </div>
</section>
<section class="blog-section">
    <div class="container">
        <div class="section-title">
            <h2>Pengumuman dan Berita Terbaru</h2>
        </div>
        <div class="blog-grid">
            @foreach ($pengumuman as $item)
                <div class="blog-card">
                    <div class="blog-image">
                        @if ($item->foto)
                            <img src="{{ asset('pengumuman/' . $item->foto) }}" alt="Blog" style="object-fit: cover;">
                        @else
                            <img src="{{ asset('images/default.png') }}" alt="Blog">
                        @endif
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="far fa-calendar"></i>
                                {{ \Carbon\Carbon::parse($item->tanggal_terbit)->translatedFormat('F d, Y') }}
                            </span>
                        </div>
                        <h3>{{ $item->judul }}</h3>
                        <p>{{ Str::limit($item->isi, 150) }}</p>
                    <a href="{{ route('pengumuman.showBlog', $item->id_pengumuman) }}" class="read-more">Lihat Selengkapnya...</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<link rel="stylesheet" href="{{ asset('css/pengumuman-blog.css') }}">

@endsection