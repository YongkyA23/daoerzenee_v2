@extends('layouts.frontend.master')

@section('content')
<section class="category">
    <div class="container">
        <h1>{{ $category->namaKategori }}</h1>
        <p>{{ $category->deskripsiKategori }}</p>

        <ul>
            @foreach ($category->produk as $product)
            <li>
                <a href="{{ route('categories.show', $product->slug) }}">
                    {{ $product->namaProduk }} - Rp. {{ number_format($product->hargaProduk, 0, ',', '.') }}
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</section>
@endsection