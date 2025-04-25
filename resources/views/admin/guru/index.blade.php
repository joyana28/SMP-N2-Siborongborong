<!-- resources/views/guru/index.blade.php -->
@extends('layouts.backend.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Daftar Guru
                        <a href="{{ route('admin.guru.create') }}" class="btn btn-primary float-end">Tambah Guru</a>
                    </h4>
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
                                    <th>ID</th>
                                    <th>Foto</th>
                                    <th>Nama</th>
                                    <th>NIP</th>
                                    <th>Golongan</th>
                                    <th>Bidang</th>
                                    <th>No. Telepon</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($guru as $item)
                                    <tr>
                                        <td>{{ $item->id_guru }}</td>
                                        <td>
                                            <img src="{{ asset('storage/guru/' . $item->foto) }}" alt="{{ $item->nama }}" width="50">
                                        </td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->nip }}</td>
                                        <td>{{ $item->golongan }}</td>
                                        <td>{{ $item->bidang }}</td>
                                        <td>{{ $item->no_telp }}</td>
                                        <td>
                                            <a href="{{ route('admin.guru.show', $item->id_guru) }}" class="btn btn-sm btn-info">Detail</a>
                                            <a href="{{ route('admin.guru.edit', $item->id_guru) }}" class="btn btn-sm btn-warning">Edit</a>
                                            <form action="{{ route('guru.destroy', $item->id_guru) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data guru ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">Tidak ada data guru.</td>
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