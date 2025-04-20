@extends('layouts.backend.app',[
	'title' => 'Edit Jumlah Siswa',
	'contentTitle' => 'Edit Jumlah Siswa',
])

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/summernote') }}/summernote-bs4.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify') }}/dist/css/dropify.min.css">
@endpush
@section('content')
<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-header">
				<a href="{{ route('admin.jumlah_siswa.index') }}" class="btn btn-success btn-sm">Kembali</a>
			</div>
			<div class="card-body">
				<form method="POST" action="{{ route('admin.jumlah_siswa.edit.update',$jumlah_siswa->id_jumlah_siswa) }}" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="form-group">
						<label for="name">Jumlah Siswa Laki-Laki</label>
						<input required="" class="form-control" type="" name="jumlah_siswa_laki_laki" id="jumlah_siswa_laki_laki" placeholder="" value="{{ $jumlah_siswa->jumlah_siswa_laki_laki }}">
					</div>
					<div class="form-group">
						<label for="nip">Jumlah Siswa Perempuan</label>
						<input required="" class="form-control" type="" name="jumlah_siswa_perempuan" id="jumlah_siswa_perempuan" placeholder="" value="{{ $jumlah_siswa->jumlah_siswa_perempuan }}">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-sm">UPDATE</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@stop
@push('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#jumlah_siswa_laki_laki, #jumlah_siswa_perempuan").on("change", function() {
            var jumlahSiswaLakiLaki = $("#jumlah_siswa_laki_laki").val();
            var jumlahSiswaPerempuan = $("#jumlah_siswa_perempuan").val();

            if (isNaN(jumlahSiswaLakiLaki) || isNaN(jumlahSiswaPerempuan)) {
                Swal.fire({
                    title: 'Perhatian!',
                    text: 'Jumlah siswa harus berupa angka.',
                    icon: 'warning',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $("#jumlah_siswa_laki_laki, #jumlah_siswa_perempuan").val("");
                    }
                });
            }
        });

        $("form#form-jumlah-siswa").submit(function(e) {
            var jumlahSiswaLakiLaki = $("#jumlah_siswa_laki_laki").val();
            var jumlahSiswaPerempuan = $("#jumlah_siswa_perempuan").val();

            if (isNaN(jumlahSiswaLakiLaki) || isNaN(jumlahSiswaPerempuan)) {
                e.preventDefault();
            }
        });
    });
</script>
@endpush