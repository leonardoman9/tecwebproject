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
            //$table->integer('tipologia')->nullable();       0 = posto letto, 1 = appartamento
            $table->date('data_inserimento');
            $table->integer('canone');
            $table->integer('dimensione');
            $table->string('citta');
            $table->string('indirizzo');
            $table->date('data_inizio_locazione');
            $table->date('data_fine_locazione');
            $table->integer('numero_camere')->nullable();             //per appartamento
            $table->integer('numero_posto_letto_totale')->nullable(); //posti letto totale alloggio
            $table->integer('numero_letti_nella_camera')->nullable(); //per i posti letto
            $table->string('descrizione');
            $table->string('etat');
            $table->timestamp('timestamp')->useCurrent = true;
           // $table->string('added_by');

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
