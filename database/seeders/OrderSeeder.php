<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('orders')->insert([
            ['product_id' => 1, 'quantity' => 1, 'total_price' => 299.99],
            ['product_id' => 2, 'quantity' => 2, 'total_price' => 179.98],
            ['product_id' => 3, 'quantity' => 3, 'total_price' => 47.97],
        ]);
    }
}
