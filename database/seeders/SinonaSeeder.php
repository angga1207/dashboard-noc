<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SinonaSeeder extends Seeder
{
    public function run(): void
    {
        // INSTANCE START
        DB::beginTransaction();
        try {
            $datas = Http::get('https://sinona.oganilirkab.go.id/api/public/data-pd', []);
            $datas = collect(json_decode($datas, true));
            $datas = $datas['data'];

            foreach ($datas as $data) {
                $inst = DB::table('ref_instance')
                    ->where('name', 'ILIKE', "%" . $data['nama_skpd'] . "%")
                    ->first();
                    
                if ($inst) {
                    DB::table('ref_instance')->updateOrInsert([
                        'id' => $inst->id,
                    ], [
                        'sinona_id' => $data['id'],
                    ]);
                }
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage() . ' - ' . $e->getLine());
        }
        // INSTANCE END
    }
}
