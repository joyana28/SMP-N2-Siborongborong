@extends('layouts.backend.app')

@section('content')
<div class="container mt-4">
    <h1>Edit Kelas</h1>

    <form action="{{ route('admin.siswa.update', $siswa->id_siswa) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama_kelas">Nama Kelas</label>
            <input type="text" name="nama_kelas" class="form-control" value="{{ old('nama_kelas', $siswa->nama_kelas) }}" required>
        </div>

        <div class="form-group">
            <label for="jumlah_siswa_l">Jumlah Siswa Laki-laki</label>
            <input type="number" name="jumlah_siswa_l" id="jumlah_siswa_l" class="form-control" value="{{ old('jumlah_siswa_l', $siswa->jumlah_siswa_l) }}" required>
        </div>

        <div class="form-group">
            <label for="jumlah_siswa_p">Jumlah Siswa Perempuan</label>
            <input type="number" name="jumlah_siswa_p" id="jumlah_siswa_p" class="form-control" value="{{ old('jumlah_siswa_p', $siswa->jumlah_siswa_p) }}" required>
        </div>

        <div class="form-group">
            <label for="jumlah_siswa">Total Jumlah Siswa</label>
            <input type="number" name="jumlah_siswa" id="jumlah_siswa" class="form-control" value="{{ old('jumlah_siswa', $siswa->jumlah_siswa) }}" readonly required>
        </div>

        <div class="form-group">
            <label for="tahun">Tahun Ajaran</label>
            <input type="text" name="tahun" class="form-control" value="{{ old('tahun', $siswa->tahun) }}" required>
        </div>

        <div class="form-group">
            <label for="wali_kelas">Wali Kelas</label>
            <select name="wali_kelas" class="form-control">
                <option value="">-- Pilih Wali Kelas --</option>
                @foreach($guru as $g)
                    <option value="{{ $g->nama }}" {{ old('wali_kelas', $siswa->wali_kelas) == $g->nama ? 'selected' : '' }}>
                        {{ $g->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update</button>
        <a href="{{ route('admin.siswa.index') }}" class="btn btn-secondary mt-3">Batal</a>
    </form>
</div>

{{-- Script untuk hitung total siswa --}}
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

    // Hitung total saat halaman pertama kali dimuat
    document.addEventListener('DOMContentLoaded', hitungTotal);
</script>
@endsection
