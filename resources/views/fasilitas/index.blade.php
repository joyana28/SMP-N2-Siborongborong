@extends('layouts.frontend.app', ['title' => 'Fasilitas SMP Negeri 2 Siborongborong'])

@section('content')
<section class="facilities-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h1 class="section-title">Fasilitas di SMP Negeri 2 Siborongborong</h1>
                <p class="section-description">Kami menyediakan fasilitas utama untuk mendukung kenyamanan belajar siswa, seperti ruang kelas yang nyaman dan laboratorium komputer yang memadai.</p>
            </div>
        </div>

        <div class="row">
            @foreach($facilities as $facility)
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="facility-card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $facility->title }}</h5>
                            <p class="card-text">{{ $facility->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    .section-title {
        font-size: 3rem;
        font-weight: bold;
        color: #4a4a4a;
        margin-bottom: 1rem;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
    }

    .section-description {
        font-size: 1.2rem;
        color: #666;
        max-width: 800px;
        margin: 0 auto;
    }

    .facility-card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
        background: linear-gradient(145deg, #ffffff, #f0f0f0);
        padding: 20px;
    }

    .facility-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    .card-title {
        font-weight: bold;
        color: #333;
    }

    .card-text {
        color: #555;
    }
</style>
@endsection
