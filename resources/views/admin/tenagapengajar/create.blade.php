@extends('layouts.backend.app',[
    'title' => 'Tambah Tenaga Pengajar',
    'contentTitle' => 'Tambah Tenaga Pengajar',
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
                <form method="POST" action="{{ route('admin.tenagapengajar.store') }}" enctype="multipart/form-data" id="form-tenaga-pengajar">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama Pengajar</label>
                        <input required="" class="form-control" type="" name="nama_tenagapengajar" id="name" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input required="" class="form-control" type="" name="jabatan" id="jabatan" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input required="" class="form-control" type="" name="nip" id="nip" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input required="" class="form-control" type="" name="alamat" id="alamat" placeholder="">
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" name="gambar_tenagapengajar" class="dropify form-control" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">SIMPAN</button>
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
    $(".summernote").summernote({
        height:500,
        callbacks: {
        // callback for pasting text only (no formatting)
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
                    nip: nip
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
