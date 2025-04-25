<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->id('id_guru');
            $table->integer('id_admin');
            $table->string('nama', 100);
            $table->string('nip', 30)->unique();
            $table->string('golongan', 50);
            $table->string('bidang', 100);
            $table->string('no_telp', 15);
            $table->string('foto', 100);
            $table->timestamps();
            
            $table->foreign('id_admin')->references('id')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guru');
    }
}