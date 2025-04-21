@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Edit Pengumuman</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>
        </div>
    @endif

    <form action="{{ route('pengumuman.update', $pengumuman->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="form-group">
            <label>Admin</label>
            <select name="id_admin" class="form-control" required>
                @foreach($admins as $admin)
                    <option value="{{ $admin->id_admin }}" {{ $pengumuman->id_admin == $admin->id_admin ? 'selected' : '' }}>
                        {{ $admin->nama }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ $pengumuman->judul }}" required>
        </div>
        <div class="form-group">
            <label>Isi</label>
            <textarea name="isi" class="form-control" required>{{ $pengumuman->isi }}</textarea>
        </div>
        <div class="form-group">
            <label>Tanggal Terbit</label>
            <input type="date" name="tanggal_terbit" class="form-control" value="{{ $pengumuman->tanggal_terbit }}" required>
        </div>
        <div class="form-group">
            <label>Tanggal Berakhir</label>
            <input type="date" name="tanggal_berakhir" class="form-control" value="{{ $pengumuman->tanggal_berakhir }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>
@endsection
