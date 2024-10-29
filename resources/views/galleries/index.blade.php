@extends('layouts.app')

@section('content')
<h1>Photo Galleries</h1>

<div class="gallery-list">
    @foreach($galleries as $gallery)
    <div class="gallery-item">
        <h2><a href="{{ route('galleries.show', $gallery->slug) }}">{{ $gallery->namaFoto }}</a></h2>
        <img src="{{ asset('storage/' . $gallery->pathFoto) }}" alt="{{ $gallery->namaFoto }}">
        <p>{{ $gallery->deskripsiFoto }}</p>
    </div>
    @endforeach
</div>
@endsection