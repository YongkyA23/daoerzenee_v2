<!-- <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                <svg class="bi" width="30" height="24">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
            <span class="mb-3 mb-md-0 text-body-secondary">© 2024 Company, Inc</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24">
                        <use xlink:href="#twitter"></use>
                    </svg></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24">
                        <use xlink:href="#instagram"></use>
                    </svg></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24">
                        <use xlink:href="#facebook"></use>
                    </svg></a></li>
        </ul>
    </footer>
</div> -->



<footer class="custom-footer-bg py-4">
    <div class="container-fluid d-flex flex-column flex-md-row justify-content-between align-items-center ">
        <div class="footer-left d-flex align-items-center mb-3 mb-lg-0">
            <img src="{{ asset('photos/logoF.webp') }}" alt="Daoer Zenee Logo" class="footer-logo me-3" />
            <div class="footer-text">
                <p class="mb-0">Daoer Zenee Logo Design by Roger Dean.</p>
                <p class="mb-0">All Rights Reserved.<br>
                    All other trademarks are the property of their respective owners.<br>
                    &copy;2005 ~ Daoer Zenee.
                </p>
            </div>
        </div>


        <!-- Right Section: Social Media Icons -->
        <div class="footer-right d-flex">
            @if ($settings && $settings->wa_number)
                <a href="https://wa.me/+62{{ ltrim($settings->wa_number, '0') }}" class="text-dark mx-2"
                    target="_blank">
                    <i class="bi bi-whatsapp fs-4"></i>
                </a>
            @endif

            @if ($settings && $settings->facebook_link)
                <a href="{{ $settings->facebook_link }}" target="_blank" class="text-dark mx-2">
                    <i class="bi bi-facebook fs-4"></i>
                </a>
            @endif

            @if ($settings && $settings->ig_link)
                <a href="{{ $settings->ig_link }}" class="text-dark mx-2" target="_blank">
                    <i class="bi bi-instagram fs-4"></i>
                </a>
            @endif

            @if ($settings && $settings->maps_link)
                <a href="{{ $settings->maps_link }}" class="text-dark mx-2" target="_blank">
                    <i class="bi bi-geo-alt-fill fs-4"></i>
                </a>
            @endif
        </div>

    </div>
</footer>


<div class="modal fade" id="donateModal" tabindex="1" aria-labelledby="donateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h3><b>Silahkan hubungi nomor dibawah ini:</b></h3>
                            <img src="{{ asset('photos/waLogo.webp') }}" alt="Logo WhatsApp" width="50px"
                                height="50px" style="margin-bottom: 10px;">
                            <p style="font-size: 18px; margin-bottom: 0;">WhatsApp: <span
                                    class="phone-number">{{ $settings->wa_number }}</span> (Linawaty)</p>
                            <button onclick="openWhatsAppLink()" class="small-btn"
                                style="font-size: 16px; width: 100px; height: 30px;">CHAT</button>
                            <p id="copy-success" style="color: green; display: none;">Number copied
                                to clipboard!</p>
                        </div>
                        {{-- G Maps: --}}
                        <div class=" col-md-12 text-center" style="margin-top: 20px;">
                            <h3><b>Atau kirimkan ke:</b></h3>
                            <img src="{{ asset('photos/mapsLogo.webp') }}" alt="Logo Maps" width="50px" height="50px"
                                style="margin-bottom: 10px;">
                            <p style="font-size: 18px; margin-bottom: 0;">Jl Cawang Baru No 45,
                                Cawang Kapling, Jakarta Timur 13340, Cawang, Kramat Jati, Jakarta
                                Timur, DKI Jakarta 203</p>
                            <a
                                href="https://www.google.com/maps/place/Daoer+zenee/@-6.2415279,106.8732826,15z/data=!4m6!3m5!1s0x2e69f33af1b96e69:0xb0a16adb5841c6f4!8m2!3d-6.2415279!4d106.8732826!16s%2Fg%2F11j4_m2d46?entry=ttu">
                                <button class="small-btn">BUKA</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="padding: 20px 0 0">
                    <h6>Kami hanya menerima donasi dalam bentuk natura.</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    //open popup
    document.querySelector('.small-btn').addEventListener('click', function() {
        var modal = new bootstrap.Modal(document.getElementById('donateModal'))
        modal.show()
    })


    //script copy nomor
    function openWhatsAppLink() {
        const phoneNumberElement = document.querySelector('.phone-number');
        let phoneNumber = phoneNumberElement.innerText.trim();

        // Remove leading '0' if it exists and add the country code +62
        if (phoneNumber.startsWith('0')) {
            phoneNumber = '62' + phoneNumber.slice(1);
        } else if (!phoneNumber.startsWith('62')) {
            phoneNumber = '62' + phoneNumber;
        }

        const waLink = `https://wa.me/${phoneNumber}`;

        // Open the WhatsApp link in a new tab
        window.open(waLink, '_blank');
    }

    //navbar script
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });

    function changeMainPhoto(thumbnail) {

        var newSrc = thumbnail.src;


        var mainPhoto = document.getElementById('main-photo');
        mainPhoto.src = newSrc;


        var thumbnails = document.querySelectorAll('.thumbnail');
        thumbnails.forEach(function(img) {
            img.classList.remove('selected');
        });


        thumbnail.classList.add('selected');
    }

    document.getElementById('buy-button').addEventListener('click', function() {

        var waPhoneNumber =
            {{ $settings->wa_number }};
        var productMessage = "Hello, I am interested in buying the Lingkaran Advent product.";


        var waLink = "https://wa.me/" + waPhoneNumber + "?text=" + encodeURIComponent(productMessage);


        window.open(waLink, '_blank');
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
</body>

</html>
