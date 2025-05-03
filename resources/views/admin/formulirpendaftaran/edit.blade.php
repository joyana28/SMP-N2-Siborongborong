@extends('layouts.backend.app')

@section('title', 'Edit Formulir Pendaftaran')

@section('content')
<div class="container mt-4">
    <h4>Edit Formulir Pendaftaran</h4>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Terjadi kesalahan!</strong><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.formulirpendaftaran.update', $formulirPendaftaran->id_pendaftaran) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" name="deskripsi" class="form-control" value="{{ old('deskripsi', $formulirPendaftaran->deskripsi) }}" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_terbit" class="form-label">Tanggal Terbit</label>
            <input type="date" name="tanggal_terbit" class="form-control" value="{{ old('tanggal_terbit', $formulirPendaftaran->tanggal_terbit) }}" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_berakhir" class="form-label">Tanggal Berakhir</label>
            <input type="date" name="tanggal_berakhir" class="form-control" value="{{ old('tanggal_berakhir', $formulirPendaftaran->tanggal_berakhir) }}" required>
        </div>

        <div class="mb-3">
            <label for="formulir_pendaftaran" class="form-label">Formulir (PDF/DOC/DOCX)</label>
            @if ($formulirPendaftaran->formulir_pendaftaran)
                <div class="mb-2">
                    <a href="{{ asset('storage/formulir/' . $formulirPendaftaran->formulir_pendaftaran) }}" target="_blank">Lihat File Saat Ini</a>
                </div>
            @endif
            <input type="file" name="formulir_pendaftaran" class="form-control">
            <small class="text-muted">Biarkan kosong jika tidak ingin mengganti file.</small>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('admin.formulirpendaftaran.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
