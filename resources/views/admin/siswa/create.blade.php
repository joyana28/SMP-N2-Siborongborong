@extends('layouts.backend.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Tambah Data Kelas</h1>

    {{-- Tampilkan error validasi --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> Ada beberapa masalah dengan input kamu.<br><br>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.siswa.store') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="nama_kelas">Nama Kelas</label>
            <input type="text" name="nama_kelas" class="form-control @error('nama_kelas') is-invalid @enderror" value="{{ old('nama_kelas') }}" required>
            @error('nama_kelas')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="jumlah_siswa_l">Jumlah Siswa Laki-laki</label>
                <input type="number" name="jumlah_siswa_l" id="jumlah_siswa_l" class="form-control @error('jumlah_siswa_l') is-invalid @enderror" value="{{ old('jumlah_siswa_l') }}" required>
                @error('jumlah_siswa_l')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-4 mb-3">
                <label for="jumlah_siswa_p">Jumlah Siswa Perempuan</label>
                <input type="number" name="jumlah_siswa_p" id="jumlah_siswa_p" class="form-control @error('jumlah_siswa_p') is-invalid @enderror" value="{{ old('jumlah_siswa_p') }}" required>
                @error('jumlah_siswa_p')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-4 mb-3">
                <label for="jumlah_siswa">Total Jumlah Siswa</label>
                <input type="number" name="jumlah_siswa" id="jumlah_siswa" class="form-control @error('jumlah_siswa') is-invalid @enderror" value="{{ old('jumlah_siswa') }}" readonly required>
                @error('jumlah_siswa')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="tahun">Tahun Ajaran</label>
            <input type="text" name="tahun" class="form-control @error('tahun') is-invalid @enderror" value="{{ old('tahun') }}" required>
            @error('tahun')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="wali_kelas">Wali Kelas</label>
            <select name="wali_kelas" class="form-control @error('wali_kelas') is-invalid @enderror">
                <option value="">-- Pilih Wali Kelas --</option>
                @foreach($guru as $g)
                    <option value="{{ $g->nama }}" {{ old('wali_kelas') == $g->nama ? 'selected' : '' }}>
                        {{ $g->nama }}
                    </option>
                @endforeach
            </select>
            @error('wali_kelas')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        <a href="{{ route('admin.siswa.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const inputL = document.getElementById('jumlah_siswa_l');
        const inputP = document.getElementById('jumlah_siswa_p');
        const inputTotal = document.getElementById('jumlah_siswa');

        function hitungTotal() {
            const l = parseInt(inputL.value) || 0;
            const p = parseInt(inputP.value) || 0;
            inputTotal.value = l + p;
        }

        // Hitung total saat halaman dimuat pertama kali (jika ada value)
        hitungTotal();

        // Tambahkan event listener
        inputL.addEventListener('input', hitungTotal);
        inputP.addEventListener('input', hitungTotal);
    });
</script>
@endsection
