<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();
           
            $table->string('password');
            $table->boolean('working');
            $table->date('brith');
            $table->string('last_login');
            $table->string('code')->unique();
            $table->string('seregins')->unique();
            $table->string('cookies')->unique();
            // exposa
            $table->unsignedInteger('email_id');
            $table->foreign('email_id')->references('id')
                     ->on('emails');

            $table->unsignedInteger('status_id');
            $table->foreign('status_id')->references('id')
                     ->on('status');
            // address
            $table->unsignedInteger('street_id');
            $table->foreign('street_id')->references('id')
                     ->on('streets')
                     ->onDelete('cascade');
            // gender
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
        Schema::dropIfExists('people');
    }
}
