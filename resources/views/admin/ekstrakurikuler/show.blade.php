@extends('layouts.backend.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail Ekstrakurikuler</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.ekstrakurikuler.index') }}" class="btn btn-default">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            @if($ekstrakurikuler->foto)
                                <img src="{{ asset('storage/ekstrakurikuler/'.$ekstrakurikuler->foto) }}" alt="{{ $ekstrakurikuler->nama }}" class="img-fluid mb-3">
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
                                    <th style="width: 30%">ID Ekstrakurikuler</th>
                                    <td>{{ $ekstrakurikuler->id_ekstrakurikuler }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Ekstrakurikuler</th>
                                    <td>{{ $ekstrakurikuler->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Pembina</th>
                                    <td>{{ $ekstrakurikuler->pembina }}</td>
                                </tr>
                                <tr>
                                    <th>Jadwal</th>
                                    <td>{{ $ekstrakurikuler->jadwal }}</td>
                                </tr>
                                <tr>
                                    <th>Deskripsi</th>
                                    <td>{{ $ekstrakurikuler->deskripsi ?? 'Tidak ada deskripsi' }}</td>
                                </tr>
                                <tr>
                                    <th>Dibuat Pada</th>
                                    <td>{{ $ekstrakurikuler->created_at->format('d F Y H:i') }}</td>
                                </tr>
                                <tr>
                                    <th>Diperbarui Pada</th>
                                    <td>{{ $ekstrakurikuler->updated_at->format('d F Y H:i') }}</td>
                                </tr>
                            </table>
                            
                            <div class="mt-3">
                                <a href="{{ route('admin.ekstrakurikuler.edit', $ekstrakurikuler->id_ekstrakurikuler) }}" class="btn btn-primary">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('admin.ekstrakurikuler.destroy', $ekstrakurikuler->id_ekstrakurikuler) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus ekstrakurikuler ini?');">
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
