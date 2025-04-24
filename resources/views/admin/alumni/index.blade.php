@extends('layouts.backend.app')

@section('title', 'Manajemen Alumni')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <h2>Manajemen Alumni</h2>
            <a href="{{ route('admin.alumni.create') }}" class="btn btn-primary">
                <i class="fas fa-plus-circle me-1"></i> Tambah Alumni
            </a>
        </div>
    </div>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="card">
        <div class="card-header">
            <i class="fas fa-user-graduate me-1"></i> Daftar Alumni
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr>
                            <th width="50">No</th>
                            <th width="100">Foto</th>
                            <th>Nama</th>
                            <th>Tahun Lulus</th>
                            <th width="400">Deskripsi</th>
                            <th width="150">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($alumni as $index => $item)
                        <tr>
                            <td>{{ $alumni->firstItem() + $index }}</td>
                            <td>
                                @if($item->foto)
                                <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->nama }}" class="img-thumbnail" width="70">
                                @else
                                <img src="{{ asset('images/no-image.png') }}" alt="No Image" class="img-thumbnail" width="70">
                                @endif
                            </td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->tahun_lulus ?? '-' }}</td>
                            <td>{{ Str::limit($item->deskripsi, 150) }}</td>
                            <td>
                                <div class="d-flex gap-1">
                                    <a href="{{ route('admin.alumni.show', $item->id) }}" class="btn btn-info btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.alumni.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.alumni.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">Tidak ada data alumni</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                {{ $alumni->links() }}
            </div>
        </div>
    </div>
</div>
@endsection