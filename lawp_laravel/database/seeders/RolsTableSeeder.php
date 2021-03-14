<?php

namespace Database\Seeders;

use App\Models\rol;
use Illuminate\Database\Seeder;

class RolsTableSeeder extends Seeder
{

    public function run()
    {
        rol::upsert([
            ['name'=>'Usuario','description'=>'Rol para usuario comun y corriente.'],
            ['name'=>'Administrador','description'=>'Rol para usuario gestor del sistema.']
        ],
            ['name','description']
        );
    }
}
