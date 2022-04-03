<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NyugtatetelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nyugtatetels')->insert([
            ['termek_id' => '1', 'nyugta' => '701',  'etelAllapot' => false, 'datumKesz' => '2022-03-23'],
            ['termek_id' => '2', 'nyugta' => '702',  'etelAllapot' => false, 'datumKesz' => '2022-03-24'],
            ['termek_id' => '3', 'nyugta' => '703',  'etelAllapot' => true, 'datumKesz' => '2022-03-25'],
            ['termek_id' => '4', 'nyugta' => '704',  'etelAllapot' => true, 'datumKesz' => '2022-03-25']
        ]);
    }
}
