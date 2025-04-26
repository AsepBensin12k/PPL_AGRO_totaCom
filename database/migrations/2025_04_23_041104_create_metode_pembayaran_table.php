<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetodePembayaranTable extends Migration
{
    public function up()
    {
        Schema::create('metode_pembayaran', function (Blueprint $table) {
            $table->id('id_metode'); // Primary Key
            $table->string('nama_metode')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('metode_pembayaran');
    }
}
