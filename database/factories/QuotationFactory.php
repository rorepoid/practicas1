<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class QuotationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_id' => $this->faker->numberBetween(1, 2),
            'status' => $this->faker->boolean(),
            'total' => $this->faker->randomFloat(2, 0, 100),
        ];
    }
}
