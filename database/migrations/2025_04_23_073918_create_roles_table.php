<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Jalankan migrasi untuk membuat tabel 'roles'.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id('id_role'); // Menambahkan kolom id_role sebagai primary key
            $table->string('role')->unique();
            $table->timestamps();  // Bisa juga menambah kolom created_at dan updated_at jika diperlukan
        });
    }

    /**
     * Batalkan migrasi untuk menghapus tabel 'roles'.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
