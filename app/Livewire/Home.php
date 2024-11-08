<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;

class Home extends Component
{
    // public $day, $month, $year;
    public $dateStart = null, $dateEnd = null;
    public $cookieUser = [], $cookieSkpdBawahan = [];
    public $dataSuratSemesta = [];

    function mount()
    {
        $this->cookieUser = collect(json_decode(Cookie::get('seu', true)));
        $this->cookieSkpdBawahan = collect(json_decode(Cookie::get('sesb', true)));

        $this->dateStart = Carbon::parse(now())->subDays(7)->format('Y-m-d');
        $this->dateEnd = Carbon::parse(now())->format('Y-m-d');

        // $this->day = date('d');
        // $this->month = date('m');
        // $this->year = date('Y');
    }

    public function render()
    {
        return view('livewire.home');
    }

    function _getSuratSemesta()
    {
        $dateNow = date('Y-m-d');
        $response = Http::post('https://semesta.oganilirkab.go.id/api/statistik-surat', [
            'id_skpd' => $this->cookieUser['id_skpd'],
            'tanggal_awal' => $dateNow,
            'tanggal_akhir' => $dateNow,
        ]);

        $response = collect(json_decode($response, true));
        if ($response['code'] == 200) {
            $this->dataSuratSemesta = $response['data'];
            // dd($this->dataSuratSemesta);
        }
    }

    function _getPresensiPegawan()
    {
        // {{base_url}}/api/administrasi-umum-grafik-absensi
    }
}
