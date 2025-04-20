@extends('layouts.frontend.app', [
    'title' => 'Ekstrakurikuler SMP Negeri 2 Siborongborong',
])

@section('content')
    <div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400" style="background-image: url('{{ asset('folderimage/ekskul_header.jpg') }}');">
        <div class="blog-details-headline">
            <h3 class="text-white">Ekstrakurikuler SMP Negeri 2 Siborongborong</h3>
        </div>
    </div>

    <!-- ##### Blog Details Content ##### -->
    <div class="blog-details-content section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">

                    <!-- Ekstrakurikuler Pramuka -->
                    <div class="blog-details-text mb-5 p-4 rounded">
                        <h4>Pramuka</h4>
                        <img src="{{ asset('folderimage/pramuka.jpg') }}" class="img-fluid rounded mb-3" alt="Ekstrakurikuler Pramuka">
                        <p>
                            Kegiatan Pramuka di SMP Negeri 2 Siborongborong membentuk karakter siswa menjadi disiplin, mandiri, dan bertanggung jawab. Kegiatan dilakukan secara rutin dan melibatkan pelatihan kepemimpinan serta kegiatan alam terbuka.
                        </p>
                    </div>

                    <!-- Ekstrakurikuler Paduan Suara -->
                    <div class="blog-details-text p-4 rounded">
                        <h4>Paduan Suara</h4>
                        <img src="{{ asset('folderimage/paduan_suara.jpg') }}" class="img-fluid rounded mb-3" alt="Ekstrakurikuler Paduan Suara">
                        <p>
                            Paduan suara adalah tempat bagi siswa yang memiliki minat dan bakat di bidang musik dan vokal. Siswa dilatih untuk tampil secara harmonis dalam berbagai acara sekolah dan lomba-lomba tingkat daerah.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop

<style>
@import url("https://fonts.googleapis.com/css2?family=Allura&family=Poppins:wght@300&display=swap");

.text-white {
    font-size: 3rem !important;
    margin-bottom: 0.5rem;
    font-weight: bold;
    font-family: "Allura", serif;
    color: #ffffff;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
}

.blog-details-text {
    color: #002c4c;
    font-size: 18px;
    background-color: #f0f8ff;
    font-family: 'Poppins', sans-serif;
}

.blog-details-text h4 {
    font-weight: bold;
    margin-bottom: 1rem;
    color: #004080;
}
</style>
