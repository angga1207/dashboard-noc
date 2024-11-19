<?php

namespace App\Livewire\PerekonomianPembangunan;

use Livewire\Component;
use Livewire\Attributes\Url;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Illuminate\Support\Facades\Cookie;

class Detail extends Component
{
    use LivewireAlert;
    public $cookieUser = [], $cookieSkpdBawahan = [];

    #[Url(null, true)]
    public $view = 'keuangan';

    public $periode = 1, $year;
    public $instance;
    public $selectedProgram = null, $selectedKegiatan = null, $selectedSubKegiatan = null;
    public $dataSicaram = [], $dataProgram = [], $dataKegiatan = [], $dataSubKegiatan = [];

    function mount($code)
    {
        if (!$code) {
            abort(404);
        }
        $this->cookieUser = collect(json_decode(Cookie::get('seu', true)));
        $this->cookieSkpdBawahan = collect(json_decode(Cookie::get('sesb', true)))->toArray();
        $this->instance = DB::table('ref_instance')
            ->whereIn('semesta_id', $this->cookieSkpdBawahan)
            ->where('nomenklatur_code', $code)
            ->first();
        if (!$this->instance) {
            $this->flash('error', 'Mohon Maaf!', [
                'text' => 'Halaman yang Anda Akses tidak dapat kami tampilkan!',
                'toast' => false,
                'position' => 'center',
            ], route('perekonomian-pembangunan'));
        }
        $this->year = date('Y');
    }

    public function render()
    {
        $chartKeuangan = LivewireCharts::multiColumnChartModel()
            ->setTitle('Realiasi Keuangan')
            ->setColors(['#7F27FF', '#72BF78'])
            ->setGridVisible(false)
            ->setAnimated(true);
        if (isset($this->dataSicaram['main_anggaran'])) {
            foreach ($this->dataSicaram['main_anggaran']['target'] as $key => $target) {
                $realisasi = $this->dataSicaram['main_anggaran']['realisasi'][$key];
                $chartKeuangan->addSeriesColumn('Anggaran', $target['month_name'], $target['target']);
                $chartKeuangan->addSeriesColumn('Realisasi', $realisasi['month_name'], $realisasi['realisasi']);
            }
        }

        $chartKinerja = LivewireCharts::multiColumnChartModel()
            ->setTitle('Realiasi Kinerja')
            ->setColors(['#7F27FF', '#72BF78'])
            ->setGridVisible(false)
            ->setAnimated(true);
        if (isset($this->dataSicaram['main_kinerja'])) {
            foreach ($this->dataSicaram['main_kinerja']['target'] as $key => $target) {
                $realisasi = $this->dataSicaram['main_kinerja']['realisasi'][$key];
                $chartKinerja->addSeriesColumn('Anggaran', $target['month_name'], $target['target']);
                $chartKinerja->addSeriesColumn('Realisasi', $realisasi['month_name'], number_format($realisasi['realisasi'], 2));
            }
        }

        // Chart Program Start
        $chartProgram = LivewireCharts::multiColumnChartModel()
            ->setTitle('Realiasi Keuangan Program')
            ->setColors(['#37AFE1', '#72BF78'])
            ->setGridVisible(false)
            ->setAnimated(true);
        if (isset($this->dataProgram['chart_keuangan'])) {
            foreach ($this->dataProgram['chart_keuangan']['target'] as $key => $target) {
                $realisasi = $this->dataProgram['chart_keuangan']['realisasi'][$key];
                $chartProgram->addSeriesColumn('Anggaran', $target['month_short'], $target['target']);
                $chartProgram->addSeriesColumn('Realisasi', $realisasi['month_short'], $realisasi['realisasi']);
            }
        }
        $chartProgramKinerja = LivewireCharts::multiColumnChartModel()
            ->setTitle('Realiasi Keuangan Program')
            ->setColors(['#37AFE1', '#72BF78'])
            ->setGridVisible(false)
            ->setAnimated(true);
        if (isset($this->dataProgram['chart_kinerja'])) {
            foreach ($this->dataProgram['chart_kinerja']['target'] as $key => $target) {
                $realisasi = $this->dataProgram['chart_kinerja']['realisasi'][$key];
                $chartProgramKinerja->addSeriesColumn('Anggaran', $target['month_short'], $target['target']);
                $chartProgramKinerja->addSeriesColumn('Realisasi', $realisasi['month_short'], number_format($realisasi['realisasi'], 2));
            }
        }
        // Chart Program End

        // Chart Kegiatan Start
        $chartKegiatan = LivewireCharts::multiColumnChartModel()
            ->setTitle('Realiasi Keuangan Kegiatan')
            ->setColors(['#4CC9FE', '#72BF78'])
            ->setGridVisible(false)
            ->setAnimated(true);
        if (isset($this->dataKegiatan['chart_keuangan'])) {
            foreach ($this->dataKegiatan['chart_keuangan']['target'] as $key => $target) {
                $realisasi = $this->dataKegiatan['chart_keuangan']['realisasi'][$key];
                $chartKegiatan->addSeriesColumn('Anggaran', $target['month_short'], $target['target']);
                $chartKegiatan->addSeriesColumn('Realisasi', $realisasi['month_short'], $realisasi['realisasi']);
            }
        }
        $chartKegiatanKinerja = LivewireCharts::multiColumnChartModel()
            ->setTitle('Realiasi Keuangan Kegiatan')
            ->setColors(['#4CC9FE', '#72BF78'])
            ->setGridVisible(false)
            ->setAnimated(true);
        if (isset($this->dataKegiatan['chart_kinerja'])) {
            foreach ($this->dataKegiatan['chart_kinerja']['target'] as $key => $target) {
                $realisasi = $this->dataKegiatan['chart_kinerja']['realisasi'][$key];
                $chartKegiatanKinerja->addSeriesColumn('Anggaran', $target['month_short'], $target['target']);
                $chartKegiatanKinerja->addSeriesColumn('Realisasi', $realisasi['month_short'], number_format($realisasi['realisasi'], 2));
            }
        }
        // Chart Kinerja End

        // Chart Sub Kegiatan Start
        $chartSubKegiatan = LivewireCharts::multiColumnChartModel()
            ->setTitle('Realiasi Keuangan SubKegiatan')
            ->setColors(['#006BFF', '#72BF78'])
            ->setAnimated(true);
        if (isset($this->dataSubKegiatan['chart_keuangan'])) {
            foreach ($this->dataSubKegiatan['chart_keuangan']['target'] as $key => $target) {
                $realisasi = $this->dataSubKegiatan['chart_keuangan']['realisasi'][$key];
                $chartSubKegiatan->addSeriesColumn('Anggaran', $target['month_short'], $target['target']);
                $chartSubKegiatan->addSeriesColumn('Realisasi', $realisasi['month_short'], $realisasi['realisasi']);
            }
        }
        $chartSubKegiatanKinerja = LivewireCharts::multiColumnChartModel()
            ->setTitle('Realiasi Keuangan SubKegiatan')
            ->setColors(['#006BFF', '#72BF78'])
            ->setAnimated(true);
        if (isset($this->dataSubKegiatan['chart_kinerja'])) {
            foreach ($this->dataSubKegiatan['chart_kinerja']['target'] as $key => $target) {
                $realisasi = $this->dataSubKegiatan['chart_kinerja']['realisasi'][$key];
                $chartSubKegiatanKinerja->addSeriesColumn('Anggaran', $target['month_short'], $target['target']);
                $chartSubKegiatanKinerja->addSeriesColumn('Realisasi', $realisasi['month_short'], number_format($realisasi['realisasi'], 2));
            }
        }
        // Chart Sub Kegiatan End

        return view('livewire.perekonomian-pembangunan.detail', [
            'chartKeuangan' => $chartKeuangan,
            'chartKinerja' => $chartKinerja,

            'chartProgram' => $chartProgram,
            'chartProgramKinerja' => $chartProgramKinerja,
            'chartKegiatan' => $chartKegiatan,
            'chartKegiatanKinerja' => $chartKegiatanKinerja,
            'chartSubKegiatan' => $chartSubKegiatan,
            'chartSubKegiatanKinerja' => $chartSubKegiatanKinerja,
        ]);
    }

