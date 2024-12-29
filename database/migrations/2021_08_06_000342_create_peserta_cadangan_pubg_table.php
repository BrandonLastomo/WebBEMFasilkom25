<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaCadanganPubgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('peserta_cadangan_pubg'))return;
        Schema::create('peserta_cadangan_pubg', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tim');
            $table->string('nama_peserta_cadangan');
            $table->string('nickname_peserta_cadangan');
            $table->string('id_game_peserta_cadangan');
            $table->string('no_hp_peserta_cadangan');
            $table->text('path_foto_peserta_cadangan');
            $table->timestamps();

            $table->foreign('id_tim')->references('id')->on('tim_pubg')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peserta_cadangan_pubg');
    }
}
