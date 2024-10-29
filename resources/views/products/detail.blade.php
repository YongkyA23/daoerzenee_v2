@extends('layouts.frontend.master')
@section('content')
<div class="detail-produk">
    <div class="section-detail-produk mt-5">
        {{-- Foto --}}
        <div class="container-fotodetail">
            <div class="group-fotodetail">
                <img id="main-photo" src="{{ asset('storage/' . $product->images->first()->pathFoto) }}" alt="fotoooo"
                    class="produkdetail-foto">
                <div class="image-gallery">
                    @foreach ($product->images as $image)
                    <div>
                        <img src="{{ asset('storage/' . $image->pathFoto) }}" alt="image 1" class="thumbnail"
                            onclick="changeMainPhoto(this)">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- Text --}}
        <div class="col">
            <div>
                <h2 class="produkdetail-title">{{ $product->namaProduk }}</h2>
                <h5 class="produkdetail-kategori">{{ $product->kategoriProduk->namaKategori }}</h5>
                <h3 class="produkdetail-harga mt-3">Rp. {{ number_format($product->hargaProduk, 0, ',', '.') }}</h3>
                <p class="produkdetail-text mt-3">{{ $product->deskripsiProduk }}</p>
                <button class="btn-buy mt-2" id="buy-button">BELI SEKARANG</button>
            </div>
        </div>
    </div>
</div>
@endsection