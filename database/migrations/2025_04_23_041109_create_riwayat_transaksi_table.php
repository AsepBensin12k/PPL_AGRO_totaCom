<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatTransaksiTable extends Migration
{
    public function up()
    {
        Schema::create('riwayat_transaksi', function (Blueprint $table) {
            $table->bigIncrements('id_riwayat'); // Primary Key

            $table->unsignedBigInteger('id_detail');
            $table->foreign('id_detail')->references('id_detail')->on('detail_pesanan')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('riwayat_transaksi');
    }
}
