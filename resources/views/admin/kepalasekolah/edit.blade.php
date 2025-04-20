@extends('layouts.backend.app',[
	'title' => 'Edit Kepala Sekolah',
	'contentTitle' => 'Edit Kepala Sekolah',
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
				<a href="{{ route('admin.kepalasekolah.index') }}" class="btn btn-success btn-sm">Kembali</a>
			</div>
			<div class="card-body">
				<form method="POST" action="{{ route('admin.kepalasekolah.edit.update',$kepalasekolah->id_kepala_sekolah) }}" enctype="multipart/form-data" id="form-tenaga-pengajar">
					@csrf
					@method('PUT')
					<div class="form-group">
						<label for="name">Nama</label>
						<input required="" class="form-control" type="" name="nama" id="name" placeholder="" value="{{ $kepalasekolah->nama }}">
					</div>
					<div class="form-group">
						<label for="nip">NIP</label>
						<input required="" class="form-control" type="" name="nip" id="nip" placeholder="" value="{{ $kepalasekolah->nip }}">
					</div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar_tenagapengajar" class="dropify form-control" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" value="{{ $kepalasekolah->gambar_tenagapengajar }}">
                        </div>
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
<script type="text/javascript" src="{{ asset('plugins/summernote') }}/summernote-bs4.min.js"></script>
<script type="text/javascript" src="{{ asset('plugins/dropify') }}/dist/js/dropify.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
$(document).ready(function() {
        $('.dropify').dropify({
            messages: {
                default: 'Drag atau Drop untuk memilih gambar',
                replace: 'Ganti',
                remove:  'Hapus',
                error:   'error'
            }
        });

        $('.title').keyup(function(){
            var title = $(this).val().toLowerCase().replace(/[&\/\\#^, +()$~%.'":*?<>{}]/g,'-');
            $('.slug').val(title);
        });
		$("#nip").on("change", function() {
            var nip = $("#nip").val();

            if (isNaN(nip)) {
                Swal.fire({
                    title: 'Perhatian!',
                    text: 'NIP harus berupa angka.',
                    icon: 'warning',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $("#nip").val("");
                    }
                });
            }
        });

        $("form#form-tenaga-pengajar").submit(function(e) {
            var nip = $("#nip").val();

            if (isNaN(nip)) {
                e.preventDefault();
            }
        });
    });
</script>
@endpush