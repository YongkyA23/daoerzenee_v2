@extends('layouts.frontend.master')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide banner-galeri" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @if ($bannerGalleries->isNotEmpty())
        @foreach ($bannerGalleries->take(3) as $index => $gallery)
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $index }}"
            class="{{ $index === 0 ? 'active' : '' }}" aria-current="true"
            aria-label="Slide {{ $index + 1 }}"></button>
        @endforeach
        @else
        <!-- Placeholder indicator -->
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Placeholder Slide"></button>
        @endif
    </div>

    <div class="carousel-inner"
        style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border-radius: 20px; width: 100%; height: 38vw">
        @if ($bannerGalleries->isNotEmpty())
        @foreach ($bannerGalleries->take(3) as $index => $gallery)
        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
            <img src="{{ asset('storage/' . $gallery->pathFoto) }}" class="d-block w-100"
                alt="{{ $gallery->namaFoto }}">
        </div>
        @endforeach
        @else
        <!-- Placeholder Image from via.placeholder.com -->
        <div class="carousel-item active">
            <img src="https://placehold.co/1200x500" class="d-block w-100" alt="Placeholder Image">
        </div>
        @endif
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

<!-- Gallery Section for Other Images -->
<section class="gallery">
    <h2 class="card-title mb-3">Gallery</h2>
    <div class="galeri-foto mb-5">
        @foreach ($otherGalleries as $gallery)
        <img src="{{ asset('storage/' . $gallery->pathFoto) }}" alt="{{ $gallery->namaFoto }}" class="preview-image"
            style="cursor: pointer;">
        @endforeach
    </div>
</section>

<!-- Modal for Image Preview -->
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

<!-- JavaScript for handling image preview modal -->
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