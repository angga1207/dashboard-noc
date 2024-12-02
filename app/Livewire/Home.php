<?php

namespace App\Livewire;

use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;

class Home extends Component
{
    // public $day, $month, $year;
    public $dateStart = null, $dateEnd = null;
    public $cookieUser = [], $cookieSkpdBawahan = [];
    public $dataSuratSemesta = [], $dataSuratMasuk = [], $dataSuratKeluar = [];
    public $selectedMonth = null, $selectedYear = null, $selectedStatus = null, $selectedStatusSuratKeluar = null;

    public $arrMonths = [], $arrYears = [], $arrStatus = [], $arrStatusSuratKeluar = [];

    public $dateAgenda = null, $dataAgenda = [], $detailAgenda = [];
    public $dataPegawaiASN = [];

    function mount()
    {
        $this->cookieUser = collect(json_decode(Cookie::get('seu', true)));
        $this->cookieSkpdBawahan = collect(json_decode(Cookie::get('sesb', true)));

        $this->dateStart = Carbon::parse(now())->subDays(7)->format('Y-m-d');
        $this->dateEnd = Carbon::parse(now())->format('Y-m-d');

        // $this->day = date('d');
        // $this->month = date('m');
        // $this->year = date('Y');

        $this->arrMonths = [
            '01' => 'Januari',
            '02' => 'Februari',
            '03' => 'Maret',
            '04' => 'April',
            '05' => 'Mei',
            '06' => 'Juni',
            '07' => 'Juli',
            '08' => 'Agustus',
            '09' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember',
        ];
        $this->arrYears = (range(2021, date('Y')));
        $this->arrStatus = [
            '' => 'Semua Status',
            0 => 'Belum Proses',
            1 => 'Proses Disposisi',
            2 => 'Selesai',
        ];
        $this->arrStatusSuratKeluar = [
            0 => 'Seluruh Surat',
            1 => 'Proses Verifikasi',
            2 => 'Menunggu Ditandatangani',
            3 => 'Sudah Ditandatangani',
        ];

        $this->selectedMonth = date('m');
        $this->selectedYear = date('Y');
        $this->selectedStatus = '';
    }

    public function render()
    {
        $chartKondisiPresensiPegawai = LivewireCharts::lineChartModel()
            ->setTitle('Presensi')
            ->setAnimated(true)
            ->setLegendVisibility(false)
            ->setDataLabelsEnabled(true)
            ->setSmoothCurve()
            ->withDataLabels()
            ->setXAxisVisible(true)
            ->addPoint('Januari', 45, '#008ffb')
            ->addPoint('Februari', 50, '#008ffb')
            ->addPoint('Maret', 55, '#008ffb')
            ->addPoint('April', 60, '#008ffb')
            ->addPoint('Mei', 65, '#008ffb')
            ->addPoint('Juni', 70, '#008ffb')
            ->addPoint('Juli', 75, '#008ffb')
            ->addPoint('Agustus', 80, '#008ffb')
            ->addPoint('September', 85, '#008ffb')
            ->addPoint('Oktober', 90, '#008ffb')
            ->addPoint('November', 95, '#008ffb')
            ->addPoint('Desember', 100, '#008ffb');

        $chartTenagaHonorer = LivewireCharts::columnChartModel()
            ->setTitle('Tenaga Honorer')
            ->setAnimated(true)
            ->setLegendVisibility(false)
            ->setDataLabelsEnabled(true)
            ->setXAxisVisible(true)
            ->setHorizontal()
            ->addColumn('Laki-laki', 704, '#ff5b5b')
            ->addColumn('Perempuan', 520, '#008ffb');

        $chartRealisasiProgram = LivewireCharts::pieChartModel()
            ->setTitle('Realisasi Program')
            ->setAnimated(true)
            ->setLegendVisibility(true)
            ->addSlice('Belum Realisasi', 142, '#ff5b5b')
            ->addSlice('Sudah Realisasi', 882, '#008ffb');

        $chartRealisasiKegiatan = LivewireCharts::pieChartModel()
            ->setTitle('Realisasi Kegiatan')
            ->setAnimated(true)
            ->setLegendVisibility(true)
            ->addSlice('Belum Realisasi', 321, '#ff5b5b')
            ->addSlice('Sudah Realisasi', 974, '#008ffb');

        $chartRealisasiPendapatan = LivewireCharts::pieChartModel()
            ->setTitle('Realisasi Pendapatan')
            ->setAnimated(true)
            ->setLegendVisibility(true)
            ->addSlice('Belum Realisasi', 512, '#ff5b5b')
            ->addSlice('Sudah Realisasi', 591, '#008ffb');

        $chartRealisasiBelanja = LivewireCharts::pieChartModel()
            ->setTitle('Realisasi Belanja')
            ->setAnimated(true)
            ->setLegendVisibility(true)
            ->addSlice('Belum Realisasi', 124, '#ff5b5b')
            ->addSlice('Sudah Realisasi', 162, '#008ffb');

        return view('livewire.home', [
            'chartKondisiPresensiPegawai' => $chartKondisiPresensiPegawai,
            'chartTenagaHonorer' => $chartTenagaHonorer,
            'chartRealisasiProgram' => $chartRealisasiProgram,
            'chartRealisasiKegiatan' => $chartRealisasiKegiatan,
            'chartRealisasiPendapatan' => $chartRealisasiPendapatan,
            'chartRealisasiBelanja' => $chartRealisasiBelanja,
        ]);
    }

