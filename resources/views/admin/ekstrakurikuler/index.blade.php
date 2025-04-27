@extends('layouts.backend.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Ekstrakurikuler</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.ekstrakurikuler.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Tambah Ekstrakurikuler
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
                                <th>Pembina</th>
                                <th>Jadwal</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($ekstrakurikuler as $key => $item)
                            <tr>
                                <td>{{ $ekstrakurikuler->firstItem() + $key }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->pembina }}</td>
                                <td>{{ $item->jadwal }}</td>
                                <td>
                                    @if($item->foto)
                                        <img src="{{ asset('storage/ekstrakurikuler/'.$item->foto) }}" alt="{{ $item->nama }}" width="100" class="img-thumbnail">
                                    @else
                                        <span class="badge badge-secondary">Tidak ada foto</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.ekstrakurikuler.show', $item->id_ekstrakurikuler) }}" class="btn btn-info btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.ekstrakurikuler.edit', $item->id_ekstrakurikuler) }}" class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.ekstrakurikuler.destroy', $item->id_ekstrakurikuler) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus ekstrakurikuler ini?');">
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
                                <td colspan="6" class="text-center">Tidak ada data ekstrakurikuler</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    {{ $ekstrakurikuler->links() }}
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
@endsection
