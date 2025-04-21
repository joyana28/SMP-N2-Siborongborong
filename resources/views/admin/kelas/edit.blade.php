@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Data Kelas</h2>

    <form action="{{ route('kelas.update', $kelas->id) }}" method="POST">
        @csrf
        @method('PUT')

        @include('kelas.form', ['kelas' => $kelas])

        <button type="submit" class="btn btn-success">Perbarui</button>
        <a href="{{ route('kelas.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
