@extends('layouts.backend.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Tambah Formulir Pendaftaran</h5>
                        <a href="{{ route('admin.formulirpendaftaran.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('admin.formulirpendaftaran.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ old('deskripsi') }}" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="formulir_pendaftaran" class="form-label">Formulir Pendaftaran</label>
                                <input type="text" class="form-control" id="formulir_pendaftaran" name="formulir_pendaftaran" value="{{ old('formulir_pendaftaran') }}" required>
                                <small class="form-text text-muted">Masukkan nama/judul formulir pendaftaran</small>
                            </div>
                            
                            <div class="mb-3">
                                <label for="tanggal_terbit" class="form-label">Tanggal Terbit</label>
                                <input type="date" class="form-control" id="tanggal_terbit" name="tanggal_terbit" value="{{ old('tanggal_terbit') ?? date('Y-m-d') }}" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="tanggal_berakhir" class="form-label">Tanggal Berakhir</label>
                                <input type="date" class="form-control" id="tanggal_berakhir" name="tanggal_berakhir" value="{{ old('tanggal_berakhir') }}" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="id_admin" class="form-label">Admin Pengelola</label>
                                <select class="form-control" id="id_admin" name="id_admin" required>
                                    <option value="">Pilih Admin</option>
                                    @foreach ($admins as $admin)
                                        <option value="{{ $admin->id_admin }}" {{ old('id_admin') == $admin->id_admin ? 'selected' : '' }}>
                                            {{ $admin->username }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Set minimum date for tanggal_berakhir based on tanggal_terbit
        const tanggalTerbit = document.getElementById('tanggal_terbit');
        const tanggalBerakhir = document.getElementById('tanggal_berakhir');
        
        tanggalTerbit.addEventListener('change', function() {
            tanggalBerakhir.min = this.value;
            
            // If current end date is before new start date, update it
            if (tanggalBerakhir.value < this.value) {
                tanggalBerakhir.value = this.value;
            }
        });
        
        // Initialize on page load
        tanggalBerakhir.min = tanggalTerbit.value;
    });
</script>
@endsection