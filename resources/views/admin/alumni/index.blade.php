@extends('layouts.frontend.app')  {{-- Gunakan layout admin yang sesuai --}}

@section('content')
<div class="container">
    <h1>Daftar Alumni</h1>

    {{-- Pesan sukses --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Tabel Alumni --}}
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumni as $alumnus)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $alumnus->nama }}</td>
                    <td>{{ $alumnus->deskripsi }}</td>
                    <td>
                        @if ($alumnus->foto)
                            <img src="{{ asset('storage/alumni/' . $alumnus->foto) }}" width="100" alt="Foto Alumni">
                        @else
                            Tidak ada foto
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.alumni.edit', $alumnus->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.alumni.destroy', $alumnus->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus alumni ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Tombol tambah alumni --}}
    <a href="{{ route('admin.alumni.create') }}" class="btn btn-primary">Tambah Alumni</a>
</div>
@endsection
