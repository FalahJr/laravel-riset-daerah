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

    <!-- ======= Header ======= -->
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
                    <li class="penelitian.html"><a href="#"><span>Penelitian</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <li class="riset.html"><a href="#"><span>Riset</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <li><a href="hubungi.html">Hubungi Kami</a></li>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="/login">Login</a></li>
                    <ul>
            </nav><!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    {{-- <section id="hero" class="hero d-flex align-items-center"> --}}
    {{-- <div class="container">
            <div class="row gy-4 d-flex justify-content-between">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">
                    </div>
                </div>

                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="assets/img/hero-img.svg" class="img-fluid mb-3 mb-lg-0" alt="">
                </div>
            </div>
        </div> --}}

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active ">
                <img src="assets/img/carousel/carousel_1.jpg" class="d-block w-100 " alt="..."
                    style="height: 100vh; object-fit:cover; background-color: rgba(52, 58, 64, 0.5) !important;">
            </div>
            <div class="carousel-item">
                <img src="assets/img/carousel/carousel_2.jpg" class="d-block w-100" alt="..."
                    style="height: 100vh; object-fit:cover">
            </div>
            <div class="carousel-item">
                <img src="assets/img/carousel/carousel_3.jpg" class="d-block w-100" alt="..."
                    style="height: 100vh; object-fit:cover">
            </div>
            <div class="carousel-item">
                <img src="assets/img/carousel/carousel_4.jpg" class="d-block w-100" alt="..."
                    style="height: 100vh; object-fit:cover">
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
    {{-- </section> --}}

    <!-- End Hero Section -->

    <main id="main">
        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container">
                <div class="row gy-6">
                    <div class="col-lg-6 col-md-6 service-item d-flex" data-aos="fade-up">
                        <div class="card " style="height: 30vh">
                            <div
                                class="card-body text-center d-flex flex-column align-items-center justify-content-center">

                                <div class="icon flex-shrink-0 mb-3"><i class="fa-solid fa-cart-flatbed"></i></div>
                                <div class="mb-2">
                                    <h4 class="title ">Usulan Penelitian</h4>
                                </div>
                                <div>
                                    <p class="description">Usulan penelitian adalah media untuk mengajukan suatu usulan
                                        penelitian yang dibuat oleh para peneliti</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-6 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="card" style="height: 30vh">
                            <div
                                class="card-body text-center d-flex flex-column align-items-center justify-content-center">
                                <div class="icon flex-shrink-0 mb-3 "><i class="fa-solid fa-truck"></i>
                                </div>
                                <div class="mb-2">
                                    <h4 class="title">Riset</h4>
                                </div>
                                <div>
                                    <p class="description">Riset adalah media yang bertujuan sebagai rujukan dalam
                                        perencanaan
                                        pembangunan daerah</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Service Item -->
                </div>

            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about pt-0">
            <div class="container" data-aos="fade-up">
                <div class="row gy-12">
                    <div class="col-lg-12 content order-last  order-lg-first">
                        <div class="section-header">
                            <span>Tentang Kami</span>
                            <h3>Tentang Kami</h3>
                            <p>SI REDAH adalah sistem informasi yang dikembangkan untuk mendukung kegiatan penelitian,
                                pengembangan, pengkajian, dan pembangunan daerah di Kota Surabaya. SI REDAH dibangun
                                untuk mendukung dan mengkaji proses pengusulan riset yang telah dibuat oleh Organisasi
                                Perangkat Daerah (OPD) Kota Surabaya guna terwujudnya pembangunan daerah berbasis riset.
                            </p>
                            <ul>
                        </div>
                    </div>
                </div>
        </section><!-- End About Us Section -->

        <section id="statistik" class="about pt-0">
            <div class="container" data-aos="fade-up">
                <div class="row gy-12">
                    <div class="col-lg-12 content order-last  order-lg-first">
                        <div class="section-header">
                            <span>Statistik Penelitian</span>
                            <h3>Statistik Penelitian</h3>
                        </div>
                        <div class="row gy-6 mt-5">
                            <div class="col-lg-6">
                                <div class="custom-card shadow-sm p-3 mb-5 bg-white rounded">
                                    <div class="icon-container">
                                        {{-- <img src="https://via.placeholder.com/30" alt="Icon"> --}}
                                        <i class="bi bi-lightbulb"></i>

                                    </div>
                                    <div class="count">1</div>
                                    <div class="description">Total Riset Daerah</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="custom-card shadow-sm p-3 mb-5 bg-white rounded">
                                    <div class="icon-container">
                                        {{-- <img src="https://via.placeholder.com/30" alt="Icon"> --}}
                                        <i class="bi bi-journal-text"></i>


                                    </div>
                                    <div class="count">13</div>
                                    <div class="description">Total Usulan Penelitian</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
        </section>

        <!-- ======= Services Section ======= -->

        <!-- End Services Section -->
        <section id="pricing" class="pricing pt-0">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <span>Hubungi Kami</span>
                    <h2>Hubungi Kami</h2>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="40">
                        <div class="pricing-item d-flex flex-column justify-content-center align-items-center">
                            <h3>Alamat</h3>
                            <h4><span>Bappedalitbang Surabaya</span></h4>
                            <ul>
                                <li class="d-flex align-items-start"><i class="bi bi-check"></i>Jl. Pacar No.8,
                                    Ketabang, Kec. Genteng, Surabaya, Jawa
                                    Timur 60272</li>
                            </ul>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div
                            class="pricing-item featured d-flex flex-column justify-content-center align-items-center">
                            <h3>Nomor Telepon</h3>
                            <ul>
                                <li><i class="bi bi-check"></i>08228484754</li>
                            </ul>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="pricing-item d-flex flex-column justify-content-center align-items-center">
                            <h3>Email</h3>
                            <ul>
                                <li><i class="bi bi-check"></i>bappeda@gmail.com</li>
                            </ul>
                        </div>
                    </div><!-- End Pricing Item -->
                </div>
            </div>
        </section><!-- End Pricing Section -->

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
                            <li><a href="#">Penelitian</a></li>
                            <li><a href="#">Topik Riset</a></li>
                            <li><a href="#">Hubungi Kami</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Layanan</h4>
                        <ul>
                            <li><a href="#">Usulan Penelitian</a></li>
                            <li><a href="#">Hasil Penelitian</a></li>
                            <li><a href="#">Topik Riset</a></li>
                            <li><a href="#">Riset</a></li>
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

        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <div id="preloader"></div>

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
