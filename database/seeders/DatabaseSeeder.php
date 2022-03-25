<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([AlapanyagSeeder::class]);
        $this->call([MunkakorSeeder::class]);
        $this->call([DolgozoSeeder::class]);
        $this->call([KedvezmenySeeder::class]);
        $this->call([TermekSeeder::class]);
        $this->call([OsszetevoSeeder::class]);
        $this->call([MenuosszeallSeeder::class]);
    }
}
