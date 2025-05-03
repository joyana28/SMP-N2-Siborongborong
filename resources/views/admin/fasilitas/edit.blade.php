@extends('layouts.backend.app')

@section('title', 'Edit Fasilitas')

@section('content')
    <div class="container">
        <h1>Edit Fasilitas</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.fasilitas.update', $fasilitas->id_fasilitas) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Fasilitas</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $fasilitas->nama }}" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" required>{{ $fasilitas->deskripsi }}</textarea>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto Fasilitas</label>
                <input type="file" class="form-control" id="foto" name="foto">
                @if($fasilitas->foto)
                    <img src="{{ asset('storage/fasilitas/' . $fasilitas->foto) }}" alt="Foto Fasilitas" width="100" class="mt-2">
                @endif
            </div>
            <div class="mb-3">
                <label for="tahun" class="form-label">Tahun</label>
                <input type="text" class="form-control" id="tahun" name="tahun" value="{{ $fasilitas->tahun }}" required>
            </div>
            <div class="mb-3">
                <label for="perhatian_teknis" class="form-label">Perhatian Teknis</label>
                <input type="text" class="form-control" id="perhatian_teknis" name="perhatian_teknis" value="{{ $fasilitas->perhatian_teknis }}">
            </div>
            <div class="mb-3">
                <label for="penambahan" class="form-label">Penambahan</label>
                <input type="text" class="form-control" id="penambahan" name="penambahan" value="{{ $fasilitas->penambahan }}">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
