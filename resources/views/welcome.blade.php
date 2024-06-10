@extends('layouts.public')

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
@section('main')
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
                            <div class="card-body text-center d-flex flex-column align-items-center justify-content-center">

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
                            <div class="card-body text-center d-flex flex-column align-items-center justify-content-center">
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
                            <h3 class="pt-5">Alamat</h3>

                            <ul class="d-flex flex-column align-items-center">
                                <span class="text-center">Bappedalitbang Surabaya</span>
                                <li class="d-flex align-items-start"><i class="bi bi-check"></i>Jl. Pacar No.8,
                                    Ketabang, Kec. Genteng, Surabaya, Jawa
                                    Timur 60272</li>
                            </ul>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="pricing-item featured d-flex flex-column justify-content-center align-items-center">
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
    @endsection
