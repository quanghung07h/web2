<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<1000000;$i++){
            DB::table('trainer')->insert([
                'train_name' => 'hihi',
                'train_wed' => 'haha',
                'train_email' => 'huhu',
                'train_phone' => '345678'
            ]);
        }
    }
}
