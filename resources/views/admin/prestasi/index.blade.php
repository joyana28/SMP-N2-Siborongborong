@extends('layouts.backend.app')

@section('content')
<div class="container">
    <h1>Data Prestasi</h1>
    <a href="{{ route('admin.prestasi.create') }}" class="btn btn-primary mb-3">Tambah Prestasi</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
                <th>Jenis</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($prestasi as $p)
            <tr>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->deskripsi }}</td>
                <td>{{ $p->tanggal }}</td>
                <td>{{ ucfirst($p->jenis) }}</td>
                <td>
                    @if($p->foto)
                        <img src="{{ asset('storage/' . $p->foto) }}" width="80">
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.prestasi.edit', $p->id_prestasi) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.prestasi.destroy', $p->id_prestasi) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
