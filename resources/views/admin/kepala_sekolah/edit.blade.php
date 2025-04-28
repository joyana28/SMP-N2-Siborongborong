@extends('layouts.backend.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Kepala Sekolah</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.kepala_sekolah.update', $kepalaSekolah->id_kepsek) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group row mb-3">
                            <label for="id_admin" class="col-md-4 col-form-label text-md-right">Akun Admin</label>
                            <div class="col-md-6">
                                <select id="id_admin" class="form-control @error('id_admin') is-invalid @enderror" name="id_admin" required>
                                    <option value="">Pilih Akun Admin</option>
                                    @foreach ($admins as $admin)
                                        <option value="{{ $admin->id_admin }}" {{ $kepalaSekolah->id_admin == $admin->id_admin ? 'selected' : '' }}>
                                            {{ $admin->username }} ({{ $admin->email }})
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_admin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">Nama Lengkap</label>
                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $kepalaSekolah->nama) }}" required>
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="nip" class="col-md-4 col-form-label text-md-right">NIP</label>
                            <div class="col-md-6">
                                <input id="nip" type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ old('nip', $kepalaSekolah->nip) }}" required>
                                @error('nip')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="golongan" class="col-md-4 col-form-label text-md-right">Golongan</label>
                            <div class="col-md-6">
                                <input id="golongan" type="text" class="form-control @error('golongan') is-invalid @enderror" name="golongan" value="{{ old('golongan', $kepalaSekolah->golongan) }}" required>
                                @error('golongan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="periode" class="col-md-4 col-form-label text-md-right">Periode</label>
                            <div class="col-md-6">
                                <input id="periode" type="text" class="form-control @error('periode') is-invalid @enderror" name="periode" value="{{ old('periode', $kepalaSekolah->periode) }}" required>
                                @error('periode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="foto" class="col-md-4 col-form-label text-md-right">Foto</label>
                            <div class="col-md-6">
                                @if ($kepalaSekolah->foto)
                                    <div class="mb-2">
                                        <img src="{{ asset('storage/kepala_sekolah/' . $kepalaSekolah->foto) }}" alt="Foto Kepala Sekolah" width="100">
                                    </div>
                                @endif
                                <input id="foto" type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
                                <small class="form-text text-muted">Biarkan kosong jika tidak ingin mengubah foto</small>
                                @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Perbarui
                                </button>
                                <a href="{{ route('admin.kepala_sekolah.index') }}" class="btn btn-secondary">
                                    Kembali
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection