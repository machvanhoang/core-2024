<?php

namespace Database\Seeders;

use App\Models\Option;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $name = 'Iphone 13 Pro Max Plus 256GB';
        $product = Product::create([
            'name'      => $name,
            'slug'      => str()->slug($name),
            'status_id' => 1,
        ]);

        Option::create([
            'product_id' => $product->id,
            'option_name' => 'Size',
        ]);
        Option::create([
            'product_id' => $product->id,
            'option_name' => 'Color',
        ]);
        $dataValue  = [
            [
                'option_id'         => 1,
                'option_value_name' => 36,
            ],
            [
                'option_id'         => 1,
                'option_value_name' => 38,
            ],
            [
                'option_id'         => 2,
                'option_value_name' => 'Black',
            ],
            [
                'option_id'         => 2,
                'option_value_name' => 'Blue',
            ],
        ];
        DB::table('option_values')->insert($dataValue);


        $dataVariants = [
            [
                'product_id' => 1,
                'code' => 'code001',
                'inventory' => 5,
                'photo' => null,
                'regular_price' => 100000,
                'sale_price' => 100000
            ],
            [
                'product_id' => 1,
                'code' => 'code002',
                'inventory' => 100,
                'photo' => null,
                'regular_price' => 200000,
                'sale_price' => 200000
            ],
            [
                'product_id' => 1,
                'code' => 'code003',
                'inventory' => 0,
                'photo' => null,
                'regular_price' => 300000,
                'sale_price' => 300000
            ],
            [
                'product_id' => 1,
                'inventory' => 35,
                'code' => 'code004',
                'photo' => null,
                'regular_price' => 400000,
                'sale_price' => 400000
            ],
        ];
        DB::table('variants')->insert($dataVariants);

        $dataVariantOptionValues = [
            [
                'variant_id'      => 1,
                'option_value_id' => 1,
            ],
            [
                'variant_id'      => 1,
                'option_value_id' => 3,
            ],
            [
                'variant_id'      => 2,
                'option_value_id' => 1,
            ],
            [
                'variant_id'      => 2,
                'option_value_id' => 4,
            ],
            [
                'variant_id'      => 3,
                'option_value_id' => 2,
            ],
            [
                'variant_id'      => 3,
                'option_value_id' => 3,
            ],
            //
            [
                'variant_id'      => 4,
                'option_value_id' => 2,
            ],
            [
                'variant_id'      => 4,
                'option_value_id' => 4,
            ],
        ];
        DB::table('variant_option_values')->insert($dataVariantOptionValues);
    }
}
