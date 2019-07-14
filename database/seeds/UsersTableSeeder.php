<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([

            'name' => 'intel',
            'email' => 'intel@gmail.com',
            'password' => bcrypt('intel@gmail.com'),
            'company_id' => 1,

        ]);

        DB::table('users')->insert([

            'name' => 'apple',
            'email' => 'apple@gmail.com',
            'password' => bcrypt('apple@gmail.com'),
            'company_id' => 2,

        ]);
        DB::table('users')->insert([

            'name' => 'amd',
            'email' => 'amd@gmail.com',
            'password' => bcrypt('123456'),
            'company_id' => 3,

        ]);
    }
}
