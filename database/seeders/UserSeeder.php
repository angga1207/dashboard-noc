<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::beginTransaction();
        try {
            User::updateOrCreate([
                'username' => 'developer',
            ], [
                'name' => 'Developer',
                'email' => 'developer@email.com',
                'role_id' => 1,
                'password' => bcrypt('arungboto'),
                'sicaram_id' => 1,
                'status' => 'active',
            ]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage() . ' - ' . $e->getLine());
        }
    }
}
