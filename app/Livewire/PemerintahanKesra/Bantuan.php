<?php

namespace App\Livewire\PemerintahanKesra;

use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Bantuan extends Component
{
    use LivewireAlert;
    public $cookieUser = [], $cookieSkpdBawahan = [];
    // public $day, $month, $year;
    public $dataJenisKelamin = [];

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
    }

    public function render()
    {
        $chartKecamatan = LivewireCharts::columnChartModel()
            ->setTitle('Jumlah Bantuan Berdasarkan Kecamatan')
            ->setAnimated(true)
            ->setXAxisVisible(false)
            ->setDataLabelsEnabled(false)
            ->addColumn('Kecamatan Kandis', 100, '#36A2EB')
            ->addColumn('Kecamatan Sungai Pinang', 200, '#FF6384')
            ->addColumn('Kecamatan Indralaya', 300, '#FFCE56')
            ->addColumn('Kecamatan Indralaya Utara', 400, '#FF6384')
            ->addColumn('Kecamatan Indralaya Selatan', 500, '#FFCE56')
            ->addColumn('Kecamatan Tanjung Raja', 600, '#FF6384')
            ->addColumn('Kecamatan Payaraman', 700, '#FFCE56')
            ->addColumn('Kecamatan Pemulutan', 800, '#FF6384');

        $chartJenis = LivewireCharts::pieChartModel()
            ->asDonut()
            ->setAnimated(true)
            ->setLegendPosition('right')
            ->setTitle('Jumlah Bantuan Berdasarkan Jenis')
            ->addSlice('Bantuan Langsung Tunai (BLT)', 50, '#FFCE56')
            ->addSlice('Bantuan Sosial Tunai (BST)', 50, '#FF6384')
            ->addSlice('Keluarga Harapan', 50, '#36A2EB')
            ->addSlice('Program Keluarga Harapan (PKH)', 50, '#FFCE56')
            ->addSlice('Bantuan Pangan Non Tunai (BPNT)', 50, '#FF6384')
            ->addSlice('Bantuan Sembako', 50, '#36A2EB');

        return view('livewire.pemerintahan-kesra.bantuan', [
            'chartKecamatan' => $chartKecamatan,
            'chartJenis' => $chartJenis,
        ]);
    }
}
