@extends('layouts.backend.app')

@section('title', 'Tambah Kepala Sekolah')

@section('content')
<div class="container">
    <h1 class="mt-4 mb-3">Tambah Kepala Sekolah</h1>

    <form action="{{ route('admin.kepala_sekolah.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" required>
            @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="nip">NIP</label>
            <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" value="{{ old('nip') }}" required>
            @error('nip') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="golongan">Golongan</label>
            <input type="text" class="form-control @error('golongan') is-invalid @enderror" id="golongan" name="golongan" value="{{ old('golongan') }}" required>
            @error('golongan') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="periode">Periode</label>
            <input type="text" class="form-control @error('periode') is-invalid @enderror" id="periode" name="periode" value="{{ old('periode') }}" required>
            @error('periode') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto">
            @error('foto') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
