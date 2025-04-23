@extends('layouts.backend.app')

@section('content')
<div class="container">
    <h1>Tambah Guru</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('admin.guru.store') }}" method="POST" enctype="multipart/form-data">
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
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
        </div>
        <div class="form-group">
            <label>NIP</label>
            <input type="text" name="nip" class="form-control" value="{{ old('nip') }}">
        </div>
        <div class="form-group">
            <label>Golongan</label>
            <input type="text" name="golongan" class="form-control" value="{{ old('golongan') }}">
        </div>
        <div class="form-group">
            <label>Bidang</label>
            <input type="text" name="bidang" class="form-control" value="{{ old('bidang') }}">
        </div>
        <div class="form-group">
            <label>No Telp</label>
            <input type="text" name="no_telp" class="form-control" value="{{ old('no_telp') }}">
        </div>
        <div class="form-group">
            <label>Foto</label>
            <input type="file" name="foto" class="form-control-file">
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
