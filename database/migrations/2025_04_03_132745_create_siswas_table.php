<?php
// Create Pengumuman Table Migration
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pengumumans', function (Blueprint $table) {
            $table->id('id_pengumuman');
            $table->unsignedBigInteger('id_admin');
            $table->text('isi')->notNullable();
            $table->date('tanggal_terbit')->notNullable();
            $table->timestamps();
            
            $table->foreign('id_admin')->references('id_admin')->on('admins');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengumumans');
    }
};

