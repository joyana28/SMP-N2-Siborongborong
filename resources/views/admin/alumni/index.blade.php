@extends('layouts.backend.app')

@section('title', 'Manajemen Alumni')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Alumni</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.alumni.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus-circle"></i> Tambah Alumni
                        </a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-check"></i> Sukses!</h5>
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Tahun Lulus</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($alumni as $key => $item)
                            <tr>
                                <td>{{ $alumni->firstItem() + $key }}</td>
                                <td>
                                    @if($item->foto)
                                        <img src="{{ asset('storage/'.$item->foto) }}" alt="{{ $item->nama }}" class="img-thumbnail" width="70">
                                    @else
                                        <img src="{{ asset('images/no-image.png') }}" alt="No Image" class="img-thumbnail" width="70">
                                    @endif
                                </td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->tahun_lulus ?? '-' }}</td>
                                <td>{{ Str::limit($item->deskripsi, 150) }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.alumni.show', $item->id_alumni) }}" class="btn btn-info btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.alumni.edit', $item->id_alumni) }}" class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.alumni.destroy', $item->id_alumni) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus alumni ini?');">
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
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    {{ $alumni->links() }}
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
@endsection
