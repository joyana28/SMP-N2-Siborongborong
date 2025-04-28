@extends('layouts.backend.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Detail Kelas</h5>
                        <a href="{{ route('admin.siswa.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th style="width: 30%">Nama Kelas</th>
                                <td>{{ $siswa->nama_kelas }}</td>
                            </tr>
                            <tr>
                                <th>Jumlah Siswa</th>
                                <td>{{ $siswa->jumlah_siswa }}</td>
                            </tr>
                            <tr>
                                <th>Jumlah Siswa Laki-laki</th>
                                <td>{{ $siswa->jumlah_siswa_l }}</td>
                            </tr>
                            <tr>
                                <th>Jumlah Siswa Perempuan</th>
                                <td>{{ $siswa->jumlah_siswa_p }}</td>
                            </tr>
                            <tr>
                                <th>Tahun</th>
                                <td>{{ $siswa->tahun }}</td>
                            </tr>
                            <tr>
                                <th>Wali Kelas</th>
                                <td>{{ $siswa->wali_kelas ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>History</th>
                                <td>{{ $siswa->history ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>Dikelola Oleh</th>
                                <td>{{ $siswa->admin->username ?? 'Admin tidak ditemukan' }}</td>
                            </tr>
                            <tr>
                                <th>Dibuat Pada</th>
                                <td>{{ $siswa->created_at->format('d-m-Y H:i') }}</td>
                            </tr>
                            <tr>
                                <th>Diperbarui Pada</th>
                                <td>{{ $siswa->updated_at->format('d-m-Y H:i') }}</td>
                            </tr>
                        </table>
                        
                        <div class="mt-3 d-flex gap-2">
                            <a href="{{ route('admin.siswa.edit', $siswa->id_siswa) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.siswa.destroy', $siswa->id_siswa) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection