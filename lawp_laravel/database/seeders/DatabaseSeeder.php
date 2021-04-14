<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(DepartamentTableSeeder::class);
        $this->call(DocumentTypeSeeder::class);
        $this->call(EconomicTableSeeder::class);
        $this->call(MembershipsTableSeeder::class);
        $this->call(MunicipalityTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
        $this->call(StatusTableSeeder::class);
    }
}
