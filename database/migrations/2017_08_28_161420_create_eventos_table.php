<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUsuarioCriacao')->unsigned();
            $table->foreign('idUsuarioCriacao')
            ->references('id')->on('users')
            ->onDelete('cascade');
            
            $table->string('name', 100);
            $table->text('descEvento');
            $table->string('site', 100);
            $table->string('facebook', 200);
            $table->string('instagram', 200);
            $table->datetime('dataInicial');
            $table->datetime('dataFinal');
            $table->string('CEP', 10);
            $table->string('endereco', 100);
            $table->string('numeroEndereco', 10);
            $table->string('complemento', 100);
            $table->string('bairro', 50);
            $table->string('cidade', 50);
            $table->char('UF', 2);
            $table->string('faixaEtaria', 20);
            $table->integer('like');
            $table->integer('deslike');
            $table->binary('img');
            $table->boolean('ativo');
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
        Schema::dropIfExists('eventos');
    }
}
