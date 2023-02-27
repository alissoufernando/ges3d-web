<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleTableSeeder;
use Database\Seeders\UserTableSeeder;
use Database\Seeders\AgentTableSeeder;
use Database\Seeders\AlertTableSeeder;
use Database\Seeders\ArticleTableSeeder;
use Database\Seeders\ProduitTableSeeder;
use Database\Seeders\NewLetterTableSeeder;
use Database\Seeders\PermissionTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            RoleTableSeeder::class,
            PermissionTableSeeder::class,
            UserTableSeeder::class,
            AgentTableSeeder::class,
            ProduitTableSeeder::class,
            ArticleTableSeeder::class,
            AlertTableSeeder::class,
            NewLetterTableSeeder::class,

        ]);

        User::factory(10)->create();
    }
}
