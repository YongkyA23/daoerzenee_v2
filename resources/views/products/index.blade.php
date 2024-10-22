    @extends('layouts.frontend.master')

    @section('content')

    <section class="banner-section">
        {{-- gambar --}}
        <div class="banner-image">
            <div class="isi-banner">
                <img src="{{ asset('photos/bannerProduk.webp') }}" alt="Banner Beranda" class="banner-image">
                <div class="banner-text-produk">
                    <h1 style="font-size: larger;">Membeli produk kami berarti mencintai produk Indonesia, mengurangi sampah sekaligus membantu umat KLMTD menjadi lebih aktif dan produktif</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="produk">
        <div class="container-category-produk">
            @foreach ($KategoriProduk as $kategorip)
            <div class="atas-produk">
                <h1>Produk Kategori {{ $kategorip->namaKategori }}</h1>
            </div>
            @endforeach

        </div>
    </section>
    <h1>Products List</h1>

    <section>

    </section>


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