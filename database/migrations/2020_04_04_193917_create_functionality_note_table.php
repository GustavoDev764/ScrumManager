<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFunctionalityNoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('functionality_note', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_functionality');
            $table->longText('description');  
            $table->timestamps();
            $table->foreign('id_functionality')->references('id')->on('functionality');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('functionality_note');
    }
}
