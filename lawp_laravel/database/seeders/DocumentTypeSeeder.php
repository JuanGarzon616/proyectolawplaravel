<?php

namespace Database\Seeders;

use App\Models\document_type;
use Illuminate\Database\Seeder;

class DocumentTypeSeeder extends Seeder
{

    public function run()
    {
        document_type::upsert([
            ['name'=>'Cedula de ciudadania','acronym'=>'CC'],
            ['name'=>'Targeta de Identidad','acronym'=>'TI'],
            ['name'=>'Cedula de Extrangeria','acronym'=>'CE'],
            ['name'=>'Pasaporte','acronym'=>'PP']
        ],
        ['name','acronym']
        );
    }
}
