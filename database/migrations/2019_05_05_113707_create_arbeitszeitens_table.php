<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class CreateArbeitszeitensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arbeitszeitens', function (Blueprint $table) {
            $table->Increments('id')->AutoIncrement();
            $table->timestamp('von')->default(Carbon::now());
            $table->timestamp('bis')->default(Carbon::now());
            $table->timestamp('pause')->default(Carbon::now());
            $table->string('MitarbeiterNr');
			$table->foreign('MitarbeiterNr')->references('id')->on('mitarbeiters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arbeitszeitens');
    }
}