    function _getSuratSemesta()
    {
        $idSkpd = collect($this->cookieSkpdBawahan)->toArray();
        $dateStart = Carbon::now()->startOfMonth()->format('Y-m-d');
        $dateEnd = Carbon::now()->endOfMonth()->format('Y-m-d');
        $response = Http::post('https://semesta.oganilirkab.go.id/api/data-surat', [
            // 'id_skpd' => [22, 34],
            'id_skpd' => $idSkpd,
            'tanggal_awal' => $dateStart,
            'tanggal_akhir' => $dateEnd,
        ]);

        $response = collect(json_decode($response, true));
        if ($response['message'] == 'success') {
            $this->dataSuratSemesta = $response['data'];
        }
    }

    function filterSuratMasuk()
    {
        $this->validate([
            'selectedMonth' => 'required',
            'selectedYear' => 'required',
            'selectedStatus' => 'nullable',
        ], [], [
            'selectedMonth' => 'Bulan',
            'selectedYear' => 'Tahun',
            'selectedStatus' => 'Status',
        ]);

        $this->_getSuratMasuk();
    }

    function _getSuratMasuk()
    {
        $idSkpd = collect($this->cookieSkpdBawahan)->toArray();
        $month = $this->selectedMonth ?? Carbon::now()->month;
        $year = $this->selectedYear ?? Carbon::now()->year;
        $status = $this->selectedStatus ?? null; // jika null maka menampilkan seluruh status surat, 0 belum proses, 1 Proses Disposisi, 2 Selesai

        $response = Http::post('https://semesta.oganilirkab.go.id/api/surat-masuk-list', [
            // 'id_skpd' => [22, 34],
            'id_skpd' => $idSkpd,
            'bulan' => $month,
            'tahun' => $year,
            'status' => $status,
        ]);

        $response = collect(json_decode($response, true));
        if ($response['message'] == 'success') {
            $this->dataSuratMasuk = $response['data'];
            // dd($this->dataSuratMasuk);
        }
    }

    function filterSuratKeluar()
    {
        $this->validate([
            'selectedMonth' => 'required',
            'selectedYear' => 'required',
            'selectedStatusSuratKeluar' => 'nullable',
        ], [], [
            'selectedMonth' => 'Bulan',
            'selectedYear' => 'Tahun',
            'selectedStatusSuratKeluar' => 'Status',
        ]);

        $this->_getSuratKeluar();
    }

    function _getSuratKeluar()
    {
        $idSkpd = collect($this->cookieSkpdBawahan)->toArray();
        $month = $this->selectedMonth ?? Carbon::now()->month;
        $year = $this->selectedYear ?? Carbon::now()->year;
        $status = $this->selectedStatusSuratKeluar ?? 0; // 0 Seluruh Surat, 1 Proses Verifikasi, 2 Menunggu Ditandatangani, 3 Sudah Ditandatangani

        $response = Http::post('https://semesta.oganilirkab.go.id/api/surat-keluar-list', [
            // 'id_skpd' => [22, 34],
            'id_skpd' => $idSkpd,
            'bulan' => $month,
            'tahun' => $year,
            'status' => $status,
        ]);

        $response = collect(json_decode($response, true));
        if ($response['message'] == 'success') {
            $this->dataSuratKeluar = $response['data'];
            // dd($this->dataSuratKeluar);
        }
    }

    function _getAgendaJadwalinBae()
    {
        // https://jadwalinbae.oganilirkab.go.id/api/jadwalv2?tanggal=2024-11-30
        // $date = '2024-11-30';
        $date = Carbon::now()->format('Y-m-d');

        $response = Http::get('https://jadwalinbae.oganilirkab.go.id/api/jadwalv2', [
            'tanggal' => $date,
        ]);

        $response = collect(json_decode($response, true));
        if ($response['data'] != null) {
            $this->dataAgenda = $response['data'];
            $this->dateAgenda = $date;
            // dd($this->dataAgenda);
        }
    }

    function getDetailAgenda($data)
    {
        $this->detailAgenda = $data;
        // dd($data);
    }

    function _getJumlahASN()
    {
        // https://semesta.oganilirkab.go.id/api/total-pegawai-dashoi
        $response = Http::post('https://semesta.oganilirkab.go.id/api/total-pegawai-dashoi', [
            // 'id_skpd' => collect($this->cookieSkpdBawahan)->toArray(),
        ]);

        $response = collect(json_decode($response, true));
        if ($response['code'] == '200') {
            $this->dataPegawaiASN = $response['data'];
            // dd($this->dataPegawaiASN);
        }
    }
}
