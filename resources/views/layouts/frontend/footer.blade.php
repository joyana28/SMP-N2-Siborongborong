<footer class="footer">
    <style>
        .footer {
            background-color: #003366;
            color: #fff;
            padding: 40px 20px 20px;
            font-family: 'Montserrat', sans-serif;
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

        .footer-about,
        .footer-links,
        .footer-contact {
            flex: 1 1 250px;
        }

        .footer-about img {
            width: 150px;
            margin-bottom: 15px;
        }

        .footer-about p {
            font-size: 14px;
            line-height: 1.6;
        }

        .social-icons a {
            color: #fff;
            margin-right: 10px;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #ffd700;
        }

        .footer-links h3,
        .footer-contact h3 {
            font-size: 18px;
            margin-bottom: 15px;
            color: #ffd700;
        }

        .footer-links ul {
            list-style: none;
            padding: 0;
        }

        .footer-links ul li {
            margin-bottom: 8px;
        }

        .footer-links ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .footer-links ul li a:hover {
            color: #ffd700;
        }

        .footer-contact p {
            font-size: 14px;
            margin-bottom: 10px;
        }

        .footer-contact i {
            margin-right: 8px;
            color: #ffd700;
        }

        .footer-bottom {
            text-align: center;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            margin-top: 30px;
            padding-top: 15px;
            font-size: 13px;
            color: #ccc;
        }

        @media (max-width: 768px) {
            .footer-content {
                flex-direction: column;
                text-align: center;
                gap: 40px;
            }

            .social-icons {
                justify-content: center;
            }
        }
        @media (max-width: 576px) {
    .footer-about img {
        width: 120px;
    }

    .footer-about p,
    .footer-contact p,
    .footer-links ul li a {
        font-size: 13px;
    }

    .footer-links h3,
    .footer-contact h3 {
        font-size: 16px;
    }

    .footer iframe {
        height: 180px;
    }

    .btn {
        font-size: 13px;
        padding: 6px 12px;
    }

    .footer-bottom p {
        font-size: 12px;
    }
}

@media (min-width: 577px) and (max-width: 992px) {
    .footer-content {
        gap: 20px;
    }

    .footer-about p,
    .footer-contact p,
    .footer-links ul li a {
        font-size: 14px;
    }

    .footer-links h3,
    .footer-contact h3 {
        font-size: 17px;
    }

    .footer iframe {
        height: 200px;
    }
}

    </style>

    <div class="container">
        <div class="footer-content">
        <div class="footer-about">
    <h5 class="mb-3 text-primary">Lokasi SMP Negeri 2 Siborongborong</h5>

    <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.488949872345!2d99.1715083747245!3d2.03879789794876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e067a79b25d01%3A0x87e99965b8c7b6a!2sSMP%20Negeri%202%20Siborongborong!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid"
    width="100%"
    height="200"
    style="border:0; border-radius: 8px;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
</iframe>

    <a
  href="https://maps.google.com/?cid=2325376172867215434"
  class="btn btn-outline-primary mt-2"
  target="_blank">
  Lihat di Google Maps
  </a>

    <p class="mt-3">
        <strong>SMP Negeri 2 Siborongborong</strong> adalah sekolah menengah pertama yang berkomitmen dalam mencetak generasi unggul, berkarakter, dan berprestasi.
    </p>

    <div class="social-icons mt-3">
        <a href="https://www.facebook.com/share/1A4AgL1n79/" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.tiktok.com/@siborongborongsmpn2?_t=ZS-8w5nlddtNuE&_r=1" target="_blank"><i class="fab fa-tiktok"></i></a>
        <a href="https://wa.me/6281370422455" target="_blank"><i class="fab fa-whatsapp"></i></a>
    </div>
</div>


            <div class="footer-links">
                <h3>Menu</h3>
                <ul>
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li><a href="{{ route('profil.visimisi') }}">Visi dan Misi</a></li>
                    <li><a href="{{ route('guru.index') }}">Guru</a></li>
                    <li><a href="{{ route('siswa.show') }}">Siswa dan Kelas</a></li>
                    <li><a href="{{ route('formulirpendaftaran.show') }}">Pendaftaran</a></li>
                </ul>
            </div>

            <div class="footer-contact">
                <h3>Kontak Kami</h3>
                <p><i class="fas fa-map-marker-alt"></i> Jl. Siborongborong No.123, Tapanuli Utara, Sumatera Utara</p>
                <p><i class="fas fa-phone"></i> 081370422455 </p>
                <p><i class="fas fa-envelope"></i> smpn2siborongborong@gmail.com</p>
            </div>
        </div>

        <div class="footer-bottom text-center py-3" style="background: linear-gradient(45deg, #ff9800, #ff5722); color: white;">
    <p class="mb-1 fw-semibold">&copy; 2025 SMP Negeri 2 Siborongborong. Semua Hak Dilindungi.</p>
    <p class="mb-0">
    </p>
</div>

    </div>
</footer>
