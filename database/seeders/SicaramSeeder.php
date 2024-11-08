<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SicaramSeeder extends Seeder
{
    public function run(): void
    {
        // INSTANCE START
        DB::beginTransaction();
        try {
            $datas = Http::get('https://sicaramapis.oganilirkab.go.id/api/local/caram/realisasi/listInstance', []);
            $datas = collect(json_decode($datas, true));
            $datas = $datas['data'];

            foreach ($datas as $data) {
                DB::table('ref_instance')->updateOrInsert([
                    'nomenklatur_code' => $data['code'],
                ], [
                    'sicaram_id' => $data['id'],
                    'alias' => $data['alias'],
                    'logo' => $data['logo'],
                ]);
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage() . ' - ' . $e->getLine());
        }
        // INSTANCE END
    }
}
