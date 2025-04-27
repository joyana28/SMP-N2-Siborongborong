@extends('layouts.backend.app')

@section('title', 'Detail Alumni')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail Alumni</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.alumni.index') }}" class="btn btn-default">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-center mb-4">
                            @if($alumni->foto)
                                <img src="{{ asset('storage/'.$alumni->foto) }}" alt="{{ $alumni->nama }}" class="img-fluid mb-3" style="max-height: 300px;">
                            @else
                                <div class="alert alert-secondary text-center">
                                    <i class="fas fa-image fa-3x mb-2"></i>
                                    <p>Tidak ada foto</p>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-8">
                            <table class="table table-bordered">
                                <tr>
                                    <th style="width: 30%">ID Alumni</th>
                                    <td>{{ $alumni->id }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Alumni</th>
                                    <td>{{ $alumni->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Tahun Lulus</th>
                                    <td>{{ $alumni->tahun_lulus ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>Deskripsi</th>
                                    <td>{!! nl2br(e($alumni->deskripsi)) !!}</td>
                                </tr>
                                <tr>
                                    <th>Ditambahkan Pada</th>
                                    <td>{{ $alumni->created_at->format('d F Y H:i') }}</td>
                                </tr>
                                <tr>
                                    <th>Terakhir Diperbarui</th>
                                    <td>{{ $alumni->updated_at->format('d F Y H:i') }}</td>
                                </tr>
                            </table>

                            <div class="mt-3">
                                <a href="{{ route('admin.alumni.edit', $alumni->id_alumni) }}" class="btn btn-primary">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('admin.alumni.destroy', $alumni->id_alumni) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
@endsection
