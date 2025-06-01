<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('kepala_sekolah', function (Blueprint $table) {
            $table->id('id_kepsek');
            $table->foreignId('id_admin')
                  ->constrained('admin', 'id_admin')
                  ->onDelete('cascade');
            $table->string('nama', 100);
            $table->unsignedBigInteger('nip')->unique();
            $table->string('golongan', 50);
            $table->string('periode', 50);
            $table->string('foto', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kepala_sekolah');
    }
};
