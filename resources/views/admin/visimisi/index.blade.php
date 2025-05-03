@extends('layouts.frontend.app') 

@section('content')
<div class="container">
    <h2>Data Visi dan Misi</h2>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @foreach ($data as $item)
        <h4>Visi</h4>
        <p>{{ $item->visi }}</p>
        <h4>Misi</h4>
        <p>{{ $item->misi }}</p>
        <hr>
    @endforeach
</div>
@endsection
