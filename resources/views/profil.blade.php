@extends('layouts.frontend.master')

@section('content')
<section class="banner-section">
    {{-- gambar --}}
    <div class="banner-image">
        <img src="{{ asset('photos/bannerProfilKomunitas.webp') }}" alt="Banner Beranda" class="banner-image">
        <div class="banner-text-profil">
            <h1>DAOER ZENEE</h1>
            <p>Komunitas kami memberdayakan umat KLMTD (kaum kecil, lemah, miskin, telantar, disabilitas) dengan tujuan untuk membuat produk daur ulang. Mereka membawa semangat partisipasi dengan langkah-langkah kecil yang mencintai dan menyelamatkan bumi melalui prinsip-prinsip 'reuse-reduce-recycle-renew'.</p>
        </div>
    </div>
</section>

<section class="community-profile">
    <!-- Profile Section -->
    <div class="profile-section">
        <div class="profile-text">
            <h2 class="underline-title">PROFIL KOMUNITAS</h2>
            <p><strong>Berdiri sejak :</strong> 14 November 2005</p>
            <p><strong>Lokasi :</strong> Jl. Cawang Baru Utara No.45, RT 3 / RW 12 Cawang Kapling, Jakarta Timur 13340t</p>
            <p><strong>Visi :</strong> Mendaur ulang dan menciptakan peluang.</p>
            <p><strong>Misi :</strong></p>
            <ul>
                <li>Kreativitas daur ulang dan mengelola barang donasi.</li>
                <li>Meningkatkan kreativitas (berbagai ilmu).</li>
                <li>Memperoleh penghasilan.</li>
                <li>Pengembangan bisnis.</li>
            </ul>
        </div>
        <div class="profil-image">
            <img src="{{ asset('photos/placeholder.webp') }}" alt="Profile Image">
        </div>
    </div>

    <div class="member-count-section">
        <h2 class="underline-title">JUMLAH ANGGOTA</h2>
        <div class="member-count-boxes d-flex flex-wrap gap-2 justify-content-around">
            <div class="count-box">
                <span>39</span>
                <p>Total</p>
            </div>
            <div class="count-box">
                <span>10</span>
                <p>Disabilitas</p>
            </div>
            <div class="count-box">
                <span>2</span>
                <p>Ortu Disabilitas</p>
            </div>
            <div class="count-box">
                <span>5</span>
                <p>Transpuan</p>
            </div>
            <div class="count-box">
                <span>10</span>
                <p>ODGJ</p>
            </div>
            <div class="count-box">
                <span>2</span>
                <p>Single Mom</p>
            </div>
            <div class="count-box">
                <span>10</span>
                <p>Lansia Produktif*</p>
            </div>
        </div>
        <p class="note">*orang wanita yang berdampak covid19, Kelompok Usaha Pucuk Si Loo Agung</p>
    </div>
</section>


<div class="org-structure">
    <h2 class="section-title">STRUKTUR ORGANISASI</h2>

    <!-- Leadership Team (Exclude Marketing Members) -->
    <div class="leadership-team">
        @foreach ($teamMembers as $member)
        @if ($member->position->name !== 'Marketing')
        <div class="member">
            <img src="{{ $member->photo }}" alt="{{ $member->name }}">
            <h3>{{ $member->name }}</h3>
            <p>{{ $member->position->name }}</p>
        </div>
        @endif
        @endforeach
    </div>
    <div class="marketing-title">
        <hr class="separator">
        <h3>Marketing</h3>
        <hr class="separator">
    </div>
    <!-- Marketing Team -->
    <div class="marketing-team">
        @foreach ($teamMembers as $member)
        @if ($member->position->name === 'Marketing')
        <div class="member">
            <img src="{{ $member->photo }}" alt="{{ $member->name }}">
            <h3>{{ $member->name }}</h3>
            <p>{{ $member->position->name }} - {{ $member->location->name }}</p>
            <p>{{ $member->phone }}</p>
        </div>
        @endif
        @endforeach
    </div>
</div>


<section class="cardboard-profil">
    <div class="cardboard-card-profil-luar">
        <div class="cardboard-card-profil">
            <h2>Sejarah</h2>
            <h2>Awal Berdiri Daoer Zenee</h2>
        </div>
    </div>
    <p class="isi-profil">
        Pada akhir tahun 2005, berawal dari banyaknya kertas sisa percetakan, Daoer Zenee terinspirasi untuk memanfaatkan sisa kertas tersebut sebagai media pengembangan kreativitas anak-anak sekolah Minggu Cawang Kapling.
    </p>

    <p class="isi-profil">
        Berkembang dari kegiatan tersebut, Daoer Zenee mengadakan kegiatan fundraising yang menunjang berbagai acara Sekolah Minggu dan muda mudi Katolik.
    </p>

    <p class="isi-profil">
        Seiring berjalannya waktu, karya Daoer Zenee mulai dikenali orang secara lisan dan berbagai macam forum. Popilaritas Daoer Zenee juga semakin meningkat melalui media sosial disaat pandemi.
    </p>

    <p class="isi-profil">
        Karya Daoer zenee seringkali diminta untuk membuat dekorasi diberbagai acara lintas paroki dan rutan/penjara. Selebihnya, Kami juga aktif dalam mengikuti berbagai lomba kreativitas dari bahan daur ulang.
    </p>
</section>

<div id="section-map">
    <div class="maps-box">
        <h1><i class="bi bi-geo-alt-fill me-3"></i>LOKASI</h1>
        <div class="maps-content">
            <div class="maps-text">
                <p>JI Cawang Baru No 45, Cawang Kapling, Jakarta Timur 13340, CAWANG, KRAMAT JATI, JAKARTA TIMUR, DKI
                    JAKARTA 203</p>
            </div>
            <a href="https://www.google.com/maps/place/Daoer+zenee/@-6.2415279,106.8732826,15z/data=!4m6!3m5!1s0x2e69f33af1b96e69:0xb0a16adb5841c6f4!8m2!3d-6.2415279!4d106.8732826!16s%2Fg%2F11j4_m2d46?entry=ttu"
                target="_blank">
                <button class="small-btn-maps">BUKA</button>
            </a>
        </div>
    </div>
</div>

@endsection