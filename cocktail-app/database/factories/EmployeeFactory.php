<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->name(),
            'last_name'  => $this->faker->lastName(),
            'email' => $this->faker->email(),
            'contact_number' => rand(00000000000,99999999999)
        ];
    }
}
