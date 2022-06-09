<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'email' => 'gerencia@dcargoexpress.com',
            'name' => 'Gerencia General',
        ]);

        \App\Models\User::factory()->create([
            'email' => 'ventas@dcargoexpress.com',
            'name' => 'Área de ventas',
        ]);

        $this->call(CompanySeeder::class);
        $this->call(QuotationSeeder::class);
    }
}
