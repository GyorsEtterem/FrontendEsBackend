<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuosszeallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menuosszealls', function (Blueprint $table) {
            $table->Integer("menu_id")->unsigned();
            $table->index('menu_id');
            $table->foreign('menu_id')->references('termek_id')->on('termeks');
            $table->Integer("termek_id")->unsigned();
            $table->index('termek_id');
            $table->foreign('termek_id')->references('termek_id')->on('termeks');
            $table->primary(['menu_id','termek_id']);
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
        Schema::dropIfExists('menuosszealls');
    }
}
