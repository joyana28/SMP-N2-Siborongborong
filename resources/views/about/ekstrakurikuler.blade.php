@extends('layouts.frontend.app')

@section('content')
<!-- Hero Section -->
<section class="ekstra-hero-section">
    <div class="container">
        <div class="ekstra-hero-text">
            <h1 class="ekstra-title">Ekstrakurikuler Sekolah</h1>
            <p class="ekstra-description">
                Beragam kegiatan ekstrakurikuler untuk mengembangkan bakat, minat, dan karakter siswa.
            </p>
        </div>
    </div>
</section>

<!-- Section Intro Ekstrakurikuler -->
<section class="ekstra-intro-section">
    <div class="container">
        <div class="ekstra-intro-grid">
            <!-- Left: Gambar -->
            <div class="ekstra-intro-imgwrap">
                <div class="ekstra-img-modern">
                    <img src="{{ asset('images/ekstrakurikuler.png') }}" alt="Ekstrakurikuler" class="ekstra-img-modern-main">
                </div>
            </div>
            <!-- Right: Konten -->
            <div class="ekstra-intro-content">
                <div class="ekstra-intro-label">TENTANG EKSTRAKURIKULER</div>
                <h2 class="ekstra-intro-title">Kami Siap Mengembangkan Potensi Siswa Lewat Kegiatan Ekstrakurikuler</h2>
                <p class="ekstra-intro-desc">
                    Ekstrakurikuler di sekolah kami dirancang untuk menumbuhkan bakat, minat, dan karakter siswa melalui berbagai kegiatan positif, kolaboratif, dan inspiratif.
                </p>
                <ul class="ekstra-intro-list">
                    <li>Pengembangan karakter dan kepemimpinan</li>
                    <li>Kegiatan seni, olahraga, dan sains</li>
                    <li>Pembinaan kerja sama dan kreativitas</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Ekstrakurikuler Section -->
<section class="blog-section py-12">
    <div class="container">
        <h2 class="text-2xl font-bold text-center mb-10 text-[#1a56a7]">Ekstrakurikuler Sekolah</h2>

        @if ($ekstrakurikuler->isEmpty())
            <p class="text-center text-gray-600">Data ekstrakurikuler tidak ditemukan.</p>
        @else
            <div class="blog-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($ekstrakurikuler as $item)
                    <div class="blog-card relative p-6 bg-white rounded-2xl shadow-lg overflow-hidden">
                        @if ($item->gambar)
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama }}" class="w-full h-40 object-cover rounded-lg mb-4">
                        @else
                            <img src="{{ asset('images/default-ekstra.jpg') }}" alt="Ekstrakurikuler" class="w-full h-40 object-cover rounded-lg mb-4">
                        @endif

                        <div class="blog-content relative z-10">
                            <span class="blog-tag inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded mb-2">Ekstrakurikuler</span>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $item->nama }}</h3>
                            <p class="text-gray-600 text-sm">{{ $item->deskripsi }}</p>
                            <div class="blog-meta mt-2">
                        <div class="corner-shadow absolute top-0 right-0 w-16 h-16 bg-[#1a56a7] transform rotate-45 translate-x-6 -translate-y-6"></div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>
@endsection

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/ekstrakurikuler.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/ekstrakurikuler.js') }}"></script>
@endsection
