@extends('layouts.backend.app')

@section('title', 'Tambah Fasilitas')

@section('content')
<style>
    body {
        background-color: #f4f6f8;
    }

    .card-custom {
        border: none;
        border-left: 6px solid #0d47a1;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }

    .btn-primary-custom {
        background-color: #0d47a1;
        border: none;
    }

    .btn-primary-custom:hover {
        background-color: #08306b;
        border-color: #08306b;
    }

    .btn-secondary-custom {
        background-color: #b0bec5;
        border: none;
    }

    .btn-secondary-custom:hover {
        background-color: #90a4ae;
    }

    .form-label {
        font-weight: bold;
        color: #0d47a1;
    }

    .form-control {
        border-radius: 0.375rem;
    }

    .form-control-file {
        padding: 10px;
    }

    .invalid-feedback {
        font-size: 0.875rem;
    }

    .alert-danger {
        color: red;
    }

    .card-header {
        font-size: 1.5rem;
        font-weight: bold;
        color: #0d47a1;
    }

    label {
        font-weight: 600;
        color: #0d47a1;
    }

    input:focus, textarea:focus {
        border-color: #0d47a1;
        box-shadow: 0 0 0 0.2rem rgba(13,71,161,.25);
    }
</style>

<div class="container mt-5">
    <h2 class="mb-4 text-primary">Tambah Fasilitas</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card card-custom">
        <div class="card-body">
            <form action="{{ route('admin.fasilitas.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="nama">Nama Fasilitas</label>
                    <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" required>
                    @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="4" required>{{ old('deskripsi') }}</textarea>
                    @error('deskripsi') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <input type="text" name="tahun" id="tahun" class="form-control @error('tahun') is-invalid @enderror" value="{{ old('tahun') }}" required>
                    @error('tahun') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="perhatian_teknis">Perhatian Teknis</label>
                    <input type="text" name="perhatian_teknis" id="perhatian_teknis" class="form-control @error('perhatian_teknis') is-invalid @enderror" value="{{ old('perhatian_teknis') }}">
                    @error('perhatian_teknis') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="penambahan">Penambahan</label>
                    <input type="text" name="penambahan" id="penambahan" class="form-control @error('penambahan') is-invalid @enderror" value="{{ old('penambahan') }}">
                    @error('penambahan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="foto">Foto Fasilitas</label>
                    <input type="file" name="foto" accept="image/*" class="form-control-file @error('foto') is-invalid @enderror">
                    @error('foto') 
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                @if(isset($fasilitas) && $fasilitas->foto)
                        <div class="mt-2">
                        <img src="{{ asset('fasilitas/' . $fasilitas->foto) }}" alt="Foto Fasilitas" width="200">
                        </div>
                @endif
                </div>

                <div class="text-right mt-4">
                    <button type="submit" class="btn btn-primary-custom">Simpan</button>
                    <a href="{{ route('admin.fasilitas.index') }}" class="btn btn-secondary-custom ml-2">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
