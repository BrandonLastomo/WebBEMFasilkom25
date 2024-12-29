<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimMlUmumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('tim_ml_umum'))return;
        Schema::create('tim_ml_umum', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_turnamen');
            $table->string('nama_tim');
            $table->string('nama_ketua_tim');
            $table->string('no_hp');
            $table->text('path_bukti_pembayaran');
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
        Schema::dropIfExists('tim_ml_umum');
    }
}
