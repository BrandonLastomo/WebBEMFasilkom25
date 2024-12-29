<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaCadanganDotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('peserta_cadangan_dota'))return;
        Schema::create('peserta_cadangan_dota', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tim');
            $table->string('nama_peserta_cadangan');
            $table->string('npm_peserta_cadangan');
            $table->string('link_steam_peserta_cadangan');
            $table->string('id_game_peserta_cadangan');
            $table->string('no_hp_peserta_cadangan');
            $table->text('path_foto_peserta_cadangan');
            $table->timestamps();

            $table->foreign('id_tim')->references('id')->on('tim_dota')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peserta_cadangan_dota');
    }
}
