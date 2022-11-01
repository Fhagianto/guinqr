<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTamuUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamu_units', function (Blueprint $table) {
            $table->id('id_tamu_unit');
            $table->string('nama');
            $table->string('no_telpon');
            $table->string('email');
            $table->string('keperluan');
            $table->string('instansi');
            $table->integer('id_unit');
            $table->date('tgl');
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
        Schema::dropIfExists('tamu_units');
    }
}
