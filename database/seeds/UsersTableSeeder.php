<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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

        User::insert([

            'name' => 'intel',
            'email' => 'intel@gmail.com',
            'password' => bcrypt('intel@gmail.com'),
            'company_id' => 1,

        ]);

        User::insert([

            'name' => 'apple',
            'email' => 'apple@gmail.com',
            'password' => bcrypt('apple@gmail.com'),
            'company_id' => 2,

        ]);

        User::insert([

            'name' => 'amd',
            'email' => 'amd@gmail.com',
            'password' => bcrypt('123456'),
            'company_id' => 3,

        ]);
    }
}
