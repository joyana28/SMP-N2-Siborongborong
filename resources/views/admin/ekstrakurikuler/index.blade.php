@extends('layouts.backend.app')

@section('title', 'Daftar Ekstrakurikuler')

@section('content')
<div class="container">
    <h1 class="mt-4">Daftar Ekstrakurikuler</h1>

    {{-- Notifikasi sukses tanpa tombol close --}}
    @if (session('success'))
        <div class="alert alert-success fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tombol Tambah (Warna Biru Terang) -->
    <a href="{{ route('admin.ekstrakurikuler.create') }}" class="btn mb-3" style="background-color: #001f3f; color: #E8AA42;">
        Tambah Ekstrakurikuler
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Pembina</th>
                <th>Jadwal</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($ekstrakurikuler as $ekstra)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $ekstra->nama }}</td>
                    <td style="text-align: justify;">{{ $ekstra->deskripsi }}</td>
                    <td>{{ $ekstra->pembina }}</td>
                    <td>{{ $ekstra->jadwal }}</td>
                    <td>
                        @if($ekstra->foto)
                            <img src="{{ asset('ekstrakurikuler/' . $ekstra->foto) }}" width="100" alt="Foto ekstrakurikuler">
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.ekstrakurikuler.edit', $ekstra->id_ekstrakurikuler) }}" class="btn btn-warning btn-sm mb-2 w-100">Edit</a>
                        <form action="{{ route('admin.ekstrakurikuler.destroy', $ekstra->id_ekstrakurikuler) }}" method="POST" class="form-hapus w-100">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger mb-2 w-100">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">Tidak ada data ekstrakurikuler</td>
                </tr>
                
            @endforelse
        </tbody>
    </table>

    {{ $ekstrakurikuler->links() }}
</div>

<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- SweetAlert2 Script untuk konfirmasi hapus -->
<script>
    document.querySelectorAll('.form-hapus').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Konfirmasi Penghapusan',
                text: "Apakah Anda yakin ingin menghapus data ini?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#002B5B', // Biru Tua
                cancelButtonColor: '#E8AA42',  // Kuning soft
                confirmButtonText: 'Ya, Hapus',
                cancelButtonText: 'Batal',
                background: '#f9f9f9',
                color: '#333',
                customClass: {
                    popup: 'rounded-4 shadow-lg',
                    title: 'fw-bold',
                    confirmButton: 'px-4 py-2',
                    cancelButton: 'px-4 py-2'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
</script>
@endsection
