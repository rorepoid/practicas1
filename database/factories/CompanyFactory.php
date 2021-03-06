<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'ruc' => $this->faker->unique()->numberBetween(10000000000, 99999999999),
            'address' => $this->faker->address(),
            'attention' => $this->faker->name(),
            'preferred_payment_method' => 'Factura a 45 días',
            'status' => $this->faker->boolean(),
        ];
    }
}
