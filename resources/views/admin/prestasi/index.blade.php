@extends('layouts.backend.app')

@section('content')
<div class="container">
    <h1>Data Prestasi</h1>
    <a href="{{ route('admin.prestasi.create') }}" class="btn mb-3" style="background-color: #001f3f; color: #E8AA42;">Tambah Prestasi</a>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Prestasi</th>
            <th style="text-align: justify;">Deskripsi</th>
            <th>Jenis</th>
            <th>Tanggal</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($prestasi as $key => $item)
            <tr>
                <td>{{ $prestasi->firstItem() + $key }}</td>
                <td>{{ $item->nama }}</td>
                <td style="text-align: justify;">{{ $item->deskripsi ?? '-' }}</td>
                <td>{{ ucfirst($item->jenis) }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>
                    @if ($item->foto)
                        <img src="{{ asset('prestasi/' . $item->foto) }}" alt="Foto" width="80">
                    @else
                        <span class="text-muted">-</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.prestasi.edit', $item->id_prestasi) }}" class="btn btn-warning btn-sm mb-2 w-100">Edit</a>
                    <form action="{{ route('admin.prestasi.destroy', $item->id_prestasi) }}" method="POST" class="form-hapus w-100">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger mb-2 w-100">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="7" class="text-center">Tidak ada data prestasi.</td></tr>
        @endforelse
    </tbody>
</table>
    {{ $prestasi->links() }}
</div>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<!-- Konfirmasi hapus -->
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
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
</script>
@endsection
