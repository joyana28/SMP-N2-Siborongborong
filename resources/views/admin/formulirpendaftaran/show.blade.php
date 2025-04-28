@extends('layouts.backend.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Detail Formulir Pendaftaran</h5>
                        <a href="{{ route('admin.formulirpendaftaran.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th style="width: 30%">Deskripsi</th>
                                <td>{{ $formulirPendaftaran->deskripsi }}</td>
                            </tr>
                            <tr>
                                <th>Formulir Pendaftaran</th>
                                <td>{{ $formulirPendaftaran->formulir_pendaftaran }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Terbit</th>
                                <td>{{ $formulirPendaftaran->tanggal_terbit->format('d-m-Y') }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Berakhir</th>
                                <td>{{ $formulirPendaftaran->tanggal_berakhir->format('d-m-Y') }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    @php
                                        $today = \Carbon\Carbon::today();
                                        $status = 'Tidak Aktif';
                                        $badge = 'bg-danger';
                                        
                                        if ($today->between($formulirPendaftaran->tanggal_terbit, $formulirPendaftaran->tanggal_berakhir)) {
                                            $status = 'Aktif';
                                            $badge = 'bg-success';
                                        } elseif ($today->lt($formulirPendaftaran->tanggal_terbit)) {
                                            $status = 'Akan Datang';
                                            $badge = 'bg-info';
                                        }
                                    @endphp
                                    <span class="badge {{ $badge }}">{{ $status }}</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Admin Pengelola</th>
                                <td>{{ $formulirPendaftaran->admin->username ?? 'Admin tidak ditemukan' }}</td>
                            </tr>
                            <tr>
                                <th>Dibuat Pada</th>
                                <td>{{ $formulirPendaftaran->created_at->format('d-m-Y H:i') }}</td>
                            </tr>
                            <tr>
                                <th>Diperbarui Pada</th>
                                <td>{{ $formulirPendaftaran->updated_at->format('d-m-Y H:i') }}</td>
                            </tr>
                        </table>
                        
                        <div class="mt-3 d-flex gap-2">
                            <a href="{{ route('admin.formulirpendaftaran.edit', $formulirPendaftaran->id_pendaftaran) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.formulirpendaftaran.destroy', $formulirPendaftaran->id_pendaftaran) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection