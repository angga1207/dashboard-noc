<?php

namespace App\Livewire\AdministrasiUmum;

use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Sinona extends Component
{
    use LivewireAlert;
    public $cookieUser = [], $cookieSkpdBawahan = [];

    public $selectedInstanceId = null, $dateStart = null, $dateEnd = null;
    public $selectedInstance = null;
    public $mainData = [], $dataAbsenLog = [];

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
            // $defaultInstanceId = $defaultInstanceId->sinona_id;
        }

        $this->selectedInstanceId = $defaultInstanceId;
        $this->dateStart = Carbon::now()->startOfYear()->format('Y-m-d');
        $this->dateEnd = Carbon::now()->endOfYear()->format('Y-m-d');
    }

    public function render()
    {
        $arrInstances = DB::table('ref_instance')
            ->whereIn('semesta_id', $this->cookieSkpdBawahan)
            ->where('sinona_id', '!=', '0')
            ->get();

        $chartStatistikKabupaten = LivewireCharts::pieChartModel()
            ->asDonut()
            ->setAnimated(true)
            ->withLegend(false);
        if (isset($this->mainData['seluruh_pd'])) {
            $chartStatistikKabupaten->addSlice('Laki-laki', $this->mainData['seluruh_pd']['jumlah_laki_laki'], '#008ffb');
            $chartStatistikKabupaten->addSlice('Perempuan', $this->mainData['seluruh_pd']['jumlah_perempuan'], '#00e396');
        }

        $chartStatsitikOPD = LivewireCharts::pieChartModel()
            ->asDonut()
            ->setAnimated(true)
            ->setLegendVisibility(false)
            ->setLegendPosition('right');
        if (isset($this->mainData['per_skpd'])) {
            foreach ($this->mainData['per_skpd'] as $data) {
                $randomColor = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
                $chartStatsitikOPD->addSlice($data['nama_skpd'], $data['total_pegawai'], $randomColor);
            }
        }

        $chartPendidikan = LivewireCharts::columnChartModel()
            // ->setTitle('Statistik Pendidikan')
            ->setAnimated(true)
            ->withLegend(false);
        if (isset($this->mainData['seluruh_pd']['pendidikan'])) {
            $data = $this->mainData['seluruh_pd']['pendidikan'];
            $chartPendidikan->addColumn('SMP', $data['jumlah_smp'], '#3D5300');
            $chartPendidikan->addColumn('SMA', $data['jumlah_sma'], '#003161');
            $chartPendidikan->addColumn('D1', $data['jumlah_d1'], '#CB9DF0');
            $chartPendidikan->addColumn('D2', $data['jumlah_d2'], '#f53f85');
            $chartPendidikan->addColumn('D3', $data['jumlah_d3'], '#37AFE1');
            $chartPendidikan->addColumn('D4', $data['jumlah_d4'], '#133E87');
            $chartPendidikan->addColumn('S1', $data['jumlah_s1'], '#88C273');
            $chartPendidikan->addColumn('S2', $data['jumlah_s2'], '#008ffb');
        }

        $chartLine = LivewireCharts::multiLineChartModel()
            ->setTitle('Grafik Presensi Masuk dan Pulang')
            ->setAnimated(true)
            ->withLegend(true)
            ->setSmoothCurve();
        if (count($this->dataAbsenLog) > 0) {
            foreach ($this->dataAbsenLog as $data) {
                $chartLine->addSeriesPoint('Masuk', $data['bulan'], $data['total_masuk']);
                $chartLine->addSeriesPoint('Pulang', $data['bulan'], $data['total_pulang']);
            }
        }

        return view('livewire.administrasi-umum.sinona', [
            'arrInstances' => $arrInstances,

            'chartStatistikKabupaten' => $chartStatistikKabupaten,
            'chartStatsitikOPD' => $chartStatsitikOPD,
            'chartPendidikan' => $chartPendidikan,
            'chartLine' => $chartLine,
        ]);
    }

    function updated($field)
    {
        if ($field == 'selectedInstanceId') {
            if ($this->selectedInstanceId) {
                $this->selectedInstance = DB::table('ref_instance')
                    ->where('sinona_id', $this->selectedInstanceId)
                    ->first();
            } else {
                $this->selectedInstance = null;
            }
            $this->_getData();
            $this->_getDataAbsen();
        }

        if ($field == 'dateStart' || $field == 'dateEnd') {
            $this->_getDataAbsen();
        }
    }

    function _getData()
    {
        // https://sinona.oganilirkab.go.id/api/public/statistik-pegawai
        if ($this->selectedInstanceId) {
            $response = Http::get('https://sinona.oganilirkab.go.id/api/public/statistik-pegawai', [
                'skpd_id' => $this->selectedInstanceId,
            ]);
        } else {
            $response = Http::get('https://sinona.oganilirkab.go.id/api/public/statistik-pegawai', []);
        }

        $response = collect(json_decode($response, true));
        if ($response['success'] == 'true') {
            $this->mainData = $response['data'];
            // dd($response['data']);
            // dd($this->dataKeuangan);
        }
    }

    function _getDataAbsen()
    {
        // https://sinona.oganilirkab.go.id/api/public/absen-log
        if ($this->selectedInstanceId) {
            $response = Http::get('https://sinona.oganilirkab.go.id/api/public/absen-log', [
                'skpd_id' => $this->selectedInstanceId,
                'tanggal_awal' => $this->dateStart,
                'tanggal_akhir' => $this->dateEnd,
            ]);
        } else {
            $response = Http::get('https://sinona.oganilirkab.go.id/api/public/absen-log', [
                'tanggal_awal' => $this->dateStart,
                'tanggal_akhir' => $this->dateEnd,
            ]);
        }

        $response = collect(json_decode($response, true));
        if ($response['success'] == 'true') {
            $this->dataAbsenLog = $response['data'];
            // dd($response['data']);
            // dd($this->dataKeuangan);
        }
    }
}
