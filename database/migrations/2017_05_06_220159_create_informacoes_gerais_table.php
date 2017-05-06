<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformacoesGeraisTable extends Migration
{
    public function up()
    {
        Schema::create('informacoes_gerais', function (Blueprint $table){
            $table->increments('id');
            $table->string('sexo');
            $table->integer('naturalidade');
            $table->string('hobbies');
            $table->string('about_you');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('informacoes_gerais');
    }
}
