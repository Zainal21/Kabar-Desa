<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendudukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->id();
            $table->string('NIK',16);
            $table->string('Nama_penduduk',30);
            $table->date('tanggal_lahir');
            $table->unsignedBigInteger('pekerjaan_id');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('Status_Kawin');
            $table->string('agama');
            $table->string('alamat');
            $table->timestamps();
        });
        Schema::table('penduduk', function (Blueprint $table) {
            $table->foreign('pekerjaan_id')->references('id')->on('pekerjaan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penduduk');
    }
}
