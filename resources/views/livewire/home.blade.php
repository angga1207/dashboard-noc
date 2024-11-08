<?php

?>
<div>

    <div class="slim-mainpanel">
        <div class="container-fluid pd-t-20">
            <div class="row row-sm">
                <div class="col-12 col-md-3">
                    <div class="card card-sales">
                        <div class="row">
                            <div class="col-6">
                                <div class="melayang">
                                    <img class="img-bupati" src="assets/img/lanjutkerja.png" alt="">
                                </div>
                            </div>
                            <div class="col-6 pd-0">
                                <p wire:ignore>
                                    <span id="tanggalwaktu"
                                        style="font-size: 14px; font-weight: 600; margin-bottom: 0; padding: 0; color: rgb(66, 66, 66) !important;"></span>
                                    <br>
                                    <span id="waktuAja"
                                        style="font-size: 20px; font-weight: 800; margin-bottom: 0; padding: 0; color: rgb(113, 113, 113) !important;">
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div><!-- card -->

                    <div class="card mg-t-10">
                        <div class="card-body">
                            <h6 class="slim-card-title mb-3">
                                <i class="fa fa-universal-access mr-2"></i>
                                Agenda Kegiatan(semesta)
                            </h6>

                            <!-- MODAL EFFECTS -->
                            <div id="modalAgenda" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content bd-0 tx-14">
                                        <div class="modal-header pd-y-20 pd-x-25">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Detail Agenda
                                                </h6>
                                            </div>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body pd-25" style="max-height: 400px; overflow: scroll;">

                                            <div class="row row-sm row-timeline">
                                                <div class="col-12">
                                                    <div class="card-contact justify-content-center">
                                                        <div class="tx-center d-flex justify-content-center align-items-center"
                                                            style="flex-direction: column;">
                                                            <script
                                                                src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs"
                                                                type="module"></script>
                                                            <dotlottie-player
                                                                src="https://lottie.host/55ad3897-76a0-425d-8897-183f4d3d9814/rJcE8AeeSd.json"
                                                                background="transparent" speed="1"
                                                                style="width: 100px; height: 100px;" loop autoplay>
                                                            </dotlottie-player>
                                                            <h5 class="mg-t-10 mg-b-5">
                                                                <a href="" class="contact-name">Judul Agenda Lorem ipsum
                                                                    dolor sit amet...</a>
                                                            </h5>
                                                            <p>Leading Sector : Dinas Komunikasi Informatika Statistik
                                                                dan Persandian</p>
                                                        </div>


                                                        <p class="contact-item">
                                                            <span>Hari:</span>
                                                            <span>Senin, 4 November 2024</span>
                                                        </p><!-- contact-item -->
                                                        <p class="contact-item">
                                                            <span>Waktu:</span>
                                                            <a href="">08:30 WIB s.d Selesai</a>
                                                        </p><!-- contact-item -->
                                                        <p class="contact-item">
                                                            <span>Lokasi:</span>
                                                            <a href="">Ruang Rapat Utama Bupati</a>
                                                        </p><!-- contact-item -->
                                                        <p class="contact-item">
                                                            <span>Pakaian:</span>
                                                            <a href="">Yang berlaku hari itu</a>
                                                        </p><!-- contact-item -->
                                                        <p class="contact-item">
                                                            <span>Dihadiri Oleh:</span>
                                                            <a href="">Bupati</a>
                                                        </p><!-- contact-item -->
                                                        <p class="contact-item">
                                                            <span>Turut diundang :</span>
                                                        <ul class="list-group">
                                                            <li class="list-group-item">
                                                                <p class="mg-b-0"><strong
                                                                        class="tx-inverse tx-medium">Dinas
                                                                        Sosial</strong></p>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <p class="mg-b-0"><strong
                                                                        class="tx-inverse tx-medium">Dinas
                                                                        Kesehatan</strong></p>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <p class="mg-b-0"><strong
                                                                        class="tx-inverse tx-medium">Dinas
                                                                        Perkimtan</strong></p>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <p class="mg-b-0"><strong
                                                                        class="tx-inverse tx-medium">Dinas PUPR</strong>
                                                                </p>
                                                            </li>
                                                        </ul>
                                                        </p><!-- contact-item -->
                                                        <p class="contact-item">
                                                            <span>Tambahkan Item Lainnya:</span>
                                                            <a href="">Lorem ipsum dolor sit amet.</a>
                                                        </p><!-- contact-item -->
                                                        <p class="contact-item">
                                                            <span>Tambahkan Item Lainnya:</span>
                                                            <a href="">Lorem ipsum dolor sit amet.</a>
                                                        </p><!-- contact-item -->
                                                    </div><!-- card -->
                                                </div><!-- col-9 -->
                                            </div><!-- row -->

                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div><!-- modal-dialog -->
                            </div>
                            <!-- modal -->

                            <div class="agenda">
                                <div class="card bd-0">
                                    <div class="card-header tx-medium bd-0 tx-white bg-mantle">
                                        Agenda Hari Ini
                                    </div><!-- card-header -->
                                    <div class="container-agenda" style="max-height: 600px; overflow-y: scroll;">
                                        <div class="card-body item-agenda bd bd-t-0 bg-custom">
                                            <div class="d-flex justify-content-between mg-b-2">
                                                <div class="tx-14">
                                                    <a href="" class="tx-gray-500"><i class="icon ion-star"></i></a>
                                                    <a href="" class="tx-gray-500 mg-l-5"><i
                                                            class="icon ion-android-attach"></i></a>
                                                </div>
                                                <span class="tx-12">Rabu, 26 Nov 2024 | 09:30:00 WB</span>
                                            </div><!-- d-flex -->
                                            <h6 class="tx-14 mg-t-10"><a href="#modalAgenda" data-toggle="modal"
                                                    class="modal-effect tx-inverse"><i
                                                        class="fa fa-bookmark mr-2"></i>Judul
                                                    Agenda Kegiatan</a></h6>
                                            <h6 class="tx-14"><a href="#modalAgenda" data-toggle="modal"
                                                    class="modal-effect tx-inverse"><i
                                                        class="fa fa-user mr-2"></i>Leading
                                                    Sector :
                                                    Diskominfo</a></h6>
                                            <h6 class="tx-14"><a href="#modalAgenda" data-toggle="modal"
                                                    class="modal-effect tx-inverse"><i
                                                        class="fa fa-university mr-2"></i>Lokasi :
                                                    Rapat
                                                    Utama
                                                    Bupati</a></h6>
                                            <h6 class="tx-14"><a href="#modalAgenda" data-toggle="modal"
                                                    class="modal-effect tx-inverse"><i
                                                        class="fa fa-users mr-2"></i>Dihadiri Oleh :
                                                    Bupati</a></h6>
                                        </div><!-- card-body -->
                                        <div class="card-body item-agenda bd bd-t-0 bg-custom">
                                            <div class="d-flex justify-content-between mg-b-2">
                                                <div class="tx-14">
                                                    <a href="" class="tx-gray-500"><i class="icon ion-star"></i></a>
                                                    <a href="" class="tx-gray-500 mg-l-5"><i
                                                            class="icon ion-android-attach"></i></a>
                                                </div>
                                                <span class="tx-12">Rabu, 26 Nov 2024 | 09:30:00 WB</span>
                                            </div><!-- d-flex -->
                                            <h6 class="tx-14 mg-t-10"><a href="#modalAgenda" data-toggle="modal"
                                                    class="modal-effect tx-inverse"><i
                                                        class="fa fa-bookmark mr-2"></i>Judul
                                                    Agenda Kegiatan</a></h6>
                                            <h6 class="tx-14"><a href="#modalAgenda" data-toggle="modal"
                                                    class="modal-effect tx-inverse"><i
                                                        class="fa fa-user mr-2"></i>Leading
                                                    Sector :
                                                    Diskominfo</a></h6>
                                            <h6 class="tx-14"><a href="#modalAgenda" data-toggle="modal"
                                                    class="modal-effect tx-inverse"><i
                                                        class="fa fa-university mr-2"></i>Lokasi :
                                                    Rapat
                                                    Utama
                                                    Bupati</a></h6>
                                            <h6 class="tx-14"><a href="#modalAgenda" data-toggle="modal"
                                                    class="modal-effect tx-inverse"><i
                                                        class="fa fa-users mr-2"></i>Dihadiri Oleh :
                                                    Bupati</a></h6>
                                        </div><!-- card-body -->
                                        <div class="card-body item-agenda bd bd-t-0 bg-custom">
                                            <div class="d-flex justify-content-between mg-b-2">
                                                <div class="tx-14">
                                                    <a href="" class="tx-gray-500"><i class="icon ion-star"></i></a>
                                                    <a href="" class="tx-gray-500 mg-l-5"><i
                                                            class="icon ion-android-attach"></i></a>
                                                </div>
                                                <span class="tx-12">Rabu, 26 Nov 2024 | 09:30:00 WB</span>
                                            </div><!-- d-flex -->
                                            <h6 class="tx-14 mg-t-10"><a href="#modalAgenda" data-toggle="modal"
                                                    class="modal-effect tx-inverse"><i
                                                        class="fa fa-bookmark mr-2"></i>Judul
                                                    Agenda Kegiatan</a></h6>
                                            <h6 class="tx-14"><a href="#modalAgenda" data-toggle="modal"
                                                    class="modal-effect tx-inverse"><i
                                                        class="fa fa-user mr-2"></i>Leading
                                                    Sector :
                                                    Diskominfo</a></h6>
                                            <h6 class="tx-14"><a href="#modalAgenda" data-toggle="modal"
                                                    class="modal-effect tx-inverse"><i
                                                        class="fa fa-university mr-2"></i>Lokasi :
                                                    Rapat
                                                    Utama
                                                    Bupati</a></h6>
                                            <h6 class="tx-14"><a href="#modalAgenda" data-toggle="modal"
                                                    class="modal-effect tx-inverse"><i
                                                        class="fa fa-users mr-2"></i>Dihadiri Oleh :
                                                    Bupati</a></h6>
                                        </div><!-- card-body -->
                                        <div class="card-body item-agenda bd bd-t-0 bg-custom">
                                            <div class="d-flex justify-content-between mg-b-2">
                                                <div class="tx-14">
                                                    <a href="" class="tx-gray-500"><i class="icon ion-star"></i></a>
                                                    <a href="" class="tx-gray-500 mg-l-5"><i
                                                            class="icon ion-android-attach"></i></a>
                                                </div>
                                                <span class="tx-12">Rabu, 26 Nov 2024 | 09:30:00 WB</span>
                                            </div><!-- d-flex -->
                                            <h6 class="tx-14 mg-t-10"><a href="#modalAgenda" data-toggle="modal"
                                                    class="modal-effect tx-inverse"><i
                                                        class="fa fa-bookmark mr-2"></i>Judul
                                                    Agenda Kegiatan</a></h6>
                                            <h6 class="tx-14"><a href="#modalAgenda" data-toggle="modal"
                                                    class="modal-effect tx-inverse"><i
                                                        class="fa fa-user mr-2"></i>Leading
                                                    Sector :
                                                    Diskominfo</a></h6>
                                            <h6 class="tx-14"><a href="#modalAgenda" data-toggle="modal"
                                                    class="modal-effect tx-inverse"><i
                                                        class="fa fa-university mr-2"></i>Lokasi :
                                                    Rapat
                                                    Utama
                                                    Bupati</a></h6>
                                            <h6 class="tx-14"><a href="#modalAgenda" data-toggle="modal"
                                                    class="modal-effect tx-inverse"><i
                                                        class="fa fa-users mr-2"></i>Dihadiri Oleh :
                                                    Bupati</a></h6>
                                        </div><!-- card-body -->
                                        <div class="card-body item-agenda bd bd-t-0 bg-custom">
                                            <div class="d-flex justify-content-between mg-b-2">
                                                <div class="tx-14">
                                                    <a href="" class="tx-gray-500"><i class="icon ion-star"></i></a>
                                                    <a href="" class="tx-gray-500 mg-l-5"><i
                                                            class="icon ion-android-attach"></i></a>
                                                </div>
                                                <span class="tx-12">Rabu, 26 Nov 2024 | 09:30:00 WB</span>
                                            </div><!-- d-flex -->
                                            <h6 class="tx-14 mg-t-10"><a href="#modalAgenda" data-toggle="modal"
                                                    class="modal-effect tx-inverse"><i
                                                        class="fa fa-bookmark mr-2"></i>Judul
                                                    Agenda Kegiatan</a></h6>
                                            <h6 class="tx-14"><a href="#modalAgenda" data-toggle="modal"
                                                    class="modal-effect tx-inverse"><i
                                                        class="fa fa-user mr-2"></i>Leading
                                                    Sector :
                                                    Diskominfo</a></h6>
                                            <h6 class="tx-14"><a href="#modalAgenda" data-toggle="modal"
                                                    class="modal-effect tx-inverse"><i
                                                        class="fa fa-university mr-2"></i>Lokasi :
                                                    Rapat
                                                    Utama
                                                    Bupati</a></h6>
                                            <h6 class="tx-14"><a href="#modalAgenda" data-toggle="modal"
                                                    class="modal-effect tx-inverse"><i
                                                        class="fa fa-users mr-2"></i>Dihadiri Oleh :
                                                    Bupati</a></h6>
                                        </div><!-- card-body -->

                                    </div>

                                    <div class="card-footer">
                                        <span class="ref">Sumber Data : Aplikasi Jadwalinbae</span>
                                    </div>
                                </div><!-- card -->
                            </div>
                        </div>
                    </div>
                </div><!-- col-4 -->

                <div class="col-12 col-md-5">
                    <div class="card card-sales">
                        <div class="d-flex spacer">
                            <h6 class="slim-card-title mb-3">
                                <i class="fa fa-universal-access mr-2" style="font-size: 20px;"></i>
                                Surat Masuk/Keluar
                                {{-- Feature Finish / Done --}}
                                <i class="fa fa-check text-success"></i>
                                {{-- Feature Finish / Done --}}
                            </h6>
                        </div>

                        <div wire:init="_getSuratSemesta"></div>
                        <!-- List Surat Masuk -->
                        <div class="row row-sm mg-t-20" id="ListSuratMasuk">
                            <div class="col-12">
                                <div class="row row-xs justify-content-between">
                                    <h5>
                                        Surat Masuk
                                        <strong class="tx-dark">Semesta</strong>
                                    </h5>
                                    {{-- <a href="noc_detail_surat_masuk.html">Detail Page Surat Masuk</a> --}}
                                </div>
                            </div>

                            <!-- MODAL EFFECTS -->
                            <div id="modalSuratMasuk" class="modal fade">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content bd-0 tx-14">
                                        <div class="modal-header pd-y-20 pd-x-25">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">
                                                    Daftar Surat Masuk Semesta
                                                </h6>
                                            </div>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body pd-25">
                                            <div class="row row-sm justify-content-between">
                                                <div class="col-12 col-md-4">
                                                    <select class="form-control select2-show-search mg-b-30"
                                                        data-placeholder="Pilih Bulan">
                                                        <option label="Pilih Bulan"></option>
                                                        <option>Januari</option>
                                                        <option>Februari</option>
                                                        <option>Maret</option>
                                                        <option>...</option>
                                                        <option>Desember</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <select class="form-control select2-show-search mg-b-30"
                                                        data-placeholder="Pilih Tahun">
                                                        <option label="Pilih Tahun"></option>
                                                        <option>2024</option>
                                                        <option>2023</option>
                                                        <option>2022</option>
                                                        <option>2021</option>
                                                        <option>2020</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-lg-3">
                                                    <select class="form-control select2-show-search mg-b-30"
                                                        data-placeholder="Pilih Status">
                                                        <option label="Pilih Status"></option>
                                                        <option>Belum Diproses</option>
                                                        <option>Disposisi</option>
                                                        <option>Selesai</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-lg-2">
                                                    <button type="button" class="btn btn-primary active"><i
                                                            class="fa fa-filter"
                                                            style="margin-right: 5px;"></i>Filter</button>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-colored table-primary">
                                                    <thead>
                                                        <tr>
                                                            <th class="wd-10p">#</th>
                                                            <th class="wd-20p">Tanggal Surat</th>
                                                            <th class="wd-20p">Nomor Surat </th>
                                                            <th class="wd-35p">Hal</th>
                                                            <th class="wd-35p">Asal Surat</th>
                                                            <th class="wd-20p">Status Tindak Lanjut</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>
                                                                <span>31 Oktober 2024</span><br>
                                                                <span class="badge badge-info">Semesta</span>
                                                            </td>
                                                            <td>000.7.2/465/BAPPEDA-PPE/2024</td>
                                                            <td>Permintaan Penyampaian Laporan Realisasi Capaian Kinerja
                                                                dan Keuangan Triwulan III
                                                                Tahun Anggaran 2024</td>
                                                            <td>AGUNG ABDI SAPUTRA - Analis Perencanaan (Kelas 7)</td>
                                                            <td><span class="badge badge-primary">disposisi</span></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>
                                                                <span>31 Oktober 2024</span><br>
                                                                <span class="badge badge-info">Semesta</span>
                                                            </td>
                                                            <td>000.7.2/465/BAPPEDA-PPE/2024</td>
                                                            <td>Permintaan Penyampaian Laporan Realisasi Capaian Kinerja
                                                                dan Keuangan Triwulan III
                                                                Tahun Anggaran 2024</td>
                                                            <td>AGUNG ABDI SAPUTRA - Analis Perencanaan (Kelas 7)</td>
                                                            <td><span class="badge badge-warning tx-white">belum
                                                                    diproses</span></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>
                                                                <span>31 Oktober 2024</span><br>
                                                                <span class="badge badge-info">Semesta</span>
                                                            </td>
                                                            <td>000.7.2/465/BAPPEDA-PPE/2024</td>
                                                            <td>Permintaan Penyampaian Laporan Realisasi Capaian Kinerja
                                                                dan Keuangan Triwulan III
                                                                Tahun Anggaran 2024</td>
                                                            <td>AGUNG ABDI SAPUTRA - Analis Perencanaan (Kelas 7)</td>
                                                            <td><span class="badge badge-success">selesai</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div><!-- table-responsive -->
                                        </div>
                                        <div class="modal-footer">
                                            <nav aria-label="Page navigation">
                                                <ul class="pagination mg-b-0">
                                                    <li class="page-item active"><a class="page-link" href="#">1</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Next">
                                                            <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div><!-- modal-dialog -->
                            </div>
                            <!-- modal -->

                            <!-- MODAL EFFECTS -->
                            <div id="modalSuratKeluar" class="modal fade">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content bd-0 tx-14">
                                        <div class="modal-header pd-y-20 pd-x-25">
                                            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Daftar Surat Keluar
                                                Semesta</h6>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body pd-25">
                                            <div class="row row-sm justify-content-between">
                                                <div class="col-12 col-md-3">
                                                    <select class="form-control select2-show-search mg-b-30"
                                                        data-placeholder="Pilih">
                                                        <option label="Pilih Bulan"></option>
                                                        <option>Januari</option>
                                                        <option>Februari</option>
                                                        <option>Maret</option>
                                                        <option>...</option>
                                                        <option>Desember</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <select class="form-control select2-show-search mg-b-30"
                                                        data-placeholder="Pilih">
                                                        <option label="Pilih Tahun"></option>
                                                        <option>2024</option>
                                                        <option>2023</option>
                                                        <option>2022</option>
                                                        <option>2021</option>
                                                        <option>2020</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-lg-4">
                                                    <select class="form-control select2-show-search mg-b-30"
                                                        data-placeholder="Pilih">
                                                        <option label="Pilih Perangkat Daerah"></option>
                                                        <option>Dinas Sosial</option>
                                                        <option>Dinas Kesehatan</option>
                                                        <option>Dinas Pendidikan</option>
                                                        <option>Bappeda</option>
                                                        <option>Bapenda</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-lg-2">
                                                    <button type="button" class="btn btn-indigo active"><i
                                                            class="fa fa-filter"
                                                            style="margin-right: 5px;"></i>Filter</button>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-colored table-indigo">
                                                    <thead>
                                                        <tr>
                                                            <th class="wd-10p">#</th>
                                                            <th class="wd-20p">Tanggal Surat</th>
                                                            <th class="wd-20p">Nomor Surat </th>
                                                            <th class="wd-35p">Hal</th>
                                                            <th class="wd-35p">Asal Surat</th>
                                                            <th class="wd-20p">Status Verifikator</th>
                                                            <th class="wd-20p">Status Penandatangan</th>
                                                            <th class="wd-20p">Status Kirim</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>
                                                                <span>31 Oktober 2024</span><br>
                                                            </td>
                                                            <td>000.1.2.1/143/BKBP/2024</td>
                                                            <td>Koordinasi Terkait Persiapan Pelaksanaan Pilkada
                                                                Serentak tahun 2024 , pada Hari
                                                                Jum’at tanggal 25 Oktober 2024 di Badan Kesatuan Bangsa
                                                                dan Politik Provinsi Sumatera
                                                                Selatan.</td>
                                                            <td>LENI MARLINA - Kepala Bidang Politik</td>
                                                            <td><span class="badge badge-warning tx-white">1
                                                                    belum</span></td>
                                                            <td><span class="badge badge-warning tx-white">1
                                                                    belum</span></td>
                                                            <td><span class="badge badge-danger tx-white">belum</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>
                                                                <span>31 Oktober 2024</span><br>
                                                            </td>
                                                            <td>900.1.13.1/854/V/Bapenda/2024</td>
                                                            <td>Update dan Validasi Data PBB P2 PT. Buyung Putra Pangan
                                                            </td>
                                                            <td>RINA OKTAVIANA - Analis Pajak Daerah (Kelas 7)</td>
                                                            <td><span class="badge badge-success tx-white">3
                                                                    setuju</span></td>
                                                            <td><span class="badge badge-success tx-white">1
                                                                    setuju</span></td>
                                                            <td><span class="badge badge-success tx-white">sudah</span>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div><!-- table-responsive -->
                                        </div>
                                        <div class="modal-footer">
                                            <nav aria-label="Page navigation">
                                                <ul class="pagination mg-b-0">
                                                    <li class="page-item active bg-indigo"><a class="page-link"
                                                            href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Next">
                                                            <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div><!-- modal-dialog -->
                            </div>
                            <!-- modal -->

                            <div class="col-12 col-md-6 mb-3">
                                <a href="#modalSuratMasuk" class="card card-status bg-green modal-effect"
                                    data-toggle="modal">
                                    <div class="media">
                                        <i class="icon ion-ios-paper-outline tx-white"></i>
                                        <div class="media-body">
                                            <h1>
                                                @if(isset($this->dataSuratSemesta['naskah_masuk']))
                                                {{ number_format($this->dataSuratSemesta['naskah_masuk'], 0, '.', '.')
                                                }}
                                                @else
                                                0
                                                @endif
                                            </h1>
                                            <p class="tx-white">Total Surat Masuk</p>
                                        </div><!-- media-body -->
                                    </div><!-- media -->
                                </a><!-- card -->
                            </div>

                            <div class="col-12 col-md-6 mb-3">
                                <a href="#modalSuratKeluar" class="card card-status bg-blue modal-effect"
                                    data-toggle="modal">
                                    <div class="media">
                                        <i class="icon ion-ios-paper-outline tx-white"></i>
                                        <div class="media-body">
                                            <h1>
                                                @if(isset($this->dataSuratSemesta['total_naskah_keluar']))
                                                {{ number_format($this->dataSuratSemesta['total_naskah_keluar'], 0, '.',
                                                '.')
                                                }}
                                                @else
                                                0
                                                @endif
                                            </h1>
                                            <p class="tx-white">Total Surat Keluar</p>
                                        </div><!-- media-body -->
                                    </div><!-- media -->
                                </a><!-- card -->
                            </div>
                            <!-- Tambahkan surat masuk lainnya di sini -->

                        </div>

                    </div>
                    <div class="card mg-t-10">
                        <div class="card-body">
                            <div class="d-flex spacer">
                                <h4 class="slim-card-title mb-3">
                                    <i class="fa fa-universal-access mr-2 fs-18"></i>
                                    Kondisi Presensi Pegawai
                                    (Jumlah Masuk/Izin/Tk)
                                </h4>
                            </div>
                            <div class="row row-sm justify-content-center">
                                <div class="col-12 col-md-4 mg-b-30">
                                    <div class="">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="MM/DD/YYYY" x-init="
                                                $($el).datepicker({
                                                    dateFormat: 'yy-mm-dd',
                                                    onSelect: function() {
                                                        var dateObject = $(this).val();
                                                        $wire.set('dateStart', dateObject)
                                                    }
                                                });
                                                " wire:model.change="dateStart">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mg-b-30">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" placeholder="MM/DD/YYYY" x-init="
                                                    $($el).datepicker({
                                                        dateFormat: 'yy-mm-dd',
                                                        onSelect: function() {
                                                            var dateObject = $(this).val();
                                                            $wire.set('dateEnd', dateObject)
                                                        }
                                                    });" wire:model.change="dateEnd">
                                    </div>
                                </div><!-- wd-200 -->
                                <div class="col-12 col-md-4 select-dashboard">
                                    <div wire:ignore>
                                        <select class="form-control mg-b-30" x-init="
                                            new TomSelect($el,{
                                                create: false,
                                                sortField: {
                                                    field: 'text',
                                                    direction: 'asc'
                                                }
                                            });
                                            " data-placeholder="Pilih">
                                            <option label="Pilih Perangkat Daerah"></option>
                                            <option value="Dinas Komunikasi dan Digital">Dinas Komunikasi dan Digital
                                            </option>
                                            <option value="Dinas Sosial">Dinas Sosial</option>
                                            <option value="Dinas Perikanan">Dinas Perikanan</option>
                                            <option value="Bapenda">Bapenda</option>
                                            <option value="Bappeda">Bappeda</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="bd pd-t-30 pd-b-20 pd-x-20">
                                <div wire:ignore>
                                    <div x-init="
                                        new ApexCharts($el, {
                                            series: [{
                                            name: 'Presensi',
                                            data: [44, 55, 41, 17, 15, 44, 55, 41, 17, 15, 44, 55,] // Replace with appropriate y-axis data
                                            }],
                                            chart: {
                                            type: 'line',
                                            height: 375,
                                            },
                                            xaxis: {
                                            categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember',],// Labels for x-axis
                                            },
                                            title: {
                                            text: 'Dinas Komunikasi Informatika Statistik dan Persandian',
                                            align: 'left'
                                            },
                                            legend: {
                                            position: 'bottom'
                                            },
                                            dataLabels: {
                                            enabled: true,
                                            formatter: function (val, opts) {
                                                return opts.w.config.series[0].data[opts.dataPointIndex]; // Display actual data values
                                            }
                                            },
                                            responsive: [{
                                            breakpoint: 480,
                                            options: {
                                                chart: {
                                                width: 200,
                                                },
                                                legend: {
                                                position: 'bottom'
                                                },
                                            }
                                            }]
                                        }).render();
                                    "></div>
                                </div>
                            </div>
                            <a href="noc_administrasi_umum.html" class="card-footer">
                                <span class="ref">Sumber Data : Aplikasi Semesta</span>
                            </a>
                        </div>
                    </div>
                </div><!-- col-4 -->

                <div class="col-12 col-md-4">
                    <div class="card card-sales">
                        <h6 class="slim-card-title tx-primary mb-3">Pencarian Internet</h6>
                        <form action="https://google.com" data-parsley-validate>
                            <div class="d-sm-flex wd-sm-300">
                                <div class="form-group mg-b-0">
                                    <input type="text" name="google" class="form-control wd-150 wd-xs-250"
                                        placeholder="Cari di google" required>
                                </div><!-- form-group -->
                            </div>
                        </form>
                    </div><!-- card -->

                    <div class="card card-sales mg-t-10">
                        <h4 class="slim-card-title mb-3"><i class="fa fa-universal-access mr-2 fs-18"></i>Kondisi Jumlah
                            ASN
                        </h4>
                        <div class="row row-xs justify-content-center">
                            <div class="lottie-img">
                                <script
                                    src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs"
                                    type="module">
                                </script>

                                <dotlottie-player
                                    src="https://lottie.host/8963b586-a34e-4917-adc4-cd0dbc4619fa/tOO5gAq5A9.json"
                                    background="transparent" speed="1" style="width: 300px; height: 200px;" loop
                                    autoplay>
                                </dotlottie-player>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="alert alert-solid alert-info">
                                    PNS : <span class="fs-18">3.876</span>
                                </div>
                                <div class="alert alert-solid alert-warning">
                                    PPPK : <span class="fs-18">3.876</span>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="bd pd-t-30 pd-b-20 pd-x-20">
                  <div id="jumlahAsnSemesta"></div>
                </div> -->
                        <a href="noc_administrasi_umum.html" class="card-footer">
                            <span class="ref">Sumber Data : Aplikasi Semesta</span>
                        </a>
                    </div>
                    <div class="card card-sales mg-t-10">
                        <h4 class="slim-card-title mb-3"><i class="fa fa-universal-access mr-2 fs-18"></i>Kondisi Tenaga
                            Honorer
                        </h4>
                        <div class="bd pd-t-30 pd-b-20 pd-x-20">
                            <div id="kondisiNonAsn"></div>
                        </div>
                        <a href="noc_administrasi_umum.html" class="card-footer">
                            <span class="ref">Sumber Data : Aplikasi Sinona</span>
                        </a>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="card card-sales mg-t-10">
                        <h6 class="slim-card-title mb-3"><i class="fa fa-universal-access mr-2 fs-18"></i>Target
                            Realisasi Program
                        </h6>
                        <div class="bd pd-t-30 pd-b-20 pd-x-20">
                            <div id="realisasiProgram"></div>
                        </div>
                        <div class="card-footer">
                            <span class="ref">Sumber Data : Aplikasi Sicaram</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card card-sales mg-t-10">
                        <h6 class="slim-card-title mb-3"><i class="fa fa-universal-access mr-2 fs-18"></i>Target
                            Realisasi Kegiatan
                        </h6>
                        <div class="bd pd-t-30 pd-b-20 pd-x-20">
                            <div id="realisasiKegiatan"></div>
                        </div>
                        <div class="card-footer">
                            <span class="ref">Sumber Data : Aplikasi Sicaram</span>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div class="card card-sales mg-t-10">
                        <h6 class="slim-card-title mb-3"><i class="fa fa-universal-access mr-2 fs-18"></i>Target
                            Realisasi
                            Pendapatan</h6>
                        <div class="bd pd-t-30 pd-b-20 pd-x-20">
                            <div id="realisasiPendapatan"></div>
                        </div>
                        <div class="card-footer">
                            <span class="ref">Sumber Data : Aplikasi Sicaram</span>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div class="card card-sales mg-t-10">
                        <h6 class="slim-card-title mb-3"><i class="fa fa-universal-access mr-2 fs-18"></i>Target
                            Realisasi Belanja
                        </h6>
                        <div class="bd pd-t-30 pd-b-20 pd-x-20">
                            <div id="realisasiBelanja"></div>
                        </div>
                        <div class="card-footer">
                            <span class="ref">Sumber Data : Aplikasi Sicaram</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @push('styles')
    <link href="{{ asset('assets/lib/select2/css/select2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/tom-select/2.3.1/css/tom-select.bootstrap4.min.css" />
    @endpush

    @push('scripts')
    <script src="{{ asset('assets/lib/select2/js/select2.full.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tom-select/2.3.1/js/tom-select.complete.js"></script>

    <script src="{{ asset('assets/js/slim.js') }}"></script>
    <script src="{{ asset('assets/js/ResizeSensor.js') }}"></script>
    <script src="{{ asset('assets/lib/chart.js/js/Chart.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('assets/js/dashboard-opd/dashboard.js') }}"></script>

    <script>
    </script>

    <script>
        $(document).ready(function () {
        $('.select2-show-search').select2({
          placeholder: function () {
            $(this).data('placeholder');
          },
          allowClear: true
        });
      });
    </script>

    <script>
        $('#modalSuratMasuk, #modalSuratKeluar').on('shown.bs.modal', function () {
        $('.select2-show-search').select2({
          dropdownParent: $(this), // Menempatkan dropdown di dalam modal
          width: '100%' // Mengatur lebar dropdown agar sesuai kolom
        });
      });
    </script>



    <script>
        var optionsSuratMasuk = {
        series: [{
          name: 'Jumlah Surat Masuk',
          data: [44, 55, 57, 56]
        }],
        chart: {
          type: 'bar',
          height: 350
        },
        colors: ['#1E90FF', '#00CED1', '#FFD700', '#DC143C'],
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded'
          }
        },
        dataLabels: {
          enabled: true,
          style: {
            colors: ['#333']
          },
          offsetY: 100,
          position: 'top'
        },
        xaxis: {
          categories: ['Total Surat Masuk', 'Belum Didisposisikan', 'Sudah Didisposisikan', 'Selesai'],
          labels: {
            rotate: -90,
            style: {
              fontSize: '10px'
            }
          }
        },
        yaxis: {
          title: {
            text: 'Jumlah Surat Masuk'
          }
        },
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return " " + val + " ";
            }
          }
        }
      };

      var optionsSuratKeluar = {
        series: [{
          name: 'Jumlah Surat Keluar',
          data: [44, 55, 57, 56]
        }],
        chart: {
          type: 'bar',
          height: 350
        },
        colors: ['#FF4500', '#32CD32', '#8A2BE2', '#FFA07A'],
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded'
          }
        },
        dataLabels: {
          enabled: true,
          style: {
            colors: ['#333']
          },
          offsetY: 100,
          position: 'top'
        },
        xaxis: {
          categories: ['Total Surat Keluar', 'Proses Verifikasi', 'Menunggu Tanda Tangan', 'Sudah Ditandatangani'],
          labels: {
            rotate: -90,
            style: {
              fontSize: '10px'
            }
          }
        },
        yaxis: {
          title: {
            text: 'Jumlah Surat Keluar'
          }
        },
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return " " + val + " ";
            }
          }
        }
      };
    </script>


    <script>
        // Ambil elemen dropdown dan daftar surat
      document.getElementById("suratSelect").addEventListener("change", function (event) {
        var selectedValue = event.target.value;

        // Tampilkan daftar surat sesuai dengan pilihan
        if (selectedValue === "SM") {
          document.getElementById("ListSuratMasuk").style.display = "flex";
          document.getElementById("ListSuratKeluar").style.display = "none";
        } else if (selectedValue === "SK") {
          document.getElementById("ListSuratMasuk").style.display = "none";
          document.getElementById("ListSuratKeluar").style.display = "flex";
        } else {
          // Sembunyikan keduanya jika tidak ada yang dipilih
          document.getElementById("ListSuratMasuk").style.display = "flex";
          document.getElementById("ListSuratKeluar").style.display = "none";
        }
      });
    </script>
    @endpush
</div>
