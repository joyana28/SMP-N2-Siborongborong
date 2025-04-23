@extends('layouts.backend.app')

@section('content')
<div class="container">
    <h2>Tambah Data Siswa</h2>

    <form action="{{ route('admin.siswa.store') }}" method="POST">
        @csrf

        @include('siswa.form')

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.siswa.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
