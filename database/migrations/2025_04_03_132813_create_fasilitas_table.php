<?php
// Create Fasilitas Table Migration

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('fasilitas', function (Blueprint $table) {
            $table->id('id_fasilitas');
            $table->unsignedBigInteger('id_admin');
            $table->string('nama', 100)->notNullable();
            $table->text('deskripsi')->nullable();
            $table->timestamps();
            
            $table->foreign('id_admin')->references('id_admin')->on('admins');
        });
    }

    public function down()
    {
        Schema::dropIfExists('fasilitas');
    }
};
