<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOsszetevosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('osszetevos', function (Blueprint $table) {
            $table->Integer('termek_id')->unsigned();
            $table->index('termek_id');
            $table->foreign('termek_id')->references('termek_id')->on('termeks');
            $table->Integer('alapa_id')->unsigned();
            $table->index('alapa_id');
            $table->foreign('alapa_id')->references('alapa_id')->on('alapanyags');
            $table->primary(['alapa_id','termek_id']);
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
        Schema::dropIfExists('osszetevos');
    }
}
