@extends('layouts.backend.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah Fasilitas</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.fasilitas.index') }}" class="btn btn-default">
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

                    <form action="{{ route('admin.fasilitas.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="id_admin">Admin</label>
                            <select name="id_admin" id="id_admin" class="form-control @error('id_admin') is-invalid @enderror" required>
                                <option value="">Pilih Admin</option>
                                @foreach($admins as $admin)
                                    <option value="{{ $admin->id_admin }}" {{ old('id_admin') == $admin->id_admin ? 'selected' : '' }}>
                                        {{ $admin->nama ?? $admin->username }}
                                    </option>
                                @endforeach
                            </select>
                            @error('id_admin')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama Fasilitas</label>
                            <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" required>
                            @error('nama')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" rows="4" class="form-control @error('deskripsi') is-invalid @enderror" required>{{ old('deskripsi') }}</textarea>
                            @error('deskripsi')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="text" name="tahun" id="tahun" class="form-control @error('tahun') is-invalid @enderror" value="{{ old('tahun') }}" required>
                            @error('tahun')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="perhatian_teknis">Perhatian Teknis</label>
                            <input type="text" name="perhatian_teknis" id="perhatian_teknis" class="form-control @error('perhatian_teknis') is-invalid @enderror" value="{{ old('perhatian_teknis') }}">
                            <small class="form-text text-muted">Opsional. Deskripsi kerusakan fasilitas jika ada.</small>
                            @error('perhatian_teknis')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="penambahan">Penambahan</label>
                            <input type="text" name="penambahan" id="penambahan" class="form-control @error('penambahan') is-invalid @enderror" value="{{ old('penambahan') }}">
                            <small class="form-text text-muted">Opsional. Deskripsi penambahan fasilitas jika ada.</small>
                            @error('penambahan')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <div class="custom-file">
                                <input type="file" name="foto" id="foto" class="custom-file-input @error('foto') is-invalid @enderror" required>
                                <label class="custom-file-label" for="foto">Pilih foto</label>
                                @error('foto')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <small class="form-text text-muted">Format: JPG, PNG, GIF. Maks: 2MB</small>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
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