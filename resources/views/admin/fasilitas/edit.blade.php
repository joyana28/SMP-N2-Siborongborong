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
    }

    #preview:hover {
        transform: scale(1.03);
        border-color: #ffb300;
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
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $fasilitas->nama) }}" required>
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required>{{ old('deskripsi', $fasilitas->deskripsi) }}</textarea>
                </div>
                <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <input type="text" class="form-control" id="tahun" name="tahun" value="{{ old('tahun', $fasilitas->tahun) }}" required>
                </div>

                <div class="form-group">
                    <label for="perhatian_teknis">Perhatian Teknis</label>
                    <input type="text" class="form-control" id="perhatian_teknis" name="perhatian_teknis" value="{{ old('perhatian_teknis', $fasilitas->perhatian_teknis) }}">
                </div>

                <div class="form-group">
                    <label for="penambahan">Penambahan</label>
                    <input type="text" class="form-control" id="penambahan" name="penambahan" value="{{ old('penambahan', $fasilitas->penambahan) }}">
                </div>
                <div class="form-group">
                    <label for="foto">Foto Fasilitas</label>
                    <input type="file" class="form-control-file" id="foto" name="foto" accept="image/*" onchange="previewImage()">
                    @if($fasilitas->foto)
                        <div class="mt-3">
                            <p>Foto saat ini:</p>
                            <img src="{{ asset('storage/fasilitas/' . $fasilitas->foto) }}" alt="Foto Fasilitas" class="img-thumbnail mb-2" style="max-height: 200px;">
                        </div>
                    @endif
                    <img id="preview" class="img-thumbnail d-none" style="max-height: 200px;">
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
