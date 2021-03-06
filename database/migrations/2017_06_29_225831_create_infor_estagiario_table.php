<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInforEstagiarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_estagiario', function (Blueprint $table){
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('instituicao');
            $table->string('curso');
            $table->string('telefone');
            $table->string('cidade');
            $table->string('bairro');
            $table->string('rua')->nullable('true');
            $table->string('numero')->nullable('true');
            $table->string('cpf')->unique();
            $table->text('disponibilidade');
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
        //
    }
}
