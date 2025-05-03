@extends('layouts.frontend.app')

@section('content')
<style>
    body {
        background-color: #e3f2fd;
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
    <h2 class="mb-4 text-center text-white bg-primary py-2 rounded">Formulir Pendaftaran Terbaru</h2>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $formulir->deskripsi }}</h5>
                    <p><strong>Tanggal Terbit:</strong> {{ \Carbon\Carbon::parse($formulir->tanggal_terbit)->format('d M Y') }}</p>
                    <p><strong>Tanggal Berakhir:</strong> {{ \Carbon\Carbon::parse($formulir->tanggal_berakhir)->format('d M Y') }}</p>
                    <a href="{{ Storage::url('public/formulir/' . $formulir->formulir_pendaftaran) }}" class="btn btn-primary" target="_blank">Unduh Formulir</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
