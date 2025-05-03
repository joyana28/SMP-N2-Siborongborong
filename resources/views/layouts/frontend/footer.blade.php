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
    </style>

    <div class="container">
        <div class="footer-content">
            <div class="footer-about">
                <img src="{{ asset('images/logo-white.png') }}" alt="SMPN 2 Siborongborong">
                <p>SMP Negeri 2 Siborongborong adalah sekolah menengah pertama yang berkomitmen dalam mencetak generasi unggul, berkarakter, dan berprestasi.</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
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
                <p><i class="fas fa-phone"></i> (0633) 123456</p>
                <p><i class="fas fa-envelope"></i> smpn2siborongborong@gmail.com</p>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 SMP Negeri 2 Siborongborong. Semua Hak Dilindungi.</p>
            <p>www.smpn2siborongborong.sch.id</p>
        </div>
    </div>
</footer>
