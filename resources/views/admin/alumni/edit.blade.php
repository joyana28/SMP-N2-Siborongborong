@extends('layouts.frontend.app')

@section('content')
    <div class="container">
        <h1>Edit Alumni</h1>

        <!-- Menampilkan pesan error jika ada -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form untuk mengedit alumni -->
        <form action="{{ route('admin.alumni.update', $alumni->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Nama Alumni -->
            <div class="form-group">
                <label for="nama">Nama Alumni</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $alumni->nama) }}" required>
            </div>

            <!-- Deskripsi Alumni -->
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control">{{ old('deskripsi', $alumni->deskripsi) }}</textarea>
            </div>

            <!-- Foto Alumni -->
            <div class="form-group">
                <label for="foto">Foto Alumni (Opsional)</label>
                <input type="file" name="foto" id="foto" class="form-control">
                @if ($alumni->foto)
                    <p>Foto saat ini: <img src="{{ asset('storage/alumni/' . $alumni->foto) }}" width="100" alt="Foto Alumni"></p>
                @endif
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Perbarui Alumni</button>
        </form>
    </div>
@endsection
