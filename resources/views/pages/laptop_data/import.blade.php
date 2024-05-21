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
                <h1>Import Data</h1>
                {{--  <div class="section-header-button">
                    <a href="{{ route('data-laptop.create') }}" class="btn btn-primary">
                        Tambah Data </a>
                </div>  --}}
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

                <section class="content">
                    <div class="container-fluid">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <!-- left column -->
                                <div class="col-md-6">
                                    <!-- general form elements -->
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h3 class="card-title">Form Import User</h3>
                                        </div>
                                        <form>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">File</label>
                                                    <input type="file" class="form-control" id="exampleInputEmail1"
                                                        name="file">
                                                    @error('file')
                                                        <small>{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- /.card-body -->

                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!--/.col (left) -->
                            </div>
                        </form>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
