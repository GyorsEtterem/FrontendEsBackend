<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNyugtatetelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nyugtatetels', function (Blueprint $table) {
            $table->Integer('nyugta')->unsigned();
            $table->index('nyugta');
            $table->foreign('nyugta')->references('nyugtaszam')->on('nyugtas');
            $table->Integer('termek_id')->unsigned();
            $table->index('termek_id');
            $table->foreign('termek_id')->references('termek_id')->on('termeks');
            $table->boolean('etelAllapot')->default(true);
            $table->timestamp('datumKesz');
            $table->primary(['nyugta','termek_id']);
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
