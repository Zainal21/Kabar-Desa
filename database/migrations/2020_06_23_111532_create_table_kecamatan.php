<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKecamatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kecamatan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kecamatan');
            $table->unsignedBigInteger('kabupaten_id');
            $table->timestamps();
        });
        Schema::table('kecamatan', function (Blueprint $table) {
            $table->foreign('kabupaten_id')->references('id')->on('kabupaten')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_kecamatan');
    }
}
