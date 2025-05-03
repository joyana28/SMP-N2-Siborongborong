@extends('layouts.frontend.app')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-4">Ekstrakurikuler Sekolah</h2>
    @if ($ekstrakurikuler->isEmpty())
        <p>Data ekstrakurikuler tidak ditemukan.</p>
    @else
        <div class="list-group">
            @foreach ($ekstrakurikuler as $item)
                <div class="list-group-item">
                    <h5>{{ $item->nama }}</h5>
                    <p>{{ $item->deskripsi }}</p>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
