@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5 fw-bold">Tentang SMP Negeri 2 Siborongborong</h1>

    <!-- Visi & Misi -->
    <div class="mb-5">
        <h2 class="fw-semibold">Visi</h2>
        <p>{{ $about->visi }}</p>

        <h2 class="fw-semibold mt-4">Misi</h2>
        <ul>
            @foreach(explode("\n", $about->misi) as $misi)
                <li>{{ $misi }}</li>
            @endforeach
        </ul>
    </div>

    <!-- Fasilitas -->
    <div class="mb-5">
        <h2 class="fw-semibold">Fasilitas</h2>
        <ul>
            @foreach(explode("\n", $about->fasilitas) as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>

    <!-- Ekstrakurikuler -->
    <div class="mb-5">
        <h2 class="fw-semibold">Ekstrakurikuler</h2>
        <ul>
            @foreach(explode("\n", $about->ekstrakurikuler) as $ekskul)
                <li>{{ $ekskul }}</li>
            @endforeach
        </ul>
    </div>

    <!-- Foto jika ada -->
    @if ($about->foto)
        <div class="text-center">
            <img src="{{ asset('storage/' . $about->foto) }}" alt="Foto Sekolah" class="img-fluid rounded shadow" style="max-height: 400px;">
        </div>
    @endif
</div>
@endsection
