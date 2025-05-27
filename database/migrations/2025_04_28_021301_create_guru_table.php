<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->id('id_guru');
            $table->foreignId('id_admin')
                  ->constrained('admin', 'id_admin')
                  ->onDelete('cascade');
            $table->string('nama', 100);
            $table->string('nip', 20);
            $table->string('golongan', 50);
            $table->string('bidang', 100);
            $table->string('no_telp', 15);
            $table->string('foto', 100)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('guru');
    }
};
