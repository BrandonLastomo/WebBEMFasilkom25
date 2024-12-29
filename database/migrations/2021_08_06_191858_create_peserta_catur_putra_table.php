<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaCaturPutraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('peserta_catur_putra'))return;
        Schema::create('peserta_catur_putra', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_turnamen');
            $table->string('nama_peserta');
            $table->string('npm');
            $table->string('nickname');
            $table->string('kelas');
            $table->string('angkatan');
            $table->string('prodi');
            $table->string('no_hp_peserta');
            $table->text('path_foto');
            $table->timestamps();

            $table->foreign('id_turnamen')->references('id')->on('turnamen')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peserta_catur_putra');
    }
}
