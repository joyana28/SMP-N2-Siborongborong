@extends('layouts.backend.app')

@section('content')
<style>
    body {
        background-color: #f4f6f8;
    }

    .table thead {
        background-color: #001f3f;
        color: #fff;
    }

    .btn-custom {
        background-color: #001f3f;
        color: #E8AA42;
        font-weight: 600;
    }

    .btn-custom:hover {
        background-color: #002b5b;
        color: #ffdd99;
    }

    .btn-edit {
        background-color: #fbc02d;
        color: #000;
        font-weight: 500;
    }

    .btn-edit:hover {
        background-color: #f9a825;
    }

    .btn-delete {
        background-color: #e53935;
        color: #fff;
        font-weight: 500;
    }

    .btn-delete:hover {
        background-color: #c62828;
    }

    img.foto-guru {
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
</style>

<div class="container">
    <h1 class="mt-4">Daftar Guru</h1>

    @if(session('success'))
        <div class="alert alert-success rounded-3 shadow-sm">{{ session('success') }}</div>
    @endif

    <a href="{{ route('admin.guru.create') }}" class="btn btn-custom mb-3">Tambah Guru</a>

    <div class="table-responsive">
        <table class="table table-bordered shadow-sm bg-white">
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
                            <img src="{{ asset('guru/' . $item->foto) }}" width="100" class="foto-guru" alt="Foto Guru">
                        @else
                            <span class="text-muted">Tidak Ada</span>
                        @endif
                    </td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->nip }}</td>
                    <td>{{ $item->golongan }}</td>
                    <td>{{ $item->bidang }}</td>
                    <td>{{ $item->no_telp }}</td>
                    <td>
                        <a href="{{ route('admin.guru.edit', $item->id_guru) }}" class="btn btn-sm btn-edit mb-1 w-100">Edit</a>
                        <form action="{{ route('admin.guru.destroy', $item->id_guru) }}" method="POST" class="form-hapus w-100">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-delete mb-1 w-100">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
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
