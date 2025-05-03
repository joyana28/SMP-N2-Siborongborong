@extends('layouts.backend.app')

@section('title', 'Edit Ekstrakurikuler')

@section('content')
<div class="container">
    <h1 class="mt-4">Edit Ekstrakurikuler</h1>

    <form action="{{ route('admin.ekstrakurikuler.update', $ekstrakurikuler->id_ekstrakurikuler) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama Ekstrakurikuler</label>
            <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $ekstrakurikuler->nama) }}" required>
            @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi', $ekstrakurikuler->deskripsi) }}</textarea>
            @error('deskripsi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="pembina">Pembina</label>
            <input type="text" name="pembina" id="pembina" class="form-control @error('pembina') is-invalid @enderror" value="{{ old('pembina', $ekstrakurikuler->pembina) }}" required>
            @error('pembina')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="jadwal">Jadwal</label>
            <input type="text" name="jadwal" id="jadwal" class="form-control @error('jadwal') is-invalid @enderror" value="{{ old('jadwal', $ekstrakurikuler->jadwal) }}" required>
            @error('jadwal')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" name="foto" id="foto" class="form-control-file @error('foto') is-invalid @enderror">
            @error('foto')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Foto Lama:</label><br>
            <img src="{{ asset('storage/ekstrakurikuler/'.$ekstrakurikuler->foto) }}" alt="Foto Lama" width="100">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update Ekstrakurikuler</button>
    </form>
</div>
@endsection
