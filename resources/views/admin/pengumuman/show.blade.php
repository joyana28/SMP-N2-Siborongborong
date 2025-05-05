@extends('layouts.backend.app')

@section('title', 'Detail Pengumuman')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Detail Pengumuman</h1>

    <div class="card">
        <div class="card-header">
            <h4>{{ $pengumuman->judul }}</h4>
        </div>
        <div class="card-body">
            {{-- Foto --}}
            @if ($pengumuman->foto)
                <div class="mb-3 text-center">
                    <img src="{{ asset('storage/pengumuman/' . $pengumuman->foto) }}" alt="Foto Pengumuman" class="img-fluid rounded" style="max-height: 300px;">
                </div>
            @endif

            {{-- Isi Pengumuman --}}
            <div class="mb-3">
                <strong>Isi:</strong>
                <p>{!! nl2br(e($pengumuman->isi)) !!}</p>
            </div>

            {{-- Tanggal --}}
            <div class="mb-2">
                <strong>Tanggal Terbit:</strong> {{ \Carbon\Carbon::parse($pengumuman->tanggal_terbit)->translatedFormat('d F Y') }}
            </div>
            <div class="mb-2">
                <strong>Tanggal Berakhir:</strong> {{ \Carbon\Carbon::parse($pengumuman->tanggal_berakhir)->translatedFormat('d F Y') }}
            </div>

            {{-- Admin --}}
            <div class="mb-2">
                <strong>Dibuat Oleh:</strong> {{ $pengumuman->admin->nama ?? 'Tidak diketahui' }}
            </div>

            {{-- Tombol Kembali --}}
            <a href="{{ route('admin.pengumuman.index') }}" class="btn btn-secondary mt-3">Kembali ke Daftar</a>
        </div>
    </div>
</div>
@endsection
