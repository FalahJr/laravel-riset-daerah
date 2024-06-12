@extends('layouts.app')

@section('title', 'Management Riset')

@push('style')
    <!-- CSS Libraries -->
@endpush
<?php
use Illuminate\Support\Str;

?>

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Management Topik Riset</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Topik Riset</a></div>

                </div>
            </div>

            <div class="section-body">

                <div class="row">

                    <div class="col-12 ">
                        <a href="{{ url('admin/topik-riset/create') }}" class="btn btn-success btn-block w-25 ">+ Tambah
                            Topik Riset</a>
                        <div class="card mt-4">


                            <div class="card-body p-0">
                                <div class="table-responsive">

                                    <table class="table-striped table-md table">
                                        <tr>
                                            <th>#</th>
                                            <th>No. Dokumen</th>
                                            <th>Judul</th>
                                            <th>Nama</th>
                                            <th>Dokumen</th>
                                            <th>Action</th>
                                        </tr>
                                        <?php $no = 1; ?>

                                        @foreach ($data as $list)
                                            <tr>
                                                <td>{{ $no }}</td>
                                                <td>{{ $list->no_dokumen }}</td>

                                                <td>{{ $list->judul }}</td>

                                                {{-- <td>
                                                    {!! nl2br(htmlspecialchars_decode(Str::limit($list->deskripsi, 1000))) !!}
                                                </td> --}}
                                                <td>
                                                    {{ $list->nama }}
                                                </td>
                                                <td>
                                                    <a href="{{ asset('file_upload/topik-riset/' . $list->file) }}"
                                                        class="btn btn-primary btn-sm" download>
                                                        Download
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="d-flex">

                                                        <a href="topik-riset/{{ $list->id }}/edit"
                                                            class="btn btn-info mr-2">Detail</a>
                                                        <form class="" method="POST"
                                                            action="/admin/topik-riset/{{ $list->id }}"
                                                            style="display:inline;">
                                                            @csrf

                                                            @method('DELETE')
                                                            <button class="btn btn-danger">Hapus</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php $no++; ?>
                                        @endforeach


                                    </table>
                                </div>
                            </div>
                            {{-- <div class="card-footer text-right">
                                <nav class="d-inline-block">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1"><i
                                                    class="fas fa-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1 <span
                                                    class="sr-only">(current)</span></a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div> --}}
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/components-table.js') }}"></script>
@endpush
