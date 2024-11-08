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
                            </h6>
                            <div class="">
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
                            </h6>
                            <div class="">

                                <div style="width: 100%; height: 400px">
                                    <livewire:livewire-column-chart key="{{ $chartKeuangan->reactiveKey() }}"
                                        :column-chart-model="$chartKeuangan" />
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
                            </h6>
                            <div class="">
                                <div style="width: 100%; height: 400px">
                                    <livewire:livewire-column-chart key="{{ $chartKinerja->reactiveKey() }}"
                                        :column-chart-model="$chartKinerja" />
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
                                Capaian Kinerja {{ $selectedInstanceKinerja->name ?? 'Kabupaten Ogan Ilir' }}
                                Tahun {{ $year }}
                            </h6>
                            <div class="">
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
                        </div>
                    </div>
                </div>
            </div>
            {{-- Kinerja Start --}}
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
