<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pengumuman', function (Blueprint $table) {
            $table->increments('id_pengumuman');
            $table->integer('id_admin')->unsigned();
            $table->string('judul', 100);
            $table->text('isi');
            $table->date('tanggal_terbit');
            $table->date('tanggal_berakhir');
            $table->string('foto', 100)->nullable();
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
        Schema::dropIfExists('pengumuman');
    }
};