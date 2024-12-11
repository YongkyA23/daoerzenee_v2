 @extends('layouts.frontend.master')
 @section('content')
     @php
         $rawNumber = $settings->wa_number;

         // Ensure the number starts with '0' and then format accordingly
         $formattedNumber =
             '0' .
             (strlen($rawNumber) === 11
                 ? substr($rawNumber, 0, 3) . '-' . substr($rawNumber, 3, 4) . '-' . substr($rawNumber, 7)
                 : substr($rawNumber, 0, 4) . '-' . substr($rawNumber, 4, 4) . '-' . substr($rawNumber, 8));
     @endphp
     <section class="section-paper-kontak d-flex flex-column align-items-center kontak">
         <div class="text-white cardboard-card w-75 mx-auto mb-lg-5 mb-3">
             <h1 class="display-4 fw-bold mb-2 kontak-title">Kontak</h1>
             <h2 class="fw-light mb-2">Untuk informasi lebih lanjut, hubungi kami di:</h2>
             <h2 class="fw-semibold mb-0">{{ $formattedNumber }} (Linawaty)</h2>
         </div>

         <article class="d-flex flex-column justify-content-center align-items-center my-4 ikutserta">
             <h2 class="text-center mb-3 w-75 text-ikutserta ">
                 Ikut serta peduli terhadap lingkungan sekitar serta membantu
                 kita di Daoer Zenee dengan memberikan donasi
             </h2>
             <button class="small-btn donasi-kontak">DONASI</button>
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
                     <p>{{ $settings->address }}</p>
                 </div>
                 <a href="{{ $settings->maps_link }}" target="_blank">
                     <button class="small-btn-maps">BUKA</button>
                 </a>
             </div>
         </div>
     </div>
 @endsection
