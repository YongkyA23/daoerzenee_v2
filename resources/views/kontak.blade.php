 @extends('layouts.frontend.master')
 @section('content')
     <section class="section-paper-kontak d-flex flex-column align-items-center kontak">
         <div class="text-white cardboard-card w-75 mx-auto mb-lg-5 mb-3">
             <h1 class="display-4 fw-bold mb-2 kontak-title">Kontak</h1>
             <h2 class="fw-light mb-2">Untuk informasi lebih lanjut, hubungi kami di:</h2>
             <h2 class="fw-semibold mb-0">0818-152-242 (Linawaty)</h2>
         </div>

         <article class="d-flex flex-column justify-content-center align-items-center my-4 ikutserta">
             <h2 class="text-center mb-3 w-75 text-ikutserta ">
                 Ikut serta peduli terhadap lingkungan sekitar serta membantu
                 kita di Daoer Zenee dengan memberikan donasi
             </h2>
             <button class="small-btn">DONASI</button>
         </article>

         <div class="text-center container-notice">
             <h1 class="fw-bold text-danger notice-donasi">
                 Kami hanya menerima donasi dalam bentuk Natura
             </h1>
         </div>

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
                     <button class="small-btn maps-btn">BUKA</button>
                 </a>
             </div>
         </div>
     </div>
 @endsection
