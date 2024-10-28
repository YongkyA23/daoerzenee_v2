@extends('layouts.frontend.master')


@section('content')
<section class="banner-section">
    {{-- gambar --}}
    <div class="banner-image">
        <img src="{{ asset('photos/bannerBeranda.webp') }}" alt="Banner Beranda" class="banner-image">
        <div class="banner-text">
            <h1 style="font-weight: 650;">DAOER ZENEE</h1>
            <p style="font-weight: 500;">Daur Ulang Menciptakan Peluang</p>
        </div>
        <div class="search-produk">

        </div>
    </div>
</section>


{{-- Paper Background --}}
<div class="section-paper">
    <div class="card1beranda">
        {{-- CARD1 Beranda --}}
        <div class="card-body-card1">
            <h4 class="card-title-card1">Daoer Zenee</h4>
            <p class="card-content-card1">Komunitas kami memberdayakan umat KLMTD (kaum kecil, lemah, miskin,
                telantar, disabilitas) dengan tujuan untuk membuat produk daur ulang. Mereka membawa
                semangat partisipasi dengan langkah-langkah kecil yang mencintai dan menyelamatkan bumi
                melalui prinsip-prinsip 'reuse-reduce-recycle-renew'.</p>
            <button class="small-btn btn-donate-home">DONATE</button>
        </div>
        <img src="{{ asset('photos/homeCard1.webp') }}" alt="FotoKegiatanKomunitas" class="foto-section">
    </div>
</div>


<!-- Daur Ulang Article  -->
<section class="card2beranda">
    <div class="content-wrapper-card2">
        <img src="{{ asset('photos/recycleLogo.webp') }}" alt="Logo Recycle" class="foto-section2">
        <div class="card-body-card2">
            <h2 class="card-title-2">Daur Ulang</h2>
            <p class="card-content-2">
                Daur ulang adalah langkah penting untuk kelestarian lingkungan, dan komunitas Daoer Zenee berperan
                aktif dalam mendorong praktik ini. Mereka mengedukasi masyarakat tentang pengurangan limbah dan
                pemanfaatan kembali bahan bekas, sambil mendorong inovasi dalam menciptakan produk baru dari material
                daur ulang. Ini memperkuat kesadaran lingkungan di kalangan anggota dan masyarakat luas.
            </p>
        </div>
    </div>
</section>

{{-- Produk Katalog --}}

<section class="product-categories">
    <div class="container">
        @foreach ($categories->take(1) as $category)
        <!-- Category Name -->
        <div class="title-container">
            <h1 class="card-title-katalog">KATALOG PRODUK</h1>
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
        <div class="button-container-home">
            <a href="/produk" style="color: black; text-decoration: none;">
                <button class="btn-product-home">LEBIH BANYAK</button>
            </a>
        </div>
    </div>
</section>


{{-- Cardboard Card --}}
<section>
    <div class="cardboard-card-home-luar">
        <div class="cardboard-card-home">
            <h2>Daoer Zenee</h2>
            <h4>Komunitas Kreativitas Daur Ulang</h4>
        </div>
    </div>
</section>
@endsection
