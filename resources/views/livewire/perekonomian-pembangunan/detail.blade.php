<?php

?>
<div>

    <div class="slim-mainpanel">
        <div class="container-fluid pd-t-30">
            <div class="">
                <nav class="nav">
                    <a class="btn flex-grow-1 text-center mb-0 {{ $this->view == 'keuangan' ? 'btn-signin' : 'btn-primary' }}"
                        href="#" wire:click.prevent="$set('view', 'keuangan')">
                        KEUANGAN
                    </a>
                    <a class="btn flex-grow-1 text-center mb-0 {{ $this->view == 'kinerja' ? 'btn-signin' : 'btn-primary' }}"
                        href="#" wire:click.prevent="$set('view', 'kinerja')">
                        KINERJA
                    </a>
                </nav>
            </div>

            <div>
                <div wire:init="_getDataSicaram"></div>
                @if($this->view == 'keuangan')
                <div class="card">
                    <div class="card-body">
                        <h6 class="slim-card-title mb-3">
                            <i class="fa fa-universal-access mr-2"></i>
                            {{ $instance->name }}
                        </h6>
                        <div class="row">
                            <div class="col-12 col-xl-3 pb-5">
                                <table class="w-100">
                                    <tbody>
                                        <tr>
                                            <td style="font-size: 18px !important; font-weight:600 !important; white-space: nowrap;"
                                                class="py-2">
                                                Anggaran
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 18px !important; font-weight:600 !important; white-space: nowrap;"
                                                class="text-info pb-2">
                                                @if(isset($this->dataSicaram['summary_anggaran']['anggaran']))
                                                Rp. {{
                                                number_format($this->dataSicaram['summary_anggaran']['anggaran'], 0,
                                                '.', '.') }}
                                                @else
                                                Rp. ...
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 18px !important; font-weight:600 !important; white-space: nowrap;"
                                                class="py-2">
                                                Realisasi
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 18px !important; font-weight:600 !important; white-space: nowrap;"
                                                class="text-success pb-2">
                                                @if(isset($this->dataSicaram['summary_anggaran']['realisasi']))
                                                Rp. {{
                                                number_format($this->dataSicaram['summary_anggaran']['realisasi'],
                                                0,
                                                '.', '.') }}
                                                @else
                                                Rp. ...
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 18px !important; font-weight:600 !important; white-space: nowrap;"
                                                class="py-2">
                                                Persentase
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 18px !important; font-weight:600 !important; white-space: nowrap;"
                                                class="pb-2 text-primary">
                                                @if(isset($this->dataSicaram['summary_anggaran']['persentase']))
                                                {{
                                                number_format($this->dataSicaram['summary_anggaran']['persentase'],
                                                0,
                                                '.', '.') }} %
                                                @else
                                                ...
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12 col-xl-9">
                                <div class="">
                                    <div style="width: 100%; height: 400px">
                                        @if(isset($this->dataSicaram['main_anggaran']))
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
                @elseif($this->view == 'kinerja')
                <div class="card">
                    <div class="card-body">
                        <h6 class="slim-card-title mb-3">
                            <i class="fa fa-universal-access mr-2"></i>
                            {{ $instance->name }}
                        </h6>
                        <div class="row">
                            <div class="col-12 col-xl-3 pb-5">
                                <table class="w-100">
                                    <tbody>
                                        <tr>
                                            <td style="font-size: 18px !important; font-weight:600 !important; white-space: nowrap;"
                                                class="py-2">
                                                Target
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 18px !important; font-weight:600 !important; white-space: nowrap;"
                                                class="text-info pb-2">
                                                @if(isset($this->dataSicaram['summary_kinerja']['target']))
                                                {{
                                                number_format($this->dataSicaram['summary_kinerja']['target'], 0,
                                                '.', '.') }} %
                                                @else
                                                ...
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 18px !important; font-weight:600 !important; white-space: nowrap;"
                                                class="py-2">
                                                Realisasi
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 18px !important; font-weight:600 !important; white-space: nowrap;"
                                                class="text-success pb-2">
                                                @if(isset($this->dataSicaram['summary_kinerja']['realisasi']))
                                                {{
                                                number_format($this->dataSicaram['summary_kinerja']['realisasi'],
                                                0,
                                                '.', '.') }} %
                                                @else
                                                ...
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12 col-xl-9">
                                <div class="">
                                    <div style="width: 100%; height: 400px">
                                        @if(isset($this->dataSicaram['main_kinerja']))
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
                </div>
                @endif
            </div>

            @if(isset($this->dataSicaram['programs']))
            <div class="mt-4">
                <div class="card">
                    <div class="card-body">
                        <h6 class="slim-card-title mb-3">
                            <i class="fa fa-universal-access mr-2"></i>
                            Daftar Program {{ $instance->alias }}
                        </h6>

                        <div class="row">
                            @if(!$selectedProgram)
                            @foreach($this->dataSicaram['programs'] as $prg)
                            <div class="col-12">
                                <div class="card mb-2 rounded" style="cursor: pointer"
                                    wire:click.prevent="_getDetailProgram({{ json_encode($prg) }})">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center text-dark" style="font-weight: 500">
                                            <div class="mr-2">
                                                {{ $prg['code'] }}
                                            </div>
                                            <div class="">
                                                {{ $prg['name'] }}
                                            </div>
                                        </div>
                                        <div class="mt-2 d-flex align-items-center">
                                            @if($this->view == 'keuangan')
                                            <div class="mr-3" style="width:300px">
                                                <div class="text-info">
                                                    Anggaran
                                                </div>
                                                <div class="text-info" style="font-weight: 500">
                                                    Rp. {{ number_format($prg['anggaran'],0,'.','.') }}
                                                </div>
                                            </div>
                                            <div class="mr-3" style="width:300px">
                                                <div class="text-success">
                                                    Realisasi
                                                </div>
                                                <div class="text-success" style="font-weight: 500">
                                                    Rp. {{ number_format($prg['realisasi_anggaran'],0,'.','.') }}
                                                </div>
                                            </div>
                                            <div class="" style="width:300px">
                                                <div class="text-primary">
                                                    Persentase
                                                </div>
                                                <div class="text-primary" style="font-weight: 500">
                                                    {{ number_format($prg['persentase_realisasi_anggaran'],2,'.','.') }}
                                                    %
                                                </div>
                                            </div>
                                            @elseif($this->view == 'kinerja')
                                            <div class="mr-3" style="width:300px">
                                                <div class="text-info">
                                                    Target
                                                </div>
                                                <div class="text-info" style="font-weight: 500">
                                                    100 %
                                                </div>
                                            </div>
                                            <div class="mr-3" style="width:300px">
                                                <div class="text-success">
                                                    Realisasi
                                                </div>
                                                <div class="text-success" style="font-weight: 500">
                                                    {{ number_format($prg['persentase_realisasi_kinerja'],0,'.','.') }}
                                                    %
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif

                            @if($selectedProgram)
                            {{-- selected program Start --}}
                            <div class="col-12">
                                <div class="card mb-2 rounded" style="cursor: pointer">
                                    <div class="card-body row" style="position: relative;">
                                        <div class="" style="position: absolute; top:10px; right: 20px; z-index:100"
                                            wire:click.prevent="unsetProgram">
                                            <i class="fa fa-times-circle text-danger" style="font-size: 20px"></i>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex align-items-center text-dark" style="font-weight: 500">
                                                <div class="mr-2">
                                                    {{ $selectedProgram['code'] }}
                                                </div>
                                                <div class="">
                                                    {{ $selectedProgram['name'] }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <div class="mt-2 d-flex flex-column g-2">
                                                @if($this->view == 'keuangan')
                                                <div class="mb-3">
                                                    <div class="text-info">
                                                        Anggaran
                                                    </div>
                                                    <div class="text-info" style="font-weight: 500; font-size:25px">
                                                        Rp. {{ number_format($selectedProgram['anggaran'],0,'.','.') }}
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="text-success">
                                                        Realisasi
                                                    </div>
                                                    <div class="text-success" style="font-weight: 500; font-size:25px">
                                                        Rp. {{
                                                        number_format($selectedProgram['realisasi_anggaran'],0,'.','.')
                                                        }}
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="text-primary">
                                                        Persentase
                                                    </div>
                                                    <div class="text-primary" style="font-weight: 500; font-size:25px">
                                                        {{
                                                        number_format($selectedProgram['persentase_realisasi_anggaran'],2,'.','.')
                                                        }}
                                                        %
                                                    </div>
                                                </div>
                                                @elseif($this->view == 'kinerja')
                                                <div class="mb-3">
                                                    <div class="text-info">
                                                        Target
                                                    </div>
                                                    <div class="text-info" style="font-weight: 500; font-size:25px">
                                                        100 %
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="text-success">
                                                        Realisasi
                                                    </div>
                                                    <div class="text-success" style="font-weight: 500; font-size:25px">
                                                        {{
                                                        number_format($selectedProgram['persentase_realisasi_kinerja'],2,'.','.')
                                                        }} %
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-12 col-xl-8">
                                            <div style="width: 100%; height: 400px">
                                                @if($this->view == 'keuangan')
                                                <livewire:livewire-column-chart key="{{ $chartProgram->reactiveKey() }}"
                                                    :column-chart-model="$chartProgram" />
                                                @elseif($this->view == 'kinerja')
                                                <livewire:livewire-column-chart
                                                    key="{{ $chartProgramKinerja->reactiveKey() }}"
                                                    :column-chart-model="$chartProgramKinerja" />
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 {{ (!$selectedProgram) ? 'd-none' : 'col-xl-6' }}">
                            </div>
                            {{-- selected program end --}}
                            @endif

                        </div>

                        @if($selectedProgram)
                        <hr>
                        <h6 class="slim-card-title mb-3">
                            Daftar Kegiatan dari {{ $selectedProgram['name'] }}
                        </h6>

                        <div class="row">
                            @if(!$selectedKegiatan)
                            @foreach($this->dataProgram['kegiatans'] as $kgt)
                            <div class="col-12">
                                <div class="card mb-2 rounded" style="cursor: pointer"
                                    wire:click.prevent="_getDetailKegiatan({{ json_encode($kgt) }})">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center text-dark" style="font-weight: 500">
                                            <div class="mr-2">
                                                {{ $kgt['code'] }}
                                            </div>
                                            <div class="">
                                                {{ $kgt['name'] }}
                                            </div>
                                        </div>
                                        <div class="mt-2 d-flex align-items-center">
                                            @if($this->view == 'keuangan')
                                            <div class="mr-3" style="width:300px">
                                                <div class="text-info">
                                                    Anggaran
                                                </div>
                                                <div class="text-info" style="font-weight: 500">
                                                    Rp. {{ number_format($kgt['anggaran'],0,'.','.') }}
                                                </div>
                                            </div>
                                            <div class="mr-3" style="width:300px">
                                                <div class="text-success">
                                                    Realisasi
                                                </div>
                                                <div class="text-success" style="font-weight: 500">
                                                    Rp. {{ number_format($kgt['realisasi_anggaran'],0,'.','.') }}
                                                </div>
                                            </div>
                                            <div class="" style="width:300px">
                                                <div class="text-primary">
                                                    Persentase
                                                </div>
                                                <div class="text-primary" style="font-weight: 500">
                                                    {{ number_format($kgt['persentase_realisasi_anggaran'],2,'.','.') }}
                                                    %
                                                </div>
                                            </div>
                                            @elseif($this->view == 'kinerja')
                                            <div class="mr-3" style="width:300px">
                                                <div class="text-info">
                                                    Target
                                                </div>
                                                <div class="text-info" style="font-weight: 500">
                                                    100 %
                                                </div>
                                            </div>
                                            <div class="mr-3" style="width:300px">
                                                <div class="text-success">
                                                    Realisasi
                                                </div>
                                                <div class="text-success" style="font-weight: 500">
                                                    {{ number_format($kgt['persentase_realisasi_kinerja'],0,'.','.') }}
                                                    %
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif

                            @if($selectedKegiatan)
                            {{-- selected kegiatan Start --}}
                            <div class="col-12">
                                <div class="card mb-2 rounded" style="cursor: pointer">
                                    <div class="card-body row" style="position: relative;">
                                        <div class="" style="position: absolute; top:10px; right: 20px; z-index:100"
                                            wire:click.prevent="unsetKegiatan">
                                            <i class="fa fa-times-circle text-danger" style="font-size: 20px"></i>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex align-items-center text-dark" style="font-weight: 500">
                                                <div class="mr-2">
                                                    {{ $selectedKegiatan['code'] }}
                                                </div>
                                                <div class="">
                                                    {{ $selectedKegiatan['name'] }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <div class="mt-2 d-flex flex-column g-2">
                                                @if($this->view == 'keuangan')
                                                <div class="mb-3">
                                                    <div class="text-info">
                                                        Anggaran
                                                    </div>
                                                    <div class="text-info" style="font-weight: 500; font-size:25px">
                                                        Rp. {{ number_format($selectedKegiatan['anggaran'],0,'.','.') }}
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="text-success">
                                                        Realisasi
                                                    </div>
                                                    <div class="text-success" style="font-weight: 500; font-size:25px">
                                                        Rp. {{
                                                        number_format($selectedKegiatan['realisasi_anggaran'],0,'.','.')
                                                        }}
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="text-primary">
                                                        Persentase
                                                    </div>
                                                    <div class="text-primary" style="font-weight: 500; font-size:25px">
                                                        {{
                                                        number_format($selectedKegiatan['persentase_realisasi_anggaran'],2,'.','.')
                                                        }}
                                                        %
                                                    </div>
                                                </div>
                                                @elseif($this->view == 'kinerja')
                                                <div class="mb-3">
                                                    <div class="text-info">
                                                        Target
                                                    </div>
                                                    <div class="text-info" style="font-weight: 500; font-size:25px">
                                                        100 %
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="text-success">
                                                        Realisasi
                                                    </div>
                                                    <div class="text-success" style="font-weight: 500; font-size:25px">
                                                        {{
                                                        number_format($selectedKegiatan['persentase_realisasi_kinerja'],2,'.','.')
                                                        }} %
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-12 col-xl-8">
                                            <div style="width: 100%; height: 400px">
                                                @if($this->view == 'keuangan')
                                                <livewire:livewire-column-chart
                                                    key="{{ $chartKegiatan->reactiveKey() }}"
                                                    :column-chart-model="$chartKegiatan" />
                                                @elseif($this->view == 'kinerja')
                                                <livewire:livewire-column-chart
                                                    key="{{ $chartKegiatanKinerja->reactiveKey() }}"
                                                    :column-chart-model="$chartKegiatanKinerja" />
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 {{ (!$selectedKegiatan) ? 'd-none' : 'col-xl-6' }}">
                            </div>
                            {{-- selected kegiatan end --}}
                            @endif

                        </div>
                        @endif

                        @if($selectedKegiatan)
                        <hr>
                        <h6 class="slim-card-title mb-3">
                            Daftar Sub Kegiatan dari {{ $selectedKegiatan['name'] }}
                        </h6>

                        <div class="row">
                            @if(!$selectedSubKegiatan)
                            @foreach($this->dataKegiatan['sub_kegiatans'] as $skgt)
                            <div class="col-12">
                                <div class="card mb-2 rounded" style="cursor: pointer"
                                    wire:click.prevent="_getDetailSubKegiatan({{ json_encode($skgt) }})">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center text-dark" style="font-weight: 500">
                                            <div class="mr-2">
                                                {{ $skgt['code'] }}
                                            </div>
                                            <div class="">
                                                {{ $skgt['name'] }}
                                            </div>
                                        </div>
                                        <div class="mt-2 d-flex align-items-center">
                                            @if($this->view == 'keuangan')
                                            <div class="mr-3" style="width:300px">
                                                <div class="text-info">
                                                    Anggaran
                                                </div>
                                                <div class="text-info" style="font-weight: 500">
                                                    Rp. {{ number_format($skgt['anggaran'],0,'.','.') }}
                                                </div>
                                            </div>
                                            <div class="mr-3" style="width:300px">
                                                <div class="text-success">
                                                    Realisasi
                                                </div>
                                                <div class="text-success" style="font-weight: 500">
                                                    Rp. {{ number_format($skgt['realisasi_anggaran'],0,'.','.') }}
                                                </div>
                                            </div>
                                            <div class="" style="width:300px">
                                                <div class="text-primary">
                                                    Persentase
                                                </div>
                                                <div class="text-primary" style="font-weight: 500">
                                                    {{ number_format($skgt['persentase_realisasi_anggaran'],2,'.','.')
                                                    }}
                                                    %
                                                </div>
                                            </div>
                                            @elseif($this->view == 'kinerja')
                                            <div class="mr-3" style="width:300px">
                                                <div class="text-info">
                                                    Target
                                                </div>
                                                <div class="text-info" style="font-weight: 500">
                                                    100 %
                                                </div>
                                            </div>
                                            <div class="mr-3" style="width:300px">
                                                <div class="text-success">
                                                    Realisasi
                                                </div>
                                                <div class="text-success" style="font-weight: 500">
                                                    {{ number_format($skgt['persentase_realisasi_kinerja'],0,'.','.') }}
                                                    %
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif

                            @if($selectedSubKegiatan)
                            {{-- selected kegiatan Start --}}
                            <div class="col-12">
                                <div class="card mb-2 rounded" style="cursor: pointer">
                                    <div class="card-body row" style="position: relative;">
                                        <div class="" style="position: absolute; top:10px; right: 20px; z-index:100"
                                            wire:click.prevent="unsetSubKegiatan">
                                            <i class="fa fa-times-circle text-danger" style="font-size: 20px"></i>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex align-items-center text-dark" style="font-weight: 500">
                                                <div class="mr-2">
                                                    {{ $selectedSubKegiatan['code'] }}
                                                </div>
                                                <div class="">
                                                    {{ $selectedSubKegiatan['name'] }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <div class="mt-2 d-flex flex-column g-2">
                                                @if($this->view == 'keuangan')
                                                <div class="mb-3">
                                                    <div class="text-info">
                                                        Anggaran
                                                    </div>
                                                    <div class="text-info" style="font-weight: 500; font-size:25px">
                                                        Rp. {{ number_format($selectedSubKegiatan['anggaran'],0,'.','.')
                                                        }}
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="text-success">
                                                        Realisasi
                                                    </div>
                                                    <div class="text-success" style="font-weight: 500; font-size:25px">
                                                        Rp. {{
                                                        number_format($selectedSubKegiatan['realisasi_anggaran'],0,'.','.')
                                                        }}
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="text-primary">
                                                        Persentase
                                                    </div>
                                                    <div class="text-primary" style="font-weight: 500; font-size:25px">
                                                        {{
                                                        number_format($selectedSubKegiatan['persentase_realisasi_anggaran'],2,'.','.')
                                                        }}
                                                        %
                                                    </div>
                                                </div>
                                                @elseif($this->view == 'kinerja')
                                                <div class="mb-3">
                                                    <div class="text-info">
                                                        Target
                                                    </div>
                                                    <div class="text-info" style="font-weight: 500; font-size:25px">
                                                        100 %
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="text-success">
                                                        Realisasi
                                                    </div>
                                                    <div class="text-success" style="font-weight: 500; font-size:25px">
                                                        {{
                                                        number_format($selectedSubKegiatan['persentase_realisasi_kinerja'],2,'.','.')
                                                        }} %
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-12 col-xl-8">
                                            <div style="width: 100%; height: 400px">
                                                @if($this->view == 'keuangan')
                                                <livewire:livewire-column-chart
                                                    key="{{ $chartSubKegiatan->reactiveKey() }}"
                                                    :column-chart-model="$chartSubKegiatan" />
                                                @elseif($this->view == 'kinerja')
                                                <livewire:livewire-column-chart
                                                    key="{{ $chartSubKegiatanKinerja->reactiveKey() }}"
                                                    :column-chart-model="$chartSubKegiatanKinerja" />
                                                @endif
                                            </div>
                                        </div>

                                        @if(isset($this->dataSubKegiatan['rincian_realisasi']))
                                        <div class="col-12">
                                            <h6 class="slim-card-title mb-3">
                                                Eviden dari {{ $selectedSubKegiatan['name'] }}
                                            </h6>
                                            <div class="">
                                                <ul class="list-group">
                                                    @foreach($dataSubKegiatan['rincian_realisasi']['files'] as $file)
                                                    <li class="list-group-item">
                                                        <a href="{{ asset($file['file']) }}" target="_blank">
                                                            {{ $file['filename'] }}
                                                        </a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{-- selected kegiatan end --}}
                            @endif
                        </div>
                        @endif

                    </div>
                </div>
            </div>
            @else
            <div class="mt-4">
                <div class="card">
                    <div class="card-body">
                        <h6 class="slim-card-title mb-3">
                            <i class="fa fa-universal-access mr-2"></i>
                            Daftar Program {{ $instance->alias }}
                        </h6>
                        <div style="width: 100%; height: 400px">
                            @livewire('components.loading')
                        </div>
                    </div>
                </div>
            </div>
            @endif

        </div>
    </div>


</div>
