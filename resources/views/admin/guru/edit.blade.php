<!-- resources/views/guru/edit.blade.php -->
@extends('layouts.backend.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Data Guru
                        <a href="{{ route('admin.guru.index') }}" class="btn btn-danger float-end">Kembali</a>
                    </h4>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('guru.update', $guru->id_guru) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="id_admin">Admin</label>
                            <select name="id_admin" id="id_admin" class="form-select">
                                <option value="">Pilih Admin</option>
                                @foreach ($admins as $admin)
                                    <option value="{{ $admin->id }}" {{ (old('id_admin') ?? $guru->id_admin) == $admin->id ? 'selected' : '' }}>
                                        {{ $admin->name ?? 'Admin #' . $admin->id }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="nama" id="nama" value="{{ old('nama', $guru->nama) }}" class="form-control" maxlength="100" required>
                        </div>

                        <div class="mb-3">
                            <label for="nip">NIP</label>
                            <input type="text" name="nip" id="nip" value="{{ old('nip', $guru->nip) }}" class="form-control" maxlength="30" required>
                        </div>

                        <div class="mb-3">
                            <label for="golongan">Golongan</label>
                            <input type="text" name="golongan" id="golongan" value="{{ old('golongan', $guru->golongan) }}" class="form-control" maxlength="50" required>
                        </div>

                        <div class="mb-3">
                            <label for="bidang">Bidang</label>
                            <input type="text" name="bidang" id="bidang" value="{{ old('bidang', $guru->bidang) }}" class="form-control" maxlength="100" required>
                        </div>

                        <div class="mb-3">
                            <label for="no_telp">Nomor Telepon</label>
                            <input type="text" name="no_telp" id="no_telp" value="{{ old('no_telp', $guru->no_telp) }}" class="form-control" maxlength="15" required>
                        </div>

                        <div class="mb-3">
                            <label for="foto">Foto</label>
                            <input type="file" name="foto" id="foto" class="form-control">
                            <small class="text-muted">Format: JPG, JPEG, PNG (Max: 2MB). Biarkan kosong jika tidak ingin mengubah foto.</small>
                            @if ($guru->foto)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/guru/' . $guru->foto) }}" alt="{{ $guru->nama }}" width="100">
                                    <p>Foto Saat Ini</p>
                                </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection