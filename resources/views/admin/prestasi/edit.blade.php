@extends('layouts.backend.app')

@section('content')
<div class="container">
    <h1>Edit Prestasi</h1>
    <form action="{{ route('admin.prestasi.update', $prestasi->id_prestasi) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Prestasi</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $prestasi->nama) }}">
            @error('nama') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ old('tanggal', $prestasi->tanggal) }}">
            @error('tanggal') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="jenis" class="form-label">Jenis Prestasi</label>
            <select class="form-select" id="jenis" name="jenis">
                <option value="akademik" {{ old('jenis', $prestasi->jenis) == 'akademik' ? 'selected' : '' }}>Akademik</option>
                <option value="non-akademik" {{ old('jenis', $prestasi->jenis) == 'non-akademik' ? 'selected' : '' }}>Non-Akademik</option>
            </select>
            @error('jenis') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ old('deskripsi', $prestasi->deskripsi) }}</textarea>
            @error('deskripsi') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        @if ($prestasi->foto)
            <div class="mb-3">
                <p>Foto Lama:</p>
                <img src="{{ asset('storage/prestasi/' . $prestasi->foto) }}" alt="Foto Prestasi" width="150">
            </div>
        @endif

        <div class="mb-3">
            <label for="foto" class="form-label">Ganti Foto (opsional)</label>
            <input class="form-control" type="file" id="foto" name="foto">
            @error('foto') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-success">Perbarui</button>
        <a href="{{ route('admin.prestasi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
