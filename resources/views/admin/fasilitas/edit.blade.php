@extends('layouts.backend.app',[
	'title' => 'Edit Fasilitas',
	'contentTitle' => 'Edit Fasilitas',
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
				<a href="{{ route('admin.fasilitas.index') }}" class="btn btn-success btn-sm">Kembali</a>
			</div>
			<div class="card-body">
				<form method="POST" action="{{ route('admin.fasilitas.edit.update', $fasilitas->id_fasilitas) }}" enctype="multipart/form-data" id="form-fasilitas">
					@csrf
					@method('PUT')
					<div class="form-group">
						<label for="name">Nama Fasilitas</label>
						<input required="" class="form-control" type="text" name="nama_fasilitas" id="nama_fasilitas" placeholder="" value="{{ $fasilitas->nama_fasilitas }}">
					</div>
					<div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea required="" name="deskripsi_fasilitas" id="deskripsi" class="text-dark form-control summernote">{{ $fasilitas->deskripsi_fasilitas }}</textarea>
                    </div>
					<div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" name="gambar_fasilitas" class="dropify form-control" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" data-default-file="{{ asset('uploads/fasilitas/' . $fasilitas->gambar_fasilitas) }}">
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
	$(".summernote").summernote({
            height:500,
            callbacks: {
                onPaste: function (e) {
                    var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                    e.preventDefault();
                    bufferText = bufferText.replace(/\r?\n/g, '<br>');
                    document.execCommand('insertHtml', false, bufferText);
                }
            }
        });

        $(".summernote").on("summernote.enter", function(we, e) {
            $(this).summernote("pasteHTML", "<br><br>");
            e.preventDefault();
        });

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

        $("#nama_fasilitas").on("change", function() {
            var nama_fasilitas = $("#nama_fasilitas").val();
            var id_fasilitas = {{ $fasilitas->id_fasilitas }};

            $.ajax({
                url: '{{ route("admin.fasilitas.checkName") }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    nama_fasilitas: nama_fasilitas,
                    id_fasilitas: id_fasilitas // Send the current ID to exclude it from the uniqueness check
                },
                success: function(response) {
                    if (response.exists) {
                        Swal.fire({
                            title: 'Perhatian!',
                            text: 'Nama Fasilitas tidak boleh sama.',
                            icon: 'warning',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $("#nama_fasilitas").val("");
                            }
                        });
                    }
                }
            });
        });

        $("form#form-fasilitas").submit(function(e) {
            var nama_fasilitas = $("#nama_fasilitas").val();

            if (nama_fasilitas == "") {
                e.preventDefault();
                Swal.fire({
                    title: 'Perhatian!',
                    text: 'Nama Fasilitas tidak boleh sama.',
                    icon: 'warning',
                    confirmButtonText: 'OK'
                });
            }
        });
    });
</script>
@endpush
