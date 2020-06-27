<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUmkmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('umkm', function (Blueprint $table) {
            $table->id();
            $table->string('npwb_usaha',15);
            $table->string('nama_umkm');
            $table->string('email_pemilik');
            $table->string('pemilik');
            $table->string('modal_dasar');
            $table->string('modal_ditampatkan');
            $table->string('alamat');
            $table->string('jenis_kelamin');
            $table->UnsignedBigInteger('penduduk_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('umkm');
    }
}
