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
        Schema::create('riwayat_transaksies', function (Blueprint $table) {
            $table->bigIncrements('id_riwayat'); // Primary Key

            $table->unsignedBigInteger('id_detail')->unique();
            $table->foreign('id_detail')->references('id_detail')->on('detail_pesanans')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_transaksies');
    }
};
