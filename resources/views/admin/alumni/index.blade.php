@extends('layouts.backend.app')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Alumni</h1>
    </div>

    <!-- Tombol "Tambah Alumni" dipindahkan ke bawah -->
    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('admin.alumni.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Alumni
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Alumni</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                        <img src="{{ asset('storage/alumni/'.$item->foto) }}" alt="{{ $item->nama }}" class="img-thumbnail" style="height: 80px;">
                                    @else
                                        <img src="{{ asset('img/default-profile.png') }}" alt="No Image" class="img-thumbnail" style="height: 80px;">
                                    @endif
                                </td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->tahun_lulus ?? '-' }}</td>
                                <td>{{ $item->deskripsi ? \Illuminate\Support\Str::limit($item->deskripsi, 60) : '-' }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('admin.alumni.edit', $item->id_alumni) }}" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.alumni.destroy', $item->id_alumni) }}" method="POST" class="form-hapus d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return false;">
                                                <i class="fas fa-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </div>
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
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "paging": false,
            "info": false,
        });
    });

    // Konfirmasi hapus dengan SweetAlert
    document.querySelectorAll('.form-hapus').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();  // Mencegah submit form langsung

            Swal.fire({
                title: 'Yakin ingin menghapus?',
                text: "Data alumni ini akan dihapus permanen.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#002B5B',
                cancelButtonColor: '#E8AA42',
                confirmButtonText: 'Ya, hapus',
                cancelButtonText: 'Batal',
                background: '#fdfdfd',
                color: '#333',
                customClass: {
                    popup: 'rounded-4 shadow',
                    title: 'fw-bold',
                    confirmButton: 'px-4 py-2',
                    cancelButton: 'px-4 py-2'
                }
            }).then((result) => {
                // Jika konfirmasi, submit form
                if (result.isConfirmed) {
                    form.submit();  // Hanya submit form jika di-konfirmasi
                }
            });
        });
    });
</script>
@endpush
