<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('products')->insert([
            ['name' => 'Smartphone', 'price' => 299.99, 'category_id' => 1],
            ['name' => 'Microwave Oven', 'price' => 89.99, 'category_id' => 2],
            ['name' => 'Novel', 'price' => 15.99, 'category_id' => 3],
        ]);
    }
}
