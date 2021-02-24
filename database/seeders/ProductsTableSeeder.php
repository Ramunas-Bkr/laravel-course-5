<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 20; $i++) {
            DB::table('products')->insert([
                'title' => $faker->catchPhrase(),
                'price' => mt_rand(5 * 100, 600 * 100) / 100,
                'in_stock' => rand(0, 1),
                'desc' => $faker->text(50)
            ]);
        };
    }
}
