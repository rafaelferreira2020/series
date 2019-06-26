<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemporadasTable extends Migration{
    
    public function up(){

        Schema::create('temporadas', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->integer('temporada');
            $table->integer('serie_id')->unsigned();

            $table->foreign('serie_id')
                ->references('id')
                ->on('series');
        });
    }

    public function down(){

        Schema::dropIfExists('temporadas');
    }
}
