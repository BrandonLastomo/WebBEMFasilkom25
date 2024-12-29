<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProkerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('proker'))return;
        Schema::create('proker', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_departemen')->nullable();
            $table->string('nama_proker');
            $table->string('slug');
            $table->text('deskripsi')->nullable();
            $table->string('penanggung_jawab')->nullable();
            $table->string('anggaran')->nullable();
            $table->integer('status')->nullable();
            $table->integer('triwulan')->nullable();
            $table->timestamps();

            $table->foreign('id_departemen')->references('id')->on('departemen')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proker');
    }
}
