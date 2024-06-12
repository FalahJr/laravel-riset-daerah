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
                <h2>Hasil Penelitian</h2>
            </div>
        </div>
    </section>
    <main id="main">
        <section id="featured-services" class="featured-services">

            <div class="container  mb-5">
                <form action="{{ route('hasil-penelitian') }}" method="GET" class="row mt-3">
                    {{-- @csrf --}}
                    <div class="mb-3 col-12 col-md-5">
                        <input type="text" class="form-control" id="judul_penelitian" name="judul_penelitian"
                            placeholder="Judul Penelitian" value="{{ request('judul_penelitian') }}">
                    </div>
                    <div class="mb-3 col-12 col-md-5">
                        <input type="number" class="form-control" id="tahun" name="tahun" placeholder="Tahun"
                            value="{{ request('tahun') }}">
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Pengusul</th>
                            {{-- <th scope="col">Tanggal Pengajuan</th> --}}
                            <th scope="col">Tahun</th>
                            <th scope="col">Abstrak</th>
                            <th scope="col">Download Dokumen</th>
                            {{-- <th scope="col">Status</th> --}}

                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($usulan_penelitian as $list)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $list->judul_penelitian }}</td>
                                <td>{{ $list->user->nama_lengkap }}</td>
                                <td>{{ $list->tahun }}</td>
                                <td>
                                    {!! nl2br(htmlspecialchars_decode(Str::limit($list->abstrak, 1000))) !!}

                                </td>
                                <td>
                                    @if ($list->is_publish == 'Y')
                                        <a href="{{ asset('file_upload/riset/' . $list->upload_file) }}"
                                            class="btn btn-primary btn-sm" download>
                                            Download
                                        </a>
                                    @else
                                        <button class="btn btn-secondary btn-sm" disabled>
                                            Download
                                        </button>
                                    @endif
                                </td>
                                {{-- <td>
                                    @if ($list->status == 'Selesai')
                                        <span class="badge bg-success w-75">{{ $list->status }}</span>
                                    @else
                                        <span class="badge bg-warning w-75">{{ $list->status }}</span>
                                    @endif

                                </td> --}}

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
