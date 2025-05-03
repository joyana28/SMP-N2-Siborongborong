@extends('layouts.backend.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Guru</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('admin.guru.create') }}" class="btn btn-primary mb-3">Tambah Guru</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nama</th>
                <th>NIP</th>
                <th>Golongan</th>
                <th>Bidang</th>
                <th>No. Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($guru as $item)
            <tr>
                <td>
                    @if($item->foto)
                        <img src="{{ asset('storage/guru/' . $item->foto) }}" alt="foto" width="60">
                    @else
                        -
                    @endif
                </td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->nip }}</td>
                <td>{{ $item->golongan }}</td>
                <td>{{ $item->bidang }}</td>
                <td>{{ $item->no_telp }}</td>
                <td>
                    <a href="{{ route('admin.guru.edit', $item->id_guru) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.guru.destroy', $item->id_guru) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
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
