<?php

// Create Admin Migration
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id('id_admin');
            $table->string('username', 50)->unique();
            $table->string('email', 100)->unique();
            $table->string('password', 255);
            $table->string('nama_lengkap', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('admins');
    }
}

// Create Alumni Migration
class CreateAlumniTable extends Migration
{
    public function up()
    {
        Schema::create('alumni', function (Blueprint $table) {
            $table->id('id_alumni');
            $table->unsignedBigInteger('id_admin');
            $table->string('nama', 100);
            $table->text('deskripsi')->nullable();
            $table->string('foto', 100); // Kolom foto ditambahkan
            $table->timestamps();

            $table->foreign('id_admin')->references('id_admin')->on('admins');
        });
    }

    public function down()
    {
        Schema::dropIfExists('alumni');
    }
}

// Create Formulir Pendaftaran Migration
class CreateFormulirPendaftaranTable extends Migration
{
    public function up()
    {
        Schema::create('formulir_pendaftaran', function (Blueprint $table) {
            $table->id('id_pendaftaran');
            $table->unsignedBigInteger('id_admin');
            $table->string('deskripsi', 100);
            $table->string('formulir_pendaftaran', 100);
            $table->date('tanggal_terbit');
            $table->date('tanggal_berakhir')->nullable();
            $table->timestamps();

            $table->foreign('id_admin')->references('id_admin')->on('admins');
        });
    }

    public function down()
    {
        Schema::dropIfExists('formulir_pendaftaran');
    }
}

// Create Pengumuman Migration
class CreatePengumumanTable extends Migration
{
    public function up()
    {
        Schema::create('pengumuman', function (Blueprint $table) {
            $table->id('id_pengumuman');
            $table->unsignedBigInteger('id_admin');
            $table->string('judul', 100);
            $table->text('isi');
            $table->date('tanggal_terbit');
            $table->date('tanggal_berakhir');
            $table->timestamps();

            $table->foreign('id_admin')->references('id_admin')->on('admins');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengumuman');
    }
}

// Create Ekstrakurikuler Migration
class CreateEkstrakurikulerTable extends Migration
{
    public function up()
    {
        Schema::create('ekstrakurikuler', function (Blueprint $table) {
            $table->id('id_eskul');
            $table->unsignedBigInteger('id_admin');
            $table->string('nama', 100);
            $table->text('deskripsi')->nullable();
            $table->string('pembina', 100);
            $table->string('jadwal', 100);
            $table->string('foto', 100);
            $table->timestamps();

            $table->foreign('id_admin')->references('id_admin')->on('admins')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ekstrakurikuler');
    }
}

// Create Kepala Sekolah Migration
class CreateKepalaSekolahTable extends Migration
{
    public function up()
    {
        Schema::create('kepala_sekolah', function (Blueprint $table) {
            $table->id('id_kepsek');
            $table->unsignedBigInteger('id_admin');
            $table->string('nama', 100);
            $table->string('nip', 50)->unique();
            $table->string('golongan', 50);
            $table->string('periode', 50);
            $table->string('foto', 100);
            $table->timestamps();

            $table->foreign('id_admin')->references('id_admin')->on('admins');
        });
    }

    public function down()
    {
        Schema::dropIfExists('kepala_sekolah');
    }
}

// Create Prestasi Migration
class CreatePrestasiTable extends Migration
{
    public function up()
    {
        Schema::create('prestasi', function (Blueprint $table) {
            $table->id('id_prestasi');
            $table->unsignedBigInteger('id_admin');
            $table->string('nama', 100);
            $table->text('deskripsi')->nullable();
            $table->date('tanggal');
            $table->enum('jenis', ['akademik', 'non-akademik']);
            $table->string('foto', 100); // Kolom foto ditambahkan
            $table->timestamps();

            $table->foreign('id_admin')->references('id_admin')->on('admins');
        });
    }

    public function down()
    {
        Schema::dropIfExists('prestasi');
    }
}

// Create Fasilitas Migration
class CreateFasilitasTable extends Migration
{
    public function up()
    {
        Schema::create('fasilitas', function (Blueprint $table) {
            $table->id('id_fasilitas');
            $table->unsignedBigInteger('id_admin');
            $table->string('nama', 100);
            $table->text('deskripsi');
            $table->string('foto', 100);
            $table->string('tahun', 100);
            $table->string('kerusakan', 100)->nullable();
            $table->string('penambahan', 100)->nullable();
            $table->timestamps();

            $table->foreign('id_admin')->references('id_admin')->on('admins');
        });
    }

    public function down()
    {
        Schema::dropIfExists('fasilitas');
    }
}

// Create Kelas Migration
class CreateKelasTable extends Migration
{
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id('id_kelas');
            $table->unsignedBigInteger('id_admin');
            $table->string('nama_kelas', 50);
            $table->integer('jumlah_siswa');
            $table->integer('jumlah_siswa_L')->check('jumlah_siswa_L >= 0');
            $table->integer('jumlah_siswa_P')->check('jumlah_siswa_P >= 0');
            $table->year('tahun');
            $table->text('history')->nullable();
            $table->unsignedBigInteger('wali_kelas_id');
            $table->timestamps();

            $table->foreign('id_admin')->references('id_admin')->on('admins');
            $table->foreign('wali_kelas_id')->references('id_guru')->on('guru');
        });
    }

    public function down()
    {
        Schema::dropIfExists('kelas');
    }
}

// Create Guru Migration
class CreateGuruTable extends Migration
{
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->id('id_guru');
            $table->unsignedBigInteger('id_admin');
            $table->string('nama', 100);
            $table->string('nip', 50)->unique();
            $table->string('golongan', 50);
            $table->string('bidang', 100);
            $table->string('no_telp', 15);
            $table->string('foto', 100);
            $table->timestamps();

            $table->foreign('id_admin')->references('id_admin')->on('admins');
        });
    }

    public function down()
    {
        Schema::dropIfExists('guru');
    }
}