@extends('layouts.backend.app')

@section('title', 'Data Fasilitas')

@section('content')
    <div class="container">
        <h1>Data Fasilitas</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('admin.fasilitas.create') }}" class="btn mb-3" style="background-color: #001f3f; color: #E8AA42;">Tambah Fasilitas</a>
        

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <th>Tahun</th>
                    <th>Perhatian Teknis</th>
                    <th>Penambahan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($fasilitas as $index => $item)
                    <tr>
                        <td>{{ $fasilitas->firstItem() + $index }}</td>
                        <td>{{ $item->nama }}</td>
                        <td style="text-align: justify;">{{ $item->deskripsi }}</td>
                        <td>
                        @if($item->foto)
                            <img src="{{ asset('fasilitas/' . $item->foto) }}" width="100" alt="Foto fasilitas">
                        @else
                        -
                        @endif
                        </td>
                        <td>{{ $item->tahun }}</td>
                        <td>{{ $item->perhatian_teknis ?? '-' }}</td>
                        <td>{{ $item->penambahan ?? '-' }}</td>
                        <td>
                            <a href="{{ route('admin.fasilitas.edit', $item->id_fasilitas) }}" class="btn btn-warning btn-sm mb-2 w-100">
                               Edit
                            </a>
                            <form action="{{ route('admin.fasilitas.destroy', $item->id_fasilitas) }}" method="POST" class="form-hapus w-100">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                     Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center">Belum ada fasilitas.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $fasilitas->links() }}
    </div>
    <!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- SweetAlert2 Custom Script -->
<script>
    document.querySelectorAll('.form-hapus').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Konfirmasi Penghapusan',
                text: "Apakah Anda yakin ingin menghapus data ini?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#002B5B', // biru tua
                cancelButtonColor: '#E8AA42',  // kuning kecoklatan soft
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
