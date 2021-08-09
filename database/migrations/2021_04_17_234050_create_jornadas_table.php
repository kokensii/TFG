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
        Schema::create('rounds', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('id_home_team')->unsigned();
            $table->foreign('id_home_team')->references('id')->on('teams')->onDelete('cascade');

            $table->bigInteger('id_away_team')->unsigned();
            $table->foreign('id_away_team')->references('id')->on('teams')->onDelete('cascade');

            $table->integer('result')->nullable();

            /*$table->bigInteger('id_equipo_local2')->unsigned();
            $table->foreign('id_equipo_local2')->references('id')->on('teams')->onDelete('cascade');

            $table->bigInteger('id_equipo_visitante2')->unsigned();
            $table->foreign('id_equipo_visitante2')->references('id')->on('teams')->onDelete('cascade');

            $table->integer('resultado2')->nullable();*/
            
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
        Schema::dropIfExists('rounds');
    }
}
