<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Products::create(
            [
                'name' => 'Notebook Lenovo',
                'value' => '900',
                'quantity' => 1
            ]
        );
    }
}
