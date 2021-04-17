<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJornadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jornadas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('id_equipo_local1')->unsigned();
            $table->foreign('id_equipo_local1')->references('id')->on('equipos');

            $table->bigInteger('id_equipo_visitante1')->unsigned();
            $table->foreign('id_equipo_visitante1')->references('id')->on('equipos');

            $table->integer('resultado1')->nullable();

            $table->bigInteger('id_equipo_local2')->unsigned();
            $table->foreign('id_equipo_local2')->references('id')->on('equipos');

            $table->bigInteger('id_equipo_visitante2')->unsigned();
            $table->foreign('id_equipo_visitante2')->references('id')->on('equipos');

            $table->integer('resultado2')->nullable();
            
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
        Schema::dropIfExists('jornadas');
    }
}
