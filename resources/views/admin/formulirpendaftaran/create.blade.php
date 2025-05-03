<!-- resources/views/admin/formulirpendaftaran/create.blade.php -->

@extends('layouts.backend.app')

@section('content')
    <h1>Tambah Formulir Pendaftaran</h1>

    <form action="{{ route('admin.formulirpendaftaran.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" value="{{ old('deskripsi') }}">
            @error('deskripsi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="formulir_pendaftaran">Formulir Pendaftaran (PDF/Word)</label>
            <input type="file" name="formulir_pendaftaran" id="formulir_pendaftaran" class="form-control @error('formulir_pendaftaran') is-invalid @enderror">
            @error('formulir_pendaftaran')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="tanggal_terbit">Tanggal Terbit</label>
            <input type="date" name="tanggal_terbit" id="tanggal_terbit" class="form-control @error('tanggal_terbit') is-invalid @enderror" value="{{ old('tanggal_terbit') }}">
            @error('tanggal_terbit')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="tanggal_berakhir">Tanggal Berakhir</label>
            <input type="date" name="tanggal_berakhir" id="tanggal_berakhir" class="form-control @error('tanggal_berakhir') is-invalid @enderror" value="{{ old('tanggal_berakhir') }}">
            @error('tanggal_berakhir')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
