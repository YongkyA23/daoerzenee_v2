@extends('layouts.frontend.master')

@section('content')
<section class="banner-section">
    {{-- gambar --}}
    <div class="banner-image">
        <img src="{{ asset('photos/bannerProduk.webp') }}" alt="Banner Beranda" class="banner-image">
        <div class="banner-text">
            <h1 class="text-produk">Membeli produk kami berarti mencintai produk Indonesia, mengurangi sampah sekaligus membantu umat KLMTD menjadi lebih aktif dan produktif</h1>
        </div>
        <div class="search-produk">

        </div>
    </div>
</section>


<section class="product-categories">
    <div class="container">
        @foreach ($categories as $category)
        <!-- Category Name -->
        <div class="title-container">
            <h1 class="category-title">{{ $category->namaKategori }}</h1>
            <a href="#" class="btn-custom">More</a>
        </div>

        <!-- Product Row for Each Category -->
        <div class="product-row row row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">
            @forelse ($category->produk->take(5) as $product)
            <div class="col">
                <div class="product-card">
                    <div class="isicard-atas">
                        <img src="{{ $product->fotoProduk }}" alt="Product Image" onerror="this.src='https://via.placeholder.com/150';" style="border: 0.2vw solid #afda00;">
                        <h6 class="mt-3">{{ $category->namaKategori }}</h6>
                        <p>{{ $product->namaProduk }}</p>
                        <p class="price">Rp. {{ number_format($product->hargaProduk, 0, ',', '.') }}</p>
                        <p style="font-size: 10px;">Lebih banyak pilihan tersedia</p>
                    </div>
                    <a href="#" class="icon-link"><i class="bi bi-chevron-double-right rotated-icon"></i></a>
                </div>
            </div>
            @empty
            <!-- No Products Available -->
            <div class="col-12">
                <p class="text-center">Tidak ada produk tersedia dalam kategori ini.</p>
            </div>
            @endforelse
        </div> <!-- End of Product Row -->
        @endforeach
    </div>
</section>
@endsection