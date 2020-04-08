<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSprintTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sprint', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_priority')->nullable($value = true);
            $table->unsignedBigInteger('id_status')->nullable($value = true);
            $table->string('name');
            $table->date('expires_in');
            $table->timestamps();

            $table->foreign('id_priority')->references('id')->on('priority')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('id_status')->references('id')->on('status')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sprint');
    }
}
