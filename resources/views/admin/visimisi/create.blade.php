@extends('layouts.app') <!-- Kalau pakai layout -->

@section('content')
<div class="container">
    <h2>Input Visi dan Misi</h2>
    <form action="{{ route('visi-misi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="visi" class="form-label">Visi</label>
            <textarea class="form-control" id="visi" name="visi" required></textarea>
        </div>
        <div class="mb-3">
            <label for="misi" class="form-label">Misi</label>
            <textarea class="form-control" id="misi" name="misi" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
