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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


</head>
<body>
<!-- ================= HEADER ================= -->
<header>
    <!-- Top Contact Bar -->
    <!-- Top Contact Bar -->

<!-- Main Navigation -->
<!-- Include navbar -->
@include('layouts.frontend.navbar')

    <!-- Hero Section -->
    <div class="hero-section">
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 hero-content">
                <h1>SMP Negeri 2 <br>Siborongborong</h1>
                <p>Sekolah Unggulan yang Membangun Masa Depan Gemilang dengan Pendidikan Berkualitas dengan Mewujudkan Generasi Cerdas, Berkarakter, dan Berprestasi di Bumi Pertiwi</p>
                <a href="#" class="btn btn-primary apply-btn">READ MORE</a>
            </div>
        </div>
    </div>
</div>
    <!-- Feature Boxes -->
    <section class="campus-cards">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="bi bi-book"></i>
                            </div>
                            <h3 class="card-title">Mengapa Memilih SMPN 2 Siborongborong?</h3>
                            <p class="card-content">
                            Kami menawarkan pendidikan berkualitas dengan guru berdedikasi, fasilitas modern, dan lingkungan belajar yang mendukung pengembangan potensi siswa secara holistik.
                            </p>
                        </div>
                        <div class="hidden-content">
                            <p>Di SMPN 2 Siborongborong, setiap siswa mendapatkan pendampingan optimal untuk tumbuh menjadi pribadi cerdas, mandiri, dan bertanggung jawab. Ayo, wujudkan mimpi bersam kami!</p>
                            <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="bi bi-building"></i>
                            </div>
                            <h3 class="card-title">Kehidupan di SMPN 2 Siborongborong</h3>
                            <p class="card-content">
                            Kami menciptakan lingkungan yang dinamis melalui kegiatan akademik, ekstrakurikuler, dan pembinaan karakter, agar siswa tumbuh sebagai pribadi unggul dan percaya diri.
                        </div>
                        <div class="hidden-content">
                            <p>Dari kelas hingga lapangan, kami mendorong siswa untuk aktif, kreatif, dan berkolaborasi dalam berbagai kegiatan yang mendukung perkembangan holistik.</p>
                            <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="bi bi-newspaper"></i>
                            </div>
                            <h3 class="card-title">Berita & Kegiatan</h3>
                            <p class="card-content">
                            Kami tidak hanya memberikan pendidikan, tetapi juga pengalaman membentuk karakter dan kompetensi siswa untuk kesuksesan di sekolah maupun kehidupan.
                            </p>
                        </div>
                        <div class="hidden-content">
                            <p>Temukan berita terbaru dan acara-acara seru yang memperkaya pengalaman belajar sekaligus mempererat kebersamaan warga sekolah.</p>
                            <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>



    <main>
    <!-- section-intro.blade.php -->
<!-- section-intro.blade.php -->
<section id="section-intro" class="section-intro">
    <div class="container">
        <div class="intro-content">
            <div class="intro-image-container animated fadeIn">
                <div class="intro-image">
                    <img src="{{ asset('images/upacara.png') }}" alt="Students">
                    <!-- Decorative dots -->
                    <div class="decorative-dots"></div>
                    <!-- Decorative lines -->
                    <div class="decorative-lines"></div>
                </div>
                <div class="contact-badge animated fadeInUp delay-800">
                    <div class="icon-circle">
                        <i class="fa fa-headset"></i>
                    </div>
                    <div class="contact-text">
                        <span>Need to Know More Details?</span>
                        <strong>+(684) 555-0102</strong>
                    </div>
                </div>
            </div>
            
            <div class="intro-text-container animated fadeInRight delay-300">
                <div class="about-header">
                    <span class="about-label">About Us</span>
                    <h2 class="about-title">Creating a Lifelong Learning Best Community</h2>
                    <p class="about-description">It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks.</p>
                </div>
                
                <div class="features">
                    <div class="feature-card hover-effect animated fadeInUp delay-500">
                        <div class="feature-icon">
                            <i class="fa fa-book"></i>
                        </div>
                        <div class="feature-details">
                            <h3>Flexible Classes</h3>
                            <p>The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                        </div>
                    </div>
                    
                    <div class="feature-card hover-effect animated fadeInUp delay-700">
                        <div class="feature-icon">
                            <i class="fa fa-video"></i>
                        </div>
                        <div class="feature-details">
                            <h3>Live Class from anywhere</h3>
                            <p>The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                        </div>
                    </div>
                </div>
                
                <div class="discover-more-container animated fadeInUp delay-900">
                    <a href="#" class="discover-btn pulse-effect">
                        Discover More <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
        

        <!-- resources/views/components/profile-section.blade.php -->
