<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlloggiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alloggios', function (Blueprint $table) {
            $table->bigIncrements('id_alloggio');
            $table->timestamps();
            $table->string('appartamento');
            $table->string('posto_letto');
            $table->string('indirizzo');
            $table->string('data_inserimento');
            $table->string('canone');
            $table->string('dimensione');
            $table->string('periodo_di_locazione');
            $table->string('numero_posto_letto_totale');
            $table->string('descrizione');
            $table->string('etat');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alloggios');
    }
}
