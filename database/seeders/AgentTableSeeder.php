<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AgentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            [
                'id' =>5,
                'nom' => 'Arnaud agent',
                'prenoms' => 'Lokonon agent',
                'email' => 'fiflokononagent@gmail.com',
                'phone' => '67080595',
                'ville' => 'Cadjehoun',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'isDelete' => 0,
            ],

            [
                'id' =>6,
                'nom' => 'LOKO agent',
                'prenoms' => 'aristofane smith agent',
                'email' => 'aristofanesmithlokoagent@gmail.com',
                'phone' => '67080595',
                'ville' => 'Cadjehoun',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'isDelete' => 0,
            ],
            [
                'id' =>7,
                'nom' => 'DOUMEFIO agent',
                'prenoms' => 'Anne agent',
                'email' => 'doumefioagent@gmail.com',
                'phone' => '67080595',
                'ville' => 'Cadjehoun',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'isDelete' => 0,
            ],
            [
                'id' =>8,
                'nom' => 'ALISSOU agent',
                'prenoms' => 'Fernando agent',
                'email' => 'alissouananiagent@gmail.com',
                'phone' => '67080595',
                'ville' => 'Cadjehoun',
                'password_default' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'isDelete' => 0,
            ],

        ]);

        DB::table('model_has_roles')->insert([
            [
                'role_id' => 4,
                'model_type' => 'App\Models\User',
                'model_id' => 5,
            ],
            [
                'role_id' => 4,
                'model_type' => 'App\Models\User',
                'model_id' => 6,
            ],
            [
                'role_id' => 4,
                'model_type' => 'App\Models\User',
                'model_id' => 7,
            ],
            [
                'role_id' => 4,
                'model_type' => 'App\Models\User',
                'model_id' => 8,
            ],
        ]);


    }
}
