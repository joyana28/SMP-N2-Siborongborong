@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Data Alumni</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('alumni.update', $alumni->id_alumni) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Admin</label>
            <select name="id_admin" class="form-control">
                @foreach($admins as $admin)
                    <option value="{{ $admin->id_admin }}" {{ $alumni->id_admin == $admin->id_admin ? 'selected' : '' }}>
                        {{ $admin->nama }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Nama Alumni</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $alumni->nama) }}">
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ old('deskripsi', $alumni->deskripsi) }}</textarea>
        </div>
        <div class="form-group">
            <label>Foto Lama</label><br>
            @if($alumni->foto)
                <img src="{{ asset('storage/' . $alumni->foto) }}" width="100">
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
