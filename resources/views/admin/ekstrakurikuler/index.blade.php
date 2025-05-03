@extends('layouts.backend.app')

@section('title', 'Daftar Ekstrakurikuler')

@section('content')
<div class="container">
    <h1 class="mt-4">Daftar Ekstrakurikuler</h1>

    <a href="{{ route('admin.ekstrakurikuler.create') }}" class="btn btn-success mb-3">Tambah Ekstrakurikuler</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Pembina</th>
                <th>Jadwal</th>
                <th>Foto</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ekstrakurikuler as $ekstra)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $ekstra->nama }}</td>
                <td>{{ $ekstra->deskripsi }}</td>
                <td>{{ $ekstra->pembina }}</td>
                <td>{{ $ekstra->jadwal }}</td>
                <td><img src="{{ asset('storage/ekstrakurikuler/'.$ekstra->foto) }}" alt="Foto" width="100"></td>
                <td>
                    <a href="{{ route('admin.ekstrakurikuler.edit', $ekstra->id_ekstrakurikuler) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.ekstrakurikuler.destroy', $ekstra->id_ekstrakurikuler) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $ekstrakurikuler->links() }}
</div>
@endsection
