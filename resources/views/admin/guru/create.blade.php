@extends('layouts.backend.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Tambah Data Guru</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.guru.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
        </div>

        <div class="mb-3">
            <label>NIP</label>
            <input type="text" name="nip" class="form-control" value="{{ old('nip') }}">
        </div>

        <div class="mb-3">
            <label>Golongan</label>
            <input type="text" name="golongan" class="form-control" value="{{ old('golongan') }}">
        </div>

        <div class="mb-3">
            <label>Bidang</label>
            <input type="text" name="bidang" class="form-control" value="{{ old('bidang') }}">
        </div>

        <div class="mb-3">
            <label>No. Telepon</label>
            <input type="text" name="no_telp" class="form-control" value="{{ old('no_telp') }}">
        </div>

        <div class="mb-3">
            <label>Foto (Opsional)</label>
            <input type="file" name="foto" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.guru.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
