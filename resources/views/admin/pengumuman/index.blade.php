@extends('layouts.backend.app')

@section('content')
<div class="container mt-4">
    <h1>Daftar Pengumuman</h1>
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
                <th style="text-align: justify;">Isi</th>
                <th>Tanggal Terbit</th>
                <th>Tanggal Berakhir</th>
                <th>Foto</th>
                <th>Lampiran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($pengumuman as $item)
                <tr>
                    <td>{{ $item->judul }}</td>
                    <td style="text-align: justify;">{{ strip_tags($item->isi) }}</td>
                    <td>{{ $item->tanggal_terbit }}</td>
                    <td>{{ $item->tanggal_berakhir }}</td>
                    <td>
                        @if($item->foto)
                            <img src="{{ asset('pengumuman/' . $item->foto) }}" width="100" alt="Foto Pengumuman">
                        @else
                        -
                        @endif
                    </td>
                    <td>
                        @if($item->lampiran)
                            <a href="{{ asset('pengumuman/lampiran/' . $item->lampiran) }}" target="_blank">Lihat</a>
                        @else
                            <span class="text-muted">-</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.pengumuman.edit', $item->id_pengumuman) }}" class="btn btn-sm btn-warning mb-2 w-100">Edit</a>
                        <form action="{{ route('admin.pengumuman.destroy', $item->id_pengumuman) }}" method="POST" class="form-hapus w-100">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger mb-2 w-100">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center">Tidak ada data pengumuman.</td>
                    </tr>
                @endforelse
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
