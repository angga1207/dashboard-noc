<?php

namespace App\Livewire\PemerintahanKesra;

use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Kependudukan extends Component
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
        $chartJenisKelamin = LivewireCharts::pieChartModel()
            ->setTitle('Jumlah Penduduk Berdasarkan Jenis Kelamin')
            ->asDonut()
            ->setAnimated(true)
            ->addSlice('Laki-laki', 60, '#36A2EB')
            ->addSlice('Perempuan', 40, '#FF6384');

        $chartPendudukKecamatan = LivewireCharts::columnChartModel()
            ->setTitle('Jumlah Penduduk Berdasarkan Kecamatan')
            ->setAnimated(true)
            ->addColumn('Kecamatan Kandis', 100, '#36A2EB')
            ->addColumn('Kecamatan Sungai Pinang', 200, '#FF6384')
            ->addColumn('Kecamatan Indralaya', 300, '#FFCE56')
            ->addColumn('Kecamatan Indralaya Utara', 400, '#FF6384')
            ->addColumn('Kecamatan Indralaya Selatan', 500, '#FFCE56')
            ->addColumn('Kecamatan Tanjung Raja', 600, '#FF6384')
            ->addColumn('Kecamatan Payaraman', 700, '#FFCE56')
            ->addColumn('Kecamatan Pemulutan', 800, '#FF6384');

        $chartJenisPekerjaan = LivewireCharts::columnChartModel()
            ->setTitle('Jumlah Penduduk Berdasarkan Jenis Pekerjaan')
            ->setAnimated(true)
            ->addColumn('PNS', 100, '#36A2EB')
            ->addColumn('TNI/Polri', 200, '#FF6384')
            ->addColumn('Pegawai Swasta', 300, '#FFCE56')
            ->addColumn('Wiraswasta', 400, '#FF6384')
            ->addColumn('Petani', 500, '#FFCE56')
            ->addColumn('Nelayan', 600, '#FF6384')
            ->addColumn('Buruh', 700, '#FFCE56')
            ->addColumn('Lainnya', 800, '#FF6384');

        $chartUmur = LivewireCharts::columnChartModel()
            ->setTitle('Penduduk (Jiwa)')
            ->setAnimated(true)
            ->addColumn('0-5', rand(1000, 10000), '#36A2EB')
            ->addColumn('6-10', rand(1000, 10000), '#FF6384')
            ->addColumn('11-15', rand(1000, 10000), '#FFCE56')
            ->addColumn('16-20', rand(1000, 10000), '#FF6384')
            ->addColumn('21-25', rand(1000, 10000), '#FFCE56')
            ->addColumn('26-30', rand(1000, 10000), '#FF6384')
            ->addColumn('31-35', rand(1000, 10000), '#FFCE56')
            ->addColumn('36-40', rand(1000, 10000), '#FF6384')
            ->addColumn('41-45', rand(1000, 10000), '#FFCE56')
            ->addColumn('46-50', rand(1000, 10000), '#FF6384')
            ->addColumn('51-55', rand(1000, 10000), '#FFCE56')
            ->addColumn('56-60', rand(1000, 10000), '#FF6384')
            ->addColumn('61-65', rand(1000, 10000), '#FFCE56')
            ->addColumn('66-70', rand(1000, 10000), '#FF6384')
            ->addColumn('71-75', rand(1000, 10000), '#FFCE56')
            ->addColumn('76-80', rand(1000, 10000), '#FF6384')
            ->addColumn('81-85', rand(1000, 10000), '#FFCE56')
            ->addColumn('86-90', rand(1000, 10000), '#FF6384')
            ->addColumn('91-95', rand(1000, 10000), '#FFCE56');

        return view('livewire.pemerintahan-kesra.kependudukan', [
            'chartJenisKelamin' => $chartJenisKelamin,
            'chartPendudukKecamatan' => $chartPendudukKecamatan,
            'chartJenisPekerjaan' => $chartJenisPekerjaan,
            'chartUmur' => $chartUmur,
        ]);
    }
}
