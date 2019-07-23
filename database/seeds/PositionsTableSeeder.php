<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Position;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Position::insert([
            'position' => 'manager',
            'employee_id' => '1',
        ]);

        Position::insert([
            'position' => 'engineer',
            'employee_id' => '2',
        ]);

        Position::insert([
            'position' => 'manager',
            'employee_id' => '3',
        ]);

        Position::insert([
            'position' => 'designer',
            'employee_id' => '4',
        ]);

        Position::insert([
            'position' => 'director',
            'employee_id' => '5',
        ]);

        Position::insert([
            'position' => 'engineer',
            'employee_id' => '6',
        ]);

    }
}
