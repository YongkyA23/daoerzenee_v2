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
    <section class="card3katalog">
        <div class="card-katalog-wrapper">
            <h2 class="card-title-katalog">KATALOG PRODUK</h2>
            <div class="card-produk">


                <div class="cardProduk h-100">
                    <img src="{{ asset('photos/smallPouch.webp') }}" class="img-product" alt="...">
                    <div class="cardProduk-body">
                        <h5 class="cardProduk-title">Small Pouch and Rosario</h5>
                        <p class="cardProduk-text">Kombinasi unik small pouch dan kalung rosario, karya buatan tangan
                            teman-teman KLMTD. Small pouch ini dirajut dengan penuh ketelitian dan cinta, sementara
                            kalung rosario dibuat dengan tangan yang terampil, menjadikannya pilihan yang istimewa
                            untuk Anda. Produk ini dapat dikustomisasi sesuai keinginan Anda. Untuk informasi lebih
                            lanjut dan pemesanan, hubungi kami melalui WhatsApp.</p>
                        <p class="cardProduk-harga">Rp000.000 - Rp000.000</p>
                    </div>
                    <div class="cardProduk-footer mt-auto">
                        <small>
                            <a href="/produkdetail" style="color: black; text-decoration: none;"
                                onmouseover="this.style.color='blue';" onmouseout="this.style.color='black';">
                                Telusuri Lebih Lanjut
                            </a>
                        </small>
                    </div>
                </div>


                <div class="cardProduk h-100">
                    <img src="{{ asset('photos/smallPouch.webp') }}" class="img-product" alt="...">
                    <div class="cardProduk-body">
                        <h5 class="cardProduk-title">Small Pouch and Rosario</h5>
                        <p class="cardProduk-text">Kombinasi unik small pouch dan kalung rosario, karya buatan tangan
                            teman-teman KLMTD. Small pouch ini dirajut dengan penuh ketelitian dan cinta, sementara
                            kalung rosario dibuat dengan tangan yang terampil, menjadikannya pilihan yang istimewa
                            untuk Anda. Produk ini dapat dikustomisasi sesuai keinginan Anda. Untuk informasi lebih
                            lanjut dan pemesanan, hubungi kami melalui WhatsApp.</p>
                        <p class="cardProduk-harga">Rp000.000 - Rp000.000</p>
                    </div>
                    <div class="cardProduk-footer mt-auto">
                        <small>
                            <a href="/produkdetail" style="color: black; text-decoration: none;"
                                onmouseover="this.style.color='blue';" onmouseout="this.style.color='black';">
                                Telusuri Lebih Lanjut
                            </a>
                        </small>
                    </div>
                </div>

                <div class="cardProduk h-100">
                    <img src="{{ asset('photos/dompetKoin.webp') }}" class="img-product" alt="...">
                    <div class="cardProduk-body">
                        <h5 class="cardProduk-title">Dompet Koin</h5>
                        <p class="cardProduk-text">Dompet koin ini dirancang dari kain perca dengan berbagai tekstur
                            dan warna yang menarik, menciptakan aksesori kecil yang penuh gaya dan fungsional.
                            Kompartemen yang praktis memungkinkan Anda menyimpan koin dengan rapi dan mudah dijangkau.
                            Setiap dompet menampilkan kombinasi kain yang unik, menambahkan sentuhan kreatif pada
                            barang-barang sehari-hari Anda. Untuk pesanan kustom atau informasi lebih lanjut, hubungi
                            kami di WhatsApp.</p>
                        <p class="cardProduk-harga">Rp000.000 - Rp000.000</p>
                    </div>
                    <div class="cardProduk-footer mt-auto">
                        <small>
                            <a href="/produkdetail" style="color: black; text-decoration: none;"
                                onmouseover="this.style.color='blue';" onmouseout="this.style.color='black';">
                                Telusuri Lebih Lanjut
                            </a>
                        </small>
                    </div>
                </div>

                <div class="cardProduk h-100">
                    <img src="{{ asset('photos/Ornamen_Pohon_Natal.webp') }}" class="img-product" alt="...">
                    <div class="cardProduk-body">
                        <h5 class="cardProduk-title">Ornamen Pohon Natal</h5>
                        <p class="cardProduk-text">Ornamen Pohon Natal ini dibuat dari kertas yang digulung dan
                            dijalin dengan penuh keahlian, menghasilkan desain yang indah dan penuh warna. Setiap
                            ornamen dihiasi dengan detail yang menarik, menambah keindahan dan keceriaan pada pohon
                            Natal Anda. Produk ini juga dapat disesuaikan sesuai keinginan Anda. Untuk informasi lebih
                            lanjut atau pesanan kustom, silakan hubungi kami di WhatsApp.</p>
                        <p class="cardProduk-harga">Rp000.000 - Rp000.000</p>
                    </div>
                    <div class="cardProduk-footer mt-auto">
                        <small>
                            <a href="/produkdetail" style="color: black; text-decoration: none;"
                                onmouseover="this.style.color='blue';" onmouseout="this.style.color='black';">
                                Telusuri Lebih Lanjut
                            </a>
                        </small>
                    </div>
                </div>

                <div class="cardProduk h-100">
                    <img src="{{ asset('photos/ponco.webp') }}" class="img-product" alt="...">
                    <div class="cardProduk-body">
                        <h5 class="cardProduk-title">Ponco</h5>
                        <p class="cardProduk-text">Tambahkan sentuhan chic ke dalam gaya Anda dengan ponco rajutan
                            buatan tangan teman-teman KLMTD. Dirajut dengan penuh perhatian, ponco ini menghadirkan
                            kehangatan dan keleluasaan dengan desain yang modern dan stylish. Tersedia dalam pilihan
                            warna yang menarik, ponco ini sempurna untuk menambah gaya dan kenyamanan Anda. Kami juga
                            menawarkan opsi kustomisasi untuk memastikan ponco Anda mencerminkan kepribadian Anda.
                            Untuk informasi lebih lanjut dan pemesanan, hubungi kami melalui WhatsApp.</p>
                        <p class="cardProduk-harga">Rp000.000 - Rp000.000</p>
                    </div>
                    <div class="cardProduk-footer mt-auto">
                        <small>
                            <a href="/produkdetail" style="color: black; text-decoration: none;"
                                onmouseover="this.style.color='blue';" onmouseout="this.style.color='black';">
                                Telusuri Lebih Lanjut
                            </a>
                        </small>
                    </div>
                </div>
            </div>


            <a href="/produk" style="color: black; text-decoration: none;">
                <button class="btn-product-home">MORE</button>
            </a>

        </div>
    </section>


    {{-- Cardboard Card --}}
    <section>
        <div class="cardboard-card-home-luar">
            <div class="cardboard-card-home">
                <h2 style="font-size: 7vw; font-weight: 650; color: #ffffff; ">Daoer Zenee</h2>
                <h4 style="font-size: 3vw; font-weight: 350; color: #ffffff">Komunitas Kreativitas Daur Ulang</h4>
            </div>
        </div>
    </section>
@endsection
