<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('fasilitas', function (Blueprint $table) {
            $table->id('id_fasilitas'); // bigint unsigned + auto_increment + primary key
            $table->foreignId('id_admin')
                  ->constrained('admin', 'id_admin')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->string('nama', 100);
            $table->text('deskripsi');
            $table->string('foto', 100);
            $table->string('tahun', 4);
            $table->integer('perhatian_teknis')->nullable(); // tanpa parameter kedua
            $table->integer('penambahan')->nullable(); // tanpa parameter kedua
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fasilitas');
    }
};
