<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersertaPb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('peserta_pb'))return;
        Schema::create('peserta_pb', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tim');
            $table->string('nama_peserta');
            $table->string('npm');
            $table->string('nickname');
            $table->string('no_hp_peserta');
            $table->text('path_foto');
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
        Schema::dropIfExists('peserta_pb');
    }
}
