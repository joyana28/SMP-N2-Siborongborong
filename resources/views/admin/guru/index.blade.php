@extends('layouts.backend.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Data Guru</h5>
                    <a href="{{ route('admin.guru.create') }}" class="btn btn-primary">Tambah Guru</a>
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
                                    <th>Nama</th>
                                    <th>NIP</th>
                                    <th>Golongan</th>
                                    <th>Bidang</th>
                                    <th>No Telepon</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($guru as $index => $g)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $g->nama }}</td>
                                        <td>{{ $g->nip }}</td>
                                        <td>{{ $g->golongan }}</td>
                                        <td>{{ $g->bidang }}</td>
                                        <td>{{ $g->no_telp }}</td>
                                        <td>
                                            @if ($g->foto)
                                                <img src="{{ asset('storage/guru/' . $g->foto) }}" alt="Foto Guru" width="50">
                                            @else
                                                Tidak ada foto
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.guru.show', $g->id_guru) }}" class="btn btn-info btn-sm">Lihat</a>
                                            <a href="{{ route('admin.guru.edit', $g->id_guru) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('admin.guru.destroy', $g->id_guru) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">Tidak ada data Guru</td>
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