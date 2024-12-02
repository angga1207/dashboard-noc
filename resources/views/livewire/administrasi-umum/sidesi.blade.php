<?php

use Carbon\Carbon;

?>
<div>

    <div wire:init="_getListOPD"></div>
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

                                        <div wire:ignore class="nav-statistics-wrapper">
                                            <nav class="nav">
                                                <a href="#pegawai" data-toggle="tab" class="nav-link active"
                                                    wire:click.prevent="$set('view', 1)">
                                                    Kondisi Pegawai
                                                </a>
                                                <a href="#presensis" data-toggle="tab" class="nav-link"
                                                    wire:click.prevent="$set('view', 2)">
                                                    Presensi
                                                </a>
                                                <a href="#lkhsidesi" data-toggle="tab" class="nav-link"
                                                    wire:click.prevent="$set('view', 3)">
                                                    LKH
                                                </a>
                                                <a href="#tataSurat" data-toggle="tab" class="nav-link"
                                                    wire:click.prevent="$set('view', 4)">
                                                    Surat Desa
                                                </a>
                                            </nav>
                                        </div><!-- nav-statistics-wrapper -->

                                        <div class="card-body pd-0 mg-b-30">
                                            <div class="tab-content">

                                                <div wire:init="_getKondisiPegawai"></div>
                                                <div wire:ignore.self class="tab-pane {{ $view == 1 ? 'active' : '' }}"
                                                    id="pegawai">
                                                    <div class="container-fluid">
                                                        <div class="row justify-content-between">
                                                            <div class="col-12 col-lg-5">
                                                                <div class="row row-xs justify-content-between">
                                                                    <div class="des">
                                                                        <h1 class="tx-inverse tx-56 tx-lato tx-bold">
                                                                            @if($kp_totalSeluruhASN)
                                                                            {{ number_format($kp_totalSeluruhASN,
                                                                            0,'.','.') }}
                                                                            @else
                                                                            {{-- @livewire('components.loading') --}}
                                                                            ...
                                                                            @endif
                                                                        </h1>
                                                                        <h6 class="tx-15 tx-inverse tx-bold mg-b-20">
                                                                            Total Perangkat Desa
                                                                        </h6>
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
                                                                <div style="width: 100%; height: 400px">
                                                                    @if(isset($this->kp_dataChart['labels']) &&
                                                                    isset($this->kp_dataChart['data']))
                                                                    <livewire:livewire-column-chart
                                                                        key="{{ $chartKondisiPegawai->reactiveKey() }}"
                                                                        :column-chart-model="$chartKondisiPegawai" />
                                                                    @else
                                                                    @livewire('components.loading')
                                                                    @endif
                                                                </div>
                                                            </div><!-- col-7 -->
                                                        </div>
                                                    </div>
                                                </div>

                                                <div wire:ignore.self class="tab-pane {{ $view == 2 ? 'active' : '' }}"
                                                    id="presensis">
                                                    <div class="container-fluid">
                                                        <div class="row row-xs mg-t-30">
                                                            <div class="col-12 col-md-4 mg-t-10">
                                                                <div class="card card-status bg-body-custom-ungu">
                                                                    <div class="media">
                                                                        <i
                                                                            class="icon ion-ios-person-outline tx-purple"></i>
                                                                        <div class="media-body">
                                                                            <h1>
                                                                                @if(isset($pres_data['data'][0]))
                                                                                {{
                                                                                number_format($pres_data['data'][0],0,',',',')
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

                                                            <div class="col-12 col-md-4 mg-t-10 ">
                                                                <div class="card card-status bg-body-custom-ungu">
                                                                    <div class="media">
                                                                        <i class="icon ion-android-walk tx-teal"></i>
                                                                        <div class="media-body">
                                                                            <h1>
                                                                                @if(isset($pres_data['data'][1]))
                                                                                {{
                                                                                number_format($pres_data['data'][1],0,',',',')
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

                                                            <div class="col-12 col-md-4 mg-t-10">
                                                                <div class="card card-status bg-body-custom-ungu">
                                                                    <div class="media">
                                                                        <i
                                                                            class="icon ion-ios-body-outline tx-danger"></i>
                                                                        <div class="media-body">
                                                                            <h1>
                                                                                @if(isset($pres_data['data'][2]))
                                                                                {{
                                                                                number_format($pres_data['data'][2],0,',',',')
                                                                                }}
                                                                                @else
                                                                                ...
                                                                                @endif
                                                                            </h1>
                                                                            <p>Total Sakit</p>
                                                                        </div><!-- media-body -->
                                                                    </div><!-- media -->
                                                                </div><!-- card -->
                                                            </div><!-- col-3 -->
                                                        </div>

                                                        <div class="row row-xs mg-t-30">
                                                            <div class="col-12 col-md-6">
                                                                <div class="card card-activities pd-20">

                                                                    <div style="width: 100%; height: 400px">
                                                                        @if(isset($this->pres_data['labels']) &&
                                                                        isset($this->pres_data['data']))
                                                                        <livewire:livewire-pie-chart
                                                                            key="{{ $chartRekapPresensi1->reactiveKey() }}"
                                                                            :pie-chart-model="$chartRekapPresensi1" />
                                                                        @else
                                                                        @livewire('components.loading')
                                                                        @endif
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-md-6">
                                                                <div class="card card-activities pd-20">

                                                                    <div style="width: 100%; height: 400px">
                                                                        @if(isset($this->pres_data['labels']) &&
                                                                        isset($this->pres_data['data']))
                                                                        <livewire:livewire-line-chart
                                                                            key="{{ $chartRekapPresensi2->reactiveKey() }}"
                                                                            :line-chart-model="$chartRekapPresensi2" />
                                                                        @else
                                                                        @livewire('components.loading')
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
                                                                    <div class="d-flex row-sm justify-content-center">
                                                                        @if(isset($this->pres_data['labels']) &&
                                                                        isset($this->pres_data['data']))
                                                                        <div class="col-12 col-md-3">
                                                                            <select class="form-control mg-b-30" x-init="
                                                                                new TomSelect($el,{
                                                                                    create: false,
                                                                                    sortField: {
                                                                                        field: 'text',
                                                                                        direction: 'asc'
                                                                                    }
                                                                                });
                                                                                " wire:model.live="selectedYear">
                                                                                <option value="">
                                                                                    Pilih Tahun
                                                                                </option>
                                                                                @foreach($arrYears as $yr)
                                                                                <option value="{{ $yr }}">
                                                                                    {{ $yr }}
                                                                                </option>
                                                                                @endforeach
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
                                                                                " wire:model.live="selectedInstanceId">
                                                                                <option value="">Kabupaten Ogan Ilir
                                                                                </option>
                                                                                @foreach($arrPerangkatDaerah as $pd)
                                                                                <option value="{{ $pd['id_skpd'] }}">
                                                                                    {{ $pd['nama_skpd'] }}
                                                                                </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        @endif
                                                                    </div>

                                                                    <div style="width: 100%; height: 400px">
                                                                        @if(isset($this->pres_data['labels']) &&
                                                                        isset($this->pres_data['data']))
                                                                        <livewire:livewire-line-chart
                                                                            key="{{ $chartGrafikPresensi->reactiveKey() }}"
                                                                            :line-chart-model="$chartGrafikPresensi" />
                                                                        @else
                                                                        @livewire('components.loading')
                                                                        @endif
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div wire:ignore.self class="tab-pane {{ $view == 3 ? 'active' : '' }}"
                                                    id="lkhsidesi">
                                                    <div class="container-fluid">
                                                        <div class="row row-xs mg-t-30">
                                                            <div class="col-12 col-lg-4">
                                                                <div class="card card-activities pd-20">
                                                                    <h5>Laporan Kinerja Harian</h5>
                                                                    <div class="alert alert-solid alert-info mg-t-30">
                                                                        <div class="d-flex justify-content-between">
                                                                            <span class="fs-16">
                                                                                Total <br> LKH
                                                                            </span>
                                                                            <strong style="font-size: 32px;">
                                                                                @if(isset($this->lkh_dataTotal[3]))
                                                                                {{
                                                                                number_format($this->lkh_dataTotal[3]['total_lkh'],0,',',',')
                                                                                }}
                                                                                @else
                                                                                ...
                                                                                @endif
                                                                            </strong>
                                                                        </div>
                                                                    </div><!-- alert -->

                                                                    <div class="alert alert-solid alert-success">
                                                                        <div class="d-flex justify-content-between">
                                                                            <span class="fs-16">
                                                                                Sudah <br>
                                                                                Diverifikasi
                                                                            </span>
                                                                            <strong style="font-size: 32px;">
                                                                                @if(isset($this->lkh_dataTotal[2]))
                                                                                {{
                                                                                number_format($this->lkh_dataTotal[2]['total_lkh'],0,',',',')
                                                                                }}
                                                                                @else
                                                                                ...
                                                                                @endif
                                                                            </strong>
                                                                        </div>
                                                                    </div><!-- alert -->

                                                                    <div class="alert alert-solid alert-warning">
                                                                        <div class="d-flex justify-content-between">
                                                                            <span class="fs-16">
                                                                                Belum <br>
                                                                                Diverifikasi
                                                                            </span>
                                                                            <strong style="font-size: 32px;">
                                                                                @if(isset($this->lkh_dataTotal[0]))
                                                                                {{
                                                                                number_format($this->lkh_dataTotal[0]['total_lkh'],0,',',',')
                                                                                }}
                                                                                @else
                                                                                ...
                                                                                @endif
                                                                            </strong>
                                                                        </div>
                                                                    </div><!-- alert -->

                                                                    <div class="alert alert-solid alert-danger">
                                                                        <div class="d-flex justify-content-between">
                                                                            <span class="fs-16">
                                                                                Ditolak
                                                                            </span>
                                                                            <strong style="font-size: 32px;">
                                                                                @if(isset($this->lkh_dataTotal[1]))
                                                                                {{
                                                                                number_format($this->lkh_dataTotal[1]['total_lkh'],0,',',',')
                                                                                }}
                                                                                @else
                                                                                ...
                                                                                @endif
                                                                            </strong>
                                                                        </div>
                                                                    </div><!-- alert -->
                                                                </div><!-- card -->
                                                            </div><!-- col-5 -->
                                                            <div class="col-12 col-lg-8">
                                                                <div class="card card-people-list pd-10">

                                                                    <div
                                                                        style="width: 100%; height:510px; overflow-x:auto; overflow-y:hidden">
                                                                        @if(isset($this->lkh_dataChart['labels']) &&
                                                                        isset($this->lkh_dataChart['data']))
                                                                        <div style="min-width:8000px; height: 500px">
                                                                            <livewire:livewire-column-chart
                                                                                key="{{ $chartLKH->reactiveKey() }}"
                                                                                :column-chart-model="$chartLKH" />
                                                                        </div>
                                                                        @else
                                                                        @livewire('components.loading')
                                                                        @endif
                                                                    </div>

                                                                </div>
                                                            </div><!-- card -->
                                                        </div><!-- col-3 -->
                                                    </div>
                                                </div>

                                                <div wire:ignore.self class="tab-pane {{ $view == 4 ? 'active' : '' }}"
                                                    id="tataSurat">
                                                    <div class="container-fluid">
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
                                                                                        <label class="tx-12 tx-white-8">
                                                                                            Total Surat Masuk
                                                                                        </label>
                                                                                        <p>
                                                                                            @if(isset($this->sudes_data[4]['total_surat_desa']))
                                                                                            {{
                                                                                            number_format($this->sudes_data[4]['total_surat_desa'],0,',',',')
                                                                                            }}
                                                                                            @else
                                                                                            ...
                                                                                            @endif
                                                                                        </p>
                                                                                    </div><!-- col -->
                                                                                    <div class="col">
                                                                                        <label
                                                                                            class="tx-12 tx-white-8 ">
                                                                                            {{-- Belum Didisposisikan
                                                                                            --}}
                                                                                            Menunggu Penomoran
                                                                                        </label>
                                                                                        <p>
                                                                                            @if(isset($this->sudes_data[0]['total_surat_desa']))
                                                                                            {{
                                                                                            number_format($this->sudes_data[0]['total_surat_desa'],0,',',',')
                                                                                            }}
                                                                                            @else
                                                                                            ...
                                                                                            @endif
                                                                                        </p>
                                                                                    </div><!-- col -->
                                                                                    <div class="col">
                                                                                        <label class="tx-12 tx-white-8">
                                                                                            {{-- Sudah Didisposisikan
                                                                                            --}}
                                                                                            Menunggu Ditandatangan
                                                                                        </label>
                                                                                        <p>
                                                                                            @if(isset($this->sudes_data[1]['total_surat_desa']))
                                                                                            {{
                                                                                            number_format($this->sudes_data[1]['total_surat_desa'],0,',',',')
                                                                                            }}
                                                                                            @else
                                                                                            ...
                                                                                            @endif
                                                                                        </p>
                                                                                    </div><!-- col -->
                                                                                    <div class="col">
                                                                                        <label class="tx-12 tx-white-8">
                                                                                            Selesai
                                                                                        </label>
                                                                                        <p>
                                                                                            @if(isset($this->sudes_data[3]['total_surat_desa']))
                                                                                            {{
                                                                                            number_format($this->sudes_data[3]['total_surat_desa'],0,',',',')
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
                                                                    <h6 class="slim-card-title mg-b-20">Berdasarkan
                                                                        Jenis Surat Keluar <i
                                                                            class="fa fa-info-circle"></i>
                                                                    </h6>
                                                                    <div class="row row-sm">
                                                                        <div class="col-12">
                                                                            <div class="card card-sales bg-danger">
                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <label class="tx-12 tx-white-8">
                                                                                            Total Surat Keluar
                                                                                        </label>
                                                                                        <p>
                                                                                            [no_data]
                                                                                        </p>
                                                                                    </div><!-- col -->
                                                                                    <div class="col">
                                                                                        <label
                                                                                            class="tx-12 tx-white-8 ">
                                                                                            Proses Verifikasi
                                                                                        </label>
                                                                                        <p>
                                                                                            [no_data]
                                                                                        </p>
                                                                                    </div><!-- col -->
                                                                                    <div class="col">
                                                                                        <label class="tx-12 tx-white-8">
                                                                                            Menunggu Tandatangan
                                                                                        </label>
                                                                                        <p>
                                                                                            [no_data]
                                                                                        </p>
                                                                                    </div><!-- col -->
                                                                                    <div class="col">
                                                                                        <label class="tx-12 tx-white-8">
                                                                                            Sudah Ditandatangani
                                                                                        </label>
                                                                                        <p>
                                                                                            [no_data]
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
                                                                    <h6 class="slim-card-title mg-b-20">Tata Naskah
                                                                        Surat Sidesi <i class="fa fa-info-circle"></i>
                                                                    </h6>
                                                                    <div class="card card-activities pd-20">

                                                                        <div style="width: 100%; height: 400px">
                                                                            @if(isset($this->sudes_dataMonths['labels'])
                                                                            && isset($this->sudes_dataMonths['data']))
                                                                            <livewire:livewire-line-chart
                                                                                key="{{ $chartSuratDesa->reactiveKey() }}"
                                                                                :line-chart-model="$chartSuratDesa" />
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

    @push('styles')
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/tom-select/2.3.1/css/tom-select.bootstrap4.min.css" />
    @endpush

    @push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tom-select/2.3.1/js/tom-select.complete.js"></script>
    @endpush

</div>
