<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunkakorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('munkakors')->insert([
            ['megnevezes' =>'Konyhás'],
            ['megnevezes' =>'Pénztáros'],
            ['megnevezes' =>'Manager']
        ]);
    }
}
