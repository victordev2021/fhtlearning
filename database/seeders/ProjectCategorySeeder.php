<?php

namespace Database\Seeders;

use App\Models\ProjectCategory;
use Illuminate\Database\Seeder;

class ProjectCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectCategory::create([
            'name' => 'Diseño Arquitectónico'
        ]);
        ProjectCategory::create([
            'name' => 'Ampliación'
        ]);
        ProjectCategory::create([
            'name' => 'Cotizaciones'
        ]);
        ProjectCategory::create([
            'name' => 'Refacción'
        ]);
        ProjectCategory::create([
            'name' => 'Remodelación'
        ]);
        ProjectCategory::create([
            'name' => 'Ingeniería Estructura'
        ]);
        ProjectCategory::create([
            'name' => 'Ingeniería Geotécnica'
        ]);
        ProjectCategory::create([
            'name' => 'Ingeniería Eléctrica'
        ]);
        ProjectCategory::create([
            'name' => 'Ingeniería Sanitaria'
        ]);
    }
}
