<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Category;

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

        for($i = 0; $i < 12; ++$i) {
            Product::create([
            	'name' => $faker->name,
                'price' => $faker->numberBetween(100,1000),
                'details' => 'lorem ipsum',
                'type' => $faker->randomElement(['0', '1']),  
            ]);
        }
    }
}
