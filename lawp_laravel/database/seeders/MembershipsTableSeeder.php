<?php

namespace Database\Seeders;

use App\Models\membership;
use Illuminate\Database\Seeder;

class MembershipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        membership::upsert([
            //['name'=>'Prueba Gratis','duration'=>'30','cost'=>'0'],
            ['name'=>'Mensual','duration'=>'31','cost'=>'10000'],
            ['name'=>'Semestral','duration'=>'186','cost'=>'50000'],
            ['name'=>'Anual','duration'=>'186','cost'=>'50000']
        ],
            ['name'],['duration'],['cost']
        );
    }
}
