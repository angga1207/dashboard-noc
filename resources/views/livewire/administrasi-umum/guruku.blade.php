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

                                <div class="tab-pane active" id="guruku">
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <h3 class="tx-inverse mg-b-15">Dashboard, Guruku!</h3>
                                            <p class="mg-b-40">Guruku adalah Sistem Informasi Tata Kelola Kinerja Guru
                                                di lingkungan
                                                Pemerintah Kabupaten Ogan Ilir dengan fitur Presensi, Laporan Kinerja
                                                Harian dan CCTV
                                                Capture.
                                            </p>

                                            <div class="files-lottie"
                                                style="position: absolute; z-index: 1; right: 0%; bottom: 0%;">
                                                <script
                                                    src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs"
                                                    type="module"></script>

                                                <dotlottie-player
                                                    src="https://lottie.host/cadee588-efa5-4df1-9c9d-fe2e606bb619/28baSXFlY1.json"
                                                    background="transparent" speed="1"
                                                    style="width: 300px; height: 300px;" loop autoplay>
                                                </dotlottie-player>
                                            </div>


                                            <h6 class="slim-card-title mg-b-15">Statistik Jumlah ASN</h6>
                                            <div class="block no-gutters">
                                                <div class="col-sm-6">
                                                    <div class="card bg-body-custom-ungu card-earning-summary">
                                                        <h6>Guru PNS</h6>
                                                        <h1>2950</h1>
                                                        <span>Total Seluruh PNS</span>
                                                    </div><!-- card -->
                                                </div><!-- col-6 -->

                                                <div class="col-sm-6">
                                                    <div
                                                        class="card bg-body-custom-ungu card-earning-summary mg-sm-l--1 bd-t-0 bd-sm-t">
                                                        <h6>Guru PPPK</h6>
                                                        <h1>1420</h1>
                                                        <span>Total Seluruh PPPK</span>
                                                    </div><!-- card -->
                                                </div><!-- col-6 -->
                                            </div><!-- row -->
                                        </div>

                                        <div class="col-lg-6 mg-t-20 mg-sm-t-30 mg-lg-t-0">
                                            <div class="card">
                                                <div class="row pd-60">
                                                    <div id="persentaseGuruPNS"></div>
                                                    <div id="persentaseGuruPppk"></div>
                                                </div>
                                            </div><!-- card -->
                                        </div><!-- col-6 -->

                                    </div><!-- row -->

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card card-dash-chart-one mg-t-20 mg-sm-t-30">
                                                <div class="row row-xs">
                                                    <div class="col-lg-4">
                                                        <div class="left-panel">
                                                            <div class="active-visitor-wrapper">
                                                                <h1>46</h1>
                                                                <p>Jumlah Seluruh Guru ASN yang Sudah Sertifikasi</p>
                                                                <div class="tx-24 mg-b-10 top-5">
                                                                    <i class="icon ion-man tx-primary"></i>
                                                                    <i class="icon ion-man tx-primary"></i>
                                                                    <i class="icon ion-man tx-primary"></i>
                                                                    <i class="icon ion-man tx-gray-600"></i>
                                                                    <i class="icon ion-man tx-gray-600"></i>
                                                                    <i class="icon ion-man tx-gray-600"></i>
                                                                    <i class="icon ion-man tx-gray-400"></i>
                                                                    <i class="icon ion-man tx-gray-400"></i>
                                                                    <i class="icon ion-man tx-gray-400"></i>
                                                                    <i class="icon ion-man tx-gray-400"></i>
                                                                </div>
                                                            </div><!-- active-visitor-wrapper -->

                                                            <hr class="mg-t-30 mg-b-40">

                                                            <h6 class="visitor-operating-label">Kondisi Guru ASN Sudah
                                                                Sertifikasi</h6>

                                                            <div class="col">
                                                                <div class="alert alert-solid alert-warning">
                                                                    <div class="d-flex justify-content-between">
                                                                        <span>Guru SMP Laki-Laki</span>
                                                                        <strong>17</strong>
                                                                    </div>
                                                                </div><!-- alert -->
                                                            </div>
                                                            <div class="col">
                                                                <div class="alert alert-solid alert-success">
                                                                    <div class="d-flex justify-content-between">
                                                                        <span>Guru SMP Perempuan</span>
                                                                        <strong>20</strong>
                                                                    </div>
                                                                </div><!-- alert -->
                                                            </div>
                                                            <div class="col">
                                                                <div class="alert alert-solid alert-info">
                                                                    <div class="d-flex justify-content-between">
                                                                        <span>Guru SD Laki-Laki</span>
                                                                        <strong>7</strong>
                                                                    </div>
                                                                </div><!-- alert -->
                                                            </div>
                                                            <div class="col">
                                                                <div class="alert alert-solid alert-danger">
                                                                    <div class="d-flex justify-content-between">
                                                                        <span>Guru SD Perempuan</span>
                                                                        <strong>8</strong>
                                                                    </div>
                                                                </div><!-- alert -->
                                                            </div>

                                                        </div><!-- left-panel -->
                                                    </div><!-- col-4 -->
                                                    <div class="col-lg-8">
                                                        <div class="right-panel">
                                                            <h6 class="slim-card-title">Jumlah Guru ASN Per Kecamatan
                                                            </h6>
                                                            <div id="guruSertifikasi"></div>
                                                        </div><!-- right-panel -->
                                                    </div><!-- col-8 -->
                                                </div><!-- row -->
                                            </div><!-- card -->
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                            <div class="card card-dash-chart-one mg-t-20 mg-sm-t-30">
                                                <div id="rentangUsia" class="pd-20"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="card card-dash-chart-one mg-t-20 mg-sm-t-30">
                                                <div id="pnsPangGol" class="pd-20"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="card card-dash-chart-one mg-t-20 mg-sm-t-30">
                                                <div id="pppkPangGol" class="pd-20"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col mg-t-20 mg-sm-t-30">
                                            <div class="alert alert-solid alert-info tx-center">
                                                <h4><strong>Statistik</strong> Data Presensi Guruku</h4>
                                            </div><!-- alert -->
                                        </div>
                                    </div>

                                    <div class="row row-xs mg-t-30">
                                        <div class="col-sm-6 col-lg-4 mg-t-10">
                                            <div class="card card-status bg-body-custom-ungu">
                                                <div class="media">
                                                    <i class="icon ion-ios-person-outline tx-purple"></i>
                                                    <div class="media-body">
                                                        <h1>32,604</h1>
                                                        <p>Total Hadir Dinas Dalam</p>
                                                    </div><!-- media-body -->
                                                </div><!-- media -->
                                            </div><!-- card -->
                                        </div><!-- col-3 -->
                                        <div class="col-sm-6 col-lg-4 mg-t-10 ">
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
                                        <div class="col-sm-6 col-lg-4 mg-t-10">
                                            <div class="card card-status bg-body-custom-ungu">
                                                <div class="media">
                                                    <i class="icon ion-ios-body-outline tx-danger"></i>
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
                                            <div class="card card card-activities pd-20">
                                                <select class="form-control select2-show-search"
                                                    data-placeholder="Pilih Satuan Wilayah">
                                                    <option label="Pilih Satuan Wilayah"></option>
                                                    <option value="KI">Satuan Wilayah Kecamatan Indralaya</option>
                                                    <option value="KIS">Satuan Wilayah Kecamatan Indralaya Utara
                                                    </option>
                                                </select>
                                                <div id="chartPresensiGuru" class="mg-t-20"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="card card-activities pd-20">
                                                <div class="d-flex justify-content-between">
                                                    <!-- <span>Pilih Berdasarkan Satuan Pendidikan</span> -->
                                                    <div class="col-12 col-md-6">
                                                        <select class="form-control select2-show-search"
                                                            data-placeholder="Pilih Satuan Wilayah">
                                                            <option label="Pilih Satuan Wilayah"></option>
                                                            <option value="KI">Satuan Wilayah Kecamatan Indralaya
                                                            </option>
                                                            <option value="KIS">Satuan Wilayah Kecamatan Indralaya Utara
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <select class="form-control select2-show-search"
                                                            data-placeholder="Pilih Pendidikan">
                                                            <option label="Pilih Satuan Pendidikan"></option>
                                                            <option value="SD1">SD Negeri 1</option>
                                                            <option value="SD2">SD Negeri 2</option>
                                                            <option value="SMP1">SMP Negeri 1</option>
                                                            <option value="SMP3">SMP Negeri 3</option>
                                                            <option value="SMP9">SD Negeri 9</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div id="chartLinePresensiGuruku" class="mg-t-20"></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card card-activities pd-20 mg-t-30">
                                                <div class="text-center mb-3">
                                                    <h5>Grafik Presensi Masuk dan Pulang</h5>
                                                    <span>Periode : Tanggal, Bulan & Tahun</span>
                                                </div>
                                                <div class="row row-sm justify-content-center">
                                                    <div class="col-12 col-md-3 mg-b-30">
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
                                                    <div class="col-12 col-md-3 mg-b-30">
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
                                                    <div class="col-12 col-md-3 mg-b-30">
                                                        <select class="form-control select2 select2-show-search"
                                                            data-placeholder="Pilih Satuan Wilayah">
                                                            <option label="Pilih Satuan Wilayah"></option>
                                                            <option value="KI">Satuan Wilayah Kecamatan Indralaya
                                                            </option>
                                                            <option value="KIS">Satuan Wilayah Kecamatan Indralaya Utara
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-md-3 mg-b-30">
                                                        <select class="form-control select2 select2-show-search"
                                                            data-placeholder="Pilih Pendidikan">
                                                            <option label="Pilih Satuan Pendidikan"></option>
                                                            <option value="SD1">SD Negeri 1</option>
                                                            <option value="SD2">SD Negeri 2</option>
                                                            <option value="SMP1">SMP Negeri 1</option>
                                                            <option value="SMP3">SMP Negeri 3</option>
                                                            <option value="SMP9">SD Negeri 9</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div id="chartPresensiPeriodikGuruku"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row row-xs mg-t-30">
                                        <div class="col-12 col-lg-4">
                                            <div class="card card-activities pd-20">
                                                <div class="row row-sm justify-content-between">
                                                    <!-- <span>Pilih Berdasarkan Satuan Pendidikan</span> -->
                                                    <div class="col-12 col-md-6 mg-b-30">
                                                        <select class="form-control select2 select2-show-search"
                                                            data-placeholder="Pilih Satuan Wilayah">
                                                            <option label="Pilih Satuan Wilayah"></option>
                                                            <option value="KI">Satuan Wilayah Kecamatan Indralaya
                                                            </option>
                                                            <option value="KIS">Satuan Wilayah Kecamatan Indralaya Utara
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-md-6 mg-b-30">
                                                        <select class="form-control select2 select2-show-search"
                                                            data-placeholder="Pilih Pendidikan">
                                                            <option label="Pilih Satuan Pendidikan"></option>
                                                            <option value="SD1">SD Negeri 1</option>
                                                            <option value="SD2">SD Negeri 2</option>
                                                            <option value="SMP1">SMP Negeri 1</option>
                                                            <option value="SMP3">SMP Negeri 3</option>
                                                            <option value="SMP9">SD Negeri 9</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <h5 class="mg-t-30">Laporan Kinerja Harian</h5>
                                                <div class="alert alert-solid alert-info mg-t-10">
                                                    <div class="d-flex justify-content-between">
                                                        <span>Total LKH</span>
                                                        <strong style="font-size: 32px;">27</strong>
                                                    </div>
                                                </div><!-- alert -->

                                                <div class="alert alert-solid alert-success">
                                                    <div class="d-flex justify-content-between">
                                                        <span>Sudah Diverifikasi </span>
                                                        <strong style="font-size: 32px;">20</strong>
                                                    </div>
                                                </div><!-- alert -->

                                                <div class="alert alert-solid alert-warning">
                                                    <div class="d-flex justify-content-between">
                                                        <span>Belum Diverifikasi</span>
                                                        <strong style="font-size: 32px;">7</strong>
                                                    </div>
                                                </div><!-- alert -->

                                                <div class="alert alert-solid alert-danger">
                                                    <div class="d-flex justify-content-between">
                                                        <span>Ditolak</span>
                                                        <strong style="font-size: 32px;">7</strong>
                                                    </div>
                                                </div><!-- alert -->
                                            </div><!-- card -->
                                        </div><!-- col-5 -->
                                        <div class="col-12 col-lg-8">
                                            <div class="card card-people-list pd-20">
                                                <div class="row justify-content-between">
                                                    <!-- <span>Pilih Berdasarkan Satuan Pendidikan</span> -->
                                                    <div class="col-12 col-md-3 mg-b-30">
                                                        <select class="form-control select2 select2-show-search"
                                                            data-placeholder="Pilih Satuan Wilayah">
                                                            <option label="Pilih Satuan Wilayah"></option>
                                                            <option value="KI">Satuan Wilayah Kecamatan Indralaya
                                                            </option>
                                                            <option value="KIS">Satuan Wilayah Kecamatan Indralaya Utara
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-md-3 mg-b-30">
                                                        <select class="form-control select2 select2-show-search"
                                                            data-placeholder="Pilih Pendidikan">
                                                            <option label="Pilih Satuan Pendidikan"></option>
                                                            <option value="SD1">SD Negeri 1</option>
                                                            <option value="SD2">SD Negeri 2</option>
                                                            <option value="SMP1">SMP Negeri 1</option>
                                                            <option value="SMP3">SMP Negeri 3</option>
                                                            <option value="SMP9">SD Negeri 9</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div id="chartLkhGuruku"></div>
                                            </div>
                                        </div><!-- card -->
                                    </div><!-- col-3 -->
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
