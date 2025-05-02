@extends('layouts.frontend.app')

@section('title', 'Fasilitas - SMPN 2 Siborongborong')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/fasilitas.css') }}">
@endsection

@section('content')
<!-- Hero Section -->
<section class="facilities-hero">
    <div class="hero-shape"></div>
    <div class="container">
        <div class="hero-content">
            <h1>WE'RE SCHOOL<br>FACILITIES<br>INFORMATION</h1>
            <a href="#facilities" class="explore-btn">
                <span>EXPLORE NOW</span>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- Overview Section -->
<section class="overview-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="overview-images">
                    <div class="image-group">
                        <img src="{{ asset('images/facilities/overview-1.jpg') }}" alt="Facility Overview" class="main-image">
                        <img src="{{ asset('images/facilities/overview-2.jpg') }}" alt="Additional View" class="secondary-image">
                    </div>
                    <div class="blue-circle"></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="overview-content">
                    <div class="overview-header">
                        <div class="overview-title">
                            <img src="{{ asset('images/facilities/facility-icon.png') }}" alt="Facility Icon" class="facility-placeholder">
                            <div class="title-text">
                                <div class="section-subtitle">FACILITY OVERVIEW</div>
                            </div>
                        </div>
                    </div>
                    <h2>We Strive To Provide The Best School Facilities</h2>
                    <p>Kami berkomitmen untuk menyediakan fasilitas sekolah terbaik yang mendukung pengembangan akademik dan non-akademik siswa. Dengan fasilitas modern dan lingkungan yang nyaman, kami menciptakan suasana belajar yang optimal.</p>
                    
                    <div class="features-grid">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="feature-text">
                                <h4>Fasilitas Lengkap</h4>
                                <p>Mendukung pembelajaran optimal</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div class="feature-text">
                                <h4>24/7 Support</h4>
                                <p>Pelayanan setiap saat</p>
                            </div>
                        </div>
                    </div>

                    <div class="cta-group">
                        <a href="#facilities" class="btn-explore">
                            Explore More
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <div class="profile-info">
                            <img src="{{ asset('images/facilities/principal.jpg') }}" alt="Principal">
                            <div class="profile-text">
                                <h4>Kepala Sekolah</h4>
                                <p>SMPN 2 Siborongborong</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Facilities Section -->
<section id="facilities" class="facilities-section">
    <div class="container">
        <div class="row">
            <!-- Ruang Kelas -->
            <div class="col-md-4">
                <div class="facility-card">
                    <div class="facility-image">
                        <img src="{{ asset('images/facilities/classroom.jpg') }}" alt="Ruang Kelas">
                    </div>
                    <div class="facility-content">
                        <div class="facility-icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <h3>Ruang Kelas Modern</h3>
                        <p>Ruang kelas yang nyaman dan dilengkapi dengan teknologi modern untuk mendukung proses pembelajaran yang efektif.</p>
                    </div>
                </div>
            </div>

            <!-- Laboratorium -->
            <div class="col-md-4">
                <div class="facility-card">
                    <div class="facility-image">
                        <img src="{{ asset('images/facilities/lab.jpg') }}" alt="Laboratorium">
                    </div>
                    <div class="facility-content">
                        <div class="facility-icon">
                            <i class="fas fa-flask"></i>
                        </div>
                        <h3>Laboratorium Sains</h3>
                        <p>Laboratorium yang lengkap dengan peralatan modern untuk mendukung praktikum dan penelitian siswa.</p>
                    </div>
                </div>
            </div>

            <!-- Perpustakaan -->
            <div class="col-md-4">
                <div class="facility-card">
                    <div class="facility-image">
                        <img src="{{ asset('images/facilities/library.jpg') }}" alt="Perpustakaan">
                    </div>
                    <div class="facility-content">
                        <div class="facility-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <h3>Perpustakaan Digital</h3>
                        <p>Perpustakaan modern dengan koleksi buku yang lengkap dan akses digital untuk mendukung pembelajaran.</p>
                    </div>
                </div>
            </div>

            <!-- Lapangan Olahraga -->
            <div class="col-md-4">
                <div class="facility-card">
                    <div class="facility-image">
                        <img src="{{ asset('images/facilities/sports.jpg') }}" alt="Lapangan Olahraga">
                    </div>
                    <div class="facility-content">
                        <div class="facility-icon">
                            <i class="fas fa-running"></i>
                        </div>
                        <h3>Lapangan Olahraga</h3>
                        <p>Fasilitas olahraga yang lengkap untuk mendukung kegiatan ekstrakurikuler dan pengembangan fisik siswa.</p>
                    </div>
                </div>
            </div>

            <!-- Ruang Komputer -->
            <div class="col-md-4">
                <div class="facility-card">
                    <div class="facility-image">
                        <img src="{{ asset('images/facilities/computer.jpg') }}" alt="Ruang Komputer">
                    </div>
                    <div class="facility-content">
                        <div class="facility-icon">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <h3>Laboratorium Komputer</h3>
                        <p>Ruang komputer dengan perangkat modern untuk mendukung pembelajaran teknologi informasi.</p>
                    </div>
                </div>
            </div>

            <!-- Kantin -->
            <div class="col-md-4">
                <div class="facility-card">
                    <div class="facility-image">
                        <img src="{{ asset('images/facilities/canteen.jpg') }}" alt="Kantin">
                    </div>
                    <div class="facility-content">
                        <div class="facility-icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <h3>Kantin Sehat</h3>
                        <p>Kantin yang menyediakan makanan sehat dan bergizi untuk mendukung kesehatan siswa.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize GSAP ScrollTrigger
    gsap.registerPlugin(ScrollTrigger);

    // Animate facility cards on scroll
    const cards = document.querySelectorAll('.facility-card');
    cards.forEach((card, index) => {
        gsap.from(card, {
            scrollTrigger: {
                trigger: card,
                start: "top bottom-=100",
                toggleActions: "play none none reverse"
            },
            y: 50,
            opacity: 0,
            duration: 0.8,
            delay: index * 0.2
        });
    });
});
</script>
@endsection