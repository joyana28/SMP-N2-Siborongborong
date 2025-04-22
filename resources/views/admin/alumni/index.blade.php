@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Alumni</h1>
    <a href="{{ route('alumni.create') }}" class="btn btn-primary mb-3">Tambah Alumni</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alumni as $a)
            <tr>
                <td>{{ $a->nama }}</td>
                <td>{{ $a->deskripsi }}</td>
                <td>
                    @if($a->foto)
                        <img src="{{ asset('storage/' . $a->foto) }}" width="80">
                    @endif
                </td>
                <td>
                    <a href="{{ route('alumni.edit', $a->id_alumni) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('alumni.destroy', $a->id_alumni) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
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
