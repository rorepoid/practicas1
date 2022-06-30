<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class QuotationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $quantity = $this->faker->numberBetween(1, 25);
        $unitPrice = (float) $this->faker->randomFloat(2, 1, 250);
        return [
            'company_id' => $this->faker->numberBetween(1, 2),
            'date' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'payment_method' => Arr::random(['Factura a 45 días', 'Factura a 30 días', 'Factura a 15 días']),
            'transport_unit' => Arr::random(['Plataforma', 'Camión rebatible', 'Camión doble eje', 'Porter', 'Camabaja']),
            'materials' => 'Materiales varios',
            'weight' => $this->faker->numberBetween(1, 25),
            'pickup_address' => $this->faker->address(),
            'delivery_address' => $this->faker->address(),
            'description' => collect([
                'RECOGO DE MATERIALES EN TODO LIMA Y CALLAO.',
                'INCLUYE EL ACOMODAMIENTO DE LA CARGA.',
                'SEGURO COMPLEMENTARIO DE TRABAJO DE RIESGO (SCTR), SALUD Y PENSION.',
                'MONITOREO Y SEGUIMIENTO DE UNIDADES EN BASE MEDIANTE CENTRO DE CONTROL.',
                'NO INCLUYE CARGA NI DESCARGA',
                'SISTEMA DE GESTION GPS, PARA TODOS NUESTROS SERVICIOS DE CARGA PESADA Y SOBREDIMENSIONADA.',
            ])->join('\n'),
            'quantity' => $quantity,
            'unit_price' => $unitPrice,
            'total' => $quantity * ($unitPrice + 1.18),
            'status' => $this->faker->boolean(),
        ];
    }
}
