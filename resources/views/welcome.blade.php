<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMPN 2 Siborongborong</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        
       
        .hero-section {
            background-image: url('/images/siborongborong.png');
            background-size: cover;
            background-position: center;
            height: 100vh;
            position: relative;
            color: white;
            display: flex;
            align-items: center;
            opacity: 0;
            animation: fadeInBackground 2s ease-in forwards;
        }
        
        
        @keyframes fadeInBackground {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
        
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            padding: 0 15px;
            opacity: 0; 
            transform: translateY(30px); 
            animation: fadeInText 2s ease-out 1s forwards; 
        }
        
        /* Animasi untuk teks */
        @keyframes fadeInText {
            0% { 
                opacity: 0; 
                transform: translateY(30px);
            }
            100% { 
                opacity: 1; 
                transform: translateY(0);
            }
        }
        
        .navbar {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 3;
            background: transparent;
            opacity: 0; /* Mulai dengan opacity 0 */
            animation: fadeInNav 1.5s ease-in-out 0.5s forwards; /* Animasi navbar */
        }
        
        /* Animasi untuk navbar */
        @keyframes fadeInNav {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
        
        .navbar-nav .nav-link {
            color: white !important;
            margin: 0 15px;
        }
        
        .btn-contact {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            opacity: 0;
            animation: pulseButton 2s ease-in-out 2s forwards; 
        }
        
        /* Animasi untuk tombol contact */
        @keyframes pulseButton {
            0% { 
                opacity: 0; 
                transform: scale(0.95);
            }
            70% { 
                opacity: 1; 
                transform: scale(1.05);
            }
            100% { 
                opacity: 1; 
                transform: scale(1);
            }
        }
        
        .btn-contact:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
        
        
        .welcome-section {
            background-color: #f8f9fa;
            padding: 80px 0;
            opacity: 0;
            animation: fadeInWelcome 1.5s ease-in-out 0.5s forwards;
        }
        
        @keyframes fadeInWelcome {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
        
        .welcome-content {
            display: flex;
            align-items: center;
        }
        
        .welcome-image {
            background-image: url('/images/pp 2.png');
            background-size: cover;
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            opacity: 0;
            transform: translateX(-30px);
            animation: fadeInLeft 1.5s ease-out 1s forwards;
        }
        
        @keyframes fadeInLeft {
            0% { 
                opacity: 0; 
                transform: translateX(-30px);
            }
            100% { 
                opacity: 1; 
                transform: translateX(0);
            }
        }
        
        .welcome-text {
            padding-left: 40px;
            opacity: 0;
            transform: translateX(30px);
            animation: fadeInRight 1.5s ease-out 1.5s forwards;
        }
        
        @keyframes fadeInRight {
            0% { 
                opacity: 0; 
                transform: translateX(30px);
            }
            100% { 
                opacity: 1; 
                transform: translateX(0);
            }
        }
        
        .welcome-text h2 {
            color: #333;
            margin-bottom: 20px;
        }
        
        .welcome-text h3 {
            color: #0056b3;
            margin-bottom: 20px;
        }
        
        .welcome-text p {
            color: #666;
            text-align: justify;
            margin-bottom: 15px;
        }
        
        /* Style untuk section informasi sekolah */
        .info-section {
            padding: 80px 0;
            background-color: #fff;
        }
        
        .info-card {
            text-align: center;
            padding: 30px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 30px;
            height: 100%;
        }
        
        .info-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }
        
        .info-icon {
            font-size: 40px;
            color: #007bff;
            margin-bottom: 20px;
        }
        
        .info-card h3 {
            color: #333;
            margin-bottom: 15px;
            font-weight: 600;
        }
        
        .info-card p {
            color: #666;
            margin-bottom: 20px;
        }
        
        .profile-section {
            padding: 80px 0;
            background-color: #f5f7fa;
        }
        
        .profile-content {
            display: flex;
            align-items: center;
        }
        
        .profile-text {
            color: #666;
            text-align: justify;
            line-height: 1.6;
        }
        
        .profile-text h2 {
            color: #333;
            margin-bottom: 20px;
            font-weight: bold;
        }
        
        .btn-more {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            margin-top: 20px;
        }
        
        .btn-more:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">SMPN 2 SIBORONGBORONG</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="#">Home</a>
                <a class="nav-link" href="#">About</a>
                <a class="nav-link" href="#">Tenaga Pendidik</a>
                <a class="nav-link" href="#">Siswa</a>
                <a class="nav-link" href="#">Pendaftaran</a>
            </div>
        </div>
    </nav>

    <div class="hero-section">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <h1>SMPN 2 Siborongborong Membangun Masa Depan Melalui Pendidikan Berkualitas</h1>
            <a href="#" class="btn-contact mt-3">Contact us</a>
        </div>
    </div>

    <div class="welcome-section">
        <div class="container">
            <div class="welcome-content">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="{{ asset('images/pp 2.png') }}" alt="Halaman Sekolah" class="welcome-image">
                    </div>
                    <div class="col-md-6 welcome-text">
                        <h2>Selamat Datang di</h2>
                        <h3>Website SMP Negeri 2 Siborong-Borong</h3>
                        <p>Halo dan selamat datang di website resmi SMP Negeri 2 Siborong-Borong!</p>
                        <p>Kami dengan bangga menghadirkan portal ini sebagai sumber informasi bagi siswa, guru, orang tua, dan masyarakat. Di sini, Anda dapat menemukan berbagai informasi terkait sekolah, kegiatan ekstrakurikuler, prestasi, serta berita terbaru dari sekolah kami.</p>
                        <p>SMP Negeri 2 Siborong Borong berkomitmen untuk menciptakan lingkungan belajar yang inspiratif dan mendukung perkembangan potensi setiap siswa, baik dalam bidang akademik maupun non-akademik.</p>
                        <p>Mari bersama-sama membangun masa depan yang lebih baik melalui pendidikan berkualitas!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bagian Profil Sekolah (BARU) -->
    <!-- Bagian Profil Sekolah dengan Efek Hover -->
<!-- Bagian Profil Sekolah dengan Efek Hover -->
<div class="profile-section">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="profile-text">
                    <h2><strong>Profil Sekolah</strong></h2>
                    <p>Di samping adalah profil sekolah kami secara keseluruhan dari mulai bagian depan hingga seluruh fasilitas yang terdapat di sekolah kami kami akan memberikan pelayanan yang terbaik untuk masa depan putra-putri anda...</p>
                    <button class="btn-more">Lebih Lanjut</button>
                </div>
            </div>
            <div class="col-md-7">
                <div class="profile-cards">
                    <div class="card-row">
                        <div class="profile-card">
                            <div class="card-icon">
                                <img src="/api/placeholder/80/80" alt="Fasilitas Icon">
                            </div>
                            <h3>Fasilitas</h3>
                            <div class="card-overlay">
                                <p>Lihat semua fasilitas lengkap yang kami sediakan untuk mendukung pembelajaran</p>
                                <a href="#" class="card-link">Lihat Detail</a>
                            </div>
                        </div>
                        <div class="profile-card">
                            <div class="card-icon">
                                <img src="/api/placeholder/80/80" alt="Lokasi Icon">
                            </div>
                            <h3>Lokasi</h3>
                            <div class="card-overlay">
                                <p>Temukan lokasi strategis sekolah kami yang nyaman dan mudah diakses</p>
                                <a href="#" class="card-link">Lihat Peta</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-row">
                        <div class="profile-card">
                            <div class="card-icon">
                                <img src="/api/placeholder/80/80" alt="Sejarah Icon">
                            </div>
                            <h3>Sejarah</h3>
                            <div class="card-overlay">
                                <p>Pelajari perjalanan dan sejarah SMP Negeri 2 Siborongborong dari awal berdiri</p>
                                <a href="#" class="card-link">Baca Sejarah</a>
                            </div>
                        </div>
                        <div class="profile-card">
                            <div class="card-icon">
                                <img src="/api/placeholder/80/80" alt="Prestasi Icon">
                            </div>
                            <h3>Prestasi</h3>
                            <div class="card-overlay">
                                <p>Lihat berbagai prestasi akademik dan non-akademik yang telah diraih siswa kami</p>
                                <a href="#" class="card-link">Lihat Prestasi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .profile-section {
        padding: 80px 0;
        background-color: #f5f7fa;
    }

    .profile-text {
        color: #666;
        text-align: justify;
        line-height: 1.6;
        padding-right: 20px;
    }
    
    .profile-text h2 {
        color: #333;
        margin-bottom: 20px;
        font-weight: bold;
    }

    .btn-more {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        border: none;
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s ease;
        margin-top: 20px;
    }

    .btn-more:hover {
        background-color: #0056b3;
    }
    
    /* Card Styles */
    .profile-cards {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    
    .card-row {
        display: flex;
        gap: 20px;
    }
    
    .profile-card {
    width: 170px;
    height: 200px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    background-color: #fff;
    padding: 20px;
    flex: 1;
    text-align: center;
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}

/* Efek animasi latar belakang */
.profile-card::before {
    content: "";
    position: absolute;
    width: 100px;
    background-image: linear-gradient(180deg, rgb(206, 113, 20), rgb(219, 203, 23));
    height: 130%;
    animation: rotBGimg 3s linear infinite;
    transition: all 0.2s linear;
}

/* Latar belakang utama */
.profile-card::after {
    content: "";
    position: absolute;
    background:rgb(8, 73, 157); /* Warna utama tetap */
    inset: 5px;
    border-radius: 15px;
    transition: all 0.3s ease-in-out;
}

/* Teks judul di atas kartu */
.profile-card h3 {
    position: absolute;
    font-size: 18px;
    color: white !important;
    z-index: 2;
    opacity: 1;
    transition: opacity 0.3s ease-in-out;
}

/* Overlay teks tambahan */
.profile-card .card-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.6); /* Warna transparan untuk teks */
    padding: 15px;
    color: white;
    text-align: center;
    opacity: 0;
    transform: translateY(100%);
    transition: all 0.3s ease-in-out;
    z-index: 3; /* Pastikan overlay berada di atas */
}

