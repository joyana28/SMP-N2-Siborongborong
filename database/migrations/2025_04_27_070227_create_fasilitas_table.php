<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('fasilitas', function (Blueprint $table) {
            $table->id('id_fasilitas');
            $table->foreignId('id_admin')
                  ->constrained('admin', 'id_admin')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->string('nama', 100);
            $table->text('deskripsi');
            $table->string('foto', 100);
            $table->string('tahun', 4);
            $table->integer('perhatian_teknis', 100)->nullable();
            $table->integer('penambahan', 100)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fasilitas');
    }
};
