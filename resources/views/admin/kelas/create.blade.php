@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Data Kelas</h2>

    <form action="{{ route('kelas.store') }}" method="POST">
        @csrf

        @include('kelas.form')

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('kelas.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
