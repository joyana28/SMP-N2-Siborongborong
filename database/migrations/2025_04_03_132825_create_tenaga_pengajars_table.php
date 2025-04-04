<?php
// 8. Create Tenaga Pengajar Table Migration
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tenaga_pengajars', function (Blueprint $table) {
            $table->id('id_tenagapengajar');
            $table->unsignedBigInteger('id_admin');
            $table->string('nama_kepalasekolah', 100)->notNullable();
            $table->text('deskripsi')->nullable();
            $table->string('golongan', 50)->notNullable();
            $table->string('nama_guru', 100)->notNullable();
            $table->string('bidang', 100)->notNullable();
            $table->timestamps();
            
            $table->foreign('id_admin')->references('id_admin')->on('admins');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tenaga_pengajars');
    }
};