@extends('layouts.frontend.app')

@section('content')
<style>
    body {
        background-color: #e3f2fd;
    }
    .card {
        background-color: #ffffff; 
        border: 1px solid #0d47a1; 
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .card-title {
        color: #0d47a1;
    }
    .btn-primary {
        background-color: #0d47a1;
        border-color: #0d47a1;
    }
</style>

<div class="container py-5">
    <h2 class="mb-4 text-center text-white bg-primary py-2 rounded">Detail Kelas</h2>
    <div class="row">
        <div class="col-md-8 mx-auto">
            @if ($siswa)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $siswa->nama_kelas }}</h5>
                    <p><strong>Tahun:</strong> {{ $siswa->tahun }}</p>
                    <p><strong>Jumlah Siswa:</strong> {{ $siswa->jumlah_siswa }} siswa</p>
                    <p><strong>Jumlah Siswa Laki-laki:</strong> {{ $siswa->jumlah_siswa_l }}</p>
                    <p><strong>Jumlah Siswa Perempuan:</strong> {{ $siswa->jumlah_siswa_p }}</p>
                    
                    @if ($siswa->wali_kelas)
                    <p><strong>Wali Kelas:</strong> {{ $siswa->wali_kelas }}</p>
                    @else
                    <p><strong>Wali Kelas:</strong> Tidak ada wali kelas yang ditugaskan.</p>
                    @endif
                </div>
            </div>
            @else
            <div class="alert alert-warning text-center">
                Data kelas tidak ditemukan.
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
