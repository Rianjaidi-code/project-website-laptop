@extends('layouts.app')

@section('title', 'Data Hardware')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Barang Masuk</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Hardware</a></div>
                    <div class="breadcrumb-item">Data Hardware</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>
                <h2 class="section-title">Hardware</h2>
                <p class="section-lead">
                    Kamu bisa menambahkan maupun mengedit data hardware pada halaman ini.
                </p>


                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            {{--  <div class="card-header">
                                <h4>Semua Data Hardware total {{ $dataLaptops->total() }}</h4>
                            </div>  --}}

                            <div class="card-body">
                                <div class="float-right">
                                    <form method="GET" action="{{ route('data-laptop.index', $barangMasuks) }}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" name="search">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>

                                </div>

                                <div class="button-action" style="margin-bottom: 20px">
                                    {{--  <button type="button" class="btn btn-success" data-toggle="modal"
                                        data-target="#import">
                                        IMPORT
                                    </button>  --}}
                                    <a href="{{ Route('barang-masuk.create') }}" class="btn btn-primary ml-2">
                                        Tambah Data </a>
                                    {{--  <a href="" class="btn btn-primary btn-md">EXPORT</a>  --}}
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table" style="width: 100%;">
                                        <tr>

                                            <th style="width: 100px;">Nama Admin</th>
                                            <th style="width: 150px;">Nama Model</th>
                                            <th style="width: 50px;">Status</th>
                                            <th style="width: 200px;">Keterangan</th>
                                            <th style="width: 100px;">Action</th>
                                        </tr>
                                        @foreach ($barangMasuks as $barangmasuk)
                                            <tr>

                                                <td>{{ $barangmasuk->user->name }}
                                                </td>
                                                <td>
                                                    {{ $barangmasuk->barang->model }}
                                                </td>
                                                <td>
                                                    {{ $barangmasuk->status }}
                                                </td>
                                                <td>{{ $barangmasuk->keterangan }}</td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href='' class="btn btn-sm btn-info btn-icon">
                                                            <i class="fas fa-edit"></i>
                                                            Edit
                                                        </a>

                                                        <form action="" method="POST" class="ml-2">
                                                            <input type="hidden" name="_method" value="DELETE" />
                                                            <input type="hidden" name="_token"
                                                                value="{{ csrf_token() }}" />
                                                            <button class="btn btn-sm btn-danger btn-icon confirm-delete">
                                                                <i class="fas fa-times"></i> Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </table>
                                </div>
                                <div class="float-right">
                                    {{ $barangMasuks->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- modal -->
    <div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">IMPORT DATA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>PILIH FILE</label>
                            <input type="file" name="file" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                        <button type="submit" class="btn btn-success">IMPORT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
