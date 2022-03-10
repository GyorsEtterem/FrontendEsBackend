<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDolgozosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dolgozos', function (Blueprint $table) {
            $table->increments("dolg_id")->start_from(1000);
            $table->char('neve', 50);
            $table->date('szuldatum');
            $table->char('cim', 50);
            $table->char('telefonszam', 11);
            $table->char('email', 50);
            $table->Integer('munkakor_id')->unsigned();
            $table->index('munkakor_id');
            $table->foreign('munkakor_id')->references('munkakor_id')->on('munkakors');
            $table->string('jelszo');
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
        Schema::dropIfExists('dolgozos');
    }
}
