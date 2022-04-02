<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KedvezmenySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kedvezmenies')->insert([
            ['kedvezmeny' =>0, 'mettol' =>'2021-01-01', 'meddig' =>'2023-01-01'],
            ['kedvezmeny' =>5, 'mettol' =>'2021-01-01', 'meddig' =>'2023-01-01'],
            ['kedvezmeny' =>10, 'mettol' =>'2021-01-01', 'meddig' =>'2023-01-01']
        ]);
    }
}
