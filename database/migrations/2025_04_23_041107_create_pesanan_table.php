<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananTable extends Migration
{
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id('id_pesanan'); // Primary Key
            $table->date('tanggal'); // Tanggal pesanan dibuat

            // Foreign Keys
            $table->unsignedBigInteger('id_akun');
            $table->unsignedBigInteger('id_status');
            $table->unsignedBigInteger('id_metode');
            $table->unsignedBigInteger('id_keranjang');

            // Relasi foreign key
            $table->foreign('id_akun')->references('id_akun')->on('akun')->onDelete('cascade');
            $table->foreign('id_status')->references('id_status')->on('status')->onDelete('cascade');
            $table->foreign('id_metode')->references('id_metode')->on('metode_pembayaran')->onDelete('cascade');
            $table->foreign('id_keranjang')->references('id_keranjang')->on('keranjang')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pesanan');
    }
}
