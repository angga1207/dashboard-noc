<?php

namespace App\Livewire\AdministrasiUmum;

use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Sidesi extends Component
{
    use LivewireAlert;
    public $cookieUser = [], $cookieSkpdBawahan = [];
    public $view = 1, $selectedInstanceId = null, $selectedYear = null, $dateStart = null, $dateEnd = null;

    public $arrPerangkatDaerah = [], $arrYears = [];
    public $kp_totalSeluruhASN = [], $kp_dataChart = [];
    public $pres_data = [], $pres_dataMonths = [], $pres_dataMasukPulang = [];
    public $lkh_dataTotal = [], $lkh_dataChart = [];
    public $sudes_data = [], $sudes_dataMonths = [];

    function mount()
    {
        $this->cookieUser = collect(json_decode(Cookie::get('seu', true)));
        $this->cookieSkpdBawahan = collect(json_decode(Cookie::get('sesb', true)))->toArray();
        // dd($this->cookieSkpdBawahan);
        $defaultInstanceId = $this->cookieUser['id_skpd'];
        $defaultInstanceId = DB::table('ref_instance')->where('sidesi_id', $defaultInstanceId)->first();
        if (!$defaultInstanceId) {
            $defaultInstanceId = null;
        } else {
            $defaultInstanceId = $defaultInstanceId->sidesi_id;
        }

        $this->selectedInstanceId = $defaultInstanceId;
        $this->selectedYear = Carbon::now()->format('Y');
        $this->dateStart = Carbon::now()->startOfYear()->format('Y-m-d');
        $this->dateEnd = Carbon::now()->endOfYear()->format('Y-m-d');

        $this->arrYears = range(2023, Carbon::now()->format('Y'));
    }

    public function render()
    {
        // Kondisi Pegawai Start
        $chartKondisiPegawai = LivewireCharts::columnChartModel()
            ->setTitle('Jumlah (ASN)')
            ->setAnimated(true)
            ->setLegendVisibility(false)
            ->setDataLabelsEnabled(true);
        if (isset($this->kp_dataChart['labels']) && isset($this->kp_dataChart['data'])) {
            foreach ($this->kp_dataChart['labels'] as $key => $label) {
                $data = $this->kp_dataChart['data'][$key];
                $randomColor = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);

                $chartKondisiPegawai->addColumn($label, $data, $randomColor);
            }
        }
        // Kondisi Pegawai End

        // Presensi Start
        $chartRekapPresensi1 = LivewireCharts::pieChartModel()
            ->setTitle('Rekap Presensi Per Desa/Kelurahan')
            ->asDonut()
            ->setAnimated(true)
            ->setLegendVisibility(true)
            ->setLegendPosition('right')
            ->setDataLabelsEnabled(true);
        if (isset($this->pres_data['labels']) && isset($this->pres_data['data'])) {
            $colors = [
                '#008ffb',
                '#00e396',
                '#feb019',
                '#ff4560',
                '#775dd0',
                '#3b3b98',
                '#f7b731',
                '#20c997',
                '#f5365c',
            ];
            foreach ($this->pres_data['labels'] as $key => $label) {
                $data = $this->pres_data['data'][$key];
                $data = is_int($data) ? $data : (int)$data;
                $chartRekapPresensi1->addSlice($label, $data, $colors[$key]);
            }
        }

        $chartRekapPresensi2 = LivewireCharts::lineChartModel()
            ->setTitle('Rekap Presensi Per Desa/Kelurahan')
            ->setAnimated(true)
            ->setLegendVisibility(false)
            ->setDataLabelsEnabled(true);
        if (isset($this->pres_dataMonths['labels']) && isset($this->pres_dataMonths['data'])) {
            $colors = [
                '#008ffb',
                '#00e396',
                '#feb019',
                '#ff4560',
                '#775dd0',
                '#3b3b98',
                '#f7b731',
                '#20c997',
                '#f5365c',
            ];
            foreach ($this->pres_dataMonths['labels'] as $key => $label) {
                $data = $this->pres_dataMonths['data'][$key];

                $chartRekapPresensi2->addPoint($label, $data, '#008ffb');
            }
        }

        $chartGrafikPresensi = LivewireCharts::multiLineChartModel()
            ->setTitle('Grafik Presensi Masuk dan Pulang')
            ->setAnimated(true)
            ->withLegend(true)
            ->setSmoothCurve();
        if (isset($this->pres_dataMasukPulang['labels']) && isset($this->pres_dataMasukPulang['data'])) {
            foreach ($this->pres_dataMasukPulang['labels'] as $key => $label) {
                $dataMasuk = $this->pres_dataMasukPulang['data'][0]['data'][$key];
                $dataPulang = $this->pres_dataMasukPulang['data'][1]['data'][$key];
                $chartGrafikPresensi->addSeriesPoint('Masuk', $label, $dataMasuk);
                $chartGrafikPresensi->addSeriesPoint('Pulang', $label, $dataPulang);
            }
        }
        // Presensi End

        // LKH Start
        $chartLKH = LivewireCharts::columnChartModel()
            ->setTitle('Total LKH')
            ->setAnimated(true)
            // ->setHorizontal()
            ->setColumnWidth('100px')
            ->setLegendVisibility(false)
            ->setDataLabelsEnabled(true);
        if (isset($this->lkh_dataChart['labels']) && isset($this->lkh_dataChart['data'])) {
            foreach ($this->lkh_dataChart['labels'] as $key => $label) {
                $data = $this->lkh_dataChart['data'][$key];
                $randomColor = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
                $chartLKH->addColumn($label, $data, $randomColor);
            }
        }
        // LKH End

        // Surat Desa Start
        $chartSuratDesa = LivewireCharts::multiLineChartModel()
            ->setTitle('Kondisi Tata Naskah Surat Sidesi')
            ->setAnimated(true)
            ->setLegendVisibility(false);
            // ->setDataLabelsEnabled(true);
        if (isset($this->sudes_dataMonths['labels']) && isset($this->sudes_dataMonths['data'])) {
            foreach ($this->sudes_dataMonths['labels'] as $key => $label) {
                $data = $this->sudes_dataMonths['data'][$key];
                $chartSuratDesa->addSeriesPoint('Surat', $label, $data);
            }
        }
        // Surat Desa End


        return view('livewire.administrasi-umum.sidesi', [
            'chartKondisiPegawai' => $chartKondisiPegawai,

            'chartRekapPresensi1' => $chartRekapPresensi1,
            'chartRekapPresensi2' => $chartRekapPresensi2,
            'chartGrafikPresensi' => $chartGrafikPresensi,

            'chartLKH' => $chartLKH,
            'chartSuratDesa' => $chartSuratDesa,
        ]);
    }

    function updated($field)
    {
        if ($field == 'view') {
            if ($this->view == 1) {
                $this->_getKondisiPegawai();
            }
            if ($this->view == 2) {
                $this->_getPresensi();
                $this->_getPresensiMasukPulang();
            }
            if ($this->view == 3) {
                $this->_getLKH();
            }
            if ($this->view == 4) {
                $this->_getSuratDesa();
            }
        }

        if ($this->view == 2) {
            if ($field == 'selectedInstanceId') {
                $this->_getPresensiMasukPulang();
            }

            if ($field == 'selectedYear') {
                $this->_getPresensiMasukPulang();
            }
        }
    }

    function _getListOPD()
    {
        $response = Http::withHeaders([
            'App-Key' => 'eofficedesa-OGANILIRBANGKIT',
        ])->get('https://sidesi.oganilirkab.go.id/api/v1/noc/get_skpd', []);

        $response = collect(json_decode($response, true));
        if ($response['statusCode'] == 200) {
            $this->arrPerangkatDaerah = $response['data'];
        }
    }

    function _getKondisiPegawai()
    {
        $response = Http::withHeaders([
            'App-Key' => 'eofficedesa-OGANILIRBANGKIT',
        ])->get('https://sidesi.oganilirkab.go.id/api/v1/noc/kondisi_umum/total_seluruh_pegawai', []);


        $response = collect(json_decode($response, true));
        if ($response['statusCode'] == 200) {
            $this->kp_totalSeluruhASN = $response['data'];
        }

        $response = Http::withHeaders([
            'App-Key' => 'eofficedesa-OGANILIRBANGKIT',
        ])->get('https://sidesi.oganilirkab.go.id/api/v1/noc/kondisi_umum/total_pegawai_per_kecamatan', []);

        $response = collect(json_decode($response, true));
        if ($response['statusCode'] == 200) {
            $this->kp_dataChart = $response['data'];
        }
    }

    function _getPresensi()
    {
        $year = Carbon::now()->format('Y');
        $response = Http::withHeaders([
            'App-Key' => 'eofficedesa-OGANILIRBANGKIT',
        ])->get('https://sidesi.oganilirkab.go.id/api/v1/noc/presensi/rekap_presensi_per_desa', []);

        $response = collect(json_decode($response, true));
        if ($response['statusCode'] == 200) {
            $this->pres_data = $response['data'];
        }

        $response = Http::withHeaders([
            'App-Key' => 'eofficedesa-OGANILIRBANGKIT',
        ])->get('https://sidesi.oganilirkab.go.id/api/v1/noc/presensi/rekap_presensi_per_desa_berdasarkan_bulan', [
            'year' => $year,
        ]);

        $response = collect(json_decode($response, true));
        if ($response['statusCode'] == 200) {
            $this->pres_dataMonths = $response['data'];
        }
    }

    function _getPresensiMasukPulang()
    {
        $year = $this->selectedYear ?? Carbon::now()->format('Y');
        if ($this->selectedInstanceId) {
            $response = Http::withHeaders([
                'App-Key' => 'eofficedesa-OGANILIRBANGKIT',
            ])->get('https://sidesi.oganilirkab.go.id/api/v1/noc/presensi/rekap_presensi_masuk_dan_pulang', [
                'id_skpd' => $this->selectedInstanceId,
                'year' => $year,
            ]);
        } else {
            $response = Http::withHeaders([
                'App-Key' => 'eofficedesa-OGANILIRBANGKIT',
            ])->get('https://sidesi.oganilirkab.go.id/api/v1/noc/presensi/rekap_presensi_masuk_dan_pulang', [
                'year' => $year,
            ]);
        }

        $response = collect(json_decode($response, true));
        if ($response['statusCode'] == 200) {
            $this->pres_dataMasukPulang = $response['data'];
            if ($this->selectedInstanceId) {
            }
        }
    }

    function _getLKH()
    {
        $response = Http::withHeaders([
            'App-Key' => 'eofficedesa-OGANILIRBANGKIT',
        ])->get('https://sidesi.oganilirkab.go.id/api/v1/noc/lkh/total_lkh', [
            'id_skpd' => $this->selectedInstanceId,
        ]);

        $response = collect(json_decode($response, true));
        if ($response['statusCode'] == 200) {
            $this->lkh_dataTotal = $response['data'];
        }

        // total_lkh_per_desa
        $response = Http::withHeaders([
            'App-Key' => 'eofficedesa-OGANILIRBANGKIT',
        ])->get('https://sidesi.oganilirkab.go.id/api/v1/noc/lkh/total_lkh_per_desa', [
            'start_date' => $this->dateStart,
            'end_date' => $this->dateEnd,
        ]);

        $response = collect(json_decode($response, true));
        if ($response['statusCode'] == 200) {
            $this->lkh_dataChart = $response['data'];
        }

        // dd($this->lkh_dataTotal, $this->lkh_dataChart);
    }

    function _getSuratDesa()
    {
        // /noc/surat_desa/total_surat_desa
        $response = Http::withHeaders([
            'App-Key' => 'eofficedesa-OGANILIRBANGKIT',
        ])->get('https://sidesi.oganilirkab.go.id/api/v1/noc/surat_desa/total_surat_desa', []);

        $response = collect(json_decode($response, true));
        if ($response['statusCode'] == 200) {
            $this->sudes_data = $response['data'];
        }

        // /noc/surat_desa/total_surat_desa_per_bulan
        $response = Http::withHeaders([
            'App-Key' => 'eofficedesa-OGANILIRBANGKIT',
        ])->get('https://sidesi.oganilirkab.go.id/api/v1/noc/surat_desa/total_surat_desa_per_bulan', [
            'year' => $this->selectedYear ?? Carbon::now()->format('Y'),
        ]);

        $response = collect(json_decode($response, true));
        if ($response['statusCode'] == 200) {
            $this->sudes_dataMonths = $response['data'];
        }

        // dd($this->sudes_data, $this->sudes_dataMonths);
    }
}
