<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartemenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('departemen'))return;
        Schema::create('departemen', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('slug');
            $table->unsignedBigInteger('id_bidang');
            $table->text('deskripsi')->nullable();
            $table->timestamps();

            $table->foreign('id_bidang')->references('id')->on('bidang')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departemen');
    }
}
