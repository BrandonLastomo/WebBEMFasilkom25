<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMabaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('maba'))return;
        Schema::create('maba', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('prodi');
            $table->string('nama_kelompok')->nullable();
            $table->string('absen_hari_pertama')->nullable();
            $table->text('foto_hari_pertama')->nullable();
            $table->string('absen_hari_kedua')->nullable();
            $table->text('foto_hari_kedua')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('maba');
    }
}
