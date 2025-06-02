@extends('layouts.backend.app')

@section('title', 'Edit Formulir Pendaftaran')

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
    }

    .btn-warning-custom {
        background-color: #ffb300;
        color: #000;
        border: none;
    }

    .btn-warning-custom:hover {
        background-color: #ffa000;
        color: #000;
    }

    label {
        font-weight: 600;
        color: #0d47a1;
    }

    input:focus, textarea:focus {
        border-color: #0d47a1;
        box-shadow: 0 0 0 0.2rem rgba(13,71,161,.25);
    }

    #preview {
        transition: 0.3s ease;
        border: 2px dashed #0d47a1;
    }

    #preview:hover {
        transform: scale(1.03);
        border-color: #ffb300;
    }
</style>

<div class="container mt-5">
    <h2 class="mb-4 style="color: #001f3f>Edit Formulir Pendaftaran</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Terjadi kesalahan!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card card-custom">
        <div class="card-body">
            <form action="{{ route('admin.formulirpendaftaran.update', $formulirPendaftaran->id_pendaftaran) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="deskripsi">Deskripsi <span class="text-danger">*</span></label>
                    <input type="text" name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" value="{{ old('deskripsi', $formulirPendaftaran->deskripsi) }}" required>
                    @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="tanggal_terbit">Tanggal Terbit</label>
<input type="date" name="tanggal_terbit" id="tanggal_terbit" class="form-control @error('tanggal_terbit') is-invalid @enderror" value="{{ old('tanggal_terbit', \Carbon\Carbon::parse($formulirPendaftaran->tanggal_terbit)->format('Y-m-d')) }}">
                    @error('tanggal_terbit')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="tanggal_berakhir">Tanggal Berakhir</label>
<input type="date" name="tanggal_berakhir" id="tanggal_berakhir" class="form-control @error('tanggal_berakhir') is-invalid @enderror" value="{{ old('tanggal_berakhir', \Carbon\Carbon::parse($formulirPendaftaran->tanggal_berakhir)->format('Y-m-d')) }}">
                    @error('tanggal_berakhir')
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
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                    <small class="form-text text-muted">Biarkan kosong jika tidak ingin mengganti file.</small>

                    @if ($formulirPendaftaran->formulir_pendaftaran)
                        <div class="mt-3">
                            <p class="mb-1">File saat ini:</p>
                            <a href="{{ asset('formulirpendaftaran/' . $formulirPendaftaran->formulir_pendaftaran) }}"
                                target="_blank" class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-file-alt me-1"></i> Lihat File
                            </a>
                        </div>
                    @endif
                </div>

                <div class="text-right mt-4">
                <button type="submit" class="btn" style="background-color: #001f3f; color: white; border-color: #001f3f;">Perbarui</button>
                    <a href="{{ route('admin.formulirpendaftaran.index') }}" class="btn btn-warning-custom ml-2">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
