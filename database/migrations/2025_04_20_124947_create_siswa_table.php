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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id('id_kelas');
            $table->unsignedBigInteger('id_admin');
            $table->string('nama_kelas', 50);
            $table->integer('jumlah_siswa');
            $table->integer('jumlah_siswa_L')->comment('Check (>= 0)');
            $table->integer('jumlah_siswa_P')->comment('Check (>= 0)');
            $table->year('tahun');
            $table->text('history')->nullable();
            $table->unsignedBigInteger('wali_kelas_id')->nullable();
            $table->timestamps();

            $table->foreign('id_admin')->references('id_admin')->on('admin');
            $table->foreign('wali_kelas_id')->references('id_guru')->on('guru');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};