@extends('layouts.backend.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Tambah Pengumuman</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>
        </div>
    @endif

    <form action="{{ route('admin.pengumuman.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Admin</label>
            <select name="id_admin" class="form-control" required>
                <option value="">Pilih Admin</option>
                @foreach($admins as $admin)
                    <option value="{{ $admin->id_admin }}">{{ $admin->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Isi</label>
            <textarea name="isi" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label>Tanggal Terbit</label>
            <input type="date" name="tanggal_terbit" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tanggal Berakhir</label>
            <input type="date" name="tanggal_berakhir" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success mt-3">Simpan</button>
    </form>
</div>
@endsection
