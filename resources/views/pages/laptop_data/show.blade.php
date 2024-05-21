@extends('layouts.app')

@section('title', 'Permission Detail')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-social/assets/css/bootstrap.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Permission Detail</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Permission Detail</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Permission Detail</h2>
                <p class="section-lead">
                    Informasi tentang detail izin karyawan.
                </p>

                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <label>Data Pegawai</label>
                                <div class="row">
                                    <div class="form-group col-md-3 col-12">
                                        <label>Nama Karyawan</label>
                                        <p>{{ $dataLaptop->user->name }}</p>
                                    </div>

                                </div>
                                <label>Data Laptop</label>
                                <div class="row">
                                    <div class="form-group col-md-3 col-12">
                                        <label>Nomor Sample</label>
                                        <p>{{ $dataLaptop->no_sample }}</p>
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label>Kategori</label>
                                        <p>{{ $dataLaptop->categories->category_model }}</p>
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label>Model</label>
                                        <p>{{ $dataLaptop->model }}</p>
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label>Nomor Serial</label>
                                        <p>{{ $dataLaptop->serial_number }}</p>
                                    </div>
                                </div>
                                <label>Spesifikasi Laptop</label>
                                <div class="row">
                                    <div class="form-group col-md-3 col-12">
                                        <label>Ukuran Layar</label>
                                        <p>{{ $dataLaptop->screen_size }}</p>
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label>Prosessor</label>
                                        <p>{{ $dataLaptop->processor }}</p>
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label>Penyimpanan 1</label>
                                        <p>{{ $dataLaptop->storage_1 ? $dataLaptop->storage_1 : '-' }}
                                            {{ $dataLaptop->size_1 ? $dataLaptop->size_1 : '' }}</p>
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label>Penyimpanan 1</label>
                                        <p>{{ $dataLaptop->storage_2 ? $dataLaptop->storage_2 : '-' }}
                                            {{ $dataLaptop->size_2 ? $dataLaptop->size_2 : '' }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-3 col-12">
                                        <label>RAM</label>
                                        <p>{{ $dataLaptop->ram }}</p>
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label>VGA 1</label>
                                        <p>{{ $dataLaptop->graphic_1 ? $dataLaptop->graphic_1 : '-' }}</p>
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label>VGA 2</label>
                                        <p>{{ $dataLaptop->graphic_2 ? $dataLaptop->graphic_2 : '-' }}
                                        </p>
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label>Mac Address</label>
                                        <p>{{ $dataLaptop->mac_address }}</p>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="form-group col-md-3 col-12">
                                        <label>WLAN atau BT Modul</label>
                                        <p>{{ $dataLaptop->wlan_or_bt_module }}</p>
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label>Modem</label>
                                        <p>{{ $dataLaptop->modem ? $dataLaptop->modem : '-' }}</p>
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label>Warna</label>
                                        <p>{{ $dataLaptop->colour }}
                                        </p>
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label>Operating Sistem</label>
                                        <p>{{ $dataLaptop->OS }}</p>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="form-group col-md-3 col-12">
                                        <label>Tanggal penginstalan OS</label>
                                        <p>{{ $dataLaptop->install_os_date }}</p>
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label>Charger</label>
                                        <p>{{ $dataLaptop->charger == 1 ? 'Tersedia' : '-' }}</p>
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label>Catatan Kondisi</label>
                                        <p>{{ $dataLaptop->condition_notes }}
                                        </p>
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label>Tanggal Pengecekan</label>
                                        <p>{{ $dataLaptop->date_check }}</p>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="form-group col-md-3 col-12">
                                        <label>Lokasi</label>
                                        <p>{{ $dataLaptop->location }}</p>
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label>Posisi</label>
                                        <p>{{ $dataLaptop->position }}</p>
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label>Ekspedisi</label>
                                        <p>{{ $dataLaptop->expedision }}
                                        </p>
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label>Tanggal Masuk Barang</label>
                                        <p>{{ $dataLaptop->in_date }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-3 col-12">
                                        <label>Status</label>
                                        <p>{{ $dataLaptop->status }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ route('data-laptop.edit', $dataLaptop->id) }}" class="btn btn-primary">Ubah
                                    Data Laptop</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->
    <script src="{{ asset('library/summernote/dist/summernote-bs4.js') }}"></script>

    <!-- Page Specific JS File -->
@endpush
