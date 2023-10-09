<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;
use App\Models\Employee;
use Carbon\Carbon;

class OrdersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_id' => Customer::all()->random()->id,
            'customer_name' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'employee_id' => Employee::all()->random()->id,
            'amount' => rand(1111,9999),
            'date' => carbon::today()->subDays(rand(0,365))
        ];
    }
}
