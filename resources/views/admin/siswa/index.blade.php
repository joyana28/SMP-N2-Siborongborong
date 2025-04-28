@extends('layouts.backend.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Data Kelas</h5>
                        <a href="{{ route('admin.siswa.create') }}" class="btn btn-primary">Tambah Kelas</a>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kelas</th>
                                        <th>Jumlah Siswa</th>
                                        <th>Jumlah Siswa Laki-laki</th>
                                        <th>Jumlah Siswa Perempuan</th>
                                        <th>Tahun</th>
                                        <th>Wali Kelas</th>
                                        <th>Dikelola Oleh</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($siswa as $index => $item)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $item->nama_kelas }}</td>
                                            <td>{{ $item->jumlah_siswa }}</td>
                                            <td>{{ $item->jumlah_siswa_l }}</td>
                                            <td>{{ $item->jumlah_siswa_p }}</td>
                                            <td>{{ $item->tahun }}</td>
                                            <td>{{ $item->wali_kelas ?? '-' }}</td>
                                            <td>{{ $item->admin->username ?? 'Admin tidak ditemukan' }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('admin.siswa.show', $item->id_siswa) }}" class="btn btn-info btn-sm">Detail</a>
                                                    <a href="{{ route('admin.siswa.edit', $item->id_siswa) }}" class="btn btn-warning btn-sm">Edit</a>
                                                    <form action="{{ route('admin.siswa.destroy', $item->id_siswa) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="9" class="text-center">Tidak ada data kelas</td>
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