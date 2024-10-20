 @extends('layouts.frontend.master')


 @section('content')
     <section class="banner-section">
         {{-- gambar --}}
         <div class="banner-image">
             <img src="{{ asset('photos/bannerBeranda.webp') }}" alt="Banner Beranda" class="banner-image">
             <div class="banner-text" style="width: 75vw;">
                 <h1 style="font-size: 5vw; font-weight: 650;">Welcome to Daoer Zenee</h1>
                 <p style="font-size: 2vw; font-weight: 300;">Explore our products, gallery, and much more!</p>
             </div>
         </div>
     </section>
     <section>
         {{-- Paper Background --}}
         <div class="section-paper">
             <div class="card1beranda">
                 <div class="row g-0">
                     {{-- CARD1 Beranda --}}
                     <div class="col-md-8 col-8">
                         <div class="card-body" style="margin: 6vw; padding:0;">
                             <h4 class="card-title">Daoer Zenee</h4>
                             <p style="margin: 2vw;"></p>
                             <p class="card-content">Komunitas kami memberdayakan umat KLMTD (kaum kecil, lemah, miskin,
                                 telantar, disabilitas) dengan tujuan untuk membuat produk daur ulang. Mereka membawa
                                 semangat partisipasi dengan langkah-langkah kecil yang mencintai dan menyelamatkan bumi
                                 melalui prinsip-prinsip 'reuse-reduce-recycle-renew'.</p>

                             <button class="small-btn" style="margin: 0; margin-top: 2vw">DONATE</button>
                         </div>

                     </div>
                     <div class="col-md-4 col-4">
                         <img src="{{ asset('photos/homeCard1.webp') }}" alt="FotoKegiatanKomunitas" class="foto-section">
                     </div>
                 </div>
             </div>
             {{-- Button Trigger --}}
             <div>

     </section>


     <!-- Daur Ulang Article  -->
     <section class="card2beranda">
         <div style="display: flex;">
             <img src="{{ asset('photos/recycleLogo.webp') }}" alt="Logo Recycle" class="foto-section2"
                 style="height: 10vw; width: 10vw; margin: 5vw 2.5vw 0 0;">
             <div>
                 <h2 class="card-title">Daur Ulang</h2>
                 <p style="margin: 2vw;"></p>
                 <article class="card-content">
                     Daur ulang adalah langkah penting untuk kelestarian lingkungan, dan komunitas Daoer Zenee berperan
                     aktif dalam mendorong praktik ini. Mereka mengedukasi masyarakat tentang pengurangan limbah dan
                     pemanfaatan kembali bahan bekas, sambil mendorong inovasi dalam menciptakan produk baru dari material
                     daur ulang. Ini memperkuat kesadaran lingkungan di kalangan anggota dan masyarakat luas.
                 </article>
             </div>
         </div>
     </section>

     {{-- Section Break --}}
     <p style="margin: 8vw;"></p>

     {{-- Produk Katalog --}}
     <section>
         <div style="display: flex; justify-content: space-between; align-items: center;">
             <h2 class="card-title">Produk Katalog</h2>
             <span>
                 <a href="/produk" style="color: black">
                     <button class="small-btn">MORE</button>
                 </a>
             </span>
         </div>

         <p style="margin: 2vw;"></p>

         <div class="scrollProduk">
             <ul>
                 <li>
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
                 </li>
                 <li>
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
                 </li>
                 <li>
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
                 </li>
                 <li>
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
                 </li>
                 <li>
                     <div class="cardProduk h-100">
                         <img src="{{ asset('photos/Pohon_Natal_Kertas.webp') }}" class="img-product" alt="...">
                         <div class="cardProduk-body">
                             <h5 class="cardProduk-title">Pohon Natal Kertas</h5>
                             <p class="cardProduk-text">Pohon Natal ini terbuat dari kertas yang digulung dan dijalin
                                 dengan cermat, menciptakan tampilan yang unik dan penuh kreativitas. Setiap detailnya
                                 dirancang dengan teliti untuk memberikan nuansa Natal yang hangat dan berkesan. Pohon ini
                                 tidak hanya menjadi dekorasi yang menarik, tetapi juga merupakan karya seni yang menambah
                                 keindahan suasana liburan. Cocok untuk menghias rumah atau kantor, pohon Natal ini
                                 menawarkan sentuhan istimewa yang dapat disesuaikan dengan tema dekorasi Anda.</p>
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
                 </li>
                 <li>
                     <div class="cardProduk h-100">
                         <img src="{{ asset('photos/wadahKue.webp') }}" class="img-product" alt="...">
                         <div class="cardProduk-body">
                             <h5 class="cardProduk-title">Wadah Kue</h5>
                             <p class="cardProduk-text">Wadah Kue ini dibuat dari kertas yang digulung dengan cermat,
                                 menghadirkan desain yang stylish dan fungsional. Ideal untuk menyajikan kue-kue favorit,
                                 wadah ini tidak hanya menjaga kue tetap rapi tetapi juga menambah sentuhan dekoratif pada
                                 meja hidangan. Dengan pola kertas yang kreatif dan desain yang unik, wadah ini memadukan
                                 kepraktisan dengan estetika. Untuk pesanan kustom atau informasi lebih lanjut, hubungi kami
                                 di WhatsApp.</p>
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
                 </li>
                 <li>
                     <div class="cardProduk h-100">
                         <img src="{{ asset('photos/celemek.webp') }}" class="img-product" alt="...">
                         <div class="cardProduk-body">
                             <h5 class="cardProduk-title">Celemek / Apron</h5>
                             <p class="cardProduk-text">Celemek ini terbuat dari kain perca dengan pola dan nuansa yang
                                 beragam, menawarkan kombinasi desain yang menarik dan praktis. Dengan bahan yang kuat dan
                                 nyaman, celemek ini ideal untuk melindungi pakaian saat memasak atau berkegiatan di dapur.
                                 Setiap celemek menampilkan kreativitas dalam pemilihan kain, menambahkan sentuhan unik pada
                                 pengalaman memasak Anda. Untuk pesanan kustom atau informasi lebih lanjut, hubungi kami di
                                 WhatsApp.</p>
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
                 </li>
                 <li>
                     <div class="cardProduk h-100">
                         <img src="{{ asset('photos/Wreath_Christmas.webp') }}" class="img-product" alt="...">
                         <div class="cardProduk-body">
                             <h5 class="cardProduk-title">Wreath Christmas</h5>
                             <p class="cardProduk-text">Wreath Christmas ini terbuat dari kertas yang digulung dan dijalin
                                 dengan penuh keterampilan, menciptakan tampilan yang menawan dan berwarna-warni. Dihiasi
                                 dengan bunga-bunga yang cantik dan pita yang elegan, wreath ini menambah sentuhan festive
                                 yang ceria dan hangat pada dekorasi Natal Anda. Dengan desain yang unik dan detail yang
                                 memukau, wreath ini adalah pilihan sempurna untuk mempercantik pintu atau dinding selama
                                 musim liburan.</p>
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
                 </li>
                 <li>
                     <div class="cardProduk h-100">
                         <img src="{{ asset('photos/moneyAndSnackBouquet.webp') }}" class="img-product" alt="...">
                         <div class="cardProduk-body">
                             <h5 class="cardProduk-title">Money and Snack Bouquet</h5>
                             <p class="cardProduk-text">Money and Snack Bouquet ini merupakan kombinasi unik dari uang dan
                                 camilan, disajikan dalam bentuk bouquet yang kreatif dan menarik. Dirancang dengan penuh
                                 perhatian, bouquet ini menggabungkan berbagai camilan favorit dengan elemen desain yang
                                 elegan. Setiap bouquet menampilkan uang yang disusun secara artistik bersama dengan
                                 snack-snack yang lezat, menjadikannya hadiah yang praktis dan istimewa. Cocok untuk
                                 berbagai kesempatan, bouquet ini memberikan sentuhan personal yang menyenangkan. Untuk
                                 pesanan kustom atau informasi lebih lanjut, hubungi kami di WhatsApp.</p>
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
                 </li>
                 <li>
                     <div class="cardProduk h-100">
                         <img src="{{ asset('photos/scarf.webp') }}" class="img-product" alt="...">
                         <div class="cardProduk-body">
                             <h5 class="cardProduk-title">Syal Rajutan</h5>
                             <p class="cardProduk-text">Scarf atau syal rajutan yang indah dan hangat, merupakan karya
                                 buatan tangan teman-teman KLMTD. Setiap syal dirajut dengan penuh ketelitian dan cinta,
                                 tersedia dalam warna-warna yang menarik, menjadikannya aksesori yang sempurna untuk
                                 melengkapi gaya Anda. Produk ini dapat dikustomisasi sesuai keinginan Anda. Untuk informasi
                                 lebih lanjut dan pemesanan, hubungi kami melalui WhatsApp.</p>
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
                 </li>
                 <li>
                     <div class="cardProduk h-100">
                         <img src="{{ asset('photos/Lingkaran_Advent.webp') }}" class="img-product" alt="...">
                         <div class="cardProduk-body">
                             <h5 class="cardProduk-title">Lingkaran Advent</h5>
                             <p class="cardProduk-text">Lingkaran ini tidak hanya berfungsi sebagai dekorasi, tetapi juga
                                 memiliki makna mendalam melalui simbol-simbol yang menyertainya.</p>
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
                 </li>
                 <li>
                     <div class="cardProduk h-100">
                         <img src="{{ asset('photos/tasSerutTangan.webp') }}" class="img-product" alt="...">
                         <div class="cardProduk-body">
                             <h5 class="cardProduk-title">Tas Serut Tangan</h5>
                             <p class="cardProduk-text">Tas tangan serut ini terbuat dari kain perca dengan berbagai
                                 tekstur dan warna yang menarik. Setiap tas dirancang dengan kombinasi kain yang unik,
                                 menciptakan aksesoris yang tidak hanya fungsional tetapi juga penuh gaya. Tas ini cocok
                                 untuk menambahkan sentuhan kreatif pada penampilan sehari-hari. Untuk pesanan kustom atau
                                 informasi lebih lanjut, silakan hubungi kami di WhatsApp.</p>
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
                 </li>
                 <li>
                     <div class="cardProduk h-100">
                         <img src="{{ asset('photos/beanies.webp') }}" class="img-product" alt="...">
                         <div class="cardProduk-body">
                             <h5 class="cardProduk-title">Beanies</h5>
                             <p class="cardProduk-text">Temukan kehangatan dan gaya dalam beanies rajutan buatan tangan
                                 teman-teman KLMTD. Dirajut dengan penuh ketelitian dan cinta, setiap beanie hadir dalam
                                 warna-warna yang menarik dan trendi, menjadikannya aksesori yang sempurna untuk musim
                                 dingin. Rasakan kenyamanan dan keunikan dalam setiap helai benang yang dirajut dengan hati.
                                 Kami juga menawarkan kustomisasi untuk memastikan beanie Anda benar-benar sesuai dengan
                                 gaya pribadi Anda. Untuk informasi lebih lanjut dan pemesanan, jangan ragu untuk
                                 menghubungi kami melalui WhatsApp.</p>
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
                 </li>
                 <li>
                     <div class="cardProduk h-100">
                         <img src="{{ asset('photos/tasSerutRansel.webp') }}" class="img-product" alt="...">
                         <div class="cardProduk-body">
                             <h5 class="cardProduk-title">Tas Serut Ransel</h5>
                             <p class="cardProduk-text">Tas serut ransel ini hadir dalam desain kreatif menggunakan kain
                                 perca dengan berbagai tekstur dan warna cerah. Dengan sistem serut yang praktis, tas ini
                                 memadukan fungsi dan gaya, cocok untuk menemani berbagai aktivitas sehari-hari. Setiap tas
                                 menampilkan kombinasi kain yang unik dan penuh karakter. Untuk membuat tas sesuai
                                 preferensi Anda atau mendapatkan informasi lebih lanjut, jangan ragu untuk menghubungi kami
                                 di WhatsApp.</p>
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
                 </li>
                 <li>
                     <div class="cardProduk h-100">
                         <img src="{{ asset('photos/parcelAnak.webp') }}" class="img-product" alt="...">
                         <div class="cardProduk-body">
                             <h5 class="cardProduk-title">Parcel Anak</h5>
                             <p class="cardProduk-text">Parcel Anak ini dirancang khusus untuk memberikan kebahagiaan dan
                                 kejutan kepada anak-anak. Diisi dengan berbagai mainan, camilan, dan barang-barang menarik
                                 yang disesuaikan dengan minat anak, parcel ini merupakan pilihan sempurna untuk merayakan
                                 momen spesial atau sekadar memberikan hadiah yang menyenangkan. Setiap parcel disusun
                                 dengan perhatian pada detail dan kreativitas, menjadikannya hadiah yang penuh warna dan
                                 menyenangkan. Untuk pesanan kustom atau informasi lebih lanjut, hubungi kami di WhatsApp.
                             </p>
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
                 </li>
                 <li>
                     <div class="cardProduk h-100">
                         <img src="{{ asset('photos/tasBelanja.webp') }}" class="img-product" alt="...">
                         <div class="cardProduk-body">
                             <h5 class="cardProduk-title">Tas Belanja</h5>
                             <p class="cardProduk-text">Tas belanja ini terbuat dari kain perca dengan tekstur dan warna
                                 yang beragam, menciptakan desain yang menarik dan penuh karakter. Dengan ukuran yang ideal
                                 dan pegangan yang nyaman, tas ini tidak hanya praktis untuk berbelanja tetapi juga menambah
                                 gaya pada setiap perjalanan belanja Anda. Setiap tas dibuat dengan kombinasi kain yang
                                 unik, menawarkan sentuhan kreatif pada aktivitas sehari-hari. Untuk pesanan kustom atau
                                 informasi lebih lanjut, hubungi kami di WhatsApp.</p>
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
                 </li>
             </ul>
         </div>
     </section>

     {{-- Section Break --}}
     <p style=" margin: 10vw;"></p>


     {{-- Cardboard Card --}}
     <section>
         <div class="cardboard-card" style="margin-top: 4vw">
             <h2 style="font-size: 7vw; font-weight: 650; margin:0; color: #ffffff; ">Daoer Zenee</h2>
             <p style="margin: 2vw;"></p>
             <h4 style="font-size: 3vw; font-weight: 350; margin:0; color: #ffffff">Komunitas Kreativitas Daur Ulang</h4>
         </div>
     </section>

     {{-- Section Break --}}
     <p style="margin: 5vw;"></p>
 @endsection
