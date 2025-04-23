@extends('layouts.backend.app')

@section('content')
<div class="container">
    <h2>Edit Data Siswa</h2>

    <form action="{{ route('admin.siswa.update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        @include('siswa.form', ['siswa' => $siswa])

        <button type="submit" class="btn btn-success">Perbarui</button>
        <a href="{{ route('admin.siswa.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
