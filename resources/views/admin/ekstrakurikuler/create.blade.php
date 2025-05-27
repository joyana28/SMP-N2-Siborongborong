@extends('layouts.backend.app')

@section('title', 'Tambah Ekstrakurikuler')

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
        color: #fff !important;
    }

    .btn-primary-custom:hover {
        background-color: #08306b;
    }

    .btn-secondary-custom {
        background-color: #b0bec5;
        border: none;
        color: #fff !important;
    }

    .btn-secondary-custom:hover {
        background-color: #90a4ae;
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
        max-width: 200px;
    }

    #preview:hover {
        transform: scale(1.03);
        border-color: #ffb300;
    }
</style>

<div class="container mt-5">
    <h2 class="mb-4 text-primary">Tambah Ekstrakurikuler</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card card-custom">
        <div class="card-body">
            <form action="{{ route('admin.ekstrakurikuler.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="nama">Nama Ekstrakurikuler <span class="text-danger">*</span></label>
                    <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" required autofocus>
                    @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="4" placeholder="Tulis deskripsi kegiatan">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="pembina">Nama Pembina <span class="text-danger">*</span></label>
                    <input type="text" name="pembina" id="pembina" class="form-control @error('pembina') is-invalid @enderror" value="{{ old('pembina') }}" required>
                    @error('pembina') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="jadwal">Jadwal Kegiatan <span class="text-danger">*</span></label>
                    <input type="text" name="jadwal" id="jadwal" class="form-control @error('jadwal') is-invalid @enderror" value="{{ old('jadwal') }}" required>
                    @error('jadwal') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group mt-4">
                    <label for="foto">Foto Ekstrakurikuler</label>
                    <input type="file" name="foto" id="foto" accept="image/*" onchange="previewImage()" class="form-control-file @error('foto') is-invalid @enderror">
                    @error('foto') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                    <small class="form-text text-muted">Format yang diizinkan: jpeg, jpg, png, gif. Maks: 2MB.</small>
                </div>

                <div class="mt-3">
                    <img id="preview" class="img-thumbnail d-none" alt="Preview Foto Ekstrakurikuler">
                </div>

                <div class="text-right mt-4">
                    <button type="submit" class="btn btn-primary-custom">Simpan</button>
                    <a href="{{ route('admin.ekstrakurikuler.index') }}" class="btn btn-secondary-custom ml-2">Kembali</a>
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
                preview.classList.remove('d-none');
            };
            reader.readAsDataURL(input.files[0]);
        } else {
            preview.classList.add('d-none');
            preview.src = '';
        }
    }
</script>
@endpush
