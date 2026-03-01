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
        'name' => 'Elegant Purse',
        'description' => 'Tas elegan untuk pecinta old money style.',
        'price' => 50000,
        'image' => 'https://via.placeholder.com/150'
    ]);

    \App\Models\Product::create([
        'name' => 'Fluffy Bag',
        'description' => 'Untuk soft girl sepertimu!',
        'price' => 35000,
        'image' => 'https://via.placeholder.com/150'
    ]);
}
    }