<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 10; $i++) { 
            Product::create([
                'name' => fake()->sentence(2),
                'description' => fake()->paragraph(2),
                'price' => fake()->randomFloat(2),
                'amount' => fake()->numberBetween(0, 100)
            ]);
        }
    }
}
