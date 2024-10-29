@extends('layouts.frontend.master')

@section('content')
<section class="product-categories">
    <div class="container">
        <!-- Category Name -->
        <div class="title-container">
            <h1 class="category-title">{{ $category->namaKategori }}</h1>
        </div>

        <!-- Product Row for Each Category -->
        <div class="product-row row row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">
            @forelse ($category->produk as $product)
            <div class="col">
                <div class="product-card">
                    <div class="isicard-atas">
                        <img src="{{ asset('storage/' . $product->images->first()->pathFoto) }}" alt="Product Image" onerror="this.src='https://via.placeholder.com/150';" style="border: 0.2vw solid #afda00;">
                        <h6 class="mt-3">{{ $product->namaProduk }}</h6>
                        <p>{{ $category->namaKategori }}</p>
                        <p class="price">Rp. {{ number_format($product->hargaProduk, 0, ',', '.') }}</p>
                        <p style="font-size: 10px;">Lebih banyak pilihan tersedia</p>
                    </div>
                    <a href="{{ route('products.detail', $product->slug) }}" class="icon-link"><i class="bi bi-chevron-double-right rotated-icon"></i></a>
                </div>
            </div>
            @empty
            <!-- No Products Available -->
            <div class="col-12">
                <p class="text-center">Tidak ada produk tersedia dalam kategori ini.</p>
            </div>
            @endforelse
        </div> <!-- End of Product Row -->
    </div>
</section>
@endsection