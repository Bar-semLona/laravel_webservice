<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentarioEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentario_eventos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idUsuario')->unsigned();
            $table->foreign('idUsuario')
            ->references('id')->on('users')
            ->onDelete('cascade');

            $table->integer('idEvento')->unsigned();
            $table->foreign('idEvento')
            ->references('id')->on('eventos')
            ->onDelete('cascade');

            $table->string('tituloComentario', 250);
            $table->text('comentario');
            $table->integer('like');
            $table->integer('deslike');
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
        Schema::dropIfExists('comentario_eventos');
    }
}
