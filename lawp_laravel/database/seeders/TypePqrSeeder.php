<?php

namespace Database\Seeders;

use App\Models\pqrType;
use Illuminate\Database\Seeder;

class TypePqrSeeder extends Seeder
{

    public function run()
    {
        pqrType::upsert([
            ['name'=>'pregunta'],
            ['name'=>'queja'],
            ['name'=>'reclamo'],
        ],
            ['name']
        );
    }
}
