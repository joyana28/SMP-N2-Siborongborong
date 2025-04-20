<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('fasilitas', function (Blueprint $table) {
        $table->id();
        $table->string('nama_fasilitas');
        $table->text('deskripsi')->nullable();
        $table->string('gambar')->nullable(); // opsional jika ingin menampilkan gambar
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fasilitas');
    }
};
