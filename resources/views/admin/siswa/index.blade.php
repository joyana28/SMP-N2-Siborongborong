@extends('layouts.backend.app')

@section('content')
<div class="container mt-4">
    <h1>Data Kelas</h1>
    <a href="{{ route('admin.siswa.create') }}" class="btn mb-3" style="background-color: #001f3f; color: #E8AA42;"> Tambah Kelas</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Jumlah Siswa (L)</th>
                <th>Jumlah Siswa (P)</th>
                <th>Total Siswa</th>
                <th>Tahun</th>
                <th>Wali Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($siswa as $index => $s)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $s->nama_kelas }}</td>
                    <td>{{ $s->jumlah_siswa_l }}</td>
                    <td>{{ $s->jumlah_siswa_p }}</td>
                    <td>{{ $s->jumlah_siswa }}</td>
                    <td>{{ $s->tahun }}</td>
                    <td>{{ $s->wali_kelas ?? '-' }}</td>
                    <td>
                        <a href="{{ route('admin.siswa.edit', $s->id_siswa) }}" class="btn btn-sm btn-warning">Edit</a>
                        <!-- Perbaiki form dengan menambahkan class 'form-hapus' -->
                        <form action="{{ route('admin.siswa.destroy', $s->id_siswa) }}" method="POST" class="form-hapus d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center">Belum ada data kelas.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

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
@endsection
