<!-- resources/views/formulir_pendaftaran/show.blade.php -->
@extends('layouts.backend.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Detail Formulir Pendaftaran
                        <a href="{{ route('admin.formulirpendaftaran.index') }}" class="btn btn-danger float-end">Kembali</a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th width="200px">ID Pendaftaran</th>
                                    <td>{{ $formulir->id_pendaftaran }}</td>
                                </tr>
                                <tr>
                                    <th>Admin</th>
                                    <td>{{ $formulir->admin->name ?? 'Admin #' . $formulir->id_admin }}</td>
                                </tr>
                                <tr>
                                    <th>Deskripsi</th>
                                    <td>{{ $formulir->deskripsi }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Formulir</th>
                                    <td>{{ $formulir->formulir_pendaftaran }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Terbit</th>
                                    <td>{{ $formulir->tanggal_terbit->format('d-m-Y') }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Berakhir</th>
                                    <td>{{ $formulir->tanggal_berakhir ? $formulir->tanggal_berakhir->format('d-m-Y') : 'Belum ditentukan' }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Dibuat</th>
                                    <td>{{ $formulir->created_at->format('d-m-Y H:i:s') }}</td>
                                </tr>
                                <tr>
                                    <th>Terakhir Diperbarui</th>
                                    <td>{{ $formulir->updated_at->format('d-m-Y H:i:s') }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3">
                        <a href="{{ route('admin.formulirpendaftaran.edit', $formulir->id_pendaftaran) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('formulirpendaftaran.destroy', $formulir->id_pendaftaran) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus formulir ini?')">
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