<?php

?>
<div>
    <div class="slim-mainpanel">
        <div class="container-fluid pd-t-30">

            {{-- Keuangan Start --}}
            <div wire:init="_getDataRealisasiKeuangan"></div>
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="card">
                        <div class="card-body pd-b-0">
                            <h6 class="slim-card-title mb-3">
                                <i class="fa fa-universal-access mr-2"></i>
                                Capaian Keuangan Tahun {{ $year }}
                                <i class="fa fa-check text-success"></i>
                            </h6>
                            <div class="">
                                @if(isset($this->dataKeuangan['target']) && isset($this->dataKeuangan['realisasi']))
                                <select class="form-control mg-b-30" x-init="
                                new TomSelect($el,{
                                    create: false,
                                    sortField: {
                                        field: 'text',
                                        direction: 'asc'
                                    }
                                });
                                " wire:model.live="instanceIdKeuangan">
                                    <option value="">Kabupaten Ogan Ilir</option>
                                    @foreach($arrInstances as $inst)
                                    <option value="{{ $inst->sicaram_id }}">
                                        {{ $inst->name }}
                                    </option>
                                    @endforeach
                                </select>
                                @else
                                <select class="form-control mg-b-30" disabled>
                                    <option value="">Kabupaten Ogan Ilir</option>
                                </select>
                                @endif
                            </div>
                            <div class="sec-01">
                                <h2 class="tx-lato" style="font-weight: bold; white-space: nowrap;">
                                    <i class="fa fa-bolt mr-2"></i>
                                    @if(isset($this->dataKeuangan['target']))
                                    Rp. {{ number_format(collect($this->dataKeuangan['target'])->max('target'),
                                    0,'.','.') }}
                                    @else
                                    Rp. ...
                                    @endif
                                </h2>
                                <p class="tx-12">
                                    Anggaran
                                </p>
                            </div>
                            <div class="sec-02">
                                <h2 class="tx-lato" style="font-weight: bold; white-space: nowrap;">
                                    <i class="fa fa-money mr-2"></i>
                                    @if(isset($this->dataKeuangan['realisasi']))
                                    Rp. {{ number_format(collect($this->dataKeuangan['realisasi'])->max('realisasi'),
                                    0,'.','.') }}
                                    @else
                                    Rp. ...
                                    @endif
                                </h2>
                                <p class="tx-12">
                                    Realisasi
                                </p>
                            </div>
                            <div class="sec-03">
                                <h2 class="tx-lato" style=" font-weight: bold; white-space: nowrap;">
                                    <i class="fa fa-percent mr-2"></i>
                                    @if(isset($this->dataKeuangan['target']) && isset($this->dataKeuangan['realisasi']))
                                    {{ number_format((collect($this->dataKeuangan['realisasi'])->max('realisasi') /
                                    collect($this->dataKeuangan['target'])->max('target')) * 100,
                                    2,',',',') }}
                                    @else
                                    ...
                                    @endif
                                </h2>
                                <p class="tx-12">
                                    Capaian Realisasi
                                </p>
                            </div>

                            @if($instanceIdKeuangan)
                            <div class="mb-4 text-center">
                                <a href="{{ route('perekonomian-pembangunan.detail', ['code' => $selectedInstanceKeuangan->nomenklatur_code, 'view' => 'keuangan']) }}"
                                    class="btn btn-primary btn-block btn-signin">
                                    Buka Detail
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-9">
                    <div class="card">
                        <div class="card-body pd-b-0">
                            <h6 class="slim-card-title mb-3">
                                <i class="fa fa-universal-access mr-2"></i>
                                Tabel Capaian Keuangan {{ $selectedInstanceKeuangan->name ?? 'Kabupaten Ogan Ilir' }}
                                Tahun {{ $year }}
                                <i class="fa fa-check text-success"></i>
                            </h6>
                            <div class="">

                                <div style="width: 100%; height: 400px">
                                    @if(isset($this->dataKeuangan['target']) && isset($this->dataKeuangan['realisasi']))
                                    <livewire:livewire-column-chart key="{{ $chartKeuangan->reactiveKey() }}"
                                        :column-chart-model="$chartKeuangan" />
                                    @else
                                    @livewire('components.loading')
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Keuangan Start --}}

            {{-- Kinerja Start --}}
            <div wire:init="_getDataRealisasiKinerja"></div>
            <div class="row mt-4">
                <div class="col-12 col-md-9">
                    <div class="card">
                        <div class="card-body pd-b-0">
                            <h6 class="slim-card-title mb-3">
                                <i class="fa fa-universal-access mr-2"></i>
                                Tabel Capaian Kinerja
                                {{ $selectedInstanceKinerja->name ?? 'Kabupaten Ogan Ilir' }}
                                <i class="fa fa-check text-success"></i>
                            </h6>
                            <div class="">
                                <div style="width: 100%; height: 400px">
                                    @if(isset($this->dataKinerja['target']) && isset($this->dataKinerja['realisasi']))
                                    <livewire:livewire-column-chart key="{{ $chartKinerja->reactiveKey() }}"
                                        :column-chart-model="$chartKinerja" />
                                    @else
                                    @livewire('components.loading')
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div class="card">
                        <div class="card-body pd-b-0">
                            <h6 class="slim-card-title mb-3">
                                <i class="fa fa-universal-access mr-2"></i>
                                Capaian Kinerja
                                Tahun {{ $year }}
                                <i class="fa fa-check text-success"></i>
                            </h6>
                            <div class="">
                                @if(isset($this->dataKinerja['target']) && isset($this->dataKinerja['realisasi']))
                                <select class="form-control mg-b-30" x-init="
                                new TomSelect($el,{
                                    create: false,
                                    sortField: {
                                        field: 'text',
                                        direction: 'asc'
                                    }
                                });
                                " wire:model.live="instanceIdKinerja">
                                    <option value="">Kabupaten Ogan Ilir</option>
                                    @foreach($arrInstances as $inst)
                                    <option value="{{ $inst->sicaram_id }}">
                                        {{ $inst->name }}
                                    </option>
                                    @endforeach
                                </select>
                                @else
                                <select class="form-control mg-b-30" disabled>
                                    <option value="">Kabupaten Ogan Ilir</option>
                                </select>
                                @endif
                            </div>
                            <div class="sec-01">
                                <h1 class="tx-lato" style="font-weight: bold; white-space: nowrap">
                                    <i class="fa fa-bolt mr-3"></i>
                                    @if(isset($this->dataKinerja['target']))
                                    {{ number_format(collect($this->dataKinerja['target'])->max('target'),
                                    0,'.','.') }}
                                    @else
                                    ...
                                    @endif
                                </h1>
                                <p class="tx-12">
                                    Target Kinerja
                                </p>
                            </div>
                            <div class="sec-03">
                                <h1 class="tx-lato" style=" font-weight: bold; white-space: nowrap">
                                    <i class="fa fa-percent mr-3"></i>
                                    @if(isset($this->dataKinerja['realisasi']))
                                    {{ number_format(collect($this->dataKinerja['realisasi'])->max('realisasi'),
                                    2,'.','.') }}
                                    @else
                                    ...
                                    @endif
                                </h1>
                                <p class="tx-12">
                                    Capaian Realisasi
                                </p>
                            </div>
                            @if($instanceIdKinerja)
                            <div class="mb-4 text-center">
                                <a href="{{ route('perekonomian-pembangunan.detail', ['code' => $selectedInstanceKinerja->nomenklatur_code, 'view' => 'kinerja']) }}"
                                    class="btn btn-primary btn-block btn-signin">
                                    Buka Detail
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            {{-- Kinerja Start --}}

            @if(count($this->cookieSkpdBawahan) > 1)
            {{-- Rank Start --}}
            <div wire:init="_getDataRank"></div>
            <div class="mt-4">
                <h6 class="slim-card-title mb-3">
                    <i class="fa fa-universal-access mr-2"></i>
                    Peringkat Capaian Perangkat Daerah
                </h6>
                @if(count($dataRank) > 0)
                <div class="row">
                    @foreach($dataRank as $inst)
                    <a href="{{ route('perekonomian-pembangunan.detail', ['code' => $inst['instance_code']]) }}"
                        class="col-12 pb-3" style="cursor: pointer">
                        <div class="card card-sales bg-mantle">
                            <div class="d-flex justify-content-between gap-4" style="overflow-y: auto">

                                <div class="">
                                    <div class="text-muted">
                                        {{ $inst['instance_code'] }}
                                    </div>
                                    <h4 class="tx-white-8 fs-32">
                                        {{ $inst['instance_name'] }}
                                    </h4>

                                    <div class="d-flex mt-2">
                                        <div class="border-right pr-3">
                                            <label class="fs-16 tx-white-8 mb-0" style="white-space: nowrap">
                                                Anggaran Keuangan
                                            </label>
                                            <p class="fs-32 tx-white-8 mb-0" style="white-space: nowrap">
                                                Rp. {{ number_format($inst['target_anggaran'],0,'.','.') }}
                                            </p>
                                        </div>
                                        <div class="ml-3 pr-3 border-right">
                                            <label class="fs-16 tx-white-8 mb-0" style="white-space: nowrap">
                                                Realisasi Keuangan
                                            </label>
                                            <p class="fs-32 tx-white-8 mb-0" style="white-space: nowrap">
                                                Rp. {{ number_format($inst['realisasi_anggaran'],0,'.','.') }}
                                            </p>
                                        </div>
                                        <div class="ml-3 pr-3 border-right">
                                            <label class="fs-16 tx-white-8 mb-0 text-center"
                                                style="white-space: nowrap">
                                                Persentase Realisasi Keuangan
                                            </label>
                                            <p class="fs-32 tx-white-8 mb-0 text-center" style="white-space: nowrap">
                                                {{ number_format($inst['persentase_realisasi_anggaran'],2,'.','.') }} %
                                            </p>
                                        </div>
                                        <div class="ml-3 pr-3">
                                            <label class="fs-16 tx-white-8 mb-0 text-center"
                                                style="white-space: nowrap">
                                                Persentase Realisasi Kinerja
                                            </label>
                                            <p class="fs-32 tx-white-8 mb-0 text-center" style="white-space: nowrap">
                                                {{ number_format($inst['persentase_realisasi_kinerja'],2,'.','.') }} %
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="align-self-center">
                                    <img src="{{ asset($inst['instance_logo']) }}" alt="Logo"
                                        style="width:100%; height:100px; object-fit:contain">
                                </div>

                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
                @else
                @livewire('components.loading')
                @endif
            </div>
            {{-- Rank End --}}
            @endif

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
