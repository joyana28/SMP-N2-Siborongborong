@extends('layouts.frontend.app')

@section('content')
<!-- Hero Section -->
<section class="ekstra-hero-section">
    <div class="container">
        <div class="ekstra-hero-text">
            <h1 class="ekstra-title">Ekstrakurikuler Sekolah</h1>
            <p class="ekstra-description">Beragam kegiatan ekstrakurikuler untuk mengembangkan bakat, minat, dan karakter siswa.</p>
        </div>
    </div>
</section>

<!-- Section Intro Ekstrakurikuler -->
<section class="ekstra-intro-section">
  <div class="container">
    <div class="ekstra-intro-grid">
      <!-- Left: Gambar -->
      <div class="ekstra-intro-imgwrap">
        <div class="ekstra-img-diagonal v3-diagonal-img">
          <div class="diagonal-piece diagonal-top"></div>
          <div class="diagonal-piece diagonal-mid"></div>
          <div class="diagonal-piece diagonal-bottom"></div>
          <img src="{{ asset('images/ekstrakurikuler.png') }}" alt="Ekstrakurikuler" class="ekstra-img-diagonal-main v3-diagonal-img-main">
        </div>
      </div>
      <!-- Right: Konten -->
      <div class="ekstra-intro-content">
        <div class="ekstra-intro-label">ABOUT EKSTRAKURIKULER</div>
        <h2 class="ekstra-intro-title">Kami Siap Mengembangkan Potensi Siswa Lewat Kegiatan Ekstrakurikuler</h2>
        <p class="ekstra-intro-desc">Ekstrakurikuler di sekolah kami dirancang untuk menumbuhkan bakat, minat, dan karakter siswa melalui berbagai kegiatan positif, kolaboratif, dan inspiratif.</p>
        <ul class="ekstra-intro-list">
          <li>Pengembangan karakter dan kepemimpinan</li>
          <li>Kegiatan seni, olahraga, dan sains</li>
          <li>Pembinaan teamwork dan kreativitas</li>
        </ul>
        <div class="ekstra-intro-info-box">
          <div class="info-number">6,561+</div>
          <div class="info-label">Siswa Aktif</div>
        </div>
        <div class="ekstra-intro-actions">
          <a href="#" class="ekstra-intro-btn">Explore More</a>
          <div class="ekstra-intro-contact">
            <span class="contact-icon"></span>
            <span class="contact-label">Call Us Now</span>
            <span class="contact-phone">+628x-xxxx-xxxx</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Popular Extracurricular Activities -->
