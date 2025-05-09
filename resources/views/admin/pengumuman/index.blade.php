@extends('layouts.backend.app')

@section('content')
<div class="container mt-4">
    <h4>Daftar Pengumuman</h4>
    <a href="{{ route('admin.pengumuman.create') }}" class="btn mb-3" style="background-color: #001f3f; color: #E8AA42;">Tambah Pengumuman</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Isi</th>
                <th>Tanggal Terbit</th>
                <th>Tanggal Berakhir</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengumuman as $item)
                <tr>
                    <td>{{ $item->judul }}</td>
                    <td>{{ Str::limit(strip_tags($item->isi), 50) }}</td>
                    <td>{{ $item->tanggal_terbit }}</td>
                    <td>{{ $item->tanggal_berakhir }}</td>
                    <td>
                        @if($item->foto)
                            <img src="{{ asset('storage/pengumuman/' . $item->foto) }}" width="100">
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.pengumuman.edit', $item->id_pengumuman) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.pengumuman.destroy', $item->id_pengumuman) }}" method="POST" class="form-hapus" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $pengumuman->links() }}
</div>

<!-- SweetAlert2 untuk konfirmasi hapus -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
