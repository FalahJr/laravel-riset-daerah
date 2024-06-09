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
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row gy-4 d-flex justify-content-center align-items-center text-center">
                <h2>Topik Riset</h2>
            </div>
        </div>
    </section>
    <main id="main">
        <section id="featured-services" class="featured-services">

            <div class="container  mt-5">

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th>No. Dokumen</th>
                            <th>Judul</th>
                            <th>Nama</th>
                            <th>Dokumen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>

                        @foreach ($topik_riset as $list)
                            <tr>
                                <th scope="row">{{ $no }}</th>
                                <td>{{ $list->no_dokumen }}</td>

                                <td>{{ $list->judul }}</td>
                                <td>
                                    {{ $list->nama }}
                                </td>
                                <td>
                                    <a href="{{ asset('file_upload/topik-riset/' . $list->file) }}"
                                        class="btn btn-primary btn-sm" download>
                                        Download
                                    </a>
                                </td>
                            </tr>
                            <?php $no++; ?>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </section>
    </main>
@endsection
