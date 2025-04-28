<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->increments('id_guru');
            $table->unsignedInteger('id_admin');
            $table->string('nama', 100);
            $table->string('nip', 50);
            $table->string('golongan', 50);
            $table->string('bidang', 100);
            $table->string('no_telp', 15);
            $table->string('foto', 100)->nullable();
            $table->timestamps();
            
            $table->foreign('id_admin')->references('id_admin')->on('admin')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('guru');
    }
};