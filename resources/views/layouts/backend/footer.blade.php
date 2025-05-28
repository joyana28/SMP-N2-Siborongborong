<style>
    /* Gaya dasar untuk footer */
    footer {
        background-color: #001f3f;
        color: #E8AA42;
        padding: 20px 0; /* Padding default untuk layar besar */
        text-align: center; /* Memastikan teks selalu di tengah */
    }

    /* Penyesuaian untuk ukuran layar tablet dan yang lebih kecil */
    @media (max-width: 768px) {
        footer {
            padding: 15px 0; /* Mengurangi padding vertikal */
        }
        footer .container {
            padding: 0 15px; /* Menambahkan padding horizontal agar konten tidak menempel ke tepi */
        }
        footer p {
            font-size: 14px; /* Mengurangi ukuran font */
        }
    }

    /* Penyesuaian untuk ukuran layar ponsel dan yang lebih kecil */
    @media (max-width: 480px) {
        footer {
            padding: 10px 0; /* Mengurangi padding vertikal lagi */
        }
        footer p {
            font-size: 12px; /* Mengurangi ukuran font lagi */
        }
    }
</style>

<footer style="background-color: #001f3f; color: #E8AA42; padding: 20px 0;">
    <div class="container text-center">
        <p class="mb-0">&copy; {{ date('Y') }} Sistem Informasi SMP Negeri 2 Siborongborong. All rights reserved.</p>
    </div>
</footer>