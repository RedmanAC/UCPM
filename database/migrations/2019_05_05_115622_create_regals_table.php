<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regals', function (Blueprint $table) {
            $table->Increments('id');
            $table->enum('Etage', ['1','2','3']);
            $table->enum('Platz',['1','2','3','4','5','6','7','8','9','10']);
			$table->Integer('ProduktID')->unsigned();
            $table->foreign('ProduktID')->references('id')->on('produkts');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regals');
    }
}
