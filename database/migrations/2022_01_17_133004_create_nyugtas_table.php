<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNyugtasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nyugtas', function (Blueprint $table) {
            $table->increments('nyugtaszam')->start_from(500);
            $table->Integer('vegsoOsszeg');
            $table->boolean('fizetesAllapot')->default(true);
            $table->boolean('fizetesMod')->default(true);
            $table->date('datumrend');
            $table->date('datumkifizet');
            $table->char('megjegyzes', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nyugtas');
    }
}
