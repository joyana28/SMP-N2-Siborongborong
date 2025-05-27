<footer class="footer">
  <style>
    .footer {
      background-color: #003366;
      color: #fff;
      padding: 20px 10px;
      font-family: 'Montserrat', sans-serif;
      font-size: 13px;
      position: relative; /* Menambahkan ini untuk efek tambahan jika diperlukan */
      overflow: hidden; /* Memastikan tidak ada luapan konten */
    }

    .footer .container {
      max-width: 1200px;
      margin: 0 auto;
    }

    .footer-content {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 30px;
      padding-bottom: 20px; /* Menambahkan padding bawah untuk pemisah */
    }

    .footer-left,
    .footer-right {
      flex: 1 1 45%;
    }

    .footer-left p {
      margin-top: 10px;
      line-height: 1.6;
    }

    .social-icons {
      margin-top: 12px;
      display: flex; /* Untuk menengahkan ikon di mobile */
      justify-content: flex-start; /* Default ke kiri */
    }

    .social-icons a {
      color: #fff;
      margin-right: 12px;
      font-size: 18px;
      background-color: #0f3d64;
      padding: 8px;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.3s ease, color 0.3s ease, transform 0.2s ease; /* Transisi lebih halus */
    }

    .social-icons a:hover {
      background-color: #ffd700;
      color: #003366;
      transform: translateY(-3px); /* Efek melayang sedikit saat hover */
    }

    .footer-right h3 {
      font-size: 16px;
      margin-bottom: 10px;
      color: #ffd700;
    }

    .footer-right p, .footer-right a { /* Menambahkan 'a' untuk link lokasi */
      margin: 5px 0;
      line-height: 1.5; /* Memastikan baris tidak terlalu rapat */
      text-decoration: none; /* Menghilangkan underline pada link */
      color: inherit; /* Mengambil warna teks dari parent */
      display: flex; /* Untuk mengatur ikon dan teks sejajar */
      align-items: center; /* Menyelaraskan ikon secara vertikal */
    }
    
    .footer-right a:hover {
        color: #ffd700; /* Warna kuning saat hover pada link */
    }

    /* Gaya khusus untuk link lokasi */
    .footer-right a[href*="maps.google.com"]:hover {
        color: #ffd700; /* Warna teks kuning */
        text-shadow: 0 0 8px rgba(255, 215, 0, 0.7); /* Efek cahaya kuning */
        transform: scale(1.02); /* Sedikit membesar */
        font-weight: bold; /* Teks sedikit lebih tebal */
    }

    .footer-right i {
      margin-right: 8px; /* Menambah sedikit jarak dari ikon */
      color: #ffd700;
      font-size: 15px; /* Sedikit lebih besar agar terlihat jelas */
    }

    .footer-bottom {
      text-align: center;
      border-top: 1px solid  #ffd700;;
      margin-top: 20px;
      padding-top: 10px;
      font-size: 12px;
      color: #ccc;
    }

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
        justify-content: center; /* Menengahkan ikon sosial media di mobile */
      }
      
      .footer-right p, .footer-right a {
        justify-content: center; /* Menengahkan teks kontak di mobile */
      }
    }
  </style>

  <div class="container">
    <div class="footer-content">
      <div class="footer-left">
        <p><strong>SMP Negeri 2 Siborongborong</strong> adalah sekolah menengah pertama yang berkomitmen mencetak generasi unggul dan berprestasi.</p>
        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-tiktok"></i></a>
          <a href="#"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>

      <div class="footer-right">
        <h3>Kontak Kami</h3>
        <a href="https://maps.app.goo.gl/TJCLkje61KfGqsPv9" target="_blank" style="text-decoration: none; color: inherit; transition: color 0.3s ease, text-shadow 0.3s ease, transform 0.3s ease;">
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