<?php

namespace Database\Seeders;

use App\Models\status;
use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{

    public function run()
    {
        status::upsert([
            ['name'=>'Activo'],
            ['name'=>'Desactivado'],
            ['name'=>'En proceso'],
        ],
            ['name']
        );
    }
}
