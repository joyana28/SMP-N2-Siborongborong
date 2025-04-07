@extends('layouts.app')

@section('content')
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-5 fw-bold">Tentang Kami</h2>
    <div class="row text-center">

      <!-- Visi Misi -->
      <div class="col-md-4 mb-4">
        <a href="/about/visi-misi" class="text-decoration-none text-dark">
          <div class="position-relative rounded overflow-hidden shadow-sm">
            <img src="{{ asset('images/visi.jpg') }}" class="img-fluid" alt="Visi Misi">
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 d-flex flex-column justify-content-center text-white p-3">
              <h5 class="fw-bold">Visi & Misi</h5>
              <p class="small mb-0">Komitmen kami dalam membentuk generasi cerdas dan berkarakter.</p>
            </div>
          </div>
          <h5 class="mt-2 fw-semibold">Visi & Misi</h5>
        </a>
      </div>

      <!-- Fasilitas -->
      <div class="col-md-4 mb-4">
        <a href="/about/fasilitas" class="text-decoration-none text-dark">
          <div class="position-relative rounded overflow-hidden shadow-sm">
            <img src="{{ asset('images/fasilitas.jpg') }}" class="img-fluid" alt="Fasilitas">
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 d-flex flex-column justify-content-center text-white p-3">
              <h5 class="fw-bold">Fasilitas</h5>
              <p class="small mb-0">Fasilitas lengkap dan modern mendukung kegiatan belajar mengajar.</p>
            </div>
          </div>
          <h5 class="mt-2 fw-semibold">Fasilitas</h5>
        </a>
      </div>

      <!-- Ekstrakurikuler -->
      <div class="col-md-4 mb-4">
        <a href="/about/ekstrakurikuler" class="text-decoration-none text-dark">
          <div class="position-relative rounded overflow-hidden shadow-sm">
            <img src="{{ asset('images/ekstrakurikuler.jpg') }}" class="img-fluid" alt="Ekstrakurikuler">
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 d-flex flex-column justify-content-center text-white p-3">
              <h5 class="fw-bold">Ekstrakurikuler</h5>
              <p class="small mb-0">Pengembangan minat dan bakat siswa di luar akademik.</p>
            </div>
          </div>
          <h5 class="mt-2 fw-semibold">Ekstrakurikuler</h5>
        </a>
      </div>

    </div>
  </div>
</section>
@endsection
