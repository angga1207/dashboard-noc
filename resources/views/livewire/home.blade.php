<?php

use Carbon\Carbon;

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
                            <div wire:ignore.self id="modalSuratMasuk" class="modal fade">
                                <div class="modal-dialog modal-xl" style="width: calc(100vw - 50px)">
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
                                                    <select class="form-control" x-init="
                                                        new TomSelect($el,{
                                                            create: false,
                                                            allowEmptyOption: false,
                                                            sortField: {
                                                                field: 'value',
                                                                direction: 'asc'
                                                            }
                                                        });
                                                        " wire:model="selectedMonth">
                                                        <option value="">Pilih Bulan</option>
                                                        @foreach($arrMonths as $key => $mnth)
                                                        <option value="{{ $key }}">
                                                            {{ $mnth }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                    @error('selectedMonth')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <select class="form-control" x-init="
                                                        new TomSelect($el,{
                                                            create: false,
                                                            allowEmptyOption: false,
                                                            sortField: {
                                                                field: 'text',
                                                                direction: 'asc'
                                                            }
                                                        });
                                                        " wire:model="selectedYear">
                                                        <option value="">Pilih Tahun</option>
                                                        @foreach($arrYears as $yr)
                                                        <option value="{{ $yr }}">
                                                            {{ $yr }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                    @error('selectedYear')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <select class="form-control" x-init="
                                                        new TomSelect($el,{
                                                            create: false,
                                                            sortField: {
                                                                field: 'text',
                                                                direction: 'asc'
                                                            }
                                                        });
                                                        " wire:model="selectedStatus">
                                                        <option value="">Semua Status</option>
                                                        @foreach($arrStatus as $key => $sts)
                                                        <option value="{{ $key }}">
                                                            {{ $sts }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-12 col-lg-2">
                                                    <button type="button" class="btn btn-primary active"
                                                        wire:click.prevent="filterSuratMasuk">
                                                        <i class="fa fa-filter" style="margin-right: 5px;"></i>
                                                        Filter
                                                    </button>
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
                                                        @forelse($dataSuratMasuk as $data)
                                                        <tr>
                                                            <th scope="row">
                                                                {{ $loop->iteration }}
                                                            </th>
                                                            <td>
                                                                <span>
                                                                    {{
                                                                    Carbon::parse($data['tanggal_diterima'])->isoFormat('DD
                                                                    MMMM Y') }}
                                                                </span>
                                                                <br>
                                                                <span class="badge badge-info">
                                                                    {{ $data['skpd_id'] }}
                                                                    [skpd_id = {{ $data['skpd_id'] }}]
                                                                </span>
                                                            </td>
                                                            <td>
                                                                {{ $data['naskah_keluar']['nomor'] ?? '-' }}
                                                            </td>
                                                            <td>
                                                                {{ $data['naskah_keluar']['hal'] ?? '-' }}
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    {{ $data['naskah_keluar']['pegawai_created_id'] ??
                                                                    '-' }}[pegawai_created_id =
                                                                    {{ $data['naskah_keluar']['pegawai_created_id'] }}]
                                                                    -
                                                                </div>
                                                                <div>
                                                                    [jabatan_no_data]
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="badge
                                                                @if($data['naskah_keluar']['status'] == 'SELESAI')
                                                                badge-success
                                                                @else badge-primary
                                                                @endif">
                                                                    {{ $data['naskah_keluar']['status'] }}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        @empty
                                                        <tr>
                                                            <td colspan="6" class="text-center">Tidak ada data</td>
                                                        </tr>
                                                        @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="modal-footer hidden d-none">
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
                            <div wire:ignore.self id="modalSuratKeluar" class="modal fade">
                                <div class="modal-dialog modal-xl" style="width: calc(100vw - 50px)">
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
                                                <div class="col-12 col-md-4">
                                                    <select class="form-control" x-init="
                                                        new TomSelect($el,{
                                                            create: false,
                                                            allowEmptyOption: false,
                                                            sortField: {
                                                                field: 'value',
                                                                direction: 'asc'
                                                            }
                                                        });
                                                        " wire:model="selectedMonth">
                                                        <option value="">Pilih Bulan</option>
                                                        @foreach($arrMonths as $key => $mnth)
                                                        <option value="{{ $key }}">
                                                            {{ $mnth }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                    @error('selectedMonth')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <select class="form-control" x-init="
                                                        new TomSelect($el,{
                                                            create: false,
                                                            allowEmptyOption: false,
                                                            sortField: {
                                                                field: 'text',
                                                                direction: 'asc'
                                                            }
                                                        });
                                                        " wire:model="selectedYear">
                                                        <option value="">Pilih Tahun</option>
                                                        @foreach($arrYears as $yr)
                                                        <option value="{{ $yr }}">
                                                            {{ $yr }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                    @error('selectedYear')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <select class="form-control" x-init="
                                                        new TomSelect($el,{
                                                            create: false,
                                                            sortField: {
                                                                field: 'text',
                                                                direction: 'asc'
                                                            }
                                                        });
                                                        " wire:model="selectedStatusSuratKeluar">
                                                        <option value="">Semua Status</option>
                                                        @foreach($arrStatusSuratKeluar as $key => $sts)
                                                        <option value="{{ $key }}">
                                                            {{ $sts }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-12 col-lg-2">
                                                    <button type="button" class="btn btn-indigo active"
                                                        wire:click.prevent="filterSuratKeluar">
                                                        <i class="fa fa-filter" style="margin-right: 5px;"></i>
                                                        Filter
                                                    </button>
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

                                                        @forelse($dataSuratKeluar as $data)
                                                        <tr>
                                                            <th scope="row">
                                                                {{ $loop->iteration }}
                                                            </th>
                                                            <td>
                                                                <span>
                                                                    {{
                                                                    Carbon::parse($data['tanggal_naskah'])->isoFormat('DD
                                                                    MMMM Y') }}
                                                                </span>
                                                                <br>
                                                                <span class="badge badge-info">
                                                                    {{ $data['skpd_pengirim_id'] }}
                                                                    [skpd_pengirim_id = {{ $data['skpd_pengirim_id'] }}]
                                                                </span>
                                                            </td>
                                                            <td>
                                                                {{ $data['nomor'] ?? '-' }}
                                                            </td>
                                                            <td>
                                                                {{ $data['hal'] ?? '-' }}
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    {{ $data['pegawai_created_id'] ??
                                                                    '-' }}[pegawai_created_id =
                                                                    {{ $data['pegawai_created_id'] }}]
                                                                    -
                                                                </div>
                                                                <div>
                                                                    [jabatan_no_data]
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="badge
                                                                @if($data['status'] == 'SELESAI')
                                                                badge-success
                                                                @else badge-primary
                                                                @endif">
                                                                    {{ $data['status'] }}
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <span class="badge
                                                                @if($data['is_signed'] == 1)
                                                                badge-success
                                                                @elseif($data['is_signed'] == 2)
                                                                badge-warning
                                                                @else badge-primary
                                                                @endif">
                                                                    {{ $data['is_signed'] }}
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <span class="badge
                                                                @if($data['is_forward'] == 1)
                                                                badge-success
                                                                @elseif($data['is_forward'] == 0)
                                                                badge-warning
                                                                @endif">
                                                                    {{ $data['is_forward'] }}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        @empty
                                                        <tr>
                                                            <td colspan="6" class="text-center">Tidak ada data</td>
                                                        </tr>
                                                        @endforelse

                                                    </tbody>
                                                </table>
                                            </div><!-- table-responsive -->
                                        </div>
                                        <div class="modal-footer hidden d-none">
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
                                    data-toggle="modal" wire:click.prevent="_getSuratMasuk">
                                    <div class="media">
                                        <i class="icon ion-ios-paper-outline tx-white"></i>
                                        <div class="media-body">
                                            <h1>
                                                @if(isset($this->dataSuratSemesta['total_surat_masuk']))
                                                {{ number_format($this->dataSuratSemesta['total_surat_masuk'], 0, ',',
                                                ',')
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
                                    data-toggle="modal" wire:click.prevent="_getSuratKeluar">
                                    <div class="media">
                                        <i class="icon ion-ios-paper-outline tx-white"></i>
                                        <div class="media-body">
                                            <h1>
                                                @if(isset($this->dataSuratSemesta['total_surat_keluar']))
                                                {{ number_format($this->dataSuratSemesta['total_surat_keluar'], 0, ',',
                                                ',')
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

                                <div style="width: 100%; height: 350px">
                                    {{-- @if(isset($this->pres_data['labels']) &&
                                    isset($this->pres_data['data'])) --}}
                                    <livewire:livewire-line-chart
                                        key="{{ $chartKondisiPresensiPegawai->reactiveKey() }}"
                                        :line-chart-model="$chartKondisiPresensiPegawai" />
                                    {{-- @else
                                    @livewire('components.loading')
                                    @endif --}}
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
                            {{-- <div id="kondisiNonAsn"></div> --}}
                            <div style="width: 100%; height: 140px">
                                <livewire:livewire-column-chart key="{{ $chartTenagaHonorer->reactiveKey() }}"
                                    :column-chart-model="$chartTenagaHonorer" />
                            </div>
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
                            {{-- <div id="realisasiProgram"></div> --}}
                            <div style="width: 100%; height: 300px">
                                <livewire:livewire-pie-chart key="{{ $chartRealisasiProgram->reactiveKey() }}"
                                    :pie-chart-model="$chartRealisasiProgram" />
                            </div>
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
                            {{-- <div id="realisasiKegiatan"></div> --}}
                            <div style="width: 100%; height: 300px">
                                <livewire:livewire-pie-chart key="{{ $chartRealisasiKegiatan->reactiveKey() }}"
                                    :pie-chart-model="$chartRealisasiKegiatan" />
                            </div>
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
                            {{-- <div id="realisasiPendapatan"></div> --}}
                            <div style="width: 100%; height: 300px">
                                <livewire:livewire-pie-chart key="{{ $chartRealisasiPendapatan->reactiveKey() }}"
                                    :pie-chart-model="$chartRealisasiPendapatan" />
                            </div>
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
                            {{-- <div id="realisasiBelanja"></div> --}}
                            <div style="width: 100%; height: 300px">
                                <livewire:livewire-pie-chart key="{{ $chartRealisasiBelanja->reactiveKey() }}"
                                    :pie-chart-model="$chartRealisasiBelanja" />
                            </div>
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

    <script>
        $('#modalSuratMasuk, #modalSuratKeluar').on('shown.bs.modal', function () {});
    </script>

    <script>
        //   JAM TANGGAL DAN TAHUN
        var tw = new Date();
        if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
        else(a = tw.getTime());
        tw.setTime(a);
        var tahun = tw.getFullYear();
        var hari = tw.getDay();
        var bulan = tw.getMonth();
        var tanggal = tw.getDate();
        var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,");
        var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
            "Oktober", "November", "Desember");
        document.getElementById("waktuAja").innerHTML = " Pukul : " + ((tw.getHours() < 10) ? "0" : "") + tw.getHours() +
            ":" +
            ((tw.getMinutes() <
                10) ? "0" :
            "") + tw.getMinutes() + (" WIB");


        var tw = new Date();
        if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
        else(a = tw.getTime());
        tw.setTime(a);
        var tahun = tw.getFullYear();
        var hari = tw.getDay();
        var bulan = tw.getMonth();
        var tanggal = tw.getDate();
        var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,");
        var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
            "Oktober", "November", "Desember");
        document.getElementById("tanggalwaktu").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] +
            " " + tahun;
    </script>

    @endpush
</div>
