@extends('layouts.frontend.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/visimisi.css') }}">
@section('content')
    <!-- Hero Section -->
    <section class="visimisi-hero-section">
        <div class="visimisi-hero-text">
            <h1 class="visimisi-title">Visi & Misi Sekolah</h1>
            <p class="visimisi-description">Menjadi sekolah unggul yang berlandaskan iman, ilmu, dan karakter, serta berkomitmen mencetak generasi berprestasi, berakhlak mulia, dan siap menghadapi tantangan global melalui pendidikan yang inovatif dan inklusif.</p>
        </div>
    </section>
    
    <!-- About Content Section (Vision, Mission, Goals) -->
    <section class="vmg-section">
      <div class="vmg-grid">
        <!-- Left: Vision, Mission, Goals -->
        <div class="vmg-left">
          <div class="vmg-title-group">
            <div class="vmg-title-line"></div>
            <div class="vmg-title-diamonds">
              <span class="diamond"></span>
              <span class="diamond"></span>
              <span class="diamond"></span>
            </div>
            <div class="vmg-title-line"></div>
          </div>
          <h2 class="vmg-main-title">Visi & Misi</h2>
          <div class="vmg-list">
            <div class="vmg-item vmg-animate">
              <div class="vmg-icon diamond-bg">
                <!-- Vision Icon -->
                <svg width="32" height="32" fill="none" stroke="#1a56a7" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="4"/><path d="M2 12s3-7 10-7 10 7 10 7"/></svg>
              </div>
              <div>
                <div class="vmg-item-title">Visi</div>
                <div class="vmg-item-desc">Menjadi sekolah unggul yang berlandaskan iman, ilmu, dan karakter, serta berkomitmen mencetak generasi berprestasi, berakhlak mulia, dan siap menghadapi tantangan global.</div>
              </div>
            </div>
            <div class="vmg-item vmg-animate">
              <div class="vmg-icon diamond-bg">
                <!-- Mission Icon -->
                <svg width="32" height="32" fill="none" stroke="#f3b11f" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M12 2v10"/><circle cx="12" cy="17" r="1"/><path d="M12 22v-2"/></svg>
              </div>
              <div>
                <div class="vmg-item-title">Misi</div>
                <div class="vmg-item-desc">1. Menyelenggarakan pendidikan berkualitas dan inovatif.<br>2. Membentuk karakter dan akhlak mulia.<br>3. Mengembangkan potensi dan kreativitas siswa.<br>4. Mempersiapkan siswa menghadapi tantangan global.</div>
              </div>
            </div>
            <div class="vmg-item vmg-animate">
              <div class="vmg-icon diamond-bg">
                <!-- Goals Icon -->
                <svg width="32" height="32" fill="none" stroke="#1a56a7" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="4"/><path d="M12 8v4l3 3"/></svg>
              </div>
              <div>
                <div class="vmg-item-title">Tujuan</div>
                <div class="vmg-item-desc">Mewujudkan lulusan yang cerdas, berdaya saing, berkarakter, dan siap berkontribusi positif di masyarakat.</div>
              </div>
            </div>
          </div>
        </div>
        <!-- Right: Diamond Images -->
        <div class="vmg-right">
          <div class="vmg-diamond-grid">
            <div class="diamond-img diamond1"><img src="{{ asset('images/Hari Guru.png') }}" alt="img1"></div>
            <div class="diamond-img diamond2"><img src="{{ asset('images/kumpul.png') }}" alt="img2"></div>
            <div class="diamond-img diamond3"><img src="{{ asset('images/upacara.png') }}" alt="img3"></div>
            <div class="diamond-img diamond4"><img src="{{ asset('images/penghargaan.png') }}" alt="img4"></div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Yellow Strip -->
    <div class="yellow-strip"></div>
    
    <!-- History Section -->
    <div class="history-section">
        <div class="history-container">
            <div class="history-text">
                <h2>Who We are & History</h2>
                <p>
                    Vestibule eleifend semper ultricies. Morbi
                    quis magna in metus vulputate aliquet. Donec
                    a diam massa. Sed at diam ut dolor accumsan
                    dignissim. Fusce ut magna ut libero ultricies
                    hendrerit id volutpat. Fusce eget mi hendrerit,
                    semper turpis sed volutpat. Amet, arcu id
                    turpis a luctus consequat.
                </p>
            </div>
            <div class="history-text">
                <p>
                    Duis hendrerit lobortis. Praesent porta enim
                    quis lacinia at nisl tempor dolor. Vestibulum
                    diam metus, malesuada a neque lobortis,
                    consectetur porttitor justo. Mauris feugiat
                    ipsum et velit molestie et commodo volutpat
                    scelerisque sit amet. Donec rutrum pulvinar
                    accumsan ut at rhoncus velit porttitor.
                </p>
            </div>
        </div>
    </div>
    
    <!-- Achievement Section -->
    <div class="achievement-section">
        <div class="container">
            <h2>Our Achievement</h2>
            <div class="achievement-dots">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
            <p class="achievement-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, et labore, fugiat non informative stupit, animi quisquam distinctio ipsa amet.
            </p>
            <div class="awards">
                <div class="award-icon">ISO 9001</div>
                <div class="award-icon">AWARD 1</div>
                <div class="award-icon">AWARD 2</div>
                <div class="award-icon">QR CODE</div>
                <div class="award-icon">CERTIFIED</div>
            </div>
        </div>
    </div>

