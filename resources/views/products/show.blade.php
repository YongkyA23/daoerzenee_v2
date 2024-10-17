@extends('layouts.app')

@section('content')
    <h1>{{ $product->namaProduk }}</h1>
    <p>{{ $product->deskripsiProduk }}</p>
    <p>Category: {{ $product->kategoriProduk->namaKategori }}</p>
    <p>Price: Rp. {{ number_format($product->hargaProduk, 0, ',', '.') }}</p>
    <img src="{{ asset('storage/' . $product->fotoProduk) }}" alt="{{ $product->namaProduk }}">
@endsection
