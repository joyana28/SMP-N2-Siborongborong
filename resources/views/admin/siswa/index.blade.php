@extends('layouts.backend.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Data Kelas Siswa</h5>
                    <a href="{{ route('admin.siswa.create') }}" class="btn btn-primary">Tambah Kelas</a>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kelas</th>
                                    <th>Wali Kelas</th>
                                    <th>Jumlah Siswa</th>
                                    <th>Jumlah Siswa L</th>
                                    <th>Jumlah Siswa P</th>
                                    <th>Tahun</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($siswa as $index => $s)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $s->nama_kelas }}</td>
                                        <td>{{ $s->wali_kelas }}</td>
                                        <td>{{ $s->jumlah_siswa }}</td>
                                        <td>{{ $s->jumlah_siswa_l }}</td>
                                        <td>{{ $s->jumlah_siswa_p }}</td>
                                        <td>{{ $s->tahun }}</td>
                                        <td>
                                            <a href="{{ route('siswa.show', $s->id_siswa) }}" class="btn btn-info btn-sm">Lihat</a>
                                            <a href="{{ route('siswa.edit', $s->id_siswa) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('siswa.destroy', $s->id_siswa) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">Tidak ada data Kelas Siswa</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection