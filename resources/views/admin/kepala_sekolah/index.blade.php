@extends('layouts.backend.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Data Kepala Sekolah</h5>
                    <a href="{{ route('admin.kepala_sekolah.create') }}" class="btn btn-primary">Tambah Kepala Sekolah</a>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Golongan</th>
                                <th>Periode</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($kepalaSekolah as $index => $kepsek)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $kepsek->nama }}</td>
                                    <td>{{ $kepsek->nip }}</td>
                                    <td>{{ $kepsek->golongan }}</td>
                                    <td>{{ $kepsek->periode }}</td>
                                    <td>
                                        @if ($kepsek->foto)
                                            <img src="{{ asset('storage/kepala_sekolah/' . $kepsek->foto) }}" alt="Foto Kepala Sekolah" width="50">
                                        @else
                                            Tidak ada foto
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.kepala_sekolah.show', $kepsek->id_kepsek) }}" class="btn btn-info btn-sm">Lihat</a>
                                        <a href="{{ route('admin.kepala_sekolah.edit', $kepsek->id_kepsek) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('admin.kepala_sekolah.destroy', $kepsek->id_kepsek) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">Tidak ada data Kepala Sekolah</td>
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