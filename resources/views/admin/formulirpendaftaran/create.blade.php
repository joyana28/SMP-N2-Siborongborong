<!-- resources/views/formulir_pendaftaran/create.blade.php -->
@extends('layouts.backend.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Formulir Pendaftaran
                        <a href="{{ route('admin.formulirpendaftaran.index') }}" class="btn btn-danger float-end">Kembali</a>
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

                    <form action="{{ route('admin.formulirpendaftaran.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="id_admin">Admin</label>
                            <select name="id_admin" id="id_admin" class="form-select">
                                <option value="">Pilih Admin</option>
                                @foreach ($admins as $admin)
                                    <option value="{{ $admin->id }}" {{ old('id_admin') == $admin->id ? 'selected' : '' }}>
                                        {{ $admin->name ?? 'Admin #' . $admin->id }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" name="deskripsi" id="deskripsi" value="{{ old('deskripsi') }}" class="form-control" maxlength="100" required>
                        </div>

                        <div class="mb-3">
                            <label for="formulir_pendaftaran">Nama Formulir</label>
                            <input type="text" name="formulir_pendaftaran" id="formulir_pendaftaran" value="{{ old('formulir_pendaftaran') }}" class="form-control" maxlength="100" required>
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_terbit">Tanggal Terbit</label>
                            <input type="date" name="tanggal_terbit" id="tanggal_terbit" value="{{ old('tanggal_terbit') }}" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_berakhir">Tanggal Berakhir (Opsional)</label>
                            <input type="date" name="tanggal_berakhir" id="tanggal_berakhir" value="{{ old('tanggal_berakhir') }}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection