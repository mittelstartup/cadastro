<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadosTable extends Migration
{
    public function up()
    {
        Schema::create('estados', function (Blueprint $table){
            $table->increments('id');
            $table->string('nome');
        });
    }

    public function down()
    {
        Schema::dropIfExists('estados');
    }
}
