<?php

?>
<div>

    <div class="slim-mainpanel">
        <div class="container-fluid pd-t-20">
            <div class="row row-xs mg-b-20">
                <div class="col-12">
                    <div class="ht-md-60 pd-x-20 bg-primary d-flex align-items-center justify-content-center">
                        <ul class="nav nav-underline-dark align-items-center flex-column flex-md-row" role="tablist">
                            <li class="nav-item"><a class="nav-link " data-toggle="tab" href="#kependudukan"
                                    role="tab">Kependudukan</a>
                            </li>
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#bantuan"
                                    role="tab">Bantuan</a>
                            </li>
                        </ul>
                    </div><!-- pd-10 -->
                    <div class="card-body bd bd-t-0">
                        <div class="tab-content">
                            <div class="tab-pane" id="kependudukan">
                                <div class="row row-xs mg-b-20">
                                    <div class="col-sm-6 col-lg-4 mg-t-10">
                                        <div class="card card-status bg-body-custom-ungu">
                                            <div class="media">
                                                <i class="icon ion-ios-location tx-purple"></i>
                                                <div class="media-body">
                                                    <h1>32,604</h1>
                                                    <p class="fs-16">Luas Wilayah (km2)</p>
                                                </div><!-- media-body -->
                                            </div><!-- media -->
                                        </div><!-- card -->
                                    </div><!-- col-3 -->
                                    <div class="col-sm-6 col-lg-4 mg-t-10 ">
                                        <div class="card card-status bg-body-custom-ungu">
                                            <div class="media">
                                                <i class="icon ion-person tx-teal"></i>
                                                <div class="media-body">
                                                    <h1>17,583</h1>
                                                    <p class="fs-16">Jumlah KK</p>
                                                </div><!-- media-body -->
                                            </div><!-- media -->
                                        </div><!-- card -->
                                    </div><!-- col-3 -->
                                    <div class="col-sm-6 col-lg-4 mg-t-10">
                                        <div class="card card-status bg-body-custom-ungu">
                                            <div class="media">
                                                <i class="icon ion-ios-body-outline tx-danger"></i>
                                                <div class="media-body">
                                                    <h1>61,119</h1>
                                                    <p class="fs-16">Jumlah Penduduk (jiwa)</p>
                                                </div><!-- media-body -->
                                            </div><!-- media -->
                                        </div><!-- card -->
                                    </div><!-- col-3 -->
                                </div>

                                <div class="row row-xs">
                                    <div class="col-12 col-lg-4 mg-t-10 mg-lg-t-0">
                                        <div class="card card-activities pd-20">
                                            <h6 class="slim-card-title">Perbandingan Jenis Kelamin</h6>
                                            <div class="bd pd-t-30 pd-b-20 pd-x-20">
                                                <div id="pendudukSex"></div>
                                            </div>
                                            <div class="card-footer">
                                                <span class="ref">Sumber Data : Aplikasi Sidesi</span>
                                            </div>
                                        </div><!-- card -->
                                    </div>

                                    <div class="col-12 col-lg-8">
                                        <div class="card card-activities pd-20">
                                            <h6 class="slim-card-title">Penduduk Per Kecamatan <i
                                                    class="fa fa-info-circle ms-2"></i></h6>
                                            <div class="bd pd-t-30 pd-b-20 pd-x-20">
                                                <div id="pendudukPerKecamatan"></div>
                                            </div>
                                            <div class="card-footer">
                                                <span class="ref">Sumber Data : Aplikasi Sidesi</span>
                                            </div>
                                        </div><!-- card -->
                                    </div><!-- col-3 -->
                                </div>

                                <div class="row mg-t-10">
                                    <div class="col-12 mg-t-10 mg-lg-t-0">
                                        <div class="card card-activities pd-20">
                                            <h6 class="slim-card-title mg-b-20">Penduduk Menurut Agama <i
                                                    class="fa fa-info-circle"></i></h6>
                                            <div class="row row-sm">
                                                <div class="col-12">
                                                    <div class="card card-sales bg-mantle">
                                                        <div class="row">
                                                            <div class="col">
                                                                <label class="fs-16 tx-white-8">Islam</label>
                                                                <p class="fs-32">1,898</p>
                                                            </div><!-- col -->
                                                            <div class="col">
                                                                <label class="fs-16 tx-white-8 ">Katolik</label>
                                                                <p class="fs-32">32,112</p>
                                                            </div><!-- col -->
                                                            <div class="col">
                                                                <label class="fs-16 tx-white-8">Protestan</label>
                                                                <p class="fs-32">72,067</p>
                                                            </div><!-- col -->
                                                            <div class="col">
                                                                <label class="fs-16 tx-white-8">Hindu</label>
                                                                <p class="fs-32">72,067</p>
                                                            </div><!-- col -->
                                                            <div class="col">
                                                                <label class="fs-16 tx-white-8">Budha</label>
                                                                <p class="fs-32">72,067</p>
                                                            </div><!-- col -->
                                                            <div class="col">
                                                                <label class="fs-16 tx-white-8">Konghucu</label>
                                                                <p class="fs-32">72,067</p>
                                                            </div><!-- col -->
                                                        </div><!-- row -->
                                                    </div><!-- card -->
                                                </div><!-- col-4 -->
                                            </div><!-- row -->
                                            <div class="card-footer">
                                                <span class="ref">Sumber Data : Aplikasi Sidesi</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card card-quick-post mg-t-10">
                                            <h6 class="slim-card-title">Penduduk Menurut Jenis Pekerjaan</h6>

                                            <div class="bd pd-t-30 pd-b-20 pd-x-20">
                                                <div id="kelompokPekerjaan"></div>
                                            </div>
                                            <div class="card-footer">
                                                <span class="ref">Sumber Data : Aplikasi Sidesi</span>
                                            </div>
                                        </div><!-- card -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card card-quick-post mg-t-10">
                                            <h6 class="slim-card-title">Penduduk Menurut Umur</h6>
                                            <div class="bd pd-t-30 pd-b-20 pd-x-20">
                                                <div id="kelompokUmur"></div>
                                            </div>
                                            <div class="card-footer">
                                                <span class="ref">Sumber Data : Aplikasi Sidesi</span>
                                            </div>
                                        </div><!-- card -->
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane active" id="bantuan">
                                <div class="row">
                                    <div class="col-12 col-lg-4">
                                        <div id="petaIdl"></div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div id="card" class="card mb-4 tsigourof_ben6oqe">
                                            <a class="card-switch" href="#">
                                                <h2 class="card-title">Data Penerima Bantuan Per Kecamatan</h2>
                                                <div class="card-body">
                                                    <span style="font-size: 1.2em;">Data Bantuan</span>
                                                    <div class="card-text mg-t-20"
                                                        style="height: 380px; overflow: scroll;">
                                                        <div id="penerimaBantuanPerKecamatan"></div>
                                                    </div>
                                                </div><!-- /.card-body -->
                                            </a><!-- /.card-switch -->
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="card card-quick-post mg-t-10">
                                            <h6 class="slim-card-title">Total Penerima Bantuan Berdasarkan Jenis Bantuan
                                            </h6>
                                            <div class="bd pd-t-30 pd-b-20 pd-x-20">
                                                <div id="penerimaJenisBantuan"></div>
                                            </div>
                                            <div class="card-footer">
                                                <span class="ref">Sumber Data : Aplikasi Sidesi</span>
                                            </div>
                                        </div><!-- card -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div><!-- col-6 -->
    </div><!-- slim-mainpanel -->

    @push('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    @endpush

    @push('scripts')
    {{-- <script src="{{ asset('assets/js/dashboard-opd/kependudukan.js') }}"></script> --}}

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="{{ asset('assets/js/dashboard-opd/penduduk.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard-opd/map.js') }}"></script>
    @endpush
</div>
