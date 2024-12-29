<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaMlPutriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('peserta_ml_putri'))return;
        Schema::create('peserta_ml_putri', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tim');
            $table->string('nama_peserta');
            $table->string('npm');
            $table->string('nickname');
            $table->string('id_game');
            $table->string('no_hp_peserta');
            $table->text('path_foto');
            $table->timestamps();

            $table->foreign('id_tim')->references('id')->on('tim_ml_putri')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peserta_ml_putri');
    }
}
