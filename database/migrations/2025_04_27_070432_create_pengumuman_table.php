<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pengumuman', function (Blueprint $table) {
            $table->id('id_pengumuman');
            $table->foreignId('id_admin')
                  ->constrained('admin', 'id_admin')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->string('judul', 100);
            $table->text('isi');
            $table->date('tanggal_terbit');
            $table->date('tanggal_berakhir');
            $table->string('foto', 100)->nullable();
            $table->string('lampiran')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengumuman');
    }
};
