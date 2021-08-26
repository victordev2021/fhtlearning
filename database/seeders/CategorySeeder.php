<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Diseño de Cargas y Predimensionamiento de Estructuras'
        ]);
        Category::create([
            'name' => 'DISEÑO ESTRUCTURAL DE FUNDACIONES SUPERFICIALES'
        ]);
        Category::create([
            'name' => 'Diseño de Edificios de Hormigón Armando'
        ]);
    }
}
