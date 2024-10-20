@extends('layouts.frontend.master')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide banner-galeri" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner"
            style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border-radius: 20px; width: 100%; height: 38vw">
            <div class="carousel-item active">
                <img src="{{ asset('photos/acaraKegiatan2.webp') }}" class="d-block w-100" alt="Foto 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('photos/acaraKegiatan6.webp') }}" class="d-block w-100" alt="Foto 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('photos/prosesProduksi5.webp') }}" class="d-block w-100" alt="Foto 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <section class="gallery ">
        <h2 class="card-title mb-3">Acara Kegiatan</h2>
        <div class="galeri-foto mb-5">
            <img src="photos/acaraKegiatan1.webp" alt="Foto 1">
            <img src="photos/acaraKegiatan2.webp" alt="Foto 2">
            <img src="photos/acaraKegiatan3.webp" alt="Foto 3">
            <img src="photos/acaraKegiatan4.webp" alt="Foto 4">
            <img src="photos/acaraKegiatan5.webp" alt="Foto 5">
            <img src="photos/acaraKegiatan6.webp" alt="Foto 6">
            <img src="photos/prosesProduksi5.webp" alt="Foto 5">
            <img src="photos/prosesProduksi6.webp" alt="Foto 6">
            <img src="photos/prosesProduksi7.webp" alt="Foto 7">
            <img src="photos/prosesProduksi8.webp" alt="Foto 8">
            <img src="photos/prosesProduksi5.webp" alt="Foto 5">
            <img src="photos/prosesProduksi6.webp" alt="Foto 6">
            <img src="photos/prosesProduksi7.webp" alt="Foto 7">
            <img src="photos/prosesProduksi8.webp" alt="Foto 8">
            <img src="photos/prosesProduksi5.webp" alt="Foto 5">
            <img src="photos/prosesProduksi6.webp" alt="Foto 6">
            <img src="photos/prosesProduksi7.webp" alt="Foto 7">
            <img src="photos/prosesProduksi8.webp" alt="Foto 8">
            <img src="photos/prosesProduksi5.webp" alt="Foto 5">
            <img src="photos/prosesProduksi6.webp" alt="Foto 6">
            <img src="photos/prosesProduksi7.webp" alt="Foto 7">
            <img src="photos/prosesProduksi8.webp" alt="Foto 8">
        </div>

        <h2 class="card-title mb-3">Proses Produksi</h2>
        <div class="galeri-foto mb-5">
            <img src="photos/prosesProduksi1.webp" alt="Foto 1">
            <img src="photos/prosesProduksi2.webp" alt="Foto 2">
            <img src="photos/prosesProduksi3.webp" alt="Foto 3">
            <img src="photos/prosesProduksi4.webp" alt="Foto 4">
            <img src="photos/prosesProduksi5.webp" alt="Foto 5">
            <img src="photos/prosesProduksi6.webp" alt="Foto 6">
            <img src="photos/prosesProduksi7.webp" alt="Foto 7">
            <img src="photos/prosesProduksi8.webp" alt="Foto 8">
            <img src="photos/prosesProduksi9.webp" alt="Foto 9">
            <img src="photos/prosesProduksi10.webp" alt="Foto 10">
        </div>
    </section>
@endsection
