<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'user_id' => 1,
            'social_service_id' => 1,
            'quantity' => 1000,
            'total_price' => 10.00,
            'status' => 'completed',
        ]);

        Order::create([
            'user_id' => 1,
            'social_service_id' => 2,
            'quantity' => 2000,
            'total_price' => 30.00,
            'status' => 'pending',
        ]);

        Order::create([
            'user_id' => 2,
            'social_service_id' => 3,
            'quantity' => 500,
            'total_price' => 2.50,
            'status' => 'in_progress',
        ]);
    }
}
