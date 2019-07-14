<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            'position' => 'manager',
            'employee_id' => '1',
        ]);

        DB::table('positions')->insert([
            'position' => 'engineer',
            'employee_id' => '2',
        ]);

        DB::table('positions')->insert([
            'position' => 'manager',
            'employee_id' => '3',
        ]);

        DB::table('positions')->insert([
            'position' => 'designer',
            'employee_id' => '4',
        ]);

        DB::table('positions')->insert([
            'position' => 'director',
            'employee_id' => '5',
        ]);

        DB::table('positions')->insert([
            'position' => 'engineer',
            'employee_id' => '6',
        ]);

    }
}
