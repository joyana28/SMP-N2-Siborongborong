@extends('layouts.backend.app')

@section('title', 'Edit Kepala Sekolah')

@section('content')
<style>
    body {
        background-color: #f4f6f8;
    }

    .card-custom {
        border: none;
        border-left: 6px solid #0d47a1;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
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

    input:focus, textarea:focus {
        border-color: #0d47a1;
        box-shadow: 0 0 0 0.2rem rgba(13,71,161,.25);
    }

    #preview {
        transition: 0.3s ease;
        border: 2px dashed #0d47a1;
    }

    #preview:hover {
        transform: scale(1.03);
        border-color: #ffb300;
    }
</style>

<div class="container mt-5">
    <h2 class="mb-4 style="color: #001f3f>Edit Data Kepala Sekolah</h2>

    <div class="card card-custom">
        <div class="card-body">
            <form action="{{ route('admin.kepala_sekolah.update', $kepalaSekolah->id_kepsek) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nama">Nama <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $kepalaSekolah->nama) }}" required>
                    @error('nama') 
                        <div class="invalid-feedback">{{ $message }}</div> 
                    @enderror
                </div>

                <div class="form-group">
                    <label for="nip">NIP <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" value="{{ old('nip', $kepalaSekolah->nip) }}" required>
                    @error('nip') 
                        <div class="invalid-feedback">{{ $message }}</div> 
                    @enderror
                </div>

                <div class="form-group">
                    <label for="golongan">Golongan</label>
                    <select class="form-control @error('golongan') is-invalid @enderror" id="golongan" name="golongan">
                        <option value="">-- Pilih Golongan --</option>
                        @foreach(['III/a', 'III/b', 'III/c', 'III/d', 'IV/a', 'IV/b', 'IV/c', 'IV/d', 'IV/e'] as $golongan)
                            <option value="{{ $golongan }}" {{ old('golongan', $kepalaSekolah->golongan) == $golongan ? 'selected' : '' }}>{{ $golongan }}</option>
                        @endforeach
                    </select>
                    @error('golongan') 
                        <div class="invalid-feedback">{{ $message }}</div> 
                    @enderror
                </div>

                <div class="form-group">
                    <label for="periode">Periode <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('periode') is-invalid @enderror" id="periode" name="periode" value="{{ old('periode', $kepalaSekolah->periode) }}" required>
                    @error('periode') 
                        <div class="invalid-feedback">{{ $message }}</div> 
                    @enderror
                </div>

                <div class="form-group mt-4">
                    <label>Foto Kepala Sekolah</label>
                    <input type="file" name="foto" class="form-control-file @error('foto') is-invalid @enderror" accept="image/*" onchange="previewImage()">
                    @error('foto') 
                        <div class="invalid-feedback d-block">{{ $message }}</div> 
                    @enderror
                    <small class="form-text text-muted mb-2">
                        Format yang diizinkan: jpeg, jpg, png, gif. Ukuran maksimal: 2MB.
                    </small>

                    {{-- Preview gambar baru --}}
                    <div class="mt-3">
                        <img id="preview" class="img-thumbnail d-none" style="max-height: 200px;">
                    </div>
                </div>

                <div class="text-right mt-4">
                <button type="submit" class="btn" style="background-color: #001f3f; color: white; border-color: #001f3f;">Perbarui</button>
                    <a href="{{ route('admin.kepala_sekolah.index') }}" class="btn btn-warning-custom ml-2">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function previewImage() {
        const input = document.querySelector('input[name="foto"]');
        const preview = document.getElementById('preview');
        const file = input.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('d-none');
            };
            reader.readAsDataURL(file);
        } else {
            preview.classList.add('d-none');
            preview.src = '';
        }
    }
</script>
@endpush
