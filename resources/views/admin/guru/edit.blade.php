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
        max-height: 200px;
    }

    #preview:hover {
        transform: scale(1.03);
        border-color: #ffb300;
    }

    .form-text {
        font-size: 0.875rem;
        color: #6c757d;
    }
</style>

<div class="container mt-5">
    <h2 class="mb-4 text-primary">Edit Data Guru</h2>

    <div class="card card-custom">
        <div class="card-body">
            <form action="{{ route('admin.guru.update', $guru->id_guru) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                @foreach (['nama' => 'Nama', 'nip' => 'NIP', 'golongan' => 'Golongan', 'bidang' => 'Bidang', 'no_telp' => 'No. Telepon'] as $field => $label)
                    <div class="form-group">
                        <label for="{{ $field }}">{{ $label }}{{ $field === 'nama' ? ' *' : '' }}</label>
                        <input type="text" name="{{ $field }}" id="{{ $field }}"
                            class="form-control @error($field) is-invalid @enderror"
                            value="{{ old($field, $guru->$field) }}" {{ $field === 'nama' ? 'required' : '' }}>
                        @error($field)
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                @endforeach

                <div class="form-group">
                    <label for="foto">Foto Guru</label>
                    <input type="file" name="foto" id="foto" class="form-control-file @error('foto') is-invalid @enderror" accept="image/*" onchange="previewImage()">
                    @error('foto') 
                        <div class="invalid-feedback d-block">{{ $message }}</div> 
                    @enderror
                    <small class="form-text">Format: JPG, JPEG, PNG. Maksimal 2MB.</small>

                    <div class="mt-3">
                        @if ($guru->foto)
                            <p class="mb-1">Foto saat ini:</p>
                            <img src="{{ asset('guru/' . $guru->foto) }}" width="120" class="img-thumbnail mb-2" alt="Foto Guru">
                        @endif
                        <img id="preview" class="img-thumbnail d-none">
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
