@extends('layouts.backend.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Kelas Siswa</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.siswa.store') }}">
                        @csrf

                        <div class="form-group row mb-3">
                            <label for="id_admin" class="col-md-4 col-form-label text-md-right">Admin</label>
                            <div class="col-md-6">
                                <select id="id_admin" class="form-control @error('id_admin') is-invalid @enderror" name="id_admin" required>
                                    <option value="">Pilih Admin</option>
                                    @foreach ($admins as $admin)
                                        <option value="{{ $admin->id_admin }}">{{ $admin->username }}</option>
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
                            <label for="nama_kelas" class="col-md-4 col-form-label text-md-right">Nama Kelas</label>
                            <div class="col-md-6">
                                <input id="nama_kelas" type="text" class="form-control @error('nama_kelas') is-invalid @enderror" name="nama_kelas" value="{{ old('nama_kelas') }}" required>
                                @error('nama_kelas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="wali_kelas" class="col-md-4 col-form-label text-md-right">Wali Kelas</label>
                            <div class="col-md-6">
                                <select id="wali_kelas" class="form-control @error('wali_kelas') is-invalid @enderror" name="wali_kelas" required>
                                    <option value="">Pilih Wali Kelas</option>
                                    @foreach ($guru as $g)
                                        <option value="{{ $g->nama }}">{{ $g->nama }}</option>
                                    @endforeach
                                </select>
                                @error('wali_kelas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="jumlah_siswa" class="col-md-4 col-form-label text-md-right">Jumlah Siswa</label>
                            <div class="col-md-6">
                                <input id="jumlah_siswa" type="number" class="form-control @error('jumlah_siswa') is-invalid @enderror" name="jumlah_siswa" value="{{ old('jumlah_siswa') }}" required min="0">
                                @error('jumlah_siswa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="jumlah_siswa_l" class="col-md-4 col-form-label text-md-right">Jumlah Siswa Laki-laki</label>
                            <div class="col-md-6">
                                <input id="jumlah_siswa_l" type="number" class="form-control @error('jumlah_siswa_l') is-invalid @enderror" name="jumlah_siswa_l" value="{{ old('jumlah_siswa_l') }}" required min="0">
                                @error('jumlah_siswa_l')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="jumlah_siswa_p" class="col-md-4 col-form-label text-md-right">Jumlah Siswa Perempuan</label>
                            <div class="col-md-6">
                                <input id="jumlah_siswa_p" type="number" class="form-control @error('jumlah_siswa_p') is-invalid @enderror" name="jumlah_siswa_p" value="{{ old('jumlah_siswa_p') }}" required min="0">
                                @error('jumlah_siswa_p')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="tahun" class="col-md-4 col-form-label text-md-right">Tahun</label>
                            <div class="col-md-6">
                                <input id="tahun" type="number" class="form-control @error('tahun') is-invalid @enderror" name="tahun" value="{{ old('tahun', date('Y')) }}" required min="2000" max="2100">
                                @error('tahun')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="history" class="col-md-4 col-form-label text-md-right">Catatan/History</label>
                            <div class="col-md-6">
                                <textarea id="history" class="form-control @error('history') is-invalid @enderror" name="history" rows="4">{{ old('history') }}</textarea>
                                @error('history')
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
                                <a href="{{ route('admin.siswa.index') }}" class="btn btn-secondary">
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const jumlahSiswaL = document.getElementById('jumlah_siswa_l');
        const jumlahSiswaP = document.getElementById('jumlah_siswa_p');
        const jumlahSiswa = document.getElementById('jumlah_siswa');
        
        const calculateTotal = function() {
            const laki = parseInt(jumlahSiswaL.value) || 0;
            const perempuan = parseInt(jumlahSiswaP.value) || 0;
            jumlahSiswa.value = laki + perempuan;
        };
        
        jumlahSiswaL.addEventListener('input', calculateTotal);
        jumlahSiswaP.addEventListener('input', calculateTotal);
    });
</script>
@endsection