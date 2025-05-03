@extends('layouts.backend.app')

@section('content')
<div class="container mt-4">
    <h4>Daftar Pengumuman</h4>
    <a href="{{ route('admin.pengumuman.create') }}" class="btn btn-primary mb-3">Tambah Pengumuman</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Isi</th>
                <th>Tanggal Terbit</th>
                <th>Tanggal Berakhir</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengumuman as $item)
                <tr>
                    <td>{{ $item->judul }}</td>
                    <td>{{ Str::limit(strip_tags($item->isi), 50) }}</td> {{-- Batasi isi agar tidak terlalu panjang --}}
                    <td>{{ $item->tanggal_terbit }}</td>
                    <td>{{ $item->tanggal_berakhir }}</td>
                    <td>
                        @if($item->foto)
                            <img src="{{ asset('storage/pengumuman/' . $item->foto) }}" width="100">
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.pengumuman.edit', $item->id_pengumuman) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.pengumuman.destroy', $item->id_pengumuman) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $pengumuman->links() }}
</div>
@endsection
