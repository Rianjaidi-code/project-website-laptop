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
                <h1>Data Hardware</h1>
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
                            <div class="card-header">
                                <h4>Semua Data Hardware total {{ $dataLaptops->total() }}</h4>
                            </div>

                            <div class="card-body">
                                <div class="float-right">
                                    <form method="GET" action="{{ route('data-laptop.index') }}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" name="search">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>

                                </div>

                                <div class="button-action" style="margin-bottom: 20px">
                                    <button type="button" class="btn btn-success" data-toggle="modal"
                                        data-target="#import">
                                        IMPORT
                                    </button>
                                    <a href="{{ route('data-laptop.create') }}" class="btn btn-primary ml-2">
                                        Tambah Data </a>
                                    {{--  <a href="" class="btn btn-primary btn-md">EXPORT</a>  --}}
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table" style="width: 2400px;">
                                        <tr>

                                            <th style="width: 100px;">Nama Admin</th>
                                            <th style="width: 100px;">Nomor Sample</th>
                                            <th style="width: 100px;">Kategori</th>
                                            <th style="width: 150px;">Model</th>
                                            <th style="width: 300px;">Processor</th>
                                            <th style="width: 100px;">Ukuran Layar</th>
                                            <th style="width: 200px;">RAM</th>
                                            <th style="width: 200px;">VGA 1</th>
                                            <th style="width: 200px;">VGA 2</th>
                                            <th style="width: 100px;">Lokasi</th>
                                            <th style="width: 100px;">Posisi</th>
                                            <th style="width: 500px;">Catatan</th>
                                            <th style="width: 100px;">Status</th>
                                            <th style="width: 100px;">Tgl. In</th>
                                            <th style="width: 100px;">Action</th>
                                        </tr>
                                        @foreach ($dataLaptops as $dataLaptop)
                                            <tr
                                                style="background-color: @if ($dataLaptop->status == 'out') red
                                            @elseif($dataLaptop->status == 'return')
                                                bisque
                                            @elseif($dataLaptop->status == 'in')
                                                white
                                            @else
                                                red @endif">
                                                <td
                                                    style="color: @if ($dataLaptop->status == 'out') white
                                                    @elseif($dataLaptop->status == 'return')
                                                        black
                                                    @elseif($dataLaptop->status == 'in')
                                                    black @endif">
                                                    {{ $dataLaptop->user->name }}
                                                </td>

                                                <td
                                                    style="color: @if ($dataLaptop->status == 'out') white
                                                    @elseif($dataLaptop->status == 'return')
                                                        black
                                                    @elseif($dataLaptop->status == 'in')
                                                    black @endif">
                                                    {{ $dataLaptop->no_sample }}
                                                </td>
                                                <td
                                                    style="color: @if ($dataLaptop->status == 'out') white
                                                    @elseif($dataLaptop->status == 'return')
                                                        black
                                                    @elseif($dataLaptop->status == 'in')
                                                    black @endif">
                                                    {{ $dataLaptop->categories->category_model ?? null }}
                                                </td>
                                                <td
                                                    style="color: @if ($dataLaptop->status == 'out') white
                                                    @elseif($dataLaptop->status == 'return')
                                                        black
                                                    @elseif($dataLaptop->status == 'in')
                                                    black @endif">
                                                    {{ $dataLaptop->model }}
                                                </td>
                                                <td
                                                    style="color: @if ($dataLaptop->status == 'out') white
                                                    @elseif($dataLaptop->status == 'return')
                                                        black
                                                    @elseif($dataLaptop->status == 'in')
                                                    black @endif">
                                                    {{ $dataLaptop->processor }}
                                                </td>
                                                <td
                                                    style="color: @if ($dataLaptop->status == 'out') white
                                                    @elseif($dataLaptop->status == 'return')
                                                        black
                                                    @elseif($dataLaptop->status == 'in')
                                                    black @endif">
                                                    {{ $dataLaptop->screen_size }}
                                                </td>
                                                <td
                                                    style="color: @if ($dataLaptop->status == 'out') white
                                                    @elseif($dataLaptop->status == 'return')
                                                        black
                                                    @elseif($dataLaptop->status == 'in')
                                                    black @endif">
                                                    {{ $dataLaptop->ram }}
                                                </td>
                                                <td
                                                    style="color: @if ($dataLaptop->status == 'out') white
                                                    @elseif($dataLaptop->status == 'return')
                                                        black
                                                    @elseif($dataLaptop->status == 'in')
                                                    black @endif">
                                                    {{ $dataLaptop->graphic_1 ? $dataLaptop->graphic_1 : '-' }}
                                                </td>
                                                <td
                                                    style="color: @if ($dataLaptop->status == 'out') white
                                                    @elseif($dataLaptop->status == 'return')
                                                        black
                                                    @elseif($dataLaptop->status == 'in')
                                                    black @endif">
                                                    {{ $dataLaptop->graphic_2 ? $dataLaptop->graphic_2 : '-' }}
                                                </td>
                                                <td
                                                    style="color: @if ($dataLaptop->status == 'out') white
                                                    @elseif($dataLaptop->status == 'return')
                                                        black
                                                    @elseif($dataLaptop->status == 'in')
                                                    black @endif">
                                                    {{ $dataLaptop->location }}
                                                </td>
                                                <td
                                                    style="color: @if ($dataLaptop->status == 'out') white
                                                    @elseif($dataLaptop->status == 'return')
                                                        black
                                                    @elseif($dataLaptop->status == 'in')
                                                    black @endif">
                                                    {{ $dataLaptop->position }}
                                                </td>
                                                <td
                                                    style="color: @if ($dataLaptop->status == 'out') white
                                                    @elseif($dataLaptop->status == 'return')
                                                        black
                                                    @elseif($dataLaptop->status == 'in')
                                                    black @endif">
                                                    {{ $dataLaptop->condition_notes }}
                                                </td>
                                                <td
                                                    style="color: @if ($dataLaptop->status == 'out') white
                                                    @elseif($dataLaptop->status == 'return')
                                                        black
                                                    @elseif($dataLaptop->status == 'in')
                                                    black @endif">
                                                    {{ $dataLaptop->status }}
                                                </td>
                                                <td
                                                    style="color: @if ($dataLaptop->status == 'out') white
                                                    @elseif($dataLaptop->status == 'return')
                                                        black
                                                    @elseif($dataLaptop->status == 'in')
                                                    black @endif">
                                                    {{ $dataLaptop->in_date }}
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href='{{ route('data-laptop.show', $dataLaptop->id) }}'
                                                            class="btn btn-sm btn-info btn-icon">
                                                            <i class="fas fa-eye"></i>
                                                            Detail
                                                        </a>

                                                        <form action="{{ route('data-laptop.destroy', $dataLaptop->id) }}"
                                                            method="POST" class="ml-2">
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
                                    {{ $dataLaptops->withQueryString()->links() }}
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
                <form action="{{ route('import-proses.store') }}" method="POST" enctype="multipart/form-data">
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
