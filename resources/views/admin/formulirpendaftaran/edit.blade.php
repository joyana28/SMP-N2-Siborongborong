@extends('layouts.backend.app')

@section('content')
<div class="container">
    <h1>Edit Formulir Pendaftaran</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('admin.formulirpendaftaran.update', $formulir->id_pendaftaran) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Admin</label>
            <select name="id_admin" class="form-control">
                @foreach($admins as $admin)
                    <option value="{{ $admin->id_admin }}" {{ $formulir->id_admin == $admin->id_admin ? 'selected' : '' }}>
                        {{ $admin->nama }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ old('deskripsi', $formulir->deskripsi) }}</textarea>
        </div>
        <div class="form-group">
            <label>Formulir Saat Ini</label><br>
            @if($formulir->formulir_pendaftaran)
                <a href="{{ asset('storage/' . $formulir->formulir_pendaftaran) }}" target="_blank">Lihat File</a>
            @endif
        </div>
        <div class="form-group">
            <label>Ganti Formulir (PDF)</label>
            <input type="file" name="formulir_pendaftaran" class="form-control-file" accept=".pdf">
        </div>
        <div class="form-group">
            <label>Tanggal Terbit</label>
            <input type="date" name="tanggal_terbit" class="form-control" value="{{ old('tanggal_terbit', $formulir->tanggal_terbit->format('Y-m-d')) }}">
        </div>
        <div class="form-group">
            <label>Tanggal Berakhir</label>
            <input type="date" name="tanggal_berakhir" class="form-control" value="{{ old('tanggal_berakhir', $formulir->tanggal_berakhir->format('Y-m-d')) }}">
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
