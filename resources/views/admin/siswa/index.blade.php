@extends('layouts.backend.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Data Siswa</h2>
    <a href="{{ route('admin.siswa.create') }}" class="btn btn-primary mb-3">Tambah Data Siswa</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Jumlah Siswa</th>
                <th>Laki-laki</th>
                <th>Perempuan</th>
                <th>Tahun</th>
                <th>Admin</th>
                <th>Wali Kelas</th>
                <th>History</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($siswa as $siswa => $s)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $k->nama_kelas }}</td>
                <td>{{ $k->jumlah_siswa }}</td>
                <td>{{ $k->jumlah_siswa_L }}</td>
                <td>{{ $k->jumlah_siswa_P }}</td>
                <td>{{ $k->tahun }}</td>
                <td>{{ $k->admin->nama ?? '-' }}</td>
                <td>{{ $k->waliKelas->nama ?? '-' }}</td>
                <td>{{ $k->history }}</td>
                <td>
                    <a href="{{ route('admin.siswa.edit', $k->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.siswa.destroy', $k->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