    function _getDataSicaram()
    {
        $response = Http::get('https://sicaramapis.oganilirkab.go.id/api/local/dashboard/instance/' . $this->instance->sicaram_id, [
            'periode' => $this->periode,
            'year' => $this->year,
            'view' => 1,
        ]);

        $response = collect(json_decode($response, true));
        if ($response['status'] == 'success') {
            $this->dataSicaram = $response['data'];
            // dd($this->dataKeuangan);
        }
    }

    function _getDetailProgram($program)
    {
        $this->selectedProgram = $program;
        $response = Http::get('https://sicaramapis.oganilirkab.go.id/api/local/dashboard/instance/' . $this->instance->sicaram_id . '/detail/prg/' . $program['id'], [
            'periode' => $this->periode,
            'year' => $this->year,
            'view' => 1,
        ]);
        $response = collect(json_decode($response, true));
        if ($response['status'] == 'success') {
            $this->dataProgram = $response['data'];
            // dd($this->dataProgram);
        }
    }

    function unsetProgram()
    {
        $this->selectedProgram = null;
        $this->selectedKegiatan = null;
        $this->selectedSubKegiatan = null;
    }

    function _getDetailKegiatan($kegiatan)
    {
        $this->selectedKegiatan = $kegiatan;
        $response = Http::get('https://sicaramapis.oganilirkab.go.id/api/local/dashboard/instance/' . $this->instance->sicaram_id . '/detail/kgt/' . $kegiatan['id'], [
            'periode' => $this->periode,
            'year' => $this->year,
            'view' => 1,
        ]);
        $response = collect(json_decode($response, true));
        if ($response['status'] == 'success') {
            $this->dataKegiatan = $response['data'];
            // dd($this->dataKegiatan);
        }
    }

    function unsetKegiatan()
    {
        $this->selectedKegiatan = null;
        $this->selectedSubKegiatan = null;
    }

    function _getDetailSubKegiatan($SubKegiatan)
    {
        $this->selectedSubKegiatan = $SubKegiatan;
        $response = Http::get('https://sicaramapis.oganilirkab.go.id/api/local/dashboard/instance/' . $this->instance->sicaram_id . '/detail/skgt/' . $SubKegiatan['id'], [
            'periode' => $this->periode,
            'year' => $this->year,
            'view' => 1,
        ]);
        $response = collect(json_decode($response, true));
        if ($response['status'] == 'success') {
            $this->dataSubKegiatan = $response['data'];
            // dd($this->dataSubKegiatan);
        }
    }

    function unsetSubKegiatan()
    {
        $this->selectedSubKegiatan = null;
    }
}
