<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimPb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('tim_pb'))return;
        Schema::create('tim_pb', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_turnamen');
            $table->string('nama_tim');
            $table->string('nama_ketua_tim');
            $table->string('no_hp');
            $table->string('angkatan');
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
        Schema::dropIfExists('tim_pb');
    }
}
