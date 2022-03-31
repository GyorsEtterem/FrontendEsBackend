<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NyugtaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nyugtas')->insert([
            ['nyugtaszam' =>'700', 'vegsoOsszeg' => 5 , 'fizetesAllapot' => true, 'fizetesMod' => true,'datumrend' =>'2022-03-23','datumkifizet' =>'2022-03-23',  'megjegyzes' =>'nincs'],
            ['nyugtaszam' =>'701', 'vegsoOsszeg' => 5 , 'fizetesAllapot' => true, 'fizetesMod' => false,'datumrend' =>'2022-03-23','datumkifizet' =>'2022-03-23', 'megjegyzes' => 'nincs'],
            ['nyugtaszam' =>'702', 'vegsoOsszeg' => 3 , 'fizetesAllapot' => true, 'fizetesMod' => true,'datumrend' =>'2022-03-24', 'datumkifizet' =>'2022-03-24',  'megjegyzes' =>'nincs'],
            ['nyugtaszam' =>'703', 'vegsoOsszeg' => 1 , 'fizetesAllapot' => true, 'fizetesMod' => false,'datumrend' =>'2022-03-25','datumkifizet' =>'2022-03-25',  'megjegyzes' =>'nincs'],
            ['nyugtaszam' =>'704', 'vegsoOsszeg' => 2 , 'fizetesAllapot' => true, 'fizetesMod' => true,'datumrend' =>'2022-03-25','datumkifizet' =>'2022-03-25',  'megjegyzes' =>'nincs']
        ]);
    }
}
