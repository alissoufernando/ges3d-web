<?php

namespace Database\Seeders;

use App\Models\Article;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $productName = $faker->unique()->words($nb = 4, $asText = true);
        // $Categorys = Category::all()->pluck('id')->toArray();

        for ($i = 0; $i < 20; $i++) {
            Article::create([
                'titre' => $productName,
                'contenu' => "Cette nouvelle résidence étudiante située au cœur du quartier des Universités propose 217 logements type studio, studio supérieur et 2 pièces allant de 19m² à 29m² entièrement équipés. A proximité des transports en commun, elle permet un accès rapide aux établissements d'enseignement supérieur.
                Avec un accès direct au centre-ville par le tramway et à 2 minutes à pieds du domaine D’O, elle constitue un cadre idéal pour une vie étudiante épanouie.",
                'description' => "Cette nouvelle résidence étudiante située au cœur du quartier des Universités propose 217 logements type studio, studio supérieur et 2 pièces allant de 19m² à 29m² entièrement équipés.",
            ]);
        }
    }
}
