@extends('layouts.backend.app')

@section('title', 'Tambah Kepala Sekolah')

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
    <h2 class="mb-4 text-primary">Tambah Kepala Sekolah</h2>

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
            <form action="{{ route('admin.kepala_sekolah.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                    @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" value="{{ old('nip') }}">
                @error('nip')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>

                <div class="form-group">
                    <label for="golongan">Golongan</label>
                        <select class="form-control @error('golongan') is-invalid @enderror" id="golongan" name="golongan">
                        <option value="">-- Pilih Golongan --</option>
                    @foreach(['III/a', 'III/b', 'III/c', 'III/d', 'IV/a', 'IV/b', 'IV/c', 'IV/d', 'IV/e'] as $golongan)
                        <option value="{{ $golongan }}" {{ old('golongan') == $golongan ? 'selected' : '' }}>{{ $golongan }}</option>
                    @endforeach
                    </select>
                        @error('golongan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="periode">Periode</label>
                    <input type="text" class="form-control @error('periode') is-invalid @enderror" id="periode" name="periode" value="{{ old('periode') }}">
                    @error('periode') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div> <br>

                <div class="form-group">
                    <label for="foto">Foto Kepala Sekolah</label>
                    <input type="file" name="foto" accept="image/*" class="form-control-file @error('foto') is-invalid @enderror">
                    @error('foto') 
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                    <small class="form-text text-muted mb-2">
                        Format yang diizinkan: jpeg, jpg, png, gif. Ukuran maksimal: 2MB.
                    </small>  
                @if(isset($kepalaSekolah) && $kepalaSekolah->foto)
                        <div class="mt-2">
                        <img src="{{ asset('kepala_sekolah/' . $kepalaSekolah->foto) }}" alt="Foto Kepala Sekolah" width="200">
                        </div>
                @endif
                </div>
                <div class="text-right mt-4">
                    <button type="submit" class="btn btn-primary-custom">Simpan</button>
                    <a href="{{ route('admin.kepala_sekolah.index') }}" class="btn btn-secondary-custom ml-2">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
