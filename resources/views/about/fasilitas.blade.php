@extends('layouts.frontend.app')

@section('title', 'SMPN 2 Siborongborong')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/fasilitas.css') }}">

@section('content')


    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="title">Fasilitas Sekolah</h1>
                <p class="hero-description">Menyediakan fasilitas modern dan lengkap untuk mendukung kegiatan belajar mengajar yang optimal dan pengembangan bakat siswa</p>
            </div>
        </div>
    </section>

    <!-- Services Overview Section -->
    <section class="services-overview">
        <div class="container">
            <div class="services-overview-grid">
                <!-- Left Image Column -->
                <div class="overview-image" data-aos="fade-right">
                    <div class="image-container">
                        <img src="{{ asset('images/pp 2.png') }}" alt="School Facilities">
                    </div>
                </div>
                
                <!-- Right Content Column -->
                <div class="overview-content" data-aos="fade-left">
                    <div class="section-label">
                        <span>TENTANG FASILITAS</span>
                    </div>
                    <h2 class="section-title">Fasilitas Modern dan Lengkap untuk Mendukung Pembelajaran</h2>
                    
                    <div class="features-list">
                        <div class="feature-item" data-aos="fade-up" data-aos-delay="100">
                            <div class="feature-icon">
                                <i class="fas fa-school"></i>
                            </div>
                            <div class="feature-content">
                                <h3>Lingkungan Belajar yang Nyaman</h3>
                                <p>Fasilitas yang kami sediakan dirancang untuk menunjang proses belajar yang nyaman, aman, dan berkualitas bagi seluruh warga sekolah.</p>
                            </div>
                        </div>
                        
                        <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
                            <div class="feature-icon">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <div class="feature-content">
                                <h3>Penunjang Kegiatan Siswa yang Lengkap</h3>
                                <p>Dari ruang kelas modern hingga area pendukung kegiatan ekstrakurikuler, kami berkomitmen menghadirkan lingkungan terbaik demi tumbuh kembang peserta didik.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leading Agency Section -->
    <section class="leading-agency">
        <div class="container">
            <div class="agency-content">
                <div class="agency-images">
                    <div class="image-container primary-image">
                        <img src="{{ asset('assets/images/shipping-port.jpg') }}" alt="Shipping Port" class="img-fluid">
                    </div>
                    <div class="image-container secondary-image">
                        <img src="{{ asset('assets/images/logistics-truck.jpg') }}" alt="Logistics Truck" class="img-fluid">
                    </div>
                </div>
                <div class="agency-text">
                    <div class="section-label">
                        <span>ABOUT COMPANY</span>
                    </div>
                    <h2 class="section-title">Leading global logistic and transport agency</h2>
                    <p class="section-description">We provide the best logistics and transportation services worldwide with our dedicated support in multimodal freight, portfolio management with best-in-class service & transportation across continents.</p>
                    
                    <div class="features-grid">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="feature-text">International Shipping</div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="feature-text">Quality Control System</div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="feature-text">Highly Professional Staff</div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="feature-text">Supply Chain Solutions</div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="feature-text">24/7 Support</div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="feature-text">Supply Chain Solutions</div>
                        </div>
                    </div>

                    <div class="cta-container">
                        <a href="#quote" class="btn-primary">REQUEST A QUOTE</a>
                        <div class="phone-cta">
                            <div class="phone-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="phone-details">
                                <span>Call Us 24/7</span>
                                <h4>+123 (4567) 8910</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="partners-section">
        <div class="container">
            <div class="partners-logos">
                <div class="partner-logo">
                    <img src="{{ asset('assets/images/logo-express.png') }}" alt="Express" class="img-fluid">
                </div>
                <div class="partner-logo">
                    <img src="{{ asset('assets/images/logo-transport.png') }}" alt="Transport" class="img-fluid">
                </div>
                <div class="partner-logo">
                    <img src="{{ asset('assets/images/logo-logistics1.png') }}" alt="Logistics" class="img-fluid">
                </div>
                <div class="partner-logo">
                    <img src="{{ asset('assets/images/logo-logistics2.png') }}" alt="Logistics" class="img-fluid">
                </div>
                <div class="partner-logo">
                    <img src="{{ asset('assets/images/logo-delivery.png') }}" alt="Delivery" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            <div class="section-header text-center">
                <div class="section-label">
                    <span>WHAT WE DO</span>
                </div>
                <h2 class="section-title">We offers cost efficient transport shipping</h2>
            </div>
            
            <div class="services-grid">
                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3 class="service-title">Road Freight</h3>
                    <p class="service-description">We provide excellent transportation services across highways and roads globally.</p>
                    <div class="service-image">
                        <img src="{{ asset('assets/images/road-freight.jpg') }}" alt="Road Freight" class="img-fluid">
                    </div>
                </div>
                
                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-icon">
                        <i class="fas fa-plane"></i>
                    </div>
                    <h3 class="service-title">Airplane Freight</h3>
                    <p class="service-description">Fast air freight transport for urgent and valuable shipments worldwide.</p>
                    <div class="service-image">
                        <img src="{{ asset('assets/images/air-freight.jpg') }}" alt="Air Freight" class="img-fluid">
                    </div>
                </div>
                
                <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-icon">
                        <i class="fas fa-ship"></i>
                    </div>
                    <h3 class="service-title">Ship Freight</h3>
                    <p class="service-description">We offer bulk ocean freight services for large cargo transportation.</p>
                    <div class="service-image">
                        <img src="{{ asset('assets/images/ship-freight.jpg') }}" alt="Ship Freight" class="img-fluid">
                    </div>
                </div>
                
                <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-icon">
                        <i class="fas fa-train"></i>
                    </div>
                    <h3 class="service-title">Train Freight</h3>
                    <p class="service-description">We provide reliable train transportation for long-haul freight delivery.</p>
                    <div class="service-image">
                        <img src="{{ asset('assets/images/train-freight.jpg') }}" alt="Train Freight" class="img-fluid">
                    </div>
                </div>
            </div>
            
            <div class="services-footer text-center">
                <p>We Provide Full Assistance in Freight and Warehousing. <strong>Request A Quote</strong></p>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/logistics.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="{{ asset('assets/js/fasilitas.js') }}"></script>
@endpush