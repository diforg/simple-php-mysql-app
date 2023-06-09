<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'id'   => 1,
            'name' => 'Admin',
        ]);
        Category::create([
            'id'   => 2,
            'name' => 'Gerente',
        ]);
        Category::create([
            'id'   => 3,
            'name' => 'Normal',
        ]);
    }
}
