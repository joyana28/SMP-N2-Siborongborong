@extends('layouts.backend.app')

@section('title', 'Data Alumni')

@section('content')
<div class="container">
    <h1 class="mt-4">Data Alumni</h1>

    {{-- Notifikasi sukses --}}
    @if (session('success'))
        <div class="alert alert-success fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tombol Tambah Alumni -->
    <a href="{{ route('admin.alumni.create') }}" class="btn mb-3" style="background-color: #001f3f; color: #E8AA42;">Tambah Alumni</a>

    <table class="table table-bordered align-middle">
        <thead>
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Tahun Lulus</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($alumni as $index => $item)
                <tr>
                    <td>{{ $alumni->firstItem() + $index }}</td>
                    <td class="text-center">
                        @if($item->foto)
                            <img src="{{ asset('alumni/' . $item->foto) }}" alt="{{ $item->nama }}" class="img-thumbnail" style="height: 80px;">
                        @else
                            <img src="{{ asset('img/default-profile.png') }}" alt="Tidak Ada Foto" class="img-thumbnail" style="height: 80px;">
                        @endif
                    </td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->tahun_lulus ?? '-' }}</td>
                    <td style="text-align: justify;">{{ $item->deskripsi }}</td>
                    <td>
                        <a href="{{ route('admin.alumni.edit', $item->id_alumni) }}" class="btn btn-warning btn-sm mb-2 w-100">Edit</a>
                        <form action="{{ route('admin.alumni.destroy', $item->id_alumni) }}" method="POST" class="form-hapus w-100">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm w-100">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Tidak ada data alumni</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="d-flex justify-content-end mt-3">
        {{ $alumni->links() }}
    </div>
</div>

<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Script Konfirmasi Hapus -->
<script>
    document.querySelectorAll('.form-hapus').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Konfirmasi Penghapusan',
                text: "Apakah Anda yakin ingin menghapus data ini?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#002B5B',
                cancelButtonColor: '#E8AA42',
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
