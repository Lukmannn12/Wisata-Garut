<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWisatasTable extends Migration
{
    public function up()
    {
        Schema::create('wisatas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_wisata');
            $table->unsignedBigInteger('id_kecamatan');
            $table->text('sejarah');
            $table->text('deskripsi');
            $table->text('fasilitas');
            $table->text('lokasi');
            $table->string('harga_tiket');
            $table->string('gambar');
            $table->unsignedBigInteger('id_user');
            $table->timestamps();
            $table->softDeletes();


        });
    }

    public function down()
    {
        Schema::dropIfExists('wisatas');
    }
}