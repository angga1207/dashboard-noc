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
                        <!-- card-header -->

                        <div class="card-body bd bd-t-0">
                            <div class="tab-content">

                                <div class="tab-pane active" id="semesta">
                                    <div wire:init="_getTotal"></div>
                                    <div class="row row-xs mg-t-10">
                                        <div class="col-12 col-md-6 col-lg-4 mg-t-10">
                                            <div class="card card-status bg-body-custom-ungu">
                                                <div class="media">
                                                    <i class="icon ion-ios-person-outline tx-purple"></i>
                                                    <div class="media-body">
                                                        <h1>
                                                            @if(isset($this->dataTotal['item']['hadir_dinas_dalam']))
                                                            {{
                                                            number_format($this->dataTotal['item']['hadir_dinas_dalam'],
                                                            0,'.','.') }}
                                                            @else
                                                            ...
                                                            @endif
                                                        </h1>
                                                        <p>Total Hadir Dinas Dalam</p>
                                                    </div><!-- media-body -->
                                                </div><!-- media -->
                                            </div><!-- card -->
                                        </div><!-- col-3 -->

                                        <div class="col-12 col-md-6 col-lg-4 mg-t-10 ">
                                            <div class="card card-status bg-body-custom-ungu">
                                                <div class="media">
                                                    <i class="icon ion-android-walk tx-teal"></i>
                                                    <div class="media-body">
                                                        <h1>
                                                            @if(isset($this->dataTotal['item']['hadir_dinas_luar']))
                                                            {{
                                                            number_format($this->dataTotal['item']['hadir_dinas_luar'],
                                                            0,'.','.') }}
                                                            @else
                                                            ...
                                                            @endif
                                                        </h1>
                                                        <p>Total Hadir Dinas Luar</p>
                                                    </div><!-- media-body -->
                                                </div><!-- media -->
                                            </div><!-- card -->
                                        </div><!-- col-3 -->

                                        <div class="col-12 col-md-12 col-lg-4 mg-t-10">
                                            <div class="card card-status bg-body-custom-ungu">
                                                <div class="media">
                                                    <i class="icon ion-ios-body-outline tx-danger"></i>
                                                    <div class="media-body">
                                                        <h1>
                                                            @if(isset($this->dataTotal['item']['tanpa_keterangan']))
                                                            {{
                                                            number_format($this->dataTotal['item']['tanpa_keterangan'],
                                                            0,'.','.') }}
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

                                        <div class="col-12 col-lg-4">
                                            <div class="card card-activities pd-20">
                                                <div style="width: 100%; height:400px">
                                                    @if(isset($this->dataTotal['presensi']))
                                                    <livewire:livewire-pie-chart
                                                        key="{{ $chartDataRekapPresensi->reactiveKey() }}"
                                                        :pie-chart-model="$chartDataRekapPresensi" />
                                                    @else
                                                    @livewire('components.loading')
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-8">
                                            <div wire:init="_getGrafikAbsensi"></div>
                                            <div class="card card-activities pd-20">
                                                <div class="text-center mb-3">
                                                    <h5>Grafik Presensi Masuk dan Pulang</h5>
                                                    <span>Periode : Tanggal, Bulan & Tahun</span>
                                                </div>
                                                <div class="row row-sm justify-content-center">
                                                    @if(isset($this->dataGrafikAbsensi['tanggal']))
                                                    <div class="col-12 col-md-3 mg-b-30">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
                                                                </div>
                                                            </div>
                                                            <input type="text" class="form-control"
                                                                placeholder="MM/DD/YYYY" x-init="
                                                                $($el).datepicker({
                                                                    dateFormat: 'yy-mm-dd',
                                                                    onSelect: function() {
                                                                        var dateObject = $(this).val();
                                                                        $wire.set('dateStartAbsensi', dateObject)
                                                                    }
                                                                });
                                                                " wire:model.change="dateStartAbsensi">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-3 mg-b-30">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
                                                                </div>
                                                            </div>
                                                            <input type="text" class="form-control"
                                                                placeholder="MM/DD/YYYY" x-init="
                                                                $($el).datepicker({
                                                                    dateFormat: 'yy-mm-dd',
                                                                    onSelect: function() {
                                                                        var dateObject = $(this).val();
                                                                        $wire.set('dateEndAbsensi', dateObject)
                                                                    }
                                                                });" wire:model.change="dateEndAbsensi">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-3">
                                                        <select class="form-control mg-b-30" x-init="
                                                            new TomSelect($el,{
                                                                create: false,
                                                                sortField: {
                                                                    field: 'text',
                                                                    direction: 'asc'
                                                                }
                                                            });
                                                            " wire:model.live="instanceIdAbsensi">
                                                            <option value="">Pilih Instansi</option>
                                                            @foreach($arrInstances as $inst)
                                                            <option value="{{ $inst->semesta_id }}">
                                                                {{ $inst->name }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    @endif
                                                </div>
                                                {{-- <div id="chartPresensiPeriodik"></div> --}}
                                                <div style="width: 100%; height:300px">
                                                    @if(isset($this->dataGrafikAbsensi['tanggal']))
                                                    <livewire:livewire-line-chart
                                                        key="{{ $chartPresensiMasukPulang->reactiveKey() }}"
                                                        :line-chart-model="$chartPresensiMasukPulang" />
                                                    @else
                                                    @livewire('components.loading')
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div wire:init="_getDataLKH"></div>
                                        <div class="col mg-t-20 mg-sm-t-30">
                                            <div class="alert alert-info tx-center">
                                                <h4>
                                                    <strong>Statistik</strong>
                                                    Data Laporan Kinerja Harian
                                                </h4>
                                            </div>

                                            <div class="row row-sm justify-content-center">
                                                @if(isset($this->dataLKH['label']['data']))
                                                <div class="col-12 col-md-3 mg-b-30">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="MM/DD/YYYY"
                                                            x-init="
                                                            $($el).datepicker({
                                                                dateFormat: 'yy-mm-dd',
                                                                onSelect: function() {
                                                                    var dateObject = $(this).val();
                                                                    $wire.set('dateStartLKH', dateObject)
                                                                }
                                                            });
                                                            " wire:model.change="dateStartLKH">
                                                    </div>
                                                </div><!-- wd-200 -->
                                                <div class="col-12 col-md-3 mg-b-30">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="MM/DD/YYYY"
                                                            x-init="
                                                            $($el).datepicker({
                                                                dateFormat: 'yy-mm-dd',
                                                                onSelect: function() {
                                                                    var dateObject = $(this).val();
                                                                    $wire.set('dateEndLKH', dateObject)
                                                                }
                                                            });" wire:model.change="dateEndLKH">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <select class="form-control mg-b-30" x-init="
                                                        new TomSelect($el,{
                                                            create: false,
                                                            sortField: {
                                                                field: 'text',
                                                                direction: 'asc'
                                                            }
                                                        });
                                                        " wire:model.live="instanceIdLKH">
                                                        <option value="">Pilih Instansi</option>
                                                        @foreach($arrInstances as $inst)
                                                        <option value="{{ $inst->semesta_id }}">
                                                            {{ $inst->name }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row row-xs mg-t-30">
                                        <div class="col-12 col-md-6 col-lg-3">
                                            <div class="alert alert-solid alert-custom">
                                                <div class="d-flex justify-content-between">
                                                    <span>Total SKPD</span>
                                                    <strong style="font-size: 32px;">
                                                        @if(isset($this->dataLKH['value']['total_skpd']))
                                                        {{
                                                        number_format($this->dataLKH['value']['total_skpd'],0,'.','.')
                                                        }}
                                                        @else
                                                        ...
                                                        @endif
                                                    </strong>
                                                </div>
                                            </div><!-- alert -->
                                        </div>

                                        <div class="col-12 col-md-6 col-lg-3">
                                            <div class="alert alert-solid alert-info">
                                                <div class="d-flex justify-content-between">
                                                    <span>Total LKH</span>
                                                    <strong style="font-size: 32px;">
                                                        @if(isset($this->dataLKH['value']['total_lkh_dibuat']))
                                                        {{
                                                        number_format($this->dataLKH['value']['total_lkh_dibuat'],0,'.','.')
                                                        }}
                                                        @else
                                                        ...
                                                        @endif
                                                    </strong>
                                                </div>
                                            </div><!-- alert -->
                                        </div>

                                        <div class="col-12 col-md-6 col-lg-3">
                                            <div class="alert alert-solid alert-success">
                                                <div class="d-flex justify-content-between">
                                                    <span>Total LKH Sudah Diverifikasi</span>
                                                    <strong style="font-size: 32px;">
                                                        @if(isset($this->dataLKH['value']['total_lkh_diverifikasi']))
                                                        {{
                                                        number_format($this->dataLKH['value']['total_lkh_diverifikasi'],0,'.','.')
                                                        }}
                                                        @else
                                                        ...
                                                        @endif
                                                    </strong>
                                                </div>
                                            </div><!-- alert -->
                                        </div>

                                        <div class="col-12 col-md-6 col-lg-3">
                                            <div class="alert alert-solid alert-warning">
                                                <div class="d-flex justify-content-between">
                                                    <span>Total LKH Belum Diverifikasi</span>
                                                    <strong style="font-size: 32px;">
                                                        @if(isset($this->dataLKH['value']['total_lkh_belum_diverifikasi']))
                                                        {{
                                                        number_format($this->dataLKH['value']['total_lkh_belum_diverifikasi'],0,'.','.')
                                                        }}
                                                        @else
                                                        ...
                                                        @endif
                                                    </strong>
                                                </div>
                                            </div><!-- alert -->
                                        </div>
                                    </div>

                                    <div class="row row-xs mg-t-30">
                                        <div class="col-12">
                                            <div class="card card-people-list pd-10">
                                                <div style="width: 100%; height: 400px">
                                                    @if(isset($this->dataLKH['label']['data']))
                                                    <livewire:livewire-column-chart
                                                        key="{{ $chartStatistikLKH->reactiveKey() }}"
                                                        :column-chart-model="$chartStatistikLKH" />
                                                    @else
                                                    @livewire('components.loading')
                                                    @endif
                                                </div>
                                            </div>
                                        </div><!-- card -->
                                    </div><!-- col-3 -->

                                    <div class="row">
                                        <div wire:init="_getDataTPP"></div>
                                        <div class="col mg-t-20 mg-sm-t-30">
                                            <div class="alert alert-solid alert-warning tx-center">
                                                <h4><strong>Statistik</strong> Data TPP</h4>
                                            </div><!-- alert -->
                                            <div class="row row-sm justify-content-center">
                                                @if(isset($this->dataTPP['grafik']))
                                                <div class="col-12 col-md-3 mg-b-30">
                                                    <select class="form-control mg-b-30" x-init="
                                                            new TomSelect($el,{
                                                                create: false,
                                                                sortField: {
                                                                    field: 'text',
                                                                    direction: 'asc'
                                                                }
                                                            });
                                                            " wire:model.live="monthTPP">
                                                        <option label="Pilih Bulan"></option>
                                                        <option value="01">Januari</option>
                                                        <option value="02">Februari</option>
                                                        <option value="03">Maret</option>
                                                        <option value="04">April</option>
                                                        <option value="05">Mei</option>
                                                        <option value="06">Juni</option>
                                                        <option value="07">Juli</option>
                                                        <option value="08">Agustus</option>
                                                        <option value="09">September</option>
                                                        <option value="10">Oktober</option>
                                                        <option value="11">November</option>
                                                        <option value="12">Desember</option>
                                                    </select>
                                                </div><!-- wd-200 -->
                                                <div class="col-12 col-md-3 mg-b-30">
                                                    <select class="form-control mg-b-30" x-init="
                                                            new TomSelect($el,{
                                                                create: false,
                                                                sortField: {
                                                                    field: 'text',
                                                                    direction: 'asc'
                                                                }
                                                            });
                                                            " wire:model.live="yearTPP">
                                                        <option label="Pilih Tahun"></option>
                                                        @for($yr=2020; $yr < date('Y')+1; $yr++) <option
                                                            value="{{ $yr }}">
                                                            {{ $yr }}
                                                            </option>
                                                            @endfor
                                                    </select>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <select class="form-control mg-b-30" x-init="
                                                        new TomSelect($el,{
                                                            create: false,
                                                            sortField: {
                                                                field: 'text',
                                                                direction: 'asc'
                                                            }
                                                        });
                                                        " wire:model.live="instanceIdTPP">
                                                        <option value="">Pilih Instansi</option>
                                                        @foreach($arrInstances as $inst)
                                                        <option value="{{ $inst->semesta_id }}">
                                                            {{ $inst->name }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row row-xs mg-t-30">
                                        <div class="col-12 col-md-4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5>Tambahan Penghasilan Pegawai (TPP)</h5>
                                                    <script
                                                        src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs"
                                                        type="module"></script>

                                                    <dotlottie-player
                                                        src="https://lottie.host/9e89322d-1888-40bd-b164-68154c436504/UHF0SMDGjI.json"
                                                        background="transparent" speed="1"
                                                        style="width: 300px; height: 170px;" loop autoplay>
                                                    </dotlottie-player>
                                                </div>
                                                <div class="col-12">
                                                    <div class="alert alert-solid alert-warning">
                                                        <div class="d-flex justify-content-between">
                                                            <span>Total Pagu TPP</span>
                                                            <strong>
                                                                @if(isset($this->dataTPP['label']['pagu_total']))
                                                                Rp. {{
                                                                number_format($this->dataTPP['label']['pagu_total']) }}
                                                                @else
                                                                Rp. ...
                                                                @endif
                                                            </strong>
                                                        </div>
                                                    </div><!-- alert -->
                                                </div>
                                                <div class="col-12">
                                                    <div class="alert alert-solid alert-success">
                                                        <div class="d-flex justify-content-between">
                                                            <span>Total Realisasi</span>
                                                            <strong>
                                                                @if(isset($this->dataTPP['label']['pagu_realisasi']))
                                                                Rp. {{
                                                                number_format($this->dataTPP['label']['pagu_realisasi'])
                                                                }}
                                                                @else
                                                                Rp. ...
                                                                @endif
                                                            </strong>
                                                        </div>
                                                    </div><!-- alert -->
                                                </div>
                                                <div class="col-12">
                                                    <div class="alert alert-solid alert-info">
                                                        <div class="d-flex justify-content-between">
                                                            <span>Total Penghematan</span>
                                                            <strong>
                                                                @if(isset($this->dataTPP['label']['pagu_silpa']))
                                                                Rp. {{
                                                                number_format($this->dataTPP['label']['pagu_silpa']) }}
                                                                @else
                                                                Rp. ...
                                                                @endif
                                                            </strong>
                                                        </div>
                                                    </div><!-- alert -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <div class="card card-activities pd-20">
                                                <div style="width:100%; height: 400px">
                                                    @if(isset($this->dataTPP['grafik']))
                                                    <livewire:livewire-line-chart
                                                        key="{{ $chartStatistikTPP->reactiveKey() }}"
                                                        :line-chart-model="$chartStatistikTPP" />
                                                    @else
                                                    @livewire('components.loading')
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div wire:init="_getDataSurat"></div>
                                        <div class="col mg-t-20 mg-sm-t-30">
                                            <div class="alert alert-solid alert-success tx-center">
                                                <h4>
                                                    <strong>Korespondensi</strong>
                                                </h4>
                                            </div><!-- alert -->
                                            <div class="row row-sm justify-content-center">
                                                @if(isset($this->dataSurat['naskah_masuk_linechart']) &&
                                                isset($this->dataSurat['naskah_keluar_linechart']))
                                                <div class="col-12 col-md-3 mg-b-30">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="MM/DD/YYYY"
                                                            x-init="
                                                            $($el).datepicker({
                                                                dateFormat: 'yy-mm-dd',
                                                                onSelect: function() {
                                                                    var dateObject = $(this).val();
                                                                    $wire.set('dateStartSurat', dateObject)
                                                                }
                                                            });
                                                            " wire:model.change="dateStartSurat">
                                                    </div>
                                                </div><!-- wd-200 -->
                                                <div class="col-12 col-md-3 mg-b-30">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="MM/DD/YYYY"
                                                            x-init="
                                                            $($el).datepicker({
                                                                dateFormat: 'yy-mm-dd',
                                                                onSelect: function() {
                                                                    var dateObject = $(this).val();
                                                                    $wire.set('dateEndSurat', dateObject)
                                                                }
                                                            });" wire:model.change="dateEndSurat">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <select class="form-control mg-b-30" x-init="
                                                        new TomSelect($el,{
                                                            create: false,
                                                            sortField: {
                                                                field: 'text',
                                                                direction: 'asc'
                                                            }
                                                        });
                                                        " wire:model.live="instanceIdSurat">
                                                        <option value="">Pilih Instansi</option>
                                                        @foreach($arrInstances as $inst)
                                                        <option value="{{ $inst->semesta_id }}">
                                                            {{ $inst->name }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @endif
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row row-xs mg-t-30">
                                        <div class="col-12 col-md-6 mg-t-10">
                                            <div class="card card-activities pd-20">
                                                <h6 class="slim-card-title mg-b-20">
                                                    Berdasarkan Jenis Surat Masuk
                                                    <i class="fa fa-info-circle"></i>
                                                </h6>
                                                <div class="row row-sm">
                                                    <div class="col-12">
                                                        <div class="card card-sales bg-mantle">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label class="fs-8 tx-white-8">
                                                                        Total Surat Masuk
                                                                    </label>
                                                                    <p class="fs-32">
                                                                        @if(isset($this->dataSurat['naskah_masuk']))
                                                                        {{
                                                                        number_format($this->dataSurat['naskah_masuk'],
                                                                        0,'.','.')
                                                                        }}
                                                                        @else
                                                                        ...
                                                                        @endif
                                                                    </p>
                                                                </div><!-- col -->
                                                                <div class="col">
                                                                    <label class="fs-8 tx-white-8 ">
                                                                        Belum Didisposisikan
                                                                    </label>
                                                                    <p class="fs-32">
                                                                        @if(isset($this->dataSurat['surat_masuk_belum_didisposisikan']))
                                                                        {{
                                                                        number_format($this->dataSurat['surat_masuk_belum_didisposisikan'],
                                                                        0,'.','.')
                                                                        }}
                                                                        @else
                                                                        ...
                                                                        @endif
                                                                    </p>
                                                                </div><!-- col -->
                                                                <div class="col">
                                                                    <label class="fs-8 tx-white-8">
                                                                        Sudah Didisposisikan
                                                                    </label>
                                                                    <p class="fs-32">
                                                                        @if(isset($this->dataSurat['surat_masuk_sudah_didisposisikan']))
                                                                        {{
                                                                        number_format($this->dataSurat['surat_masuk_sudah_didisposisikan'],
                                                                        0,'.','.')
                                                                        }}
                                                                        @else
                                                                        ...
                                                                        @endif
                                                                    </p>
                                                                </div><!-- col -->
                                                                <div class="col">
                                                                    <label class="fs-8 tx-white-8">
                                                                        Selesai
                                                                    </label>
                                                                    <p class="fs-32">
                                                                        @if(isset($this->dataSurat['surat_masuk_selesai']))
                                                                        {{
                                                                        number_format($this->dataSurat['surat_masuk_selesai'],
                                                                        0,'.','.')
                                                                        }}
                                                                        @else
                                                                        ...
                                                                        @endif
                                                                    </p>
                                                                </div><!-- col -->
                                                            </div><!-- row -->
                                                        </div><!-- card -->
                                                    </div><!-- col-4 -->
                                                </div><!-- row -->
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 mg-t-10">
                                            <div class="card card-activities pd-20">
                                                <h6 class="slim-card-title mg-b-20">
                                                    Berdasarkan Jenis Surat Keluar
                                                    <i class="fa fa-info-circle"></i>
                                                </h6>
                                                <div class="row row-sm">
                                                    <div class="col-12">
                                                        <div class="card card-sales bg-danger">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label class="fs-6 tx-white-8">
                                                                        Total Surat Keluar
                                                                    </label>
                                                                    <p class="fs-32">
                                                                        @if(isset($this->dataSurat['total_naskah_keluar']))
                                                                        {{
                                                                        number_format($this->dataSurat['total_naskah_keluar'],
                                                                        0,'.','.')
                                                                        }}
                                                                        @else
                                                                        ...
                                                                        @endif
                                                                    </p>
                                                                </div><!-- col -->
                                                                <div class="col">
                                                                    <label class="fs-6 tx-white-8 ">
                                                                        Proses Verifikasi
                                                                    </label>
                                                                    <p class="fs-32">
                                                                        @if(isset($this->dataSurat['proses_verifikasi']))
                                                                        {{
                                                                        number_format($this->dataSurat['proses_verifikasi'],
                                                                        0,'.','.')
                                                                        }}
                                                                        @else
                                                                        ...
                                                                        @endif
                                                                    </p>
                                                                </div><!-- col -->
                                                                <div class="col">
                                                                    <label class="fs-6 tx-white-8">
                                                                        Menunggu Tandatangan
                                                                    </label>
                                                                    <p class="fs-32">
                                                                        @if(isset($this->dataSurat['menunggu_tanda_tangan']))
                                                                        {{
                                                                        number_format($this->dataSurat['menunggu_tanda_tangan'],
                                                                        0,'.','.')
                                                                        }}
                                                                        @else
                                                                        ...
                                                                        @endif
                                                                    </p>
                                                                </div><!-- col -->
                                                                <div class="col">
                                                                    <label class="fs-6 tx-white-8">
                                                                        Sudah Ditandatangani
                                                                    </label>
                                                                    <p class="fs-32">
                                                                        @if(isset($this->dataSurat['sudah_tanda_tangan']))
                                                                        {{
                                                                        number_format($this->dataSurat['sudah_tanda_tangan'],
                                                                        0,'.','.')
                                                                        }}
                                                                        @else
                                                                        ...
                                                                        @endif
                                                                    </p>
                                                                </div><!-- col -->
                                                            </div><!-- row -->
                                                        </div><!-- card -->
                                                    </div><!-- col-4 -->
                                                </div><!-- row -->
                                            </div>
                                        </div>

                                        <div class="col-12 mg-t-10">
                                            <div class="card card-activities pd-20">
                                                <h6 class="slim-card-title mg-b-20">
                                                    Tata Naskah Surat Semesta
                                                    <i class="fa fa-info-circle"></i>
                                                </h6>
                                                <div class="card card-activities pd-20">
                                                    <div style="width:100%; height: 400px">
                                                        @if(isset($this->dataSurat['naskah_masuk_linechart']) &&
                                                        isset($this->dataSurat['naskah_keluar_linechart']))
                                                        <livewire:livewire-line-chart
                                                            key="{{ $chartChartNaskahSurat->reactiveKey() }}"
                                                            :line-chart-model="$chartChartNaskahSurat" />
                                                        @else
                                                        @livewire('components.loading')
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- tab-content -->
                        </div><!-- card-body -->
                    </div><!-- card -->
                </div><!-- col -->
            </div><!-- slim-mainpanel -->
        </div>
    </div>

    @push('styles')
    <link href="{{ asset('assets/lib/rickshaw/css/rickshaw.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/tom-select/2.3.1/css/tom-select.bootstrap4.min.css" />
    @endpush

    @push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tom-select/2.3.1/js/tom-select.complete.js"></script>


    <script src="{{ asset('assets/lib/jquery/js/jquery-2.1.4.js') }}"></script>
    <script src="{{ asset('assets/lib/jquery-ui/js/jquery-ui-1.12.1.js') }}"></script>
    <script src="{{ asset('assets/lib/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/lib/jquery.cookie/js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('assets/lib/d3/js/d3.js') }}"></script>
    <script src="{{ asset('assets/lib/rickshaw/js/rickshaw.min.js') }}"></script>
    <script src="{{ asset('assets/lib/Flot/js/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/lib/Flot/js/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assets/lib/peity/js/jquery.peity.js') }}"></script>
    <script src="{{ asset('assets/lib/moment/js/moment.js') }}"></script>

    <script src="{{ asset('assets/js/slim.js') }}"></script>
    <script src="{{ asset('assets/js/ResizeSensor.js') }}"></script>
    <script src="{{ asset('assets/lib/jqvmap/js/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/lib/jqvmap/js/jquery.vmap.world.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/dashboard-opd/semesta.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard-opd/guruku.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard-opd/sidesi.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard-opd/sinona.js') }}"></script> --}}

    <script src="{{ asset('assets/js/jquery.vmap.sampledata.js') }}"></script>
    <script>
        $(document).ready(function () {
        $('.select2-show-search').select2({
          placeholder: function () {
            $(this).data('placeholder');
          },
          allowClear: true,
          width: '100%'
        });
      });
    </script>
    <script>
        $(function () {
        'use strict'

        $('#vmap').vectorMap({
          map: 'world_en',
          backgroundColor: '#fff',
          color: '#ffffff',
          hoverOpacity: 0.7,
          selectedColor: '#666666',
          enableZoom: true,
          showTooltip: true,
          scaleColors: ['#17A2B8', '#006491'],
          values: sample_data,
          normalizeFunction: 'polynomial'
        });

      });
    </script>

    <script>
        $(function () {
        'use strict'

        // Datepicker
        $('.fc-datepicker').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true
        });

        $('#datepickerNoOfMonths').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true,
          numberOfMonths: 2
        });

      });
    </script>

    @endpush
</div>
