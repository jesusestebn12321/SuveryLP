<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();
            $table->string('email')->unique();
            $table->string('name');
            $table->string('lastname');
            $table->string('password');
            $table->date('brith');


            $table->unsignedInteger('status_id');
            $table->foreign('status_id')->references('id')
                     ->on('status');

            $table->unsignedInteger('gender_id');
            $table->foreign('gender_id')->references('id')
                     ->on('genders')
                     ->onDelete('cascade');

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
        Schema::dropIfExists('emails');
    }
}
