@extends('layouts.frontend.app')  {{-- Gunakan layout frontend yang sesuai --}}

@section('content')
    <div class="container">
        <h1>Tambah Alumni</h1>

        {{-- Menampilkan pesan error jika ada --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Form untuk menambah alumni --}}
        <form action="{{ route('admin.alumni.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Nama Alumni --}}
            <div class="form-group">
                <label for="nama">Nama Alumni</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}" required>
            </div>

            {{-- Deskripsi Alumni --}}
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control">{{ old('deskripsi') }}</textarea>
            </div>

            {{-- Foto Alumni --}}
            <div class="form-group">
                <label for="foto">Foto Alumni</label>
                <input type="file" name="foto" id="foto" class="form-control">
            </div>

            {{-- Submit Button --}}
            <button type="submit" class="btn btn-primary">Tambah Alumni</button>
        </form>
    </div>
@endsection
