@extends('layouts.backend.app')

@section('title', 'Tambah Alumni')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Tambah Alumni</h2>
                <a href="{{ route('admin.alumni.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left me-1"></i> Kembali
                </a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <i class="fas fa-plus-circle me-1"></i> Form Tambah Alumni
        </div>
        <div class="card-body">
        <form action="{{ route('admin.alumni.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Add a hidden field for admin ID -->
            <input type="hidden" name="id_admin" value="{{ Auth::id() }}">

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Alumni <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" required>
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="tahun_lulus" class="form-label">Tahun Lulus</label>
                    <input type="number" class="form-control @error('tahun_lulus') is-invalid @enderror" id="tahun_lulus" name="tahun_lulus" value="{{ old('tahun_lulus') }}" min="1900" max="{{ date('Y') }}">
                    @error('tahun_lulus')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label">Foto Alumni</label>
                    <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto" accept="image/*">
                    <small class="text-muted">Format: JPG, JPEG, PNG, GIF. Maksimal 2MB.</small>
                    @error('foto')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi <span class="text-danger">*</span></label>
                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" rows="5" required>{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="reset" class="btn btn-secondary me-md-2">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Preview image before upload
    document.getElementById('foto').onchange = function(evt) {
        const [file] = this.files;
        if (file) {
            // You can add preview image functionality here if needed
            console.log('File selected:', file.name);
        }
    };
</script>
@endpush