<?php

use Carbon\Carbon;

?>
<div>
    <div wire:init="_getWilayah"></div>
    <div wire:init="_getTotalAsn"></div>
    <div wire:init="_getSertificated"></div>
    <div wire:init="_getData3"></div>
    <div wire:init="_getPresensiTotal"></div>

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
                                                        <h1>
                                                            @if(isset($totalAsn['totalGuruPns']))
                                                            {{ number_format($totalAsn['totalGuruPns'],0,'.','.') }}
                                                            @else
                                                            ...
                                                            @endif
                                                        </h1>
                                                        <span>Total Seluruh PNS</span>
                                                    </div><!-- card -->
                                                </div><!-- col-6 -->

                                                <div class="col-sm-6">
                                                    <div
                                                        class="card bg-body-custom-ungu card-earning-summary mg-sm-l--1 bd-t-0 bd-sm-t">
                                                        <h6>Guru PPPK</h6>
                                                        <h1>
                                                            @if(isset($totalAsn['totalGuruPppk']))
                                                            {{ number_format($totalAsn['totalGuruPppk'],0,'.','.') }}
                                                            @else
                                                            ...
                                                            @endif
                                                        </h1>
                                                        <span>Total Seluruh PPPK</span>
                                                    </div><!-- card -->
                                                </div><!-- col-6 -->
                                            </div><!-- row -->
                                        </div><!-- col-6 -->

                                        <div class="col-lg-6 mg-t-20 mg-sm-t-30 mg-lg-t-0">
                                            <div class="card">
                                                <div class="row pd-60">

                                                    <div class="col-md-6">
                                                        <div style="width:100%; height: 350px">
                                                            @if(isset($this->totalAsnGender['PNS']))
                                                            <livewire:livewire-pie-chart
                                                                key="{{ $chartGenderPNS->reactiveKey() }}"
                                                                :pie-chart-model="$chartGenderPNS" />
                                                            @else
                                                            @livewire('components.loading')
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div style="width:100%; height: 350px">
                                                            @if(isset($this->totalAsnGender['PPPK']))
                                                            <livewire:livewire-pie-chart
                                                                key="{{ $chartGenderPPPK->reactiveKey() }}"
                                                                :pie-chart-model="$chartGenderPPPK" />
                                                            @else
                                                            @livewire('components.loading')
                                                            @endif
                                                        </div>
                                                    </div>

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
                                                                <h1>
                                                                    @if(isset($totalSertificated[0]))
                                                                    @php
                                                                    $total = 0;
                                                                    foreach($totalSertificated as $key => $value) {
                                                                    $total += $value['Laki-laki'] + $value['Perempuan'];
                                                                    }
                                                                    @endphp
                                                                    {{ number_format($total,0,'.','.') }}
                                                                    @else
                                                                    ...
                                                                    @endif
                                                                </h1>
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

                                                            <h6 class="visitor-operating-label">
                                                                Kondisi Guru ASN Sudah Sertifikasi
                                                            </h6>

                                                            <div class="col">
                                                                <div class="alert alert-solid alert-warning">
                                                                    <div class="d-flex justify-content-between">
                                                                        <span>Guru SMP Laki-Laki</span>
                                                                        <strong>
                                                                            @if(isset($totalSertificated[1]['Laki-laki']))
                                                                            {{
                                                                            number_format($totalSertificated[1]['Laki-laki'],0,'.','.')
                                                                            }}
                                                                            @else
                                                                            ...
                                                                            @endif
                                                                        </strong>
                                                                    </div>
                                                                </div><!-- alert -->
                                                            </div>
                                                            <div class="col">
                                                                <div class="alert alert-solid alert-warning">
                                                                    <div class="d-flex justify-content-between">
                                                                        <span>Guru SMP Perempuan</span>
                                                                        <strong>
                                                                            @if(isset($totalSertificated[1]['Perempuan']))
                                                                            {{
                                                                            number_format($totalSertificated[1]['Perempuan'],0,'.','.')
                                                                            }}
                                                                            @else
                                                                            ...
                                                                            @endif
                                                                        </strong>
                                                                    </div>
                                                                </div><!-- alert -->
                                                            </div>
                                                            <div class="col">
                                                                <div class="alert alert-solid alert-info">
                                                                    <div class="d-flex justify-content-between">
                                                                        <span>Guru SD Laki-Laki</span>
                                                                        <strong>
                                                                            @if(isset($totalSertificated[0]['Laki-laki']))
                                                                            {{
                                                                            number_format($totalSertificated[0]['Laki-laki'],0,'.','.')
                                                                            }}
                                                                            @else
                                                                            ...
                                                                            @endif
                                                                        </strong>
                                                                    </div>
                                                                </div><!-- alert -->
                                                            </div>
                                                            <div class="col">
                                                                <div class="alert alert-solid alert-info">
                                                                    <div class="d-flex justify-content-between">
                                                                        <span>Guru SD Perempuan</span>
                                                                        <strong>
                                                                            @if(isset($totalSertificated[0]['Perempuan']))
                                                                            {{
                                                                            number_format($totalSertificated[0]['Perempuan'],0,'.','.')
                                                                            }}
                                                                            @else
                                                                            ...
                                                                            @endif
                                                                        </strong>
                                                                    </div>
                                                                </div><!-- alert -->
                                                            </div>
                                                            <div class="col">
                                                                <div class="alert alert-solid alert-success">
                                                                    <div class="d-flex justify-content-between">
                                                                        <span>Guru TK Laki-Laki</span>
                                                                        <strong>
                                                                            @if(isset($totalSertificated[2]['Laki-laki']))
                                                                            {{
                                                                            number_format($totalSertificated[2]['Laki-laki'],0,'.','.')
                                                                            }}
                                                                            @else
                                                                            ...
                                                                            @endif
                                                                        </strong>
                                                                    </div>
                                                                </div><!-- alert -->
                                                            </div>
                                                            <div class="col">
                                                                <div class="alert alert-solid alert-success">
                                                                    <div class="d-flex justify-content-between">
                                                                        <span>Guru TK Perempuan</span>
                                                                        <strong>
                                                                            @if(isset($totalSertificated[2]['Perempuan']))
                                                                            {{
                                                                            number_format($totalSertificated[2]['Perempuan'],0,'.','.')
                                                                            }}
                                                                            @else
                                                                            ...
                                                                            @endif
                                                                        </strong>
                                                                    </div>
                                                                </div><!-- alert -->
                                                            </div>

                                                        </div><!-- left-panel -->
                                                    </div><!-- col-4 -->
                                                    <div class="col-lg-8">
                                                        <div class="right-panel">
                                                            <h6 class="slim-card-title">Jumlah Guru ASN Per Kecamatan
                                                            </h6>
                                                            {{-- <div id="guruSertifikasi"></div> --}}

                                                            <div style="width:100%; height: 600px">
                                                                @if(count($this->totalSertificatedPerWilayah) > 0)
                                                                <livewire:livewire-column-chart
                                                                    key="{{ $chartAsnSertificatedWilayah->reactiveKey() }}"
                                                                    :column-chart-model="$chartAsnSertificatedWilayah" />
                                                                @else
                                                                @livewire('components.loading')
                                                                @endif
                                                            </div>

                                                        </div><!-- right-panel -->
                                                    </div><!-- col-8 -->
                                                </div><!-- row -->
                                            </div><!-- card -->
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                            <div class="card card-dash-chart-one mg-t-20 mg-sm-t-30">
                                                <div class="pd-20" style="width:100%; height: 400px">
                                                    @if(isset($this->totalAsnUsia['jumlah_pegawai']))
                                                    <livewire:livewire-column-chart
                                                        key="{{ $chartRentangUsia->reactiveKey() }}"
                                                        :column-chart-model="$chartRentangUsia" />
                                                    @else
                                                    @livewire('components.loading')
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="card card-dash-chart-one mg-t-20 mg-sm-t-30">
                                                {{-- <div id="pnsPangGol" class="pd-20"></div> --}}
                                                <div class="pd-20" style="width:100%; height: 400px">
                                                    @if(isset($this->totalAsnGolonganPNS['datas']))
                                                    <livewire:livewire-pie-chart
                                                        key="{{ $chartAsnGolonganPNS->reactiveKey() }}"
                                                        :pie-chart-model="$chartAsnGolonganPNS" />
                                                    @else
                                                    @livewire('components.loading')
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="card card-dash-chart-one mg-t-20 mg-sm-t-30">
                                                <div class="pd-20" style="width:100%; height: 400px">
                                                    @if(isset($this->totalAsnGolonganPPPK['datas']))
                                                    <livewire:livewire-pie-chart
                                                        key="{{ $chartAsnGolonganPPPK->reactiveKey() }}"
                                                        :pie-chart-model="$chartAsnGolonganPPPK" />
                                                    @else
                                                    @livewire('components.loading')
                                                    @endif
                                                </div>
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
                                                        <h1>
                                                            @if(isset($totalPresensi['total_hadir_dinas_dalam']))
                                                            {{
                                                            number_format($totalPresensi['total_hadir_dinas_dalam'],0,'.','.')
                                                            }}
                                                            @else
                                                            ...
                                                            @endif
                                                        </h1>
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
                                                        <h1>
                                                            @if(isset($totalPresensi['total_hadir_dinas_luar']))
                                                            {{
                                                            number_format($totalPresensi['total_hadir_dinas_luar'],0,'.','.')
                                                            }}
                                                            @else
                                                            ...
                                                            @endif
                                                        </h1>
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
                                                        <h1>
                                                            @if(isset($totalPresensi['total_tanpa_keterangan']))
                                                            {{
                                                            number_format($totalPresensi['total_tanpa_keterangan'],0,'.','.')
                                                            }}
                                                            @else
                                                            ...
                                                            @endif
                                                        </h1>
                                                        <p>Total Tanpa Keterangan</p>
                                                    </div><!-- media-body -->
                                                </div><!-- media -->
                                            </div><!-- card -->
                                        </div><!-- col-3 -->
                                    </div>

                                    <div class="row row-xs mg-t-30">
                                        @if(count($arrWilayah) > 0)
                                        <div class="col-12 col-md-6">
                                            <select class="form-control" x-init="
                                                new TomSelect($el,{
                                                    create: false,
                                                    sortField: {
                                                        field: 'text',
                                                        direction: 'asc'
                                                    }
                                                });
                                                " wire:model.live="selectedWilayahId">
                                                <option value="">Pilih Satuan Wilayah</option>
                                                @foreach($arrWilayah as $wil)
                                                <option value="{{ $wil['id'] }}">
                                                    {{ $wil['nama_satuan_wilayah'] }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @endif

                                        @if($this->selectedWilayahId && count($arrSekolah) > 0)
                                        <div class="col-12 col-md-6">
                                            <select class="form-control" x-init="
                                            new TomSelect($el,{
                                                create: false,
                                                sortField: {
                                                    field: 'text',
                                                    direction: 'asc'
                                                }
                                            });
                                            " wire:model.live="selectedSekolahId">
                                                <option value="">Pilih Satuan Pendidikan</option>
                                                @foreach($arrSekolah as $sekolah)
                                                <option value="{{ $sekolah['id'] }}">
                                                    {{ $sekolah['nama_sekolah'] }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @endif
                                    </div>

                                    <div class="row row-xs mg-t-30">
                                        <div class="col-12 col-md-6">
                                            <div class="card card card-activities pd-20">

                                                <div class="mg-t-20" style="width:100%; height: 300px">
                                                    @if($this->selectedWilayahId && $this->selectedSekolahId)
                                                    @if(isset($this->dataPresensiOPD['presensi']) &&
                                                    count($this->dataPresensiOPD['presensi']) > 0)
                                                    <livewire:livewire-pie-chart
                                                        key="{{ $chartPresensiOPD->reactiveKey() }}"
                                                        :pie-chart-model="$chartPresensiOPD" />
                                                    @else
                                                    @livewire('components.loading')
                                                    @endif
                                                    @else
                                                    <div class="d-flex justify-content-center align-items-center"
                                                        style="width:100%; height:100%">
                                                        <div class="alert alert-warning">
                                                            <strong>Pilih Satuan Wilayah dan Satuan Pendidikan</strong>
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="card card-activities pd-20">
                                                {{-- <div id="chartLinePresensiGuruku" class="mg-t-20"></div> --}}

                                                <div class="mg-t-20" style="width:100%; height: 300px">
                                                    @if($this->selectedWilayahId && $this->selectedSekolahId)
                                                    @if(isset($this->dataPresensiOPD2['absensi_per_bulan']) &&
                                                    count($this->dataPresensiOPD2['absensi_per_bulan']) > 0)
                                                    <livewire:livewire-line-chart
                                                        key="{{ $chartPresensiOPD2->reactiveKey() }}"
                                                        :line-chart-model="$chartPresensiOPD2" />
                                                    @else
                                                    @livewire('components.loading')
                                                    @endif
                                                    @else
                                                    <div class="d-flex justify-content-center align-items-center"
                                                        style="width:100%; height:100%">
                                                        <div class="alert alert-warning">
                                                            <strong>Pilih Satuan Wilayah dan Satuan Pendidikan</strong>
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card card-activities pd-20 mg-t-30">
                                                <div class="text-center mb-3">
                                                    <h5>Grafik Presensi Masuk dan Pulang</h5>
                                                    <span>Periode : Tanggal, Bulan & Tahun</span>
                                                </div>
                                                {{-- <div class="row row-sm justify-content-center">
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
                                                </div> --}}

                                                <div class="mg-t-20" style="width:100%; height: 300px">
                                                    @if($this->selectedWilayahId && $this->selectedSekolahId)
                                                    @if(count($this->dataPresensiOPD3) > 0)
                                                    <livewire:livewire-line-chart
                                                        key="{{ $chartPresensiOPD3->reactiveKey() }}"
                                                        :line-chart-model="$chartPresensiOPD3" />
                                                    @else
                                                    @livewire('components.loading')
                                                    @endif
                                                    @else
                                                    <div class="d-flex justify-content-center align-items-center"
                                                        style="width:100%; height:100%">
                                                        <div class="alert alert-warning">
                                                            <strong>Pilih Satuan Wilayah dan Satuan Pendidikan</strong>
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row row-xs mg-t-30">
                                        <div class="col-12 col-lg-4">
                                            <div class="card card-activities pd-20">
                                                {{-- <div class="row row-sm justify-content-between">
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
                                                </div> --}}
                                                <h5 class="mg-t-30">
                                                    Laporan Kinerja Harian
                                                    @if(isset($dataLKH['message']))
                                                    {{ $dataLKH['message'] }}
                                                    @endif
                                                </h5>
                                                <div class="alert alert-solid alert-info mg-t-10">
                                                    <div class="d-flex justify-content-between">
                                                        <span>Total LKH</span>
                                                        <strong style="font-size: 32px;">
                                                            @if(isset($dataLKH['total_lkh']))
                                                            {{ number_format($dataLKH['total_lkh'],0,'.','.') }}
                                                            @else
                                                            ...
                                                            @endif
                                                        </strong>
                                                    </div>
                                                </div><!-- alert -->

                                                <div class="alert alert-solid alert-success">
                                                    <div class="d-flex justify-content-between">
                                                        <span>Sudah Diverifikasi </span>
                                                        <strong style="font-size: 32px;">
                                                            @if(isset($dataLKH['sudah_diverifikasi']))
                                                            {{ number_format($dataLKH['sudah_diverifikasi'],0,'.','.')
                                                            }}
                                                            @else
                                                            ...
                                                            @endif
                                                        </strong>
                                                    </div>
                                                </div><!-- alert -->

                                                <div class="alert alert-solid alert-warning">
                                                    <div class="d-flex justify-content-between">
                                                        <span>Belum Diverifikasi</span>
                                                        <strong style="font-size: 32px;">
                                                            @if(isset($dataLKH['belum_diverifikasi']))
                                                            {{ number_format($dataLKH['belum_diverifikasi'],0,'.','.')
                                                            }}
                                                            @else
                                                            ...
                                                            @endif
                                                        </strong>
                                                    </div>
                                                </div><!-- alert -->

                                                <div class="alert alert-solid alert-danger">
                                                    <div class="d-flex justify-content-between">
                                                        <span>Ditolak</span>
                                                        <strong style="font-size: 32px;">
                                                            @if(isset($dataLKH['ditolak']))
                                                            {{ number_format($dataLKH['ditolak'],0,'.','.') }}
                                                            @else
                                                            ...
                                                            @endif
                                                        </strong>
                                                    </div>
                                                </div><!-- alert -->
                                            </div><!-- card -->
                                        </div><!-- col-5 -->
                                        <div class="col-12 col-lg-8">
                                            <div class="card card-people-list pd-20">
                                                {{-- <div class="row justify-content-between">
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
                                                </div> --}}
                                                {{-- <div id="chartLkhGuruku"></div> --}}
                                                <div class="mg-t-20" style="width:100%; height: 500px">
                                                    @if($this->selectedWilayahId && $this->selectedSekolahId)
                                                    @if(count($this->dataLKH2) > 0)
                                                    <livewire:livewire-column-chart
                                                        key="{{ $chartLKH->reactiveKey() }}"
                                                        :column-chart-model="$chartLKH" />
                                                    @else
                                                    @livewire('components.loading')
                                                    @endif
                                                    @else
                                                    <div class="d-flex justify-content-center align-items-center"
                                                        style="width:100%; height:100%">
                                                        <div class="alert alert-warning">
                                                            <strong>Pilih Satuan Wilayah dan Satuan Pendidikan</strong>
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div>
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

    @push('styles')
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/tom-select/2.3.1/css/tom-select.bootstrap4.min.css" />
    @endpush

    @push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tom-select/2.3.1/js/tom-select.complete.js"></script>
    @endpush

</div>
