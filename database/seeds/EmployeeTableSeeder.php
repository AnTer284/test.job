<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Employee;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::insert([

        'first_name' => 'Иван',
        'last_name' => 'Кашинин',
        'salary' => '11000',
        'company_id' => 1,


        ]);

        Employee::insert([
        'first_name' => 'Иван2',
        'last_name' => 'Кашинин2',
        'salary' => '12000',
        'company_id' => 1,


        ]);

        Employee::insert([
            'first_name' => 'Петр',
            'last_name' => 'Каш',
            'salary' => '15000',
            'company_id' => 2,


        ]);

        Employee::insert([
            'first_name' => 'Василий',
            'last_name' => 'Каш',
            'salary' => '18000',
            'company_id' => 2,


        ]);

        Employee::insert([
            'first_name' => 'Петр',
            'last_name' => 'Петренко',
            'salary' => '5000',
            'company_id' => 2,


        ]);

        Employee::insert([
            'first_name' => 'Александр',
            'last_name' => 'sdfgd',
            'salary' => '5000',
            'company_id' => 3,


        ]);

    }
}
