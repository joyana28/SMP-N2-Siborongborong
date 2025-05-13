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

<!-- Judul Section Fasilitas Sekolah -->
<div class="akademik-section-title">
    <h2>Prestasi Akademik Kami</h2>
    <div class="akademik-title-underline"></div>
</div>

    @if ($prestasiAkademik->count())
        <div class="idcard-horizontal-scroll">
            @foreach ($prestasiAkademik as $index => $prestasi)
                <div class="akademik-card-modern animated-akademik-card">
                    <div class="akademik-card-bg"></div>
                    <div class="akademik-card-left">
                        <div class="akademik-card-circle">
                            @if ($prestasi->foto)
                                <img src="{{ asset('prestasi/' . $prestasi->foto) }}" class="akademik-card-photo" alt="Foto Prestasi" onclick="showZoomModal(this.src)">
                            @else
                                <div class="akademik-card-photo-placeholder" onclick="showZoomModal(null)">No Image</div>
                            @endif
                        </div>
                    </div>
                    <div class="akademik-card-right">
                        <div class="akademik-card-icon"><i class="fas fa-trophy"></i></div>
                        <div class="akademik-card-content">
                            <div class="akademik-card-front">
                                <div class="akademik-card-name">{{ strtoupper($prestasi->nama) }}</div>
                                <div class="akademik-card-role">{{ ucfirst($prestasi->jenis) }}</div>
                            </div>
                            <div class="akademik-card-back">
                                <div class="akademik-card-desc">{{ $prestasi->deskripsi }}</div>
                            </div>
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

<!-- Modal Zoom Gambar -->
<div id="zoomModal" style="display:none;position:fixed;z-index:9999;top:0;left:0;width:100vw;height:100vh;background:rgba(0,0,0,0.85);align-items:center;justify-content:center;">
    <span onclick="closeZoomModal()" style="position:absolute;top:32px;right:48px;font-size:2.5rem;color:#fff;cursor:pointer;z-index:10001;">&times;</span>
    <img id="zoomModalImg" src="" alt="Zoomed" style="max-width:90vw;max-height:80vh;border-radius:18px;box-shadow:0 8px 32px #000a;display:block;margin:auto;">
    <div id="zoomModalPlaceholder" style="display:none;width:180px;height:180px;border-radius:50%;background:#f3b11f33;display:flex;align-items:center;justify-content:center;color:#1a56a7;font-weight:700;font-size:1.5rem;border:4px dashed #1a56a7;margin:auto;">No Image</div>
</div>
<script>
function showZoomModal(src) {
    document.getElementById('zoomModal').style.display = 'flex';
    if(src) {
        document.getElementById('zoomModalImg').src = src;
        document.getElementById('zoomModalImg').style.display = 'block';
        document.getElementById('zoomModalPlaceholder').style.display = 'none';
    } else {
        document.getElementById('zoomModalImg').style.display = 'none';
        document.getElementById('zoomModalPlaceholder').style.display = 'flex';
    }
}
function closeZoomModal() {
    document.getElementById('zoomModal').style.display = 'none';
}
// Close modal on ESC
document.addEventListener('keydown', function(e){
    if(e.key === 'Escape') closeZoomModal();
});
// Close modal on click outside image
document.getElementById('zoomModal').addEventListener('click', function(e){
    if(e.target === this) closeZoomModal();
});
</script>
@endsection
