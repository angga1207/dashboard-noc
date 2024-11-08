<?php

namespace App\Livewire\AdministrasiUmum;

use Carbon\Carbon;
use Livewire\Component;
use Carbon\CarbonPeriod;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Index extends Component
{
    use LivewireAlert;
    public $cookieUser = [], $cookieSkpdBawahan = [];
    // public $day, $month, $year;
    public $dateStartAbsensi = null, $dateEndAbsensi = null, $instanceIdAbsensi = null;
    public $dateStartLKH = null, $dateEndLKH = null, $instanceIdLKH = null;
    public $monthTPP = null, $yearTPP = null, $instanceIdTPP = null;
    public $dateStartSurat = null, $dateEndSurat = null, $instanceIdSurat = null;
    public $instanceId, $instanceIds = [];

    public $dataTotal = [], $dataGrafikAbsensi = [], $dataLKH = [], $dataTPP = [], $dataSurat = [];

    function mount()
    {
        $this->cookieUser = collect(json_decode(Cookie::get('seu', true)));
        $this->cookieSkpdBawahan = collect(json_decode(Cookie::get('sesb', true)));
        $defaultInstanceId = $this->cookieUser['id_skpd'];
        $defaultInstanceId = DB::table('ref_instance')->where('semesta_id', $defaultInstanceId)->first();
        if (!$defaultInstanceId) {
            $defaultInstanceId = 1;
        } else {
            $defaultInstanceId = $defaultInstanceId->semesta_id;
        }

        //
        // $dateStart = Carbon::parse(now())->subDays(7)->format('Y-m-d');
        // $dateEnd = Carbon::parse(now())->format('Y-m-d');
        $dateStart = Carbon::parse(now())->startOfMonth()->format('Y-m-d');
        $dateEnd = Carbon::parse(now())->endOfMonth()->format('Y-m-d');
        $this->dateStartAbsensi = $dateStart;
        $this->dateEndAbsensi = $dateEnd;

        $this->dateStartLKH = $dateStart;
        $this->dateEndLKH = $dateEnd;

        $this->dateStartSurat = $dateStart;
        $this->dateEndSurat = $dateEnd;

        // $this->day = date('d');
        $this->monthTPP = date('m');
        $this->yearTPP = date('Y');

        //
        $this->instanceId = $defaultInstanceId;
        $this->instanceIdAbsensi = $defaultInstanceId;
        $this->instanceIdLKH = $defaultInstanceId;
        $this->instanceIdTPP = $defaultInstanceId;
        $this->instanceIdSurat = $defaultInstanceId;

        $this->instanceIds = collect($defaultInstanceId);
    }


    public function render()
    {
        $arrInstances = DB::table('ref_instance')
            ->whereIn('semesta_id', $this->cookieSkpdBawahan)
            ->get();

        //
        $chartDataRekapPresensi = LivewireCharts::pieChartModel()
            ->setTitle('Rekap Presensi Per OPD')
            ->setAnimated(true);
        if (isset($this->dataTotal['presensi'])) {
            $dataRekapPresensi = $this->dataTotal['presensi'];
            $chartDataRekapPresensi->addSlice('Hadir', (int)($dataRekapPresensi['hadir'] ?? 0), '#0D7C66');
            $chartDataRekapPresensi->addSlice('Dinas Luar', $dataRekapPresensi['dl'] ?? 0, '#789DBC');
            $chartDataRekapPresensi->addSlice('Kegiatan Luar', $dataRekapPresensi['kl'] ?? 0, '#FDDBBB');
            $chartDataRekapPresensi->addSlice('TAP', $dataRekapPresensi['tap'] ?? 0, '#FFE3E3');
            $chartDataRekapPresensi->addSlice('Sakit', $dataRekapPresensi['sakit'] ?? 0, '#FFF9BF');
            $chartDataRekapPresensi->addSlice('Izin', $dataRekapPresensi['izin'] ?? 0, '#CB9DF0');
            $chartDataRekapPresensi->addSlice('Tanpa Keterangan', $dataRekapPresensi['tanpa_keterangan'] ?? 0, '#D91656');
        }

        //
        $chartPresensiMasukPulang = LivewireCharts::multiLineChartModel()
            ->setTitle('Grafik Presensi Masuk & Pulang')
            ->setAnimated(true);

        if (isset($this->dataGrafikAbsensi['tanggal'])) {
            $datas = $this->dataGrafikAbsensi;
            $arrTanggal = $this->dataGrafikAbsensi['tanggal'];
            foreach ($arrTanggal as $key => $tgl) {
                $chartPresensiMasukPulang->addSeriesPoint('Masuk', Carbon::parse($tgl)->isoFormat('DD MMM YY'), $datas['jumlah_absen_masuk_opd'][$key]);
                $chartPresensiMasukPulang->addSeriesPoint('Pulang', Carbon::parse($tgl)->isoFormat('DD MMM YY'), $datas['jumlah_absen_pulang_opd'][$key]);
            }
        }

        //
        $chartStatistikLKH = LivewireCharts::multiColumnChartModel()
            ->setTitle('Capaian LKH')
            ->setAnimated(true);
        if (isset($this->dataLKH['label']['data'])) {
            foreach ($this->dataLKH['label']['data'] as $dat) {
                $chartStatistikLKH->addSeriesColumn('Rata-rata LKH Pegawai / Perangkat Daerah', $dat['nama_skpd'],  $dat['total_lkh_dibuat']);
                // $chartStatistikLKH->addSeriesColumn('Total LKH Diverifikasi', $dat['nama_skpd'],  $dat['total_lkh_diverifikasi']);
                // $chartStatistikLKH->addSeriesColumn('Total LKH Belum Diverifikasi', $dat['nama_skpd'],  $dat['total_lkh_belum_diverifikasi']);
                // $chartStatistikLKH->addSeriesColumn('Total LKH Ditolak', $dat['nama_skpd'],  $dat['total_lkh_ditolak']);
            }
        }

        //
        $chartStatistikTPP = LivewireCharts::lineChartModel()
            ->setTitle('Realisasi Pagu TPP')
            ->setAnimated(true);
        if (isset($this->dataTPP['grafik'])) {
            foreach ($this->dataTPP['grafik'] as $grf) {
                // $chartStatistikTPP->addPoint($grf['id_skpd'], $grf['total_pagu_asli']);
                $chartStatistikTPP->addPoint(Carbon::parse($this->yearTPP . '-' . $this->monthTPP . '-01')->isoFormat('DD MMMM YYYY'), $grf['total_pagu_asli']);
            }
        }

        //
        $chartChartNaskahSurat = LivewireCharts::multiLineChartModel()
            ->setTitle('Kondisi Tata Naskah Surat Semesta')
            ->setAnimated(true);
        if (isset($this->dataSurat['naskah_masuk_linechart']) && isset($this->dataSurat['naskah_keluar_linechart'])) {
            $months = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
            foreach ($months as $key => $month) {
                $chartChartNaskahSurat->addSeriesPoint('Surat Masuk', Carbon::parse('2024-' . $month . '-01')->isoFormat('MMMM'), $this->dataSurat['naskah_masuk_linechart'][$key]);
                $chartChartNaskahSurat->addSeriesPoint('Surat Keluar', Carbon::parse('2024-' . $month . '-01')->isoFormat('MMMM'), $this->dataSurat['naskah_keluar_linechart'][$key]);
            }
        } else {
            $chartChartNaskahSurat->addSeriesPoint('Surat Masuk', '0', 1);
            $chartChartNaskahSurat->addSeriesPoint('Surat Keluar', '0', 1);
        }


        return view('livewire.administrasi-umum.index', [
            'arrInstances' => $arrInstances,

            'chartDataRekapPresensi' => $chartDataRekapPresensi,
            'chartPresensiMasukPulang' => $chartPresensiMasukPulang,
            'chartStatistikLKH' => $chartStatistikLKH,
            'chartStatistikTPP' => $chartStatistikTPP,
            'chartChartNaskahSurat' => $chartChartNaskahSurat,
        ]);
    }

    function updated($field)
    {
        // Absensi
        if ($field == 'instanceIdAbsensi') {
            $this->_getTotal();
        }
        if ($field == 'dateStartAbsensi' || $field == 'dateEndAbsensi' || $field == 'instanceIdAbsensi') {
            $this->_getGrafikAbsensi();
        }

        // LKH
        if ($field == 'dateStartLKH' || $field == 'dateEndLKH' || $field == 'instanceIdLKH') {
            $this->_getDataLKH();
        }

        // TPP
        if ($field == 'yearTPP' || $field == 'monthTPP' || $field == 'instanceIdTPP') {
            $this->_getDataTPP();
        }

        // Surat
        if ($field == 'dateStartSurat' || $field == 'dateEndSurat' || $field == 'instanceIdSurat') {
            $this->_getDataSurat();
        }
    }

    function _getTotal()
    {
        $dateNow = date('Y-m-d');
        $response = Http::post('https://semesta.oganilirkab.go.id/api/administrasi-umum', [
            'id_skpd' => is_array($this->instanceIdAbsensi) ? $this->instanceIdAbsensi : collect($this->instanceIdAbsensi), // multiple
            'tanggal' => $dateNow,
        ]);

        $response = collect(json_decode($response, true));
        if ($response['message'] == 'success') {
            $this->dataTotal = $response['data'];
        }
    }

    function _getGrafikAbsensi()
    {
        $response = Http::post('https://semesta.oganilirkab.go.id/api/administrasi-umum-grafik-absensi', [
            'id_skpd' => is_array($this->instanceIdAbsensi) ? $this->instanceIdAbsensi : collect($this->instanceIdAbsensi), // multiple
            'tanggal_awal' => $this->dateStartAbsensi,
            'tanggal_akhir' => $this->dateEndAbsensi,
        ]);

        $response = collect(json_decode($response, true));
        if ($response['message'] == 'success') {
            $this->dataGrafikAbsensi = $response['data'];
        }
    }

    function _getDataLKH()
    {
        $response = Http::post('https://semesta.oganilirkab.go.id/api/statistik-lkh', [
            'id_skpd' => is_array($this->instanceIdLKH) ? $this->instanceIdLKH : collect($this->instanceIdLKH), // multiple
            'tanggal_awal' => $this->dateStartLKH,
            'tanggal_akhir' => $this->dateEndLKH,
        ]);

        $response = collect(json_decode($response, true));
        if ($response['code'] == '200') {
            $this->dataLKH = $response['data'];
        }
    }

    function _getDataTPP()
    {
        $response = Http::post('https://semesta.oganilirkab.go.id/api/statistik-tpp', [
            'id_skpd' => $this->instanceIdTPP,
            'tahun' => $this->yearTPP,
            'bulan' => $this->monthTPP,
        ]);

        $response = collect(json_decode($response, true));
        if ($response['code'] == '200') {
            $this->dataTPP = $response['data'];
        }
    }

    function _getDataSurat()
    {
        $this->dataSurat = [];
        $response = Http::post('https://semesta.oganilirkab.go.id/api/statistik-surat', [
            'id_skpd' => $this->instanceIdSurat,
            'tanggal_awal' => $this->dateStartSurat,
            'tanggal_akhir' => $this->dateEndSurat,
        ]);

        $response = collect(json_decode($response, true));
        if ($response['code'] == '200') {
            $this->dataSurat = $response['data'];
        }
    }
}
