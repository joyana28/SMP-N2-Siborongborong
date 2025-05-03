@extends('layouts.backend.app')

@section('title', 'Tambah Fasilitas')

@section('content')
    <div class="container">
        <h1>Tambah Fasilitas</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.fasilitas.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Fasilitas</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" required>{{ old('deskripsi') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto Fasilitas</label>
                <input type="file" class="form-control" id="foto" name="foto" required>
            </div>
            <div class="mb-3">
                <label for="tahun" class="form-label">Tahun</label>
                <input type="text" class="form-control" id="tahun" name="tahun" value="{{ old('tahun') }}" required>
            </div>
            <div class="mb-3">
                <label for="perhatian_teknis" class="form-label">Perhatian Teknis</label>
                <input type="text" class="form-control" id="perhatian_teknis" name="perhatian_teknis" value="{{ old('perhatian_teknis') }}">
            </div>
            <div class="mb-3">
                <label for="penambahan" class="form-label">Penambahan</label>
                <input type="text" class="form-control" id="penambahan" name="penambahan" value="{{ old('penambahan') }}">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
