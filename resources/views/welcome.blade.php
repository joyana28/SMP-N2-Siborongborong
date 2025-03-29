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
        
        /* Hero section dengan animasi */
        .hero-section {
            background-image: url('/images/siborongborong.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            position: relative;
            color: white;
            display: flex;
            align-items: center;
            opacity: 0; /* Mulai dengan opacity 0 */
            animation: fadeInBackground 2s ease-in forwards; /* Animasi background */
        }
        
        /* Animasi untuk background */
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
            opacity: 0; /* Mulai dengan opacity 0 */
            transform: translateY(30px); /* Mulai sedikit di bawah posisi akhir */
            animation: fadeInText 2s ease-out 1s forwards; /* Animasi teks dengan delay */
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
            opacity: 0; /* Mulai dengan opacity 0 */
            animation: pulseButton 2s ease-in-out 2s forwards; /* Animasi tombol dengan delay */
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
                        <img src="/api/placeholder/600/400" alt="Halaman Sekolah" class="welcome-image">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>