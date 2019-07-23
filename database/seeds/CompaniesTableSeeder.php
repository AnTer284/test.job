<?php


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Company;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::insert([
            'company_name' => 'intel',
            'company_category' => 'computers',
            'company_description' => 'world largest company of producing electronics',

        ]);

        Company::insert([
            'company_name' => 'apple',
            'company_category' => 'computers',
            'company_description' => 'world largest company of producing electronics',

        ]);

        Company::insert([
            'company_name' => 'amd',
            'company_category' => 'computers',
            'company_description' => 'world largest company of producing electronics',

        ]);
    }
}
