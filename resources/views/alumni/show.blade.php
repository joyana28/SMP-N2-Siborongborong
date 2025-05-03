@extends('layouts.frontend.app')

@section('content')
<style>
    body {
        background-color: #e3f2fd; /* biru muda */
    }

    .card {
        background-color: #ffffff; 
        border: 1px solid #0d47a1; 
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card-title {
        color: #0d47a1;
    }

    .btn-primary {
        background-color: #0d47a1;
        border-color: #0d47a1;
    }
</style>

<div class="container py-5">
    <h2 class="mb-4 text-center text-white bg-primary py-2 rounded">Detail Alumni</h2>

    @if ($alumni) 
        <div class="row">
            <div class="col-md-8 mb-4">
                <div class="card h-100">
                    @if($alumni->foto) 
                        <img src="{{ Storage::url('public/alumni/' . $alumni->foto) }}" 
                             class="card-img-top" alt="Foto {{ $alumni->nama }}">
                    @else
                        <p class="text-center text-muted">Foto tidak tersedia</p>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $alumni->nama }}</h5>
                        <p class="card-text"><strong>Tahun Lulus:</strong> {{ $alumni->tahun_lulus }}</p>
                        <p class="card-text"><strong>Deskripsi:</strong> {{ $alumni->deskripsi ?: 'Deskripsi tidak tersedia.' }}</p> <!-- Handling jika deskripsi kosong -->
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="alert alert-danger">Alumni tidak ditemukan.</div> 
    @endif
</div>
@endsection
