@extends('layouts.frontend.app')

@section('content')

    <!-- Hero Section -->
<section class="hero-section">
    <div class="hero-image-container">
        <!-- Background image is set in CSS, this is for the foreground image -->
        <div class="foreground-image"></div>
    </div>
    <div class="container">
        <div class="hero-content">
            <h1 class="animated-title">SMPN2<br>SIBORONGBORONG</h1>
            <p>Inspirasi Tanpa Batas, Prestasi Tiada Henti, Wadah Tumbuhnya Calon Pemimpin Masa Depan</p>
            <a href="#" class="btn-primary">GET STARTED</a>
        </div>
    </div>
    
    <!-- Cards container that overlaps with the bottom of the hero section -->
    <div class="cards-container">
        <div class="card">
            <div class="card-icon">
                <i class="fas fa-graduation-cap" style="color: #1A56A7;"></i>
            </div>
            <h3>Pendidikan Berkualitas</h3>
            <p>Kurikulum yang komprehensif untuk pembangunan karakter siswa</p>
        </div>
        <div class="card">
            <div class="card-icon">
                <i class="fas fa-users" style="color: #1A56A7;"></i>
            </div>
            <h3>Tenaga Pengajar Profesional</h3>
            <p>Guru berpengalaman dan berdedikasi untuk masa depan siswa</p>
        </div>
        <div class="card">
            <div class="card-icon">
                <i class="fas fa-medal" style="color: #1A56A7;"></i>
            </div>
            <h3>Prestasi Unggul</h3>
            <p>Berbagai pencapaian akademik dan non-akademik tingkat nasional</p>
        </div>
    </div>
</section>

<!-- Spacer to ensure proper layout with overlapping cards -->
<div class="spacer"></div>

<!-- Link to Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

<!-- Features Section -->
<section class="features-section">
    <div class="container">
        <div class="section-title">
            <h2>"Dengan segudang prestasi di bidang akademik, olahraga, dan seni, <span> SMPN 2 Siborongborong</span> terus berinovasi dalam pendidikan. Kami percaya bahwa setiap siswa memiliki keunikan, dan tugas kami adalah mengasahnya menjadi karya nyata yang membanggakan." </h2>
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
                <p>Beragam pilihan ekstrakurikuler (olahraga, seni, sains, dll.) membantu siswa menemukan passion mereka. Fasilitas memadai dan pembinaan intensif menjadikan setiap talenta berkembang optimal.</p>
            </div>
        </div>
    </div>
