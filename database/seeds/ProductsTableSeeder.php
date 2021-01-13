<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker\Factory::create();

        for($i = 0; $i < 10; ++$i) {
            Product::create([
            	'name' => $faker->name,
                'price' => $faker->numberBetween(100,1000),
            ]);
        }
    }
}
