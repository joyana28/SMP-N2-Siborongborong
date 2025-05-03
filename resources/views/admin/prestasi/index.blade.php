@extends('layouts.backend.app')

@section('content')
<div class="container">
    <h1>Data Prestasi</h1>
    <a href="{{ route('admin.prestasi.create') }}" class="btn btn-primary mb-3">Tambah Prestasi</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Prestasi</th>
            <th>Deskripsi</th>
            <th>Jenis</th>
            <th>Tanggal</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($prestasi as $key => $item)
            <tr>
                <td>{{ $prestasi->firstItem() + $key }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->deskripsi ?? '-' }}</td>
                <td>{{ ucfirst($item->jenis) }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>
                    @if ($item->foto)
                        <img src="{{ asset('storage/prestasi/' . $item->foto) }}" alt="Foto" width="80">
                    @else
                        <span class="text-muted">-</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.prestasi.edit', $item->id_prestasi) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.prestasi.destroy', $item->id_prestasi) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="7" class="text-center">Belum ada data prestasi.</td></tr>
        @endforelse
    </tbody>
</table>
    {{ $prestasi->links() }}
</div>
@endsection
