<?php

namespace Tests\Feature;

use App\Http\Livewire\Company\Create;
use App\Http\Livewire\Company\Edit;
use App\Models\Company;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreateCompanyTest extends TestCase
{

    /** @test  */
    function can_create_company()
    {
        Livewire::test(Create::class)
            ->set('name', 'UCV')
            ->set('ruc', '12345678901')
            ->set('address', 'Calle falsa 123')
            ->set('attention', 'Juan Perez')
            ->set('preferredPaymentMethod', 'Efectivo')
            ->set('status', true)
            ->call('save');

        $this->assertTrue(Company::whereName('UCV')->exists());
    }

    /** @test  */
    function can_update_company()
    {
        $company = Company::factory()->create();

        Livewire::test(Edit::class)
            ->set('company', $company)
            ->set('name', 'UCV')
            ->set('ruc', '12345678901')
            ->set('address', 'Calle falsa 123')
            ->set('attention', 'Juan Perez')
            ->set('preferredPaymentMethod', 'Efectivo')
            ->set('status', true)
            ->call('save');

        $this->assertTrue(Company::whereName('UCV')->exists());
    }

    /** @test  */
    function can_not_create_company_with_same_ruc()
    {
        Company::factory()->create(['ruc' => '12345678901']);

        Livewire::test(Create::class)
            ->set('name', 'UCV')
            ->set('ruc', '12345678901')
            ->set('address', 'Calle falsa 123')
            ->set('attention', 'Juan Perez')
            ->set('preferredPaymentMethod', 'Efectivo')
            ->set('status', true)
            ->call('save');

        $this->assertFalse(Company::whereName('UCV')->exists());
    }
}
