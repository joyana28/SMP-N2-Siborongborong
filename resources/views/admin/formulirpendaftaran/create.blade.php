@extends('layouts.backend.app')

@section('title', 'Tambah Formulir Pendaftaran')

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
    <h2 class="mb-4 text-primary">Tambah Formulir Pendaftaran</h2>

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
            <form action="{{ route('admin.formulirpendaftaran.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" value="{{ old('deskripsi') }}">
                    @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="formulir_pendaftaran" class="form-label">
                        <strong>Formulir Pendaftaran</strong>
                        <small class="form-text text-muted mb-2">
                            Format yang diizinkan: PDF, DOC, DOCX, XLS, XLSX. Ukuran maksimal: 5MB.
                        </small>
                    </label>
                    <input type="file" name="formulir_pendaftaran" id="formulir_pendaftaran"
                        class="form-control @error('formulir_pendaftaran') is-invalid @enderror"
                        accept=".pdf,.doc,.docx">
                    @error('formulir_pendaftaran')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="tanggal_terbit">Tanggal Terbit</label>
                    <input type="date" name="tanggal_terbit" id="tanggal_terbit"
                        class="form-control @error('tanggal_terbit') is-invalid @enderror"
                        value="{{ old('tanggal_terbit') }}">
                    @error('tanggal_terbit')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="tanggal_berakhir">Tanggal Berakhir</label>
                    <input type="date" name="tanggal_berakhir" id="tanggal_berakhir"
                        class="form-control @error('tanggal_berakhir') is-invalid @enderror"
                        value="{{ old('tanggal_berakhir') }}">
                    @error('tanggal_berakhir')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="text-right mt-4">
                    <button type="submit" class="btn btn-primary-custom">Simpan</button>
                    <a href="{{ route('admin.formulirpendaftaran.index') }}" class="btn btn-secondary-custom ml-2">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
