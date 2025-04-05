<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMP Negeri 2 Siborongborong</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jis-slider.css') }}">
    <!-- Font Awesome for icons -->
</head>
<body>
    <header>
        <div class="top-bar">
            <div class="container">
                <div class="logo">
                    <h1>SMP Negeri 2 Siborongborong</h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="#" class="active">Home</a></li>
                        <li><a href="#">Profil</a></li>
                        <li><a href="#">Akademik</a></li>
                        <li><a href="#">Guru</a></li>
                        <li><a href="#">Siswa</a></li>
                        <li><a href="#">Galeri</a></li>
                        <li><a href="#">Kontak</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="hero">
            <div class="container">
                <div class="hero-content">
                    <h2>SMPN 2 Siborongborong Membangun Masa Depan Melalui Pendidikan Berkualitas.</h2>
                    <a href="#" class="btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="section-intro">
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
                            <div class="section-image say-hello">
                                <div class="overlay-content">
                                    <h3>Lokasi</h3>
                                    <p>Lokasi yang strategis menawarkan lingkungan belajar yang tenang dan asri.</p>
                                </div>
                            </div>
                        </div>
                        <div class="section-title">
                            <h3>Lokasi</h3>
                            
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

        <section class="announcements">
            <div class="container">
                <h2>Pengumuman</h2>
                
                <div class="announcement-list">
                    <?php
                    // This would normally come from a database
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
                        ]
                    ];
                    
                    foreach($announcements as $announcement) {
                        echo '
                        <div class="announcement-item">
                            <div class="announcement-image">
                                <img src="'.$announcement['image'].'" alt="'.$announcement['title'].'">
                            </div>
                            <div class="announcement-content">
                                <h3>'.$announcement['title'].'</h3>
                                <p class="announcement-date">'.$announcement['date'].'</p>
                                <p>'.$announcement['desc'].'</p>
                                <a href="#" class="read-more">→</a>
                            </div>
                        </div>
                        ';
                    }
                    ?>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="footer-columns">
                <div class="footer-col">
                    <h3>Alamat Sekolah</h3>
                    <p>Jl. Raya KM. 1 Siborongborong, Tarutung</p>
                    <p>Kabupaten Tapanuli Utara</p>
                    <p>Provinsi Sumatera Utara, Kode Pos</p>
                    <p>Telepon/Fax: 62476-XXXXX</p>
                </div>
                
                <div class="footer-col">
                    <h3>Jam Sekolah</h3>
                    <p>Sen - Jum: 07.30 - 15.00</p>
                    <p>Sab: 07.30 – 12.00</p>
                </div>
                
                <div class="footer-col">
                    <h3>Media Sosial</h3>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="copyright">
                <p>© 2024. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/jis-slider.js') }}"></script>
</body>
</html>