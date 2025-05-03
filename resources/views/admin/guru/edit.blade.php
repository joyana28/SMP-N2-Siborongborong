@extends('layouts.backend.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Data Guru</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.guru.update', $guru->id_guru) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $guru->nama) }}">
        </div>

        <div class="mb-3">
            <label>NIP</label>
            <input type="text" name="nip" class="form-control" value="{{ old('nip', $guru->nip) }}">
        </div>

        <div class="mb-3">
            <label>Golongan</label>
            <input type="text" name="golongan" class="form-control" value="{{ old('golongan', $guru->golongan) }}">
        </div>

        <div class="mb-3">
            <label>Bidang</label>
            <input type="text" name="bidang" class="form-control" value="{{ old('bidang', $guru->bidang) }}">
        </div>

        <div class="mb-3">
            <label>No. Telepon</label>
            <input type="text" name="no_telp" class="form-control" value="{{ old('no_telp', $guru->no_telp) }}">
        </div>

        <div class="mb-3">
            <label>Foto Sekarang</label><br>
            @if($guru->foto)
                <img src="{{ asset('storage/guru/' . $guru->foto) }}" alt="foto" width="80">
            @else
                Tidak ada foto
            @endif
        </div>

        <div class="mb-3">
            <label>Ganti Foto (Opsional)</label>
            <input type="file" name="foto" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('admin.guru.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
