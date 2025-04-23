<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPesananTable extends Migration
{
    public function up()
    {
        Schema::create('detail_pesanan', function (Blueprint $table) {
            $table->bigIncrements('id_detail'); // Primary Key

            $table->unsignedBigInteger('id_pesanan');
            $table->foreign('id_pesanan')->references('id_pesanan')->on('pesanan')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail_pesanan');
    }
}
