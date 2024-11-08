<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SemestaSeeder extends Seeder
{
    public function run(): void
    {
        // INSTANCE START
        DB::beginTransaction();
        try {
            $datas = Http::post('https://semesta.oganilirkab.go.id/api/referensi-skpd', []);
            $datas = collect(json_decode($datas, true));
            $datas = $datas['data'];

            foreach ($datas as $data) {
                DB::table('ref_instance')->updateOrInsert([
                    'semesta_id' => $data['id'],
                ], [
                    'name' => $data['nama_skpd'],
                    'alias' => $data['nama_skpd'],
                    'type' => $data['jenis_skpd'],
                    'parent_id' => DB::table('ref_instance')->where('semesta_id', $data['id_skpd_induk'])->first()->id ?? 0,
                    'kecamatan_id' => $data['id_kecamatan'],
                    'nomenklatur_code' => $data['code'],
                    'logo' => $data['logo_skpd'],
                    'phone' => $data['telepon_skpd'],
                    'email' => $data['email_skpd'],
                    'address' => $data['alamat_skpd'],
                    'instagram' => $data['instagram_skpd'],
                    'twitter' => $data['twitter_skpd'],
                    'facebook' => $data['facebook_skpd'],
                    'fax' => $data['fax'],
                    'kode_pos' => $data['kode_pos'],
                    'website' => $data['website'],
                    'longitude' => $data['latitude'],
                    'latitude' => $data['longitude'],
                    'radius' => $data['radius'],
                    'created_at' => $data['created_at'],
                    'updated_at' => $data['updated_at'],
                ]);
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage() . ' - ' . $e->getLine());
        }
        // INSTANCE END


        // UNIT KERJA START
        DB::beginTransaction();
        try {
            $datas = Http::post('https://semesta.oganilirkab.go.id/api/referensi-unit-kerja', []);
            $datas = collect(json_decode($datas, true));
            $datas = $datas['data'];

            foreach ($datas as $data) {
                DB::table('ref_unit_kerja')->updateOrInsert([
                    'semesta_id' => $data['id'],
                ], [
                    'instance_id' => DB::table('ref_instance')->where('semesta_id', $data['id_skpd'])->first()->id ?? 0,
                    'parent_id' => DB::table('ref_unit_kerja')->where('semesta_id', $data['id_induk'])->first()->id ?? 0,
                    'level' => $data['level_unit_kerja'],
                    'name' => $data['nama_unit_kerja'],
                    'keterangan' => $data['ket_induk'],

                    'created_at' => $data['created_at'],
                    'updated_at' => $data['updated_at'],
                ]);
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage() . ' - ' . $e->getLine());
        }
        // UNIT KERJA END

        // JABATAN START
        DB::beginTransaction();
        try {
            $datas = Http::post('https://semesta.oganilirkab.go.id/api/referensi-jabatan', []);
            $datas = collect(json_decode($datas, true));
            $datas = $datas['data'];

            foreach ($datas as $data) {
                DB::table('ref_jabatan')->updateOrInsert([
                    'semesta_id' => $data['id'],
                ], [
                    'unit_kerja_id' => DB::table('ref_unit_kerja')->where('semesta_id', $data['id_unit_kerja'])->first()->id ?? 0,
                    'instance_id' => DB::table('ref_instance')->where('semesta_id', $data['id_skpd'])->first()->id ?? 0,
                    'name' => $data['nama_jabatan'],
                    'type' => $data['jenis_jabatan'],
                    'grade' => $data['grade'],
                    'tpp' => $data['tpp'],
                    'tugas_jabatan' => $data['tugas_jabatan'],
                    'fungsi_jabatan' => $data['fungsi_jabatan'],
                    'longitude' => $data['longitude'],
                    'latitude' => $data['latitude'],
                    'beban_kerja' => $data['beban_kerja'],
                    'kondisi_kerja' => $data['kondisi_kerja'],
                    'kelangkaan_profesi' => $data['kelangkaan_profesi'],

                    'created_at' => $data['created_at'],
                    'updated_at' => $data['updated_at'],
                ]);
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage() . ' - ' . $e->getLine());
        }
        // JABATAN END

    }
}
