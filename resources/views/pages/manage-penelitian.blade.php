@extends('layouts.app')

@section('title', 'Management Penelitian')

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
                <h1>Management Penelitian</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Topik Penelitian</a></div>

                </div>
            </div>

            <div class="section-body">

                <div class="row">

                    <div class="col-12 ">
                        @if (Session('user')['role'] == 'Masyarakat')
                            <a href="{{ url('masyarakat/penelitian/create') }}" class="btn btn-success btn-block w-25 ">+
                                Tambah
                                Penelitian</a>
                        @endif

                        <div class="card mt-4">


                            <div class="card-body p-0">
                                <div class="table-responsive">

                                    <table class="table-striped table-md table">
                                        <tr>
                                            <th>#</th>
                                            <th scope="col">Judul</th>
                                            <th scope="col">Pengusul</th>
                                            <th scope="col">Tanggal Pengajuan</th>
                                            <th scope="col">Status</th>
                                            <th>Action</th>
                                        </tr>
                                        <?php $no = 1; ?>

                                        @foreach ($data as $list)
                                            <tr>
                                                <td>{{ $no }}</td>

                                                <td>{{ $list->judul_penelitian }}</td>
                                                <td>{{ $list->user->nama_lengkap }}</td>
                                                <td>{{ $list->created_at }}</td>

                                                {{-- <td>
                                                    {!! nl2br(htmlspecialchars_decode(Str::limit($list->deskripsi, 1000))) !!}
                                                </td> --}}

                                                <td>
                                                    @if ($list->status == 'Selesai')
                                                        <span
                                                            class="badge bg-success w-75 text-white">{{ $list->status }}</span>
                                                    @else
                                                        <span
                                                            class="badge bg-warning w-75 text-white">{{ $list->status }}</span>
                                                    @endif

                                                </td>

                                                <td>
                                                    <div class="d-flex">

                                                        @if (Session('user')['role'] == 'Admin')
                                                            <a href="usulan-penelitian/{{ $list->id }}/edit"
                                                                class="btn btn-info mr-2">Detail</a>
                                                        @endif

                                                        <form class="" method="POST"
                                                            action="{{ Session('user')['role'] == 'Masyarakat' ? url('/masyarakat/penelitian/' . $list->id) : url('/admin/usulan-penelitian/' . $list->id) }}"
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