/* Animasi hover */
.profile-card:hover .card-overlay {
    opacity: 1;
    transform: translateY(0);
}

.profile-card:hover h3 {
    opacity: 0; /* Sembunyikan teks utama saat overlay muncul */
}

/* Animasi background tetap berjalan */
@keyframes rotBGimg {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(360deg);
    }
}


    .card-icon {
        margin-bottom: 15px;
        transition: all 0.3s ease;
    }
    
    .card-icon img {
        width: 60px;
        height: 60px;
        object-fit: contain;
    }
    
    .profile-card h3 {
        font-size: 18px;
        font-weight: 600;
        color: #007bff;
        margin: 0;
        transition: all 0.3s ease;
    }
    
    /* Overlay Styles */
    .card-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 123, 255, 0.9);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        opacity: 0;
        visibility: hidden;
        transition: all 0.4s ease;
        padding: 20px;
        text-align: center;
        backdrop-filter: blur(5px);
    }
    
    .card-overlay p {
        color: white;
        font-size: 14px;
        margin-bottom: 15px;
        transform: translateY(20px);
        opacity: 0;
        transition: all 0.4s ease 0.1s;
    }
    
    .card-link {
        background-color: white;
        color: #007bff;
        padding: 8px 15px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
        transform: translateY(20px);
        opacity: 0;
        transition: all 0.4s ease 0.2s;
    }
    
    .card-link:hover {
        background-color: #f0f0f0;
        transform: scale(1.05);
    }
    
    /* Hover Effect */
    .profile-card:hover .card-overlay {
        opacity: 1;
        visibility: visible;
    }
    
    .profile-card:hover .card-overlay p,
    .profile-card:hover .card-overlay .card-link {
        transform: translateY(0);
        opacity: 1;
    }
    
    .profile-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
    }
    
    .profile-card:hover .card-icon {
        transform: scale(0.9);
    }
    
    .profile-card:hover h3 {
        opacity: 0;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .card-row {
            flex-direction: column;
        }
        
        .profile-card {
            height: 150px;
            margin-bottom: 15px;
        }
    }
