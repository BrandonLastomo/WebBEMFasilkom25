<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaMc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('peserta_mc'))return;
        Schema::create('peserta_mc', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_turnamen');
            $table->string('nama_peserta');
            $table->string('npm');
            $table->string('nickname');
            $table->string('id_game');
            $table->string('kelas');
            $table->string('angkatan');
            $table->string('prodi');
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
        Schema::dropIfExists('peserta_mc');
    }
}
