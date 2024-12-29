<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersertaCadanganPb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('peserta_cadangan_pb'))return;
        Schema::create('peserta_cadangan_pb', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tim');
            $table->string('nama_peserta_cadangan');
            $table->string('npm_peserta_cadangan');
            $table->string('nickname_peserta_cadangan');
            $table->string('no_hp_peserta_cadangan');
            $table->text('path_foto_peserta_cadangan');
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
        Schema::dropIfExists('peserta_cadangan_pb');
    }
}
