<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFasilitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasilitas', function (Blueprint $table) {
            $table->increments('id_fasilitas');
            $table->integer('id_admin')->unsigned()->nullable(false);
            $table->string('nama', 100)->nullable(false);
            $table->text('deskripsi')->nullable(false);
            $table->string('foto', 100)->nullable(false);
            $table->string('tahun', 100)->nullable(false);
            $table->string('kerusakan', 100)->nullable();
            $table->string('penambahan', 100)->nullable();
            $table->timestamps();
            
            // Asumsikan ada tabel admin dengan primary key id_admin
            $table->foreign('id_admin')
                  ->references('id_admin')
                  ->on('admin')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fasilitas');
    }
}