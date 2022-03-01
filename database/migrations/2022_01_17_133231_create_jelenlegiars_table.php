<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJelenlegiarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jelenlegiars', function (Blueprint $table) {
            $table->index('termek_id');
            $table->primary('termek_id');
            $table->Integer('termek_id')->unsigned();
            $table->foreign('termek_id')->references('termek_id')->on('termeks');
            $table->Integer('ar');
            $table->index('kedvezmeny_id');
            $table->Integer('kedvezmeny_id')->unsigned();
            $table->foreign('kedvezmeny_id')->references('kedvezmeny_id')->on('kedvezmenyes');
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
        Schema::dropIfExists('jelenlegiars');
    }
}
