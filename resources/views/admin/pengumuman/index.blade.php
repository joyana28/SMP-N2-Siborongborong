@extends('layouts.backend.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Pengumuman</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.pengumuman.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Tambah Pengumuman
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
                                <th>Judul</th>
                                <th>Isi</th>
                                <th>Tanggal Terbit</th>
                                <th>Tanggal Berakhir</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($pengumuman as $key => $item)
                            <tr>
                                <td>{{ $pengumuman->firstItem() + $key }}</td>
                                <td>{{ $item->judul }}</td>
                                <td>{{ Str::limit($item->isi, 50) }}</td>
                                <td>{{ $item->tanggal_terbit }}</td>
                                <td>{{ $item->tanggal_berakhir }}</td>
                                <td>
                                    @if($item->foto)
                                        <img src="{{ asset('storage/pengumuman/'.$item->foto) }}" alt="{{ $item->judul }}" width="100" class="img-thumbnail">
                                    @else
                                        <span class="badge badge-secondary">Tidak ada foto</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.pengumuman.edit', $item->id_pengumuman) }}" class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.pengumuman.destroy', $item->id_pengumuman) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengumuman ini?');">
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
                                <td colspan="7" class="text-center">Tidak ada data pengumuman</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    {{ $pengumuman->links() }}
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
@endsection
