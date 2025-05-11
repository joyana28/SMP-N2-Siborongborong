@extends('layouts.backend.app')

@section('title', 'Dashboard Admin')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4" style="background-color: #001f3f; padding: 15px 20px; border-radius: 10px;">
        <h1 class="h3 mb-0" style="color: #E8AA42;">Dashboard</h1>
        <a href="{{ route('home') }}" style="color: #E8AA42; text-decoration: none; font-weight: bold;">
            <i class="fas fa-sign-out-alt fa-sm me-1"></i> Logout
        </a>
    </div>
</div> <!-- penutup container-fluid -->
<div class="row">
    <!-- Alumni Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Alumni</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Alumni::count() }}</div>
                        <a href="{{ route('admin.alumni.index') }}" class="btn btn-sm btn-primary mt-2">Lihat Detail <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Guru Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Total Guru</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Guru::count() }}</div>
                        <a href="{{ route('admin.guru.index') }}" class="btn btn-sm btn-success mt-2">Lihat Detail <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ekstrakurikuler Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Total Ekstrakurikuler</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Ekstrakurikuler::count() }}</div>
                        <a href="{{ route('admin.ekstrakurikuler.index') }}" class="btn btn-sm btn-info mt-2">Lihat Detail <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-futbol fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Prestasi Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Total Prestasi</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Prestasi::count() }}</div>
                        <a href="{{ route('admin.prestasi.index') }}" class="btn btn-sm btn-warning mt-2">Lihat Detail <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-trophy fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row - Secondary Cards -->
<div class="row">
    <!-- Fasilitas Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                            Total Fasilitas</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Fasilitas::count() }}</div>
                        <a href="{{ route('admin.fasilitas.index') }}" class="btn btn-sm btn-danger mt-2">Lihat Detail <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-building fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pengumuman Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-secondary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                            Total Pengumuman</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Pengumuman::count() }}</div>
                        <a href="{{ route('admin.pengumuman.index') }}" class="btn btn-sm btn-secondary mt-2">Lihat Detail <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-bullhorn fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Kelas Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Total Kelas</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Siswa::count() }}</div>
                        <a href="{{ route('admin.siswa.index') }}" class="btn btn-sm btn-success mt-2">Lihat Detail <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-door-open fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- Semester Statistics Chart -->
    <div class="col-lg-8 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: #003366; color: #ffcc00;">
                <h6 class="m-0 font-weight-bold">Statistik Jumlah Siswa Per Semester</h6>
            </div>
            <div class="card-body" style="background-color: #f7f7f7;">
                <div class="chart-area">
                    <canvas id="semesterChart" style="height: 320px;"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

        </div>
        </div>
    </div>
    @endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Semester Statistics Chart
    const semesterCtx = document.getElementById('semesterChart').getContext('2d');
    
    // Data for the semester chart (directly from PHP)
    const semesterLabels = [
        // Replace the current semester statistics code with this:
@php
    // Get last 2 years data in 6-month periods
    $endDate = now();
    $startDate = (clone $endDate)->subYears(2);
    
    // Create 6-month periods
    $currentPeriodStart = clone $startDate;
    $labels = [];
    $data = [];
    
    while ($currentPeriodStart < $endDate) {
        $currentPeriodEnd = (clone $currentPeriodStart)->addMonths(6)->subDay();
        
        // Format period label
        $periodLabel = $currentPeriodStart->format('M Y') . ' - ' . $currentPeriodEnd->format('M Y');
        $labels[] = $periodLabel;
        
        // Sum the total student count in classes registered in this period
        $count = \App\Models\Siswa::whereBetween('created_at', [$currentPeriodStart, $currentPeriodEnd])
                  ->sum('jumlah_siswa');
        $data[] = $count;
        
        // Move to next period
        $currentPeriodStart->addMonths(6);
    }
    
    // Output JSON encoded array of labels
    echo "'" . implode("', '", $labels) . "'";
@endphp

    const semesterData = {
        labels: semesterLabels,
        datasets: [{
            label: 'Jumlah Siswa',
            data: [
                @php
                    // Output the data counts as a comma-separated list
                    echo implode(", ", $data);
                @endphp
            ],
            backgroundColor: 'rgba(78, 115, 223, 0.2)',
            borderColor: 'rgba(78, 115, 223, 1)',
            borderWidth: 2,
            pointBackgroundColor: 'rgba(78, 115, 223, 1)',
            pointBorderColor: '#fff',
            pointRadius: 4,
            tension: 0.3
        }]
    };
    
    const semesterChart = new Chart(semesterCtx, {
        type: 'line',
        data: semesterData,
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                x: {
                    grid: {
                        display: false
                    }
                },
                y: {
                    beginAtZero: true,
                    precision: 0,
                    ticks: {
                        stepSize: 10
                    }
                }
            },
            plugins: {
                legend: {
                    display: true,
                    position: 'top'
                },
                tooltip: {
                    backgroundColor: "rgb(255, 255, 255)",
                    bodyColor: "#858796",
                    titleColor: '#6e707e',
                    titleFontSize: 14,
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    displayColors: false,
                    caretPadding: 10,
                    callbacks: {
                        label: function(context) {
                            return 'Jumlah: ' + context.raw + ' siswa';
                        }
                    }
                }
            }
        }
    });
    
    const genderChart = new Chart(genderCtx, {
        type: 'doughnut',
        data: genderData,
        options: {
            maintainAspectRatio: false,
            cutout: '70%',
            plugins: {
                legend: {
                    display: true,
                    position: 'bottom'
                },
                tooltip: {
                    backgroundColor: "rgb(255, 255, 255)",
                    bodyColor: "#858796",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    displayColors: false,
                    caretPadding: 10,
                    callbacks: {
                        label: function(context) {
                            const label = context.label || '';
                            const value = context.raw || 0;
                            const total = context.dataset.data.reduce((acc, data) => acc + data, 0);
                            const percentage = Math.round((value / total) * 100) + '%';
                            
                            return `${label}: ${value} siswa (${percentage})`;
                        }
                    }
                }
            }
        }
    });
});
</script>
@endsection
