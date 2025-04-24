@extends('layouts.backend.app')

@section('title', 'Detail Alumni')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Detail Alumni</h2>
                <a href="{{ route('admin.alumni.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left me-1"></i> Kembali
                </a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <i class="fas fa-user-graduate me-1"></i> Informasi Alumni
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 text-center mb-4">
                    @if($alumni->foto)
                    <img src="{{ asset('storage/' . $alumni->foto) }}" alt="{{ $alumni->nama }}" class="img-fluid rounded" style="max-height: 300px;">
                    @else
                    <img src="{{ asset('images/no-image.png') }}" alt="No Image" class="img-fluid rounded" style="max-height: 300px;">
                    @endif
                </div>
                <div class="col-md-8">
                    <table class="table table-bordered">
                        <tr>
                            <th width="200">Nama</th>
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
                            <th>Ditambahkan pada</th>
                            <td>{{ $alumni->created_at->format('d F Y H:i') }}</td>
                        </tr>
                        <tr>
                            <th>Terakhir diupdate</th>
                            <td>{{ $alumni->updated_at->format('d F Y H:i') }}</td>
                        </tr>
                    </table>

                    <div class="d-flex gap-2 mt-3">
                        <a href="{{ route('admin.alumni.edit', $alumni->id) }}" class="btn btn-warning">
                            <i class="fas fa-edit me-1"></i> Edit
                        </a>
                        <form action="{{ route('admin.alumni.destroy', $alumni->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-trash me-1"></i> Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection