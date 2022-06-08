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
            'ruc' => $this->faker->unique()->numberBetween(10000000, 99999999),
            'address' => $this->faker->address(),
            'attention' => $this->faker->name(),
            'status' => $this->faker->boolean(),
        ];
    }
}
