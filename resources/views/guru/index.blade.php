<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Guru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --light-blue: #e6f2ff;
            --medium-blue: #4d94ff;
            --dark-blue: #003366;
        }
        
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .section-title {
            color: var(--dark-blue);
            font-weight: 700;
            position: relative;
            margin-bottom: 1.5rem;
        }
        
        .section-title:after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: var(--medium-blue);
            margin: 12px auto 0;
        }
        
        .section-subtitle {
            color: #6c757d;
            font-size: 1.1rem;
        }
        
        .teacher-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
        }
        
        .teacher-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .teacher-header {
            background-color: var(--light-blue);
            padding: 25px 0 15px;
            position: relative;
        }
        
        .teacher-img {
            width: 140px;
            height: 140px;
            object-fit: cover;
            border: 5px solid white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .teacher-name {
            color: var(--dark-blue);
            font-weight: 600;
            margin-top: 15px;
        }
        
        .teacher-subject {
            color: var(--medium-blue);
            font-weight: 500;
        }
        
        .btn-detail {
            background-color: var(--medium-blue);
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 30px;
            transition: all 0.3s ease;
        }
        
        .btn-detail:hover {
            background-color: var(--dark-blue);
            transform: scale(1.05);
        }
        
        .btn-phone {
            color: var(--medium-blue);
            border: 1px solid var(--medium-blue);
            padding: 8px 12px;
            border-radius: 30px;
            transition: all 0.3s ease;
        }
        
        .btn-phone:hover {
            background-color: var(--light-blue);
            color: var(--dark-blue);
        }
        
        .modal-header {
            background-color: var(--light-blue);
            color: var(--dark-blue);
        }
        
        .modal-footer {
            background-color: #f8f9fa;
        }
        
        .btn-close-modal {
            background-color: var(--dark-blue);
            color: white;
            border: none;
        }
        
        .table-info th {
            background-color: var(--light-blue);
            color: var(--dark-blue);
        }
        
        .no-data {
            background-color: var(--light-blue);
            padding: 40px;
            border-radius: 10px;
        }
        
        .no-data h5 {
            color: var(--dark-blue);
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <div class="text-center mb-5">
                    <h2 class="section-title">TENAGA PENDIDIK</h2>
                    <p class="section-subtitle">Daftar guru dan staff pengajar di sekolah kami</p>
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @forelse ($guru as $g)
            <div class="col">
                <div class="card h-100 teacher-card shadow">
                    <div class="teacher-header text-center">
                        @if ($g->foto)
                            <img src="{{ asset('storage/guru/' . $g->foto) }}" alt="Foto {{ $g->nama }}" class="rounded-circle teacher-img">
                        @else
                            <img src="{{ asset('images/default-user.jpg') }}" alt="Default" class="rounded-circle teacher-img">
                        @endif
                    </div>
                    <div class="card-body text-center py-4">
                        <h5 class="teacher-name">{{ $g->nama }}</h5>
                        <p class="teacher-subject mb-2">{{ $g->bidang }}</p>
                        @if ($g->nip)
                            <p class="card-text small text-muted">NIP: {{ $g->nip }}</p>
                        @endif
                    </div>
                    <div class="card-footer bg-white border-0 text-center pb-4">
                        <div class="d-flex justify-content-center gap-2">
                            @if ($g->no_telp)
                            <a href="tel:{{ $g->no_telp }}" class="btn btn-phone" title="Telepon">
                                <i class="fas fa-phone"></i>
                            </a>
                            @endif
                            <button type="button" class="btn btn-detail" data-bs-toggle="modal" data-bs-target="#guruModal{{ $g->id_guru }}">
                                <i class="fas fa-user me-1"></i> Detail
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Detail Guru -->
            <div class="modal fade" id="guruModal{{ $g->id_guru }}" tabindex="-1" aria-labelledby="guruModalLabel{{ $g->id_guru }}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title fw-bold" id="guruModalLabel{{ $g->id_guru }}">Detail Guru</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="text-center mb-4">
                                @if ($g->foto)
                                    <img src="{{ asset('storage/guru/' . $g->foto) }}" alt="Foto {{ $g->nama }}" class="rounded-circle teacher-img">
                                @else
                                    <img src="{{ asset('images/default-user.jpg') }}" alt="Default" class="rounded-circle teacher-img">
                                @endif
                                <h4 class="mt-3 teacher-name">{{ $g->nama }}</h4>
                                <p class="teacher-subject">{{ $g->bidang }}</p>
                            </div>
                            
                            <table class="table table-bordered table-info mt-3">
                                <tbody>
                                    @if ($g->nip)
                                    <tr>
                                        <th width="40%">NIP</th>
                                        <td>{{ $g->nip }}</td>
                                    </tr>
                                    @endif
                                    @if ($g->golongan)
                                    <tr>
                                        <th>Golongan</th>
                                        <td>{{ $g->golongan }}</td>
                                    </tr>
                                    @endif
                                    @if ($g->no_telp)
                                    <tr>
                                        <th>Nomor Telepon</th>
                                        <td>{{ $g->no_telp }}</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                            
                            @if ($g->deskripsi)
                            <div class="mt-4">
                                <h6 class="fw-bold text-primary">Biografi:</h6>
                                <p class="text-muted">{{ $g->deskripsi }}</p>
                            </div>
                            @endif
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-close-modal" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center py-5">
                <div class="no-data">
                    <i class="fas fa-user-slash fa-3x mb-3 text-secondary"></i>
                    <h5>Belum ada data guru yang tersedia</h5>
                    <p class="text-muted">Silakan kunjungi halaman ini lagi nanti.</p>
                </div>
            </div>
            @endforelse
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</html>