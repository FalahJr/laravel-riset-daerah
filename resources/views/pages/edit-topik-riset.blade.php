@extends('layouts.app')

@section('title', 'Edit Topik Riset')

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
                <h1>Edit Topik Riset</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Topik Riset</a></div>
                    <div class="breadcrumb-item">Edit Topik Riset</div>
                </div>
            </div>

            <div class="section-body">


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Edit Topik Riset</h4>
                            </div>
                            <form class="form" action="/admin/topik-riset/{{ Request::segment(3) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="card-body">
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Isu
                                            Permasalahan</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" name="isu_permasalahan" required
                                                value="{{ $topik_riset->isu_permasalahan }}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label
                                            class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Permasalahan</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea class="form-control" name="permasalahan" required>{{ $topik_riset->permasalahan }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pertanyaan
                                            Riset</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea class="form-control" name="pertanyaan_riset" required>{{ $topik_riset->pertanyaan_riset }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label
                                            class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keterangan</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea class="form-control" name="keterangan" required>{{ $topik_riset->keterangan }}</textarea>
                                        </div>
                                    </div>
                                    {{-- <div class="form-group row mb-4">
                                        <label
                                            class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea class="summernote" name="deskripsi"></textarea>
                                        </div>
                                    </div> --}}
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">File</label>
                                        <div class="col-sm-12 col-md-7">
                                            <a href="{{ asset('file_upload/topik-riset/' . $topik_riset->file) }}"
                                                class="btn btn-primary btn-md mb-3" target="_blank">
                                                View File
                                            </a>
                                            <input type="file" class="form-control" name="file">
                                        </div>
                                    </div>
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
    <script src="{{ asset('js/page/features-post-create.js') }}"></script>

    <!-- Page Specific JS File -->
@endpush
