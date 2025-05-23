<footer class="footer">
  <style>
    .footer {
      background-color: #003366;
      color: #fff;
      padding: 20px 10px;
      font-family: 'Montserrat', sans-serif;
      font-size: 13px;
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
    }

    .social-icons a {
      color: #fff;
      margin-right: 12px;
      font-size: 18px;
      background-color: #0f3d64;
      padding: 8px;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.3s;
    }

    
    .social-icons a:hover {
      background-color: #ffd700;
      color: #003366;
    }

    .footer-right h3 {
      font-size: 16px;
      margin-bottom: 10px;
      color: #ffd700;
    }

    .footer-right p {
      margin: 5px 0;
    }

    .footer-right i {
      margin-right: 6px;
      color: #ffd700;
    }

    .footer-bottom {
      text-align: center;
      border-top: 1px solid rgba(255, 255, 255, 0.2);
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
        justify-content: center;
      }
    }
  </style>

  <div class="container">
    <div class="footer-content">
      <!-- KIRI: Deskripsi & Sosial Media -->
      <div class="footer-left">
        <p><strong>SMP Negeri 2 Siborongborong</strong> adalah sekolah menengah pertama yang berkomitmen mencetak generasi unggul dan berprestasi.</p>
        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-tiktok"></i></a>
          <a href="#"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>

      <!-- KANAN: Kontak Kami -->
      <div class="footer-right">
        <h3>Kontak Kami</h3>
       <a href="https://www.google.com/maps?q=Jl.+Siborongborong+No.123,+Tapanuli+Utara" target="_blank" style="text-decoration: none; color: inherit;">
  <i class="fas fa-map-marker-alt"></i> Jl. Siborongborong No.123, Tapanuli Utara
</a>

        <p><i class="fas fa-phone"></i> 081370422455</p>
        <p><i class="fas fa-envelope"></i> smpn2siborongborong@gmail.com</p>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2025 SMP Negeri 2 Siborongborong. Semua Hak Dilindungi.</p>
    </div>
  </div>
</footer>
