@extends('layouts.frontend.app')

@section('content')
    <div class="container">
        <h1>Prestasi Non-Akademik</h1>

        <ul>
            @foreach ($prestasiNonAkademik as $prestasi)
                <li>
                    <h4>{{ $prestasi->nama }}</h4>
                    <p>{{ $prestasi->deskripsi }}</p>
                    <p>{{ $prestasi->tanggal->format('d-m-Y') }}</p>
                    <p><strong>Jenis:</strong> {{ ucfirst($prestasi->jenis) }}</p>
                    @if ($prestasi->foto)
                        <img src="{{ asset('storage/prestasi/' . $prestasi->foto) }}" alt="Foto Prestasi" width="100">
                    @endif
                </li>
            @endforeach
        </ul>

        {{ $prestasiNonAkademik->links() }}
    </div>
@endsection
