<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecosTable extends Migration
{
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('estado');      //chave estrangeira
            $table->integer('cidade');      //chave estrangeira
            $table->integer('rua');         //chave estrangeira
            $table->integer('numero');
            $table->string('complemento');
            $table->integer('user_id');     //chave estrangeira
            //Colocar logica das chaves estrangeiras
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
}
