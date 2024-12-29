<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('report'))return;
        Schema::create('report', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('slug');
            $table->text('path')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('kategori');
            $table->integer('status');
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
        Schema::dropIfExists('report');
    }
}
