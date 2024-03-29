<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTamuAcarasTable extends Migration
{
    /**
     * Run the migrations.
     * =>status
     *  - 1 = tamu belum di scan / cek-in
     *  - 2 = tamu sudah di scan / cek-in
     * @return void
     */
    public function up()
    {
        Schema::create('tamu_acaras', function (Blueprint $table) {
            $table->string('id_tamu_acara')->primary();
            $table->string('nama');
            $table->string('no_telpon');
            $table->string('email');
            $table->integer('id_acara');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tamu_acaras');
    }
}
