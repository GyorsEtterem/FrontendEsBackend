<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArvaltozasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arvaltozas', function (Blueprint $table) {
            $table->Integer('termek_id')->unsigned();
            $table->index('termek_id');
            $table->foreign('termek_id')->references('termek_id')->on('termeks');
            $table->date('datum');
            $table->Integer('regiar');
            $table->primary(['datum','termek_id']);
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
        Schema::dropIfExists('arvaltozas');
    }
}
