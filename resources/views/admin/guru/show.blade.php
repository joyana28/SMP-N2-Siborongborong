<!-- resources/views/guru/show.blade.php -->
@extends('layouts.backend.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Detail Data Guru
                        <a href="{{ route('admin.guru.index') }}" class="btn btn-danger float-end">Kembali</a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-center mb-4">
                            <img src="{{ asset('storage/guru/' . $guru->foto) }}" alt="{{ $guru->nama }}" class="img-fluid rounded" style="max-height: 300px;">
                        </div>
                        <div class="col-md-8">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th width="200px">ID Guru</th>
                                        <td>{{ $guru->id_guru }}</td>
                                    </tr>
                                    <tr>
                                        <th>Admin</th>
                                        <td>{{ $guru->admin->name ?? 'Admin #' . $guru->id_admin }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <td>{{ $guru->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th>NIP</th>
                                        <td>{{ $guru->nip }}</td>
                                    </tr>
                                    <tr>
                                        <th>Golongan</th>
                                        <td>{{ $guru->golongan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Bidang</th>
                                        <td>{{ $guru->bidang }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nomor Telepon</th>
                                        <td>{{ $guru->no_telp }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Ditambahkan</th>
                                        <td>{{ $guru->created_at->format('d-m-Y H:i:s') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Terakhir Diperbarui</th>
                                        <td>{{ $guru->updated_at->format('d-m-Y H:i:s') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="mt-3">
                                <a href="{{ route('admin.guru.edit', $guru->id_guru) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('guru.destroy', $guru->id_guru) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data guru ini?')">
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
    </div>
</div>
@endsection