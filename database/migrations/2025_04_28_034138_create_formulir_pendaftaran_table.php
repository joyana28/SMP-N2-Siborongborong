<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('formulir_pendaftaran', function (Blueprint $table) {
            $table->increments('id_pendaftaran');
            $table->string('deskripsi', 100);
            $table->string('formulir_pendaftaran', 100);
            $table->date('tanggal_terbit');
            $table->date('tanggal_berakhir');
            $table->unsignedInteger('id_admin');
            $table->foreign('id_admin')->references('id_admin')->on('admin')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('formulir_pendaftaran');
    }
};