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

    .form-text {
        font-size: 0.875rem;
        color: #6c757d;
    }
</style>

<div class="container mt-5">
    <h2 class="mb-4 style="color: #001f3f>Edit Data Guru</h2>

    <div class="card card-custom">
        <div class="card-body">
            <form action="{{ route('admin.guru.update', $guru->id_guru) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- Input Nama --}}
                <div class="form-group">
                    <label for="nama">Nama <span class="text-danger">*</span></label>
                    <input type="text" name="nama" id="nama"
                        class="form-control @error('nama') is-invalid @enderror"
                        value="{{ old('nama', $guru->nama) }}" required>
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Input NIP --}}
                <div class="form-group">
                    <label for="nip">NIP <span class="text-danger">*</span></label>
                    <input type="text" name="nip" id="nip"
                        class="form-control @error('nip') is-invalid @enderror"
                        value="{{ old('nip', $guru->nip) }}" required>
                    @error('nip')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Dropdown Bidang --}}
                <div class="form-group">
                    <label for="bidang">Bidang <span class="text-danger">*</span></label>
                    <select name="bidang" id="bidang" class="form-control @error('bidang') is-invalid @enderror" required>
                        <option value="">-- Pilih Bidang --</option>
                        @php
                            $bidangOptions = ['Agama', 'PKN', 'Bahasa Indonesia', 'Matematika', 'IPA', 'IPS', 'Bahasa Inggris', 'Seni Budaya', 'Prakarya', 'TIK', 'Bahasa Daerah'];
                        @endphp
                        @foreach ($bidangOptions as $bidang)
                            <option value="{{ $bidang }}" {{ old('bidang', $guru->bidang) == $bidang ? 'selected' : '' }}>
                                {{ $bidang }}
                            </option>
                        @endforeach
                    </select>
                    @error('bidang')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Input No Telp --}}
                <div class="form-group">
                    <label for="no_telp">No. Telepon <span class="text-danger">*</span></label>
                    <input type="text" name="no_telp" id="no_telp"
                        class="form-control @error('no_telp') is-invalid @enderror"
                        value="{{ old('no_telp', $guru->no_telp) }}" required>
                    @error('no_telp')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Dropdown Golongan --}}
                <div class="form-group">
                    <label for="golongan">Golongan <span class="text-danger">*</span></label>
                    <select name="golongan" id="golongan" class="form-control @error('golongan') is-invalid @enderror" required>
                        <option value="">-- Pilih Golongan --</option>
                        @php
                            $golonganOptions = ['III/a', 'III/b', 'III/c', 'III/d', 'IV/a', 'IV/b', 'IV/c', 'IV/d', 'IV/e'];
                        @endphp
                        @foreach ($golonganOptions as $gol)
                            <option value="{{ $gol }}" {{ old('golongan', $guru->golongan) == $gol ? 'selected' : '' }}>{{ $gol }}</option>
                        @endforeach
                    </select>
                    @error('golongan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div><br>

                {{-- Upload Foto --}}
                <div class="form-group">
                    <label for="foto">Foto Guru</label>
                    <input type="file" name="foto" id="foto" class="form-control-file @error('foto') is-invalid @enderror" accept="image/*" onchange="previewImage()">
                    @error('foto')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                    <small class="form-text text-muted mb-2">
                        Format yang diizinkan: jpeg, jpg, png, gif. Ukuran maksimal: 2MB.
                    </small> 

                    <div class="mt-3">
                        @if ($guru->foto && file_exists(public_path('guru/' . $guru->foto)))
                            <img id="preview" src="{{ asset('guru/' . $guru->foto) }}" class="img-thumbnail" alt="Foto Guru">
                        @else
                            <img id="preview" class="img-thumbnail d-none" alt="Preview Foto">
                        @endif
                    </div>
                </div>

                {{-- Tombol Submit & Cancel --}}
                <div class="text-right mt-4">
                <button type="submit" class="btn" style="background-color: #001f3f; color: white; border-color: #001f3f;">Perbarui</button>
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
            @if (!$guru->foto || !file_exists(public_path('guru/' . $guru->foto)))
                preview.classList.add('d-none');
            @endif
        }
    }
</script>
@endpush