<!-- resources/views/components/profile-section.blade.php -->
<section class="profile-section">
    <div class="container">
        <!-- Header Section -->
        <div class="section-header">
            <h2 class="section-title">Profile Kami</h2>
            <p class="section-description">
            Kenali layanan pendidikan terbaik kami, dikemas untuk menciptakan pengalaman belajar berkualitas dengan fasilitas dan dukungan maksimal.
            </p>
        </div>

        <!-- Service Cards -->
        <div class="service-cards">
            <!-- Quality Service Card -->
            <div class="service-card blue">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                        <line x1="12" y1="17" x2="12.01" y2="17"></line>
                    </svg>
                </div>
                <h3 class="card-title">Fasilitas</h3>
                <p class="card-description">SMPN 2 Siborongborong dilengkapi fasilitas lengkap untuk mendukung proses belajar mengajar, seperti laboratorium sains dan komputer, perpustakaan digital, lapangan olahraga, ruang seni, serta lingkungan sekolah yang asri dan kondusif.</p>
            </div>

            <!-- Online Booking Card -->
            <div class="service-card navy">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                        <line x1="8" y1="21" x2="16" y2="21"></line>
                        <line x1="12" y1="17" x2="12" y2="21"></line>
                    </svg>
                </div>
                <h3 class="card-title">Ekstrakurikuler</h3>
                <p class="card-description">Beragam pilihan ekstrakurikuler tersedia untuk mengasah potensi non-akademik siswa, mulai dari Pramuka, Paduan Suara, Olahraga (Bola Voli, Sepak Bola)</p>
            </div>

            <!-- Modern Machines Card -->
            <div class="service-card blue">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="5" width="20" height="14" rx="2"></rect>
                        <line x1="2" y1="10" x2="22" y2="10"></line>
                    </svg>
                </div>
                <h3 class="card-title">Sejarah</h3>
                <p class="card-description">Berdiri sejak 1955, SMPN 2 Siborongborong telah menjadi bagian penting dari sejarah pendidikan di [nama daerah]. Kami terus berinovasi dengan tetap memegang tradisi kebanggaan sebagai sekolah pencetak generasi berprestasi.</p>
            </div>

            <!-- Affordable Pricing Card -->
            <div class="service-card navy">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="12" y1="1" x2="12" y2="23"></line>
                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                    </svg>
                </div>
                <h3 class="card-title">Prestasi</h3>
                <p class="card-description">Siswa-siswi SMPN 2 Siborongborong terus mencatatkan torehan emas dalam berbagai kompetisi, membuktikan dedikasi kami sebagai kawah candradimuka talenta unggul.</p>
            </div>
        </div>
    </div>
</section>

<section class="stats-section">
    <div class="stats-container">
        <div class="stat-item">
            <div class="stat-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"></path>
                </svg>
            </div>
            <div class="stat-number" data-count="500">0</div>
            <div class="stat-label">+ Total Courses</div>
        </div>
        
        <div class="stat-divider"></div>
        
        <div class="stat-item">
            <div class="stat-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
            </div>
            <div class="stat-number" data-count="1900">0</div>
            <div class="stat-label">+ Our Students</div>
        </div>
        
        <div class="stat-divider"></div>
        
        <div class="stat-item">
            <div class="stat-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                    <path d="M2 17l10 5 10-5"></path>
                    <path d="M2 12l10 5 10-5"></path>
                </svg>
            </div>
            <div class="stat-number" data-count="750">0</div>
            <div class="stat-label">+ Skilled Lecturers</div>
        </div>
        
        <div class="stat-divider"></div>
        
        <div class="stat-item">
            <div class="stat-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="8" r="7"></circle>
                    <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
                </svg>
            </div>
            <div class="stat-number" data-count="30">0</div>
            <div class="stat-label">+ Win Awards</div>
        </div>
    </div>
