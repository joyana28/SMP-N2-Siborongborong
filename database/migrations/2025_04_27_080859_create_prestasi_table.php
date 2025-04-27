<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('prestasi', function (Blueprint $table) {
            $table->increments('id_prestasi');
            $table->integer('id_admin')->unsigned();
            $table->string('nama', 100);
            $table->text('deskripsi')->nullable();
            $table->date('tanggal');
            $table->enum('jenis', ['akademik', 'non-akademik']);
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
        Schema::dropIfExists('prestasi');
    }
};