@extends('layouts.backend.app')

@section('title', 'Tambah Fasilitas')

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
        border-color: #08306b;
    }

    .btn-secondary-custom {
        background-color: #b0bec5;
        border: none;
    }

    .btn-secondary-custom:hover {
        background-color: #90a4ae;
    }

    label {
        font-weight: 600;
        color: #0d47a1;
    }

    input:focus, textarea:focus, select:focus {
        border-color: #0d47a1;
        box-shadow: 0 0 0 0.2rem rgba(13,71,161,.25);
    }

    .form-control-file {
        padding: 10px;
    }

    #preview {
        transition: 0.3s ease;
        border: 2px dashed #0d47a1;
        max-height: 200px;
    }

    #preview:hover {
        transform: scale(1.03);
        border-color: #ffb300;
    }
</style>

<div class="container mt-5">
    <h2 class="mb-4 text-primary">Tambah Fasilitas</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Terjadi kesalahan:</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card card-custom">
        <div class="card-body">
            <form action="{{ route('admin.fasilitas.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="nama">Nama Fasilitas</label>
                    <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" required>
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="4" required>{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="tahun">Pilih Tahun</label>
                    <input type="text" name="tahun" id="tahun" class="form-control @error('tahun') is-invalid @enderror" value="{{ old('tahun') }}" autocomplete="off" required>
                    @error('tahun')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="perhatian_teknis">Perhatian Teknis</label>
                    <small class="form-text text-muted mb-2">
                        Perhatian teknis merupakan kondisi jumlah fasilitas yang mengalami kerusakan dan memerlukan perbaikan (opsional).
                    </small>
                    <input type="text" name="perhatian_teknis" id="perhatian_teknis" class="form-control @error('perhatian_teknis') is-invalid @enderror" value="{{ old('perhatian_teknis') }}">
                    @error('perhatian_teknis')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="penambahan">Penambahan</label>
                    <small class="form-text text-muted mb-2">
                        Penambahan merupakan jumlah fasilitas yang bertambah (opsional).
                    </small>
                    <input type="text" name="penambahan" id="penambahan" class="form-control @error('penambahan') is-invalid @enderror" value="{{ old('penambahan') }}">
                    @error('penambahan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div> <br>

                <div class="form-group">
                    <label for="foto">Foto Fasilitas</label>
                    <input type="file" name="foto" id="foto" accept="image/*" class="form-control-file @error('foto') is-invalid @enderror" onchange="previewImage()">
                    @error('foto')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                    <small class="form-text text-muted">Format: JPG, JPEG, PNG. Maks 2MB.</small>
                    <div class="mt-3">
                        <img id="preview" class="img-thumbnail d-none" alt="Preview Foto Fasilitas">
                    </div>
                </div>

                <div class="text-right mt-4">
                    <button type="submit" class="btn btn-primary-custom">Simpan</button>
                    <a href="{{ route('admin.fasilitas.index') }}" class="btn btn-secondary-custom ml-2">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
@endpush

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        $('#tahun').datepicker({
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years",
            autoclose: true,
            startDate: new Date(2000, 0, 1),   
            endDate: new Date()
        });

        function previewImage() {
            const file = document.getElementById('foto').files[0];
            const preview = document.getElementById('preview');

            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    preview.src = e.target.result;
                    preview.classList.remove('d-none');
                };
                reader.readAsDataURL(file);
            }
        }
    </script>
@endpush
