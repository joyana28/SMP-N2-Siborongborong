@extends('layouts.frontend.app')

@section('content')
<style>
    body {
        background-color: #f0f8ff;
        font-family: 'Poppins', sans-serif;
    }
    .text-center.mt-4 {
    overflow: visible;
}

    .page-header {
        background: linear-gradient(135deg, #0d47a1 0%, #1565c0 100%);
        color: white;
        padding: 30px 20px;
        margin-bottom: 40px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    
    .page-header h2 {
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin: 0;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    }
    
    .lead-paragraph {
        background-color: white;
        border-radius: 10px;
        padding: 25px;
        margin-bottom: 30px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        position: relative;
        border-left: 5px solid #0d47a1;
    }
    
    .badge-penerimaan {
        background: linear-gradient(135deg, #0d47a1 0%, #1565c0 100%);
        padding: 8px 16px;
        font-size: 14px;
        border-radius: 50px;
        margin-bottom: 15px;
        display: inline-block;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
    }
    
    .feature-card {
        border: none;
        border-radius: 10px;
        transition: all 0.3s ease;
        overflow: hidden;
        height: 100%;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }
    
    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
    
    .feature-card .card-body {
        padding: 25px;
    }
    
    .feature-card .icon-wrapper {
        height: 80px;
        width: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: linear-gradient(135deg, #0d47a1 0%, #1565c0 100%);
        margin: 0 auto 20px;
        box-shadow: 0 5px 15px rgba(13, 71, 161, 0.3);
    }
    
    .feature-card i {
        color: white;
        font-size: 36px;
    }
    
    .feature-card .card-title {
        color: #0d47a1;
        font-weight: 600;
        margin-bottom: 15px;
    }
    
    .feature-card .card-text {
        color: #546e7a;
        font-size: 14px;
    }
    
    .info-alert {
        background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
        border: none;
        border-radius: 10px;
        padding: 25px;
        margin-bottom: 40px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }
    
    .info-alert i {
        color: #0d47a1;
    }
    
    .info-alert .alert-heading {
        color: #0d47a1;
        font-weight: 600;
        margin-bottom: 15px;
    }
    
    .info-alert p {
        color: #37474f;
    }
    
    .info-alert hr {
        border-top: 1px solid #90caf9;
    }
    
    .formulir-card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
    
    .formulir-card .card-body {
        padding: 30px;
    }
    
    .formulir-card .card-title {
        color: #0d47a1;
        font-weight: 600;
        position: relative;
        font-size: 20px;
        margin-bottom: 20px;
        border-bottom: 2px solid #e3f2fd;
        padding-bottom: 15px;
    }
    
    .formulir-card p {
        color: #546e7a;
        margin-bottom: 15px;
    }
    
    .formulir-card strong {
        color: #0d47a1;
    }
    
    .btn-unduh {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #0d47a1 0%, #1565c0 100%);
    border: none;
    border-radius: 50px;
    padding: 12px 30px;
    font-weight: 600;
    box-shadow: 0 5px 15px rgba(13, 71, 161, 0.3);
    transition: all 0.3s ease;
    color: #fff;
    text-align: center;
    white-space: nowrap; /* ini menjaga teks agar tidak pecah ke bawah */
    font-size: 16px; /* Tambahkan jika font terlalu kecil */
}

.btn-unduh i {
    margin-right: 8px;
    font-size: 18px;
}

    @media (max-width: 768px) {
        .feature-card {
            margin-bottom: 20px;
        }
        
        .page-header {
            padding: 20px 15px;
        }
        
        .lead-paragraph {
            padding: 20px;
        }
    }
</style>

<div class="container py-5">
    <div class="page-header text-center">
        <h2>Penerimaan Siswa Baru</h2>
        <p class="mb-0">SMP N2 Siborongborong Tahun Ajaran {{ date('Y') }}/{{ date('Y')+1 }}</p>
    </div>
    
    <div class="lead-paragraph text-center">
        <span class="badge-penerimaan">Pendaftaran Dibuka</span>
        <p class="mb-0">Selamat datang di halaman pendaftaran siswa baru SMP NN2 Siborongborong! Kami mengundang para calon siswa untuk bergabung dengan keluarga besar SMP NN2 Siborongborong, sekolah dengan kualitas pendidikan terbaik di Tapanuli Utara. Dengan tenaga pengajar yang berkualitas, fasilitas modern, dan lingkungan belajar yang nyaman, kami berkomitmen untuk membentuk generasi unggul yang berprestasi akademik dan berkarakter.</p>
    </div>

    <div class="row mb-4">
        <div class="col-md-4 mb-3">
            <div class="card feature-card">
                <div class="card-body text-center">
                    <div class="icon-wrapper">
                        <i class="fa fa-graduation-cap"></i>
                    </div>
                    <h5 class="card-title">Pendidikan Berkualitas</h5>
                    <p class="card-text">Kurikulum terbaru dengan metode pembelajaran inovatif dan tenaga pengajar profesional untuk pendidikan yang optimal.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card feature-card">
                <div class="card-body text-center">
                    <div class="icon-wrapper">
                        <i class="fa fa-users"></i>
                    </div>
                    <h5 class="card-title">Pengembangan Karakter</h5>
                    <p class="card-text">Berbagai kegiatan ekstrakurikuler untuk mengembangkan bakat, minat, dan membentuk karakter siswa yang unggul.</p>
                </div>
            </div>
        </div>

    <div class="alert info-alert">
        <div class="row align-items-center">
            <div class="col-md-1 text-center">
                <i class="fa fa-info-circle fa-3x"></i>
            </div>
            <div class="col-md-11">
                <h5 class="alert-heading">Informasi Pendaftaran</h5>
                <p>Pendaftaran siswa baru SMP NN2 Siborongborong telah dibuka! Dapatkan kesempatan untuk menjadi bagian dari komunitas belajar yang berprestasi. Jumlah kursi terbatas, segera daftarkan diri Anda untuk mendapatkan prioritas!</p>
                <hr>
                <p class="mb-0">Untuk informasi lebih lanjut, silakan hubungi panitia PSB di <strong>(0622) 123456</strong> atau kunjungi kantor administrasi sekolah pada jam kerja.</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card formulir-card">
                <div class="card-body">
                    <h5 class="card-title">{{ $formulir->deskripsi }}</h5>
                    <p><strong>Tanggal Terbit:</strong> {{ \Carbon\Carbon::parse($formulir->tanggal_terbit)->format('d M Y') }}</p>
                    <p><strong>Tanggal Berakhir:</strong> {{ \Carbon\Carbon::parse($formulir->tanggal_berakhir)->format('d M Y') }}</p>
                    <div class="text-center mt-4">
                        <a href="{{ Storage::url('public/formulir/' . $formulir->formulir_pendaftaran) }}" class="btn btn-unduh" target="_blank">
                            <i class="fa fa-download"></i> Unduh Formulir
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
