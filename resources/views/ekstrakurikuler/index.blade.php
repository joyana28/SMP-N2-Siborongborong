@extends('layouts.frontend.app',[
    'title' => 'Ekstrakurikuler',
])
@section('content')

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        @import url("https://fonts.googleapis.com/css2?family=playfair display&family=Poppins:wght@300;400;700&display=swap");
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap');

        body {
            color: #333;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            font-size: 16px;
        }

        .hero-section {
            background: url('/path/to/your/hero-image.jpg') no-repeat center center/cover;
            min-height: 60vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-align: center;
            position: relative;
            padding: 1rem;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 600px;
        }

        .hero-content h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .hero-content p {
            font-size: 1rem;
            margin-bottom: 1.5rem;
        }

        .hero-content .btn {
            font-size: 0.9rem;
            padding: 0.75rem 1.25rem;
        }

        .section-heading {
            text-align: center;
            margin-bottom: 2rem;
            padding: 2rem 1rem;
            color: #ffffff;
        }

        .section-heading h3 {
            font-size: 4rem;
            margin-bottom: 1rem;
            font-family: 'playfair display', cursive;
        }

        .section-heading p {
            font-size: 0.9rem;
            font-weight: 300;
        }

        .cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            padding: 0 1rem;
        }

        .card {
            background-color: #fff;
            border-radius: 0.75rem;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s;
            position: relative;
        }

        .card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            z-index: 1;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .card:hover::before {
            opacity: 1;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.2);
        }

        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-top-left-radius: 0.75rem;
            border-top-right-radius: 0.75rem;
        }

        .card-content {
            padding: 1.25rem;
            position: relative;
            z-index: 2;
        }

        .card-title {
            font-size: 1.1rem;
            font-weight: bold;
            margin-bottom: 0.75rem;
            color: #002c4c;
        }

        .card-description {
            color: #333;
            line-height: 1.5;
            margin-bottom: 0.75rem;
            font-size: 0.9rem;
        }

        .card-description p {
            margin-bottom: 0.5rem;
        }

        .card-details {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 0.75rem;
            border-radius: 0.5rem;
            margin-top: 0.75rem;
        }

        .card-details h5 {
            font-size: 0.9rem;
            color: #002c4c;
            margin-bottom: 0.5rem;
        }

        .card-details ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .card-details ul li {
            margin-bottom: 0.25rem;
            font-size: 0.8rem;
        }

        .btn {
            background-color: #FF6600;
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            font-weight: bold;
            font-size: 0.8rem;
            text-transform: uppercase;
            transition: background-color 0.3s;
            cursor: pointer;
            display: inline-block;
        }

        .btn:hover {
            background-color: #002c4c;
            color: #fff;
        }

        .testimonials {
            margin-top: -3rem;
            padding: 2rem 1rem;
            text-align: center;
        }

        .testimonials h3 {
            font-size: 1.75rem;
            margin-bottom: 1.5rem;
            color: #002c4c;
        }

        .testimonial-item {
            max-width: 100%;
            margin: 0 auto 1.25rem;
        }

        .testimonial-item p {
            font-size: 0.9rem;
            font-style: italic;
            color: #ffffff;
        }

        .testimonial-item h5 {
            margin-top: 0.75rem;
            font-size: 0.9rem;
            color: #002c4c;
        }

        .cta-section {
            background-color: #002c4c;
            color: #fff;
            padding: 2rem 1rem;
            text-align: center;
        }

        .cta-section h3 {
            font-size: 1.75rem;
            margin-bottom: 1rem;
        }

        .cta-section p {
            font-size: 0.9rem;
            margin-bottom: 1.25rem;
        }

        .cta-section .btn {
            font-size: 0.9rem;
            padding: 0.75rem 1.25rem;
        }

        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 5rem;
            }

            .hero-content p {
                font-size: 0.9rem;
            }

            .section-heading h3 {
                font-size: 1.75rem;
            }
            .card{
                margin-top: 20px
            }
            .cards-container{
                width: 1000px;
                display:inline;
                
            }
        }

        @media (max-width: 480px) {
            body {
                font-size: 14px;
            }

            .hero-content h1 {
                font-size: 1.75rem;
            }

            .section-heading h3 {
                font-size: 2rem;
            }

            .card-title {
                font-size: rem;
            }

            .card-description {
                font-size: 0.8rem;
            }

            .btn {
                font-size: 0.75rem;
                padding: 0.5rem 0.75rem;
            }

            .cards-container {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 390px) {
            .cards-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<section id="ekstrakurikuler" class="upcoming-events section-padding-100-0 mb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3 style="margin-top: -100px;" class="animate__animated animate__fadeInDown">Ekstrakurikuler</h3>
                    <p style="color: #ffffff; font-weight: bold;" class="animate__animated animate__fadeInDown">Jelajahi keberagaman ekstrakurikuler SMP Negeri 1 Silaen melalui situs web kami yang menyajikan informasi dan kegiatan yang inspiratif untuk pengembangan siswa secara kreatif dan sosial.</p>
                </div>
            </div>
        </div>
        <div class="cards-container">
            @foreach ($ekstrakurikuler as $ekstrakurikulers)
                <div class="card animate__animated animate__fadeInUp">
                    <img src="{{ asset('folderimage/' . $ekstrakurikulers->gambar_ekstrakurikuler) }}" alt="{{ $ekstrakurikulers->judul_ekstrakurikuler }}">
                    <div class="card-content">
                        <h4 class="card-title">{{ $ekstrakurikulers->judul_ekstrakurikuler }}</h4>
                        <div class="card-description">
                            <p>{{ $ekstrakurikulers->deskripsi }}</p>
                            <ul>
                                <li><i class="fas fa-check-circle"></i> Aktifitas yang menarik</li>
                                <li><i class="fas fa-check-circle"></i> Pengembangan keterampilan</li>
                                <li><i class="fas fa-check-circle"></i> Kesempatan berpartisipasi dalam event</li>
                            </ul>
                        </div>
                        <a href="{{ route('ekstrakurikuler.show', $ekstrakurikulers->slug) }}" class="btn">Selengkapnya</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const container = document.querySelector('.cards-container');
        const cards = container.querySelectorAll('.card');
        if (cards.length <= 4) {
            container.style.gridTemplateColumns = `repeat(${cards.length}, 1fr)`;
        }
    });
</script>

@stop
