<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pays', function (Blueprint $table) {
            $table->increments('id');
            $table->string('GC')->unique();
            $table->date('pedido');
            $table->integer('valor');
            $table->integer('person_id')->unsigned();
            $table->foreign('person_id')->references('id')
                     ->on('people')
                     ->onDelete('cascade');
            $table->unsignedInteger('status_id');
            $table->foreign('status_id')->references('id')
                     ->on('status')
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
        Schema::dropIfExists('pays');
    }
}
