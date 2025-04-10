<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMP Negeri 2 Siborongborong</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jis-slider.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


    <!-- Font Awesome for icons -->
</head>
<body>
<!-- ================= HEADER ================= -->
<header>

<style>
        .top-contact-bar {
            background-color: #2d6a4f;
            color: white;
            padding: 8px 0;
        }
        
        .school-logo {
            font-family: Arial, sans-serif;
        }
        
        .school-logo .be {
            color: #ff6b00;
            font-weight: bold;
            font-size: 32px;
        }
        
        .school-logo .school {
            color: #333;
            font-style: italic;
            font-weight: normal;
            font-size: 32px;
        }
        
        .navbar {
            background-color: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .navbar .nav-link {
            color: #555;
            font-weight: 500;
            padding: 15px 20px;
        }
        
        .navbar .nav-link:hover {
            color: #ff6b00;
        }
        
        .search-button {
            background: none;
            border: none;
            font-size: 1.2rem;
            color: #555;
        }
    </style>
</head>
<body>
<!-- ================= HEADER ================= -->
<header>
    <!-- Top Contact Bar -->
    <div class="top-contact-bar">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="contact-info">
                <span>Have any questions? </span>
                <a href="tel:+61383766284" class="text-white text-decoration-none ms-2">
                    <i class="bi bi-telephone"></i> +61 383 766 284
                </a>
                <a href="mailto:noreply@envato.com" class="text-white text-decoration-none ms-3">
                    <i class="bi bi-envelope"></i> noreply@envato.com
                </a>
            </div>
            <div class="social-icons">
                <a href="#" class="text-white ms-2"><i class="bi bi-skype"></i></a>
                <a href="#" class="text-white ms-2"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-white ms-2"><i class="bi bi-twitter"></i></a>
                <a href="#" class="text-white ms-2"><i class="bi bi-vimeo"></i></a>
                <a href="#" class="text-white ms-2"><i class="bi bi-youtube"></i></a>
                <a href="#" class="text-white ms-2"><i class="bi bi-flickr"></i></a>
                <a href="#" class="text-white ms-2"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-white ms-2"><i class="bi bi-behance"></i></a>
                <a href="#" class="text-white ms-2"><i class="bi bi-dribbble"></i></a>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand school-logo" href="{{ route('home') }}">
                <span class="be">Be</span><span class="school">school</span>
            </a>
            
            <!-- Toggle Button for Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Navigation Items -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">News & Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About our school</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Buy now</a>
                    </li>
                    <li class="nav-item">
                        <button class="search-button">
                            <i class="bi bi-search"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    

  <!-- 🔸 Hero Section (Welcome Message) -->
  <section class="py-5 bg-light">
    <div class="container-fluid px-5 py-5">
      <div class="row align-items-center">

        <!-- 🖼️ Gambar -->
        <div class="col-lg-6 mb-4 mb-lg-0">
          <img src="/images/siborongborong.png" alt="SMPN 2 Siborongborong" class="img-fluid rounded shadow w-100">
        </div>

        <!-- 📝 Teks Sambutan -->
        <div class="col-lg-6 text-center text-lg-start">
          <h1 class="display-3 fw-bold mb-4">
            Selamat Datang di<br>
            <span class="text-primary">SMPN 2 Siborongborong</span>
          </h1>
          <p class="fs-4">Kami berkomitmen memberikan pendidikan yang berkualitas untuk membangun generasi masa depan yang cerdas, berkarakter, dan siap bersaing.</p>
          <a href="#intro" class="btn btn-primary btn-lg px-5 py-3 mt-4">Pelajari Lebih Lanjut</a>
        </div>

      </div>
    </div>
  </section>

</header>



    <main>
    <section id="intro" class="section-intro">
            <div class="container">
                <div class="intro-content">
                    <div class="intro-image">
                        <img src="../images/pp 2.png" alt="Taman Sekolah">
                    </div>
                    <div class="intro-text">
                        <span class="section-tag">Selamat Datang di</span>
                        <h2>Website SMP Negeri 2 Siborongborong</h2>
                        <p>Selamat datang di Website & informasi resmi SMP Negeri 2 Siborongborong.</p>
                        <p>SMP Negeri 2 Siborongborong merupakan salah satu lembaga pendidikan yang ada di kabupaten Tapanuli Utara kecamatan Siborongborong yang selalu berusaha memberikan pelayanan pendidikan yang terbaik untuk siswa-siswi kami.</p>
                        <p>Guna memenulis tuntung kependidikan serta menciptakan cendekiawan dengan belajar yang berujualan dan berbudi pekerti luhur, serta menghasilkan SDM yang berdaya saing. Program pembelajaran kami ditekankan pada pembentukan karakter siswa yang baik tanpa mengabaikan hal akademis.</p>
                    </div>
                </div>
            </div>
        </section>

        

        <!-- resources/views/components/profile-section.blade.php -->
<!-- resources/views/components/profile-section.blade.php -->
<div class="profile-section">
    <!-- Navigation Menu -->
    

    <!-- Header Section -->
    <div class="container main-container">
        <div class="header-section">
            <div class="row">
                <div class="col-md-5">
                    <h1 class="header-title">Profil Sekolah </h1>
                </div>
                <div class="col-md-7">
                    <p class="header-description">
                    Jelajahi dunia pendidikan terbaik bersama kami, tempat di mana setiap siswa dibimbing untuk tumbuh, berinovasi, dan meraih masa depan gemilang
                    </p>
                    <div class="learn-more">
                        <a href="#" class="learn-more-link">Learn More →</a>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="sections-grid">
            <div class="row no-gutters card-row">
                
                <div class="col card-column">
                    <div class="card-container">
                        <div class="section-card">
                            <div class="section-image visit-jis">
                                <div class="overlay-content">
                                    <h3>Fasilitas</h3>
                                    <p>Fasilitas lengkap dan modern sebagai komitmen utama untuk mendukung proses belajar mengajar yang optimal.</p>
                                </div>
                            </div>
                        </div>
                        <div class="section-title">
                            <h3>Fasilitas</h3>
                        </div>
                    </div>
                </div>

                
                <div class="col card-column">
                    <div class="card-container">
                        <div class="section-card">
                            <div class="section-image apply">
                                <div class="overlay-content">
                                    <h3>Sejarah</h3>
                                    <p>Jejak langkah yang berdiri sebagai wujud nyata dari semangat pendidikan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="section-title">
                            <h3>Sejarah</h3>
                            
                        </div>
                    </div>
                </div>

                
                <div class="col card-column">
                    <div class="card-container">
                        <div class="section-card">
                            <div class="section-image faqs">
                                <div class="overlay-content">
                                    <h3>Prestasi</h3>
                                    <p>Senantiasa menorehkan prestasi membanggakan sebagai wujud dedikasi dan daya juang tinggi.</p>
                                </div>
                            </div>
                        </div>
                        <div class="section-title">
                            <h3>Prestasi</h3>
                        </div>
                    </div>
                </div>

               
            </div>
        </div>
    </div>

    @include('components.jis-slider-section')
    <section class="announcements py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Pengumuman</h2>

        <!-- Search Bar dengan ikon -->
        <div class="mb-4">
            <div class="input-group">
                <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                <input type="text" id="searchInput" class="form-control" placeholder="Cari pengumuman...">
            </div>
        </div>

        <div class="row" id="announcementContainer">
            <?php
            $announcements = [
                [
                    "title" => "Kelulusan Siswa",
                    "date" => "20 Juni 2023",
                    "image" => "announcement1.jpg",
                    "desc" => "Pengumuman kelulusan siswa tahun ajaran 2022/2023"
                ],
                [
                    "title" => "Pengumuman peserta didik baru",
                    "date" => "15 Juni 2023",
                    "image" => "announcement2.jpg",
                    "desc" => "Pendaftaran peserta didik baru tahun ajaran 2023/2024"
                ],
                [
                    "title" => "Perubahan jadwal pembelajaran",
                    "date" => "10 Juni 2023",
                    "image" => "announcement3.jpg",
                    "desc" => "Perubahan jadwal pembelajaran untuk semester ganjil"
                ],
                [
                    "title" => "Kegiatan Maulid Nabi di sekolah",
                    "date" => "5 Juni 2023",
                    "image" => "announcement4.jpg",
                    "desc" => "Kegiatan Maulid Nabi Muhammad SAW di sekolah"
                ],
                [
                    "title" => "Kegiatan Perpisahan Guru",
                    "date" => "1 Juni 2023",
                    "image" => "announcement5.jpg",
                    "desc" => "Kegiatan perpisahan guru yang akan pensiun"
                ],
                [
                    "title" => "Lomba 17 Agustus",
                    "date" => "17 Agustus 2023",
                    "image" => "announcement6.jpg",
                    "desc" => "Berbagai lomba akan diadakan untuk memeriahkan HUT RI ke-78"
                ],
                [
                    "title" => "Hari Guru",
                    "date" => "25 November 2024",
                    "image" => "HariGuru.jpg",
                    "desc" => "Menghargai peran guru dalam membentuk generasi masa depan."
                ]
            ];

            foreach ($announcements as $announcement) {
                echo '
                <div class="col-md-6 col-lg-4 mb-4 announcement-item">
                    <div class="card h-100 shadow-sm">
                        <img src="' . $announcement['image'] . '" class="card-img-top" alt="' . $announcement['title'] . '">
                        <div class="card-body">
                            <h5 class="card-title">' . $announcement['title'] . '</h5>
                            <p class="text-muted small">' . $announcement['date'] . '</p>
                            <p class="card-text">' . $announcement['desc'] . '</p>
                            <a href="#" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                ';
            }
            ?>
        </div>
    </div>
</section>


    </main>

    

<script src="{{ asset('js/jis-slider.js') }}"></script>
<!-- Script pencarian -->
<script>
    document.getElementById('searchInput').addEventListener('keyup', function () {
        let searchValue = this.value.toLowerCase();
        let announcements = document.querySelectorAll('.announcement-item');

        announcements.forEach(function (item) {
            const text = item.innerText.toLowerCase();
            item.style.display = text.includes(searchValue) ? 'block' : 'none';
        });
    });
</script>
<!-- Script bagian hero content -->
<script>
    // Saat dokumen sudah dimuat
    document.addEventListener("DOMContentLoaded", function() {
        const container = document.getElementById("heroContainer");
        container.classList.add("animate__fadeInDown");
    });
</script>

<!-- Bootstrap JS (via CDN) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>