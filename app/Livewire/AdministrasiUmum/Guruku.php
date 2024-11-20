<?php

namespace App\Livewire\AdministrasiUmum;

use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Guruku extends Component
{
    use LivewireAlert;
    public $cookieUser = [], $cookieSkpdBawahan = [];
    public $selectedInstanceId = null, $selectedYear = null, $selectedMonth = null, $dateStart = null, $dateEnd = null;

    public $arrWilayah = [], $arrSekolah = [];
    public $selectedWilayahId = null, $selectedSekolahId = null;

    public $totalAsn = [], $totalAsnGender = [];
    public $totalSertificated = [], $totalSertificatedPerWilayah = [];
    public $totalAsnUsia = [], $totalAsnGolonganPNS = [], $totalAsnGolonganPPPK = [];
    public $totalPresensi = [], $dataPresensiOPD = [], $dataPresensiOPD2 = [], $dataPresensiOPD3 = [], $dataLKH = [], $dataLKH2 = [];

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
        $this->selectedMonth = Carbon::now()->format('m');
        $this->dateStart = Carbon::now()->startOfYear()->format('Y-m-d');
        $this->dateEnd = Carbon::now()->endOfYear()->format('Y-m-d');

        // $this->arrYears = range(2023, Carbon::now()->format('Y'));


    }

    public function render()
    {
        $chartGenderPNS = LivewireCharts::pieChartModel()
            ->setTitle('Kondisi Guru PNS')
            ->setAnimated(true)
            ->asDonut()
            ->setLegendVisibility(true);
        if (isset($this->totalAsnGender['PNS'])) {
            $chartGenderPNS->addSlice('Laki-laki', $this->totalAsnGender['PNS']['Laki-laki'], '#008ffb');
            $chartGenderPNS->addSlice('Perempuan', $this->totalAsnGender['PNS']['Perempuan'], '#00e396');
        }

        $chartGenderPPPK = LivewireCharts::pieChartModel()
            ->setTitle('Kondisi Guru PPPK')
            ->setAnimated(true)
            ->asDonut()
            ->setLegendVisibility(true);
        if (isset($this->totalAsnGender['PPPK'])) {
            $chartGenderPPPK->addSlice('Laki-laki', $this->totalAsnGender['PPPK']['Laki-laki'], '#ff896a');
            $chartGenderPPPK->addSlice('Perempuan', $this->totalAsnGender['PPPK']['Perempuan'], '#b99bf7');
        }


        $chartAsnSertificatedWilayah = LivewireCharts::multiColumnChartModel()
            ->setTitle('Jumlah (ASN)')
            ->setAnimated(true)
            ->setColumnWidth(100)
            ->setDataLabelsEnabled(true)
            ->setGridVisible(true)
            ->setLegendVisibility(true);
        if (count($this->totalSertificatedPerWilayah) > 0) {
            foreach ($this->totalSertificatedPerWilayah as $key => $value) {
                $chartAsnSertificatedWilayah->addSeriesColumn('Sudah Sertifikasi', str()->replace('Satuan Pendidikan Wilayah Kecamatan', '', $value['nama_satuan_wilayah']), $value['sertifikat']);
                $chartAsnSertificatedWilayah->addSeriesColumn('Belum Sertifikasi', str()->replace('Satuan Pendidikan Wilayah Kecamatan', '', $value['nama_satuan_wilayah']), $value['non_sertifikat']);
            }
        }

        $chartRentangUsia = LivewireCharts::columnChartModel()
            ->setTitle('Rentang Usia Guru')
            ->setAnimated(true)
            ->setHorizontal()
            ->setGridVisible(true)
            ->setLegendVisibility(false);
        if (isset($this->totalAsnUsia['jumlah_pegawai'])) {
            $chartRentangUsia->addColumn('25-30', $this->totalAsnUsia['persentaseRentang1']['jumlah'], '#008ffb', [
                'borderRadius' => '5px 5px 5px 5px',
            ]);
            $chartRentangUsia->addColumn('31-35', $this->totalAsnUsia['persentaseRentang2']['jumlah'], '#008ffb');
            $chartRentangUsia->addColumn('36-40', $this->totalAsnUsia['persentaseRentang3']['jumlah'], '#008ffb');
            $chartRentangUsia->addColumn('41-45', $this->totalAsnUsia['persentaseRentang4']['jumlah'], '#008ffb');
            $chartRentangUsia->addColumn('41-50', $this->totalAsnUsia['persentaseRentang5']['jumlah'], '#008ffb');
            $chartRentangUsia->addColumn('51-55', $this->totalAsnUsia['persentaseRentang6']['jumlah'], '#008ffb');
            $chartRentangUsia->addColumn('56-60', $this->totalAsnUsia['persentaseRentang7']['jumlah'], '#008ffb');
        }

        $chartAsnGolonganPNS = LivewireCharts::pieChartModel()
            ->setTitle('Golongan Guru')
            ->setAnimated(true)
            ->asDonut()
            ->setLegendVisibility(true);
        if (isset($this->totalAsnGolonganPNS['datas'])) {
            foreach ($this->totalAsnGolonganPNS['datas'] as $key => $value) {
                $randomColors = '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
                $chartAsnGolonganPNS->addSlice($value['golongan'], $value['jumlah'], $randomColors);
            }
        }

        $chartAsnGolonganPPPK = LivewireCharts::pieChartModel()
            ->setTitle('Golongan Guru')
            ->setAnimated(true)
            ->asDonut()
            ->setLegendVisibility(true);
        if (isset($this->totalAsnGolonganPPPK['datas'])) {
            foreach ($this->totalAsnGolonganPPPK['datas'] as $key => $value) {
                $randomColors = '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
                $chartAsnGolonganPPPK->addSlice($value['golongan'], $value['jumlah'], $randomColors);
            }
        }

        $chartPresensiOPD = LivewireCharts::pieChartModel()
            ->setTitle('Rekap Presensi Per Sekolah')
            ->setAnimated(true)
            ->asDonut()
            ->setDataLabelsEnabled(true)
            ->setLegendPosition('right')
            ->setLegendVisibility(true);
        if (isset($this->dataPresensiOPD['presensi'])) {
            foreach ($this->dataPresensiOPD['presensi'] as $value) {
                $randomColors = '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
                $chartPresensiOPD->addSlice($value['label'], $value['value'], $randomColors);
            }
        }

        $chartPresensiOPD2 = LivewireCharts::lineChartModel()
            ->setTitle('Rekap Presensi Per Sekolah')
            ->setAnimated(true)
            // ->setDataLabelsEnabled(true)
            ->setLegendVisibility(true);
        if (isset($this->dataPresensiOPD2['absensi_per_bulan'])) {
            foreach ($this->dataPresensiOPD2['absensi_per_bulan'] as $value) {
                $chartPresensiOPD2->addPoint(Carbon::parse('2024-' . $value['bulan'] . '-01')->isoFormat('MMMM'), $value['total']);
            }
        }

        $chartPresensiOPD3 = LivewireCharts::multiLineChartModel()
            ->setTitle('Grafik Presensi Masuk Pulang')
            ->setAnimated(true)
            // ->setDataLabelsEnabled(true)
            ->setLegendVisibility(true);
        if (count($this->dataPresensiOPD3) > 0) {
            foreach ($this->dataPresensiOPD3 as $value) {
                // $chartPresensiOPD3->addPoint('Presensi Masuk', Carbon::parse('2024-' . $value['bulan'] . '-01')->isoFormat('MMMM'), $value['absen_masuk_count']);
                // $chartPresensiOPD3->addPoint('Presensi Pulang', Carbon::parse('2024-' . $value['bulan'] . '-01')->isoFormat('MMMM'), $value['absen_pulang_count']);
                $chartPresensiOPD3->addSeriesPoint('Presensi Masuk', Carbon::parse('2024-' . $value['bulan'] . '-01')->isoFormat('MMMM'), $value['absen_masuk_count']);
                $chartPresensiOPD3->addSeriesPoint('Presensi Pulang', Carbon::parse('2024-' . $value['bulan'] . '-01')->isoFormat('MMMM'), $value['absen_pulang_count']);
            }
        }

        $chartLKH = LivewireCharts::multiColumnChartModel()
            ->setTitle('Laporan Kinerja Harian')
            ->setAnimated(true)
            ->setColumnWidth(100)
            ->setDataLabelsEnabled(true)
            ->setGridVisible(true)
            ->setLegendVisibility(true);
        if (count($this->dataLKH2) > 0) {
            foreach ($this->dataLKH2 as $value) {
                $chartLKH->addSeriesColumn('Belum Diverifikasi', Carbon::parse($value['tahun'] . '-' . $value['bulan'] . '-01')->isoFormat('MMMM'), $value['belum_diverifikasi']);
                $chartLKH->addSeriesColumn('Sudah Diverifikasi', Carbon::parse($value['tahun'] . '-' . $value['bulan'] . '-01')->isoFormat('MMMM'), $value['sudah_diverifikasi']);
                $chartLKH->addSeriesColumn('Ditolak', Carbon::parse($value['tahun'] . '-' . $value['bulan'] . '-01')->isoFormat('MMMM'), $value['ditolak']);
            }
        }

        return view('livewire.administrasi-umum.guruku', [
            'chartGenderPNS' => $chartGenderPNS,
            'chartGenderPPPK' => $chartGenderPPPK,
            'chartAsnSertificatedWilayah' => $chartAsnSertificatedWilayah,
            'chartRentangUsia' => $chartRentangUsia,
            'chartAsnGolonganPNS' => $chartAsnGolonganPNS,
            'chartAsnGolonganPPPK' => $chartAsnGolonganPPPK,
            'chartPresensiOPD' => $chartPresensiOPD,
            'chartPresensiOPD2' => $chartPresensiOPD2,
            'chartPresensiOPD3' => $chartPresensiOPD3,
            'chartLKH' => $chartLKH,
        ]);
    }

    function updated($field)
    {
        if ($field == 'selectedWilayahId') {
            $this->dataPresensiOPD = [];
            $this->selectedSekolahId = null;
            $this->_getSekolah();
        }

        if ($field == 'selectedSekolahId') {
            $this->dataPresensiOPD = [];
            $this->_getChartPresensiOpd();
            $this->_getLKHSekolah();
        }
    }

    function _getWilayah()
    {
        // /ref/satuan-wilayah
        $response = Http::withHeaders([
            'X-API-Key' => 'noc-OI-2025',
        ])->get('https://guruku.oganilirkab.go.id/api/v1/ref/satuan-wilayah', [
            'sort' => 'nama_skpd',
        ]);

        $response = collect(json_decode($response, true));
        if ($response['success'] == true) {
            $this->arrWilayah = $response['data'];
        }
    }

    function _getSekolah()
    {
        // /ref/sekolah
        $response = Http::withHeaders([
            'X-API-Key' => 'noc-OI-2025',
        ])->get('https://guruku.oganilirkab.go.id/api/v1/ref/sekolah', [
            'filter[ref_skpd.id]' => $this->selectedWilayahId ?? null, // cek id di satuan wilayah (nullable)
            'filter[ref_unit_kerja.tipe_sekolah]' => null // tk, sd, smp (nullable)
        ]);

        $response = collect(json_decode($response, true));
        if ($response['success'] == true) {
            $this->arrSekolah = $response['data'];
        }
    }

    function _getTotalAsn()
    {
        // https://guruku.oganilirkab.go.id/api/v1/dashboard/statistik-jumlah-asn
        $response = Http::withHeaders([
            'X-API-Key' => 'noc-OI-2025',
        ])->get('https://guruku.oganilirkab.go.id/api/v1/dashboard/statistik-jumlah-asn', []);

        $response = collect(json_decode($response, true));
        if ($response['success'] == true) {
            $this->totalAsn = $response['data'];
        }

        // /dashboard/statistik-gender
        $response = Http::withHeaders([
            'X-API-Key' => 'noc-OI-2025',
        ])->get('https://guruku.oganilirkab.go.id/api/v1/dashboard/statistik-gender', []);

        $response = collect(json_decode($response, true));
        if ($response['success'] == true) {
            $this->totalAsnGender = $response['data'];
            // dd($this->totalAsnGender);
        }
    }

    function _getSertificated()
    {
        // /dashboard/statistik-guru-bersertifikat
        $response = Http::withHeaders([
            'X-API-Key' => 'noc-OI-2025',
        ])->get('https://guruku.oganilirkab.go.id/api/v1/dashboard/statistik-guru-bersertifikat', []);

        $response = collect(json_decode($response, true));
        if ($response['success'] == true) {
            $this->totalSertificated = $response['data'];
        }

        // /dashboard/sertifikasi-perwilayah
        $response = Http::withHeaders([
            'X-API-Key' => 'noc-OI-2025',
        ])->get('https://guruku.oganilirkab.go.id/api/v1/dashboard/sertifikasi-perwilayah', []);

        $response = collect(json_decode($response, true));
        if ($response['success'] == true) {
            $this->totalSertificatedPerWilayah = $response['data'];
        }
    }

    function _getData3()
    {
        // /dashboard/statistik-usia-guru
        $response = Http::withHeaders([
            'X-API-Key' => 'noc-OI-2025',
        ])->get('https://guruku.oganilirkab.go.id/api/v1/dashboard/statistik-usia-guru', []);

        $response = collect(json_decode($response, true));
        if ($response['success'] == true) {
            $this->totalAsnUsia = $response['data'];
        }

        // /dashboard/statistik-golongan-guru
        $response = Http::withHeaders([
            'X-API-Key' => 'noc-OI-2025',
        ])->get('https://guruku.oganilirkab.go.id/api/v1/dashboard/statistik-golongan-guru', [
            'jenis' => 'PNS',
        ]);

        $response = collect(json_decode($response, true));
        if ($response['success'] == true) {
            $this->totalAsnGolonganPNS = $response['data'];
        }

        // /dashboard/statistik-golongan-guru
        $response = Http::withHeaders([
            'X-API-Key' => 'noc-OI-2025',
        ])->get('https://guruku.oganilirkab.go.id/api/v1/dashboard/statistik-golongan-guru', [
            'jenis' => 'PPPK',
        ]);

        $response = collect(json_decode($response, true));
        if ($response['success'] == true) {
            $this->totalAsnGolonganPPPK = $response['data'];
        }
    }

    function _getPresensiTotal()
    {
        // /dashboard/dashboard1
        $response = Http::withHeaders([
            'X-API-Key' => 'noc-OI-2025',
        ])->get('https://guruku.oganilirkab.go.id/api/v1/dashboard/dashboard1', [
            'bulan' => $this->selectedMonth,
            'tahun' => $this->selectedYear,
        ]);

        $response = collect(json_decode($response, true));
        if ($response['success'] == true) {
            $this->totalPresensi = $response['data'];
        }
    }

    function _getChartPresensiOpd()
    {
        // /dashboard/rekap-presensi-per-opd
        $response = Http::withHeaders([
            'X-API-Key' => 'noc-OI-2025',
        ])->get('https://guruku.oganilirkab.go.id/api/v1/dashboard/rekap-presensi-per-opd', [
            'satuan_wilayah_id' => $this->selectedWilayahId,
            'sekolah_id' => $this->selectedSekolahId,
            'bulan' => $this->selectedMonth,
            'tahun' => $this->selectedYear,
        ]);

        $response = collect(json_decode($response, true));
        if ($response['success'] == true) {
            $this->dataPresensiOPD = $response['data'];
            // dd($this->dataPresensiOPD);
        }

        // dashboard/rekap-presensi-per-opd-chart
        $response = Http::withHeaders([
            'X-API-Key' => 'noc-OI-2025',
        ])->get('https://guruku.oganilirkab.go.id/api/v1/dashboard/rekap-presensi-per-opd-chart', [
            'satuan_wilayah_id' => $this->selectedWilayahId,
            'sekolah_id' => $this->selectedSekolahId,
            'tahun' => $this->selectedYear,
        ]);

        $response = collect(json_decode($response, true));
        if ($response['success'] == true) {
            $this->dataPresensiOPD2 = $response['dataRekapPresensi'];
            $this->dataPresensiOPD3 = $response['dataGrafikPresensiMasukDanPulang'];
            // dd($this->dataPresensiOPD2, $this->dataPresensiOPD3);
        }
    }

    function _getLKHSekolah()
    {
        // /dashboard/lkh-sekolah
        $response = Http::withHeaders([
            'X-API-Key' => 'noc-OI-2025',
        ])->get('https://guruku.oganilirkab.go.id/api/v1/dashboard/lkh-sekolah', [
            'satuan_wilayah_id' => $this->selectedWilayahId,
            'sekolah_id' => $this->selectedSekolahId,
            'bulan' => $this->selectedMonth,
            'tahun' => $this->selectedYear,
        ]);

        $response = collect(json_decode($response, true));
        if ($response['success'] == true) {
            $this->dataLKH = $response['data'];
        }

        // /dashboard/lkh-sekolah-chart
        $response = Http::withHeaders([
            'X-API-Key' => 'noc-OI-2025',
        ])->get('https://guruku.oganilirkab.go.id/api/v1/dashboard/lkh-sekolah-chart', [
            'satuan_wilayah_id' => $this->selectedWilayahId,
            'sekolah_id' => $this->selectedSekolahId,
            'bulan' => $this->selectedMonth,
            'tahun' => $this->selectedYear,
        ]);

        $response = collect(json_decode($response, true));
        if ($response['success'] == true) {
            $this->dataLKH2 = $response['datas'];
        }
    }
}
