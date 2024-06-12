@extends('layouts.app')

@section('title', 'Tambah Penelitian')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('library/codemirror/lib/codemirror.css') }}">
    <link rel="stylesheet" href="{{ asset('library/codemirror/theme/duotone-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Penelitian</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#"> Penelitian</a></div>
                    <div class="breadcrumb-item">Tambah Penelitian</div>
                </div>
            </div>

            <div class="section-body">


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Tambah Penelitian</h4>
                            </div>
                            <form class="form" action="{{ url('/admin/usulan-penelitian/' . Request::segment(3)) }}"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                {{-- <div class="card-body">
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" name="judul_penelitian" required>
                                        </div>
                                    </div>


                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Identifikasi
                                            Masalah</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea class="w-100" name="identifikasi_masalah" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tujuan
                                            Penelitian</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea class="w-100" name="tujuan" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">File</label>
                                        <div class="col-sm-12 col-md-7">

                                            <input type="file" class="form-control" name="upload_file" required>
                                        </div>
                                    </div>
                                   

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                        <div class="col-sm-12 col-md-7">
                                            <button class="btn btn-primary" type="submit">Publish</button>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="card-body">
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" name="judul_penelitian" required
                                                value="{{ $penelitian->judul_penelitian }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tahun</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="number" class="form-control" name="tahun" required
                                                value="{{ $penelitian->tahun }}" min="0" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No
                                            Telepon</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="number" class="form-control" name="no_telepon" required
                                                value="{{ $penelitian->no_telepon }}" min="0" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Abstrak</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea class="w-100" name="abstrak" disabled required>{{ $penelitian->abstrak }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">File</label>
                                        <div class="col-sm-12 col-md-7">
                                            <a href="{{ asset('file_upload/penelitian/' . $penelitian->file) }}"
                                                class="btn btn-primary btn-md mb-3" target="_blank">
                                                View File
                                            </a>
                                            {{-- <input type="file" class="form-control" name="upload_file" required disabled> --}}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status
                                            Publikasi</label>
                                        <div class="col-sm-12 col-md-7">

                                            <select class="form-control select2" name="is_publish" required disabled>
                                                <option value="" disabled selected>Pilih Status</option>

                                                <option value="Y"
                                                    {{ $penelitian->is_publish == 'Y' ? 'selected' : '' }}>
                                                    Publikasi
                                                </option>
                                                <option value="N"
                                                    {{ $penelitian->is_publish == 'N' ? 'selected' : '' }}>
                                                    Privasi
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    @if (Session('user')['role'] == 'Admin')
                                        <div class="form-group row">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status
                                                Usulan
                                                Penelitian</label>
                                            <div class="col-sm-12 col-md-7">

                                                <select class="form-control select2" name="status" required>
                                                    <option value="" disabled selected>Pilih Status</option>

                                                    <option value="Selesai"
                                                        {{ $penelitian->is_publish == 'Selesai' ? 'selected' : '' }}>
                                                        Setujui
                                                    </option>
                                                    <option value="Sedang Diproses"
                                                        {{ $penelitian->is_publish == 'Sedang Diproses' ? 'selected' : '' }}>
                                                        Sedang Diproses
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    @endif


                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                        <div class="col-sm-12 col-md-7">
                                            <button class="btn btn-primary" type="submit">Publish</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/summernote/dist/summernote-bs4.js') }}"></script>
    {{-- <script src="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script> --}}

    <script src="{{ asset('library/codemirror/lib/codemirror.js') }}"></script>
    <script src="{{ asset('library/codemirror/mode/javascript/javascript.js') }}"></script>
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    {{-- <script src="{{ asset('library/upload-preview/upload-preview.js') }}"></script> --}}

    <!-- Page Specific JS File -->
    {{-- <script src="{{ asset('js/page/features-post-create.js') }}"></script> --}}

    <!-- Page Specific JS File -->
@endpush
