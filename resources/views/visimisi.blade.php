@extends('layouts.app') {{-- Pastikan layout ini sesuai dengan yang kamu pakai --}}

@section('title', 'Visi & Misi')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold text-success">Visi & Misi</h1>
        <hr class="mx-auto" style="width: 100px; height: 3px; background-color: #198754;">
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm rounded-4 border-0">
                <div class="card-body p-4">
                    <h3 class="fw-semibold text-primary">Visi</h3>
                    <p class="fs-5 mt-2">
                        "Menjadi sekolah unggulan yang menghasilkan lulusan yang berprestasi, berakhlak mulia, dan peduli lingkungan."
                    </p>

                    <h3 class="fw-semibold text-primary mt-4">Misi</h3>
                    <ul class="fs-5 mt-2">
                        <li>Meningkatkan kualitas pembelajaran dan prestasi siswa secara berkelanjutan.</li>
                        <li>Membentuk karakter siswa yang jujur, disiplin, dan bertanggung jawab.</li>
                        <li>Mendorong partisipasi aktif dalam kegiatan sosial dan pelestarian lingkungan.</li>
                        <li>Mengembangkan potensi siswa dalam bidang akademik dan non-akademik.</li>
                        <li>Meningkatkan profesionalisme guru dan tenaga kependidikan.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
