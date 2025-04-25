<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEkstrakurikulerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ekstrakurikuler', function (Blueprint $table) {
            $table->increments('id_eskul');
            $table->integer('id_admin')->unsigned();
            $table->string('nama', 100)->nullable(false);
            $table->text('deskripsi')->nullable();
            $table->string('pembina', 100)->nullable(false);
            $table->string('jadwal', 100)->nullable(false);
            $table->string('foto', 100)->nullable(false);
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
        Schema::dropIfExists('ekstrakurikuler');
    }
}