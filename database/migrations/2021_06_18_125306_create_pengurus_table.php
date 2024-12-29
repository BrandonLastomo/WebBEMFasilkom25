<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('pengurus'))return;
        Schema::create('pengurus', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jabatan')->nullable();
            $table->unsignedBigInteger('id_bidang')->nullable();
            $table->unsignedBigInteger('id_departemen')->nullable();
            $table->string('npm')->nullable();
            $table->string('no_hp')->nullable();
            $table->timestamps();

            $table->foreign('id_bidang')->references('id')->on('bidang')->onDelete('cascade');
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
        Schema::dropIfExists('pengurus');
    }
}
