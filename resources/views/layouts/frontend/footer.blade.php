<!-- Footer SMP Negeri 2 Siborongborong -->
<footer class="footer">

  <style>
    /* Root variables (opsional, bisa kamu pindahkan ke global CSS) */
    :root {
      --footer-bg: #003366;
      --footer-color: #fff;
      --footer-primary: #ffd700;
      --footer-secondary: #ccc;
      --footer-link-bg: #0f3d64;
      --footer-font-family: 'Montserrat', sans-serif;
    }

    .footer {
      background-color: var(--footer-bg);
      color: var(--footer-color);
      padding: 20px 10px;
      font-family: var(--footer-font-family);
      font-size: 13px;
      position: relative;
      overflow: hidden;
      width: 100%; /* Melebar penuh */
      box-sizing: border-box;
    }

    .footer .visimisi-container {
      max-width: 1200px;
      margin: 0 auto;
    }

    .footer-content {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 30px;
      padding-bottom: 20px;
    }

    .footer-left,
    .footer-right {
      flex: 1 1 45%;
      min-width: 280px; /* Supaya gak terlalu kecil di layar besar */
    }

    .footer-left p {
      margin-top: 10px;
      line-height: 1.6;
    }

    .social-icons {
      margin-top: 12px;
      display: flex;
      justify-content: flex-start;
    }

    .social-icons a {
      color: var(--footer-color);
      margin-right: 12px;
      font-size: 18px;
      background-color: var(--footer-link-bg);
      padding: 8px;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.3s ease, color 0.3s ease, transform 0.2s ease;
      text-decoration: none;
    }

    .social-icons a:hover,
    .social-icons a:focus {
      background-color: var(--footer-primary);
      color: var(--footer-bg);
      transform: translateY(-3px);
      outline: none;
    }

    .footer-right h3 {
      font-size: 16px;
      margin-bottom: 10px;
      color: var(--footer-primary);
    }

    .footer-right p,
    .footer-right a {
      margin: 5px 0;
      line-height: 1.5;
      text-decoration: none;
      color: inherit;
      display: flex;
      align-items: center;
    }

    .footer-right a:hover,
    .footer-right a:focus {
      color: var(--footer-primary);
      outline: none;
    }

    .footer-right a[href*="maps.google.com"]:hover,
    .footer-right a[href*="maps.google.com"]:focus {
      text-shadow: 0 0 8px rgba(255, 215, 0, 0.7);
      transform: scale(1.02);
      font-weight: bold;
    }

    .footer-right i {
      margin-right: 8px;
      color: var(--footer-primary);
      font-size: 15px;
      min-width: 15px;
      text-align: center;
    }

    .footer-bottom {
      text-align: center;
      border-top: 1px solid var(--footer-primary);
      margin-top: 20px;
      padding-top: 10px;
      font-size: 12px;
      color: var(--footer-secondary);
    }

    /* Responsive */
    @media (max-width: 768px) {
      .footer-content {
        flex-direction: column;
        text-align: center;
      }

      .footer-left,
      .footer-right {
        flex: 1 1 100%;
      }

      .social-icons {
        justify-content: center;
      }

      .footer-right p,
      .footer-right a {
        justify-content: center;
      }
    }
  </style>

  <div class="visimisi-container">
    <div class="footer-content">
      <div class="footer-left">
        <p><strong>SMP Negeri 2 Siborongborong</strong> adalah sekolah menengah pertama yang berkomitmen mencetak generasi unggul dan berprestasi.</p>
        <div class="social-icons">
          <a href="https://www.facebook.com/share/16JeniM1Ei/" target="_blank" rel="noopener" aria-label="Facebook SMP Negeri 2 Siborongborong"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.tiktok.com/@siborongborongsmpn2?_t=ZS-8winXA1Ci4w&_r=1" target="_blank" rel="noopener" aria-label="TikTok SMP Negeri 2 Siborongborong"><i class="fab fa-tiktok"></i></a>
          <a href="https://wa.me/081370422455" target="_blank" rel="noopener" aria-label="WhatsApp SMP Negeri 2 Siborongborong"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>

      <div class="footer-right">
        <h3>Kontak Kami</h3>
        <a href="https://maps.app.goo.gl/TJCLkje61KfGqsPv9" target="_blank" rel="noopener" aria-label="Alamat SMP Negeri 2 Siborongborong di Google Maps">
          <i class="fas fa-map-marker-alt"></i> Jl. Siswa No.10, Siaro, Kec. Siborongborong, Kabupaten Tapanuli Utara, Sumatera Utara 22474
        </a>
        <p><i class="fas fa-phone"></i> 081370422455</p>
        <p><i class="fas fa-envelope"></i> smpn2siborongborong@gmail.com</p>
      </div>
    </div>

    <div class="footer-bottom">
      <p>© 2025 SMP Negeri 2 Siborongborong. Semua Hak Dilindungi.</p>
    </div>
  </div>
</footer>
