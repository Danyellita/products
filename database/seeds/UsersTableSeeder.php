<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'first',
        	'email' => 'first@gmail.com',
        	'password' => bcrypt('123456789'),
        ]);

        User::create([
        	'name' => 'second',
        	'email' => 'second@gmail.com',
        	'password' => bcrypt('123456789'),
        ]);
    }
}
