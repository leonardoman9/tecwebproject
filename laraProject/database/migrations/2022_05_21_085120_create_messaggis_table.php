<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessaggisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messaggis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mittente');
            $table->string('destinatario');
            $table->string('testo');
            $table->timestamp('timestamp')->useCurrent = true;
            $table->integer('id_alloggio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messaggis');
    }
}
