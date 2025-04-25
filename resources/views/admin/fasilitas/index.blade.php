@extends('layouts.backend.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Fasilitas</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.fasilitas.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Tambah Fasilitas
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
                                <th>Nama</th>
                                <th>Tahun</th>
                                <th>Kerusakan</th>
                                <th>Penambahan</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($fasilitas as $key => $item)
                            <tr>
                                <td>{{ $fasilitas->firstItem() + $key }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->tahun }}</td>
                                <td>{{ $item->kerusakan ?? 'Tidak ada' }}</td>
                                <td>{{ $item->penambahan ?? 'Tidak ada' }}</td>
                                <td>
                                    @if($item->foto)
                                        <img src="{{ asset('storage/fasilitas/'.$item->foto) }}" alt="{{ $item->nama }}" width="100" class="img-thumbnail">
                                    @else
                                        <span class="badge badge-secondary">Tidak ada foto</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.fasilitas.show', $item->id_fasilitas) }}" class="btn btn-info btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.fasilitas.edit', $item->id_fasilitas) }}" class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.fasilitas.destroy', $item->id_fasilitas) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus fasilitas ini?');">
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
                                <td colspan="7" class="text-center">Tidak ada data fasilitas</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    {{ $fasilitas->links() }}
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
@endsection