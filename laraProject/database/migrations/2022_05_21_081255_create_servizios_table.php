<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiziosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servizios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_alloggio');
            $table->boolean('cucina');
            $table->boolean('localeRicreativo');
            $table->boolean('angoloStudio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servizios');
    }
}
