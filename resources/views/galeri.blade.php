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
    <section class="gallery">
        <h2 class="card-title mb-3">Acara Kegiatan</h2>
        <div class="galeri-foto mb-5">
            @foreach (['acaraKegiatan1.webp', 'acaraKegiatan2.webp', 'acaraKegiatan3.webp', 'acaraKegiatan4.webp', 'acaraKegiatan5.webp', 'acaraKegiatan6.webp', 'prosesProduksi5.webp', 'prosesProduksi6.webp', 'prosesProduksi7.webp', 'prosesProduksi8.webp'] as $image)
                <img src="photos/{{ $image }}" alt="Foto" class="preview-image" style="cursor: pointer;">
            @endforeach
        </div>

        <h2 class="card-title mb-3">Proses Produksi</h2>
        <div class="galeri-foto mb-5">
            @foreach (['prosesProduksi1.webp', 'prosesProduksi2.webp', 'prosesProduksi3.webp', 'prosesProduksi4.webp', 'prosesProduksi5.webp', 'prosesProduksi6.webp', 'prosesProduksi7.webp', 'prosesProduksi8.webp', 'prosesProduksi9.webp', 'prosesProduksi10.webp'] as $image)
                <img src="photos/{{ $image }}" alt="Foto" class="preview-image" style="cursor: pointer;">
            @endforeach
        </div>
    </section>

    <div class="modal fade" id="imagePreviewModal" tabindex="-1" aria-labelledby="imagePreviewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <img id="modalImage" src="" alt="Preview" class="w-100" style="border-radius: 8px;">
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const images = document.querySelectorAll('.preview-image');
            const modalImage = document.getElementById('modalImage');
            const imagePreviewModal = new bootstrap.Modal(document.getElementById('imagePreviewModal'));

            images.forEach(image => {
                image.addEventListener('click', function() {
                    // Set the modal image source to the clicked image source
                    modalImage.src = this.src;
                    // Show the modal
                    imagePreviewModal.show();
                });
            });
        });
    </script>
@endsection
