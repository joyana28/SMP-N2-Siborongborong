<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kepala_sekolah', function (Blueprint $table) {
            $table->id('id_kepsek');
            $table->unsignedBigInteger('id_admin');
            $table->string('nama', 100);
            $table->string('nip', 50)->unique();
            $table->string('golongan', 50);
            $table->string('periode', 50);
            $table->string('foto', 100);
            $table->timestamps();

            $table->foreign('id_admin')->references('id_admin')->on('admin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kepala_sekolah');
    }
};