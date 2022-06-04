<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuotationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Quotation::factory(20)->has(
            \App\Models\Company::factory()
        )->create();
    }
}
