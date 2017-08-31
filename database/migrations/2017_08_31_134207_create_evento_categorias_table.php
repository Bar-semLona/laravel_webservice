<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventoCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento_categorias', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idEvento')->unsigned();
            $table->foreign('idEvento')
            ->references('id')->on('eventos')
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
        Schema::dropIfExists('evento_categorias');
    }
}
