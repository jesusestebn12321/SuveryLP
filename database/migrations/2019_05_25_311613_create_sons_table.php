<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sons', function (Blueprint $table) {
            $table->increments('id');
            $table->date('dateN');
            $table->integer('person_id')->unsigned();
            $table->foreign('person_id')->references('id')
                     ->on('people')
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
        Schema::dropIfExists('sons');
    }
}
