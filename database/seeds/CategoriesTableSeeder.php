<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
        	'name' => 'farm animals',
        ]);

        Category::create([
        	'name' => 'companion animals',
        ]);

        Category::create([
        	'name' => 'sanitation',
        ]);
        Category::create([
        	'name' => 'top',
        ]);
    }
}
