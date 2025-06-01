@extends('layouts.backend.app')

@section('title', 'Data Alumni')

@section('content')
<div class="container">
   <!-- Judul Halaman -->
<h1 class="mt-4">Data Alumni</h1> {{-- Judul utama halaman yang tampil besar di atas tabel --}}

<!-- Tombol Tambah (warna biru terang dengan efek hover) -->
<a href="{{ route('admin.alumni.create') }}" class="btn mb-3" style="background-color: #001f3f; color: #E8AA42;">Tambah Alumni</a>
{{-- Tombol untuk menuju ke halaman tambah data alumni --}}

    <!-- Pesan sukses -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    
       
            <div class="table-responsive">
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
                                        <img src="{{ asset('alumni/'.$item->foto) }}" alt="{{ $item->nama }}" class="img-thumbnail" style="height: 80px;">
                                    @else
                                        <img src="{{ asset('img/default-profile.png') }}" alt="No Image" class="img-thumbnail" style="height: 80px;">
                                    @endif
                                </td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->tahun_lulus ?? '-' }}</td>
                                <td style="text-align: justify;">{{ $item->deskripsi }}</td>
                                <td>
                           <a href="{{ route('admin.alumni.edit', $item->id_alumni) }}" class="btn btn-warning btn-sm mb-2 w-100"> Edit
                           </a>
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
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-end mt-3">
                {{ $alumni->links() }}
            </div>
        </div>
    </div>
</div>

<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- SweetAlert2 Konfirmasi Hapus -->
<script>
    document.querySelectorAll('.form-hapus').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Yakin ingin menghapus?',
                text: "Apakah Anda yakin ingin menghapus data ini?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#002B5B',
                cancelButtonColor: '#E8AA42',
                confirmButtonText: 'Ya, Hapus',
                cancelButtonText: 'Batal',
                background: '#fdfdfd',
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
