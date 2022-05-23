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
            $table->integer('tipologia');      // 0 = posto letto, 1 = appartamento
            $table->string('data_inserimento');
            $table->integer('canone');
            $table->integer('dimensione');
            $table->string('indirizzo');
            $table->string('periodo_di_locazione');
            $table->integer('numero_posto_letto_totale');
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
