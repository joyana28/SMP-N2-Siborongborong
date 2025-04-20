@extends('layouts.backend.app', [
    'title' => 'Manage Tenaga Pengajar',
    'contentTitle' => 'Manage Tenaga Pengajar',
])

@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('templates/backend/AdminLTE-3.0.1/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endpush

@section('content')
<x-alert></x-alert>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('admin.tenagapengajar.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
            </div>
            <div class="card-body table-responsive">
                <table id="dataTable1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Gambar</th>
                            <th>Jabatan</th>
                            <th>Status</th>
                            <th>NIP</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pengajar as $index => $pengajar)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $pengajar->nama_tenagapengajar }}</td>
                            <td><img width="100" src="{{ asset('folderimage/' . $pengajar->gambar_tenagapengajar) }}" alt="{{ $pengajar->nama_tenagapengajar }}"></td>
                            <td>{{ $pengajar->jabatan }}</td>
                            <td>{{ $pengajar->status }}</td>
                            <td>{{ $pengajar->nip }}</td>
                            <td>{{ $pengajar->alamat }}</td>
                            <td>
                            <div class="row">
    <div class="mb-1">
        <a href="{{ route('admin.tenagapengajar.edit', ['id' => $pengajar->id_tenagapengajar]) }}" class="btn btn-primary btn-sm mr-1"><i class="fas fa-edit fa-fw"></i> Edit</a>
    </div>
    <div class="mb-1">
        @if($pengajar->status == 'Non-Aktif')
            <a href="{{ route('admin.tenagapengajar.aktif', ['id' => $pengajar->id_tenagapengajar]) }}" class="btn btn-success btn-sm ml-1" onclick="return confirm('Apakah Anda yakin ingin mengaktifkan kembali?')">Aktif</a>
        @else
            <a href="{{ route('admin.tenagapengajar.nonaktif', ['id' => $pengajar->id_tenagapengajar]) }}" class="btn btn-danger btn-sm ml-1" onclick="return confirm('Apakah Anda yakin ingin menonaktifkan?')">Non-Aktif</a>
        @endif
    </div>
</div>


                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<!-- DataTables -->
<script src="{{ asset('templates/backend/AdminLTE-3.0.1/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('templates/backend/AdminLTE-3.0.1/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script>
    $(function () {
        $("#dataTable1").DataTable();
        $('#dataTable2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
        });
    });
</script>
<script src="{{ mix('js/app.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        @if(session('success'))
            Swal.fire({
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        @endif

        @if(session('error'))
            Swal.fire({
                title: 'Gagal!',
                text: '{{ session('error') }}',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        @endif

        // SweetAlert for delete confirmation
        document.querySelectorAll('.delete-button').forEach(button => {
            button.addEventListener('click', function (event) {
                event.preventDefault(); // Prevent default link behavior
                const url = this.dataset.url;

                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: "Anda tidak akan bisa mengembalikan ini!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        axios.delete(url)
                            .then(response => {
                                Swal.fire({
                                    title: 'Berhasil!',
                                    text: response.data.success,
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                }).then(() => {
                                    window.location.href = "{{ route('admin.tenagapengajar.index') }}";
                                });
                            })
                            .catch(error => {
                                Swal.fire({
                                    title: 'Gagal!',
                                    text: 'Terjadi kesalahan saat menghapus data.',
                                    icon: 'error',
                                    confirmButtonText: 'OK'
                                });
                            });
                    }
                });
            });
        });
    });
</script>
@endpush
