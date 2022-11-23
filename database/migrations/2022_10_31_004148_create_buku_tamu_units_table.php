<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTamuUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku_tamu_units', function (Blueprint $table) {
            $table->id('id_buku_tamu_unit');
            $table->integer('id_tamu_unit');
            $table->timestamp('cek_in');
            $table->timestamp('cek_out')->nullable();
            $table->string('no_badge')->nullable();
            $table->integer('id_user_ci');
            $table->integer('id_user_co')->nullable();
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
        Schema::dropIfExists('buku_tamu_units');
    }
}
