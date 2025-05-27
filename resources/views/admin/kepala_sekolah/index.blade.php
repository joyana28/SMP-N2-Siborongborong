@extends('layouts.backend.app')

@section('title', 'Daftar Kepala Sekolah')

@section('content')
<div class="container">
    <h1 class="mt-4 mb-3">Daftar Kepala Sekolah</h1>

    <a href="{{ route('admin.kepala_sekolah.create') }}" class="btn mb-3" style="background-color: #001f3f; color: #E8AA42;">Tambah Kepala Sekolah</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIP</th>
                <th>Golongan</th>
                <th>Periode</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kepalaSekolah as $index => $ks)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $ks->nama }}</td>
                    <td>{{ $ks->nip }}</td>
                    <td>{{ $ks->golongan }}</td>
                    <td>{{ $ks->periode }}</td>
                    <td>
                        @if($ks->foto)
                            <img src="{{ asset('kepala_sekolah/' . $ks->foto) }}" alt="Foto Kepala Sekolah" width="100">
                        @else
                            <span>Foto tidak tersedia</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.kepala_sekolah.edit', $ks->id_kepsek) }}" class="btn btn-warning btn-sm mb-2 w-100">Edit</a>
                        <form action="{{ route('admin.kepala_sekolah.destroy', $ks->id_kepsek) }}" method="POST" class="form-hapus w-100">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Tambahkan SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.querySelectorAll('.form-hapus').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Konfirmasi Hapus',
                text: "Apakah Anda yakin ingin menghapus data ini?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#002B5B',  // Biru tua
                cancelButtonColor: '#E8AA42',   // Kuning kecoklatan soft
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
