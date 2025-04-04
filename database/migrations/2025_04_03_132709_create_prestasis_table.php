<?php
// Create Prestasi Table Migration

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('prestasis', function (Blueprint $table) {
            $table->id('id_prestasi');
            $table->unsignedBigInteger('id_admin');
            $table->string('nama', 100)->notNullable();
            $table->date('tanggal')->notNullable();
            $table->text('deskripsi')->nullable();
            $table->timestamps();
            
            $table->foreign('id_admin')->references('id_admin')->on('admins');
        });
    }

    public function down()
    {
        Schema::dropIfExists('prestasis');
    }
};
