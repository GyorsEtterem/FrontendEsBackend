<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DolgozoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dolgozos')->insert([
            ['neve' =>'Kiss József', 'szuldatum' =>'2000-03-01', 'cim' =>'Kadarkút', 'telefonszam' =>'06502345012', 'email' =>'kj@gmail.com', 'munkakor_id' => 1, 'jelszo' =>'jelszo'],
            ['neve' =>'Nagy Béla', 'szuldatum' =>'1989-05-12', 'cim' =>'Budapest', 'telefonszam' =>'06502345963', 'email' =>'nb@gmail.com', 'munkakor_id' => 2, 'jelszo' =>'jelszo'],
            ['neve' =>'Szabó Levente', 'szuldatum' =>'1998-11-11', 'cim' =>'Kaposvár', 'telefonszam' =>'06502342222', 'email' =>'szl@gmail.com', 'munkakor_id' => 3, 'jelszo' =>'jelszo']
        ]);
    }
}
