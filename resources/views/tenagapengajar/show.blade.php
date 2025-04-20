@extends('layouts.frontend.app',[
    'title' => 'Tenaga Pengajar',
])
@section('content')
<style>
@import url("https://fonts.googleapis.com/css2?family=Allura&family=Poppins:wght@300&display=swap");

h2 {
    font-size: 5rem;
    margin-bottom: 0.5rem;
    font-weight: bold;
    font-family: sans-serif;
    color: #ffffff;
}
h4 {
    font-size: 3rem;
    margin-bottom: 0.5rem;
    font-weight: bold;
    font-family: sans-serif; 
}
.blog-details-header {
    width: 100%;
    height: auto;
}
.blog-details-header img {
    width: 100%;
    height: auto;
    object-fit: cover;
}

.responsive-image {
    max-width: 100%;
    height: auto;
}

.small-image {
    max-width: 100%; /* Ubah menjadi 100% agar gambar responsif */
    height: auto;
    margin-left: auto; /* Pusatkan gambar */
    margin-right: auto; /* Pusatkan gambar */
}

.flex-container {
    display: flex;
    flex-direction: column; /* Ubah menjadi column untuk tata letak yang lebih baik */
    align-items: flex-start;
    gap: 20px;
}

.info {
    margin-bottom: 10px;
    width: 100%; /* Perlebar tempat untuk teks */
}

.info h5 {
    margin: 0;
}

.info p {
    margin: 0;
    word-wrap: break-word; /* Memastikan teks wrap saat melebihi lebar container */
}
</style>
<!-- Blog Details Content -->
<div class="blog-details-content section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <!-- Blog Details Text -->
                <div class="blog-details-text bg-white p-4 shadow-sm rounded">
                    <h4 class="text-primary">Informasi Tenaga Pengajar</h4>
                    <div class="flex-container">
                        <!-- Blog Details Information -->
                        <div class="info">
                            <div class="info">
                                <h5>Nama:</h5>
                                <p>{{ $pengajar->nama_tenagapengajar }}</p>
                            </div>
                            <div class="info">
                                <h5>Jabatan:</h5>
                                <p>{{ $pengajar->jabatan }}</p>
                            </div>
                            <div class="info">
                                <h5>Status:</h5>
                                <p>{{ $pengajar->status }}</p>
                            </div>
                            <div class="info">
                                <h5>NIP:</h5>
                                <p>{{ $pengajar->nip }}</p>
                            </div>
                            <div class="info">
                                <h5>Alamat:</h5>
                                <p>{{ $pengajar->alamat }}</p>
                            </div>
                        </div>
                        <!-- Blog Details Image -->
                        <div class="blog-details-header">
                            <img src="{{ asset('folderimage/' . $pengajar->gambar_tenagapengajar) }}" alt="{{ $pengajar->nama_tenagapengajar }}" class="responsive-image small-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
