<?php

namespace Database\Seeders;

use App\Models\payment;
use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        payment::upsert([
            ['name'=>'Debito'],
            ['name'=>'Credito'],
        ],
        ['name']
        );
    }
}
