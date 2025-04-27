@extends('layouts.backend.app') 

@section('content')
<div class="container">
    <h1>Tambah Prestasi</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('admin.prestasi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
                            <label for="id_admin">Admin</label>
                            <select name="id_admin" id="id_admin" class="form-control @error('id_admin') is-invalid @enderror" required>
                                <option value="">Pilih Admin</option>
                                @foreach($admins as $admin)
                                    <option value="{{ $admin->id_admin }}" {{ old('id_admin') == $admin->id_admin ? 'selected' : '' }}>
                                        {{ $admin->nama ?? $admin->username }}
                                    </option>
                                @endforeach
                            </select>
                            @error('id_admin')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
        <div class="form-group">
            <label>Nama Prestasi</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ old('deskripsi') }}</textarea>
        </div>
        <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="{{ old('tanggal') }}">
        </div>
        <div class="form-group">
            <label>Jenis</label>
            <select name="jenis" class="form-control">
                <option value="akademik">Akademik</option>
                <option value="non-akademik">Non-Akademik</option>
            </select>
        </div>
        <div class="form-group">
            <label>Foto</label>
            <input type="file" name="foto" class="form-control-file">
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
    