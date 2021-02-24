<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('product_images')->insert([
                'img' => 'product_' . rand(1, 12) . '.jpg',
                'product_id' => rand(21, 40)
            ]);
        };
    }
}
