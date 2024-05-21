@extends('layouts.app')

@section('title', 'Advanced Forms')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Hardware Form</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Hardware</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Hardware</h2>



                <div class="card">
                    <form action="{{ route('data-laptop.update', $dataLaptop) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Input Text</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nomor Sample</label>
                                <input type="text"
                                    class="form-control @error('no_sample')
                                is-invalid
                            @enderror"
                                    name="no_sample" value=" {{ $dataLaptop->no_sample }}">
                                @error('no_sample')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="id_category">Kategori</label>
                                <select class="form-control form-control-sm trigger-enter" id="id_category"
                                    name="id_category" required>
                                    <option></option>
                                    <option value="1"
                                        {{ $dataLaptop->categories->category_model == 'Laptop' ? 'selected' : '' }}>Laptop
                                    </option>
                                    {{--  <option value="2">PC</option>
                                    <option value="3">Mini PC</option>
                                    <option value="4">Liter</option>
                                    <option value="5">Meter</option>  --}}
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Model</label>
                                <input type="text"
                                    class="form-control @error('model')
                                is-invalid
                            @enderror"
                                    name="model" value=" {{ $dataLaptop->model }}">
                                @error('model')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nomor Serial</label>
                                <input type="text"
                                    class="form-control @error('serial_number')
                                is-invalid
                            @enderror"
                                    name="serial_number" value=" {{ $dataLaptop->serial_number }}">
                                @error('serial_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="category">Ukuran Layar</label>
                                <select class="form-control form-control-sm trigger-enter" id="screen_size"
                                    name="screen_size">
                                    <option></option>
                                    <option value="13 inch" {{ $dataLaptop->screen_size == '13 inch' ? 'selected' : '' }}>
                                        13 inch</option>
                                    <option value="14 inch" {{ $dataLaptop->screen_size == '14 inch' ? 'selected' : '' }}>
                                        14 inch</option>
                                    <option value="15 inch" {{ $dataLaptop->screen_size == '15 inch' ? 'selected' : '' }}>
                                        15 inch</option>
                                    <option value="16 inch" {{ $dataLaptop->screen_size == '16 inch' ? 'selected' : '' }}>
                                        16 inch</option>
                                    <option value="18 inch" {{ $dataLaptop->screen_size == '18 inch' ? 'selected' : '' }}>
                                        18 inch</option>
                                    <option value="20 inch" {{ $dataLaptop->screen_size == '20 inch' ? 'selected' : '' }}>
                                        20 inch</option>
                                    <option value="22 inch" {{ $dataLaptop->screen_size == '22 inch' ? 'selected' : '' }}>
                                        22 inch</option>
                                    <option value="24 inch" {{ $dataLaptop->screen_size == '24 inch' ? 'selected' : '' }}>
                                        24 inch</option>
                                    <option value="26 inch" {{ $dataLaptop->screen_size == '26 inch' ? 'selected' : '' }}>
                                        26 inch</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Prosessor</label>
                                <input type="text"
                                    class="form-control @error('processor')
                                is-invalid
                            @enderror"
                                    name="processor" value=" {{ $dataLaptop->processor }}">
                                @error('processor')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="category">Storage 1</label>
                                <select class="form-control form-control-sm trigger-enter" id="storage_1" name="storage_1">
                                    <option></option>
                                    <option value="On Board Storage"
                                        {{ $dataLaptop->storage_1 == 'On Board Storage' ? 'selected' : '' }}>On Board
                                        Storage</option>
                                    <option value="HDD" {{ $dataLaptop->storage_1 == 'HDD' ? 'selected' : '' }}>HDD
                                    </option>
                                    <option value="SSD NVME" {{ $dataLaptop->storage_1 == 'SSD NVME' ? 'selected' : '' }}>
                                        SSD NVME</option>
                                    <option value="SSD M2" {{ $dataLaptop->storage_1 == 'SSD M2' ? 'selected' : '' }}>SSD
                                        M2</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="category">Size 1</label>
                                <select class="form-control form-control-sm trigger-enter" id="size_1" name="size_1">
                                    <option></option>
                                    <option value="128 GB" {{ $dataLaptop->size_1 == '128 GB' ? 'selected' : '' }}>128 GB
                                    </option>
                                    <option value="256 GB" {{ $dataLaptop->size_1 == '256 GB' ? 'selected' : '' }}>256 GB
                                    </option>
                                    <option value="512 GB" {{ $dataLaptop->size_1 == '512 GB' ? 'selected' : '' }}>512 GB
                                    </option>
                                    <option value="1 TB" {{ $dataLaptop->size_1 == '1 TB' ? 'selected' : '' }}>1 TB
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="category">Storage 2</label>
                                <select class="form-control form-control-sm trigger-enter" id="storage_2" name="storage_2">
                                    <option></option>
                                    <option value="On Board Storage"
                                        {{ $dataLaptop->storage_2 == 'On Board Storage' ? 'selected' : '' }}>On Board
                                        Storage</option>
                                    <option value="HDD" {{ $dataLaptop->storage_2 == 'HDD' ? 'selected' : '' }}>HDD
                                    </option>
                                    <option value="SSD NVME" {{ $dataLaptop->storage_2 == 'SSD NVME' ? 'selected' : '' }}>
                                        SSD NVME</option>
                                    <option value="SSD M2" {{ $dataLaptop->storage_2 == 'SSD M2' ? 'selected' : '' }}>SSD
                                        M2</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="category">Size 2</label>
                                <select class="form-control form-control-sm trigger-enter" id="size_2" name="size_2">
                                    <option></option>
                                    <option value="128 GB" {{ $dataLaptop->size_2 == '128 GB' ? 'selected' : '' }}>128 GB
                                    </option>
                                    <option value="256 GB" {{ $dataLaptop->size_2 == '256 GB' ? 'selected' : '' }}>256 GB
                                    </option>
                                    <option value="512 GB" {{ $dataLaptop->size_2 == '512 GB' ? 'selected' : '' }}>512 GB
                                    </option>
                                    <option value="1 TB" {{ $dataLaptop->size_2 == '1 TB' ? 'selected' : '' }}>1 TB
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>RAM</label>
                                <input type="text"
                                    class="form-control @error('ram')
                                is-invalid
                            @enderror"
                                    name="ram" value=" {{ $dataLaptop->ram }}">
                                @error('ram')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Graphic 1</label>
                                <input type="text"
                                    class="form-control @error('graphic_1')
                                is-invalid
                            @enderror"
                                    name="graphic_1" value=" {{ $dataLaptop->graphic_1 }}">
                                @error('graphic_1')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Graphic 2</label>
                                <input type="text"
                                    class="form-control @error('graphic_2')
                                is-invalid
                            @enderror"
                                    name="graphic_2" value=" {{ $dataLaptop->graphic_2 }}">
                                @error('graphic_2')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Mac Address</label>
                                <input type="text"
                                    class="form-control @error('mac_address')
                                is-invalid
                            @enderror"
                                    name="mac_address" value=" {{ $dataLaptop->mac_address }}">
                                @error('mac_address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>WLAN atau BT Modul</label>
                                <input type="text"
                                    class="form-control @error('wlan_or_bt_module')
                                is-invalid
                            @enderror"
                                    name="wlan_or_bt_module" value=" {{ $dataLaptop->wlan_or_bt_module }}">
                                @error('wlan_or_bt_module')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Modem</label>
                                <input type="text"
                                    class="form-control @error('modem')
                                is-invalid
                            @enderror"
                                    name="modem" value=" {{ $dataLaptop->modem }}">
                                @error('modem')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Warna</label>
                                <input type="text"
                                    class="form-control @error('colour')
                                is-invalid
                            @enderror"
                                    name="colour" value=" {{ $dataLaptop->colour }}">
                                @error('colour')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="OS">Operating System</label>
                                <select class="form-control form-control-sm trigger-enter" id="OS" name="OS">
                                    <option></option>
                                    <option value="Windows 8" {{ $dataLaptop->OS == 'Windows 8' ? 'selected' : '' }}>
                                        Windows 8</option>
                                    <option value="Windows 10" {{ $dataLaptop->OS == 'Windows 10' ? 'selected' : '' }}>
                                        Windows 10</option>
                                    <option value="Windows 11" {{ $dataLaptop->OS == 'Windows 11' ? 'selected' : '' }}>
                                        Windows 11</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="install_os_date">Tanggal Install OS </label>
                                <input type="date" id="install_os_date" name="install_os_date"
                                    value="{{ $dataLaptop->install_os_date }}">
                            </div>
                            <div class="form-group">
                                <label for="charger">Charger tersedia</label>
                                <select class="form-control form-control-sm trigger-enter" id="charger" name="charger">
                                    <option></option>
                                    <option value="0" {{ $dataLaptop->charger == '0' ? 'selected' : '' }}>Tidak
                                    </option>
                                    <option value="1" {{ $dataLaptop->charger == '1' ? 'selected' : '' }}>Ya</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Catatan kondisi barang</label>
                                <input type="text"
                                    class="form-control @error('condition_notes')
                                is-invalid
                            @enderror"
                                    name="condition_notes" value="{{ $dataLaptop->condition_notes }}">
                                @error('condition_notes')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="date_check">Tanggal pengecekan barang </label>
                                <input type="date" id="date_check" name="date_check"
                                    value="{{ $dataLaptop->date_check }}">
                            </div>
                            <div class="form-group">
                                <label for="location">Lokasi barang</label>
                                <select class="form-control form-control-sm trigger-enter" id="location"
                                    name="location">
                                    <option></option>
                                    <option value="Griya Utami"
                                        {{ $dataLaptop->location == 'Griya Utami' ? 'selected' : '' }}>Griya Utami</option>
                                    <option value="Green Grass"
                                        {{ $dataLaptop->location == 'Green Grass' ? 'selected' : '' }}>Green Grass</option>
                                    <option value="PT Alpha Romeo Teknologi"
                                        {{ $dataLaptop->location == 'PT Alpha Romeo Teknologi' ? 'selected' : '' }}>PT
                                        Alpha Romeo Teknologi</option>
                                    <option value="PT Etalase Digital Nusantara"
                                        {{ $dataLaptop->location == 'PT Etalase Digital Nusantara' ? 'selected' : '' }}>PT
                                        Etalase Digital Nusantara</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Posisi Barang</label>
                                <input type="text"
                                    class="form-control @error('position')
                                is-invalid
                            @enderror"
                                    name="position" value="{{ $dataLaptop->position }}">
                                @error('position')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Expedisi yang mengantar</label>
                                <input type="text"
                                    class="form-control @error('expedision')
                                is-invalid
                            @enderror"
                                    name="expedision" value="{{ $dataLaptop->expedision }}">
                                @error('expedision')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{--  <div class="form-group">
                                <label for="in_date">Tanggal masuk barang </label>
                                <input type="date" id="in_date" name="in_date" value="{{ $dataLaptop->in_date }}">
                            </div>  --}}
                            {{--  <div class="form-group">
                                <label for="out_date">Tanggal keluar barang </label>
                                <input type="date" id="out_date" name="out_date"
                                    value="{{ $dataLaptop->out_date }}">
                            </div>  --}}
                            {{--  <div class="form-group">
                                <label for="status">Status barang</label>
                                <select class="form-control form-control-sm trigger-enter" id="status" name="status">
                                    <option></option>
                                    <option value="in" {{ $dataLaptop->status == 'in' ? 'selected' : '' }}>Barang
                                        Masuk</option>
                                    <option value="out" {{ $dataLaptop->status == 'out' ? 'selected' : '' }}>Barang
                                        Keluar</option>
                                    <option value="return" {{ $dataLaptop->status == 'return' ? 'selected' : '' }}>
                                        Pengembalian</option>
                                </select>
                            </div>  --}}
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
@endpush
