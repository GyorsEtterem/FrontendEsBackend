<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTermeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('termeks', function (Blueprint $table) {
            //unsignedBigInteger
            $table->increments('termek_id')->start_from(100);
            $table->char('fajta', 2);
            $table->char('termeknev', 30);
            $table->boolean('eladhato')->default(true);
            $table->boolean('raktaron')->default(true);
            $table->char('meret', 8);
            $table->Integer('kedvezmeny_id')->unsigned();
            $table->index('kedvezmeny_id');
            $table->foreign('kedvezmeny_id')->references('kedvezmeny_id')->on('kedvezmenyes');
            $table->Integer('ar');
            $table->char('kep',35);
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
        Schema::dropIfExists('termeks');
    }
}
