@extends('layouts.backend.app')

@section('title', 'Tambah Prestasi')

@section('content')
<style>
    .card-custom {
        border: none;
        border-left: 6px solid #0d47a1;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
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

    .form-control:focus, .form-select:focus {
        border-color: #0d47a1;
        box-shadow: 0 0 0 0.2rem rgba(13,71,161,.25);
    }

    .invalid-feedback {
        font-size: 0.875rem;
    }
</style>

<div class="container mt-5">
    <h2 class="mb-4" style="color: #001f3f">Tambah Prestasi</h2>

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
            <form action="{{ route('admin.prestasi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-3">
                    <label for="nama">Nama Prestasi</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                    @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{ old('tanggal') }}">
                    @error('tanggal') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="jenis">Jenis Prestasi</label>
                    <select class="form-select @error('jenis') is-invalid @enderror" id="jenis" name="jenis">
                        <option value="">-- Pilih Jenis --</option>
                        <option value="akademik" {{ old('jenis') == 'akademik' ? 'selected' : '' }}>Akademik</option>
                        <option value="non-akademik" {{ old('jenis') == 'non-akademik' ? 'selected' : '' }}>Non-Akademik</option>
                    </select>
                    @error('jenis') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" rows="3">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="foto">Foto Prestasi</label>
                    <input type="file" name="foto" id="foto" accept="image/*" class="form-control-file @error('foto') is-invalid @enderror" onchange="previewImage()">
                    @error('foto') 
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                    <small class="form-text text-muted">
                        Format diizinkan: jpeg, jpg, png, gif. Ukuran maksimal: 2MB.
                    </small>
                    
                    @if(isset($prestasi) && $prestasi->foto)
                        <div class="mt-2">
                            <img src="{{ asset('prestasi/' . $prestasi->foto) }}" alt="Foto Prestasi" width="200">
                        </div>
                    @endif

                    <img id="preview" src="#" alt="Preview Foto" class="d-none mt-2" style="max-height: 200px;" />
                </div>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary-custom">Simpan</button>
                    <a href="{{ route('admin.prestasi.index') }}" class="btn btn-secondary-custom ml-2">Kembali</a>
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