</style>

<!-- Bagian Pengumuman -->
<div class="announcement-section">
    <div class="container">
        <h2 class="section-title">Pengumuman</h2>
        
        <div class="search-container">
            <input type="text" placeholder="Search" class="search-input">
            <i class="search-icon"></i>
        </div>
        
        <div class="announcements-container">
            <!-- Pengumuman Kiri -->
            <div class="left-announcements">
                <!-- Pengumuman 1 -->
                <div class="announcement-item">
                    <div class="announcement-content">
                        <h3>Belajar di Rumah</h3>
                        <p>Lorem ipsum dolor sit amet adipiscing amet adipiscinamet adipisci aqua lorem ipsum.</p>
                        <span class="announcement-date">20 Juni</span>
                    </div>
                    <div class="arrow-container">
                        <span class="arrow-icon">→</span>
                    </div>
                </div>
                
                <!-- Pengumuman 2 -->
                <div class="announcement-item">
                    <div class="announcement-content">
                        <h3>Kegiatan Belajar mengajar di Rumah</h3>
                        <p>Lorem ipsum dolor sit amet adipiscing ipsum dolor sit amet adipiscing aqua lorem ipsum.</p>
                        <span class="announcement-date">20 Juni</span>
                    </div>
                    <div class="arrow-container">
                        <span class="arrow-icon">→</span>
                    </div>
                </div>
                
                <!-- Pengumuman 3 -->
                <div class="announcement-item">
                    <div class="announcement-content">
                        <h3>Kegiatan Belajar mengajar di Rumah</h3>
                        <p>Lorem ipsum dolor sit amet adipiscing ipsum dolor sit amet adipiscing aqua lorem ipsum.</p>
                        <span class="announcement-date">20 Juni</span>
                    </div>
                    <div class="arrow-container">
                        <span class="arrow-icon">→</span>
                    </div>
                </div>
                
                <!-- Pengumuman 4 -->
                <div class="announcement-item">
                    <div class="announcement-content">
                        <h3>Kegiatan Pembelajaran Daring</h3>
                        <p>Lorem ipsum dolor sit amet adipiscing ipsum dolor sit amet adipiscing aqua lorem ipsum.</p>
                        <span class="announcement-date">20 Juni</span>
                    </div>
                    <div class="arrow-container">
                        <span class="arrow-icon">→</span>
                    </div>
                </div>
            </div>
            
            <!-- Pengumuman Kanan -->
            <div class="right-announcements">
                <!-- Pengumuman 1 -->
                <div class="announcement-item">
                    <div class="announcement-date-right">01 - 06 - 2021</div>
                    <div class="announcement-content-right">
                        <h3>Pengumuman prestasi siswa</h3>
                    </div>
                    <div class="arrow-container">
                        <span class="arrow-icon">→</span>
                    </div>
                </div>
                
                <!-- Pengumuman 2 -->
                <div class="announcement-item">
                    <div class="announcement-date-right">01 - 06 - 2021</div>
                    <div class="announcement-content-right">
                        <h3>Pembagian Ijazah</h3>
                    </div>
                    <div class="arrow-container">
                        <span class="arrow-icon">→</span>
                    </div>
                </div>
                
                <!-- Pengumuman 3 -->
                <div class="announcement-item">
                    <div class="announcement-date-right">01 - 06 - 2021</div>
                    <div class="announcement-content-right">
                        <h3>Jadwal kelas senin-jumat</h3>
                    </div>
                    <div class="arrow-container">
                        <span class="arrow-icon">→</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .announcement-section {
        padding: 80px 0;
        background-color: #fff;
    }
    
    .section-title {
        font-size: 28px;
        font-weight: bold;
        color: #333;
        margin-bottom: 30px;
    }
    
    .search-container {
        position: relative;
        max-width: 600px;
        margin-bottom: 40px;
    }
    
    .search-input {
        width: 100%;
        padding: 10px 15px;
        border-radius: 20px;
        border: 1px solid #e0e0e0;
        background-color: #f5f7fa;
        outline: none;
        font-size: 14px;
    }
    
    .search-icon {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #999;
    }
    
    .announcements-container {
        display: flex;
        gap: 40px;
    }
    
    .left-announcements {
        flex: 1;
    }
    
    .right-announcements {
        flex: 1;
    }
    
    .announcement-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid #eee;
    }
    
    .announcement-content {
        flex: 1;
    }
    
    .announcement-content h3 {
        font-size: 18px;
        font-weight: 600;
        color: #333;
        margin-bottom: 10px;
    }
    
    .announcement-content p {
        font-size: 14px;
        color: #666;
        margin-bottom: 10px;
    }
    
    .announcement-date {
        font-size: 14px;
        color: #999;
        display: block;
    }
    
    .arrow-container {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: 15px;
    }
    
    .arrow-icon {
        font-size: 20px;
        color: #007bff;
    }
    
    .announcement-date-right {
        font-size: 14px;
        color: #999;
        width: 100px;
    }
    
    .announcement-content-right {
        flex: 1;
    }
    
    .announcement-content-right h3 {
        font-size: 16px;
        font-weight: 600;
        color: #333;
        margin: 0;
    }
    
    @media (max-width: 768px) {
        .announcements-container {
            flex-direction: column;
        }
    }
