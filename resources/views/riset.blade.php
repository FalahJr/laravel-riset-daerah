@extends('layouts.public')

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
            <div class="container mt-5">
                <h4>Pencarian Riset</h4>
                <form action="{{ route('riset') }}" method="GET" class="row mt-3">
                    {{-- @csrf --}}
                    <div class="mb-3 col-12 col-md-5">
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Riset"
                            value="{{ request('judul') }}">
                    </div>
                    <div class="mb-3 col-12 col-md-5">
                        <input type="number" class="form-control" id="tahun" name="tahun" placeholder="Tahun"
                            value="{{ request('tahun') }}">
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>

                <table class="table table-hover mt-4">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Tahun</th>
                            {{-- <th scope="col">Contact Person</th> --}}
                            <th scope="col">Abstrak</th>
                            <th scope="col">Upload File</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($riset as $list)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $list->judul }}</td>
                                <td>{{ $list->tahun }}</td>
                                {{-- <td>{{ $list->no_telepon }}</td> --}}
                                {{-- <td>
                                    @if ($list->is_publish == 'Y')
                                        <span class="badge bg-success w-75">Publikasi</span>
                                    @else
                                        <span class="badge bg-danger w-75">Tidak Dipublikasi</span>
                                    @endif
                                </td> --}}
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
