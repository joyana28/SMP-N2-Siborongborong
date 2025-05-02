@extends('layouts.backend.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Guru</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.guru.store') }}" enctype="multipart/form-data">
                        @csrf

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

                        <div class="form-group row mb-3">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">Nama Lengkap</label>
                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required>
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
                                <input id="nip" type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ old('nip') }}" required>
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
                                <input id="golongan" type="text" class="form-control @error('golongan') is-invalid @enderror" name="golongan" value="{{ old('golongan') }}" required>
                                @error('golongan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="bidang" class="col-md-4 col-form-label text-md-right">Bidang</label>
                            <div class="col-md-6">
                                <input id="bidang" type="text" class="form-control @error('bidang') is-invalid @enderror" name="bidang" value="{{ old('bidang') }}" required>
                                @error('bidang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="no_telp" class="col-md-4 col-form-label text-md-right">No Telepon</label>
                            <div class="col-md-6">
                                <input id="no_telp" type="text" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{ old('no_telp') }}" required>
                                @error('no_telp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="foto" class="col-md-4 col-form-label text-md-right">Foto</label>
                            <div class="col-md-6">
                                <input id="foto" type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
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
                                    Simpan
                                </button>
                                <a href="{{ route('admin.guru.index') }}" class="btn btn-secondary">
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