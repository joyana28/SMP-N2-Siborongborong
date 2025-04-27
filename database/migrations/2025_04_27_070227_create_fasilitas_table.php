<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('fasilitas', function (Blueprint $table) {
            $table->increments('id_fasilitas');
            $table->integer('id_admin')->unsigned();
            $table->string('nama', 100);
            $table->text('deskripsi');
            $table->string('foto', 100);
            $table->string('tahun', 100);
            $table->string('perhatian_teknis', 100)->nullable();
            $table->string('penambahan', 100)->nullable();
            $table->timestamps();
            
            $table->foreign('id_admin')
                  ->references('id_admin')
                  ->on('admin')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('fasilitas');
    }
};