@extends('layouts.app')

@section('content')
    <h1>Products List</h1>

    <ul>
        @foreach ($products as $product)
            <li>
                <a href="{{ route('products.show', $product->slug) }}">
                    {{ $product->namaProduk }} - {{ $product->kategoriProduk->namaKategori }} - Rp.
                    {{ number_format($product->hargaProduk, 0, ',', '.') }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
