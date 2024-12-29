<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTugasKelompokMabaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('tugas_kelompok_maba'))return;
        Schema::create('tugas_kelompok_maba', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kelompok')->nullable();
            $table->string('link_video')->nullable();
            $table->text('nama_anggota')->nullable();
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
        Schema::dropIfExists('tugas_kelompok_maba');
    }
}
