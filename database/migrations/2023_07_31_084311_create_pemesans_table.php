<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_wisata');
            $table->string('nama');
            $table->text('email');
            $table->date('tanggal');
            $table->text('jumlahtiket');
            $table->string('pembayaran');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_wisata')->references('id')->on('wisatas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesans');
    }
}