@extends('layouts.frontend.app',[
    'title' => 'Tenaga Pengajar',
])
@section('content')

<section class="upcoming-events section-padding-100-0 mb-0">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <div class="section-heading">
                    <h3 class="animate__animated animate__fadeInDown">Tenaga Pengajar Kami</h3>
                </div>
            </div>
        </div>
        <section class="content animate__animated animate__fadeInUp">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    @foreach($pengajar as $pengajars)
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4 d-flex align-items-stretch">
                        <div class="card shadow-sm">
                            <div class="card-img-wrapper">
                                <img class="card-img-top" src="{{ asset('folderimage/' . $pengajars->gambar_tenagapengajar) }}" alt="Gambar">
                                <div class="card-overlay"></div>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $pengajars->nama_tenagapengajar }}</h5>
                                <p class="card-text">{{ Str::limit($pengajars->deskripsi, 80) }}</p>
                                <a href="{{ route('tenagapengajar.show', $pengajars->slug) }}" class="btn btn-primary btn-sm mt-auto">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</section>
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
<style>@import url("https://fonts.googleapis.com/css2?family=Allura&family=Poppins:wght@300&display=swap");

.section-heading h3 {
    font-size: 4rem;
    margin-bottom: 0.5rem;
    font-weight: bold;
    font-family: sans-serif;
    color: #002c4c;
}

.section-heading p {
    font-size: 1rem;
    color: #002c4c;
    font-weight: 400;
    border-bottom: 2px solid #002c4c; 
    border-bottom: 3px solid #ffffff; 
    border-bottom: 2px solid #002c4c; 
    padding-bottom: 5px;
}

.card-text{
    border-bottom: 2px solid #0099ff; 
    border-bottom: 3px solid #0099ff; 
    padding-bottom: 5px;
}



.card {
    border: none;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    position: relative;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
}

.card-img-wrapper {
    width: 100%;
    padding-top: 100%; 
    position: relative;
    overflow: hidden;
    padding: 120px;
}

.card-img-wrapper img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.card-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.card:hover .card-overlay {
    opacity: 1;
}

.card-title {
    font-size: 1rem;
    font-weight: bold;
    margin-bottom: 0.5rem;
}

.card-text {
    font-size: 0.8rem;
    color: #555;
    margin-bottom: 1rem;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #004085;
}

/* Responsive Styles */
@media (max-width: 1200px) {
    .section-heading h3 {
        font-size: 4rem;
    }

    .card-title {
        font-size: 0.8rem;
    }

    .card-text {
        font-size: 0.7rem;
    }
}

@media (max-width: 992px) {
    .card-img-wrapper {
        padding: 80px;
    }
}

@media (max-width: 768px) {
    .section-heading h3 {
        font-size: 4%;
    }

    .card-img-wrapper {
        padding: 60px;
    }
}

@media (max-width: 576px) {
    .section-heading h3 {
        font-size: 3rem;
    }

    .section-heading p {
        font-size: 1rem;
    }

    .card-title {
        font-size: 0.6rem;
    }

    .card-text {
        font-size: 0.6rem;
    }

    .card-img-wrapper {
        padding: 150px;
    }
}
</style>

@stop
