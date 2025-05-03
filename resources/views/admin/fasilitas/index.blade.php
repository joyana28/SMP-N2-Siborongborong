@extends('layouts.backend.app')

@section('title', 'Data Fasilitas')

@section('content')
    <div class="container">
        <h1>Data Fasilitas</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('admin.fasilitas.create') }}" class="btn btn-primary mb-3">Tambah Fasilitas</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <th>Tahun</th>
                    <th>Perhatian Teknis</th>
                    <th>Penambahan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($fasilitas as $index => $item)
                    <tr>
                        <td>{{ $fasilitas->firstItem() + $index }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ Str::limit($item->deskripsi, 50) }}</td>
                        <td>
                            @if($item->foto)
                                <img src="{{ asset('storage/fasilitas/' . $item->foto) }}" width="100" alt="Foto">
                            @endif
                        </td>
                        <td>{{ $item->tahun }}</td>
                        <td>{{ $item->perhatian_teknis ?? '-' }}</td>
                        <td>{{ $item->penambahan ?? '-' }}</td>
                        <td>
                            <a href="{{ route('admin.fasilitas.edit', $item->id_fasilitas) }}" class="btn btn-sm btn-warning">Edit</a>

                            <form action="{{ route('admin.fasilitas.destroy', $item->id_fasilitas) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus fasilitas ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center">Belum ada fasilitas.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $fasilitas->links() }}
    </div>
@endsection
