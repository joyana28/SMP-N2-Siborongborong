@extends('layouts.backend.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Ekstrakurikuler</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.ekstrakurikuler.index') }}" class="btn btn-default">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-ban"></i> Error!</h5>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.ekstrakurikuler.update', $ekstrakurikuler->id_ekstrakurikuler) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="id_admin">Admin</label>
                            <select name="id_admin" id="id_admin" class="form-control @error('id_admin') is-invalid @enderror" required>
                                <option value="">Pilih Admin</option>
                                @foreach($admins as $admin)
                                    <option value="{{ $admin->id_admin }}" {{ (old('id_admin', $ekstrakurikuler->id_admin) == $admin->id_admin) ? 'selected' : '' }}>
                                        {{ $admin->nama ?? $admin->username }}
                                    </option>
                                @endforeach
                            </select>
                            @error('id_admin')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama Ekstrakurikuler</label>
                            <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $ekstrakurikuler->nama) }}" required>
                            @error('nama')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" rows="4" class="form-control @error('deskripsi') is-invalid @enderror" required>{{ old('deskripsi', $ekstrakurikuler->deskripsi) }}</textarea>
                            @error('deskripsi')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="pembina">Pembina</label>
                            <input type="text" name="pembina" id="pembina" class="form-control @error('pembina') is-invalid @enderror" value="{{ old('pembina', $ekstrakurikuler->pembina) }}" required>
                            @error('pembina')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="jadwal">Jadwal</label>
                            <input type="text" name="jadwal" id="jadwal" class="form-control @error('jadwal') is-invalid @enderror" value="{{ old('jadwal', $ekstrakurikuler->jadwal) }}" required>
                            @error('jadwal')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="foto">Foto</label>
                            @if($ekstrakurikuler->foto)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/ekstrakurikuler/'.$ekstrakurikuler->foto) }}" alt="{{ $ekstrakurikuler->nama }}" width="200" class="img-thumbnail">
                                </div>
                            @endif
                            <div class="custom-file">
                                <input type="file" name="foto" id="foto" class="custom-file-input @error('foto') is-invalid @enderror">
                                <label class="custom-file-label" for="foto">Pilih foto baru (opsional)</label>
                                @error('foto')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <small class="form-text text-muted">Format: JPG, PNG, GIF. Maks: 2MB. Biarkan kosong jika tidak ingin mengubah foto.</small>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Script untuk menampilkan nama file yang dipilih
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>
@endpush
