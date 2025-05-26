@extends('layouts.backend.app')

@section('title', 'Edit Data Prestasi')

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

    input:focus, textarea:focus, select:focus {
        border-color: #0d47a1;
        box-shadow: 0 0 0 0.2rem rgba(13,71,161,.25);
    }

    #preview {
        transition: 0.3s ease;
        border: 2px dashed #0d47a1;
        max-height: 200px;
        cursor: pointer;
    }

    #preview:hover {
        transform: scale(1.03);
        border-color: #ffb300;
    }

    .invalid-feedback {
        font-size: 0.875rem;
    }
</style>

<div class="container mt-5">
    <h2 class="mb-4 text-primary">Edit Data Prestasi</h2>

    <div class="card card-custom">
        <div class="card-body">
            <form action="{{ route('admin.prestasi.update', $prestasi->id_prestasi) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="nama">Nama Prestasi <span class="text-danger">*</span></label>
                    <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $prestasi->nama ?? $prestasi->judul) }}" required>
                    @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="tanggal">Tanggal Prestasi <span class="text-danger">*</span></label>
                    <input type="date" name="tanggal" id="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal', $prestasi->tanggal) }}" required>
                    @error('tanggal') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="jenis">Jenis Prestasi <span class="text-danger">*</span></label>
                    <select name="jenis" id="jenis" class="form-select @error('jenis') is-invalid @enderror" required>
                        <option value="">-- Pilih Jenis --</option>
                        <option value="akademik" {{ old('jenis', $prestasi->jenis) == 'akademik' ? 'selected' : '' }}>Akademik</option>
                        <option value="non-akademik" {{ old('jenis', $prestasi->jenis) == 'non-akademik' ? 'selected' : '' }}>Non-Akademik</option>
                    </select>
                    @error('jenis') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="deskripsi">Deskripsi <span class="text-danger">*</span></label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="4" required>{{ old('deskripsi', $prestasi->deskripsi) }}</textarea>
                    @error('deskripsi') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="foto">Foto Prestasi</label>
                    <input type="file" name="foto" id="foto" class="form-control-file @error('foto') is-invalid @enderror" accept="image/*" onchange="previewImage()">
                    @error('foto') 
                        <div class="invalid-feedback d-block">{{ $message }}</div> 
                    @enderror
                    <small class="form-text text-muted">Format: JPG, JPEG, PNG. Maks 2MB.</small>
                    <div class="mt-3">
                        {{-- Tampilkan foto lama sebagai preview awal --}}
                    <img 
                        id="preview" 
                        src="{{ $prestasi->foto ? asset('prestasi/' . $prestasi->foto) : '' }}" 
                        alt="Preview Foto Prestasi" 
                        class="img-thumbnail {{ $prestasi->foto ? '' : 'd-none' }}"
                        style="max-height: 200px;"
                    >
                    </div>
                </div>

                <div class="text-right mt-4">
                    <button type="submit" class="btn btn-primary-custom">Perbarui</button>
                    <a href="{{ route('admin.prestasi.index') }}" class="btn btn-warning-custom ml-2">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    const preview = document.getElementById('preview');
    const initialSrc = preview.src;

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
        if(initialSrc) {
            preview.src = initialSrc;
            preview.classList.remove('d-none');
        } else {
            preview.src = '';
            preview.classList.add('d-none');
        }
    }
}

</script>
@endpush
