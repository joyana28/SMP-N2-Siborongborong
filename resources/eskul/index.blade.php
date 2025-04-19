@extends('layouts.app')

@section('title', 'Ekstrakurikuler')

@section('content')
<div class="container py-5">
    <h1 class="text-center fw-bold text-primary mb-4">Ekstrakurikuler</h1>
    <div class="row">
        @foreach($eskul as $item)
            <div class="col-md-6 mb-4">
                <div class="card shadow rounded-4 border-0">
                    <div class="card-body">
                        <h4 class="fw-bold text-success">{{ $item->nama }}</h4>
                        <p>{{ $item->deskripsi }}</p>
                        <small class="text-muted">Pembina: {{ $item->admin->nama ?? 'Belum ditentukan' }}</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
