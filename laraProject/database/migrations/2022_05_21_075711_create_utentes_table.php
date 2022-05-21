<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utentes', function (Blueprint $table) {
            $table->bigIncrements('id_utente');
            $table->string('username');
            $table->string('password');
            $table->string('indirizzo');
            $table->string('data_di_nascita');
            $table->string('nome');
            $table->string('codice_fiscale');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utentes');
    }
}
