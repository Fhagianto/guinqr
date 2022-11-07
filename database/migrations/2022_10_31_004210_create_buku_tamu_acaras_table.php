<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTamuAcarasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku_tamu_acaras', function (Blueprint $table) {
            $table->id('id_buku_tamu_acara');
            $table->integer('id_tamu_acara');
            $table->timestamp('cek_in')->nullable();
            $table->timestamp('cek_out')->nullable();
            $table->string('no_badge');
            $table->integer('id_user');
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
        Schema::dropIfExists('buku_tamu_acaras');
    }
}