@extends('layouts.backend.app',[
	'title' => 'Edit Tenaga Pengajar',
	'contentTitle' => 'Edit Tenaga Pengajar',
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
				<a href="{{ route('admin.tenagapengajar.index') }}" class="btn btn-success btn-sm">Kembali</a>
			</div>
			<div class="card-body">
				<form method="POST" action="{{ route('admin.tenagapengajar.edit.update', $pengajar->id_tenagapengajar) }}" enctype="multipart/form-data" id="form-tenaga-pengajar">
					@csrf
					@method('PUT')
					<div class="form-group">
						<label for="name">Nama Pengajar</label>
						<input required="" class="form-control" type="text" name="nama_tenagapengajar" id="name" placeholder="" value="{{ $pengajar->nama_tenagapengajar }}">
					</div>
					<div class="form-group">
						<label for="jabatan">Jabatan</label>
						<input required="" class="form-control" type="text" name="jabatan" id="jabatan" placeholder="" value="{{ $pengajar->jabatan }}">
					</div>
					<div class="form-group">
						<label for="nip">NIP</label>
						<input required="" class="form-control" type="text" name="nip" id="nip" placeholder="" value="{{ $pengajar->nip }}">
					</div>
                    <div class="form-group">
						<label for="alamat">Alamat</label>
						<input required="" class="form-control" type="text" name="alamat" id="alamat" placeholder="" value="{{ $pengajar->alamat }}">
					</div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" name="gambar_tenagapengajar" class="dropify form-control" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" value="{{ $pengajar->gambar_tenagapengajar }}">
                            </div>
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
            } else {
                // Check for unique NIP
                $.ajax({
                    url: '{{ route("admin.tenagapengajar.checkNIP") }}', // Adjust the route name as necessary
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        nip: nip,
                        current_nip: '{{ $pengajar->nip }}' // Add current NIP to allow existing NIP
                    },
                    success: function(response) {
                        if (response.exists) {
                            Swal.fire({
                                title: 'Perhatian!',
                                text: 'NIP tidak boleh sama.',
                                icon: 'warning',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    $("#nip").val("");
                                }
                            });
                        }
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
