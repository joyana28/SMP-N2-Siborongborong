@extends('layouts.frontend.app')

@section('content')
<div class="container my-5">
    <h1 class="mb-4">Prestasi Akademik</h1>

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

        <div class="d-flex justify-content-center">
            {{ $prestasiAkademik->links() }}
        </div>
    @else
        <p>Tidak ada data prestasi akademik.</p>
    @endif
</div>
@endsection