</section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            <div class="section-title">
                <h2>Profil Sekolah</h2>
            </div>
            <div class="services-grid">
                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Web Development</h3>
                    <p>Creating responsive, user-friendly websites</p>
                </div>
                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Mobile Apps</h3>
                    <p>Developing innovative applications for all platforms</p>
                </div>
                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3>Cloud Services</h3>
                    <p>Secure and scalable cloud solutions</p>
                </div>
                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Cybersecurity</h3>
                    <p>Protecting your data with advanced security measures</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Why You'll Choose Us For Tech/Web Solutions?</h2>
                <p>We combine innovative thinking with technical expertise to deliver exceptional results for our clients.</p>
                <a href="#" class="btn-primary">Learn More</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-title">
                <h2>Most Appreciated People Said</h2>
            </div>
            <div class="testimonials-slider">
                <div class="testimonial-item">
                    <div class="client-image">
                        <img src="images/client1.jpg" alt="Client">
                    </div>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">"Their technical expertise and customer service are outstanding. Highly recommended for any tech solution needs."</p>
                    <h4>Jane Smith</h4>
                    <p class="client-position">Marketing Director</p>
                </div>
                <div class="testimonial-item">
                    <div class="client-image">
                        <img src="images/client2.jpg" alt="Client">
                    </div>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">"We've seen tremendous growth since implementing their solutions. The team is responsive and truly understands our business needs."</p>
                    <h4>John Davis</h4>
                    <p class="client-position">CEO, TechStart</p>
                </div>
            </div>
            <div class="testimonial-dots">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <div class="section-title">
                <h2>Our Recently Completed Latest Projects</h2>
            </div>
            <div class="projects-grid">
                <div class="project-item">
                    <div class="project-image">
                        <img src="images/project1.jpg" alt="Project">
                    </div>
                    <div class="project-info">
                        <h3>E-commerce Platform</h3>
                        <p>Full-stack development with secure payment processing</p>
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-image">
                        <img src="images/project2.jpg" alt="Project">
                    </div>
                    <div class="project-info">
                        <h3>Hospital Management System</h3>
                        <p>Integrated solution for healthcare providers</p>
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-image">
                        <img src="images/project3.jpg" alt="Project">
                    </div>
                    <div class="project-info">
                        <h3>Finance App Development</h3>
                        <p>Secure mobile banking solution with real-time analysis</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing-section">
        <div class="container">
            <div class="section-title">
                <h2>Our Recently Completed Latest Team</h2>
            </div>
            <div class="pricing-grid">
                <div class="pricing-box">
                    <div class="pricing-header">
                        <h3>Basic</h3>
                        <div class="price">
                            <span class="currency">$</span>
                            <span class="amount">99</span>
                            <span class="period">/mo</span>
                        </div>
                    </div>
                    <div class="pricing-features">
                        <ul>
                            <li>Web Development</li>
                            <li>5 Pages</li>
                            <li>3 Months Support</li>
                            <li>Limited Features</li>
                        </ul>
                    </div>
                    <div class="pricing-footer">
                        <a href="#" class="btn-secondary">Get Started</a>
                    </div>
                </div>
                <div class="pricing-box featured">
                    <div class="pricing-header">
                        <h3>Standard</h3>
                        <div class="price">
                            <span class="currency">$</span>
                            <span class="amount">199</span>
                            <span class="period">/mo</span>
                        </div>
                    </div>
                    <div class="pricing-features">
                        <ul>
                            <li>Web Development</li>
                            <li>10 Pages</li>
                            <li>6 Months Support</li>
                            <li>Standard Features</li>
                        </ul>
                    </div>
                    <div class="pricing-footer">
                        <a href="#" class="btn-primary">Get Started</a>
                    </div>
                </div>
                <div class="pricing-box">
                    <div class="pricing-header">
                        <h3>Premium</h3>
                        <div class="price">
                            <span class="currency">$</span>
                            <span class="amount">299</span>
                            <span class="period">/mo</span>
                        </div>
                    </div>
                    <div class="pricing-features">
                        <ul>
                            <li>Web Development</li>
                            <li>Unlimited Pages</li>
                            <li>12 Months Support</li>
                            <li>Premium Features</li>
                        </ul>
                    </div>
                    <div class="pricing-footer">
                        <a href="#" class="btn-secondary">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info">
                    <h2>Let's Discuss Your Project</h2>
                    <p>Fill out the form and our team will get back to you within 24 hours.</p>
                </div>
                <div class="contact-form">
                    <form>
                        <div class="form-group">
                            <input type="text" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class="btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="blog-section">
        <div class="container">
            <div class="section-title">
                <h2>Latest News & Articles</h2>
            </div>
            <div class="blog-grid">
                <div class="blog-card">
                    <div class="blog-image">
                        <img src="images/blog1.jpg" alt="Blog">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="far fa-calendar"></i> April 25, 2025</span>
                        </div>
                        <h3>The Future of AI in Business Operations</h3>
                        <p>Exploring how artificial intelligence is transforming modern business processes and workflows.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
                <div class="blog-card">
                    <div class="blog-image">
                        <img src="images/blog2.jpg" alt="Blog">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="far fa-calendar"></i> April 20, 2025</span>
                        </div>
                        <h3>Cybersecurity Best Practices for 2025</h3>
                        <p>Essential security measures every business should implement to protect sensitive data.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
                <div class="blog-card">
                    <div class="blog-image">
                        <img src="images/blog3.jpg" alt="Blog">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="far fa-calendar"></i> April 15, 2025</span>
                        </div>
                        <h3>Cloud Migration Strategies for Enterprises</h3>
                        <p>Step-by-step guide to successfully moving your infrastructure to the cloud.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection