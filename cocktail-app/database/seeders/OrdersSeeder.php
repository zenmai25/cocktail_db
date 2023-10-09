<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Orders;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Orders::factory(20)->create();
    }
}
