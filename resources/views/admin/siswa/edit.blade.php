@extends('layouts.backend.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Edit Data Kelas</h5>
                        <a href="{{ route('admin.siswa.index') }}" class="btn btn-secondary">Kembali</a>
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

                        <form action="{{ route('admin.siswa.update', $siswa->id_siswa) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-3">
                                <label for="nama_kelas" class="form-label">Nama Kelas</label>
                                <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="{{ old('nama_kelas', $siswa->nama_kelas) }}" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="jumlah_siswa" class="form-label">Jumlah Siswa</label>
                                <input type="number" class="form-control" id="jumlah_siswa" name="jumlah_siswa" value="{{ old('jumlah_siswa', $siswa->jumlah_siswa) }}" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="jumlah_siswa_l" class="form-label">Jumlah Siswa Laki-laki</label>
                                <input type="number" class="form-control" id="jumlah_siswa_l" name="jumlah_siswa_l" value="{{ old('jumlah_siswa_l', $siswa->jumlah_siswa_l) }}" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="jumlah_siswa_p" class="form-label">Jumlah Siswa Perempuan</label>
                                <input type="number" class="form-control" id="jumlah_siswa_p" name="jumlah_siswa_p" value="{{ old('jumlah_siswa_p', $siswa->jumlah_siswa_p) }}" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="tahun" class="form-label">Tahun</label>
                                <input type="number" class="form-control" id="tahun" name="tahun" value="{{ old('tahun', $siswa->tahun) }}" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="history" class="form-label">History</label>
                                <textarea class="form-control" id="history" name="history" rows="3">{{ old('history', $siswa->history) }}</textarea>
                            </div>
                            
                            <div class="mb-3">
                                <label for="wali_kelas" class="form-label">Wali Kelas</label>
                                <input type="text" class="form-control" id="wali_kelas" name="wali_kelas" value="{{ old('wali_kelas', $siswa->wali_kelas) }}">
                            </div>
                            
                            <div class="mb-3">
                                <label for="id_admin" class="form-label">Admin Pengelola</label>
                                <select class="form-control" id="id_admin" name="id_admin" required>
                                    <option value="">Pilih Admin</option>
                                    @foreach ($admins as $admin)
                                        <option value="{{ $admin->id_admin }}" {{ (old('id_admin', $siswa->id_admin) == $admin->id_admin) ? 'selected' : '' }}>
                                            {{ $admin->username }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Perbarui</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection