<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKedvezmenysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kedvezmenies', function (Blueprint $table) {
            $table->increments('kedvezmeny_id')->start_from(400);
            /* $table->smallIncrements('kedvezmeny_id')->primary(); */
            $table->Integer('kedvezmeny');
            $table->date('mettol');
            $table->date('meddig');
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
        Schema::dropIfExists('kedvezmenys');
    }
}
