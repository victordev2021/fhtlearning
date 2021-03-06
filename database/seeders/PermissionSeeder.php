<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'Crear cursos']);
        Permission::create(['name' => 'Leer cursos']);
        Permission::create(['name' => 'Actualizar cursos']);
        Permission::create(['name' => 'Eliminar cursos']);
        Permission::create(['name' => 'Ver Dashboard']);
        Permission::create(['name' => 'Crear rol']);
        Permission::create(['name' => 'Listar rol']);
        Permission::create(['name' => 'Editar rol']);
        Permission::create(['name' => 'Eliminar rol']);
        Permission::create(['name' => 'Leer usuario']);
        Permission::create(['name' => 'Editar usuario']);
        Permission::create(['name' => 'Crear proyecto']);
        Permission::create(['name' => 'Leer proyecto']);
        Permission::create(['name' => 'Actualizar proyecto']);
        Permission::create(['name' => 'Elimiar proyecto']);
    }
}
