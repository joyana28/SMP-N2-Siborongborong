@extends('layouts.backend.app')

@section('content')
<div class="container">
    <h1>Data Guru</h1>
    <a href="{{ route('admin.guru.create') }}" class="btn btn-primary mb-3">Tambah Guru</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIP</th>
                <th>Golongan</th>
                <th>Bidang</th>
                <th>No Telp</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($guru as $g)
            <tr>
                <td>{{ $g->nama }}</td>
                <td>{{ $g->nip }}</td>
                <td>{{ $g->golongan }}</td>
                <td>{{ $g->bidang }}</td>
                <td>{{ $g->no_telp }}</td>
                <td>
                    @if($g->foto)
                        <img src="{{ asset('storage/' . $g->foto) }}" alt="Foto Guru" width="80">
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.guru.edit', $g->id_guru) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.guru.destroy', $g->id_guru) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
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
