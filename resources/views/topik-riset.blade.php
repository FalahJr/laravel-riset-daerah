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
                <h4>Pencarian Topik Riset</h4>

                <form action="{{ route('topik-riset') }}" method="GET" class="row mt-3">
                    {{-- @csrf --}}
                    <div class="mb-3 col-12 col-md-5">
                        <input type="text" class="form-control" id="judul" name="isu_permasalahan"
                            placeholder="Isu Permasalahan" value="{{ request('isu_permasalahan') }}">
                    </div>
                    <div class="mb-3 col-12 col-md-5">
                        <input type="text" class="form-control" id="permasalahan" name="permasalahan"
                            placeholder="Permasalahan" value="{{ request('permasalahan') }}">
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th>Isu Permasalahan</th>
                            <th>Permasalahan</th>
                            {{-- <th>Nama</th> --}}
                            <th>Dokumen</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($topik_riset as $list)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $list->isu_permasalahan }}</td>

                                <td>{{ $list->permasalahan }}</td>

                                <td>
                                    <a href="{{ asset('file_upload/topik-riset/' . $list->file) }}"
                                        class="btn btn-primary btn-sm" download>
                                        Download
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No data found</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </section>
    </main>
@endsection
