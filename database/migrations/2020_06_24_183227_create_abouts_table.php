<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('gambar')->nullable();
            $table->text('penjelasan');
            $table->string('jarak');
            $table->string('alamat');
            $table->string('lat');
            $table->string('lng');
            $table->bigInteger('id_genre')->unsigned();
            $table->foreign('id_genre')->references('id')->on('genres');
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
        Schema::dropIfExists('abouts');
    }
}
