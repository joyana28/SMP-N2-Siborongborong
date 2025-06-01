<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('alumni', function (Blueprint $table) {
            $table->id('id_alumni');
            $table->foreignId('id_admin')
                  ->constrained('admin', 'id_admin')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->string('nama', 100);
            $table->text('deskripsi')->nullable();
            $table->year('tahun_lulus');
            $table->string('foto', 100)->nullable();
            $table->timestamps();
        });
    }        

    public function down()
    {
        Schema::dropIfExists('alumni');
    }
};