<section class="extracurricular-section py-12 relative overflow-hidden" id="extracurricular">
    <div class="container mx-auto px-4">
        <div class="text-center mb-10">
            <h2 class="text-2xl md:text-3xl font-bold mb-3">
                <span class="text-[#1a56a7]">Popular </span>
                <span class="text-[#f3b11f]">Extracurricular Activities</span>
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-sm md:text-base">
                Our school offers various extracurricular activities to develop students' talents and interests outside academic learning.
            </p>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <!-- Academic Club -->
            <div class="feature-card relative" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-icon-wrapper mb-4">
                    <div class="icon-bg relative w-full h-24 flex items-center justify-center overflow-hidden">
                        <div class="absolute inset-0 bg-[#f3b11f]/10 skew-y-2 transform origin-top-left"></div>
                        <div class="icon-container relative bg-white p-3 shadow-lg rounded-lg transform rotate-0 hover:rotate-6 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-[#1a56a7]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14v7m-9-12v10a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V9" />
                            </svg>
                        </div>
                    </div>
                </div>
                <h3 class="text-xl font-bold mb-2 text-center">Academic Club</h3>
                <p class="text-gray-600 text-center text-sm">
                    Math Olympiad, Science Competition, Debate Team and Research Projects.
                </p>
                <div class="feature-hover-content opacity-0 absolute inset-0 bg-[#1a56a7]/90 flex items-center justify-center p-4 rounded-lg transform transition-all duration-300">
                    <div class="text-white text-center">
                        <h3 class="text-lg font-bold mb-2">Academic Club</h3>
                        <p class="mb-3 text-sm">Math Olympiad, Science Competition, Debate Team and Research Projects.</p>
                        <a href="#" class="inline-flex items-center text-[#f3b11f] hover:underline text-sm">
                            Learn more
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Technology Club -->
            <div class="feature-card relative highlighted" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-icon-wrapper mb-4">
                    <div class="icon-bg relative w-full h-24 flex items-center justify-center overflow-hidden">
                        <div class="absolute inset-0 bg-[#f3b11f] skew-y-2 transform origin-top-left"></div>
                        <div class="icon-container relative bg-white p-3 shadow-lg rounded-lg transform rotate-0 hover:rotate-6 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-[#1a56a7]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <h3 class="text-xl font-bold mb-2 text-center">Technology Club</h3>
                <p class="text-gray-600 text-center text-sm">
                    Web Development, Robotics, Coding, 3D Printing and Digital Media.
                </p>
                <div class="feature-hover-content opacity-0 absolute inset-0 bg-[#1a56a7]/90 flex items-center justify-center p-4 rounded-lg transform transition-all duration-300">
                    <div class="text-white text-center">
                        <h3 class="text-lg font-bold mb-2">Technology Club</h3>
                        <p class="mb-3 text-sm">Web Development, Robotics, Coding, 3D Printing and Digital Media.</p>
                        <a href="#" class="inline-flex items-center text-[#f3b11f] hover:underline text-sm">
                            Learn more
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Arts & Culture -->
            <div class="feature-card relative" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-icon-wrapper mb-4">
                    <div class="icon-bg relative w-full h-24 flex items-center justify-center overflow-hidden">
                        <div class="absolute inset-0 bg-[#f3b11f]/10 skew-y-2 transform origin-top-left"></div>
                        <div class="icon-container relative bg-white p-3 shadow-lg rounded-lg transform rotate-0 hover:rotate-6 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-[#1a56a7]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                            </svg>
                        </div>
                    </div>
                </div>
                <h3 class="text-xl font-bold mb-2 text-center">Arts & Culture</h3>
                <p class="text-gray-600 text-center text-sm">
                    Music, Theater, Dance, Fine Arts and Traditional Cultural Activities.
                </p>
                <div class="feature-hover-content opacity-0 absolute inset-0 bg-[#1a56a7]/90 flex items-center justify-center p-4 rounded-lg transform transition-all duration-300">
                    <div class="text-white text-center">
                        <h3 class="text-lg font-bold mb-2">Arts & Culture</h3>
                        <p class="mb-3 text-sm">Music, Theater, Dance, Fine Arts and Traditional Cultural Activities.</p>
                        <a href="#" class="inline-flex items-center text-[#f3b11f] hover:underline text-sm">
                            Learn more
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Navigation Dots -->
        <div class="flex justify-center mt-8">
            <button class="nav-dot w-8 h-8 rounded-full bg-white border-2 border-[#1a56a7] mr-2 flex items-center justify-center" data-slide="0">
                <span class="dot w-2 h-2 rounded-full bg-[#1a56a7]"></span>
            </button>
            <button class="nav-dot w-8 h-8 rounded-full bg-white border-2 border-[#f3b11f] mr-2 flex items-center justify-center active" data-slide="1">
                <span class="dot w-4 h-4 rounded-full bg-[#f3b11f]"></span>
            </button>
            <button class="nav-dot w-8 h-8 rounded-full bg-white border-2 border-[#1a56a7] flex items-center justify-center" data-slide="2">
                <span class="dot w-2 h-2 rounded-full bg-[#1a56a7]"></span>
            </button>
        </div>
    </div>
    
    <!-- Decorative Elements -->
    <div class="absolute -bottom-16 -left-16 w-48 h-48 bg-[#1a56a7]/10 rounded-full"></div>
    <div class="absolute -top-8 -right-8 w-32 h-32 bg-[#f3b11f]/10 rounded-full"></div>
    <div class="absolute bottom-32 right-16 w-16 h-16 bg-[#1a56a7]/5 rounded-full"></div>
</section>

<!-- Data Ekstrakurikuler -->
<div class="container mx-auto py-10 px-4">
    <h2 class="text-2xl font-bold text-center mb-6 text-[#1a56a7]">Ekstrakurikuler Sekolah</h2>
    @if ($ekstrakurikuler->isEmpty())
        <p class="text-center text-gray-600">Data ekstrakurikuler tidak ditemukan.</p>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($ekstrakurikuler as $item)
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                    <h5 class="text-lg font-semibold mb-2 text-[#1a56a7]">{{ $item->nama }}</h5>
                    <p class="text-gray-600 text-sm">{{ $item->deskripsi }}</p>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('css/ekstrakurikuler.css') }}">
@endsection

@section('scripts')
<script src="{{ asset('js/ekstrakurikuler.js') }}"></script>
@endsection