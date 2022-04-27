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
            ['neve' => 'Kiss József', 'szuldatum' => '2000-03-01', 'cim' => 'Kadarkút', 'telefonszam' => '06502345012', 'email' => 'kj@gmail.com', 'munkakor_id' => 1, 'jelszo' => bcrypt('jelszo')],
            ['neve' => 'Nagy Béla', 'szuldatum' => '1989-05-12', 'cim' => 'Budapest', 'telefonszam' => '06502345963', 'email' => 'nb@gmail.com', 'munkakor_id' => 2, 'jelszo' => bcrypt('jelszo')],
            ['neve' => 'Szabó Anna', 'szuldatum' => '1981-05-02', 'cim' => 'Érd', 'telefonszam' => '062002311963', 'email' => 'sza@gmail.com', 'munkakor_id' => 2, 'jelszo' => bcrypt('jelszo')],
            ['neve' => 'Tóth Nóra', 'szuldatum' => '1999-07-12', 'cim' => 'Szeged', 'telefonszam' => '06702345933', 'email' => 'tn@gmail.com', 'munkakor_id' => 2, 'jelszo' => bcrypt('jelszo')],
            ['neve' => 'Kovács Lilla', 'szuldatum' => '2001-05-19', 'cim' => 'Pécs', 'telefonszam' => '063002399963', 'email' => 'kl@gmail.com', 'munkakor_id' => 2, 'jelszo' => bcrypt('jelszo')],
            ['neve' => 'Szabó Levente', 'szuldatum' => '1996-11-11', 'cim' => 'Kaposvár', 'telefonszam' => '06502342222', 'email' => 'szl@gmail.com', 'munkakor_id' => 2, 'jelszo' => bcrypt('jelszo')]
        ]);
    }
}
