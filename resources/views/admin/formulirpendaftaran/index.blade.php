@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Formulir Pendaftaran</h1>
    <a href="{{ route('formulir_pendaftaran.create') }}" class="btn btn-primary mb-3">Tambah Formulir</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Deskripsi</th>
                <th>File</th>
                <th>Tanggal Terbit</th>
                <th>Tanggal Berakhir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($formulir as $f)
            <tr>
                <td>{{ $f->deskripsi }}</td>
                <td>
                    @if($f->formulir_pendaftaran)
                        <a href="{{ asset('storage/' . $f->formulir_pendaftaran) }}" target="_blank">Lihat Formulir</a>
                    @endif
                </td>
                <td>{{ $f->tanggal_terbit->format('d-m-Y') }}</td>
                <td>{{ $f->tanggal_berakhir->format('d-m-Y') }}</td>
                <td>
                    <a href="{{ route('formulir_pendaftaran.edit', $f->id_pendaftaran) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('formulir_pendaftaran.destroy', $f->id_pendaftaran) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
