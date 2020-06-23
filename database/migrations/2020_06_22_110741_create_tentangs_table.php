<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTentangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tentang', function (Blueprint $table) {
           $table->id();
           $table->string('nama');
           $table->string('tagline');
           $table->string('alamat');
           $table->string('email');
           $table->string('telp');
           $table->string('kode')->unique();
           $table->text('deskripsi');
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
        Schema::dropIfExists('tentangs');
    }
}