</section>

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
<script>
    document.addEventListener('DOMContentLoaded', function() {
    // Deteksi scroll untuk mengubah tampilan navbar
    const navbar = document.querySelector('.navbar');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 100) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
    
    // Untuk tampilan mobile - mengatasi masalah dropdown
    if (window.innerWidth < 992) {
        const dropdownToggle = document.querySelectorAll('.dropdown-toggle');
        dropdownToggle.forEach(toggle => {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                const dropdownMenu = this.nextElementSibling;
                if (dropdownMenu.style.display === 'block') {
                    dropdownMenu.style.display = 'none';
                } else {
                    dropdownMenu.style.display = 'block';
                }
            });
        });
    }
    
    // Animasi untuk menu item saat hover
    const navItems = document.querySelectorAll('.nav-item');
    navItems.forEach((item, index) => {
        item.style.transitionDelay = (index * 0.05) + 's';
    });
    
    // Tombol pencarian dengan animasi klik
    const searchButton = document.querySelector('.search-button');
    if (searchButton) {
        searchButton.addEventListener('click', function() {
            this.classList.add('clicked');
            setTimeout(() => {
                this.classList.remove('clicked');
                // Di sini bisa ditambahkan kode untuk menampilkan modal pencarian
                // atau redirect ke halaman pencarian
                console.log('Search clicked');
            }, 300);
        });
    }
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

<script>
// Script untuk meningkatkan pengalaman interaktif dropdown
document.addEventListener('DOMContentLoaded', function() {
  // Tambahkan efek hover untuk desktop
  const dropdowns = document.querySelectorAll('.dropdown');
  
  dropdowns.forEach(dropdown => {
    let timeout;
    
    dropdown.addEventListener('mouseenter', function() {
      clearTimeout(timeout);
      const dropdownMenu = this.querySelector('.dropdown-menu');
      dropdownMenu.style.display = 'block';
      
      // Berikan sedikit delay agar transisi berjalan dengan baik
      setTimeout(() => {
        dropdownMenu.style.opacity = '1';
        dropdownMenu.style.visibility = 'visible';
        dropdownMenu.style.transform = 'translateY(0)';
      }, 10);
    });
    
    dropdown.addEventListener('mouseleave', function() {
      const dropdownMenu = this.querySelector('.dropdown-menu');
      dropdownMenu.style.opacity = '0';
      dropdownMenu.style.visibility = 'hidden';
      dropdownMenu.style.transform = 'translateY(10px)';
      
      // Delay sebelum menyembunyikan dropdown sepenuhnya
      timeout = setTimeout(() => {
        if (dropdownMenu.style.opacity === '0') {
          dropdownMenu.style.display = 'none';
        }
      }, 300);
    });
  });
  
  // Efek hover untuk dropdown item - tambahkan class untuk animasi
  const dropdownItems = document.querySelectorAll('.dropdown-item');
  
  dropdownItems.forEach(item => {
    item.addEventListener('mouseenter', function() {
      this.classList.add('hovered');
    });
    
    item.addEventListener('mouseleave', function() {
      this.classList.remove('hovered');
    });
  });
  
  // Highlight menu aktif berdasarkan halaman saat ini
  const highlightActiveMenu = () => {
    const currentPath = window.location.pathname;
    
    // Cek semua dropdown item dan tambahkan class active jika cocok dengan path
    document.querySelectorAll('.dropdown-item').forEach(item => {
      const href = item.getAttribute('href');
      if (href && (href === currentPath || currentPath.includes(href))) {
        item.classList.add('active');
        
        // Juga highlight parent dropdown-nya
        const parentDropdown = item.closest('.dropdown');
        if (parentDropdown) {
          const dropdownToggle = parentDropdown.querySelector('.dropdown-toggle');
          if (dropdownToggle) {
            dropdownToggle.classList.add('active');
          }
        }
      }
    });
  };
  
  // Jalankan highlightActiveMenu saat halaman dimuat
  highlightActiveMenu();
});
</script>
<script>
    const menu = dropdown.querySelector('.dropdown-menu');
    const link = dropdown.querySelector('.dropdown-toggle');
    
    // Handling untuk sentuhan pada perangkat mobile
    link.addEventListener('click', function(e) {
      if (window.innerWidth < 992) {
        e.preventDefault();
        
        // Tutup dropdown lain yang terbuka
        dropdowns.forEach(otherDropdown => {
          if (otherDropdown !== dropdown) {
            otherDropdown.querySelector('.dropdown-menu').classList.remove('show');
          }
        });
        
        // Toggle dropdown saat ini
        menu.classList.toggle('show');
      }
    });
  
  // Tutup dropdown saat klik di luar
  document.addEventListener('click', function(e) {
    if (!e.target.closest('.dropdown')) {
      document.querySelectorAll('.dropdown-menu').forEach(menu => {
        menu.classList.remove('show');
      });
    }
  });
  </script>
  <script>
  // Animasi smooth untuk navbar saat scroll
  let prevScrollpos = window.pageYOffset;
  
  window.addEventListener('scroll', function() {
    let currentScrollPos = window.pageYOffset;
    
    if (prevScrollpos > currentScrollPos) {
      // Scroll up - tampilkan navbar
      document.querySelector('.navbar').style.top = "0";
    } else {
      // Scroll down - sembunyikan navbar (hanya pada halaman yang sudah di-scroll)
      if (currentScrollPos > 100) {
        document.querySelector('.navbar').style.top = "-100px";
      }
    }
    
    // Tambahkan class 'scrolled' untuk efek visual saat scroll
    if (currentScrollPos > 50) {
      document.querySelector('.navbar').classList.add('scrolled');
    } else {
      document.querySelector('.navbar').classList.remove('scrolled');
    }
    
    prevScrollpos = currentScrollPos;
  });
});
</script>

