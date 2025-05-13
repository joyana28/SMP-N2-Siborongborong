@extends('layouts.backend.app')

@section('content')
    <h1>Daftar Formulir Pendaftaran</h1>
    <a href="{{ route('admin.formulirpendaftaran.create') }}" class="btn mb-3" style="background-color: #001f3f; color: #E8AA42;">Tambah Formulir Pendaftaran</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Deskripsi</th>
                <th>Formulir Pendaftaran</th>
                <th>Tanggal Terbit</th>
                <th>Tanggal Berakhir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($formulir as $item)
                <tr>
                    <td>{{ $item->deskripsi }}</td>
<td>
    @if ($item->formulir_pendaftaran)
        <a href="{{ asset('formulirpendaftaran/' . $item->formulir_pendaftaran) }}" target="_blank">
            {{ $item->formulir_pendaftaran }}
        </a>
    @else
        <em class="text-muted">Tidak ada file</em>
    @endif
</td>
                    <td>{{ $item->tanggal_terbit }}</td>
                    <td>{{ $item->tanggal_berakhir }}</td>
                    <td>
                        <a href="{{ route('admin.formulirpendaftaran.edit', $item->id_pendaftaran) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.formulirpendaftaran.destroy', $item->id_pendaftaran) }}" method="POST" class="form-hapus" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Konfirmasi hapus dengan SweetAlert -->
<script>
    // Pastikan semua form dengan class 'form-hapus' memiliki event listener
    document.querySelectorAll('.form-hapus').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();  // Mencegah submit form langsung

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
                // Jika konfirmasi, submit form
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
</script>
    {{ $formulir->links() }}
@endsection
