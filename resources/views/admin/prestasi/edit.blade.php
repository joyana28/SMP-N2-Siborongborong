@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Prestasi</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('prestasi.update', $prestasi->id_prestasi) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Admin</label>
            <select name="id_admin" class="form-control">
                @foreach($admins as $admin)
                    <option value="{{ $admin->id_admin }}" {{ $prestasi->id_admin == $admin->id_admin ? 'selected' : '' }}>
                        {{ $admin->nama }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Nama Prestasi</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $prestasi->nama) }}">
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ old('deskripsi', $prestasi->deskripsi) }}</textarea>
        </div>
        <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="{{ old('tanggal', $prestasi->tanggal) }}">
        </div>
        <div class="form-group">
            <label>Jenis</label>
            <select name="jenis" class="form-control">
                <option value="akademik" {{ $prestasi->jenis == 'akademik' ? 'selected' : '' }}>Akademik</option>
                <option value="non-akademik" {{ $prestasi->jenis == 'non-akademik' ? 'selected' : '' }}>Non-Akademik</option>
            </select>
        </div>
        <div class="form-group">
            <label>Foto Lama</label><br>
            @if($prestasi->foto)
                <img src="{{ asset('storage/' . $prestasi->foto) }}" width="100">
            @endif
        </div>
        <div class="form-group">
            <label>Ganti Foto</label>
            <input type="file" name="foto" class="form-control-file">
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
