<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid px-6">
            <a style="padding: 0 6vw" href="/">
                <img class="logo-nav img-fluid" src="{{ asset('photos/logoNama.webp') }}" alt="Daoer Zenee">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 pe-5">
                    <li class="nav-item me-4">
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="/produk">Produk</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="/profil">Profil Komunitas</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="/galeri">Galeri</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="/kontak">Hubungi Kami</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <script>
        // Get the current URL path
        const currentPath = window.location.pathname;

        // Select all the nav links
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

        // Loop through each nav link and check if it matches the current URL
        navLinks.forEach(link => {
            if (link.getAttribute('href') === currentPath) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
