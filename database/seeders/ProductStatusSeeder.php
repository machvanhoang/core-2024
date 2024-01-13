<?php

namespace Database\Seeders;

use App\Models\ProductStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductStatus::create([
            'name' => 'published',
            'sort' => 1
        ]);

        ProductStatus::create([
            'name' => 'privated',
            'sort' => 2
        ]);
    }
}
