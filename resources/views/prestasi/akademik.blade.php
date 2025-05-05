@extends('layouts.frontend.app')

@section('content')
<style>
    .page-header {
        background: linear-gradient(135deg, #1976d2, #42a5f5);
        color: white;
        padding: 40px 20px;
        text-align: center;
        border-radius: 10px;
        margin-bottom: 40px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .highlight-box {
        background-color: #e3f2fd;
        border-left: 5px solid #1976d2;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 30px;
    }

    .card:hover {
        transform: translateY(-5px);
        transition: 0.3s ease;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .card-title {
        color: #0d47a1;
        font-weight: bold;
    }

    .card-text {
        color: #455a64;
    }

    .no-prestasi {
        background-color: #fff3cd;
        padding: 15px;
        border-radius: 8px;
        color: #856404;
        border: 1px solid #ffeeba;
    }
</style>

<div class="container my-5">
    <div class="page-header">
        <h1 class="mb-2"><i class="fa fa-trophy"></i> Prestasi Akademik</h1>
        <p class="lead">Menampilkan berbagai pencapaian luar biasa dari siswa-siswi kami dalam bidang akademik.</p>
    </div>

    <div class="highlight-box">
        <h5><i class="fa fa-star text-warning"></i> Highlight Prestasi</h5>
        <p>SMP N2 Siborongborong secara konsisten meraih prestasi membanggakan di tingkat kabupaten hingga nasional. Kami bangga atas dedikasi para siswa dan guru dalam mencetak generasi yang unggul dalam ilmu pengetahuan dan karakter.</p>
    </div>

    @if ($prestasiAkademik->count())
        <div class="row">
            @foreach ($prestasiAkademik as $prestasi)
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        @if ($prestasi->foto)
                            <img src="{{ asset('storage/prestasi/' . $prestasi->foto) }}" class="card-img-top" alt="Foto Prestasi">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $prestasi->nama }}</h5>
                            <p class="card-text">{{ $prestasi->deskripsi }}</p>
                            <p class="card-text">
                                <small class="text-muted">Tanggal: {{ \Carbon\Carbon::parse($prestasi->tanggal)->format('d-m-Y') }}</small><br>
                                <small class="text-muted">Jenis: {{ ucfirst($prestasi->jenis) }}</small>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $prestasiAkademik->links() }}
        </div>
    @else
        <div class="no-prestasi mt-4">
            <strong>Oops!</strong> Belum ada prestasi akademik yang ditambahkan untuk saat ini.
        </div>
    @endif
</div>
@endsection
