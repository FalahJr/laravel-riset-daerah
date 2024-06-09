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
                <h2>Riset</h2>
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
                            <th scope="col">Judul</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Contact Person</th>
                            {{-- <th scope="col">Abstrak</th> --}}
                            <th scope="col">Status</th>

                            <th scope="col">Upload File</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>

                        @foreach ($riset as $list)
                            <tr>
                                <th scope="row">{{ $no }}</th>
                                <td>{{ $list->judul }}</td>
                                <td>{{ $list->tahun }}</td>
                                <td>{{ $list->no_telepon }}</td>
                                <td>
                                    @if ($list->is_publish == 'Y')
                                        <span class="badge bg-success w-75">Publikasi</span>
                                    @else
                                        <span class="badge bg-danger w-75">Tidak Dipublikasi</span>
                                    @endif

                                </td>
                                <td>
                                    @if ($list->is_publish == 'Y')
                                        <a href="{{ asset('file_upload/riset/' . $list->upload_file) }}"
                                            class="btn btn-primary btn-sm" download>
                                            Download
                                        </a>
                                    @else
                                        <button href="{{ asset('file_upload/riset/' . $list->upload_file) }}"
                                            class="btn btn-secondary btn-sm" disabled>
                                            Download
                                        </button>
                                    @endif
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
