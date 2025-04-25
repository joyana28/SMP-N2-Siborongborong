<!-- resources/views/formulir_pendaftaran/index.blade.php -->
@extends('layouts.backend.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Daftar Formulir Pendaftaran
                        <a href="{{ route('admin.formulirpendaftaran.create') }}" class="btn btn-primary float-end">Tambah Formulir</a>
                    </h4>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Admin</th>
                                <th>Deskripsi</th>
                                <th>Formulir</th>
                                <th>Tanggal Terbit</th>
                                <th>Tanggal Berakhir</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($formulir as $item)
                                <tr>
                                    <td>{{ $item->id_pendaftaran }}</td>
                                    <td>{{ $item->admin->name ?? 'Admin #' . $item->id_admin }}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                    <td>{{ $item->formulir_pendaftaran }}</td>
                                    <td>{{ $item->tanggal_terbit->format('d-m-Y') }}</td>
                                    <td>{{ $item->tanggal_berakhir ? $item->tanggal_berakhir->format('d-m-Y') : '-' }}</td>
                                    <td>
                                        <a href="{{ route('admin.formulirpendaftaran.show', $item->id_pendaftaran) }}" class="btn btn-sm btn-info">Detail</a>
                                        <a href="{{ route('admin.formulirpendaftaran.edit', $item->id_pendaftaran) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('admin.formulirpendaftaran.destroy', $item->id_pendaftaran) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus formulir ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">Tidak ada data formulir pendaftaran.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection