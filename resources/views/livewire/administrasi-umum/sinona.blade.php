<?php

use Carbon\Carbon;

?>
<div>

    <div wire:init="_getData"></div>
    <div wire:init="_getDataAbsen"></div>
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
                                            @if(isset($this->mainData['per_skpd']))
                                            <select class="form-control wd-300" x-init="
                                                new TomSelect($el,{
                                                    create: false,
                                                    sortField: {
                                                        field: 'text',
                                                        direction: 'asc'
                                                    }
                                                });
                                                " style="width:100%" wire:model.live="selectedInstanceId">
                                                <option value="">Kabupaten Ogan Ilir</option>
                                                @foreach($arrInstances as $inst)
                                                <option value="{{ $inst->sinona_id }}">
                                                    {{ $inst->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                            <div class="card card-dash-chart-one mg-t-20 mg-sm-t-30">
                                                <div class="card-header">
                                                    <h6>
                                                        Statistik Non-ASN
                                                        {{ $selectedInstance->name ?? 'Kabupaten Ogan Ilir' }}
                                                    </h6>
                                                </div>
                                                <div class="card-body">
                                                    <div style="width: 100%; height: 300px">
                                                        @if(isset($this->mainData['seluruh_pd']['pendidikan']))
                                                        <livewire:livewire-pie-chart
                                                            key="{{ $chartStatistikKabupaten->reactiveKey() }}"
                                                            :pie-chart-model="$chartStatistikKabupaten" />
                                                        @else
                                                        @livewire('components.loading')
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <div class="card card-dash-chart-one mg-t-20 mg-sm-t-30">
                                                <div class="card-header">
                                                    <h6>
                                                        @if($this->selectedInstance)
                                                        Jumlah Non-ASN
                                                        @else
                                                        Statistik Non-ASN Berdasarkan Perangkat Daerah
                                                        @endif
                                                    </h6>
                                                </div>
                                                <div class="card-body">
                                                    <div style="width: 100%; height: 300px">
                                                        @if($this->selectedInstance)
                                                        <div>
                                                            Jumlah Non-ASN
                                                        </div>
                                                        <h1>
                                                            @if(isset($this->mainData['seluruh_pd']['total_pegawai']))
                                                            {{
                                                            number_format($this->mainData['seluruh_pd']['total_pegawai'],0,',',',')
                                                            }} Orang
                                                            @else
                                                            ...
                                                            @endif
                                                        </h1>
                                                        @else
                                                        @if(isset($this->mainData['per_skpd']))
                                                        <livewire:livewire-pie-chart
                                                            key="{{ $chartStatsitikOPD->reactiveKey() }}"
                                                            :pie-chart-model="$chartStatsitikOPD" />
                                                        @else
                                                        @livewire('components.loading')
                                                        @endif
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <div class="card card-dash-chart-one mg-t-20 mg-sm-t-30">
                                                <div class="card-header">
                                                    <h6>Statistik Non-ASN Berdasarkan Jenjang Pendidikan</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div style="width: 100%; height: 300px">
                                                        @if(isset($this->mainData['seluruh_pd']['pendidikan']))
                                                        <livewire:livewire-column-chart
                                                            key="{{ $chartPendidikan->reactiveKey() }}"
                                                            :column-chart-model="$chartPendidikan" />
                                                        @else
                                                        @livewire('components.loading')
                                                        @endif
                                                    </div>
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
                                                        <h1>
                                                            @if(isset($this->mainData['seluruh_pd']))
                                                            {{
                                                            number_format($this->mainData['seluruh_pd']['jumlah_presensi_masuk'],0,',',',')
                                                            }}
                                                            @else
                                                            ...
                                                            @endif
                                                        </h1>
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
                                                        <h1>
                                                            @if(isset($this->mainData['seluruh_pd']))
                                                            {{
                                                            number_format($this->mainData['seluruh_pd']['jumlah_presensi_pulang'],0,',',',')
                                                            }}
                                                            @else
                                                            ...
                                                            @endif
                                                        </h1>
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
                                                    @if(isset($this->mainData['per_skpd']) && count($this->dataAbsenLog)
                                                    > 0)
                                                    <div class="col-12 col-md-3">
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
                                                                        $wire.set('dateStart', dateObject)
                                                                    }
                                                                });
                                                                " wire:model.change="dateStart">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-3">
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
                                                                        $wire.set('dateEnd', dateObject)
                                                                    }
                                                                });
                                                                " wire:model.change="dateEnd">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-3">
                                                        <select class="form-control wd-300" x-init="
                                                            new TomSelect($el,{
                                                                create: false,
                                                                sortField: {
                                                                    field: 'text',
                                                                    direction: 'asc'
                                                                }
                                                            });
                                                            " style="width:100%;" wire:model.live="selectedInstanceId">
                                                            <option value="">Kabupaten Ogan Ilir</option>
                                                            @foreach($arrInstances as $inst)
                                                            <option value="{{ $inst->sinona_id }}">
                                                                {{ $inst->name }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    @endif
                                                </div>
                                                <div style="width: 100%; height: 400px">
                                                    @if(count($this->dataAbsenLog) > 0)
                                                    <livewire:livewire-line-chart key="{{ $chartLine->reactiveKey() }}"
                                                        :line-chart-model="$chartLine" />
                                                    @else
                                                    @livewire('components.loading')
                                                    @endif
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


    @push('styles')
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/tom-select/2.3.1/css/tom-select.bootstrap4.min.css" />
    @endpush

    @push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tom-select/2.3.1/js/tom-select.complete.js"></script>
    @endpush

</div>
