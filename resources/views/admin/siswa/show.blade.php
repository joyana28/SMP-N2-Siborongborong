@extends('layouts.backend.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Kelas Siswa</div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th width="30%">Nama Kelas</th>
                            <td>{{ $siswa->nama_kelas }}</td>
                        </tr>
                        <tr>
                            <th>Wali Kelas</th>
                            <td>{{ $siswa->wali_kelas }}</td>
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
                            <th>Admin</th>
                            <td>{{ $siswa->admin->username }}</td>
                        </tr>
                        <tr>
                            <th>Catatan/History</th>
                            <td>{{ $siswa->history ?? 'Tidak ada catatan' }}</td>
                        </tr>
                    </table>

                    <div class="mt-3">
                        <a href="{{ route('siswa.edit', $siswa->id_siswa) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('admin.siswa.index') }}" class="btn btn-secondary">Kembali</a>
                        <form action="{{ route('siswa.destroy', $siswa->id_siswa) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection