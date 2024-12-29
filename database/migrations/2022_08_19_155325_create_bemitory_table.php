<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBemitoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bemitory', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang');
            $table->string('barang');
            $table->integer('jumlah');
            $table->enum('status_barang',['Tersedia','Kosong'])->default('Tersedia');
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
        Schema::dropIfExists('bemitory');
    }
}
