<?php
// Create Siswa Table Migration
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id('id_kelas');
            $table->unsignedBigInteger('id_admin');
            $table->integer('jumlah_siswa')->notNullable();
            $table->string('nama_kelas', 50)->notNullable();
            $table->timestamps();
            
            $table->foreign('id_admin')->references('id_admin')->on('admins');
        });
    }

    public function down()
    {
        Schema::dropIfExists('siswas');
    }
};