</style>

<!-- Footer Section -->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <!-- Alamat Sekolah Column -->
            <div class="col-md-4 footer-column">
                <h3>Alamat Sekolah</h3>
                <p>Jl. Balige Km. 1 Siborongborong, Pasar Siborong-Borong,</p>
                <p>Silait-Lait, Siborong-Borong, Kabupaten Tapanuli Utara,</p>
                <p>Sumatera Utara 22474, Indonesia</p>
            </div>
            
            <!-- Jam Sekolah Column -->
            <div class="col-md-4 footer-column">
                <h3>Jam Sekolah</h3>
                <p>Telp : (0633) 41860</p>
                <p>8:00 a.m. - 2:00 p.m.</p>
            </div>
            
            <!-- Media Sosial Column -->
            <div class="col-md-4 footer-column">
                <h3>Media Sosial</h3>
                <div class="social-icons">
                    <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>
        
        <!-- Copyright Row -->
        <div class="copyright-row">
            <p>© 2025 All rights reserved.</p>
        </div>
    </div>
</footer>

<style>
    /* Footer Styles */
    .footer-section {
        background-color: #f8f9fa;
        padding: 40px 0 20px;
        color: #333;
        border-top: 1px solid #e0e0e0;
    }
    
    .footer-column {
        margin-bottom: 30px;
    }
    
    .footer-column h3 {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 20px;
        color: #333;
    }
    
    .footer-column p {
        margin-bottom: 5px;
        font-size: 14px;
        line-height: 1.6;
        color: #666;
    }
    
    .social-icons {
        display: flex;
        gap: 15px;
    }
    
    .social-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background-color: #fff;
        color: #333;
        text-decoration: none;
        border: 1px solid #e0e0e0;
        transition: all 0.3s ease;
    }
    
    .social-icon:hover {
        background-color: #007bff;
        color: white;
        border-color: #007bff;
    }
    
    .copyright-row {
        margin-top: 30px;
        padding-top: 20px;
        border-top: 1px solid #e0e0e0;
        text-align: left;
    }
    
    .copyright-row p {
        font-size: 14px;
        color: #888;
        margin: 0;
    }
    
    @media (max-width: 768px) {
        .footer-column {
            text-align: center;
        }
        
        .social-icons {
            justify-content: center;
        }
        
        .copyright-row {
            text-align: center;
        }
    }
</style>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
