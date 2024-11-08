<?php

?>
<div>

    <div class="slim-mainpanel">
        <div class="container-fluid pd-t-30">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="card">
                        <div class="card-body pd-b-0">
                            <h6 class="slim-card-title mb-3"><i class="fa fa-universal-access mr-2"></i>Informasi
                                Kependudukan</h6>
                            <div class="sec-01">
                                <h1 class="tx-lato" style="font-weight: bold;"><i class="fa fa-map mr-3"></i>323,360
                                </h1>
                                <p class="tx-12"></i>Luas Wilayah (km2)</p>
                            </div>
                            <div class="sec-02">
                                <h1 class="tx-lato" style="font-weight: bold;"><i class="fa fa-user mr-3"></i>323,360
                                </h1>
                                <p class="tx-12"></i>Jumlah KK</p>
                            </div>
                            <div class="sec-03">
                                <h1 class="tx-lato" style=" font-weight: bold;"><i class="fa fa-users mr-3"></i>323,360
                                </h1>
                                <p class="tx-12">Jumlah Penduduk (jiwa)</p>
                            </div>
                        </div><!-- card-body -->
                    </div><!-- card -->
                </div>

                <div class="col-12 col-md-5 mg-t-10 mg-lg-t-0">
                    <div class="card card-activities pd-20">
                        <h6 class="slim-card-title">Perbandingan Jenis Kelamin</h6>
                        <div class="bd pd-t-30 pd-b-20 pd-x-20"><canvas id="chartDonuts" height="115"></canvas></div>
                    </div><!-- card -->
                </div>

                <div class="col-12 col-md-4 mg-t-10 mg-lg-t-0">
                    <div class="card card-activities pd-20">
                        <h6 class="slim-card-title">Kepadatan Penduduk (Jiwa/km2)</h6>
                        <div class="bd pd-t-30 pd-b-20 pd-x-20"><canvas id="kepadatanPenduduk" height="150"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mg-t-10">
                <div class="col-12 mg-t-10 mg-lg-t-0">
                    <div class="card card-activities pd-20">
                        <h6 class="slim-card-title mg-b-20">Penduduk Menurut Agama <i class="fa fa-info-circle"></i>
                        </h6>
                        <div class="row row-sm">
                            <div class="col-12">
                                <div class="card card-sales bg-mantle">
                                    <div class="row">
                                        <div class="col">
                                            <label class="tx-12 tx-white-8">Islam</label>
                                            <p>1,898</p>
                                        </div><!-- col -->
                                        <div class="col">
                                            <label class="tx-12 tx-white-8 ">Katolik</label>
                                            <p>32,112</p>
                                        </div><!-- col -->
                                        <div class="col">
                                            <label class="tx-12 tx-white-8">Protestan</label>
                                            <p>72,067</p>
                                        </div><!-- col -->
                                        <div class="col">
                                            <label class="tx-12 tx-white-8">Hindu</label>
                                            <p>72,067</p>
                                        </div><!-- col -->
                                        <div class="col">
                                            <label class="tx-12 tx-white-8">Budha</label>
                                            <p>72,067</p>
                                        </div><!-- col -->
                                        <div class="col">
                                            <label class="tx-12 tx-white-8">Konghucu</label>
                                            <p>72,067</p>
                                        </div><!-- col -->
                                    </div><!-- row -->
                                </div><!-- card -->
                            </div><!-- col-4 -->
                        </div><!-- row -->
                    </div>
                </div>
            </div>

            <div class="row mg-t-10">
                <div class="col-12 col-md-6 mg-t-10">
                    <div class="card card-activities pd-20">
                        <h6 class="slim-card-title">Laju Pertumbuhan Penduduk <i class="fa fa-info-circle ms-2"></i>
                        </h6>
                        <div class="bd pd-t-30 pd-b-20 pd-x-20"><canvas id="lajuPenduduk" height="150"></canvas></div>
                    </div><!-- card -->
                </div>
                <div class="col-12 col-md-6 mg-t-10">
                    <div class="card card-activities pd-20">
                        <h6 class="slim-card-title">Penduduk Per Kecamatan <i class="fa fa-info-circle ms-2"></i></h6>
                        <div class="bd pd-t-30 pd-b-20 pd-x-20"><canvas id="chartBar40" height="150"></canvas></div>
                    </div><!-- card -->
                </div><!-- col-3 -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-quick-post mg-t-10">
                        <h6 class="slim-card-title">Penduduk Menurut Jenis Pekerjaan</h6>

                        <div class="bd pd-t-30 pd-b-20 pd-x-20"><canvas id="kelompokPekerjaan" height="50"></canvas>
                        </div>
                    </div><!-- card -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-quick-post mg-t-10">
                        <h6 class="slim-card-title">Penduduk Menurut Umur</h6>
                        <div class="bd pd-t-30 pd-b-20 pd-x-20"><canvas id="kelompokUmur" height="50"></canvas></div>
                    </div><!-- card -->
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="{{ asset('assets/js/dashboard-opd/kependudukan.js') }}"></script>
    @endpush
</div>
