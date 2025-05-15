@extends('layouts.frontend.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/alumni.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

<!-- Hero Section Alumni -->
<section class="alumni-hero-modern">
    <div class="alumni-hero-modern-bg"></div>
    <div class="alumni-hero-modern-content">
        <div class="alumni-hero-modern-label">Selamat Datang di Halaman Alumni</div>
        <h1 class="alumni-hero-modern-title">Bangga Menjadi Bagian dari Alumni</h1>
        <div class="alumni-hero-modern-desc">
            Temukan kisah inspiratif, jejaring, dan kontribusi para alumni terbaik yang telah membawa nama baik sekolah ke berbagai penjuru dunia.
        </div>
    </div>
    <div class="alumni-hero-modern-decor decor-1"></div>
    <div class="alumni-hero-modern-decor decor-2"></div>
</section>

<!-- section title design graphics-->
<div class="alumni-banner-v2">
  <div class="alumni-banner-v2-bg"></div>
  <div class="alumni-banner-v2-under"></div>
  <div class="alumni-banner-v2-content">
    <div class="alumni-banner-v2-icon">
      <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="38" height="38" rx="0" fill="#f3b11f"/>
        <circle cx="19" cy="14" r="7" stroke="#1a56a7" stroke-width="2.5" fill="none"/>
        <ellipse cx="19" cy="27" rx="9" ry="5" stroke="#1a56a7" stroke-width="2.5" fill="none"/>
      </svg>
    </div>
    <div class="alumni-banner-v2-titlebox">
      <span class="alumni-banner-v2-title">DETAIL ALUMNI</span>
    </div>
    <div class="alumni-banner-v2-stripes">
      <div class="alumni-banner-v2-stripe stripe1"></div>
      <div class="alumni-banner-v2-stripe stripe2"></div>
      <div class="alumni-banner-v2-stripe stripe3"></div>
    </div>
  </div>
</div>

<!-- Alumni Detail Section -->
<section class="alumni-detail-section">
    <div class="container py-5">
        <div class="alumni-detail-header" data-aos="fade-down">
            <div class="alumni-header-inner">
                <div class="header-accent"></div>
            </div>
        </div>

        @if ($alumni && count($alumni))
        <div class="alumni-cards-horizontal-wrapper">
          @foreach($alumni as $a)
            <div class="alumni-cards-horizontal-item">
              <div class="alumni-swap-card">
                <div class="alumni-swap-card-inner">
                  <!-- FRONT SIDE -->
                  <div class="alumni-swap-card-front">
                    <div class="alumni-swap-card-shape-left"></div>
                    <div class="alumni-swap-card-shape-bottom"></div>
                    <div class="alumni-swap-card-photo-area">
                      @if($a->foto)
                        <img src="{{ asset('alumni/' . $a->foto) }}" class="alumni-swap-photo" alt="Foto {{ $a->nama }}">
                      @else
                        <div class="alumni-swap-photo alumni-swap-no-photo">
                          <i class="fas fa-user-graduate"></i>
                        </div>
                      @endif
                    </div>
                    <div class="alumni-swap-card-brand">
                      <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="38" height="38" rx="8" fill="#f3b11f"/>
                        <circle cx="19" cy="14" r="7" stroke="#1a56a7" stroke-width="2.5" fill="none"/>
                        <ellipse cx="19" cy="27" rx="9" ry="5" stroke="#1a56a7" stroke-width="2.5" fill="none"/>
                      </svg>
                    </div>
                    <div class="alumni-swap-card-nama">{{ $a->nama }}</div>
                  </div>
                  <!-- BACK SIDE -->
                  <div class="alumni-swap-card-back">
                    <div class="alumni-swap-card-back-content">
                      <div class="alumni-swap-card-back-title">{{ $a->nama }}</div>
                      <div class="alumni-swap-card-back-grad">
                        <i class="fas fa-graduation-cap"></i> Tahun Lulus {{ $a->tahun_lulus }}
                      </div>
                      <div class="alumni-swap-card-back-desc">
                        <i class="fas fa-quote-left"></i> <b>Deskripsi Alumni</b>
                        <p>{{ $a->deskripsi ?: 'Deskripsi tidak tersedia.' }}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        @else
        <div class="alert-no-alumni" data-aos="fade-up">
            <div class="alert-no-alumni-inner">
                <div class="alert-icon">
                    <i class="fas fa-exclamation-circle"></i>
                </div>
                <div class="alert-content">
                    <h4>Oops!</h4>
                    <p>Data Alumni Belum Ada.</p>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init();
</script>
@endsection
