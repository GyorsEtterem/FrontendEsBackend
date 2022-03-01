<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReklamaciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reklamacios', function (Blueprint $table) {
            $table->increments("reklam_id")->start_from(600);
            $table->Integer('termek_id')->unsigned();
            $table->index('termek_id');
            $table->foreign('termek_id')->references('termek_id')->on('nyugtatetels');
            $table->Integer('nyugta')->unsigned();
            $table->index('nyugta');
            $table->foreign('nyugta')->references('nyugta')->on('nyugtatetels');
            $table->char('leiras', 50);
            $table->Integer('menny');
            $table->date('csere_ideje');
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
        Schema::dropIfExists('reklamacios');
    }
}
