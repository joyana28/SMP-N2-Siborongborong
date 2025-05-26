@extends('layouts.backend.app')

@section('title', 'Edit Pengumuman')

@section('content')
<style>
    body {
        background-color: #f4f6f8;
    }

    .card-custom {
        border: none;
        border-left: 6px solid #0d47a1;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .btn-primary-custom {
        background-color: #0d47a1;
        border: none;
    }

    .btn-primary-custom:hover {
        background-color: #08306b;
    }

    .btn-warning-custom {
        background-color: #ffb300;
        color: #000;
        border: none;
    }

    .btn-warning-custom:hover {
        background-color: #ffa000;
        color: #000;
    }

    label {
        font-weight: 600;
        color: #0d47a1;
    }

    input:focus,
    textarea:focus {
        border-color: #0d47a1;
        box-shadow: 0 0 0 0.2rem rgba(13, 71, 161, .25);
    }

    #preview {
        transition: 0.3s ease;
        border: 2px dashed #0d47a1;
        max-height: 200px;
        max-width: 100%;
        display: none;
        margin-top: 10px;
    }

    #preview:hover {
        transform: scale(1.03);
        border-color: #ffb300;
    }
</style>

<div class="container mt-5">
    <h2 class="mb-4 text-primary">Edit Pengumuman</h2>

    <div class="card card-custom">
        <div class="card-body">
            <form action="{{ route('admin.pengumuman.update', $pengumuman->id_pengumuman) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="judul">Judul <span class="text-danger">*</span></label>
                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul', $pengumuman->judul) }}" required>
                    @error('judul') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="isi">Isi <span class="text-danger">*</span></label>
                    <textarea name="isi" class="form-control @error('isi') is-invalid @enderror" rows="4" required>{{ old('isi', $pengumuman->isi) }}</textarea>
                    @error('isi') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="tanggal_terbit">Tanggal Terbit <span class="text-danger">*</span></label>
                    <input type="date" name="tanggal_terbit" class="form-control @error('tanggal_terbit') is-invalid @enderror" value="{{ old('tanggal_terbit', $pengumuman->tanggal_terbit) }}" required>
                    @error('tanggal_terbit') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="tanggal_berakhir">Tanggal Berakhir <span class="text-danger">*</span></label>
                    <input type="date" name="tanggal_berakhir" class="form-control @error('tanggal_berakhir') is-invalid @enderror" value="{{ old('tanggal_berakhir', $pengumuman->tanggal_berakhir) }}" required>
                    @error('tanggal_berakhir') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div> <br>

                <div class="form-group">
                    <label for="foto">Ganti Foto Pengumuman (Opsional)</label>
                    <input type="file" name="foto" id="foto" class="form-control-file @error('foto') is-invalid @enderror" accept="image/*" onchange="previewImage()">
                    @error('foto') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                    <small class="form-text text-muted">Format: JPG, JPEG, PNG. Maks: 2MB.</small>
                    <img id="preview" class="img-thumbnail">
                </div> <br>

                <div class="form-group">
                    <label for="lampiran">Ganti Lampiran (Opsional)</label>
                    <small class="form-text text-muted">PDF, DOC/DOCX, XLS/XLSX. Maks: 5MB.</small>
                    <input type="file" name="lampiran" id="lampiran" class="form-control @error('lampiran') is-invalid @enderror" accept=".pdf,.doc,.docx,.xls,.xlsx">
                    @error('lampiran') <div class="invalid-feedback">{{ $message }}</div> @enderror

                    @if ($pengumuman->lampiran)
                        <small class="form-text text-muted mt-2">
                            Lampiran saat ini: 
                            <a href="{{ asset('pengumuman/lampiran/' . $pengumuman->lampiran) }}" target="_blank">{{ $pengumuman->lampiran }}</a>
                        </small>
                    @endif
                </div>

                <div class="text-right mt-4">
                    <button type="submit" class="btn btn-primary-custom">Perbarui</button>
                    <a href="{{ route('admin.pengumuman.index') }}" class="btn btn-warning-custom ml-2">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function previewImage() {
        const input = document.getElementById('foto');
        const preview = document.getElementById('preview');

        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endpush
