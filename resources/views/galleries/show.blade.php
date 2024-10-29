@extends('layouts.app')

@section('content')
<h1>{{ $gallery->namaFoto }}</h1>

<div class="gallery-details">
    <img src="{{ asset('storage/' . $gallery->pathFoto) }}" alt="{{ $gallery->namaFoto }}">
    <p>{{ $gallery->deskripsiFoto }}</p>
    <p>Category: {{ $gallery->kategoriFoto->namaKategoriFoto }}</p>
</div>

<a href="{{ route('galleries.index') }}">Back to Galleries</a>
@endsection