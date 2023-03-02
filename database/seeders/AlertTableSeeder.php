<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Alert;
use App\Models\Ville;
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
                'ville_id' => Ville::all()->random()->id,
                'message' => $faker->sentence(),
                'latitude' => $faker->latitude(),
                'longitude' => $faker->longitude(),
                'user_id' => User::all()->random()->id,
            ]);
        }
    }
}
