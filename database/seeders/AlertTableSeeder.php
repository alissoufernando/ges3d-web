<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Alert;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class AlertTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            Alert::create([
                'geo_location' => $faker->address(),
                'message' => $faker->sentence(),
                'user_id' => User::all()->random()->id,
            ]);
        }
    }
}
