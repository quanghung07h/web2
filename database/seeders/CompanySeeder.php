<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<1000;$i++){
            DB::table('companies')->insert([
                'company_name' => 'hung',
                'company_web' => 'aa',
                'company_address' => 'qh07',
                'company_code' => '113',
                'company_phone' => '818'
            ]);
        }
    }
}
