<?php

namespace App\Livewire\PerekonomianPembangunan;

use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Index extends Component
{
    use LivewireAlert;
    public $cookieUser = [], $cookieSkpdBawahan = [];

    public $periode = 1, $year;
    public $instanceIdKeuangan, $dataKeuangan = [];
    public $instanceIdKinerja, $dataKinerja = [];
    public $dataRank = [];

    function mount()
    {
        $this->cookieUser = collect(json_decode(Cookie::get('seu', true)));
        $this->cookieSkpdBawahan = collect(json_decode(Cookie::get('sesb', true)))->toArray();
        // dd($this->cookieSkpdBawahan);
        $defaultInstanceId = $this->cookieUser['id_skpd'];
        $defaultInstanceId = DB::table('ref_instance')->where('semesta_id', $defaultInstanceId)->first();
        if (!$defaultInstanceId) {
            $defaultInstanceId = null;
        } else {
            $defaultInstanceId = $defaultInstanceId->sicaram_id;
        }

        $this->instanceIdKeuangan = $defaultInstanceId;
        $this->instanceIdKinerja = $defaultInstanceId;

        $this->year = date('Y');
    }

    public function render()
    {
        $arrInstances = DB::table('ref_instance')
            ->whereIn('semesta_id', $this->cookieSkpdBawahan)
            ->get();
        $selectedInstanceKeuangan = null;
        if ($this->instanceIdKeuangan) {
            $selectedInstanceKeuangan = DB::table('ref_instance')
                ->where('sicaram_id', $this->instanceIdKeuangan)
                ->first();
        }
        $selectedInstanceKinerja = null;
        if ($this->instanceIdKinerja) {
            $selectedInstanceKinerja = DB::table('ref_instance')
                ->where('sicaram_id', $this->instanceIdKinerja)
                ->first();
        }

        $chartKeuangan = LivewireCharts::multiColumnChartModel()
            ->setAnimated(true);
        if (isset($this->dataKeuangan['target']) && isset($this->dataKeuangan['realisasi'])) {
            foreach ($this->dataKeuangan['target'] as $key => $target) {
                $chartKeuangan->addSeriesColumn('Anggaran', $target['month_name'], $target['target']);
                $chartKeuangan->addSeriesColumn('Realisasi', $this->dataKeuangan['realisasi'][$key]['month_name'], $this->dataKeuangan['realisasi'][$key]['realisasi']);
            }
        }

        $chartKinerja = LivewireCharts::multiColumnChartModel()
            ->setAnimated(true);
        if (isset($this->dataKinerja['target']) && isset($this->dataKinerja['realisasi'])) {
            foreach ($this->dataKinerja['target'] as $key => $target) {
                $chartKinerja->addSeriesColumn('Target', $target['month_name'], $target['target'], [
                    'isAboveThreshold' => true,
                ]);
                $chartKinerja->addSeriesColumn('Realisasi', $this->dataKinerja['realisasi'][$key]['month_name'], number_format($this->dataKinerja['realisasi'][$key]['realisasi'], 2));
            }
        }

        return view('livewire.perekonomian-pembangunan.index', [
            'arrInstances' => $arrInstances,
            'selectedInstanceKeuangan' => $selectedInstanceKeuangan,
            'selectedInstanceKinerja' => $selectedInstanceKinerja,

            'chartKeuangan' => $chartKeuangan,
            'chartKinerja' => $chartKinerja,
        ]);
    }

    function updated($field)
    {
        if ($field == 'instanceIdKeuangan') {
            $this->_getDataRealisasiKeuangan();
        }
        if ($field == 'instanceIdKinerja') {
            $this->_getDataRealisasiKinerja();
        }
    }

    function _getDataRealisasiKeuangan()
    {
        $response = Http::get('http://127.0.0.1:8000/api/local/dashboard/chart-realisasi', [
            'periode' => $this->periode,
            'year' => $this->year,
            'view' => 1,
            'instances' => $this->instanceIdKeuangan, // multiple
        ]);

        $response = collect(json_decode($response, true));
        if ($response['status'] == 'success') {
            $this->dataKeuangan = $response['data'];
            // dd($this->dataKeuangan);
        }
    }

    function _getDataRealisasiKinerja()
    {
        $response = Http::get('http://127.0.0.1:8000/api/local/dashboard/chart-kinerja', [
            'periode' => $this->periode,
            'year' => $this->year,
            'view' => 1,
            'instances' => $this->instanceIdKinerja, // multiple
        ]);

        $response = collect(json_decode($response, true));
        if ($response['status'] == 'success') {
            $this->dataKinerja = $response['data'];
            // dd($this->dataKinerja);
        }
    }

    function _getDataRank()
    {
        $response = Http::get('http://127.0.0.1:8000/api/local/dashboard/rank-instance', [
            'periode' => $this->periode,
            'year' => $this->year,
            // 'instances' => $this->instanceIdKinerja, // multiple
        ]);

        $response = collect(json_decode($response, true));
        if ($response['status'] == 'success') {
            $this->dataRank = $response['data'];
            // dd($this->dataRank);
        }
    }
}
