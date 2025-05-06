@extends('layouts.backend.app')

@section('title', 'Edit Kelas')

@section('content')
<style>
    body {
        background-color: #f4f6f8;
    }

    .card-custom {
        border: none;
        border-left: 6px solid #0d47a1;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }

    .btn-primary-custom {
        background-color: #0d47a1;
        border: none;
    }

    .btn-primary-custom:hover {
        background-color: #08306b;
    }

    .btn-warning-custom {
        background-color: #ffb300;
        color: #000;
        border: none;
    }

    .btn-warning-custom:hover {
        background-color: #ffa000;
        color: #000;
    }

    label {
        font-weight: 600;
        color: #0d47a1;
    }

    input:focus, textarea:focus {
        border-color: #0d47a1;
        box-shadow: 0 0 0 0.2rem rgba(13,71,161,.25);
    }
</style>

<div class="container mt-5">
    <h2 class="mb-4 text-primary">Edit Data Kelas</h2>

    <div class="card card-custom">
        <div class="card-body">
            <form action="{{ route('admin.siswa.update', $siswa->id_siswa) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nama_kelas">Nama Kelas <span class="text-danger">*</span></label>
                    <input type="text" name="nama_kelas" id="nama_kelas" class="form-control @error('nama_kelas') is-invalid @enderror" value="{{ old('nama_kelas', $siswa->nama_kelas) }}" required>
                    @error('nama_kelas')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="jumlah_siswa_l">Jumlah Siswa Laki-laki</label>
                    <input type="number" name="jumlah_siswa_l" id="jumlah_siswa_l" class="form-control @error('jumlah_siswa_l') is-invalid @enderror" value="{{ old('jumlah_siswa_l', $siswa->jumlah_siswa_l) }}">
                    @error('jumlah_siswa_l')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="jumlah_siswa_p">Jumlah Siswa Perempuan</label>
                    <input type="number" name="jumlah_siswa_p" id="jumlah_siswa_p" class="form-control @error('jumlah_siswa_p') is-invalid @enderror" value="{{ old('jumlah_siswa_p', $siswa->jumlah_siswa_p) }}">
                    @error('jumlah_siswa_p')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="jumlah_siswa">Total Jumlah Siswa</label>
                    <input type="number" name="jumlah_siswa" id="jumlah_siswa" class="form-control" value="{{ old('jumlah_siswa', $siswa->jumlah_siswa) }}" readonly>
                </div>

                <div class="form-group">
                    <label for="tahun">Tahun Ajaran</label>
                    <input type="text" name="tahun" id="tahun" class="form-control @error('tahun') is-invalid @enderror" value="{{ old('tahun', $siswa->tahun) }}">
                    @error('tahun')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="wali_kelas">Wali Kelas</label>
                    <select name="wali_kelas" id="wali_kelas" class="form-control @error('wali_kelas') is-invalid @enderror">
                        <option value="">-- Pilih Wali Kelas --</option>
                        @foreach($guru as $g)
                            <option value="{{ $g->nama }}" {{ old('wali_kelas', $siswa->wali_kelas) == $g->nama ? 'selected' : '' }}>
                                {{ $g->nama }}
                            </option>
                        @endforeach
                    </select>
                    @error('wali_kelas')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="text-right mt-4">
                    <button type="submit" class="btn btn-primary-custom">Perbarui</button>
                    <a href="{{ route('admin.siswa.index') }}" class="btn btn-warning-custom ml-2">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    const inputL = document.getElementById('jumlah_siswa_l');
    const inputP = document.getElementById('jumlah_siswa_p');
    const inputTotal = document.getElementById('jumlah_siswa');

    function hitungTotal() {
        const l = parseInt(inputL.value) || 0;
        const p = parseInt(inputP.value) || 0;
        inputTotal.value = l + p;
    }

    inputL.addEventListener('input', hitungTotal);
    inputP.addEventListener('input', hitungTotal);
    document.addEventListener('DOMContentLoaded', hitungTotal);
</script>
@endpush
