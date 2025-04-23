@extends('layouts.backend.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Data Alumni</h1>

    <a href="{{ route('admin.alumni.create') }}" class="btn btn-primary mb-3">Tambah Alumni</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Admin</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alumni as $item)
            <tr>
                <td>
                    @if($item->foto)
                        <img src="{{ asset('storage/alumni/' . $item->foto) }}" alt="Foto" width="80">
                    @endif
                </td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td>{{ $item->admin->nama ?? '-' }}</td>
                <td>
                    <a href="{{ route('admin.alumni.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.alumni.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
