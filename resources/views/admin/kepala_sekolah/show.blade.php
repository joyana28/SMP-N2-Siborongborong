@extends('layouts.backend.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Kepala Sekolah</div>

                <div class="card-body">
                    <div class="text-center mb-4">
                        @if ($kepalaSekolah->foto)
                            <img src="{{ asset('storage/kepala_sekolah/' . $kepalaSekolah->foto) }}" alt="Foto Kepala Sekolah" class="img-thumbnail" style="max-width: 200px;">
                        @else
                            <div class="alert alert-info">Tidak ada foto</div>
                        @endif
                    </div>

                    <table class="table table-bordered">
                        <tr>
                            <th width="30%">Nama Lengkap</th>
                            <td>{{ $kepalaSekolah->nama }}</td>
                        </tr>
                        <tr>
                            <th>NIP</th>
                            <td>{{ $kepalaSekolah->nip }}</td>
                        </tr>
                        <tr>
                            <th>Golongan</th>
                            <td>{{ $kepalaSekolah->golongan }}</td>
                        </tr>
                        <tr>
                            <th>Periode</th>
                            <td>{{ $kepalaSekolah->periode }}</td>
                        </tr>
                        <tr>
                            <th>Username Admin</th>
                            <td>{{ $kepalaSekolah->admin->username }}</td>
                        </tr>
                        <tr>
                            <th>Email Admin</th>
                            <td>{{ $kepalaSekolah->admin->email }}</td>
                        </tr>
                    </table>

                    <div class="mt-3">
                        <a href="{{ route('admin.kepala_sekolah.edit', $kepalaSekolah->id_kepsek) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('admin.kepala_sekolah.index') }}" class="btn btn-secondary">Kembali</a>
                        <form action="{{ route('kepala_sekolah.destroy', $kepalaSekolah->id_kepsek) }}" method="POST" class="d-inline">
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