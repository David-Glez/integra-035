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
        Schema::create('usuario', function (Blueprint $table) {
            $table->bigIncrements('idUsuario')->unique();
            $table->string('usuario');
            //$table->string('role')->default(4);
            //$table->string('email')->unique();
            //$table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        /*Schema::create('usuario', function (Blueprint $table) {
            $table->integer('idUsuario')->unique();
            $table->string('usuario')->unique();
            //$table->string('role')->default(4);
            //$table->string('email')->unique();
            //$table->timestamp('email_verified_at')->nullable();
            $table->string('contrasena');
            $table->boolean('estado');
            $table->rememberToken();
            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