<script>
// JavaScript untuk animasi tambahan
document.addEventListener('DOMContentLoaded', function() {
    // Animasi hover untuk kartu-kartu berenang
    const cards = document.querySelectorAll('.swim-card');
    
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) scale(1.02)';
            this.style.zIndex = '10';
        });
        
        card.addEventListener('mouseleave', function() {
            if (this.classList.contains('left-card')) {
                this.style.transform = 'translateY(0) scale(0.95)';
                this.style.zIndex = '1';
            } else {
                this.style.transform = 'translateY(0) scale(1)';
                this.style.zIndex = '2';
            }
        });
    });
    
    // Animasi fade-in untuk konten ketika halaman dimuat
    const aboutHeader = document.querySelector('.about-header');
    const swimmingCards = document.querySelector('.swimming-cards');
    
    aboutHeader.style.opacity = '0';
    swimmingCards.style.opacity = '0';
    
    setTimeout(() => {
        aboutHeader.style.transition = 'opacity 1s ease';
        aboutHeader.style.opacity = '1';
        
        setTimeout(() => {
            swimmingCards.style.transition = 'opacity 1s ease';
            swimmingCards.style.opacity = '1';
        }, 300);
    }, 300);
});
</script>

<!-- javascipt for stats-->
 <script>
document.addEventListener('DOMContentLoaded', function() {
    const statNumbers = document.querySelectorAll('.stat-number');
    
    // Function to check if element is in viewport
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }
    
    // Function to animate counting
    function animateCounter(element) {
        const target = parseInt(element.getAttribute('data-count'));
        const duration = 2000; // 2 seconds
        const step = target / 100;
        let current = 0;
        const startTime = performance.now();
        
        function updateCounter(currentTime) {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            
            // Using easeOutQuad for smoother animation
            const easeProgress = progress * (2 - progress);
            current = Math.floor(easeProgress * target);
            
            element.textContent = current;
            
            if (progress < 1) {
                requestAnimationFrame(updateCounter);
            } else {
                element.textContent = target;
            }
        }
        
        requestAnimationFrame(updateCounter);
    }
    
    // Start animation when scrolled into view
    function checkScroll() {
        statNumbers.forEach(stat => {
            if (isInViewport(stat) && !stat.classList.contains('animated')) {
                stat.classList.add('animated');
                animateCounter(stat);
            }
        });
    }
    
    // Initial check
    checkScroll();
    
    // Check on scroll
    window.addEventListener('scroll', checkScroll);
});
</script>

<!-- Bootstrap JS (via CDN) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<style>
  footer a.btn {
    transition: all 0.3s ease;
  }
  footer a.btn:hover {
    transform: scale(1.1);
    background-color: white !important;
    color: #0c2e60 !important;
  }
  footer h5 {
    font-weight: 600;
    margin-bottom: 1rem;
  }
  footer p {
    font-size: 0.95rem;
    line-height: 1.5;
  }
</style>

