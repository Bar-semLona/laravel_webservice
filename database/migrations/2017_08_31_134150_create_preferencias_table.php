<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreferenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preferencias', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idUsuario')->unsigned();
            $table->foreign('idUsuario')
            ->references('id')->on('users')
            ->onDelete('cascade');

            $table->integer('idCategoria')->unsigned();
            $table->foreign('idCategoria')
            ->references('id')->on('categorias')
            ->onDelete('cascade');

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
        Schema::dropIfExists('preferencias');
    }
}
