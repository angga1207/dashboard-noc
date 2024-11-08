<?php

use Carbon\Carbon;

?>
<div>

    <div class="slim-mainpanel">
        <div class="container-fluid">
            <div class="row row-xs mg-t-10">
                <div class="col-12 mg-t-20">
                    <div class="card bd-0">
                        <div class="card-header bg-mantle">
                            @livewire('administrasi-umum.navigation')
                        </div>

                        <div class="card-body bd bd-t-0">
                            <div class="tab-content">

                                <div class="tab-pane active" id="sinona">
                                    <div class="row row-sm align-items-center justify-content-center">
                                        <div class="col-12 col-md-5">
                                            <h5 style="margin-right: 30px;">Pilih Perangkat Daerah :</h5>
                                        </div>
                                        <div class="col-12 col-md-7">
                                            <select class="wd-300 form-control select2-show-search"
                                                data-placeholder="Pilih">
                                                <option label="Pilih"></option>
                                                <option value="Dinas Komunikasi dan Digital">Dinas Komunikasi dan
                                                    Digital</option>
                                                <option value="Dinas Sosial">Dinas Sosial</option>
                                                <option value="Dinas Perikanan">Dinas Perikanan</option>
                                                <option value="Bapenda">Bapenda</option>
                                                <option value="Bappeda">Bappeda</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                            <div class="card card-dash-chart-one mg-t-20 mg-sm-t-30">
                                                <div class="card-header">
                                                    <h6>Statistik Non-ASN Kabupaten Ogan Ilir</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div id="kondisiNonAsn"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <div class="card card-dash-chart-one mg-t-20 mg-sm-t-30">
                                                <div class="card-header">
                                                    <h6>Statistik Non-ASN Berdasarkan Perangkat Daerah</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div id="kondisiNonAsnPerPd"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <div class="card card-dash-chart-one mg-t-20 mg-sm-t-30">
                                                <div class="card-header">
                                                    <h6>Statistik Non-ASN Berdasarkan Jenjang Pendidikan</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div id="svg-sankey"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col mg-t-20 mg-sm-t-30">

                                            <style>
                                                .alert-gradient-bg {
                                                    background-image: linear-gradient(to right, #00dbde 0%, #fc00ff 100%) !important;
                                                }
                                            </style>
                                            <div class="alert alert-solid alert-gradient-bg tx-center">
                                                <h4 class="tx-white"><strong>Statistik</strong> Data Presensi Non ASN
                                                </h4>
                                            </div><!-- alert -->
                                        </div>
                                    </div>
                                    <div class="row row-xs mg-t-10">
                                        <div class="col-12 col-lg-6 mg-t-10">
                                            <div class="card card-status bg-body-custom-ungu">
                                                <div class="media">
                                                    <i class="icon ion-ios-person-outline tx-purple"></i>
                                                    <div class="media-body">
                                                        <h1>32,604</h1>
                                                        <p>Total Presensi Masuk</p>
                                                    </div><!-- media-body -->
                                                </div><!-- media -->
                                            </div><!-- card -->
                                        </div><!-- col-3 -->

                                        <div class="col-12 col-lg-6 mg-t-10 ">
                                            <div class="card card-status bg-body-custom-ungu">
                                                <div class="media">
                                                    <i class="icon ion-android-walk tx-teal"></i>
                                                    <div class="media-body">
                                                        <h1>17,583</h1>
                                                        <p>Total Presensi Keluar</p>
                                                    </div><!-- media-body -->
                                                </div><!-- media -->
                                            </div><!-- card -->
                                        </div><!-- col-3 -->
                                    </div>
                                    <div class="row">

                                        <div class="col-12">
                                            <div class="card card-activities pd-20 mg-t-30">
                                                <div class="text-center mb-3">
                                                    <h5>Grafik Presensi Masuk dan Pulang</h5>
                                                    <span>Periode : Tanggal, Bulan & Tahun</span>
                                                </div>
                                                <div class="row row-sm justify-content-center mg-t-10 mg-b-20">
                                                    <div class="col-12 col-md-3">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
                                                                </div>
                                                            </div>
                                                            <input type="text" class="form-control fc-datepicker"
                                                                placeholder="MM/DD/YYYY">
                                                        </div>
                                                    </div><!-- wd-200 -->
                                                    <div class="col-12 col-md-3">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
                                                                </div>
                                                            </div>
                                                            <input type="text" class="form-control fc-datepicker"
                                                                placeholder="MM/DD/YYYY">
                                                        </div>
                                                    </div><!-- wd-200 -->
                                                    <div class="col-12 col-md-3">
                                                        <select class="form-control select2-show-search"
                                                            data-placeholder="Pilih">
                                                            <option label="Pilih"></option>
                                                            <option value="Dinas Komunikasi dan Digital">Dinas
                                                                Komunikasi dan Digital</option>
                                                            <option value="Dinas Sosial">Dinas Sosial</option>
                                                            <option value="Dinas Perikanan">Dinas Perikanan</option>
                                                            <option value="Bapenda">Bapenda</option>
                                                            <option value="Bappeda">Bappeda</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div id="chartPresensiPeriodikSinona"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
