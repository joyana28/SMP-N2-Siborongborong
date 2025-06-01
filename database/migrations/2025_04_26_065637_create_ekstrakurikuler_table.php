<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('ekstrakurikuler', function (Blueprint $table) {
            $table->id('id_ekstrakurikuler');
            $table->foreignId('id_admin')
                  ->constrained('admin', 'id_admin')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->string('nama', 100);
            $table->text('deskripsi')->nullable();
            $table->string('pembina', 100);
            $table->string('jadwal', 100);
            $table->string('foto', 100); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ekstrakurikuler');
    }
};
