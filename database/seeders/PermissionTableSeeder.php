<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'Add articles']);
        Permission::create(['name' => 'Delete articles']);
        Permission::create(['name' => 'edit Produit']);
        Permission::create(['name' => 'Add Produit']);
        Permission::create(['name' => 'Delete Produit']);
    }
}
