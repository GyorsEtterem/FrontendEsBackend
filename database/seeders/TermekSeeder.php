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
            ['fajta' => 'B', 'termeknev' => 'Sajtburger', 'meret' => 'közepes', 'kedvezmeny_id' => 1, 'ar' => 800, 'kep' => 'sajtburger.jpg'],
            ['fajta' => 'B', 'termeknev' => 'Chiliburger', 'meret' => 'közepes', 'kedvezmeny_id' => 1, 'ar' => 950, 'kep' => 'chiliburger.jpg'],
            ['fajta' => 'B', 'termeknev' => 'Csirkeburger', 'meret' => 'közepes', 'kedvezmeny_id' => 1, 'ar' => 800, 'kep' => 'csirkeburger.jpg'],
            ['fajta' => 'B', 'termeknev' => 'Dupla Sajtburger', 'meret' => 'nagy', 'kedvezmeny_id' => 1, 'ar' => 1200, 'kep' => 'duplasajtburger.jpg'],
            ['fajta' => 'K', 'termeknev' => 'Sült burgonya', 'meret' => 'közepes', 'kedvezmeny_id' => 1, 'ar' => 250, 'kep' => 'sultkrumpli.jpg'],
            ['fajta' => 'K', 'termeknev' => 'Édes burgonya', 'meret' => 'közepes', 'kedvezmeny_id' => 1, 'ar' => 300, 'kep' => 'edeskrumpli.jpg'],
            ['fajta' => 'K', 'termeknev' => 'Steak burgonya', 'meret' => 'közepes', 'kedvezmeny_id' => 1, 'ar' => 300, 'kep' => 'steakkrumpli.jpg'],
            ['fajta' => 'I', 'termeknev' => 'Coca Cola', 'meret' => 'közepes', 'kedvezmeny_id' => 1, 'ar' => 350, 'kep' => 'cocacola.jpg'],
            ['fajta' => 'I', 'termeknev' => 'Coca Cola Zero', 'meret' => 'közepes', 'kedvezmeny_id' => 1, 'ar' => 350, 'kep' => 'cocacolazero.jpg'],
            ['fajta' => 'I', 'termeknev' => 'Fanta', 'meret' => 'közepes', 'kedvezmeny_id' => 1, 'ar' => 350, 'kep' => 'fanta.jpg'],
            ['fajta' => 'D', 'termeknev' => 'Csokoládétorta', 'meret' => 'közepes', 'kedvezmeny_id' => 1, 'ar' => 800, 'kep' => 'csokiTorta.jpg'],
            ['fajta' => 'D', 'termeknev' => 'Sajttorta', 'meret' => 'közepes', 'kedvezmeny_id' => 1, 'ar' => 800, 'kep' => 'sajtTorta.jpg'],
            ['fajta' => 'D', 'termeknev' => 'Fagylalt', 'meret' => 'közepes', 'kedvezmeny_id' => 1, 'ar' => 800, 'kep' => 'fagylalt.jpg'],
            ['fajta' => 'D', 'termeknev' => 'Palacsinta', 'meret' => 'közepes', 'kedvezmeny_id' => 1, 'ar' => 800, 'kep' => 'palacsinta.jpg'],
            ['fajta' => 'SZ', 'termeknev' => 'Ketchup', 'meret' => 'kicsi', 'kedvezmeny_id' => 1, 'ar' => 80, 'kep' => 'ketchup.jpg'],
            ['fajta' => 'SZ', 'termeknev' => 'Majonéz', 'meret' => 'kicsi', 'kedvezmeny_id' => 1, 'ar' => 80, 'kep' => 'majonez.jpg'],
            ['fajta' => 'SZ', 'termeknev' => 'Mustár', 'meret' => 'kicsi', 'kedvezmeny_id' => 1, 'ar' => 80, 'kep' => 'mustar.jpg'],
            ['fajta' => 'SZ', 'termeknev' => 'BBQ', 'meret' => 'kicsi', 'kedvezmeny_id' => 1, 'ar' => 100, 'kep' => 'bbq.jpg'],
            ['fajta' => 'M', 'termeknev' => 'Sajtburger MENÜ', 'meret' => 'nagy', 'kedvezmeny_id' => 1, 'ar' => 1800, 'kep' => 'sajtburgerMenu.jpg'],
            ['fajta' => 'M', 'termeknev' => 'Csirkeburger MENÜ', 'meret' => 'nagy', 'kedvezmeny_id' => 1, 'ar' => 1800, 'kep' => 'csirkeburgerMenu.jpg'],
            ['fajta' => 'M', 'termeknev' => 'Gyerek MENÜ', 'meret' => 'nagy', 'kedvezmeny_id' => 1, 'ar' => 1200, 'kep' => 'gyerekMenu.jpg']
        ]);
    }
}
