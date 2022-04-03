<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TermekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('termeks')->insert([
            ['fajta' => 'E', 'termeknev' => 'Sajtburger', 'meret' => 'közepes', 'kedvezmeny_id' => 1, 'ar' => 800, 'kep' => 'sajtburger.jpg'],
            ['fajta' => 'I', 'termeknev' => 'Coca Cola', 'meret' => 'közepes', 'kedvezmeny_id' => 1, 'ar' => 350, 'kep' => 'cocacola.jpg'],
            ['fajta' => 'Sz', 'termeknev' => 'Ketchup', 'meret' => 'kicsi', 'kedvezmeny_id' => 1, 'ar' => 80, 'kep' => 'ketchup.jpg'],
            ['fajta' => 'K', 'termeknev' => 'Sültkrumpli', 'meret' => 'közepes', 'kedvezmeny_id' => 1, 'ar' => 250, 'kep' => 'sultkrumpli.jpg'],
            ['fajta' => 'M', 'termeknev' => 'Sajtburger MENÜ', 'meret' => 'nagy', 'kedvezmeny_id' => 1, 'ar' => 1800, 'kep' => 'sajtburgerMenu.jpg']
        ]);
    }
}
