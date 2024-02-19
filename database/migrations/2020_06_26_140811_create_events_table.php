<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_about')->unsigned();
            $table->string('nama');
            $table->string('tanggal');
            $table->text('tempat');
            $table->string('penyelenggara');
            $table->text('penjelasan');
            $table->string('gambar')->nullable();
            $table->foreign('id_about')->references('id')->on('abouts');
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
        Schema::dropIfExists('events');
    }
}
