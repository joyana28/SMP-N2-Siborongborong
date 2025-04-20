@extends('layouts.backend.app',[
    'title' => 'Edit Ekstrakurikuler',
    'contentTitle' => 'Edit Ekstrakurikuler',
])
@section('content')
@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/summernote') }}/summernote-bs4.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify') }}/dist/css/dropify.min.css">
@endpush
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('admin.ekstrakurikuler.index') }}" class="btn btn-success btn-sm">Kembali</a>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.ekstrakurikuler.edit.update', $ekstrakurikuler->id_ekstrakurikuler) }}" enctype="multipart/form-data" id="form-ekstrakurikuler">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="judul_ekstrakurikuler">Nama Ekstrakurikuler</label>
                        <input required="" class="form-control" type="text" name="judul_ekstrakurikuler" id="judul_ekstrakurikuler" placeholder="" value="{{ $ekstrakurikuler->judul_ekstrakurikuler }}">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi_ekstrakurikuler">Deskripsi</label>
                        <textarea required="" name="deskripsi_ekstrakurikuler" id="deskripsi_ekstrakurikuler" class="text-dark form-control summernote">{{ $ekstrakurikuler->deskripsi_ekstrakurikuler }}</textarea>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar_ekstrakurikuler" class="dropify form-control" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" value="{{ $ekstrakurikuler->gambar_ekstrakurikuler }}">
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="{{ asset('plugins/summernote') }}/summernote-bs4.min.js"></script>
<script type="text/javascript" src="{{ asset('plugins/dropify') }}/dist/js/dropify.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#judul_ekstrakurikuler").on("change", function() {
            var judulEkstrakurikuler = $(this).val();
            var idEkstrakurikuler = "{{ $ekstrakurikuler->id_ekstrakurikuler }}";

            $.ajax({
                url: '{{ route("admin.ekstrakurikuler.checkTitle") }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    judul_ekstrakurikuler: judulEkstrakurikuler,
                    id_ekstrakurikuler: idEkstrakurikuler
                },
                success: function(response) {
                    if (response.exists) {
                        Swal.fire({
                            title: 'Perhatian!',
                            text: 'Nama Ekstrakurikuler tidak boleh sama.',
                            icon: 'warning',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $("#judul_ekstrakurikuler").val("");
                            }
                        });
                    }
                }
            });
        });

        $(".summernote").summernote({
            height: 500,
            callbacks: {
                // callback for pasting text only (no formatting)
                onPaste: function(e) {
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
                remove: 'Hapus',
                error: 'error'
            }
        });

        $('.title').keyup(function() {
            var title = $(this).val().toLowerCase().replace(/[&\/\\#^, +()$~%.'":*?<>{}]/g, '-');
            $('.slug').val(title);
        });
    });
</script>
@endpush
