@extends('layouts.backend.app')

@section('content')
    <h1>Daftar Formulir Pendaftaran</h1>
    <a href="{{ route('admin.formulirpendaftaran.create') }}" class="btn btn-success mb-3">Tambah Formulir Pendaftaran</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Deskripsi</th>
                <th>Formulir Pendaftaran</th>
                <th>Tanggal Terbit</th>
                <th>Tanggal Berakhir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($formulir as $item)
                <tr>
                    <td>{{ $item->deskripsi }}</td>
                    <td>{{ $item->formulir_pendaftaran }}</td>
                    <td>{{ $item->tanggal_terbit }}</td>
                    <td>{{ $item->tanggal_berakhir }}</td>
                    <td>
                        <a href="{{ route('admin.formulirpendaftaran.edit', $item->id_pendaftaran) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.formulirpendaftaran.destroy', $item->id_pendaftaran) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $formulir->links() }}
@endsection
