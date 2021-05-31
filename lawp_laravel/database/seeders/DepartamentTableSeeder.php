<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\departament;

class DepartamentTableSeeder extends Seeder
{

    public function run()
    {
        /*$arrays = [
            ['name'=>'Amazonas','id' => ''],
            ['name'=>'Antioquía','id' => ''],
            ['name'=> 'Arauca','id' => ''],
            ['name'=> 'Atlántico','id' => ''],
            ['name'=> 'Bolívar','id' => ''],
            ['name'=> 'Boyacá','id' => ''],
            ['name'=> 'Caldas','id' => ''],
            ['name'=> 'Caquetá' ,'id' => ''],
            ['name'=> 'Casanare','id' => ''],
            ['name'=>  'Cauca','id' => ''],
            ['name'=> 'Cesar','id' => ''],
            ['name'=> 'Chocó','id' => ''],
            ['name'=> 'Córdoba','id' => ''],
            ['name'=> 'Cundinamarca','id' => ''],
            ['name'=> 'Guainía','id' => ''],
            ['name'=> 'Guaviare','id' => ''],
            ['name'=> 'Huila','id' => ''],
            ['name'=> 'La Guajira','id' => ''],
            ['name'=>'Magdalena','id' => ''],
            ['name'=>'Meta','id' => ''],
            ['name'=>'Nariño','id' => ''],
            ['name'=>'Norte de Santander','id' => ''],
            ['name'=>'Putumayo','id' => ''],
            ['name'=>'Quindío','id' => ''],
            ['name'=>'Risaralda','id' => ''],
            ['name'=>'San Andrés y Providencia','id' => ''],
            ['name'=>'Santander','id' => ''],
            ['name'=>'Sucre','id' => ''],
            ['name'=>'Tolima','id' => ''],
            ['name'=>'Valle del Cauca','id' => ''],
            ['name'=>'Vaupés','id' => ''],
            ['name'=>'Vichada','id' => ''],
            ['name'=>'Bogotá','id' => ''],
        ];
        foreach ($arrays as  $array)
        departament::create(
            $array
        );*/
        //no ejecutar este seeder 2 veces o la base de datos explota
            departament::upsert([
                ['name'=>'Amazonas'],
                ['name'=>'Antioquía'],
                ['name'=> 'Arauca'],
                ['name'=> 'Atlántico'],
                ['name'=> 'Bolívar'],
                ['name'=> 'Boyacá'],
                ['name'=> 'Caldas'],
                ['name'=> 'Caquetá' ],
                ['name'=> 'Casanare'],
                ['name'=>  'Cauca'],
                ['name'=> 'Cesar'],
                ['name'=> 'Chocó'],
                ['name'=> 'Córdoba'],
                ['name'=> 'Cundinamarca'],
                ['name'=> 'Guainía'],
                ['name'=> 'Guaviare'],
                ['name'=> 'Huila'],
                ['name'=> 'La Guajira'],
                ['name'=>'Magdalena'],
                ['name'=>'Meta'],
                ['name'=>'Nariño'],
                ['name'=>'Norte de Santander'],
                ['name'=>'Putumayo'],
                ['name'=>'Quindío'],
                ['name'=>'Risaralda'],
                ['name'=>'San Andrés y Providencia'],
                ['name'=>'Santander'],
                ['name'=>'Sucre'],
                ['name'=>'Tolima'],
                ['name'=>'Valle del Cauca'],
                ['name'=>'Vaupés'],
                ['name'=>'Vichada'],
                ['name'=>'Bogotá'],
            ],
                ['name']
            );

    }
}
