<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTugasIndividuMabaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('tugas_individu_maba'))return;
        Schema::create('tugas_individu_maba', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap')->nullable();
            $table->string('nama_kelompok_individu')->nullable();
            $table->string('prodi')->nullable();
            $table->string('link_video_individu')->nullable();
            $table->unsignedBigInteger('id_maba');
            $table->timestamps();

            $table->foreign('id_maba')->references('id')->on('maba')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tugas_individu_maba');
    }
}
