@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Prestasi</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('prestasi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Admin</label>
            <select name="id_admin" class="form-control">
                @foreach($admins as $admin)
                    <option value="{{ $admin->id_admin }}">{{ $admin->nama }}</option>
                @endforeach
            </select>
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
    