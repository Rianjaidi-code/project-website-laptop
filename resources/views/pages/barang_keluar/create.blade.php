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
                    <form action="{{ route('barang-keluar.store') }}" method="POST">
                        @csrf
                        <div class="card-header">
                            <h4>Input Text</h4>
                        </div>
                        <div class="card-body">
                            <input type="hidden" class="form-control" class="form-control" id="laptop_id" name="laptop_id">
                            <div class="form-group">
                                <label for="nomorSample">Nomor Sample</label>
                                <div class="input-group"> <!-- Input group untuk menampung input dan tombol -->
                                    <input type="text" class="form-control" class="form-control" id="nomorSample"
                                        name="no_sample">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button" id="buttonCari" data-toggle="modal"
                                            data-target="#myModal">Cari</button>
                                        <!-- Tombol "Cari" yang menampilkan modal -->
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nomorModel">Nama Model</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" class="form-control" id="nomorModel"
                                        name="model">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="id_status">Status Barang</label>
                                <select class="form-control form-control-sm trigger-enter" id="status" name="status"
                                    required>
                                    <option></option>
                                    <option value="out">Barang Keluar</option>
                                    {{--  <option value="return">Pengembalian Barang</option>  --}}
                                    {{-- <option value="3">Mini PC</option>
                                    <option value="4">Liter</option>
                                    <option value="5">Meter</option>  --}}
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="location">Lokasi barang</label>
                                <select class="form-control form-control-sm trigger-enter" id="location" name="location">
                                    <option></option>
                                    <option value="Laboratorium">Laboratorium</option>
                                    <option value="Customer">Customer</option>
                                    <option value="3rd-party">3rd-party</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Posisi Barang</label>
                                <input type="text" class="form-control" id="position" name="position">

                            </div>
                            <div class="form-group">
                                <label for="nomorSample">Keterangan</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" class="form-control" id="keterangan"
                                        name="keterangan">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Konten modal di sini -->
                    <form id="searchForm" method="GET" action="{{ route('barang-masuk.create') }}">
                        <div class="input-group">
                            <input id="searchInput" type="text" class="form-control" placeholder="Search"
                                name="search">
                            <div class="input-group-append">
                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table id="dataTable" class="table-striped table" style="width: 800px;">
                            <thead>
                                <tr>
                                    <th style="width: 100px;">No. Sample</th>
                                    <th style="width: 200px;">Nama Barang</th>
                                    <th style="width: 200px;">Catatan</th>
                                    <th style="width: 200px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barangKeluars as $barangKeluar)
                                    <tr>
                                        <td>{{ $barangKeluar->no_sample }}</td>
                                        <td>{{ $barangKeluar->model }}</td>
                                        <td>{{ $barangKeluar->condition_notes }}</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <button type="button" class="btn btn-sm btn-info btn-icon select-item"
                                                    data-id="{{ $barangKeluar->id }}"
                                                    data-sample="{{ $barangKeluar->no_sample }}"
                                                    data-model="{{ $barangKeluar->model }}"
                                                    data-condition="{{ $barangKeluar->condition_notes }}">
                                                    <i class="fas fa-check"></i> Pilih
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript untuk memfilter data di modal dan menangani pilihan -->
    <script>
        document.getElementById("searchInput").addEventListener("keyup", function() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("dataTable");
            tr = table.getElementsByTagName("tr");

            for (i = 1; i < tr.length; i++) { // Mulai dari 1 untuk menghindari header
                tr[i].style.display = "none"; // Sembunyikan semua baris secara default
                td = tr[i].getElementsByTagName("td");
                for (var j = 0; j < td.length; j++) { // Loop melalui semua kolom di baris
                    if (td[j]) {
                        txtValue = td[j].textContent || td[j].innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = ""; // Tampilkan baris jika ada kolom yang cocok
                            break; // Berhenti loop jika sudah menemukan kecocokan
                        }
                    }
                }
            }
        });

        document.querySelectorAll(".select-item").forEach(function(button) {
            button.addEventListener("click", function() {
                var id = this.getAttribute("data-id");
                var model = this.getAttribute("data-model");
                var sample = this.getAttribute("data-sample");
                document.getElementById("laptop_id").value = id;
                document.getElementById("nomorModel").value = sample;
                document.getElementById("nomorSample").value = model;
                $('#myModal').modal('hide'); // Menutup modal setelah memilih item
            });
        });
    </script>
@endsection

@push('scripts')
@endpush
