@extends('layouts.backend.app')

@section('content')
<div class="container">
    <h1>Tambah Formulir Pendaftaran</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('admin.formulirpendaftaran.store') }}" method="POST" enctype="multipart/form-data">
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
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ old('deskripsi') }}</textarea>
        </div>
        <div class="form-group">
            <label>Upload Formulir (PDF)</label>
            <input type="file" name="formulir_pendaftaran" class="form-control-file" accept=".pdf">
        </div>
        <div class="form-group">
            <label>Tanggal Terbit</label>
            <input type="date" name="tanggal_terbit" class="form-control" value="{{ old('tanggal_terbit') }}">
        </div>
        <div class="form-group">
            <label>Tanggal Berakhir</label>
            <input type="date" name="tanggal_berakhir" class="form-control" value="{{ old('tanggal_berakhir') }}">
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
