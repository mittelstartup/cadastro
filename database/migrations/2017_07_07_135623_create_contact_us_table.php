<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactUsTable extends Migration
{
    public function up()
    {
        Schema::create('contact_us', function (Blueprint $table) {

            $table->increments('id');

            $table->string('contact_name');

            $table->string('contact_email');

            $table->string('contact_phone', 25);

            $table->text('contact_message');

            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('contact_us');
    }
}
