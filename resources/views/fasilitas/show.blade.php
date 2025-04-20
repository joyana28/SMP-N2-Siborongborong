@extends('layouts.frontend.app',[
    'title' => 'Baca Fasilitas',
])
@section('content')
</div>
<!-- ##### Catagory Area End ##### -->

<!-- ##### Blog Details Content ##### -->
<div class="blog-details-content section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <!-- Blog Details Text -->
                <div class="blog-details-box">
                    <div class="blog-details-headline text-center mb-4">
                        <h2>{{ $fasilitas->judul }}</h2>
                    </div>
                    <div class="blog-details-text">
                        <div class="blog-details-image mb-4">
                            <img src="{{ asset('folderimage/' . $fasilitas->gambar_fasilitas) }}" alt="{{ $fasilitas->judul }}" class="img-fluid">
                        </div>
                        <div class="blog-details-description">
                            {!! $fasilitas->deskripsi_fasilitas !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

<style>
@import url("https://fonts.googleapis.com/css2?family=Allura&family=Poppins:wght@300&display=swap");

.clever-catagory.blog-details {
    height: 70vh; /* Sesuaikan ketinggian */
    width: 100%; /* Full width */
}

.blog-details-box {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    padding: 30px;
}

.blog-details-headline h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
    font-family: 'Allura', cursive;
}

.blog-details-text {
    color: #002c4c;
    font-size: 1.1rem;
    line-height: 1.8;
}

.blog-details-image img {
    max-width: 100%;
    border-radius: 10px;
}

.blog-details-description {
    padding: 20px;
    border-radius: 10px;
    background-color: aliceblue;
}

/* Style untuk tampilan responsif */
@media (max-width: 768px) {
    .blog-details-headline h2 {
        font-size: 2rem;
    }
    .blog-details-text {
        font-size: 1rem;
    }
}
</style>
