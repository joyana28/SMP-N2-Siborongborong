<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Alumni</title>
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
        
        .alumni-section {
            padding: 80px 0;
        }
        
        .alumni-filters {
            background-color: var(--light-blue);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
        }
        
        .alumni-card {
            background-color: white;
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            height: 100%;
        }
        
        .alumni-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .alumni-image-container {
            height: 220px;
            overflow: hidden;
            position: relative;
            background-color: var(--light-blue);
        }
        
        .alumni-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .alumni-card:hover .alumni-image {
            transform: scale(1.05);
        }
        
        .alumni-year {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: var(--dark-blue);
            color: white;
            padding: 5px 15px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 0.85rem;
        }
        
        .alumni-name {
            color: var(--dark-blue);
            font-weight: 600;
            margin-top: 10px;
        }
        
        .alumni-description {
            color: #6c757d;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            height: 4.5em;
        }
        
        .btn-alumni-detail {
            background-color: var(--medium-blue);
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 30px;
            transition: all 0.3s ease;
        }
        
        .btn-alumni-detail:hover {
            background-color: var(--dark-blue);
            transform: scale(1.05);
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
        
        .no-data {
            background-color: var(--light-blue);
            padding: 40px;
            border-radius: 10px;
            text-align: center;
        }
        
        .no-data h5 {
            color: var(--dark-blue);
        }
        
        .page-link {
            color: var(--medium-blue);
        }
        
        .page-item.active .page-link {
            background-color: var(--medium-blue);
            border-color: var(--medium-blue);
        }
        
        .search-box {
            position: relative;
        }
        
        .search-box .form-control {
            padding-left: 40px;
            border-radius: 30px;
        }
        
        .search-icon {
            position: absolute;
            left: 15px;
            top: 10px;
            color: #6c757d;
        }
        
        .year-filter {
            border-radius: 30px;
        }
    </style>
</head>
<body>
    <section class="alumni-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center mb-5">
                        <h2 class="section-title">PROFIL ALUMNI</h2>
                        <p class="section-subtitle">Para alumni kebanggaan sekolah kami</p>
                    </div>
                </div>
            </div>
            
            <!-- Filter Section -->
            <div class="alumni-filters shadow-sm">
                <form action="{{ route('alumni.index') }}" method="GET" class="row g-3 align-items-center">
                    <div class="col-md-6">
                        <div class="search-box">
                            <i class="fas fa-search search-icon"></i>
                            <input type="text" name="search" class="form-control" placeholder="Cari alumni..." value="{{ request('search') }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <select name="tahun" class="form-select year-filter">
                            <option value="">Semua Tahun Kelulusan</option>
                            @foreach($tahunLulusList as $tahun)
                                <option value="{{ $tahun }}" {{ request('tahun') == $tahun ? 'selected' : '' }}>
                                    {{ $tahun }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-alumni-detail w-100">
                            <i class="fas fa-filter me-1"></i> Filter
                        </button>
                    </div>
                </form>
            </div>
            
            <!-- Alumni Grid -->
            <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
                @forelse($alumni as $item)
                <div class="col">
                    <div class="card alumni-card shadow-sm">
                        <div class="alumni-image-container">
                            @if($item->foto)
                                <img src="{{ asset('storage/alumni/' . $item->foto) }}" alt="{{ $item->nama }}" class="alumni-image">
                            @else
                                <img src="{{ asset('images/no-image.png') }}" alt="No Image" class="alumni-image">
                            @endif
                            @if($item->tahun_lulus)
                                <div class="alumni-year">{{ $item->tahun_lulus }}</div>
                            @endif
                        </div>
                        <div class="card-body p-4">
                            <h5 class="alumni-name">{{ $item->nama }}</h5>
                            <p class="alumni-description mt-2">{{ Str::limit($item->deskripsi, 150) }}</p>
                        </div>
                        <div class="card-footer bg-white border-0 pb-4 pt-0 text-center">
                            <button type="button" class="btn btn-alumni-detail" data-bs-toggle="modal" data-bs-target="#alumniModal{{ $item->id_alumni }}">
                                <i class="fas fa-user-graduate me-1"></i> Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Modal Detail Alumni -->
                <div class="modal fade" id="alumniModal{{ $item->id_alumni }}" tabindex="-1" aria-labelledby="alumniModalLabel{{ $item->id_alumni }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title fw-bold" id="alumniModalLabel{{ $item->id_alumni }}">Profil Alumni</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4 text-center mb-4 mb-md-0">
                                        @if($item->foto)
                                            <img src="{{ asset('storage/alumni/' . $item->foto) }}" alt="{{ $item->nama }}" class="img-fluid rounded" style="max-height: 300px;">
                                        @else
                                            <img src="{{ asset('images/no-image.png') }}" alt="No Image" class="img-fluid rounded" style="max-height: 300px;">
                                        @endif
                                    </div>
                                    <div class="col-md-8">
                                        <h4 class="text-primary mb-2">{{ $item->nama }}</h4>
                                        
                                        @if($item->tahun_lulus)
                                        <div class="d-flex align-items-center mb-3">
                                            <span class="badge bg-primary me-2 p-2">
                                                <i class="fas fa-graduation-cap me-1"></i> 
                                                Angkatan {{ $item->tahun_lulus }}
                                            </span>
                                        </div>
                                        @endif
                                        
                                        <h6 class="text-dark mb-2 fw-bold">Tentang Alumni:</h6>
                                        <p class="text-muted">{{ $item->deskripsi ?: 'Tidak ada deskripsi tersedia.' }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-close-modal" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <div class="no-data">
                        <i class="fas fa-user-graduate fa-3x mb-3 text-secondary"></i>
                        <h5>Belum ada data alumni</h5>
                        <p class="text-muted">Silakan kunjungi halaman ini lagi nanti.</p>
                    </div>
                </div>
                @endforelse
            </div>
            
            <!-- Pagination -->
            <div class="d-flex justify-content-center">
                {{ $alumni->links() }}
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>