<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriaMapasTable extends Migration
{
    
    public function up()
    {
        Schema::create('categoria_mapas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('descricao');
            $table->timestamps();
        });
    }

        public function down()
        {
         Schema::dropIfExists('categoria_mapas');
        }

        

}
