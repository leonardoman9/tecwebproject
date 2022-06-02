<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('users', function (Blueprint $table) {
             $table->bigIncrements('id')->unsigned()->index();
            $table->string('username', 20)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('nome', 30);
            $table->string('cognome', 30)->nullable();
            $table->string('genere', 10)->nullable();
            $table->integer('eta')->nullable();
            $table->string('password');
            $table->string('role',10);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
