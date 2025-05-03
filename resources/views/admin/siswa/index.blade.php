@extends('layouts.backend.app')

@section('content')
<div class="container mt-4">
    <h1>Data Kelas</h1>
    <a href="{{ route('admin.siswa.create') }}" class="btn btn-primary mb-3">+ Tambah Kelas</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Jumlah Siswa (L)</th>
                <th>Jumlah Siswa (P)</th>
                <th>Total Siswa</th>
                <th>Tahun</th>
                <th>Wali Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($siswa as $index => $s)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $s->nama_kelas }}</td>
                    <td>{{ $s->jumlah_siswa_l }}</td>
                    <td>{{ $s->jumlah_siswa_p }}</td>
                    <td>{{ $s->jumlah_siswa }}</td>
                    <td>{{ $s->tahun }}</td>
                    <td>{{ $s->wali_kelas ?? '-' }}</td>
                    <td>
                        <a href="{{ route('admin.siswa.edit', $s->id_siswa) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.siswa.destroy', $s->id_siswa) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center">Belum ada data kelas.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
