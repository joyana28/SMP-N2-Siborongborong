@extends('layouts.frontend.app')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-4">Fasilitas Sekolah</h2>

    @if ($fasilitas->count())
        <div class="row">
            @foreach ($fasilitas as $item)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        @if ($item->foto)
                            <img src="{{ asset('storage/fasilitas/' . $item->foto) }}" class="card-img-top" alt="Foto {{ $item->nama }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->nama }}</h5>
                            <p class="card-text">{{ Str::limit($item->deskripsi, 100) }}</p>
                            <p><strong>Tahun:</strong> {{ $item->tahun }}</p>
                            <p><strong>Perhatian Teknis:</strong> {{ $item->perhatian_teknis ?? '-' }}</p>
                            <p><strong>Penambahan:</strong> {{ $item->penambahan ?? '-' }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center">Belum ada data fasilitas.</p>
    @endif
</div>
@endsection
