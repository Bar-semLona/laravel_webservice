<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name', 100);
            $table->string('email', 100)->unique();
            $table->string('password', 100);
            $table->string('api_token', 60)->unique();
            $table->datetime('dataDeNascimento');
            $table->string('facebook', 200);
            $table->string('instagram', 200);
            $table->string('CEP', 10);
            $table->string('endereco', 100);
            $table->string('numeroEndereco', 10);
            $table->string('complemento', 100);
            $table->string('bairro', 50);
            $table->string('cidade', 50);
            $table->char('UF', 2);
            $table->string('numeroCelular', 14);
            $table->binary('img');
            $table->boolean('ativo');
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
