<?php

namespace Database\Seeders;

use App\Models\NewLetter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class NewLetterTableSeeder extends Seeder
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
            NewLetter::create([
                'email' => $faker->safeEmail(),
            ]);
        }
    }
}