<!-- Bootstrap JS (via CDN) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<style>
  footer a.btn {
    transition: all 0.3s ease;
  }
  footer a.btn:hover {
    transform: scale(1.1);
    background-color: white !important;
    color: #0c2e60 !important;
  }
  footer h5 {
    font-weight: 600;
    margin-bottom: 1rem;
  }
  footer p, footer a.address-link {
    font-size: 0.95rem;
    line-height: 1.5;
    color: white;
    text-decoration: none;
  }
  footer a.address-link:hover {
    text-decoration: underline;
    color: #f0f0f0;
  }
</style>

<!-- Bootstrap JS (via CDN) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<style>
  footer a.btn {
    transition: all 0.3s ease;
  }
  footer a.btn:hover {
    transform: scale(1.1);
    background-color: white !important;
    color: #0c2e60 !important;
  }
  footer h5 {
    font-weight: 600;
    margin-bottom: 1rem;
  }
  footer p, footer a.address-link {
    font-size: 0.95rem;
    line-height: 1.5;
    color: white;
    text-decoration: none; /* Ini yang menghilangkan garis bawah */
  }
  footer a.address-link:hover {
    text-decoration: underline; /* Bisa tetap underline saat hover kalau mau */
    color: #f0f0f0;
  }
</style>
<!-- Bootstrap JS (via CDN) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<style>
  footer {
    background-color: #0c2e60;
    color: white;
    font-family: 'Poppins', sans-serif;
    font-size: 0.95rem;
  }
  footer h5 {
    font-weight: 700;
    margin-bottom: 1rem;
  }
  footer p, footer a.address-link {
    color: white;
    text-decoration: none;
    transition: color 0.3s ease;
  }
  footer a.address-link:hover {
    color: #f0f0f0;
    text-decoration: underline;
  }
  footer a.address-link {
    cursor: pointer;
  }
  .social-icons a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border: 2px solid white;
    border-radius: 50%;
    color: white;
    transition: all 0.3s ease;
    font-size: 18px;
  }
  .social-icons a:hover {
    background-color: white;
    color: #0c2e60;
    transform: scale(1.15);
  }
  hr {
    border-color: rgba(255, 255, 255, 0.2);
  }
  .footer-bottom {
    font-size: 0.85rem;
    margin-top: 20px;
  }
</style>

<footer class="pt-5 pb-3 border-top">
  <div class="container">
    <div class="row text-center text-md-start">
      <!-- Alamat Sekolah -->
      <div class="col-md-4 mb-4">
        <h5><i class="fas fa-map-marker-alt me-2"></i>Alamat Sekolah</h5>
        <a href="https://www.google.com/maps?q=Jl.+Balige+Km.+1+Siborongborong,+Sumatera+Utara+22474" target="_blank" class="address-link">
          <p class="mb-0">Jl. Balige Km. 1 Siborongborong, Pasar Siborong-Borong,</p>
          <p class="mb-0">Silait-Lait, Siborong-Borong, Kabupaten Tapanuli Utara,</p>
          <p>Sumatera Utara 22474, Indonesia</p>
        </a>
      </div>

      <!-- Jam Sekolah -->
      <div class="col-md-4 mb-4">
        <h5><i class="fas fa-clock me-2"></i>Jam Sekolah</h5>
        <p class="mb-0">Telp: (0633) 41860</p>
        <p>Senin - Jumat: 8:00 a.m. – 2:00 p.m.</p>
      </div>

      <!-- Media Sosial -->
      <div class="col-md-4 mb-4">
        <h5><i class="fas fa-share-alt me-2"></i>Media Sosial</h5>
        <div class="d-flex justify-content-center justify-content-md-start gap-3 social-icons">
          <a href="https://wa.me/6281234567890" target="_blank" title="WhatsApp">
            <i class="fab fa-whatsapp"></i>
          </a>
          <a href="https://facebook.com" target="_blank" title="Facebook">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://tiktok.com" target="_blank" title="TikTok">
            <i class="fab fa-tiktok"></i>
          </a>
        </div>
      </div>
    </div>

    <!-- Copyright -->
    <hr>
    <div class="text-center footer-bottom">
      <p class="mb-0">&copy; 2025 SMPN 2 SIBORONGBORONG. All rights reserved.</p>
    </div>
  </div>
</footer>


</body>
</html>