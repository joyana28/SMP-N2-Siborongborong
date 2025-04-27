@extends('layouts.backend.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail Fasilitas</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.fasilitas.index') }}" class="btn btn-default">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            @if($fasilitas->foto)
                                <img src="{{ asset('storage/fasilitas/'.$fasilitas->foto) }}" alt="{{ $fasilitas->nama }}" class="img-fluid mb-3">
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
                                    <th style="width: 30%">ID Fasilitas</th>
                                    <td>{{ $fasilitas->id_fasilitas }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Fasilitas</th>
                                    <td>{{ $fasilitas->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Admin</th>
                                    <td>{{ $fasilitas->admin->nama ?? $fasilitas->admin->username ?? 'Admin tidak ditemukan' }}</td>
                                </tr>
                                <tr>
                                    <th>Tahun</th>
                                    <td>{{ $fasilitas->tahun }}</td>
                                </tr>
                                <tr>
                                    <th>Perhatian Teknis</th>
                                    <td>{{ $fasilitas->perhatian_teknis ?? 'Tidak ada' }}</td>
                                </tr>
                                <tr>
                                    <th>Penambahan</th>
                                    <td>{{ $fasilitas->penambahan ?? 'Tidak ada' }}</td>
                                </tr>
                                <tr>
                                    <th>Deskripsi</th>
                                    <td>{{ $fasilitas->deskripsi }}</td>
                                </tr>
                                <tr>
                                    <th>Dibuat Pada</th>
                                    <td>{{ $fasilitas->created_at->format('d F Y H:i') }}</td>
                                </tr>
                                <tr>
                                    <th>Diperbarui Pada</th>
                                    <td>{{ $fasilitas->updated_at->format('d F Y H:i') }}</td>
                                </tr>
                            </table>
                            
                            <div class="mt-3">
                                <a href="{{ route('admin.fasilitas.edit', $fasilitas->id_fasilitas) }}" class="btn btn-primary">
                                <a href="{{ route('admin.fasilitas.edit', $fasilitas->id_fasilitas) }}" class="btn btn-primary">
    <i class="fas fa-edit"></i> Edit
</a>
<form action="{{ route('admin.fasilitas.destroy', $fasilitas->id_fasilitas) }}" method="POST" class="d-inline">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus fasilitas ini?')">
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
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
@endsection

@push('scripts')
<script>
    $(function() {
        // Script tambahan jika diperlukan
    });
</script>
@endpush