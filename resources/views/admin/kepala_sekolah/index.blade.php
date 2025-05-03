@extends('layouts.backend.app')

@section('title', 'Daftar Kepala Sekolah')

@section('content')
<div class="container">
    <h1 class="mt-4 mb-3">Daftar Kepala Sekolah</h1>

    <a href="{{ route('admin.kepala_sekolah.create') }}" class="btn btn-primary mb-3">Tambah Kepala Sekolah</a>

    @if(session('success'))
        <div class="alert alert-success">
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
            @foreach($kepalaSekolah as $index => $ks)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $ks->nama }}</td>
                    <td>{{ $ks->nip }}</td>
                    <td>{{ $ks->golongan }}</td>
                    <td>{{ $ks->periode }}</td>
                    <td>
                        @if($ks->foto)
                            <img src="{{ Storage::url('public/kepala_sekolah/'.$ks->foto) }}" alt="Foto Kepala Sekolah" width="100">
                        @else
                            <span>Foto tidak tersedia</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.kepala_sekolah.edit', $ks->id_kepsek) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.kepala_sekolah.destroy', $ks->id_kepsek) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
 