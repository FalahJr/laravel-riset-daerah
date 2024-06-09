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
                <h2>Penelitian</h2>
            </div>
        </div>
    </section>
    <main id="main">
        <section id="featured-services" class="featured-services">

            <div class="container  mb-5">
                @if (Session('user'))
                    <a href="{{ url('/masyarakat/penelitian/create') }}" class="btn btn-success btn-block w-25 mb-5">+
                        Ajukan</a>
                @else
                    <a href="{{ url('/login') }}" class="btn btn-success btn-block w-25 mb-5">+ Ajukan</a>
                @endif
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Pengusul</th>
                            <th scope="col">Tanggal Pengajuan</th>
                            {{-- <th scope="col">Abstrak</th> --}}
                            <th scope="col">Status</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>

                        @foreach ($usulan_penelitian as $list)
                            <tr>
                                <th scope="row">{{ $no }}</th>
                                <td>{{ $list->judul_penelitian }}</td>
                                <td>{{ $list->user->nama_lengkap }}</td>
                                <td>{{ $list->created_at }}</td>
                                <td>
                                    @if ($list->status == 'Selesai')
                                        <span class="badge bg-success w-75">{{ $list->status }}</span>
                                    @else
                                        <span class="badge bg-warning w-75">{{ $list->status }}</span>
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
