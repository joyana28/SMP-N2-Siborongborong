@extends('layouts.backend.app')

@section('title', 'Edit Guru')

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
    <h2 class="mb-4 text-primary">Edit Data Guru</h2>

    <div class="card card-custom">
        <div class="card-body">
            <form action="{{ route('admin.guru.update', $guru->id_guru) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nama">Nama <span class="text-danger">*</span></label>
                    <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $guru->nama) }}" required>
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="text" name="nip" id="nip" class="form-control @error('nip') is-invalid @enderror" value="{{ old('nip', $guru->nip) }}">
                    @error('nip')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="golongan">Golongan</label>
                    <input type="text" name="golongan" id="golongan" class="form-control @error('golongan') is-invalid @enderror" value="{{ old('golongan', $guru->golongan) }}">
                    @error('golongan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="bidang">Bidang</label>
                    <input type="text" name="bidang" id="bidang" class="form-control @error('bidang') is-invalid @enderror" value="{{ old('bidang', $guru->bidang) }}">
                    @error('bidang')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="no_telp">No. Telepon</label>
                    <input type="text" name="no_telp" id="no_telp" class="form-control @error('no_telp') is-invalid @enderror" value="{{ old('no_telp', $guru->no_telp) }}">
                    @error('no_telp')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="foto">Foto Guru</label>
                    <input type="file" name="foto" id="foto" class="form-control-file @error('foto') is-invalid @enderror" accept="image/*" onchange="previewImage()">
                    @error('foto')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                    <small class="form-text text-muted">Format: JPG, JPEG, PNG. Maks 2MB.</small>

                    <div class="mt-3">
                        @if($guru->foto)
                            <p>Foto saat ini:</p>
                            <img src="{{ asset('storage/guru/'.$guru->foto) }}" alt="{{ $guru->nama }}" class="img-thumbnail mb-2" style="max-height: 200px;">
                        @endif
                        <img id="preview" class="img-thumbnail d-none" style="max-height: 200px;">
                    </div>
                </div>

                <div class="text-right mt-4">
                    <button type="submit" class="btn btn-primary-custom">Perbarui</button>
                    <a href="{{ route('admin.guru.index') }}" class="btn btn-warning-custom ml-2">Batal</a>
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
        }
    }
</script>
@endpush
