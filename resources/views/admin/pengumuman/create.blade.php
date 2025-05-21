@extends('layouts.backend.app')

@section('title', 'Tambah Pengumuman')

@section('content')
<style>
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

    .btn-secondary-custom {
        background-color: #b0bec5;
        border: none;
    }

    .btn-secondary-custom:hover {
        background-color: #90a4ae;
    }

    label {
        font-weight: 600;
        color: #0d47a1;
    }

    .form-control:focus {
        border-color: #0d47a1;
        box-shadow: 0 0 0 0.2rem rgba(13,71,161,.25);
    }

    .invalid-feedback {
        font-size: 0.875rem;
    }

    .alert-danger {
        color: red;
    }
</style>

<div class="container mt-5">
    <h2 class="mb-4 text-primary">Tambah Pengumuman</h2>

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
            <form action="{{ route('admin.pengumuman.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}">
                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="isi">Isi</label>
                    <textarea name="isi" class="form-control @error('isi') is-invalid @enderror" rows="4">{{ old('isi') }}</textarea>
                    @error('isi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="tanggal_terbit">Tanggal Terbit</label>
                    <input type="date" name="tanggal_terbit" class="form-control @error('tanggal_terbit') is-invalid @enderror" value="{{ old('tanggal_terbit') }}">
                    @error('tanggal_terbit')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="tanggal_berakhir">Tanggal Berakhir</label>
                    <input type="date" name="tanggal_berakhir" class="form-control @error('tanggal_berakhir') is-invalid @enderror" value="{{ old('tanggal_berakhir') }}">
                    @error('tanggal_berakhir')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="foto">Foto (opsional)</label>
                    <small class="form-text text-muted mb-2">
                        Format yang diizinkan: jpeg, jpg, png, gif. Ukuran maksimal: 2MB.
                    </small>
                    <input type="file" name="foto" accept="image/*" class="form-control-file @error('foto') is-invalid @enderror">
                    @error('foto') 
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror

                    @if(isset($pengumuman) && $pengumuman->foto)
                        <div class="mt-2">
                            <img src="{{ asset('pengumuman/' . $pengumuman->foto) }}" alt="Foto Pengumuman" width="200">
                        </div>
                    @endif
                </div>

                <div class="form-group mb-3">
                    <label for="lampiran" class="form-label">Lampiran Dokumen (opsional)</label>
                    <small class="form-text text-muted mb-2">
                        Format yang diizinkan: PDF, DOC, DOCX, XLS, XLSX. Ukuran maksimal: 5MB.
                    </small>
                    <input type="file" class="form-control @error('lampiran') is-invalid @enderror" name="lampiran" id="lampiran" accept=".pdf,.doc,.docx,.xls,.xlsx">
                    @error('lampiran')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="text-right mt-4">
                    <button type="submit" class="btn btn-primary-custom">Simpan</button>
                    <a href="{{ route('admin.pengumuman.index') }}" class="btn btn-secondary-custom ml-2">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
