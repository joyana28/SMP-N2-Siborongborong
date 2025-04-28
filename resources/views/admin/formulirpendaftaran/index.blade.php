@extends('layouts.backend.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Data Formulir Pendaftaran</h5>
                        <a href="{{ route('admin.formulirpendaftaran.create') }}" class="btn btn-primary">Tambah Formulir</a>
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
                                        <th>Deskripsi</th>
                                        <th>Formulir Pendaftaran</th>
                                        <th>Tanggal Terbit</th>
                                        <th>Tanggal Berakhir</th>
                                        <th>Admin</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($formulirs as $index => $formulir)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $formulir->deskripsi }}</td>
                                            <td>{{ $formulir->formulir_pendaftaran }}</td>
                                            <td>{{ $formulir->tanggal_terbit->format('d-m-Y') }}</td>
                                            <td>{{ $formulir->tanggal_berakhir->format('d-m-Y') }}</td>
                                            <td>{{ $formulir->admin->username ?? 'Admin tidak ditemukan' }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('admin.formulirpendaftaran.show', $formulir->id_pendaftaran) }}" class="btn btn-info btn-sm">Detail</a>
                                                    <a href="{{ route('admin.formulirpendaftaran.edit', $formulir->id_pendaftaran) }}" class="btn btn-warning btn-sm">Edit</a>
                                                    <form action="{{ route('admin.formulirpendaftaran.destroy', $formulir->id_pendaftaran) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">Tidak ada data formulir pendaftaran</td>
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