<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SI REDAH (Riset Daerah)</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
</head>


<body>
    <div id="app">
        <header id="header" class="header d-flex align-items-center fixed-top">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

                <a href="index.html" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <!-- <img src="assets/img/logo.png" alt=""> -->
                    <h1>SI REDAH</h1>
                </a>

                <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a href="index.html" class="active">Beranda</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="penelitianDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Penelitian
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="penelitianDropdown">
                                <li><a class="dropdown-item" href="/usulan-penelitian">Usulan Penelitian</a></li>
                                <li><a class="dropdown-item" href="/hasil-penelitian">Hasil Penelitian</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="risetDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Riset
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="risetDropdown">
                                <li><a class="dropdown-item" href="/topik-riset">Topik Riset</a></li>
                                <li><a class="dropdown-item" href="/riset">Riset</a></li>
                            </ul>
                        </li>
                        <li><a href="hubungi.html">Hubungi Kami</a></li>
                        <li><a href="register.html">Register</a></li>
                        <li><a href="/login">Login</a></li>
                        <ul>
                </nav><!-- .navbar -->
            </div>
        </header>
        {{-- <div class="main-wrapper">
            <!-- Header -->
            @include('components.header')

            <!-- Sidebar -->
            @include('components.sidebar')

            <!-- Content -->
            @yield('main')

            <!-- Footer -->
            @include('components.footer')
        </div> --}}
        @yield('main')
        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span>SI REDAH</span>
                        </a>
                        <p class="mt-5">SI REDAH adalah sistem informasi berbasis website yang dikembangkan untuk
                            mendukung kegiatan
                            penelitian, pengembangan, pengkajian, dan penerapan di Kota Surabaya</p>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Link Internal</h4>
                        <ul>
                            <li><a href="#">Beranda</a></li>
                            <li><a href="/usulan-penelitian">Penelitian</a></li>
                            <li><a href="/topik-riset">Topik Riset</a></li>
                            <li><a href="/#contact">Hubungi Kami</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Layanan</h4>
                        <ul>
                            <li><a href="/usulan-penelitian">Usulan Penelitian</a></li>
                            <li><a href="/hasil-penelitian">Hasil Penelitian</a></li>
                            <li><a href="/topik-riset">Topik Riset</a></li>
                            <li><a href="/riset">Riset</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Sosial Media</h4>
                        <p>
                        <div class="social-links d-flex mt-4">
                            <a href="https://www.instagram.com/bappedalitbangkotasurabaya?igsh=MWMwZG9pNDdkYTV3Zw=="
                                class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
                            <a href="https://youtube.com/@bappedalitbangsurabaya?si=DBRrvkgHuUOh36jS" class="youtube"
                                target="_blank"><i class="bi bi-youtube"></i></a>
                            </p>
                        </div>

                    </div>
                </div>

                <div class="container mt-4">
                    <div class="copyright">
                        &copy; Copyright <strong><span>2024</span></strong>. Bappedalitbang Surabaya
                    </div>
                </div>

        </footer><!-- End Footer -->
        <!-- End Footer -->
    </div>


    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>
    <!-- General JS Scripts -->



    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
