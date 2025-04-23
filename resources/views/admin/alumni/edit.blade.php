@extends('layouts.backend.app')

@section('content')
<div class="container">
    <h1>Edit Alumni</h1>

    <form action="{{ route('admin.alumni.update', $alumni->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Admin</label>
            <select name="id_admin" class="form-control">
                @foreach($admins as $admin)
                    <option value="{{ $admin->id }}" {{ $admin->id == $alumni->id_admin ? 'selected' : '' }}>
                        {{ $admin->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $alumni->nama }}">
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ $alumni->deskripsi }}</textarea>
        </div>

        <div class="mb-3">
            <label>Foto</label><br>
            @if($alumni->foto)
                <img src="{{ asset('storage/alumni/' . $alumni->foto) }}" alt="Foto" width="80"><br>
            @endif
            <input type="file" name="foto" class="form-control">
        </div>

        <button class="btn btn-success">Update</button>
    </form>
</div>
@endsection
