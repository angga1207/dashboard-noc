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
                                <div class="tab-pane active" id="sidesi">
                                    <div class="container-fluid pd-t-30">
                                        <div class="dash-headline-two">
                                            <div>
                                                <h4 class="tx-inverse mg-b-5">Dashboard, Sidesi Kab. Ogan Ilir</h4>
                                                <p class="mg-b-0">Aplikasi Sidesi merupakan Sistem Informasi Desa
                                                    Terintegrasi.</p>
                                            </div>
                                        </div><!-- dash-headline-two -->

                                        <div class="nav-statistics-wrapper">
                                            <nav class="nav">
                                                <a href="#pegawai" data-toggle="tab" class="nav-link active">Kondisi
                                                    Pegawai</a>
                                                <a href="#presensis" data-toggle="tab" class="nav-link">Presensi</a>
                                                <a href="#lkhsidesi" data-toggle="tab" class="nav-link">LKH</a>
                                                <a href="#tataSurat" data-toggle="tab" class="nav-link">Surat Desa</a>
                                            </nav>
                                        </div><!-- nav-statistics-wrapper -->

                                        <div class="card-body pd-0 mg-b-30">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="pegawai">
                                                    <div class="container-fluid">
                                                        <div class="row justify-content-between">
                                                            <div class="col-12 col-lg-5">
                                                                <div class="row row-xs justify-content-between">
                                                                    <div class="des">
                                                                        <h1 class="tx-inverse tx-56 tx-lato tx-bold">965
                                                                        </h1>
                                                                        <h6 class="tx-15 tx-inverse tx-bold mg-b-20">
                                                                            Total Seluruh ASN</h6>
                                                                    </div>
                                                                    <div class="lottie">
                                                                        <script
                                                                            src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs"
                                                                            type="module"></script>

                                                                        <dotlottie-player
                                                                            src="https://lottie.host/f1e2e44d-708d-45ca-8084-0cd6f1dcafa2/0EbKJRRfbF.json"
                                                                            background="transparent" speed="1"
                                                                            style="width: 350px; height: 350px;" loop
                                                                            autoplay>
                                                                        </dotlottie-player>
                                                                    </div>
                                                                </div>
                                                            </div><!-- col-5 -->
                                                            <div class="col-12 col-lg-7 mg-t-20 mg-md-t-0">
                                                                <div id="chartPegawaiSidesi"></div>
                                                            </div><!-- col-7 -->
                                                        </div>
                                                    </div>
                                                </div><!-- row -->
                                                <div class="tab-pane" id="presensis">
                                                    <div class="container-fluid">
                                                        <div class="row row-xs mg-t-30">
                                                            <div class="col-12 col-md-4 mg-t-10">
                                                                <div class="card card-status bg-body-custom-ungu">
                                                                    <div class="media">
                                                                        <i
                                                                            class="icon ion-ios-person-outline tx-purple"></i>
                                                                        <div class="media-body">
                                                                            <h1>32,604</h1>
                                                                            <p>Total Hadir Dinas Dalam</p>
                                                                        </div><!-- media-body -->
                                                                    </div><!-- media -->
                                                                </div><!-- card -->
                                                            </div><!-- col-3 -->

                                                            <div class="col-12 col-md-4 mg-t-10 ">
                                                                <div class="card card-status bg-body-custom-ungu">
                                                                    <div class="media">
                                                                        <i class="icon ion-android-walk tx-teal"></i>
                                                                        <div class="media-body">
                                                                            <h1>17,583</h1>
                                                                            <p>Total Hadir Dinas Luar</p>
                                                                        </div><!-- media-body -->
                                                                    </div><!-- media -->
                                                                </div><!-- card -->
                                                            </div><!-- col-3 -->

                                                            <div class="col-12 col-md-4 mg-t-10">
                                                                <div class="card card-status bg-body-custom-ungu">
                                                                    <div class="media">
                                                                        <i
                                                                            class="icon ion-ios-body-outline tx-danger"></i>
                                                                        <div class="media-body">
                                                                            <h1>61,119</h1>
                                                                            <p>Total Tanpa Keterangan</p>
                                                                        </div><!-- media-body -->
                                                                    </div><!-- media -->
                                                                </div><!-- card -->
                                                            </div><!-- col-3 -->
                                                        </div>

                                                        <div class="row row-xs mg-t-30">
                                                            <div class="col-12 col-md-6">
                                                                <div class="card card-activities pd-20">
                                                                    <div id="chartPresensiSidesi"></div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-md-6">
                                                                <div class="card card-activities pd-20">
                                                                    <div id="chartLinePresensiSidesi"></div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="card card-activities pd-20 mg-t-30">
                                                                    <div class="text-center mb-3">
                                                                        <h5>Grafik Presensi Masuk dan Pulang</h5>
                                                                        <span>Periode : Tanggal, Bulan & Tahun</span>
                                                                    </div>
                                                                    <div class="d-flex row-sm justify-content-center">
                                                                        <div class="wd-200 mg-b-30">
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <div class="input-group-text">
                                                                                        <i
                                                                                            class="icon ion-calendar tx-16 lh-0 op-6"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <input type="text"
                                                                                    class="form-control fc-datepicker"
                                                                                    placeholder="MM/DD/YYYY">
                                                                            </div>
                                                                        </div><!-- wd-200 -->
                                                                        <div class="wd-200 mg-b-30">
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <div class="input-group-text">
                                                                                        <i
                                                                                            class="icon ion-calendar tx-16 lh-0 op-6"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <input type="text"
                                                                                    class="form-control fc-datepicker"
                                                                                    placeholder="MM/DD/YYYY">
                                                                            </div>
                                                                        </div><!-- wd-200 -->
                                                                        <div class="col-12 col-md-3">
                                                                            <select
                                                                                class="form-control select2-show-search mg-b-30"
                                                                                data-placeholder="Pilih">
                                                                                <option label="Pilih"></option>
                                                                                <option
                                                                                    value="Dinas Komunikasi dan Digital">
                                                                                    Dinas Komunikasi dan Digital
                                                                                </option>
                                                                                <option value="Dinas Sosial">Dinas
                                                                                    Sosial</option>
                                                                                <option value="Dinas Perikanan">Dinas
                                                                                    Perikanan</option>
                                                                                <option value="Bapenda">Bapenda</option>
                                                                                <option value="Bappeda">Bappeda</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div id="chartPresensiPeriodikSidesi"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane" id="lkhsidesi">
                                                    <div class="container-fluid">
                                                        <div class="row row-xs mg-t-30">
                                                            <div class="col-12 col-lg-4">
                                                                <div class="card card-activities pd-20">
                                                                    <h5>Laporan Kinerja Harian</h5>
                                                                    <div class="alert alert-solid alert-info mg-t-30">
                                                                        <div class="d-flex justify-content-between">
                                                                            <span class="fs-16">Total <br> LKH</span>
                                                                            <strong style="font-size: 32px;">27</strong>
                                                                        </div>
                                                                    </div><!-- alert -->

                                                                    <div class="alert alert-solid alert-success">
                                                                        <div class="d-flex justify-content-between">
                                                                            <span class="fs-16">Sudah <br>Diverifikasi
                                                                            </span>
                                                                            <strong style="font-size: 32px;">20</strong>
                                                                        </div>
                                                                    </div><!-- alert -->

                                                                    <div class="alert alert-solid alert-warning">
                                                                        <div class="d-flex justify-content-between">
                                                                            <span class="fs-16">Belum <br>
                                                                                Diverifikasi</span>
                                                                            <strong style="font-size: 32px;">7</strong>
                                                                        </div>
                                                                    </div><!-- alert -->

                                                                    <div class="alert alert-solid alert-danger">
                                                                        <div class="d-flex justify-content-between">
                                                                            <span class="fs-16">Ditolak</span>
                                                                            <strong style="font-size: 32px;">7</strong>
                                                                        </div>
                                                                    </div><!-- alert -->
                                                                </div><!-- card -->
                                                            </div><!-- col-5 -->
                                                            <div class="col-12 col-lg-8">
                                                                <div class="card card-people-list pd-10">
                                                                    <div id="capaianLkhSidesi"></div>
                                                                </div>
                                                            </div><!-- card -->
                                                        </div><!-- col-3 -->
                                                    </div>
                                                </div>

                                                <div class="class tab-pane" id="tataSurat">
                                                    <div class="container-fluid">
                                                        <div class="row row-xs mg-t-30">
                                                            <div class="col-12 col-md-6 mg-t-10">
                                                                <div class="card card-activities pd-20">
                                                                    <h6 class="slim-card-title mg-b-20">Berdasarkan
                                                                        Jenis Surat Masuk <i
                                                                            class="fa fa-info-circle"></i>
                                                                    </h6>
                                                                    <div class="row row-sm">
                                                                        <div class="col-12">
                                                                            <div class="card card-sales bg-mantle">
                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <label
                                                                                            class="tx-12 tx-white-8">Total
                                                                                            Surat Masuk</label>
                                                                                        <p>1,898</p>
                                                                                    </div><!-- col -->
                                                                                    <div class="col">
                                                                                        <label
                                                                                            class="tx-12 tx-white-8 ">Belum
                                                                                            Didisposisikan</label>
                                                                                        <p>32,112</p>
                                                                                    </div><!-- col -->
                                                                                    <div class="col">
                                                                                        <label
                                                                                            class="tx-12 tx-white-8">Sudah
                                                                                            Didisposisikan</label>
                                                                                        <p>72,067</p>
                                                                                    </div><!-- col -->
                                                                                    <div class="col">
                                                                                        <label
                                                                                            class="tx-12 tx-white-8">Selesai</label>
                                                                                        <p>72,067</p>
                                                                                    </div><!-- col -->
                                                                                </div><!-- row -->
                                                                            </div><!-- card -->
                                                                        </div><!-- col-4 -->
                                                                    </div><!-- row -->
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 mg-t-10">
                                                                <div class="card card-activities pd-20">
                                                                    <h6 class="slim-card-title mg-b-20">Berdasarkan
                                                                        Jenis Surat Keluar <i
                                                                            class="fa fa-info-circle"></i>
                                                                    </h6>
                                                                    <div class="row row-sm">
                                                                        <div class="col-12">
                                                                            <div class="card card-sales bg-danger">
                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <label
                                                                                            class="tx-12 tx-white-8">Total
                                                                                            Surat Keluar</label>
                                                                                        <p>1,898</p>
                                                                                    </div><!-- col -->
                                                                                    <div class="col">
                                                                                        <label
                                                                                            class="tx-12 tx-white-8 ">Proses
                                                                                            Verifikasi</label>
                                                                                        <p>32,112</p>
                                                                                    </div><!-- col -->
                                                                                    <div class="col">
                                                                                        <label
                                                                                            class="tx-12 tx-white-8">Menunggu
                                                                                            Tandatangan</label>
                                                                                        <p>72,067</p>
                                                                                    </div><!-- col -->
                                                                                    <div class="col">
                                                                                        <label
                                                                                            class="tx-12 tx-white-8">Sudah
                                                                                            Ditandatangani</label>
                                                                                        <p>72,067</p>
                                                                                    </div><!-- col -->
                                                                                </div><!-- row -->
                                                                            </div><!-- card -->
                                                                        </div><!-- col-4 -->
                                                                    </div><!-- row -->
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mg-t-10">
                                                                <div class="card card-activities pd-20">
                                                                    <h6 class="slim-card-title mg-b-20">Tata Naskah
                                                                        Surat Sidesi <i class="fa fa-info-circle"></i>
                                                                    </h6>
                                                                    <div class="card card-activities pd-20">
                                                                        <div id="kondisiSuratSidesi"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div><!-- container -->
                                        </div><!-- tab-pane -->
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
