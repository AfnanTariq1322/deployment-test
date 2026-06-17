<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Product::create([
            'name'=> 'Product 1',
            'description' => 'This is a greate product',
            'price' => 19.99
        ]);


        \App\Models\Product::create([
            'name'=> 'Cake ',
            'description' => 'This is a cafe product',
            'price' => 10.99
        ]);
    }
}
