<?php

namespace Tests\Feature;

use App\Http\Livewire\Company\Create;
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
}
