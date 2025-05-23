<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id('id_pesanan');
            $table->date('tanggal');

            // Foreign Keys
            $table->unsignedBigInteger('id_akun');
            $table->unsignedBigInteger('id_status');
            $table->unsignedBigInteger('id_metode');
            $table->unsignedBigInteger('id_keranjang');

            // Relasi foreign key
            $table->foreign('id_akun')->references('id_akun')->on('akuns')->onDelete('cascade');
            $table->foreign('id_status')->references('id_status')->on('statuses')->onDelete('cascade');
            $table->foreign('id_metode')->references('id_metode')->on('metode_pembayarans')->onDelete('cascade');
            $table->foreign('id_keranjang')->references('id_keranjang')->on('keranjangs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
