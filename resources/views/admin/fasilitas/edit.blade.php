@extends('layouts.backend.app')

@section('title', 'Edit Fasilitas')

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
        max-height: 200px;
    }

    #preview:hover {
        transform: scale(1.03);
        border-color: #ffb300;
    }

    .text-danger {
        margin-top: 4px;
        font-size: 0.875rem;
    }
</style>

<div class="container mt-5">
    <h2 class="mb-4 text-primary">Edit Data Fasilitas</h2>

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
            <form action="{{ route('admin.fasilitas.update', $fasilitas->id_fasilitas) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nama">Nama Fasilitas</label>
                    <input
                        type="text"
                        class="form-control"
                        id="nama"
                        name="nama"
                        value="{{ old('nama', $fasilitas->nama) }}"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea
                        class="form-control"
                        id="deskripsi"
                        name="deskripsi"
                        rows="4"
                        required
                    >{{ old('deskripsi', $fasilitas->deskripsi) }}</textarea>
                </div>

                <div class="form-group">
                    <label for="tahun">Pilih Tahun</label>
                    <input
                        type="text"
                        name="tahun"
                        id="tahun"
                        class="form-control @error('tahun') is-invalid @enderror"
                        value="{{ old('tahun', $fasilitas->tahun) }}"
                        autocomplete="off"
                        required
                    >
                    @error('tahun')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="perhatian_teknis">Perhatian Teknis</label>
                    <small class="form-text text-muted mb-2">
                        Perhatian teknis merupakan kondisi jumlah fasilitas yang mengalami kerusakan dan memerlukan perbaikan (opsional).
                    </small>
                    <input
                        type="text"
                        class="form-control"
                        id="perhatian_teknis"
                        name="perhatian_teknis"
                        value="{{ old('perhatian_teknis', $fasilitas->perhatian_teknis) }}"
                    >
                </div>

                <div class="form-group">
                    <label for="penambahan">Penambahan</label>
                    <small class="form-text text-muted mb-2">
                        Penambahan merupakan jumlah fasilitas yang bertambah (opsional).
                    </small>
                    <input
                        type="text"
                        class="form-control"
                        id="penambahan"
                        name="penambahan"
                        value="{{ old('penambahan', $fasilitas->penambahan) }}"
                    >
                </div> <br>

                <div class="form-group">
                    <label for="foto">Foto Fasilitas</label>
                    <input
                        type="file"
                        id="foto"
                        name="foto"
                        class="form-control-file @error('foto') is-invalid @enderror"
                        accept="image/*"
                        onchange="previewImage()"
                    >
                    @error('foto')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                    <small class="form-text text-muted mb-2">
                        Format yang diizinkan: jpeg, jpg, png, gif. Ukuran maksimal: 2MB.
                    </small>                    <div class="mt-3">
                        <img id="preview" class="img-thumbnail d-none" style="max-height: 200px;" alt="Preview Foto Baru">
                    </div>
                </div>

                <div class="text-right mt-4">
                    <button type="submit" class="btn btn-primary-custom">Perbarui</button>
                    <a href="{{ route('admin.fasilitas.index') }}" class="btn btn-warning-custom ml-2">Batal</a>
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
        $(document).ready(function() {
            $('#tahun').datepicker({
                format: "yyyy",
                viewMode: "years",
                minViewMode: "years",
                autoclose: true,
                startDate: new Date(2000, 0, 1),
                endDate: new Date()
            });
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
            } else {
                preview.src = '';
                preview.classList.add('d-none');
            }
        }
    </script>
@endpush
