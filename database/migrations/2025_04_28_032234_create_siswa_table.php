<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->increments('id_siswa');
            $table->string('nama_kelas', 50);
            $table->integer('jumlah_siswa');
            $table->integer('jumlah_siswa_l');
            $table->integer('jumlah_siswa_p');
            $table->year('tahun');
            $table->text('history')->nullable();
            $table->string('wali_kelas', 50)->nullable();
            $table->unsignedInteger('id_admin');
            $table->foreign('id_admin')->references('id_admin')->on('admin')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('siswa');
    }
};