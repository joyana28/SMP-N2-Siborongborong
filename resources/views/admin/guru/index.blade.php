@extends('layouts.backend.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Guru</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('admin.guru.create') }}" class="btn mb-3" style="background-color: #001f3f; color: #E8AA42;">Tambah Guru</a>

    <table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>NIP</th>
            <th>Golongan</th>
            <th>Bidang</th>
            <th>No. Telepon</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($guru as $index => $item)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>
                @if($item->foto)
                    <img src="{{ asset('storage/guru/' . $item->foto) }}" alt="foto" width="60">
                @else
                    <img src="{{ asset('img/default-profile.png') }}" alt="default" width="60">
                @endif
            </td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->nip }}</td>
            <td>{{ $item->golongan }}</td>
            <td>{{ $item->bidang }}</td>
            <td>{{ $item->no_telp }}</td>
            <td>
                <a href="{{ route('admin.guru.edit', $item->id_guru) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('admin.guru.destroy', $item->id_guru) }}" method="POST" class="d-inline form-hapus">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

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
