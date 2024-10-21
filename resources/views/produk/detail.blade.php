@extends('layouts.frontend.master')
@section('content')
    <div class="detail-produk">
        <div class="section-detail-produk mt-4">
            {{-- Foto --}}
            <div class="container-fotodetail">
                <div class="group-fotodetail">
                    <img id="main-photo" src="{{ asset('photos/Lingkaran_Advent.webp') }}" alt="fotoooo"
                        class="produkdetail-foto">
                    <div class="image-gallery">
                        <div>
                            <img src="{{ asset('photos/Lingkaran_Advent.webp') }}" alt="image 1" class="thumbnail selected"
                                onclick="changeMainPhoto(this)">
                        </div>
                        <div>
                            <img src="{{ asset('photos/Lingkaran_Advent2.webp') }}" alt="image 2" class="thumbnail"
                                onclick="changeMainPhoto(this)">
                        </div>
                        <div>
                            <img src="{{ asset('photos/Lingkaran_Advent3.webp') }}" alt="image 3" class="thumbnail"
                                onclick="changeMainPhoto(this)">
                        </div>
                    </div>
                </div>
            </div>
            {{-- Text --}}
            <div class="col">
                <div>
                    <h2 class="produkdetail-title">Lingkaran Advent</h2>
                    <h3 class="produkdetail-harga mt-3">Rp100.000</h3>
                    <p class="produkdetail-text mt-3"> Masa Adven adalah waktu untuk mempersiapkan jiwa dan merefleksikan
                        diri
                        dalam menyambut kelahiran Yesus Kristus. Selama masa Adven, banyak keluarga menggunakan
                        Adventskranz
                        (Lingkaran Adven). Lingkaran ini tidak hanya berfungsi sebagai dekorasi, tetapi juga memiliki
                        makna
                        mendalam melalui simbol-simbol yang menyertainya. Produk ini dapat disesuaikan sesuai kebutuhan
                        Anda. Untuk pesanan kustom, silakan hubungi kami di WhatsApp. </p>
                    <h5 class="produkdetail-kategori">Kategori Christmas</h5>
                    <button class="btn-buy mt-2" id="buy-button">BELI SEKARANG</button>
                </div>
            </div>
        </div>
    </div>
@endsection
